<?php
namespace App\Core;

class Router
{
    protected $routes = [];

    public function get($uri, $action)
    {
        $this->routes['GET'][$uri] = $action;
    }

    public function post($uri, $action)
    {
        $this->routes['POST'][$uri] = $action;
    }

    public function dispatch()
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];

        $basePath = parse_url(BASE_URL, PHP_URL_PATH);
        $uri = str_replace($basePath, '', $uri);
        $uri = $uri ?: '/';

        if (isset($this->routes[$method])) {
            foreach ($this->routes[$method] as $route => $action) {
                $pattern = preg_replace('/\{([a-z]+)\}/', '(?P<$1>[^/]+)', $route);
                $pattern = "@^$pattern$@";

                if (preg_match($pattern, $uri, $matches)) {
                    list($controller, $method) = explode('@', $action);
                    $controllerInstance = new $controller();

                    $params = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY);
                    call_user_func_array([$controllerInstance, $method], $params);

                    return;
                }
            }
        }

        http_response_code(404);
        include __DIR__ . '/../views/errors/404.php';
        exit;
    }
}