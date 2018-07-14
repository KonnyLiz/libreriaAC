-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-07-2018 a las 02:01:50
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `abastecer`
--

INSERT INTO `abastecer` (`id`, `fecha`, `total_abastecer`, `usuario_id`) VALUES
(2, '2017-11-27', '250.33', 1),
(3, '2017-11-28', '0.08', 1),
(4, '2017-11-28', '0.08', 1),
(5, '2017-11-30', '24.00', 5),
(6, '2018-07-12', '440.00', 7);

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
(1, 'Fontaneria', 'sins, tuberias pvc y mas ', 1),
(2, 'Electricas', 'Conexiones, switch, tomas extenciones y mas', 1),
(3, 'Construccion', 'Todo lo relasionado a contruccion', 1),
(4, 'Hogar', 'Camas y mas', 1),
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
  `nombres` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `apellidos` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `dui` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `nit` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `registro` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `empresa` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombres`, `apellidos`, `telefono`, `dui`, `nit`, `direccion`, `registro`, `empresa`, `estado`) VALUES
(2, 'kony', '', '08098', '90809', '66', 'sm', '', '', 1),
(3, 'Hugo', '', '098', '8778', '09809', 'hj', NULL, '', 1),
(4, 'Edward', 'Hernandez', '908989', '09809090', '09809', 'Conchagua', 'ih', 'klk', 1),
(5, 'ING', 'asksk7773', '36363', '73733838', '77594592', 'San ', '34', 'chilin', 1),
(6, 'Carlos fermin ', 'Padilla Ferrufino', '61099440', '05431598-6', '16161684', 'San Miguel', '138513-0', 'Libreria', 1);

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
(3, 2, 1, 33, 0.33),
(4, 2, 2, 200, 250),
(5, 3, 1, 8, 0.08),
(6, 5, 3, 8, 24),
(7, 6, 6, 44, 440);

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
(1, 2, 3, '3.00', '3', '9.00'),
(2, 2, 5, '3.00', '1', '3.00'),
(3, 1, 7, '0.05', '5', '0.25'),
(4, 1, 8, '0.05', '4', '0.20'),
(5, 2, 9, '3.00', '4', '12.00'),
(6, 1, 10, '0.05', '5', '0.25'),
(7, 3, 11, '5.0', '8', '40.00'),
(8, 2, 11, '3.00', '9', '27.00'),
(9, 6, 12, '20.0', '1', '20.00'),
(10, 2, 13, '3.00', '4', '12.00'),
(11, 1, 14, '0.05', '6', '0.30'),
(12, 2, 14, '3.00', '2', '6.00'),
(13, 1, 15, '0.05', '5', '0.25'),
(14, 2, 16, '3.00', '3', '9.00'),
(15, 1, 17, '0.05', '98', '4.90'),
(16, 1, 18, '0.05', '100', '5.00'),
(17, 1, 19, '0.05', '3', '0.15'),
(18, 6, 20, '20.0', '22', '440.00'),
(19, 6, 21, '20.0', '3', '60.00'),
(20, 6, 23, '20.0', '5', '100.00');

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

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id_evento`, `nombre`, `fecha_i`, `fecha_f`) VALUES
(4, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'dic', '2017-12-01 00:00:00', '2017-12-01 00:00:00'),
(7, 'dic3', '2017-12-03 00:00:00', '2017-12-03 00:00:00'),
(8, 'nuevo', '2017-11-30 00:00:00', '2017-11-30 00:00:00'),
(12, 'submit', '2017-11-20 00:00:00', '2017-11-22 00:00:00'),
(13, 'wenas', '2017-11-10 00:00:00', '2017-11-13 00:00:00'),
(15, 'true', '2017-11-13 00:00:00', '2017-11-15 00:00:00'),
(16, 'reload', '2017-11-15 00:00:00', '2017-11-16 00:00:00'),
(17, 'fuera', '2017-11-16 00:00:00', '2017-11-17 00:00:00'),
(18, 'wenas45', '2017-11-15 00:00:00', '2017-11-22 00:00:00'),
(19, 'Campaña llave de ventas en curso', '2017-11-30 00:00:00', '2017-12-02 00:00:00');

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
  `descripcion` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `precio_entrada` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `precio` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `precio_mayoreo` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `stock` int(11) DEFAULT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `codigo`, `nombre`, `descripcion`, `precio_entrada`, `precio`, `precio_mayoreo`, `stock`, `categoria_id`, `estado`) VALUES
(1, '02534', 'clavos', 'clavo de hierro ferroso', '0.01', '0.05', '0.03', 782, 3, 1),
(2, '3665', 'Llave inglesa', 'Llave de tuerca', '1.25', '3.00', '2.25', 474, 1, 1),
(3, '555', 'Martillo', '', '3.0', '5.0', '4.0', 50, 1, 1),
(4, '111', 'PAPA', '', '2.0', '5.0', '3.0', 15, 1, 1),
(5, '465465', 'adsd', 'asdasdkasndñkjasndjnasdn', '2.0', '5.0', '3.0', 23, 1, 0),
(6, '0029', 'CableUTP', 'Cable bonito', '10.0', '20.0', '15.0', 118, 1, 1);

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
-- Estructura de tabla para la tabla `tipo_cliente`
--

