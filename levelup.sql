-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-01-2022 a las 23:52:20
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
(1, 'League of Legends;', 'Cuentas y coatch a buen precio.;', 'Lol.jpg', '2022-01-23 23:09:19'),
(2, 'Overwatch;', 'Cuentas y coatch a buen precio.;', 'Overwatch.jpg', '2022-01-23 23:09:27'),
(3, 'Valorant;', 'Cuentas y coatch a buen precio.;', 'valorant.jpg', '2022-01-23 23:09:35');

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

--
-- Volcado de datos para la tabla `lol`
--

INSERT INTO `lol` (`nombre_de_cuenta`, `region`, `rango`, `precio`, `usuario_propietario`) VALUES
('Hierro', 'EU Oeste', 'Hierro', '120', 'Tomas'),
('Bronze', 'EU Oeste', 'Bronce', '120', 'Tomas'),
('Plata', 'EU Oeste', 'Plata', '120', 'Tomas'),
('Oro', 'EU Oeste', 'Oro', '120', 'Tomas'),
('Platino', 'EU Oeste', 'Platino', '120', 'Tomas'),
('Diamante', 'EU Oeste', 'Diamante', '120', 'Tomas'),
('Master', 'EU Oeste', 'Master', '120', 'Tomas'),
('Grand Master', 'EU Oeste', 'Grand Master', '120', 'Tomas'),
('Challenger', 'EU Oeste', 'Challenger', '120', 'Tomas');

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

--
-- Volcado de datos para la tabla `overwatch`
--

INSERT INTO `overwatch` (`nombre`, `region`, `rango`, `precio`, `usuario_propietario`) VALUES
('Bronze', 'EUW', 'Bronze', '120', 'Tomas'),
('Plata', 'EUW', 'Plata', '120', 'Tomas'),
('Oro', 'EUW', 'Oro', '120', 'Tomas'),
('Platino', 'EUW', 'Platino', '120', 'Tomas'),
('Diamante', 'EUW', 'Diamante', '120', 'Tomas'),
('Master', 'EUW', 'Master', '120', 'Tomas'),
('Gran Master', 'EUW', 'Gran Master', '120', 'Tomas'),
('Top 500', 'EUW', 'Top 500', '120', 'Tomas');

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
-- Volcado de datos para la tabla `valorant`
--

INSERT INTO `valorant` (`nombre`, `region`, `rango`, `precio`, `usuario_propietario`) VALUES
('Prueba 01', 'EUW', 'Hierro', '123', 'admin'),
('Hierro', 'EUW', 'Hierro', '120', 'Tomas'),
('Bronce', 'EUW', 'Bronce', '120', 'Tomas'),
('Plata', 'EUW', 'Plata', '120', 'Tomas'),
('Oro', 'EUW', 'Oro', '120', 'Tomas'),
('Platino', 'EUW', 'Platino', '120', 'Tomas'),
('Diamante', 'EUW', 'Diamante', '120', 'Tomas'),
('Inmortal', 'EUW', 'Inmortal', '120', 'Tomas'),
('Radiante', 'EUW', 'Radiante', '120', 'Tomas');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
