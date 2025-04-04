CREATE SCHEMA IF NOT EXISTS G3_GESTOR_VENTAS;
USE G3_GESTOR_VENTAS;

-- TIPOUSUARIO
-- Procedimiento de almacenamiento que crea a un tipo usuario sin conexiones extra ni nada
-- Se puede usar aqui en el gestor para agregar un tipo nuevo de usuario
DELIMITER $$
CREATE PROCEDURE sp_crear_tipousuario
(
	IN nombre_tipo VARCHAR(100),
    IN descripcion TEXT
)
BEGIN
	INSERT INTO TIPOUSUARIO
    (
		id_tipo_usuario,
        nombre_tipo,
        descripcion
    )
    VALUES
    (
		null,
        nombre_tipo,
        descripcion
    );
END $$
DELIMITER ;

-- Visualizar todos los registros de TIPOUSUARIO
DELIMITER $$
CREATE PROCEDURE sp_visualizar_tipousuario()
BEGIN
    SELECT * FROM TIPOUSUARIO;
END $$
DELIMITER ;

-- Visualizar un registro de TIPOUSUARIO por ID
DELIMITER $$
CREATE PROCEDURE sp_visualizar_tipousuario_por_id(
    IN p_id INT
)
BEGIN
    SELECT * FROM TIPOUSUARIO WHERE id_tipo_usuario = p_id;
END $$
DELIMITER ;


