-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-09-2023 a las 18:47:40
-- Versión del servidor: 11.1.0-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cocoteca`
--
CREATE DATABASE IF NOT EXISTS `cocoteca` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cocoteca`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carritos`
--

CREATE TABLE `carritos` (
  `id` bigint(20) NOT NULL,
  `fechaPedido` date DEFAULT NULL,
  `fechaEntrega` date DEFAULT NULL,
  `descuentos` int(11) DEFAULT NULL,
  `subtotal` int(11) DEFAULT NULL,
  `impuestos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carritos`
--

INSERT INTO `carritos` (`id`, `fechaPedido`, `fechaEntrega`, `descuentos`, `subtotal`, `impuestos`) VALUES
(6, '2023-05-16', '2023-05-23', 0, 566, 119),
(12, '2023-06-19', '2023-06-26', 0, 2285, 480),
(14, '2023-06-19', '2023-06-26', 0, 50, 11),
(15, '2023-06-19', '2023-06-26', 0, 457, 96);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` bigint(20) NOT NULL,
  `portada` varchar(50) DEFAULT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `autor` varchar(50) DEFAULT NULL,
  `editorial` varchar(50) DEFAULT NULL,
  `genero` varchar(50) DEFAULT NULL,
  `precio` bigint(20) DEFAULT NULL,
  `paginas` int(6) DEFAULT NULL,
  `isbn` varchar(50) DEFAULT NULL,
  `fechaPubli` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `portada`, `titulo`, `autor`, `editorial`, `genero`, `precio`, `paginas`, `isbn`, `fechaPubli`) VALUES
(1, 'producto1.jpg', '9 Hábitos Japoneses: Que Cambiarán Tu Vida', 'Andrea Rodríguez', 'Audible', 'Educación financiera', 283, 81, '09798737425562', '2015-05-07'),
(2, 'producto2.jpg', 'Harry Potter y la piedra filosofal', 'J. K Rowling', 'Penguin Random House', 'Fantasía', 649, 264, '978-6073193894', '2013-05-11'),
(4, 'producto4.jpg', 'El camino de los reyes', 'Brandon Sanderson', 'Ediciones B México;', 'Fantasía', 695, 1200, '978-8466657662', '2013-05-24'),
(5, 'producto5.jpg', 'El Imperio Final', 'Brandon Sanderson', 'Penguin Random House', 'Fantasía', 457, 672, '978-8417347291', '2019-05-10'),
(9, 'rtfu', 'dtfjgh', 'jfgjhkk', 'sgdhfghj', 'gsdfhgfg', 7655, 76, 'gfhgjhkj', '2023-06-19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` bigint(20) NOT NULL,
  `fechaPedido` date DEFAULT NULL,
  `fechaEntrega` date DEFAULT NULL,
  `estadoPedido` varchar(50) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `costoEnvio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `fechaPedido`, `fechaEntrega`, `estadoPedido`, `total`, `costoEnvio`) VALUES
(1, '2023-05-16', '2023-05-23', 'enviado', 649, 0),
(4, '2023-05-16', '2023-05-23', 'enviado', 2085, 0),
(5, '2023-05-16', '2023-05-23', 'enviado', 4865, 0),
(6, '2023-05-16', '2023-05-23', 'enviado', 1415, 0),
(7, '2023-06-14', '2023-06-21', 'enviado', 4113, 0),
(8, '2023-06-14', '2023-06-21', 'enviado', 3475, 0),
(10, '2023-06-14', '2023-06-21', 'enviado', 649, 0),
(11, '2023-06-14', '2023-06-21', 'enviado', 283, 0),
(12, '2023-05-16', '2023-05-23', 'enviado', 457, 0),
(13, '2023-05-16', '2023-05-23', 'enviado', 566, 0),
(24, '2023-06-19', '2023-06-26', 'enviado', 2264, 0),
(25, '2023-06-19', '2023-06-26', 'enviado', 3245, 0),
(26, '2023-06-19', '2023-06-26', 'enviado', 649, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `contrasena` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `telefono` bigint(20) DEFAULT NULL,
  `fNacimiento` date DEFAULT NULL,
  `infoPago` varchar(50) DEFAULT NULL,
  `administrador` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `contrasena`, `direccion`, `telefono`, `fNacimiento`, `infoPago`, `administrador`) VALUES
(1, 'Ross', 'roos@gmail.com', '1111', 'calle a', 3334784686, '1999-01-01', 'sdfg', 1),
(2, 'Maic', 'maic@gmail.com', '1111', 'Calle b', 3309984356, '2023-05-16', 'Tarjeta de credito', 1),
(3, 'Erick', 'erick@gmail.com', '3333', 'calle c', 3365986843, '1999-01-03', 'hred', 1),
(4, 'Jair', 'jair@gmail.com', '4444', 'calle d', 3375549865, '1999-01-04', 'hrtd', 1),
(5, 'Ivan', 'ivan@gmail.com', '5555', 'calle e', 3309348743, '1999-01-05', 'hdfs', 1),
(7, 'efde', 'edwef', 'edwfegr', 'dfvedg', 4567, '2023-05-18', 'defghjkl', 0),
(9, 'Jorge', 'jorge@gmail.com', 'abcd', 'Calle f', 3380782123, '1999-01-07', 'Tarjeta de credito', 0),
(13, 'toño', 'esgfdhgf', '1111', '1111', 23, '2023-06-18', 'tarjeta', 0),
(15, 'adrian', 'rsantana@ceti.mx', '1234', 'calle h', 8787878787, '2023-06-19', 'Tarjeta de credito', 0),
(17, 'pedro', 'correo', '1111', 'calle d', 1234, '2023-06-19', 'tarjeta', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carritos`
--
ALTER TABLE `carritos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carritos`
--
ALTER TABLE `carritos`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
