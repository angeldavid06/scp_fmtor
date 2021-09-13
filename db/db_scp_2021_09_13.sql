-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 13-09-2021 a las 16:56:20
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_scp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE `bitacora` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) DEFAULT NULL,
  `tabla` varchar(255) DEFAULT NULL,
  `accion` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`id`, `usuario`, `tabla`, `accion`, `descripcion`, `fecha`) VALUES
(3, 'admin', 't_usuarios', 'insertar', 'Se inserto un nuevo usuario', '2021-08-27'),
(4, 'admin', 't_usuarios', 'actualizar', 'Se actualizo información de un usuario', '2021-08-27'),
(5, 'admin', 't_usuarios', 'eliminar', 'Se elimino un usuario', '2021-08-27'),
(6, 'admin', 't_usuarios', 'eliminar', 'Se elimino un usuario', '2021-08-27'),
(7, 'admin', 't_usuarios', 'insertar', 'Se inserto un nuevo usuario', '2021-09-10'),
(8, 'admin', 't_usuarios', 'eliminar', 'Se elimino un usuario', '2021-09-10'),
(9, 'admin', 't_usuarios', 'insertar', 'Se inserto un nuevo usuario', '2021-09-13');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `control`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `control` (
`op` int(11)
,`dibujo` varchar(255)
,`Cliente` varchar(255)
,`fecha` date
,`cantidad` bigint(20)
,`Descripción` varchar(511)
,`Estado` varchar(255)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacion`
--

CREATE TABLE `cotizacion` (
  `id_cliente` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `clave` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `cantidad_millares` bigint(20) DEFAULT NULL,
  `precio_millar` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `ordenes`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `ordenes` (
`calibre` double
,`kilos` double
,`factor` double
,`op` int(11)
,`fecha` date
,`Cliente` varchar(255)
,`Medida` varchar(511)
,`Descripción` varchar(255)
,`Acabado` varchar(255)
,`cantidad` bigint(20)
,`precio` float
,`Total` double
,`Acumulado` int(11)
,`estado` varchar(255)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precios`
--

CREATE TABLE `precios` (
  `id` int(11) NOT NULL,
  `precio` float DEFAULT NULL,
  `herramienta` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `precios`
--

INSERT INTO `precios` (`id`, `precio`, `herramienta`) VALUES
(1, 5000, 'herramienta 1'),
(2, 7500, 'herramienta 2'),
(3, 10000, 'herramienta 3'),
(4, 12500, 'herramienta 4'),
(5, 15000, 'herramienta 5'),
(6, 17500, 'herramienta 6'),
(7, 20000, 'herramienta 7'),
(8, 22500, 'herramienta 8'),
(9, 25000, 'herramienta 9'),
(10, 27500, 'herramienta 10'),
(11, 30000, 'herramienta 11'),
(12, 32500, 'herramienta 12'),
(13, 35000, 'herramienta 13'),
(14, 37500, 'herramienta 14'),
(15, 40000, 'herramienta 15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

CREATE TABLE `reportes` (
  `id_cliente` int(11) DEFAULT NULL,
  `fecha_entrega` date DEFAULT NULL,
  `num_parte` int(11) DEFAULT NULL,
  `ub_orden_trab_sufijo` varchar(255) DEFAULT NULL,
  `cant_ordenada` int(11) DEFAULT NULL,
  `cant_recibida` int(11) DEFAULT NULL,
  `cant_abierta` int(11) DEFAULT NULL,
  `recibido_no_inspeccionado` varchar(255) DEFAULT NULL,
  `costo_unitario` float DEFAULT NULL,
  `monto_extendido` float DEFAULT NULL,
  `op` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `reporte_diario`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `reporte_diario` (
`Fecha` date
,`turno` int(11)
,`estado` varchar(255)
,`Orden_de_producción` int(11)
,`Cliente` varchar(255)
,`kilos` double
,`pzas` int(11)
,`Maquina` int(11)
,`Descripcion` text
,`observaciones` varchar(255)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salida_almacen`
--

CREATE TABLE `salida_almacen` (
  `fecha` date DEFAULT NULL,
  `parte` varchar(255) DEFAULT NULL,
  `factura` varchar(255) DEFAULT NULL,
  `empaque` varchar(255) DEFAULT NULL,
  `autorizacion` varchar(255) DEFAULT NULL,
  `despacho` varchar(255) DEFAULT NULL,
  `recibido` varchar(255) DEFAULT NULL,
  `op` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_acabados`
--

CREATE TABLE `t_acabados` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `i_e` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_acabados`
--

INSERT INTO `t_acabados` (`id`, `nombre`, `i_e`) VALUES
(1, 'GALVANIZADO', 'interno'),
(2, 'TROPICALIZADO', 'externo'),
(3, 'INOXIDABLE', 'interno'),
(4, 'PAVONADO', 'externo'),
(5, 'NIQUEL', 'interno'),
(6, 'ACERO ', 'externo'),
(7, 'ZINC ESP ', 'interno'),
(8, 'PULIDO', 'externo'),
(9, 'ZINCADO NEGRO ', 'interno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_clientes`
--

CREATE TABLE `t_clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_clientes`
--

INSERT INTO `t_clientes` (`id`, `nombre`) VALUES
(1, '581'),
(2, '227'),
(3, '198'),
(4, '198'),
(5, '169'),
(6, '152'),
(7, '129'),
(8, '24'),
(9, '417'),
(10, '810'),
(11, '1203'),
(12, '1596'),
(13, '1989'),
(14, '2382'),
(15, '2775');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_control_op`
--

CREATE TABLE `t_control_op` (
  `id` int(11) NOT NULL,
  `no_maquina` int(11) DEFAULT NULL,
  `bote` int(11) DEFAULT NULL,
  `fecha_entrega` date DEFAULT NULL,
  `pzas` int(11) DEFAULT NULL,
  `pzas_acumuladas` int(11) DEFAULT NULL,
  `kilos` double DEFAULT NULL,
  `turno` int(11) DEFAULT NULL,
  `observaciones` varchar(255) DEFAULT NULL,
  `op` int(11) DEFAULT NULL,
  `id_estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_control_op`
--

INSERT INTO `t_control_op` (`id`, `no_maquina`, `bote`, `fecha_entrega`, `pzas`, `pzas_acumuladas`, `kilos`, `turno`, `observaciones`, `op`, `id_estado`) VALUES
(1, 1, 10, '2021-08-18', 30, 563, 10, 1, 'Sin observaciones', 10786, 8),
(2, 2, 3, '2021-08-19', 24, 54, 45, 2, 'Sin observaciones', 10787, 8),
(3, 3, 4, '2021-08-20', 50, 128, 78, 1, 'Sin observaciones', 10788, 8),
(4, 4, 15, '2021-08-21', 75, 253, 30, 2, 'Sin observaciones', 10789, 8),
(5, 5, 13, '2021-08-22', 15, 343, 23, 1, 'Sin observaciones', 10790, 5),
(6, 6, 14, '2021-08-23', 100, 458, 78, 1, 'Sin observaciones', 10791, 6),
(7, 7, 16, '2021-08-24', 5, 563, 49, 2, 'Sin observaciones', 10792, 1),
(8, 8, 18, '2021-08-25', 3, 571, 61, 2, 'Sin observaciones', 10793, 2),
(9, 9, 19, '2021-08-26', 4, 578, 5, 1, 'Sin observaciones', 10794, 8),
(10, 3, 10, '2021-08-27', 30, 571, 10, 1, 'Sin observaciones', 8742, 1),
(11, 4, 3, '2021-08-28', 24, 578, 45, 2, 'Sin observaciones', 8743, 2),
(12, 5, 4, '2021-08-29', 50, 128, 78, 1, 'Sin observaciones', 8744, 3),
(13, 6, 15, '2021-08-30', 75, 253, 30, 2, 'Sin observaciones', 8745, 7),
(14, 7, 13, '2021-08-31', 15, 343, 23, 1, 'Sin observaciones', 8746, 5),
(15, 8, 14, '2021-09-01', 100, 458, 78, 1, 'Sin observaciones', 8747, 6),
(16, 9, 16, '2021-09-02', 5, 563, 49, 2, 'Sin observaciones', 8748, 7),
(17, 3, 18, '2021-09-03', 3, 128, 61, 2, 'Sin observaciones', 8749, 2),
(18, 4, 19, '2021-09-04', 4, 253, 5, 1, 'Sin observaciones', 8752, 3),
(19, 5, 10, '2021-09-05', 30, 343, 10, 1, 'Sin observaciones', 8753, 1),
(20, 6, 3, '2021-09-06', 24, 458, 45, 2, 'Sin observaciones', 8754, 2),
(21, 7, 4, '2021-09-07', 50, 563, 78, 1, 'Sin observaciones', 8755, 3),
(22, 8, 15, '2021-09-08', 75, 128, 30, 2, 'Sin observaciones', 8756, 4),
(23, 9, 13, '2021-09-09', 15, 253, 23, 1, 'Sin observaciones', 8757, 5),
(24, 3, 14, '2021-09-10', 100, 343, 78, 1, 'Sin observaciones', 8758, 6),
(25, 4, 16, '2021-09-11', 5, 458, 49, 2, 'Sin observaciones', 8759, 8),
(26, 5, 18, '2021-09-12', 3, 563, 61, 2, 'Sin observaciones', 8760, 2),
(27, 6, 19, '2021-09-13', 4, 128, 5, 1, 'Sin observaciones', 8761, 3),
(28, 7, 10, '2021-09-14', 30, 253, 10, 1, 'Sin observaciones', 8762, 1),
(29, 8, 3, '2021-09-15', 24, 343, 45, 2, 'Sin observaciones', 8763, 7),
(30, 9, 4, '2021-09-16', 50, 458, 78, 1, 'Sin observaciones', 8764, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_descripcion_tornillo`
--

CREATE TABLE `t_descripcion_tornillo` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_descripcion_tornillo`
--

INSERT INTO `t_descripcion_tornillo` (`id`, `descripcion`) VALUES
(1, 'C/FIILLL RAN'),
(2, 'C/FIJ PH T/AB'),
(3, 'C/FIJ PH'),
(4, 'C/HEX C/AI  T/23'),
(5, 'C/HEX C/AI RAN T/23'),
(6, 'C/FIJ PH T/23'),
(7, 'C/CILIN RAN PH'),
(8, 'C/CILIN PH'),
(9, 'C/PLAN PH '),
(10, 'C/FIJ PH C/AI CUELLO'),
(11, 'C/COCHE '),
(12, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_estado`
--

CREATE TABLE `t_estado` (
  `id` int(11) NOT NULL,
  `estado` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_estado`
--

INSERT INTO `t_estado` (`id`, `estado`) VALUES
(1, 'FORJADO'),
(2, 'RANURADO'),
(3, 'ROLADO'),
(4, 'SHANK'),
(5, 'CEMENTADO'),
(6, 'ACABADO'),
(7, 'CANCELADO'),
(8, 'TERMINADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_material`
--

CREATE TABLE `t_material` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `calibre` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_material`
--

INSERT INTO `t_material` (`id`, `nombre`, `calibre`) VALUES
(1, 'Alambre', 138),
(2, 'Alambre', 164),
(3, 'Alambre', 142),
(4, 'Alambre', 111),
(5, 'Alambre', 157),
(6, 'Alambre', 211),
(7, 'Alambre', 204),
(8, 'Alambre', 157),
(9, 'Alambre', 140);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_medida_tornillo`
--

CREATE TABLE `t_medida_tornillo` (
  `id` int(11) NOT NULL,
  `espesor` varchar(255) DEFAULT NULL,
  `longitud` varchar(255) DEFAULT NULL,
  `factor` double DEFAULT NULL,
  `calibre` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_medida_tornillo`
--

INSERT INTO `t_medida_tornillo` (`id`, `espesor`, `longitud`, `factor`, `calibre`) VALUES
(1, 'M5X80X 25', 'M5X80X 25', 1.45, 5.3),
(2, '4-24*11/32', '4-24*11/32', 1.45, 5.3),
(3, '1/4-24*1', '1/4-24*1', 1.45, 5.3),
(4, '8-32*1/4', '8-32*1/4', 1.45, 5.3),
(5, '10-32*1/4', '10-32*1/4', 1.45, 5.3),
(6, '10-32X400', '10-32X400', 1.45, 5.3),
(7, '1/4-20X1/2', '1/4-20X1/2', 1.45, 5.3),
(8, '1/4-20X1/2', '1/4-20X1/2', 1.45, 5.3),
(9, '1/4-20X1 1/4', '1/4-20X1 1/4', 1.45, 5.3),
(10, '1/4-20X1 1/2', '1/4-20X1 1/2', 1.45, 5.3),
(11, '1/4-20X1 ', '1/4-20X1 ', 1.45, 5.3),
(12, '5.32X1/4', '5.32X1/4', 1.45, 5.3),
(13, 'M6X100 X40', 'M6X100 X40', 1.45, 5.3),
(14, 'M6X100 X35', 'M6X100 X35', 1.45, 5.3),
(15, '10-32*1/2', '10-32*1/2', 1.45, 5.3),
(16, 'M4X70X25', 'M4X70X25', 1.45, 5.3),
(17, 'M4X70X50', 'M4X70X50', 1.45, 5.3),
(18, '1/4-20x2', '1/4-20x2', 1.45, 5.3),
(19, '6-20X1', '6-20X1', 1.45, 5.3),
(20, 'M4X70X6', 'M4X70X6', 1.45, 5.3),
(21, '10-12*20', '10-12*20', 1.45, 5.3),
(22, '6-32X5/8', '6-32X5/8', 1.45, 5.3),
(23, '8-32X3/4', '8-32X3/4', 1.45, 5.3),
(24, '1/4-14X1/2', '1/4-14X1/2', 1.45, 5.3),
(25, '4-24X1/4', '4-24X1/4', 1.45, 5.3),
(26, '4-24X1/5', '4-24X1/5', 1.45, 5.3),
(27, '4-24X1/6', '4-24X1/6', 1.45, 5.3),
(28, '4-24X1/7', '4-24X1/7', 1.45, 5.3),
(29, '4-24X1/8', '4-24X1/8', 1.45, 5.3),
(30, '4-24X1/9', '4-24X1/9', 1.45, 5.3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_op`
--

CREATE TABLE `t_op` (
  `op` int(11) NOT NULL,
  `n_pedido` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `cantidad` bigint(20) DEFAULT NULL,
  `codigo_dibujo` varchar(255) DEFAULT NULL,
  `autorizacion` varchar(255) DEFAULT NULL,
  `agente` varchar(255) DEFAULT NULL,
  `id_tornillo` int(11) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_op`
--

INSERT INTO `t_op` (`op`, `n_pedido`, `fecha`, `cantidad`, `codigo_dibujo`, `autorizacion`, `agente`, `id_tornillo`, `id_cliente`) VALUES
(8742, 0, '2018-01-08', 60, '', '', '', 10, 10),
(8743, 0, '2018-01-08', 34, '', '', '', 11, 11),
(8744, 0, '2018-01-08', 60, '', '', '', 12, 12),
(8745, 0, '2018-01-08', 22, '', '', '', 13, 13),
(8746, 0, '2018-01-08', 60, '', '', '', 14, 14),
(8747, 0, '2018-01-08', 60, '', '', '', 15, 15),
(8748, 0, '2018-01-08', 350, '', '', '', 16, 1),
(8749, 0, '2018-01-08', 60, '', '', '', 17, 2),
(8752, 0, '2018-01-08', 60, '', '', '', 18, 3),
(8753, 0, '2018-01-08', 76, '', '', '', 19, 4),
(8754, 0, '2018-01-08', 60, '', '', '', 20, 5),
(8755, 0, '2018-01-08', 15, '', '', '', 21, 6),
(8756, 0, '2018-01-08', 60, '', '', '', 22, 7),
(8757, 0, '2018-01-08', 60, '', '', '', 23, 8),
(8758, 0, '2018-01-08', 94, '', '', '', 24, 9),
(8759, 0, '2018-01-08', 60, '', '', '', 25, 10),
(8760, 0, '2018-01-08', 100, '', '', '', 26, 11),
(8761, 0, '2018-01-09', 150, '', '', '', 27, 12),
(8762, 0, '2018-01-09', 201, '', '', '', 28, 13),
(8763, 0, '2018-01-10', 60, '', '', '', 29, 14),
(8764, 0, '2018-01-11', 60, '', '', '', 30, 15),
(10786, 0, '2021-08-20', 30, '', '', '', 1, 1),
(10787, 0, '2021-08-21', 60, '', '', '', 2, 2),
(10788, 0, '2021-08-22', 30, '', '', '', 3, 3),
(10789, 0, '2021-08-23', 80, '', '', '', 4, 4),
(10790, 0, '2021-08-24', 500, '', '', '', 5, 5),
(10791, 0, '2021-08-25', 30, '', '', '', 6, 6),
(10792, 0, '2021-08-26', 30, '', '', '', 7, 7),
(10793, 0, '2021-08-27', 20, '', '', '', 8, 8),
(10794, 0, '2021-08-28', 60, '', '', '', 9, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_rol`
--

CREATE TABLE `t_rol` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_rol`
--

INSERT INTO `t_rol` (`id`, `nombre`) VALUES
(1, 'ADMINISTRADOR'),
(2, 'GENERAL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_tornillo`
--

CREATE TABLE `t_tornillo` (
  `id` int(11) NOT NULL,
  `id_descripcion` int(11) DEFAULT NULL,
  `id_acabado` int(11) DEFAULT NULL,
  `id_medida` int(11) DEFAULT NULL,
  `id_precio` int(11) DEFAULT NULL,
  `id_material` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_tornillo`
--

INSERT INTO `t_tornillo` (`id`, `id_descripcion`, `id_acabado`, `id_medida`, `id_precio`, `id_material`) VALUES
(1, 1, 1, 1, 1, 1),
(2, 2, 2, 2, 2, 2),
(3, 3, 3, 3, 3, 3),
(4, 4, 4, 4, 4, 4),
(5, 5, 5, 5, 5, 5),
(6, 6, 6, 6, 6, 6),
(7, 7, 7, 7, 7, 7),
(8, 8, 8, 8, 8, 8),
(9, 9, 9, 9, 9, 9),
(10, 10, 1, 10, 10, 1),
(11, 11, 2, 11, 11, 2),
(12, 1, 3, 12, 12, 3),
(13, 2, 4, 13, 13, 4),
(14, 3, 5, 14, 14, 5),
(15, 4, 6, 15, 15, 6),
(16, 5, 7, 16, 1, 7),
(17, 6, 8, 17, 2, 8),
(18, 7, 9, 18, 3, 9),
(19, 8, 1, 19, 4, 1),
(20, 9, 2, 20, 5, 2),
(21, 10, 3, 21, 6, 3),
(22, 11, 4, 22, 7, 4),
(23, 1, 5, 23, 8, 5),
(24, 2, 6, 24, 9, 6),
(25, 3, 7, 25, 10, 7),
(26, 4, 8, 26, 11, 8),
(27, 5, 9, 27, 12, 9),
(28, 6, 1, 28, 13, 1),
(29, 7, 2, 29, 14, 2),
(30, 8, 3, 30, 15, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_usuarios`
--

CREATE TABLE `t_usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `id_rol` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_usuarios`
--

INSERT INTO `t_usuarios` (`id`, `nombre`, `password`, `correo`, `id_rol`) VALUES
(4, 'admin', '$2y$10$30yvmTHzyEW6/GvVwBlh8ePcPOMw1J/hQOO3/CblFsaVT6cyO/SBO', 'admin@gmail.com', 1),
(13, 'pruebaFinal', '$2y$10$5wzOodmmRww5rJjAK02nfOFP/NDbDkPanuoKl14ZDD24TJ7K2j7Ba', 'prueba@gmail.com', 2),
(14, 'prueba', '$2y$10$18Bn8sAffTks2nXQkatas.YCVekoNYEAkvJNJm.YRagmfBhU99hOy', 'prueba@gmail.com', 2),
(15, 'Nuevo Usuario', '$2y$10$DIdr8ZABn61hpH5TzET85.3/uuiu1YFksgmILuAFCcUgBPnF/VWTe', 'prueba@gmail.com', 1);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `usuarios`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `usuarios` (
`id` int(11)
,`usuario` varchar(255)
,`correo` varchar(255)
,`rol` varchar(255)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `v_acabado`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `v_acabado` (
`no_maquina` int(11)
,`bote` int(11)
,`pzas` int(11)
,`fecha_entrega` date
,`pzas_acumuladas` int(11)
,`kilos` double
,`op` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `v_cementado`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `v_cementado` (
`no_maquina` int(11)
,`bote` int(11)
,`pzas` int(11)
,`fecha_entrega` date
,`pzas_acumuladas` int(11)
,`kilos` double
,`op` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `v_forjado`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `v_forjado` (
`no_maquina` int(11)
,`bote` int(11)
,`pzas` int(11)
,`fecha_entrega` date
,`pzas_acumuladas` int(11)
,`kilos` double
,`op` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `v_ranurado`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `v_ranurado` (
`no_maquina` int(11)
,`bote` int(11)
,`pzas` int(11)
,`fecha_entrega` date
,`pzas_acumuladas` int(11)
,`kilos` double
,`op` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `v_rolado`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `v_rolado` (
`no_maquina` int(11)
,`bote` int(11)
,`pzas` int(11)
,`fecha_entrega` date
,`pzas_acumuladas` int(11)
,`kilos` double
,`op` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `v_shank`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `v_shank` (
`no_maquina` int(11)
,`bote` int(11)
,`pzas` int(11)
,`fecha_entrega` date
,`pzas_acumuladas` int(11)
,`kilos` double
,`op` int(11)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `control`
--
DROP TABLE IF EXISTS `control`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `control`  AS SELECT `t_op`.`op` AS `op`, `t_op`.`codigo_dibujo` AS `dibujo`, `t_clientes`.`nombre` AS `Cliente`, `t_op`.`fecha` AS `fecha`, `t_op`.`cantidad` AS `cantidad`, concat_ws('*',`t_medida_tornillo`.`espesor`,`t_medida_tornillo`.`longitud`) AS `Descripción`, `t_estado`.`estado` AS `Estado` FROM (((((`t_op` join `t_clientes`) join `t_medida_tornillo`) join `t_control_op`) join `t_tornillo`) join `t_estado`) WHERE `t_control_op`.`op` = `t_op`.`op` AND `t_clientes`.`id` = `t_op`.`id_cliente` AND `t_op`.`id_tornillo` = `t_tornillo`.`id` AND `t_tornillo`.`id_medida` = `t_medida_tornillo`.`id` AND `t_control_op`.`id_estado` = `t_estado`.`id` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `ordenes`
--
DROP TABLE IF EXISTS `ordenes`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ordenes`  AS SELECT `t_material`.`calibre` AS `calibre`, `t_control_op`.`kilos` AS `kilos`, `t_medida_tornillo`.`factor` AS `factor`, `t_op`.`op` AS `op`, `t_op`.`fecha` AS `fecha`, `t_clientes`.`nombre` AS `Cliente`, concat_ws('*',`t_medida_tornillo`.`espesor`,`t_medida_tornillo`.`longitud`) AS `Medida`, `t_descripcion_tornillo`.`descripcion` AS `Descripción`, `t_acabados`.`nombre` AS `Acabado`, `t_op`.`cantidad` AS `cantidad`, `precios`.`precio` AS `precio`, `precios`.`precio`* `t_op`.`cantidad` AS `Total`, `t_control_op`.`pzas_acumuladas` AS `Acumulado`, `t_estado`.`estado` AS `estado` FROM (((((((((`t_material` join `t_tornillo`) join `t_control_op`) join `t_medida_tornillo`) join `t_op`) join `t_clientes`) join `t_descripcion_tornillo`) join `t_acabados`) join `precios`) join `t_estado`) WHERE `t_tornillo`.`id_material` = `t_material`.`id` AND `t_control_op`.`op` = `t_op`.`op` AND `t_tornillo`.`id_medida` = `t_medida_tornillo`.`id` AND `t_op`.`id_tornillo` = `t_tornillo`.`id` AND `t_op`.`id_cliente` = `t_clientes`.`id` AND `t_tornillo`.`id_descripcion` = `t_descripcion_tornillo`.`id` AND `t_tornillo`.`id_acabado` = `t_acabados`.`id` AND `t_tornillo`.`id_precio` = `precios`.`id` AND `t_control_op`.`id_estado` = `t_estado`.`id` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `reporte_diario`
--
DROP TABLE IF EXISTS `reporte_diario`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `reporte_diario`  AS SELECT `t_control_op`.`fecha_entrega` AS `Fecha`, `t_control_op`.`turno` AS `turno`, `t_estado`.`estado` AS `estado`, `t_op`.`op` AS `Orden_de_producción`, `t_clientes`.`nombre` AS `Cliente`, `t_control_op`.`kilos` AS `kilos`, `t_control_op`.`pzas` AS `pzas`, `t_control_op`.`no_maquina` AS `Maquina`, concat(`t_medida_tornillo`.`espesor`,'*',`t_medida_tornillo`.`longitud`,' ',`t_descripcion_tornillo`.`descripcion`) AS `Descripcion`, `t_control_op`.`observaciones` AS `observaciones` FROM ((((((`t_op` join `t_clientes`) join `t_control_op`) join `t_medida_tornillo`) join `t_descripcion_tornillo`) join `t_tornillo`) join `t_estado`) WHERE `t_op`.`op` = `t_control_op`.`op` AND `t_control_op`.`id_estado` = `t_estado`.`id` AND `t_op`.`id_cliente` = `t_clientes`.`id` AND `t_op`.`id_tornillo` = `t_tornillo`.`id` AND `t_tornillo`.`id_medida` = `t_medida_tornillo`.`id` AND `t_tornillo`.`id_descripcion` = `t_descripcion_tornillo`.`id` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `usuarios`
--
DROP TABLE IF EXISTS `usuarios`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `usuarios`  AS SELECT `t_usuarios`.`id` AS `id`, `t_usuarios`.`nombre` AS `usuario`, `t_usuarios`.`correo` AS `correo`, `t_rol`.`nombre` AS `rol` FROM (`t_usuarios` join `t_rol`) WHERE `t_usuarios`.`id_rol` = `t_rol`.`id` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `v_acabado`
--
DROP TABLE IF EXISTS `v_acabado`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_acabado`  AS SELECT `t_control_op`.`no_maquina` AS `no_maquina`, `t_control_op`.`bote` AS `bote`, `t_control_op`.`pzas` AS `pzas`, `t_control_op`.`fecha_entrega` AS `fecha_entrega`, `t_control_op`.`pzas_acumuladas` AS `pzas_acumuladas`, `t_control_op`.`kilos` AS `kilos`, `t_control_op`.`op` AS `op` FROM (`t_control_op` join `t_estado`) WHERE `t_control_op`.`id_estado` = `t_estado`.`id` AND `t_estado`.`estado` = 'ACABADO' ;

-- --------------------------------------------------------

--
-- Estructura para la vista `v_cementado`
--
DROP TABLE IF EXISTS `v_cementado`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_cementado`  AS SELECT `t_control_op`.`no_maquina` AS `no_maquina`, `t_control_op`.`bote` AS `bote`, `t_control_op`.`pzas` AS `pzas`, `t_control_op`.`fecha_entrega` AS `fecha_entrega`, `t_control_op`.`pzas_acumuladas` AS `pzas_acumuladas`, `t_control_op`.`kilos` AS `kilos`, `t_control_op`.`op` AS `op` FROM (`t_control_op` join `t_estado`) WHERE `t_control_op`.`id_estado` = `t_estado`.`id` AND `t_estado`.`estado` = 'CEMENTADO' ;

-- --------------------------------------------------------

--
-- Estructura para la vista `v_forjado`
--
DROP TABLE IF EXISTS `v_forjado`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_forjado`  AS SELECT `t_control_op`.`no_maquina` AS `no_maquina`, `t_control_op`.`bote` AS `bote`, `t_control_op`.`pzas` AS `pzas`, `t_control_op`.`fecha_entrega` AS `fecha_entrega`, `t_control_op`.`pzas_acumuladas` AS `pzas_acumuladas`, `t_control_op`.`kilos` AS `kilos`, `t_control_op`.`op` AS `op` FROM (`t_control_op` join `t_estado`) WHERE `t_control_op`.`id_estado` = `t_estado`.`id` AND `t_estado`.`estado` = 'FORJADO' ;

-- --------------------------------------------------------

--
-- Estructura para la vista `v_ranurado`
--
DROP TABLE IF EXISTS `v_ranurado`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ranurado`  AS SELECT `t_control_op`.`no_maquina` AS `no_maquina`, `t_control_op`.`bote` AS `bote`, `t_control_op`.`pzas` AS `pzas`, `t_control_op`.`fecha_entrega` AS `fecha_entrega`, `t_control_op`.`pzas_acumuladas` AS `pzas_acumuladas`, `t_control_op`.`kilos` AS `kilos`, `t_control_op`.`op` AS `op` FROM (`t_control_op` join `t_estado`) WHERE `t_control_op`.`id_estado` = `t_estado`.`id` AND `t_estado`.`estado` = 'RANURADO' ;

-- --------------------------------------------------------

--
-- Estructura para la vista `v_rolado`
--
DROP TABLE IF EXISTS `v_rolado`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_rolado`  AS SELECT `t_control_op`.`no_maquina` AS `no_maquina`, `t_control_op`.`bote` AS `bote`, `t_control_op`.`pzas` AS `pzas`, `t_control_op`.`fecha_entrega` AS `fecha_entrega`, `t_control_op`.`pzas_acumuladas` AS `pzas_acumuladas`, `t_control_op`.`kilos` AS `kilos`, `t_control_op`.`op` AS `op` FROM (`t_control_op` join `t_estado`) WHERE `t_control_op`.`id_estado` = `t_estado`.`id` AND `t_estado`.`estado` = 'ROLADO' ;

-- --------------------------------------------------------

--
-- Estructura para la vista `v_shank`
--
DROP TABLE IF EXISTS `v_shank`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_shank`  AS SELECT `t_control_op`.`no_maquina` AS `no_maquina`, `t_control_op`.`bote` AS `bote`, `t_control_op`.`pzas` AS `pzas`, `t_control_op`.`fecha_entrega` AS `fecha_entrega`, `t_control_op`.`pzas_acumuladas` AS `pzas_acumuladas`, `t_control_op`.`kilos` AS `kilos`, `t_control_op`.`op` AS `op` FROM (`t_control_op` join `t_estado`) WHERE `t_control_op`.`id_estado` = `t_estado`.`id` AND `t_estado`.`estado` = 'SHANK' ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `precios`
--
ALTER TABLE `precios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `op` (`op`);

--
-- Indices de la tabla `salida_almacen`
--
ALTER TABLE `salida_almacen`
  ADD KEY `op` (`op`);

--
-- Indices de la tabla `t_acabados`
--
ALTER TABLE `t_acabados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `t_clientes`
--
ALTER TABLE `t_clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `t_control_op`
--
ALTER TABLE `t_control_op`
  ADD PRIMARY KEY (`id`),
  ADD KEY `op` (`op`),
  ADD KEY `id_estado` (`id_estado`);

--
-- Indices de la tabla `t_descripcion_tornillo`
--
ALTER TABLE `t_descripcion_tornillo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `t_estado`
--
ALTER TABLE `t_estado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `t_material`
--
ALTER TABLE `t_material`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `t_medida_tornillo`
--
ALTER TABLE `t_medida_tornillo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `t_op`
--
ALTER TABLE `t_op`
  ADD PRIMARY KEY (`op`),
  ADD KEY `id_tornillo` (`id_tornillo`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `t_rol`
--
ALTER TABLE `t_rol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `t_tornillo`
--
ALTER TABLE `t_tornillo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_descripcion` (`id_descripcion`),
  ADD KEY `id_acabado` (`id_acabado`),
  ADD KEY `id_medida` (`id_medida`),
  ADD KEY `id_precio` (`id_precio`),
  ADD KEY `id_material` (`id_material`);

--
-- Indices de la tabla `t_usuarios`
--
ALTER TABLE `t_usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `precios`
--
ALTER TABLE `precios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `t_acabados`
--
ALTER TABLE `t_acabados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `t_clientes`
--
ALTER TABLE `t_clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `t_control_op`
--
ALTER TABLE `t_control_op`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `t_descripcion_tornillo`
--
ALTER TABLE `t_descripcion_tornillo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `t_estado`
--
ALTER TABLE `t_estado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `t_material`
--
ALTER TABLE `t_material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `t_medida_tornillo`
--
ALTER TABLE `t_medida_tornillo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `t_op`
--
ALTER TABLE `t_op`
  MODIFY `op` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10795;

--
-- AUTO_INCREMENT de la tabla `t_rol`
--
ALTER TABLE `t_rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `t_tornillo`
--
ALTER TABLE `t_tornillo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `t_usuarios`
--
ALTER TABLE `t_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  ADD CONSTRAINT `cotizacion_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `t_clientes` (`id`);

--
-- Filtros para la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD CONSTRAINT `reportes_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `t_clientes` (`id`),
  ADD CONSTRAINT `reportes_ibfk_2` FOREIGN KEY (`op`) REFERENCES `t_op` (`op`);

--
-- Filtros para la tabla `salida_almacen`
--
ALTER TABLE `salida_almacen`
  ADD CONSTRAINT `salida_almacen_ibfk_1` FOREIGN KEY (`op`) REFERENCES `t_op` (`op`);

--
-- Filtros para la tabla `t_control_op`
--
ALTER TABLE `t_control_op`
  ADD CONSTRAINT `t_control_op_ibfk_1` FOREIGN KEY (`op`) REFERENCES `t_op` (`op`),
  ADD CONSTRAINT `t_control_op_ibfk_2` FOREIGN KEY (`id_estado`) REFERENCES `t_estado` (`id`);

--
-- Filtros para la tabla `t_op`
--
ALTER TABLE `t_op`
  ADD CONSTRAINT `t_op_ibfk_1` FOREIGN KEY (`id_tornillo`) REFERENCES `t_tornillo` (`id`),
  ADD CONSTRAINT `t_op_ibfk_2` FOREIGN KEY (`id_cliente`) REFERENCES `t_clientes` (`id`);

--
-- Filtros para la tabla `t_tornillo`
--
ALTER TABLE `t_tornillo`
  ADD CONSTRAINT `t_tornillo_ibfk_1` FOREIGN KEY (`id_descripcion`) REFERENCES `t_descripcion_tornillo` (`id`),
  ADD CONSTRAINT `t_tornillo_ibfk_2` FOREIGN KEY (`id_acabado`) REFERENCES `t_acabados` (`id`),
  ADD CONSTRAINT `t_tornillo_ibfk_3` FOREIGN KEY (`id_medida`) REFERENCES `t_medida_tornillo` (`id`),
  ADD CONSTRAINT `t_tornillo_ibfk_4` FOREIGN KEY (`id_precio`) REFERENCES `precios` (`id`),
  ADD CONSTRAINT `t_tornillo_ibfk_5` FOREIGN KEY (`id_material`) REFERENCES `t_material` (`id`);

--
-- Filtros para la tabla `t_usuarios`
--
ALTER TABLE `t_usuarios`
  ADD CONSTRAINT `t_usuarios_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `t_rol` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