-- AVATARUSUARIO
-- Procedimiento de almacenamiento que crea un avatar de usuario
-- No se puede usar aqui en el gestor, se tiene que usar en una web aparte para subir imagenes a la db
-- La web está hecha y si se desea usarla puedes clonarla desde el siguiente link: [https://github.com/LavenderEdit/AppDbConnect.git]
DELIMITER $$
CREATE PROCEDURE sp_crear_avatarusuario
(
	IN DATA_AVATAR LONGBLOB,
    IN NOMBRE_AVATAR VARCHAR(100),
    IN TIPO_AVATAR VARCHAR(10),
    IN PESO_AVATAR VARCHAR(50),
    IN DIMENSION_X_AVATAR VARCHAR(10),
    IN DIMENSION_Y_AVATAR VARCHAR(10)
)
BEGIN
	INSERT INTO AVATARUSUARIO
    (
		id_avatar_usuario,
        avatar_usuario,
        nombre_avatar,
        tipo_avatar,
        peso_avatar,
        dimension_x_avatar,
        dimension_y_avatar
    )
    VALUES
    (
		null,
        DATA_AVATAR,
        NOMBRE_AVATAR,
        TIPO_AVATAR,
        PESO_AVATAR,
        DIMENSION_X_AVATAR,
        DIMENSION_Y_AVATAR
    );
END $$
DELIMITER ;

-- Visualizar todos los registros de AVATARUSUARIO
DELIMITER $$
CREATE PROCEDURE sp_visualizar_avatarusuario()
BEGIN
    SELECT * FROM AVATARUSUARIO;
END $$
DELIMITER ;

-- Visualizar un registro de AVATARUSUARIO por ID
DELIMITER $$
CREATE PROCEDURE sp_visualizar_avatarusuario_por_id(
    IN p_id INT
)
BEGIN
    SELECT * FROM AVATARUSUARIO WHERE id_avatar_usuario = p_id;
END $$
DELIMITER ;


-- USUARIOS
-- Crea un nuevo usuario con datos basicos y elige la imagen de default subida a la default con id: 1
-- Se puede usar aqui en el gestor para agregar un usuario nuevo
DELIMITER $$
CREATE PROCEDURE sp_crear_usuarios
(
	IN NOMBRE_USUARIO VARCHAR(60),
    IN CORREO VARCHAR(80),
    IN CONTRASENIA VARCHAR(255),
    IN ID_TIPOUSUARIO INT
)
BEGIN
	INSERT INTO USUARIOS
    (
		id_usuario,
        nombre,
        correo,
        contrasenia,
        tipo_id_usuario,
        avatar_id_usuario
    )
    VALUES
    (
		null,
        NOMBRE_USUARIO,
        CORREO,
        CONTRASENIA,
        ID_TIPOUSUARIO,
        1
    );
END $$
DELIMITER ;

-- Visualizar todos los registros de USUARIOS
DELIMITER $$
CREATE PROCEDURE sp_visualizar_usuarios()
BEGIN
    SELECT * FROM USUARIOS;
END $$
DELIMITER ;

-- Visualizar un registro de USUARIOS por ID
DELIMITER $$
CREATE PROCEDURE sp_visualizar_usuarios_por_id(
    IN p_id INT
)
BEGIN
    SELECT * FROM USUARIOS WHERE id_usuario = p_id;
END $$
DELIMITER ;

-- Buscar a un usuario por correo para autenticarlos
DELIMITER $$
CREATE PROCEDURE sp_autenticar_usuarios (
    IN p_correo VARCHAR(100)
)
BEGIN
    SELECT 
        id_usuario, 
        nombre, 
        correo, 
        contrasenia, 
        tipo_id_usuario, 
        avatar_id_usuario
    FROM Usuarios
    WHERE correo = p_correo
    LIMIT 1;
END $$
DELIMITER ;


-- TIPOCLIENTE
-- Crea un nuevo tipo de cliente
-- Se puede usar aqui en el gestor para agregar un tipo de cliente nuevo
DELIMITER $$
CREATE PROCEDURE sp_crear_tipocliente
(
	TIPO_CLIENTE VARCHAR(80),
    DESCRIPCION TEXT
)
BEGIN
	INSERT INTO TIPOCLIENTE
	(
		id_tipo_cliente,
        nombre_tipo,
        descripcion
    )
	VALUES
	(
		null,
        TIPO_CLIENTE,
        DESCRIPCION
    );
END $$
DELIMITER ;

-- Visualizar todos los registros de TIPOCLIENTE
DELIMITER $$
CREATE PROCEDURE sp_visualizar_tipocliente()
BEGIN
    SELECT * FROM TIPOCLIENTE;
END $$
DELIMITER ;

-- Visualizar un registro de TIPOCLIENTE por ID
DELIMITER $$
CREATE PROCEDURE sp_visualizar_tipocliente_por_id(
    IN p_id INT
)
BEGIN
    SELECT * FROM TIPOCLIENTE WHERE id_tipo_cliente = p_id;
END $$
DELIMITER ;


-- CLIENTES
-- Crea un nuevo cliente
-- Se puede usar aqui en el gestor para agregar un cliente nuevo
DELIMITER $$
CREATE PROCEDURE sp_crear_clientes
(
	NUM_ID VARCHAR(20),
    NOMBRE VARCHAR(100),
    DIRECCION VARCHAR(100),
    TELEFONO VARCHAR(15),
    EMAIL VARCHAR(80),
    ID_TIPOCLIENTE INT
)
BEGIN
	INSERT INTO CLIENTES
	(
		id_cliente,
        num_identificacion,
        nombre,
        direccion,
        telefono,
        email,
        id_tipo_cliente
    )
	VALUES
	(
		null,
        NUM_ID,
        NOMBRE,
        DIRECCION,
        TELEFONO,
        EMAIL,
        ID_TIPOCLIENTE
    );
END $$
DELIMITER ;

-- Visualizar todos los registros de CLIENTES
DELIMITER $$
CREATE PROCEDURE sp_visualizar_clientes()
BEGIN
    SELECT * FROM CLIENTES;
END $$
DELIMITER ;

-- Visualizar un registro de CLIENTES por ID
DELIMITER $$
CREATE PROCEDURE sp_visualizar_clientes_por_id(
    IN p_id INT
)
BEGIN
    SELECT * FROM CLIENTES WHERE id_cliente = p_id;
END $$
DELIMITER ;


-- CATEGORIAS
-- Crea una nueva categoria
-- Se puede usar aqui en el gestor para agregar una nueva categoria
DELIMITER $$
CREATE PROCEDURE sp_crear_categorias
(
	CAT_NOMBRE VARCHAR(70),
    DESCRIPCION TEXT
)
BEGIN
	INSERT INTO CATEGORIAS
	(
		id_categoria,
        nombre,
        descripcion
    )
	VALUES
	(
		null,
        CAT_NOMBRE,
        DESCRIPCION
    );
END $$
DELIMITER ;

-- Visualizar todos los registros de CATEGORIAS
DELIMITER $$
CREATE PROCEDURE sp_visualizar_categorias()
BEGIN
    SELECT * FROM CATEGORIAS;
END $$
DELIMITER ;

-- Visualizar un registro de CATEGORIAS por ID
DELIMITER $$
CREATE PROCEDURE sp_visualizar_categorias_por_id(
    IN p_id INT
)
BEGIN
    SELECT * FROM CATEGORIAS WHERE id_categoria = p_id;
END $$
DELIMITER ;


-- PROVEEDORES
-- Crea un nuevo proveedor
-- Se puede usar aqui en el gestor para agregar un proveedor nuevo
DELIMITER $$
CREATE PROCEDURE sp_crear_proveedores
(
    NOMBRE VARCHAR(80),
    EMAIL VARCHAR(80),
	TELEFONO VARCHAR(15),
	DIRECCION VARCHAR(100)
)
BEGIN
	INSERT INTO PROVEEDORES
	(
		id_proveedor,
        nombre,
		email,
        telefono,
		direccion
    )
	VALUES
	(
		null,
        NOMBRE,
        EMAIL,
        TELEFONO,
        DIRECCION
    );
END $$
DELIMITER ;

-- Visualizar todos los registros de PROVEEDORES
DELIMITER $$
CREATE PROCEDURE sp_visualizar_proveedores()
BEGIN
    SELECT * FROM PROVEEDORES;
END $$
DELIMITER ;

-- Visualizar un registro de PROVEEDORES por ID
DELIMITER $$
CREATE PROCEDURE sp_visualizar_proveedores_por_id(
    IN p_id INT
)
BEGIN
    SELECT * FROM PROVEEDORES WHERE id_proveedor = p_id;
END $$
DELIMITER ;


-- PRODUCTOS
-- Crea un nuevo producto junto con sus conexiones a categoria y proveedor
-- Se puede usar aqui en el gestor para agregar un producto nuevo con sus conexiones
-- Hasta ahora solo hay 10 proveedores y 10 categorias se recomienda usar las ids del 1 hasta maximo el 10 para agregar un nuevo producto
DELIMITER $$
CREATE PROCEDURE sp_crear_productos
(
    NOMBRE VARCHAR(50),
    DESCP TEXT,
	PRECIO DECIMAL(10,2),
	STOCK INT,
    ID_CAT INT,
    ID_PROV INT
)
BEGIN
	INSERT INTO PRODUCTOS
	(
		id_producto,
        nombre,
		descripcion,
        precio,
		stock,
        id_categoria,
        id_proveedor
    )
	VALUES
	(
		null,
        NOMBRE,
        DESCP,
        PRECIO,
        STOCK,
        ID_CAT,
        ID_PROV
    );
END $$
DELIMITER ;

-- Visualizar todos los registros de PRODUCTOS
DELIMITER $$
CREATE PROCEDURE sp_visualizar_productos()
BEGIN
    SELECT * FROM PRODUCTOS;
END $$
DELIMITER ;

-- Visualizar un registro de PRODUCTOS por ID
DELIMITER $$
CREATE PROCEDURE sp_visualizar_productos_por_id(
    IN p_id INT
)
BEGIN
    SELECT * FROM PRODUCTOS WHERE id_producto = p_id;
END $$
DELIMITER ;


-- VENTAS
-- Crea una nueva venta junto con sus conexiones a cliente y usuario
-- Se puede usar aqui en el gestor para agregar una nueva venta pero verifica que haya clientes y usuarios aqui
DELIMITER $$
CREATE PROCEDURE sp_crear_ventas
(
    IN p_fecha DATETIME,
    IN p_total DECIMAL(10,2),
    IN p_id_cliente INT,
    IN p_id_usuario INT
)
BEGIN
    INSERT INTO VENTAS (fecha, total, id_cliente, id_usuario)
    VALUES (p_fecha, p_total, p_id_cliente, p_id_usuario);
END $$
DELIMITER ;

-- Visualizar todas las ventas
DELIMITER $$
CREATE PROCEDURE sp_visualizar_ventas()
BEGIN
    SELECT * FROM VENTAS;
END $$
DELIMITER ;

-- Visualizar una venta por id
DELIMITER $$
CREATE PROCEDURE sp_visualizar_ventas_por_id
(
    IN p_id INT
)
BEGIN
    SELECT * FROM VENTAS WHERE id_venta = p_id;
END $$
DELIMITER ;


-- DETALLE_VENTAS
-- Crea una nueva detalle_ventas junto con sus conexiones a venta y producto
-- Se puede usar aqui en el gestor para agregar una nueva detalle_venta pero verifica que se haya ingresado una venta y productos anteriormente
DELIMITER $$
CREATE PROCEDURE sp_crear_detalle_ventas
(
    IN p_cantidad INT,
    IN p_precio_unitario DECIMAL(10,2),
    IN p_subtotal DECIMAL(10,2),
    IN p_id_venta INT,
    IN p_id_producto INT
)
BEGIN
    INSERT INTO DETALLE_VENTAS (cantidad, precio_unitario, subtotal, id_venta, id_producto)
    VALUES (p_cantidad, p_precio_unitario, p_subtotal, p_id_venta, p_id_producto);
END $$
DELIMITER ;

-- Visualizar todos los detalles ventas
DELIMITER $$
CREATE PROCEDURE sp_visualizar_detalle_ventas()
BEGIN
    SELECT * FROM DETALLE_VENTAS;
END $$
DELIMITER ;


-- Visualizar un detalle venta por id
DELIMITER $$
CREATE PROCEDURE sp_visualizar_detalle_ventas_por_id
(
    IN p_id INT
)
BEGIN
    SELECT * FROM DETALLE_VENTAS WHERE id_detalle = p_id;
END $$
DELIMITER ;


-- METODO_PAGO
-- Crea un nuevo metodo_pago junto con sus conexiones a venta y producto
-- Se puede usar aqui en el gestor para agregar una nueva detalle_venta
DELIMITER $$
CREATE PROCEDURE sp_crear_metodo_pago
(
    IN p_nombre_metodo VARCHAR(50),
    IN p_descripcion TEXT
)
BEGIN
    INSERT INTO METODO_PAGO (nombre_metodo, descripcion)
    VALUES (p_nombre_metodo, p_descripcion);
END $$
DELIMITER ;

-- Visualizar todos los metodos de pago
DELIMITER $$
CREATE PROCEDURE sp_visualizar_metodo_pago()
BEGIN
    SELECT * FROM METODO_PAGO;
END $$
DELIMITER ;


-- Visualizar un metodo de pago por id
DELIMITER $$
CREATE PROCEDURE sp_visualizar_metodo_pago_por_id
(
    IN p_id INT
)
BEGIN
    SELECT * FROM METODO_PAGO WHERE id_metodo_pago = p_id;
END $$
DELIMITER ;


-- PAGOS
-- Crea un nuevo pago junto con sus conexiones a venta y metodo_pago
-- Se puede usar aqui en el gestor para agregar una nueva detalle_venta pero se debe revisar que haya presentes ventas y metodos de pagos en sus correspondiente tablas
DELIMITER $$
CREATE PROCEDURE sp_crear_pagos
(
    IN p_fecha_pago DATETIME,
    IN p_monto DECIMAL(10,2),
    IN p_id_venta INT,
    IN p_id_metodo_pago INT
)
BEGIN
    INSERT INTO PAGOS (fecha_pago, monto, id_venta, id_metodo_pago)
    VALUES (p_fecha_pago, p_monto, p_id_venta, p_id_metodo_pago);
END $$
DELIMITER ;

-- Visualizar todos los pagos
DELIMITER $$
CREATE PROCEDURE sp_visualizar_pagos()
BEGIN
    SELECT * FROM PAGOS;
END $$
DELIMITER ;

-- Visualizar un pago por id
DELIMITER $$
CREATE PROCEDURE sp_visualizar_pagos_por_id
(
    IN p_id INT
)
BEGIN
    SELECT * FROM PAGOS WHERE id_pago = p_id;
END $$
DELIMITER ;
