-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2017 a las 07:29:25
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ferreteria2`
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
(4, '2017-11-28', '0.08', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campanas`
--

CREATE TABLE `campanas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `producto` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `cantidad_a_vender` int(11) DEFAULT NULL,
  `fecha_i` date NOT NULL,
  `fecha_f` date NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `campanas`
--

INSERT INTO `campanas` (`id`, `nombre`, `producto`, `cantidad_a_vender`, `fecha_i`, `fecha_f`, `estado`) VALUES
(1, 'Navidad', 'clavos', 5, '2017-11-21', '2017-11-30', 1),
(2, 'Semana Santa', '2', NULL, '2017-11-20', '2017-11-30', 1),
(3, 'Dia de los enamorados', 'clavos', NULL, '2018-02-01', '2018-02-15', 1);

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
(7, 'Patio', 'Todo lo del patio', 1),
(8, 'Cemento', 'Gama de cemento', 1),
(9, 'Ventanas', 'Ventanales', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `grupo` int(11) NOT NULL,
  `nombres` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `apellidos` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
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

INSERT INTO `clientes` (`id`, `grupo`, `nombres`, `apellidos`, `telefono`, `dui`, `nit`, `direccion`, `registro`, `empresa`, `estado`) VALUES
(2, 1, 'kony', '', '08098', '90809', '66', 'sm', '', '', 1),
(3, 0, 'Hugo', '', '098', '8778', '09809', 'hj', NULL, '', 1);

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
(5, 3, 1, 8, 0.08);

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
(6, 1, 10, '0.05', '5', '0.25');

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
(18, 'wenas45', '2017-11-15 00:00:00', '2017-11-22 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `idgrupo` int(11) NOT NULL,
  `descripcion` varchar(45) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`idgrupo`, `descripcion`) VALUES
(1, 'Grupo 1'),
(2, 'Grupo 2'),
(3, 'Grupo 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `iniciativa`
--

CREATE TABLE `iniciativa` (
  `id_iniciativa` int(11) NOT NULL,
  `grupo` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `contacto` text NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `iniciativa`
--

INSERT INTO `iniciativa` (`id_iniciativa`, `grupo`, `nombre`, `contacto`, `estado`) VALUES
(1, 1, 'Carlos Fermin Padilla Ferrufino', 'Redes', 1),
(2, 3, 'Edward Hernandez', 'Pagina web', 1);

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
(2, 'Categorias', 'categorias');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oportunidad`
--

