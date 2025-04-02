CREATE SCHEMA IF NOT EXISTS G3_GESTOR_VENTAS;
USE G3_GESTOR_VENTAS;

-- 1. TIPOUSUARIO
INSERT INTO TIPOUSUARIO (nombre_tipo, descripcion) VALUES 
  ('Administrador', 'Usuario con permisos de administración'),
  ('Vendedor', 'Usuario que realiza ventas'),
  ('Supervisor', 'Usuario encargado de supervisar operaciones'),
  ('Cajero', 'Usuario que maneja la caja'),
  ('Soporte', 'Usuario de soporte técnico');

-- 4. TIPOCLIENTE
INSERT INTO TIPOCLIENTE (nombre_tipo, descripcion) VALUES
  ('PÚBLICO EN GENERAL', 'Cliente sin identificación formal'),
  ('DNI', 'Cliente identificado con DNI (8 dígitos)'),
  ('CARNET DE EXTRANJERIA', 'Cliente con carnet de extranjería (12 dígitos)'),
  ('RUC', 'Cliente con RUC (11 dígitos)'),
  ('PASAPORTE', 'Cliente identificado con pasaporte (9 dígitos)');

-- 5. CLIENTES
-- Se toma en cuenta que si el cliente es "PÚBLICO EN GENERAL" se puede dejar num_identificacion vacío.
INSERT INTO CLIENTES (num_identificacion, nombre, direccion, telefono, email, id_tipo_cliente) VALUES
  ('', 'Cliente General 1', 'Calle 1 #100', '912345678', 'cliente1@example.com', 1),
  ('12345678', 'Cliente DNI 1', 'Avenida 2 #200', '912345679', 'cliente2@example.com', 2),
  ('123456789012', 'Cliente Carnet 1', 'Calle 3 #300', '912345680', 'cliente3@example.com', 3),
  ('12345678901', 'Cliente RUC 1', 'Avenida 4 #400', '912345681', 'cliente4@example.com', 4),
  ('123456789', 'Cliente Pasaporte 1', 'Calle 5 #500', '912345682', 'cliente5@example.com', 5),
  ('', 'Cliente General 2', 'Avenida 6 #600', '912345683', 'cliente6@example.com', 1),
  ('87654321', 'Cliente DNI 2', 'Calle 7 #700', '912345684', 'cliente7@example.com', 2),
  ('210987654321', 'Cliente Carnet 2', 'Avenida 8 #800', '912345685', 'cliente8@example.com', 3),
  ('10987654321', 'Cliente RUC 2', 'Calle 9 #900', '912345686', 'cliente9@example.com', 4),
  ('987654321', 'Cliente Pasaporte 2', 'Avenida 10 #1000', '912345687', 'cliente10@example.com', 5);

-- 6. CATEGORIAS
INSERT INTO CATEGORIAS (nombre, descripcion) VALUES
  ('Electrónica', 'Productos electrónicos y gadgets'),
  ('Ropa', 'Vestimenta para hombre, mujer y niños'),
  ('Alimentos', 'Productos alimenticios y comestibles'),
  ('Hogar', 'Artículos para el hogar y decoración'),
  ('Juguetes', 'Juguetes y artículos para niños'),
  ('Deportes', 'Artículos y ropa deportiva'),
  ('Libros', 'Literatura, académicos y entretenimiento'),
  ('Muebles', 'Muebles para el hogar y oficina'),
  ('Jardinería', 'Herramientas y accesorios para jardín'),
  ('Automotriz', 'Accesorios y repuestos para vehículos');

-- 7. PROVEEDORES
INSERT INTO PROVEEDORES (nombre, email, telefono, direccion) VALUES
  ('Proveedor 1', 'proveedor1@example.com', '912300001', 'Dirección 1'),
  ('Proveedor 2', 'proveedor2@example.com', '912300002', 'Dirección 2'),
  ('Proveedor 3', 'proveedor3@example.com', '912300003', 'Dirección 3'),
  ('Proveedor 4', 'proveedor4@example.com', '912300004', 'Dirección 4'),
  ('Proveedor 5', 'proveedor5@example.com', '912300005', 'Dirección 5'),
  ('Proveedor 6', 'proveedor6@example.com', '912300006', 'Dirección 6'),
  ('Proveedor 7', 'proveedor7@example.com', '912300007', 'Dirección 7'),
  ('Proveedor 8', 'proveedor8@example.com', '912300008', 'Dirección 8'),
  ('Proveedor 9', 'proveedor9@example.com', '912300009', 'Dirección 9'),
  ('Proveedor 10', 'proveedor10@example.com', '912300010', 'Dirección 10');

-- 8. PRODUCTOS
INSERT INTO PRODUCTOS (nombre, descripcion, precio, stock, id_categoria, id_proveedor) VALUES
  ('Producto 1', 'Descripción del producto 1', 10.00, 100, 1, 1),
  ('Producto 2', 'Descripción del producto 2', 20.50, 200, 2, 2),
  ('Producto 3', 'Descripción del producto 3', 15.75, 150, 3, 3),
  ('Producto 4', 'Descripción del producto 4', 8.99, 120, 4, 4),
  ('Producto 5', 'Descripción del producto 5', 12.30, 80, 5, 5),
  ('Producto 6', 'Descripción del producto 6', 25.00, 60, 6, 6),
  ('Producto 7', 'Descripción del producto 7', 30.00, 70, 7, 7),
  ('Producto 8', 'Descripción del producto 8', 18.00, 90, 8, 8),
  ('Producto 9', 'Descripción del producto 9', 22.50, 110, 9, 9),
  ('Producto 10', 'Descripción del producto 10', 5.00, 300, 10, 10),
  ('Producto 11', 'Descripción del producto 11', 11.00, 50, 1, 2),
  ('Producto 12', 'Descripción del producto 12', 16.00, 65, 2, 3),
  ('Producto 13', 'Descripción del producto 13', 19.99, 85, 3, 4),
  ('Producto 14', 'Descripción del producto 14', 14.50, 95, 4, 5),
  ('Producto 15', 'Descripción del producto 15', 7.25, 130, 5, 6),
  ('Producto 16', 'Descripción del producto 16', 27.80, 75, 6, 7),
  ('Producto 17', 'Descripción del producto 17', 33.00, 60, 7, 8),
  ('Producto 18', 'Descripción del producto 18', 21.00, 140, 8, 9),
  ('Producto 19', 'Descripción del producto 19', 9.99, 220, 9, 10),
  ('Producto 20', 'Descripción del producto 20', 13.50, 180, 10, 1);

-- 11. METODO_PAGO
INSERT INTO METODO_PAGO (nombre_metodo, descripcion) VALUES
  ('Efectivo', 'Pago en efectivo'),
  ('Tarjeta de Crédito', 'Pago con tarjeta de crédito'),
  ('Tarjeta de Débito', 'Pago con tarjeta de débito'),
  ('Transferencia Bancaria', 'Pago mediante transferencia bancaria'),
  ('Cheque', 'Pago con cheque'),
  ('Pago Móvil', 'Pago a través de aplicaciones móviles');
