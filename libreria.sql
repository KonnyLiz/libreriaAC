-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 08-01-2019 a las 22:27:00
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

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
  `transaccion` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` date NOT NULL,
  `monto` double NOT NULL,
  `saldo` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `caja`
--

INSERT INTO `caja` (`id`, `usuario`, `transaccion`, `fecha`, `monto`, `saldo`) VALUES
(1, 1, '0', '2018-12-31', 143.43, 126.93),
(2, 1, '0', '2019-01-04', 184, 310.93),
(3, 1, '0', '2019-01-04', 32, 342.93),
(4, 1, '0', '2019-01-04', 24, 366.93),
(5, 1, '0', '2019-01-04', 61, 427.93),
(6, 1, '0', '2019-01-04', 3.6, 431.53),
(7, 1, '0', '2019-01-04', 49, 480.53),
(8, 1, '0', '2019-01-04', 49.4, 529.93),
(9, 1, '0', '2019-01-05', 0.6, 530.53),
(10, 1, '0', '2019-01-05', 184, 714.53),
(11, 1, '0', '2019-01-05', 1, 715.53),
(12, 1, '0', '2019-01-05', 20, 735.53),
(13, 1, '0', '2019-01-05', 3, 738.53),
(14, 1, '2', '0000-00-00', 20, 738.53),
(15, 1, '2', '2019-01-05', 20, 738.53),
(16, 1, '2', '2019-01-05', 20, 738.53),
(17, 1, '2', '2019-01-05', 20, 718.53),
(18, 1, '2', '2019-01-05', 20, 698.53),
(19, 1, '2', '2019-01-05', 20, 678.53),
(20, 1, '2', '2019-01-05', 20, 658.53),
(21, 1, '2', '2019-01-05', 20, 638.53),
(22, 1, '2', '2019-01-06', 0.23, 638.3),
(23, 1, '2', '2019-01-06', 0.23, 638.07),
(24, 1, '2', '2019-01-06', 0.23, 637.84),
(25, 1, '2', '2019-01-06', 0.23, 637.61),
(26, 1, '2', '2019-01-06', 0.23, 637.38),
(27, 1, '2', '2019-01-06', 1, 636.38),
(28, 1, '2', '2019-01-06', 1, 635.38),
(29, 1, '2', '2019-01-06', 1, 634.38),
(30, 1, '2', '2019-01-06', 1, 633.38),
(31, 1, '2', '2019-01-06', 1, 632.38),
(32, 1, '2', '2019-01-06', 1, 631.38),
(33, 1, '2', '2019-01-06', 1, 630.38),
(34, 1, '2', '2019-01-06', 1, 629.38),
(35, 1, '2', '2019-01-06', 1, 628.38),
(36, 1, '2', '2019-01-06', 1, 627.38),
(37, 1, '2', '2019-01-06', 1, 626.38),
(38, 1, '2', '2019-01-06', 1, 625.38),
(39, 1, '2', '2019-01-06', 1, 624.38),
(40, 1, '2', '2019-01-06', 1, 623.38),
(41, 1, '2', '2019-01-06', 1, 622.38),
(42, 1, '2', '2019-01-06', 1, 621.38),
(43, 1, '2', '2019-01-06', 184, 437.38),
(44, 1, '2', '2019-01-06', 184, 253.38),
(45, 1, '2', '2019-01-06', 184, 69.38),
(46, 1, '2', '2019-01-06', 0.23, 69.15),
(47, 1, 'venta', '2019-01-06', 0.6, 69.75),
(48, 1, '2', '2019-01-06', 0.6, 69.15),
(49, 1, '2', '2019-01-06', 0.6, 68.55),
(50, 1, '2', '2019-01-06', 0.6, 67.95),
(51, 1, '2', '2019-01-08', 0.23, 67.72);

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
(1, 'Utiles Escolares', 'Lapiceros, sacaputas, borrador, etc.', 1),
(2, 'Material de Oficina', 'Engrapador, perforador, grapas, etc.', 1),
(3, 'Varierdades', 'Bolsas de regalo, tarjetas, sobres de regalo, etc.', 1),
(4, 'Libros', 'Obras, libros de texto, caligrafia, diccionarios, etc.', 1),
(5, 'Papeleria', 'Papel bond, regalo, lustre, etc.', 1),
(6, 'Tecnologia', 'Baterias, cables, fundas, etc.', 1);

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
(1, 'Hugo', NULL, '123', NULL, '123', 'sm', 0),
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
(1, 3, 42, '5', '9', '45.00'),
(2, 3, 43, '5', '8', '40.00'),
(3, 1, 43, '0.20', '6', '1.40'),
(4, 1, 44, '0.20', '3', '0.60'),
(5, 7, 45, '46', '4', '184.00'),
(6, 1, 46, '0.20', '5', '1.00'),
(7, 3, 47, '5', '4', '20.00'),
(8, 1, 49, '0.20', '3', '0.60');

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
(5, 1, 35, 0.2, 3, 0.2),
(6, 3, 36, 5, 25, 108.75),
(7, 5, 36, 0.95, 22, 18.18),
(8, 7, 37, 46, 4, 184),
(9, 4, 38, 4, 8, 32),
(10, 1, 39, 1, 2, 4),
(11, 3, 39, 5, 4, 20),
(12, 3, 40, 5, 9, 45),
(13, 4, 40, 4, 4, 16),
(14, 1, 41, 1, 3, 3),
(15, 1, 41, 0.2, 3, 0.6),
(16, 1, 42, 1, 4, 4),
(17, 1, 43, 1, 8, 8),
(18, 1, 48, 1, 1, 3);

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
(1, 'Pelikan', 1),
(2, 'Bic', 1),
(3, 'varios', 1),
(4, 'Facela', 1),
(5, 'Artline', 1),
(6, 'Studmark', 1),
(7, 'Norma', 1),
(8, 'Scribe', 1),
(9, 'Bexcelent', 1),
(10, 'Vivo', 1),
(11, 'Balboa', 1),
(12, 'Frixion', 0),
(13, 'Pilot', 1),
(14, 'Crayola', 1),
(15, 'Falcon', 1),
(16, 'Stainless', 1),
(17, 'Abro', 1),
(18, 'TUUCH', 1),
(19, 'Maped', 1),
(20, 'Greka', 1),
(21, 'Mercury', 1);

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
  `precio_entrada` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `precio` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `precio_mayoreo1` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `precio_mayoreo2` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  `fecha_i` date NOT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `codigo`, `nombre`, `id_presentacion`, `descripcion`, `id_marca`, `id_proveedor`, `precio_entrada`, `precio`, `precio_mayoreo1`, `precio_mayoreo2`, `stock`, `categoria_id`, `fecha_i`, `estado`) VALUES
(1, 'Bb01', 'Boligrafo Bic', 5, 'Boligrafo', 2, 5, '0.11', '0.20', '', '', 39, 1, '0000-00-00', 1),
(2, 'Bb02', 'Boligrafo Bic', 1, 'Boligrafo caja', 2, 5, '1.36', '1.80', '1.60', '1.50', 88, 1, '0000-00-00', 1),
(3, 'Bp01', 'Boligrafo con borrador frixion', 5, 'Boligrafo pilot', 13, 5, '1.60', '2.50', '2.10', '1.95', 72, 1, '0000-00-00', 1),
(4, 'Bz01', 'Boligrafo Zebra', 5, 'Boligrafo zebra', 3, 5, '0.65', '1.00', '1.00', '1.00', 118, 1, '0000-00-00', 1),
(5, 'Bm01', 'Boligrafo Monami', 5, 'Boligrafo', 3, 3, '0.3130', '0.50', '0.40', '0.40', 142, 1, '0000-00-00', 1),
(6, 'Lf01', 'Lapiz de carbon Facela', 5, 'Lapiz', 4, 5, '0.0756', '0.20', '0.15', '0.12', 177, 1, '0000-00-00', 1),
(7, 'Lf02', 'Lapiz de carbon Facela', 3, 'Lapiz gruesas', 4, 5, '10.8864', '13.95', '13.95', '13.95', 11, 1, '0000-00-00', 1),
(8, 'Pa01', 'Plumon 90', 5, 'Plumon', 5, 3, '0.65', '0.98', '', '', 71, 1, '0000-00-00', 1),
(9, 'Pa02', 'Plumon 509', 5, 'Plumon pizarra', 5, 3, '0.80', '1.10', '0.95', '0.95', 42, 1, '0000-00-00', 1),
(10, 'Pa03', 'Plumon 509', 1, 'Plumon pizarra', 5, 5, '9.60', '11.40', '11.40', '11.40', 3, 1, '0000-00-00', 1),
(11, 'Rp01', 'Repuesto de Parker', 5, 'Repuesto de boligrafo', 3, 3, '0.50', '2.50', '2.00', '2.00', 24, 1, '0000-00-00', 1),
(12, 'Cc01', 'Calculadora Cientifica', 5, 'Calculadora', 3, 3, '', '', '', '', 12, 1, '0000-00-00', 1),
(13, 'Pf01', 'Plumon Punto Fino Facela', 5, 'Plumon fino', 4, 5, '', '', '', '', 25, 1, '0000-00-00', 1),
(14, 'Eg01', 'Estuche geometria + compás 20cm', 5, 'Estuche geometria', 3, 3, '', '', '', '', 25, 1, '0000-00-00', 1),
(15, 'Pd01', 'Pintura de Dedo Pelikan', 5, 'Pintura de dedo', 1, 1, '', '', '', '', 15, 1, '0000-00-00', 1),
(16, 'cc02', 'Crayola Crayola', 5, 'Crayola', 14, 5, '', '', '', '', 8, 1, '0000-00-00', 1),
(17, 'Lc01', 'Lapiz de color Falcon', 5, 'Lapiz de color', 15, 5, '', '', '', '', 5, 1, '0000-00-00', 1),
(18, 'Ld01', 'Libreta de dibujo T/C', 5, 'Libreta de dibujo', 3, 3, '', '', '', '', 100, 1, '0000-00-00', 1),
(19, 'Ld02', 'Libreta de dibujo T/O', 5, 'Libreta tamaño oficio', 3, 3, '', '', '', '', 100, 1, '0000-00-00', 1),
(20, 'Vp01', 'Viñetas de precio', 5, 'Viñetas', 3, 3, '', '', '', '', 13, 2, '0000-00-00', 1),
(21, 'Bb03', 'Brillantina de bote', 5, 'Brillantina', 3, 3, '', '', '', '', 4, 1, '0000-00-00', 1),
(22, 'Cp01', 'Corrector Pinpoint', 5, 'corrector', 3, 3, '', '', '', '', 10, 1, '0000-00-00', 1),
(23, 'Tg01', 'Tijera grande #8 Stanless', 5, 'Tijeras ', 16, 3, '', '', '', '', 4, 1, '0000-00-00', 1),
(24, 'L01', 'Bollo de lana', 5, 'Bollo de lana colores', 3, 3, '', '', '', '', 7, 3, '0000-00-00', 1),
(25, 'Bp02', 'Borrador de pizarra Artline', 5, 'Borrador de pizarra', 5, 5, '', '', '', '', 10, 1, '0000-00-00', 1),
(26, 'Pg01', 'Pegamento 4oz Facela ', 5, 'Pegamento', 4, 1, '', '', '', '', 8, 1, '0000-00-00', 1),
(27, 'Pp01', 'Pegamento 4oz Pinpoit', 5, 'Pegamento', 3, 3, '', '', '', '', 8, 1, '0000-00-00', 1),
(28, 'Ta01', 'Tirro Abro 1\"', 5, 'Tirro de una pulgada', 17, 3, '', '', '', '', 8, 2, '0000-00-00', 1),
(29, 'Tg02', 'Tijera figura Greka', 5, 'Tijeras figuras', 20, 3, '', '', '', '', 9, 1, '0000-00-00', 1),
(30, 'Bf01', 'Borrador de figura', 5, 'Borrador escolar', 3, 3, '', '', '', '', 45, 1, '0000-00-00', 1),
(31, 'Sm01', 'Sacapunta de metal', 5, 'Sacapunta escolar', 3, 3, '', '', '', '', 33, 1, '0000-00-00', 1),
(32, 'Pc01', 'Paletas de colores', 5, 'paletas de color', 3, 3, '', '', '', '', 4, 3, '0000-00-00', 1),
(33, 'Ct01', 'Cutter TUUCH', 5, 'Cutter', 18, 3, '', '', '', '', 9, 2, '0000-00-00', 1),
(34, 'Sl01', 'Silicon liquido 100ml', 5, 'Silicon liquido', 3, 3, '', '', '', '', 5, 3, '0000-00-00', 1),
(35, 'Ra01', 'Regla acrilica 20cm', 5, 'regla', 3, 3, '', '', '', '', 9, 1, '0000-00-00', 1),
(36, 'Eg02', 'Estuche geometria 20cm Facela', 5, 'Estuche geometria', 4, 1, '', '', '', '', 6, 1, '0000-00-00', 1),
(37, 'Lb01', 'Lego Bolsa', 5, 'juguete', 3, 3, '', '', '', '', 1, 3, '0000-00-00', 1),
(38, 'Rm01', 'Resaltador Maped', 5, 'Resaltador o marcador flourecente', 19, 3, '', '', '', '', 5, 2, '0000-00-00', 1),
(39, 'Rm02', 'Regla con molde 15cm', 5, 'regla', 3, 3, '', '', '', '', 69, 1, '0000-00-00', 1),
(40, 'Fm01', 'Fastener metal', 5, 'Fastener', 3, 3, '', '', '', '', 17, 2, '0000-00-00', 1),
(41, 'Pc02', 'Papel T/C 25u', 1, 'papel blanco', 1, 1, '', '', '', '', 120, 1, '0000-00-00', 1),
(42, 'Pc03', 'Papel T/C color 25u', 7, 'papel color', 4, 5, '', '', '', '', 29, 1, '0000-00-00', 1),
(43, 'cd01', 'CD', 5, 'cd en blanco', 3, 3, '', '', '', '', 14, 6, '0000-00-00', 1),
(44, 'Fc01', 'Funda de carnet pequeño', 5, 'Funda', 3, 3, '', '', '', '', 22, 6, '0000-00-00', 1),
(45, 'Fc02', 'Funda de carnet grande', 5, 'Funda', 3, 3, '', '', '', '', 46, 6, '0000-00-00', 1),
(46, 'B01', 'Bateria', 5, 'Bateria', 3, 3, '', '', '', '', 6, 6, '0000-00-00', 1),
(47, 'C01', 'Clip', 1, 'clip', 3, 3, '', '', '', '', 10, 2, '0000-00-00', 1),
(48, 'G01', 'Grapas', 1, 'grapa', 6, 3, '', '', '', '', 1, 1, '0000-00-00', 1),
(49, 'Aa01', 'Almohadilla', 5, 'almohadilla', 5, 5, '', '', '', '', 1, 2, '0000-00-00', 1),
(50, 'Cb01', 'Cable android', 5, 'cable de carga y datos', 3, 3, '', '', '', '', 1, 6, '0000-00-00', 1),
(51, 'Cb02', 'Cable iPhone', 5, 'cable de carga y datos', 3, 3, '', '', '', '', 1, 6, '0000-00-00', 1),
(52, 'Ctv01', 'Control de tv', 5, 'Control de tv varios', 3, 3, '', '', '', '', 4, 6, '0000-00-00', 1),
(53, 'Fc03', 'Folder color T/C', 5, 'folder color', 4, 5, '', '', '', '', 831, 1, '0000-00-00', 1),
(54, 'Fc04', 'Folder color T/C', 1, 'folder color', 4, 5, '', '', '', '', 100, 1, '0000-00-00', 1),
(55, 'Fc05', 'Folder corriente T/C', 5, 'folder corriente', 4, 5, '', '', '', '', 595, 1, '0000-00-00', 1),
(56, 'Fc06', 'Folder corriente T/C', 1, 'folder corriente', 4, 5, '', '', '', '', 148, 1, '0000-00-00', 1),
(57, 'Pb01', 'Papel T/C base 20', 6, 'papel bond', 4, 5, '', '', '', '', 238, 5, '0000-00-00', 1),
(58, 'pb02', 'Papel T/C base 20', 1, 'papel bond', 4, 5, '', '', '', '', 24, 5, '0000-00-00', 1),
(59, 'Pb03', 'Papel base 20 pliego', 5, 'papel blanco', 4, 5, '', '', '', '', 481, 5, '0000-00-00', 1),
(60, 'Pb04', 'Papel base 20 pliego', 6, 'papel blanco', 4, 5, '', '', '', '', 9, 5, '0000-00-00', 1),
(61, 'Pl01', 'Papel lustre pliego', 5, 'papel color', 3, 3, '', '', '', '', 500, 5, '0000-00-00', 1),
(62, 'Pa04', 'Plastico adhesivo 3m', 5, 'plastico', 3, 3, '', '', '', '', 100, 1, '0000-00-00', 1),
(63, 'La01', 'Libro de actas', 5, 'Libro actas', 3, 3, '', '', '', '', 64, 4, '0000-00-00', 1),
(64, 'Lb02', 'Libro Order Book', 5, 'Libro order book', 3, 3, '', '', '', '', 8, 4, '0000-00-00', 1),
(65, 'Lt01', 'Librera Taquigrafica', 5, 'Libreta Taquigrafica', 3, 3, '', '', '', '', 173, 4, '0000-00-00', 1),
(66, 'Pf02', 'Papel foami pliego', 5, 'foami', 3, 3, '', '', '', '', 12, 5, '0000-00-00', 1),
(67, 'Pf03', 'Papel foami T/C', 5, 'foami', 3, 3, '', '', '', '', 12, 5, '0000-00-00', 1),
(68, 'Pf04', 'Papel foami brillo T/C', 5, 'foami con brillo', 3, 3, '', '', '', '', 10, 5, '0000-00-00', 1),
(69, 'Sm02', 'Sobre de manila 9x12', 5, 'sobres', 3, 3, '', '', '', '', 188, 2, '0000-00-00', 1),
(70, 'Sm03', 'Sobre de manila 9x12', 7, 'sobres', 3, 3, '', '', '', '', 3, 2, '0000-00-00', 1),
(71, 'Sm04', 'Sobre de manila 10x13', 5, 'sobres', 3, 3, '', '', '', '', 289, 2, '0000-00-00', 1),
(72, 'Sm05', 'Sobre de manila 10x13', 7, 'Sobre', 3, 3, '', '', '', '', 2, 2, '0000-00-00', 1),
(73, 'Ce01', 'Calculadora escritorio', 5, 'Calculadora', 3, 3, '', '10.00', '', '', 11, 2, '0000-00-00', 1),
(74, 'Cm01', 'Calculadora mediana HL815L', 5, 'Calculadora', 3, 3, '', '5.50', '', '', 6, 2, '0000-00-00', 1),
(75, 'Cm02', 'Calculadora mediana HL820', 5, 'Calculadora', 3, 3, '', '5.00', '', '', 12, 2, '0000-00-00', 1),
(76, 'Cm03', 'Calculadora mediana HL4A', 5, 'Calculadora', 3, 3, '', '4.50', '', '', 12, 2, '0000-00-00', 1),
(77, 'So01', 'Sobres T/O', 5, 'sobres', 3, 3, '', '0.10', '', '', 1000, 2, '0000-00-00', 1),
(78, 'So02', 'Sobres T/O', 1, 'sobres', 3, 3, '', '32.00', '', '', 3, 2, '0000-00-00', 1),
(79, 'Sc01', 'Sobres T/C', 5, 'sobres', 3, 3, '', '0.05', '', '', 988, 2, '0000-00-00', 1),
(80, 'Sc02', 'Sobres T/C', 1, 'sobres', 3, 3, '', '19.50', '', '', 1, 2, '0000-00-00', 1),
(81, 'Lc02', 'Lapiz de color largo 12u Facela', 5, 'Lapiz de color', 4, 5, '', '2.75', '', '', 50, 1, '0000-00-00', 1),
(82, 'Lc03', 'Lapiz de color 12u Mercury', 5, 'Lapiz de color', 21, 5, '', '2.95', '', '', 50, 1, '0000-00-00', 1),
(83, 'Pf05', 'Plastilina Facela', 5, 'plastilina', 4, 5, '', '1.00', '', '', 100, 1, '0000-00-00', 1),
(84, 'Cf01', 'Crayola delgada Facela', 5, 'crayola', 4, 5, '', '1.50', '', '', 66, 1, '0000-00-00', 1),
(85, 'Ls01', 'Libro Sembrador #2', 5, 'Libro sembrador', 3, 3, '', '', '', '', 18, 4, '0000-00-00', 1),
(86, 'Ls02', 'Libro Sembrador #3', 5, 'Libro sembrador', 3, 3, '', '', '', '', 10, 4, '0000-00-00', 1),
(87, 'Ls03', 'Libro Sembrador #4', 5, 'Libro sembrador', 3, 3, '', '', '', '', 13, 4, '0000-00-00', 1),
(88, 'Ls04', 'Libro Sembrador #5', 5, 'Libro sembrador', 3, 3, '', '', '', '', 4, 4, '0000-00-00', 1),
(89, 'Ls05', 'Libro Sembrador #6', 5, 'Libro sembrador', 3, 3, '', '', '', '', 9, 4, '0000-00-00', 1),
(90, 'Bb04', 'Biblia letra super gigante', 5, 'biblia', 3, 3, '', '', '', '', 1, 4, '0000-00-00', 1),
(91, 'Bb05', 'Biblia plastificada piel', 5, 'biblia', 3, 3, '', '', '', '', 1, 4, '0000-00-00', 1),
(92, 'Bb06 ', 'Biblia promesa c/forro', 5, 'biblia', 3, 3, '', '', '', '', 1, 4, '0000-00-00', 1),
(93, 'Dc01', 'Diccionario Iter sopema', 5, 'diccionario', 3, 3, '', '', '', '', 2, 4, '0000-00-00', 1),
(94, 'O01', 'Obra El señor presiente', 5, 'Obra', 3, 3, '', '', '', '', 2, 4, '0000-00-00', 1),
(95, 'O02', 'Obra Una sombra diferente', 5, 'Obra', 3, 3, '', '', '', '', 1, 4, '0000-00-00', 1),
(96, 'O03', 'Obra Las troyanas', 5, 'Obra', 3, 3, '', '', '', '', 1, 4, '0000-00-00', 1),
(97, 'O04', 'Obra Juan Salvador Gaviota', 5, 'Obra', 3, 3, '', '', '', '', 1, 4, '0000-00-00', 1),
(98, 'O05', 'Coloreo', 5, 'libro', 3, 3, '', '', '', '', 9, 4, '0000-00-00', 1),
(99, 'C02', 'Cuentos', 5, 'Libro', 3, 3, '', '', '', '', 3, 4, '0000-00-00', 1),
(100, 'Cr01', 'Cuadernilla rayada', 5, 'cuadernilla', 3, 3, '', '', '', '', 176, 5, '0000-00-00', 1),
(101, 'Cr02', 'Cuadernilla rayada', 6, 'cuadernilla', 3, 3, '', '', '', '', 10, 5, '0000-00-00', 1),
(102, 'Cc03', 'Cuadernilla cuadro', 5, 'cuadernilla', 3, 3, '', '', '', '', 19, 5, '0000-00-00', 1),
(103, 'Cc04', 'Cuadernilla cuadro', 6, 'cuadernilla', 3, 3, '', '', '', '', 12, 5, '0000-00-00', 1),
(104, 'Pr01', 'Papel de regalo corriente', 5, '', 3, 3, '', '', '', '', 19, 5, '0000-00-00', 1),
(105, 'Cr03', 'Cartulina Iris', 5, 'cartulina', 3, 3, '', '', '', '', 22, 5, '0000-00-00', 1),
(106, 'Cl01', 'Cartulina lustre', 5, 'cartulina', 3, 3, '', '', '', '', 2, 5, '0000-00-00', 1),
(107, 'Pc04', 'Papel crespon', 1, 'crespon', 1, 1, '', '', '', '', 17, 1, '0000-00-00', 1),
(108, 'Pc05', 'Papel china', 5, 'china', 3, 3, '', '', '', '', 125, 5, '0000-00-00', 1);

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
(4, 'hers', '7777-2020', 'Sivar', 0),
(5, 'Dquisa', '-----', 'San Salvador', 1);

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
  `id_presentacion` int(11) NOT NULL,
  `descripción` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `precio` float NOT NULL,
  `precio2` float NOT NULL,
  `precio3` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id_servicio`, `nombre`, `id_presentacion`, `descripción`, `precio`, `precio2`, `precio3`) VALUES