CREATE TABLE `oportunidad` (
  `id_oportunidad` int(11) NOT NULL,
  `nombre` text CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `llamada` date NOT NULL,
  `respuesta1` text CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `reunion` date NOT NULL,
  `respuesta2` text CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `id_grupo` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `oportunidad`
--

INSERT INTO `oportunidad` (`id_oportunidad`, `nombre`, `llamada`, `respuesta1`, `reunion`, `respuesta2`, `id_grupo`, `estado`) VALUES
(1, 'Carlos Fermin Padilla Ferrufino', '2017-11-21', 'contesto', '2017-11-23', 'paso', 1, 1),
(2, '', '2017-11-22', 'jgkk', '2017-11-23', 'kh', 1, 0),
(3, 'Carlos Fermin Padilla Ferrufino', '2017-11-22', 'afgafs', '2017-11-23', 'afsvasf', 1, 1),
(4, 'Carlos Fermin Padilla Ferrufino', '2017-11-22', 'ACac', '2017-11-23', 'SDVsfv', 1, 1),
(5, 'Carlos Fermin Padilla Ferrufino', '2017-11-22', 'sfvadf', '2017-11-23', 'adfvadf', 1, 1),
(6, 'Edward Hernandez', '2017-11-23', 'j', '2017-11-24', 'mvg', 3, 1),
(7, 'Carlos Fermin Padilla Ferrufino', '2017-11-23', 'sgbsdgb', '2017-11-25', 'asdas', 1, 1),
(10, 'Edward Hernandez', '2017-11-22', 'bien', '2017-11-23', '', 1, 1),
(11, 'Carlos Fermin Padilla Ferrufino', '2017-11-22', 'asdasd', '2017-11-23', 'adsfasd', 1, 1),
(12, 'Carlos Fermin Padilla Ferrufino', '2017-11-22', 'dcasd', '2017-11-23', 'sadcas', 1, 1),
(15, 'Carlos Fermin Padilla Ferrufino', '2017-11-22', 'ASDCAS', '2017-11-23', 'ASDV', 1, 1),
(16, 'Edward Hernandez', '2017-11-22', 'vluvljhvñjbñkj', '2017-11-23', '54651616', 3, 1);

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
(12, 1, 2, '1', '0', '0', '0', 0),
(13, 1, 2, '1', '0', '0', '0', 1);

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
(1, '02534', 'clavos', 'clavo de hierro ferroso', '0.01', '0.05', '0.03', 994, 3, 1),
(2, '3665', 'Llave inglesa', 'Llave de tuerca', '1.25', '3.00', '2.25', 492, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reclamos`
--

CREATE TABLE `reclamos` (
  `id` int(11) NOT NULL,
  `vendedor` varchar(150) NOT NULL,
  `producto` varchar(45) NOT NULL,
  `reclamo` varchar(200) NOT NULL,
  `estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reclamos`
--

INSERT INTO `reclamos` (`id`, `vendedor`, `producto`, `reclamo`, `estado`) VALUES
(1, 'fabiola', 'clavos', 'bueno', 1);

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
(1, 'Factura', 7, 13, 1),
(2, 'Ticket', 1, 13, 5);

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
(1, 2, 'Carlos Ferminnnn', 'Padilla Ferrufino', '05431598-6', '1217-151096-102-6', '61099440', 'email@yo.com', 'Padillon', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 1),
(2, 1, 'edward', 'her', '789987', '87879', '77594592', 'baoionz_hg@hotmail.com', 'baionz', 'admin', 1, 1),
(3, 1, 'fabiola', 'garcia', '65415161', '1+56165161', '77564+498', 'fabu@hotmail.com', 'fab', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 1);

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
(1, '2017-11-26', '1', '15.9', NULL, '0.00', '17.97', 2, NULL, '000001', 1),
(2, '2017-11-26', '1', '0.25', '0.03', '0.00', '0.28', 2, NULL, '000002', 1),
(3, '2017-11-26', '5', '9', '1.17', '0.00', '10.17', 3, NULL, '000001', 2),
(5, '2017-11-26', '1', '3', '0.39', '0.00', '3.39', 3, NULL, '000003', 1),
(7, '2017-11-26', '1', '0.25', '0.03', '0.00', '0.28', 2, NULL, '000004', 1),
(8, '2017-11-26', '1', '0.2', '0.03', '0.00', '0.23', 3, NULL, '000005', 1),
(9, '2017-11-26', '1', '12', '1.56', '0.00', '13.56', 3, 1, '000006', 1),
(10, '2017-11-28', '1', '0.25', '0.03', '0.00', '0.28', 2, 1, '000007', 1);

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
-- Indices de la tabla `campanas`
--
ALTER TABLE `campanas`
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
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`idgrupo`),
  ADD UNIQUE KEY `descripcion` (`descripcion`);

--
-- Indices de la tabla `iniciativa`
--
ALTER TABLE `iniciativa`
  ADD PRIMARY KEY (`id_iniciativa`),
  ADD KEY `grupo` (`grupo`),
  ADD KEY `grupo_2` (`grupo`);

--
-- Indices de la tabla `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `oportunidad`
--
ALTER TABLE `oportunidad`
  ADD PRIMARY KEY (`id_oportunidad`),
  ADD KEY `id_grupo` (`id_grupo`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `campanas`
--
ALTER TABLE `campanas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `idgrupo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `iniciativa`
--
ALTER TABLE `iniciativa`
  MODIFY `id_iniciativa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `oportunidad`
--
ALTER TABLE `oportunidad`
  MODIFY `id_oportunidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `reclamos`
--
ALTER TABLE `reclamos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
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

--
-- Filtros para la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD CONSTRAINT `detalle_venta_ibfk_1` FOREIGN KEY (`venta_id`) REFERENCES `ventas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `detalle_venta_ibfk_2` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `iniciativa`
--
ALTER TABLE `iniciativa`
  ADD CONSTRAINT `iniciativa_ibfk_1` FOREIGN KEY (`grupo`) REFERENCES `grupo` (`idgrupo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `oportunidad`
--
ALTER TABLE `oportunidad`
  ADD CONSTRAINT `oportunidad_ibfk_1` FOREIGN KEY (`id_grupo`) REFERENCES `grupo` (`idgrupo`);

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
  ADD CONSTRAINT `fk_categoria_producto` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_rol_usuarios` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `fk_cliente_venta` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_venta` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`tipo_comprobante_id`) REFERENCES `tipo_comprobante` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
