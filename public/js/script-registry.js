import { togglePasswordVisibility } from "./script-functions.js";

export function runComponentRegistry() {
  const path = window.location.pathname;
  const pageName = path.substring(path.lastIndexOf("/") + 1);

  switch (pageName) {
    case "login.php":
        togglePasswordVisibility();
      break;
    default:
      break;
  }
}