(1, 'laminacion', 4, 'laminado', 1, 0.95, 0.9),
(2, 'fotocopias', 4, 'fotocopias', 0.05, 0.05, 0.04),
(3, 'impresiones', 4, 'impresion', 0.2, 0.15, 0.13),
(4, 'anillados', 4, 'anillado', 4, 3.75, 3.5),
(5, 'refilado', 4, 'lol', 5, 4.75, 4.55);

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
(1, 'Factura', 27, 0, 1),
(2, 'Ticket', 18, 0, 5),
(3, 'Cotizacion', 1, 0, 8),
(5, 'Credito Fiscal', 2, 13, 9);

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
(3, 'gruesas', 1),
(4, 'Servicio', 1),
(5, 'unidad', 1),
(6, 'resma', 1),
(7, 'paquete', 1),
(8, 'blister', 1);

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
  `tipo_comprobante_id` int(11) NOT NULL,
  `estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `fecha`, `serie`, `subtotal`, `iva`, `descuento`, `total`, `cliente_id`, `usuario_id`, `num_documento`, `tipo_comprobante_id`, `estado`) VALUES
(1, '2018-12-26', '5', '31.10', '0.52', '0.00', '35.62', 1, 1, '000003', 2, 0),
(2, '0000-00-00', '5', '0.00', '0.00', '0.00', '0.00', 2, 1, '000004', 2, 0),
(3, '0000-00-00', '5', '100.00', '0.00', '10.00', '90.00', 2, 1, '000005', 2, 0),
(6, '0000-00-00', '1', '0.2', '0.03', '0.00', '0.23', 1, 1, '000010', 1, 0),
(7, '0000-00-00', '1', '40', '5.20', '0.00', '45.20', 1, 1, '000011', 1, 0),
(17, '0000-00-00', '1', '0.2', '0.03', '0.00', '0.23', 1, 1, '000012', 1, 1),
(18, '0000-00-00', '5', '0.2', '0.03', '0.00', '0.23', 1, 1, '000006', 2, 1),
(19, '0000-00-00', '5', '0.2', '0.03', '0.00', '0.23', 1, 1, '000007', 2, 1),
(20, '0000-00-00', '1', '4', '0.52', '0.00', '4.52', 1, 1, '000013', 1, 1),
(21, '0000-00-00', '1', '4', '0.52', '0.00', '4.52', 1, 1, '000014', 1, 1),
(22, '0000-00-00', '1', '4', '0.52', '0.00', '4.52', 1, 1, '000015', 1, 1),
(24, '0000-00-00', '1', '2.65', '0.35', '0.25', '', 1, 1, '000016', 1, 0),
(25, '0000-00-00', '1', '1.59', '0.21', '0.00', '1.80', 1, 1, '000017', 1, 0),
(26, '2018-12-26', '1', '1.59', '0.21', '0.00', '1.80', 1, 1, '000018', 1, 0),
(27, '2018-12-27', '1', '8.49', '1.10', '0.00', '9.59', 1, 1, '000019', 1, 0),
(28, '2018-12-27', '1', '14.16', '1.84', '0.00', '16.00', 3, 1, '000020', 1, 0),
(29, '2018-12-27', '1', '14.16', '1.84', '0.00', '16.00', 3, 1, '000020', 1, 0),
(30, '2018-12-28', '5', '204.09', '26.53', '0.00', '230.62', 2, 1, '000008', 2, 0),
(31, '2018-12-28', '5', '204.09', '26.53', '0.00', '230.62', 2, 1, '000008', 2, 0),
(32, '2018-12-28', '1', '3.94', '0.51', '0.00', '4.45', 3, 1, '000022', 1, 0),
(33, '2018-12-28', '8', '40.88', '0.00', '0.00', '40.88', 2, 1, '000001', 3, 0),
(34, '2018-12-29', '9', '0.18', '0.02', '0.00', '0.20', 1, 1, '000001', 5, 0),
(35, '2018-12-29', '1', '0.18', '0.02', '0.00', '0.20', 1, 1, '000023', 1, 0),
(36, '2018-12-31', '9', '126.93', '16.50', '0.00', '143.43', 2, 1, '000002', 5, 0),
(37, '2019-01-04', '5', '184', '0.00', '0.00', '184.00', 2, 1, '000010', 2, 0),
(38, '2019-01-04', '1', '32', '0.00', '0.00', '32.00', 3, 1, '000024', 1, 0),
(39, '2019-01-04', '5', '24', '0.00', '0.00', '24.00', 3, 1, '000011', 2, 0),
(40, '2019-01-04', '1', '61', '0.00', '0.00', '61.00', 1, 1, '000025', 1, 0),
(41, '2019-01-04', '1', '3.6', '0.00', '0.00', '3.60', 2, 1, '000026', 1, 0),
(42, '2019-01-04', '5', '49', '0.00', '0.00', '49.00', 2, 1, '000012', 2, 0),
(43, '2019-01-04', '1', '49.4', '0.00', '0.00', '49.40', 3, 1, '000027', 1, 0),
(44, '2019-01-05', '5', '0.6', '0.00', '0.00', '0.60', 2, 1, '000013', 2, 1),
(45, '2019-01-05', '5', '184', '0.00', '0.00', '184.00', 2, 1, '000014', 2, 1),
(46, '2019-01-05', '5', '1', '0.00', '0.00', '1.00', 3, 1, '000015', 2, 1),
(47, '2019-01-05', '5', '20', '0.00', '0.00', '20.00', 3, 1, '000016', 2, 1),
(48, '2019-01-05', '5', '3', '0.00', '0.00', '3.00', 2, 1, '000017', 2, 1),
(49, '2019-01-06', '5', '0.6', '0.00', '0.00', '0.60', 2, 1, '000018', 2, 1);

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
  ADD PRIMARY KEY (`id_servicio`),
  ADD KEY `id_presentacion` (`id_presentacion`),
  ADD KEY `id_presentacion_2` (`id_presentacion`);

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
-- AUTO_INCREMENT de la tabla `caja`
--
ALTER TABLE `caja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `detalle_venta_servicio`
--
ALTER TABLE `detalle_venta_servicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

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
-- Filtros para la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD CONSTRAINT `servicios_ibfk_1` FOREIGN KEY (`id_presentacion`) REFERENCES `tipo_presentacion` (`id`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
