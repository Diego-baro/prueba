-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-09-2020 a las 02:59:55
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `parking`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_09_11_153747_create_rates_table', 1),
(2, '2020_09_11_154041_create_userparkings_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rates`
--

CREATE TABLE `rates` (
  `id` int(10) UNSIGNED NOT NULL,
  `vtype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vbrand` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `rates`
--

INSERT INTO `rates` (`id`, `vtype`, `vbrand`, `created_at`, `updated_at`) VALUES
(1, 'Moto', '25', '2020-09-12 00:37:42', '2020-09-12 00:37:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `userparkings`
--

CREATE TABLE `userparkings` (
  `id` int(10) UNSIGNED NOT NULL,
  `iduser` bigint(20) NOT NULL,
  `uname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ulname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vtype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vpuesto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vbrand` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vplate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vdate` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `userparkings`
--

INSERT INTO `userparkings` (`id`, `iduser`, `uname`, `ulname`, `vtype`, `vpuesto`, `vbrand`, `vplate`, `vdate`, `created_at`, `updated_at`) VALUES
(1, 54654564, 'ewewe', 'wewe', 'Carro', 'Carro', 'wewe', 'wewe', '2003-05-21', '2020-09-12 00:25:56', '2020-09-12 00:25:56'),
(2, 54654564, 'ewewe', 'wewe', 'Carro', 'Carro', 'wewe', 'wewe', '2003-05-21', '2020-09-12 00:26:38', '2020-09-12 00:26:38');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `userparkings`
--
ALTER TABLE `userparkings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `rates`
--
ALTER TABLE `rates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `userparkings`
--
ALTER TABLE `userparkings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
