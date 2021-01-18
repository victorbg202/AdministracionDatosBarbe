-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-01-2021 a las 16:18:43
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `admin-datos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carritoadmin`
--

CREATE TABLE `carritoadmin` (
  `idProdCarrito` int(11) NOT NULL,
  `nombreProd` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cantidad` int(255) DEFAULT NULL,
  `precio` int(25) DEFAULT NULL,
  `urlimg` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carritoyo`
--

CREATE TABLE `carritoyo` (
  `idProdCarrito` int(11) NOT NULL,
  `nombreProd` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cantidad` int(255) DEFAULT NULL,
  `precio` int(25) DEFAULT NULL,
  `urlimg` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `idCat` int(20) NOT NULL,
  `nombreCat` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idCat`, `nombreCat`) VALUES
(2, 'pantallas'),
(3, 'impresoras'),
(4, 'componentes'),
(1, 'ordenadores');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `precio` int(11) NOT NULL,
  `idCat` int(11) NOT NULL,
  `urlimg` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre`, `descripcion`, `precio`, `idCat`, `urlimg`) VALUES
(1, 'Pc 1', 'Hola, esto es un texto!', 100, 1, ''),
(2, 'Pc 2', 'Hola, esto es un texto!', 250, 1, ''),
(3, 'Pc 2', 'Hola, esto es un texto!', 300, 1, ''),
(4, 'Pc 4', 'Hola, esto es un texto!', 450, 1, ''),
(5, 'Pantalla 1', 'Hola, esto es un texto!', 150, 2, ''),
(6, 'Pantalla 2', 'Hola, esto es un texto!', 175, 2, ''),
(7, 'Pantalla 3', 'Hola, esto es un texto!', 200, 2, ''),
(8, 'Pantalla 4', 'Hola, esto es un texto!', 300, 2, ''),
(9, 'Impresora 1', 'Hola, esto es un texto!', 120, 3, ''),
(10, 'Impresora 2', 'Hola, esto es un texto!', 154, 3, ''),
(11, 'Impresora 3', 'Hola, esto es un texto!', 175, 3, ''),
(12, 'Impresora 4', 'Hola, esto es un texto!', 225, 3, ''),
(13, 'Comp 1', 'Hola, esto es un texto!', 60, 4, ''),
(14, 'Comp 2', 'Hola, esto es un texto!', 120, 4, ''),
(15, 'Comp 3', 'Hola, esto es un texto!', 75, 4, ''),
(16, 'Comp 4', 'Hola, esto es un texto!', 49, 4, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `correo`, `contrasena`, `tipo`) VALUES
(15, 'admin', 'admin', 'admin@admin.com', '$2y$10$ET1AM1iE0wsRO257l1gzvelGFhssroeO3QZHGOXFk/M.2ZfMYattW', 'admin'),
(16, 'yo', 'yo', 'hola@hola.com', '$2y$10$dY9YpXx/cmY2IdonvCiDLO9C2c5tkXWCsjPAyIrL23z/k8Kvhe77O', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carritoadmin`
--
ALTER TABLE `carritoadmin`
  ADD PRIMARY KEY (`idProdCarrito`);

--
-- Indices de la tabla `carritoyo`
--
ALTER TABLE `carritoyo`
  ADD PRIMARY KEY (`idProdCarrito`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carritoadmin`
--
ALTER TABLE `carritoadmin`
  MODIFY `idProdCarrito` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `carritoyo`
--
ALTER TABLE `carritoyo`
  MODIFY `idProdCarrito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
