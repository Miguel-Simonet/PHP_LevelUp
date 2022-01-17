-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-01-2022 a las 20:40:09
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `levelup`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrusel`
--

CREATE TABLE `carrusel` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carrusel`
--

INSERT INTO `carrusel` (`id`, `titulo`, `descripcion`, `image`, `created_at`) VALUES
(37, 'dadad;', 'dadadda;', '4.jpg', '2022-01-13 17:04:36'),
(38, 'Titulo;', 'desc;', '4.jpg', '2022-01-13 17:04:53'),
(40, 'Ultima;', 'desc;', '35fSxcr__400x400.jpg', '2022-01-13 17:17:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lol`
--

CREATE TABLE `lol` (
  `nombre_de_cuenta` varchar(360) NOT NULL,
  `region` varchar(360) NOT NULL,
  `rango` varchar(360) NOT NULL,
  `precio` varchar(360) NOT NULL,
  `usuario_propietario` varchar(360) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `overwatch`
--

CREATE TABLE `overwatch` (
  `nombre` varchar(360) NOT NULL,
  `region` varchar(360) NOT NULL,
  `rango` varchar(360) NOT NULL,
  `precio` varchar(360) NOT NULL,
  `usuario_propietario` varchar(360) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesions`
--

CREATE TABLE `sesions` (
  `usuario` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `contraseña` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sesions`
--

INSERT INTO `sesions` (`usuario`, `email`, `contraseña`) VALUES
('Miguel', 'miguel@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
('Tomas', 'tomas@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
('', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valorant`
--

CREATE TABLE `valorant` (
  `nombre` varchar(360) NOT NULL,
  `region` varchar(360) NOT NULL,
  `rango` varchar(360) NOT NULL,
  `precio` varchar(360) NOT NULL,
  `usuario_propietario` varchar(360) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrusel`
--
ALTER TABLE `carrusel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrusel`
--
ALTER TABLE `carrusel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
