-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-12-2018 a las 06:11:20
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `libreria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abastecer`
--

CREATE TABLE `abastecer` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `total_abastecer` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `proveedor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `abastecer`
--

INSERT INTO `abastecer` (`id`, `fecha`, `total_abastecer`, `usuario_id`, `proveedor_id`) VALUES
(2, '2018-12-26', '64.00', 7, 1),
(3, '2018-12-26', '64.00', 7, 1),
(4, '2018-12-27', '3456.00', 7, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caja`
--

CREATE TABLE `caja` (
  `id` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  `transaccion` double NOT NULL,
  `fecha` date NOT NULL,
  `monto` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `estado`) VALUES
(1, 'Fontaneria', 'sins, tuberias pvc y mas ', 0),
(2, 'Electricas', 'Conexiones, switch, tomas extenciones y mas', 0),
(3, 'Construccion', 'Todo lo relasionado a contruccion', 0),
(4, 'Hogar', 'Camas y mas', 0),
(5, 'Pintura', 'Cubetas, galones, medios, cuartos y octavos', 1),
(6, 'Herramientas', 'De todo en herramientas', 1),
(7, 'Patio', 'Todo lo del patio', 0),
(8, 'Cemento', 'Gama de cemento', 0),
(9, 'Ventanas', 'Ventanales', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombres` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `apellidos` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `nit` varchar(25) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `telefono` varchar(9) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `registro` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombres`, `apellidos`, `nit`, `telefono`, `registro`, `direccion`, `estado`) VALUES
(1, 'Hugo', NULL, '123', NULL, '123', 'sm', 1),
(2, 'Zulmi Amaya', NULL, 'yy', NULL, 'rr', 'ee', 1),
(3, 'Midoriya', 'Izuku', '1217-061296-101-6', '1232-2222', '223336-8', 'Japon :v', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_abastecer`
--

CREATE TABLE `detalle_abastecer` (
  `id` int(11) NOT NULL,
  `abastecer_id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `cantidad_abastecer` float NOT NULL,
  `importe` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `detalle_abastecer`
--

INSERT INTO `detalle_abastecer` (`id`, `abastecer_id`, `producto_id`, `cantidad_abastecer`, `importe`) VALUES
(1, 2, 1, 800, 64),
(2, 3, 1, 800, 64),
(3, 4, 3, 432, 3456);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

CREATE TABLE `detalle_venta` (
  `id` int(11) NOT NULL,
  `producto_id` int(11) DEFAULT NULL,
  `venta_id` int(11) DEFAULT NULL,
  `precio` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `cantidad` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `importe` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `detalle_venta`
--

INSERT INTO `detalle_venta` (`id`, `producto_id`, `venta_id`, `precio`, `cantidad`, `importe`) VALUES
(1, 1, 1, '0.20', '20', '4.00'),
(2, 1, 6, '0.20', '', '0.20'),
(4, 1, 17, '0.20', '', '0.20'),
(5, 1, 18, '0.20', '', '0.20'),
(6, 1, 19, '0.20', '', '0.20'),
(9, 2, 22, '4', '', '4'),
(10, 1, 24, '0.12', '25', '3.00'),
(11, 1, 25, '0.15', '12', '1.80'),
(12, 1, 26, '0.15', '12', '1.80'),
(13, 1, 27, '0.15', '12', '1.80'),
(14, 3, 31, '5', '44', '220.00'),
(15, 1, 32, '0.15', '15', '1.80'),
(16, 3, 33, '5', '8', '40.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta_servicio`
--

CREATE TABLE `detalle_venta_servicio` (
  `id` int(11) NOT NULL,
  `servicio_id` int(11) NOT NULL,
  `venta_id` int(11) NOT NULL,
  `precio` float NOT NULL,
  `cantidad` float NOT NULL,
  `importe` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `detalle_venta_servicio`
--

INSERT INTO `detalle_venta_servicio` (`id`, `servicio_id`, `venta_id`, `precio`, `cantidad`, `importe`) VALUES
(1, 4, 31, 4, 3, 12),
(2, 1, 32, 1, 3, 3),
(3, 1, 33, 1, 7, 7),
(4, 1, 34, 0.2, 3, 0.2),
(5, 1, 35, 0.2, 3, 0.2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id_evento` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `fecha_i` datetime NOT NULL,
  `fecha_f` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id_marca` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id_marca`, `nombre`, `estado`) VALUES
(1, 'Pelikano', 1),
(2, 'Bic', 1),
(3, 'varios', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `link` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `menus`
--

INSERT INTO `menus` (`id`, `nombre`, `link`) VALUES
(1, 'Inicio', 'dashboard'),
(2, 'Categorias', 'mantenimiento/categorias'),
(3, 'Productos', 'mantenimiento/productos'),
(4, 'Campaña', 'mantenimiento/Campana'),
(5, 'Iniciativas', 'mantenimiento/iniciativas'),
(6, 'Oportunidades', 'mantenimiento/oportunidades'),
(7, 'Clientes', 'mantenimiento/clientes'),
(8, 'Usuario', 'mantenimiento/Usuarios'),
(9, 'Realizar Venta', 'movimientos/ventas/add'),
(10, 'Registro de Ventas', 'movimientos/ventas'),
(11, 'Reabastecer', 'movimientos/reabastecer/add'),
(12, 'Reabastecimientos', 'movimientos/reabastecer'),
(13, 'Vendedores', 'mantenimiento/Vendedores'),
(14, 'Permisos', 'mantenimiento/permisos'),
(15, 'Reclamos', 'mantenimiento/Reclamos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `rol_id` int(11) NOT NULL,
  `read` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `insert` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `update` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `delete` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id`, `menu_id`, `rol_id`, `read`, `insert`, `update`, `delete`, `estado`) VALUES
(1, 2, 1, '1', '1', '1', '1', 1),
(2, 3, 1, '1', '1', '1', '1', 1),
(3, 4, 1, '1', '1', '1', '1', 1),
(4, 5, 1, '1', '1', '1', '1', 1),
(5, 6, 1, '1', '1', '1', '1', 1),
(6, 7, 1, '1', '1', '1', '1', 1),
(7, 8, 1, '1', '1', '1', '1', 1),
(8, 9, 1, '1', '1', '1', '1', 1),
(9, 10, 1, '1', '1', '1', '1', 1),
(10, 11, 1, '1', '1', '1', '1', 1),
(11, 12, 1, '1', '1', '1', '1', 1),
(12, 13, 1, '1', '1', '1', '1', 1),
(13, 15, 1, '1', '1', '1', '1', 1),
(14, 14, 1, '1', '1', '1', '1', 1),
(15, 2, 3, '0', '0', '0', '0', 1),
(16, 3, 3, '0', '0', '0', '0', 1),
(17, 4, 3, '1', '1', '0', '0', 1),
(20, 5, 3, '1', '1', '0', '0', 1),
(21, 6, 3, '1', '1', '0', '0', 1),
(22, 7, 3, '1', '1', '0', '0', 1),
(23, 8, 3, '0', '0', '0', '0', 1),
(24, 9, 3, '1', '1', '0', '0', 1),
(25, 10, 3, '1', '1', '0', '0', 1),
(26, 11, 3, '1', '1', '0', '0', 1),
(27, 12, 3, '1', '1', '0', '0', 1),
(28, 13, 3, '1', '0', '0', '0', 1),
(29, 14, 3, '0', '0', '0', '0', 1),
(30, 15, 3, '1', '1', '1', '0', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `id_presentacion` int(11) NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `id_marca` int(11) DEFAULT NULL,
  `id_proveedor` int(11) DEFAULT NULL,
  `precio_entrada` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `precio` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `precio_mayoreo1` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `precio_mayoreo2` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `stock` int(11) DEFAULT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  `fecha_i` date NOT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `codigo`, `nombre`, `id_presentacion`, `descripcion`, `id_marca`, `id_proveedor`, `precio_entrada`, `precio`, `precio_mayoreo1`, `precio_mayoreo2`, `stock`, `categoria_id`, `fecha_i`, `estado`) VALUES
(1, '0025', 'lapicero', 3, 'negro', 2, 1, '0.08', '0.20', '0.15', '0.12', 804, 5, '2018-12-26', 1),
(2, '999', 'servicio', 2, 'servicios varios', 3, 3, '------', '------', '------', '------', 0, 4, '0000-00-00', 0),
(3, '99', 'clip', 1, 'hierro', 2, 2, '8', '5', '5', '5', 30423, 6, '2018-12-27', 1),
(5, '13234', 'cable usb', 1, 'cable usb', 2, 1, '0.35', '1.00', '0.95', '0.90', 5, 6, '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` int(11) NOT NULL,
  `nombre` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `direccion` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `nombre`, `telefono`, `direccion`, `estado`) VALUES
(1, 'disasa', '61099440', '22 calle oriente pol e casa # 2 col. esperanza San salvador', 1),
(2, 'sony', '76636542', 'sivar', 1),
(3, 'varios', '---------', '---------', 1),
(4, 'hers', '7777-2020', 'Sivar', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reclamos`
--

CREATE TABLE `reclamos` (
  `id` int(11) NOT NULL,
  `vendedor` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `producto` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `reclamo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `estado` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`, `descripcion`) VALUES
(1, 'superadmin', 'control toal'),
(2, 'admin', 'control total'),
(3, 'vendedor', 'ciertos modulos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id_servicio` int(11) NOT NULL,
  `nombre` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `descripción` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `precio` float NOT NULL,
  `precio2` float NOT NULL,
  `precio3` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id_servicio`, `nombre`, `descripción`, `precio`, `precio2`, `precio3`) VALUES
(1, 'laminación', 'con una hoja de plástico se laminan documentos', 1, 0.95, 0.9),
(2, 'fotocopias', 'se sacan copias de documentos y más', 0.05, 0.05, 0.04),
(3, 'impresiones', 'impresiones a color o blanco y negro', 0.2, 0.15, 0.13),
(4, 'anillados', 'ya se de impresiones, libros o mas', 4, 3.75, 3.5),
(5, 'refilado', 'refilación de cartuchos de impresora', 5, 4.75, 4.55);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_comprobante`
--

CREATE TABLE `tipo_comprobante` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `iva` int(11) NOT NULL,
  `serie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tipo_comprobante`
--

INSERT INTO `tipo_comprobante` (`id`, `nombre`, `cantidad`, `iva`, `serie`) VALUES
(1, 'Factura', 23, 0, 1),
(2, 'Ticket', 9, 0, 5),
(3, 'Cotizacion', 1, 0, 8),
(5, 'Credito Fiscal', 1, 13, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_presentacion`
--

CREATE TABLE `tipo_presentacion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tipo_presentacion`
--

INSERT INTO `tipo_presentacion` (`id`, `nombre`, `estado`) VALUES
(1, 'cajas', 1),
(2, 'resmas', 0),
(3, 'gruesas', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `grupo` int(11) NOT NULL,
  `nombres` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `apellidos` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `dui` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `nit` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `username` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `rol_id` int(11) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `grupo`, `nombres`, `apellidos`, `dui`, `nit`, `telefono`, `email`, `username`, `password`, `rol_id`, `estado`) VALUES
(1, 1, 'Carlos Ferminnnn', 'Padilla Ferrufino', '05431598-6', '1217-151096-102-6', '61099440', 'email@yo.com', 'Padillon', '12', 1, 0),
(2, 1, 'edward', 'her', '789987', '87879', '77594592', 'baoionz_hg@hotmail.com', 'baionz', NULL, 1, 0),
(3, 1, 'fabiola', 'garcia', '65415161', '1+56165161', '77564+498', 'fabu@hotmail.com', 'fab', NULL, 1, 0),
(4, 2, 'konny', 'amaya', '7897', '54656', '778888999', 'sama', 'liz', NULL, 3, 0),
(5, 1, 'edw', 'her', '889', '54657', '7878', '7878', 'baioz', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 1),
(6, 1, 'gustavo', 'rojas', '8989', '8889', '2648', 'rojas@jah', 'rojas', 'fc6fea5b0c058716683a5ec0cf63833ba7a72bca', 3, 1),
(7, 1, 'Ligia', 'Astrid', '7897', '456789', '789456232', 'astrid@hotmail.com', 'ingeniera', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `serie` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `subtotal` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `iva` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `descuento` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `total` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `cliente_id` int(11) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `num_documento` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `tipo_comprobante_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `fecha`, `serie`, `subtotal`, `iva`, `descuento`, `total`, `cliente_id`, `usuario_id`, `num_documento`, `tipo_comprobante_id`) VALUES
(1, '2018-12-26', '5', '31.10', '0.52', '0.00', '35.62', 1, 1, '000003', 2),
(2, '0000-00-00', '5', '0.00', '0.00', '0.00', '0.00', 2, 1, '000004', 2),
(3, '0000-00-00', '5', '100.00', '0.00', '10.00', '90.00', 2, 1, '000005', 2),
(6, '0000-00-00', '1', '0.2', '0.03', '0.00', '0.23', 1, 1, '000010', 1),
(7, '0000-00-00', '1', '40', '5.20', '0.00', '45.20', 1, 1, '000011', 1),
(17, '0000-00-00', '1', '0.2', '0.03', '0.00', '0.23', 1, 1, '000012', 1),
(18, '0000-00-00', '5', '0.2', '0.03', '0.00', '0.23', 1, 1, '000006', 2),
(19, '0000-00-00', '5', '0.2', '0.03', '0.00', '0.23', 1, 1, '000007', 2),
(20, '0000-00-00', '1', '4', '0.52', '0.00', '4.52', 1, 1, '000013', 1),
(21, '0000-00-00', '1', '4', '0.52', '0.00', '4.52', 1, 1, '000014', 1),
(22, '0000-00-00', '1', '4', '0.52', '0.00', '4.52', 1, 1, '000015', 1),
(24, '0000-00-00', '1', '2.65', '0.35', '0.25', '3.00', 1, 1, '000016', 1),
(25, '0000-00-00', '1', '1.59', '0.21', '0.00', '1.80', 1, 1, '000017', 1),
(26, '2018-12-26', '1', '1.59', '0.21', '0.00', '1.80', 1, 1, '000018', 1),
(27, '2018-12-27', '1', '8.49', '1.10', '0.00', '9.59', 1, 1, '000019', 1),
(28, '2018-12-27', '1', '14.16', '1.84', '0.00', '16.00', 3, 1, '000020', 1),
(29, '2018-12-27', '1', '14.16', '1.84', '0.00', '16.00', 3, 1, '000020', 1),
(30, '2018-12-28', '5', '204.09', '26.53', '0.00', '230.62', 2, 1, '000008', 2),
(31, '2018-12-28', '5', '204.09', '26.53', '0.00', '230.62', 2, 1, '000008', 2),
(32, '2018-12-28', '1', '3.94', '0.51', '0.00', '4.45', 3, 1, '000022', 1),
(33, '2018-12-28', '8', '40.88', '0.00', '0.00', '40.88', 2, 1, '000001', 3),
(34, '2018-12-29', '9', '0.18', '0.02', '0.00', '0.20', 1, 1, '000001', 5),
(35, '2018-12-29', '1', '0.18', '0.02', '0.00', '0.20', 1, 1, '000023', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `abastecer`
--
ALTER TABLE `abastecer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usuario_id` (`usuario_id`),
  ADD KEY `proveedor_id` (`proveedor_id`);

--
-- Indices de la tabla `caja`
--
ALTER TABLE `caja`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_UNIQUE` (`nombre`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_abastecer`
--
ALTER TABLE `detalle_abastecer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_abastecer_id` (`abastecer_id`),
  ADD KEY `fk_producto2_id` (`producto_id`);

--
-- Indices de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_venta_detalle_idx` (`venta_id`),
  ADD KEY `fk_producto_detalle_idx` (`producto_id`);

--
-- Indices de la tabla `detalle_venta_servicio`
--
ALTER TABLE `detalle_venta_servicio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_servicios_id` (`servicio_id`),
  ADD KEY `fk_ventas` (`venta_id`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id_evento`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_id` (`menu_id`),
  ADD KEY `rol_id` (`rol_id`),
  ADD KEY `menu_id_2` (`menu_id`),
  ADD KEY `rol_id_2` (`rol_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_UNIQUE` (`nombre`),
  ADD KEY `fk_categoria_producto_idx` (`categoria_id`),
  ADD KEY `id_marca` (`id_marca`),
  ADD KEY `id_proveedor` (`id_proveedor`),
  ADD KEY `id_presentacion` (`id_presentacion`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `reclamos`
--
ALTER TABLE `reclamos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_UNIQUE` (`nombre`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_servicio`);

--
-- Indices de la tabla `tipo_comprobante`
--
ALTER TABLE `tipo_comprobante`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_presentacion`
--
ALTER TABLE `tipo_presentacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD KEY `fk_rol_usuarios_idx` (`rol_id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usuario_venta_idx` (`usuario_id`),
  ADD KEY `fk_cliente_venta_idx` (`cliente_id`),
  ADD KEY `tipo_ducumento_id` (`tipo_comprobante_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `abastecer`
--
ALTER TABLE `abastecer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `detalle_abastecer`
--
ALTER TABLE `detalle_abastecer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `detalle_venta_servicio`
--
ALTER TABLE `detalle_venta_servicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `reclamos`
--
ALTER TABLE `reclamos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id_servicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tipo_comprobante`
--
ALTER TABLE `tipo_comprobante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tipo_presentacion`
--
ALTER TABLE `tipo_presentacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `abastecer`
--
ALTER TABLE `abastecer`
  ADD CONSTRAINT `abastecer_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `abastecer_ibfk_2` FOREIGN KEY (`proveedor_id`) REFERENCES `proveedor` (`id_proveedor`);

--
-- Filtros para la tabla `detalle_abastecer`
--
ALTER TABLE `detalle_abastecer`
  ADD CONSTRAINT `detalle_abastecer_ibfk_1` FOREIGN KEY (`abastecer_id`) REFERENCES `abastecer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `detalle_abastecer_ibfk_2` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD CONSTRAINT `detalle_venta_ibfk_1` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`),
  ADD CONSTRAINT `detalle_venta_ibfk_2` FOREIGN KEY (`venta_id`) REFERENCES `ventas` (`id`);

--
-- Filtros para la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD CONSTRAINT `permisos_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`),
  ADD CONSTRAINT `permisos_ibfk_2` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`),
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id_proveedor`),
  ADD CONSTRAINT `productos_ibfk_3` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id_marca`),
  ADD CONSTRAINT `productos_ibfk_4` FOREIGN KEY (`id_presentacion`) REFERENCES `tipo_presentacion` (`id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`tipo_comprobante_id`) REFERENCES `tipo_comprobante` (`id`),
  ADD CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`),
  ADD CONSTRAINT `ventas_ibfk_3` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
