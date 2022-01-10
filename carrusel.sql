-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-01-2022 a las 21:19:57
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
(1, 'ddadadad', 'dadadaa', '35fSxcr__400x400.jpg', '2022-01-10 20:01:16'),
(2, 'Ivan', 'dadada', '35fSxcr__400x400.jpg', '2022-01-10 20:08:24'),
(3, 'dadada', 'dadada', '35fSxcr__400x400.jpg', '2022-01-10 20:09:01'),
(4, 'dadada', 'dadada', '35fSxcr__400x400.jpg', '2022-01-10 20:09:17'),
(5, 'dadadad', 'dadaad', '35fSxcr__400x400.jpg', '2022-01-10 20:09:26'),
(6, 'dadad', 'dadadad', '35fSxcr__400x400.jpg', '2022-01-10 20:19:30'),
(7, 'dadadad', 'dadad', '35fSxcr__400x400.jpg', '2022-01-10 20:25:32'),
(8, 'dada', 'dadadd', '35fSxcr__400x400.jpg', '2022-01-10 20:30:45'),
(9, 'dadadad', 'dadada', '35fSxcr__400x400.jpg', '2022-01-10 20:36:01'),
(10, 'dadad', 'dadada', '35fSxcr__400x400.jpg', '2022-01-10 20:38:45'),
(11, 'dadada', 'dadadad', '35fSxcr__400x400.jpg', '2022-01-10 20:39:24'),
(12, 'k', 'j', '35fSxcr__400x400.jpg', '2022-01-10 20:53:55'),
(13, 'dadada', 'dadada', '35fSxcr__400x400.jpg', '2022-01-10 20:56:19'),
(14, 'dada', 'dadad', '35fSxcr__400x400.jpg', '2022-01-10 20:57:33'),
(15, 'DAADA', 'daadaa', '35fSxcr__400x400.jpg', '2022-01-10 20:58:54');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