CREATE TABLE `tipo_cliente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tipo_cliente`
--

INSERT INTO `tipo_cliente` (`id`, `nombre`, `descripcion`) VALUES
(1, 'kony', 'ghujh'),
(2, 'hugo', 'hgjhgj');

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
(1, 'Factura', 15, 13, 1),
(2, 'Ticket', 4, 13, 5),
(3, 'Cotizacion', 2, 13, 2),
(5, 'Credito Fiscal', 0, 13, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
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

INSERT INTO `usuarios` (`id`, `nombres`, `apellidos`, `dui`, `nit`, `telefono`, `email`, `username`, `password`, `rol_id`, `estado`) VALUES
(1, 'Carlos Ferminnnn', 'Padilla Ferrufino', '05431598-6', '1217-151096-102-6', '61099440', 'email@yo.com', 'Padillon', '12', 1, 0),
(2, 'edward', 'her', '789987', '87879', '77594592', 'baoionz_hg@hotmail.com', 'baionz', NULL, 1, 0),
(3, 'fabiola', 'garcia', '65415161', '1+56165161', '77564+498', 'fabu@hotmail.com', 'fab', NULL, 1, 0),
(4, 'konny', 'amaya', '7897', '54656', '778888999', 'sama', 'liz', NULL, 3, 0),
(5, 'edw', 'hernan', '889', '54657', '7878', '7878', 'baioz', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 1),
(6, 'gustavo', 'rojas', '8989', '8889', '2648', 'rojas@jah', 'rojas', 'fc6fea5b0c058716683a5ec0cf63833ba7a72bca', 3, 1),
(7, 'Ligia', 'Astrid', '7897', '456789', '789456232', 'astrid@hotmail.com', 'ingeniera', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
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
(9, '2017-11-26', '1', '12', '1.56', '0.00', '13.56', 3, 1, '000006', 1),
(10, '2017-11-28', '1', '0.25', '0.03', '0.00', '0.28', 2, 1, '000007', 1),
(11, NULL, '1', '67', '8.71', '0.00', '75.71', 4, 1, '000008', 1),
(12, NULL, '5', '20', '2.60', '0.00', '22.60', 5, 1, '000002', 2),
(13, NULL, '1', '12', '1.56', '0.00', '13.56', 4, 1, '000009', 1),
(14, NULL, '1', '6.3', '0.82', '0.00', '7.12', 4, 1, '000010', 1),
(15, NULL, '1', '0.25', '0.03', '0.00', '0.28', 6, 1, '000011', 1),
(16, NULL, '1', '9', '1.17', '0.00', '10.17', 4, 1, '000012', 1),
(17, NULL, '1', '4.9', '0.64', '0.00', '5.54', 2, 1, '000013', 1),
(18, '2018-07-12', '1', '5', '0.65', '0.00', '5.65', 3, 1, '000014', 1),
(19, '2018-07-03', '5', '0.15', '0.02', '0.00', '0.17', 6, 1, '000003', 2),
(20, '2018-07-12', '5', '440', '57.20', '0.00', '497.20', 4, 1, '000004', 2),
(21, '2018-07-12', '1', '60', '7.80', '0.00', '67.80', 3, 1, '000015', 1),
(22, '2018-07-12', '2', '0', '0.00', '0.00', '0.00', 0, 1, '000002', 0),
(23, '2018-07-12', '2', '100', '13.00', '0.00', '113.00', 4, 1, '000002', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `abastecer`
--
ALTER TABLE `abastecer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usuario_id` (`usuario_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ruc_UNIQUE` (`registro`);

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
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id_evento`);

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
  ADD KEY `fk_categoria_producto_idx` (`categoria_id`);

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
-- Indices de la tabla `tipo_cliente`
--
ALTER TABLE `tipo_cliente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `tipo_comprobante`
--
ALTER TABLE `tipo_comprobante`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_UNIQUE` (`nombre`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `detalle_abastecer`
--
ALTER TABLE `detalle_abastecer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
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
-- AUTO_INCREMENT de la tabla `tipo_cliente`
--
ALTER TABLE `tipo_cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tipo_comprobante`
--
ALTER TABLE `tipo_comprobante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `abastecer`
--
ALTER TABLE `abastecer`
  ADD CONSTRAINT `abastecer_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detalle_abastecer`
--
ALTER TABLE `detalle_abastecer`
  ADD CONSTRAINT `detalle_abastecer_ibfk_1` FOREIGN KEY (`abastecer_id`) REFERENCES `abastecer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `detalle_abastecer_ibfk_2` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
