CREATE TABLE `t_clientes` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `nombre` varchar(255)
);

CREATE TABLE `salida_almacen` (
  `fecha` date,
  `parte` varchar(255),
  `factura` varchar(255),
  `empaque` varchar(255),
  `autorizacion` varchar(255),
  `despacho` varchar(255),
  `recibido` varchar(255),
  `op` int
);

CREATE TABLE `cotizacion` (
  `id_cliente` int,
  `fecha` date,
  `clave` varchar(255),
  `descripcion` varchar(255),
  `cantidad_millares` bigint,
  `precio_millar` int,
  `total` int
);

CREATE TABLE `precios` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `precio` float,
  `herramienta` varchar(255)
);

CREATE TABLE `reportes` (
  `id_cliente` int,
  `fecha_entrega` date,
  `num_parte` int,
  `ub_orden_trab_sufijo` varchar(255),
  `cant_ordenada` int,
  `cant_recibida` int,
  `cant_abierta` int,
  `recibido_no_inspeccionado` varchar(255),
  `costo_unitario` float,
  `monto_extendido` float,
  `op` int
);

CREATE TABLE `t_op` (
  `op` int PRIMARY KEY AUTO_INCREMENT,
  `n_pedido` int,
  `fecha` date,
  `cantidad` bigint,
  `codigo_dibujo` varchar(255),
  `autorizacion` varchar(255),
  `agente` varchar(255),
  `id_tornillo` int,
  `id_cliente` int
);

CREATE TABLE `t_estado` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `estado` varchar(255)
);

CREATE TABLE `t_tornillo` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `id_descripcion` int,
  `id_acabado` int,
  `id_medida` int,
  `id_precio` int,
  `id_material` int
);

CREATE TABLE `t_descripcion_tornillo` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `descripcion` varchar(255)
);

CREATE TABLE `t_material` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `nombre` varchar(255),
  `calibre` double
);

CREATE TABLE `t_acabados` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `nombre` varchar(255),
  `i_e` varchar(255)
);

CREATE TABLE `t_medida_tornillo` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `espesor` varchar(255),
  `longitud` varchar(255),
  `factor` double
);

CREATE TABLE `t_control_op` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `pzas_acumuladas` int,
  `op` int,
  `id_estado` int
);

CREATE TABLE `t_registro_diario` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `no_maquina` int,
  `fecha` date,
  `botes` int,
  `pzas` int,
  `kilos` double,
  `turno` int,
  `observaciones` varchar(255),
  `id_control` int,
  `id_estado` int
);

CREATE TABLE `t_usuarios` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `nombre` varchar(255),
  `password` varchar(255),
  `correo` varchar(255),
  `id_rol` int
);

CREATE TABLE `t_rol` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `nombre` varchar(255)
);

CREATE TABLE `bitacora` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `usuario` varchar(255),
  `tabla` varchar(255),
  `accion` varchar(255),
  `descripcion` varchar(255),
  `fecha` date
);

ALTER TABLE `salida_almacen` ADD FOREIGN KEY (`op`) REFERENCES `t_op` (`op`);

ALTER TABLE `cotizacion` ADD FOREIGN KEY (`id_cliente`) REFERENCES `t_clientes` (`id`);

ALTER TABLE `reportes` ADD FOREIGN KEY (`id_cliente`) REFERENCES `t_clientes` (`id`);

ALTER TABLE `reportes` ADD FOREIGN KEY (`op`) REFERENCES `t_op` (`op`);

ALTER TABLE `t_op` ADD FOREIGN KEY (`id_tornillo`) REFERENCES `t_tornillo` (`id`);

ALTER TABLE `t_op` ADD FOREIGN KEY (`id_cliente`) REFERENCES `t_clientes` (`id`);

ALTER TABLE `t_tornillo` ADD FOREIGN KEY (`id_descripcion`) REFERENCES `t_descripcion_tornillo` (`id`);

ALTER TABLE `t_tornillo` ADD FOREIGN KEY (`id_acabado`) REFERENCES `t_acabados` (`id`);

ALTER TABLE `t_tornillo` ADD FOREIGN KEY (`id_medida`) REFERENCES `t_medida_tornillo` (`id`);

ALTER TABLE `t_tornillo` ADD FOREIGN KEY (`id_precio`) REFERENCES `precios` (`id`);

ALTER TABLE `t_tornillo` ADD FOREIGN KEY (`id_material`) REFERENCES `t_material` (`id`);

ALTER TABLE `t_control_op` ADD FOREIGN KEY (`op`) REFERENCES `t_op` (`op`);

ALTER TABLE `t_control_op` ADD FOREIGN KEY (`id_estado`) REFERENCES `t_estado` (`id`);

ALTER TABLE `t_registro_diario` ADD FOREIGN KEY (`id_control`) REFERENCES `t_control_op` (`id`);

ALTER TABLE `t_registro_diario` ADD FOREIGN KEY (`id_estado`) REFERENCES `t_estado` (`id`);

ALTER TABLE `t_usuarios` ADD FOREIGN KEY (`id_rol`) REFERENCES `t_rol` (`id`);
