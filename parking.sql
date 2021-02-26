-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-02-2021 a las 19:14:43
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
-- Estructura de tabla para la tabla `charges`
--

CREATE TABLE `charges` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `put` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `charges`
--

INSERT INTO `charges` (`id`, `type`, `plate`, `put`, `state`, `created_at`, `updated_at`) VALUES
(23, '2', 'aha123', '1', 1, '2020-09-16 01:05:50', '2020-09-16 01:05:50'),
(24, '3', '45abab', '1', 1, '2020-09-16 01:06:49', '2020-09-16 01:06:49'),
(27, '2', '45ababs2', '4', 1, '2020-09-16 01:44:41', '2020-09-16 01:44:41');

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
(2, '2020_09_11_154041_create_userparkings_table', 1),
(3, '2020_09_14_134136_add_slug_to_rates', 2),
(10, '2020_09_14_144712_create_vehicles_table', 3),
(11, '2020_09_14_150139_put', 3),
(12, '2020_09_14_172721_create_charges_table', 4),
(13, '2020_09_14_172907_create_puts_table', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puts`
--

CREATE TABLE `puts` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `put` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `puts`
--

INSERT INTO `puts` (`id`, `type`, `put`, `state`, `created_at`, `updated_at`) VALUES
(1, '2', '1', 0, '2020-09-04 05:00:00', '2020-09-16 05:00:00'),
(2, '2', '2', 0, '2020-09-03 05:00:00', '2020-09-05 05:00:00'),
(3, '2', '3', 0, '2020-09-24 05:00:00', '2020-09-19 05:00:00'),
(4, '2', '4', 0, '2020-09-03 05:00:00', '2020-09-05 05:00:00'),
(5, '2', '5', 1, '2020-09-03 05:00:00', '2020-09-05 05:00:00'),
(6, '2', '6', 1, '2020-09-03 05:00:00', '2020-09-05 05:00:00'),
(7, '2', '7', 1, '2020-09-03 05:00:00', '2020-09-05 05:00:00'),
(8, '2', '8', 1, '2020-09-03 05:00:00', '2020-09-05 05:00:00'),
(9, '2', '9', 1, '2020-09-03 05:00:00', '2020-09-05 05:00:00'),
(10, '2', '10', 1, '2020-09-03 05:00:00', '2020-09-05 05:00:00'),
(11, '3', '1', 0, '2020-09-03 05:00:00', '2020-09-05 05:00:00'),
(12, '3', '2', 0, '2020-09-03 05:00:00', '2020-09-05 05:00:00'),
(13, '3', '3', 1, '2020-09-03 05:00:00', '2020-09-05 05:00:00'),
(14, '3', '4', 1, '2020-09-03 05:00:00', '2020-09-05 05:00:00'),
(15, '3', '5', 1, '2020-09-03 05:00:00', '2020-09-05 05:00:00'),
(16, '3', '6', 1, '2020-09-03 05:00:00', '2020-09-05 05:00:00'),
(17, '3', '7', 1, '2020-09-03 05:00:00', '2020-09-05 05:00:00'),
(18, '3', '8', 1, '2020-09-03 05:00:00', '2020-09-05 05:00:00'),
(19, '3', '9', 1, '2020-09-03 05:00:00', '2020-09-05 05:00:00'),
(20, '3', '10', 1, '2020-09-03 05:00:00', '2020-09-05 05:00:00'),
(21, '3', '11', 1, '2020-09-03 05:00:00', '2020-09-05 05:00:00'),
(22, '3', '12', 1, '2020-09-03 05:00:00', '2020-09-05 05:00:00'),
(23, '3', '13', 1, '2020-09-03 05:00:00', '2020-09-05 05:00:00'),
(24, '3', '14', 1, '2020-09-03 05:00:00', '2020-09-05 05:00:00'),
(25, '3', '15', 1, '2020-09-03 05:00:00', '2020-09-05 05:00:00'),
(26, '3', '16', 1, '2020-09-03 05:00:00', '2020-09-05 05:00:00'),
(27, '3', '17', 1, '2020-09-03 05:00:00', '2020-09-05 05:00:00'),
(28, '3', '18', 1, '2020-09-03 05:00:00', '2020-09-05 05:00:00'),
(29, '3', '19', 1, '2020-09-03 05:00:00', '2020-09-05 05:00:00'),
(30, '3', '20', 1, '2020-09-03 05:00:00', '2020-09-05 05:00:00'),
(31, '4', '1', 1, '2020-09-03 05:00:00', '2020-09-05 05:00:00'),
(32, '4', '2', 1, '2020-09-03 05:00:00', '2020-09-05 05:00:00'),
(33, '4', '3', 1, '2020-09-03 05:00:00', '2020-09-05 05:00:00'),
(34, '4', '4', 1, '2020-09-03 05:00:00', '2020-09-05 05:00:00'),
(35, '4', '5', 1, '2020-09-03 05:00:00', '2020-09-05 05:00:00'),
(36, '4', '6', 1, '2020-09-03 05:00:00', '2020-09-05 05:00:00'),
(37, '4', '7', 1, '2020-09-03 05:00:00', '2020-09-05 05:00:00'),
(38, '4', '8', 1, '2020-09-03 05:00:00', '2020-09-05 05:00:00'),
(39, '4', '9', 1, '2020-09-03 05:00:00', '2020-09-05 05:00:00'),
(40, '4', '10', 1, '2020-09-03 05:00:00', '2020-09-05 05:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rates`
--

CREATE TABLE `rates` (
  `id` int(10) UNSIGNED NOT NULL,
  `vtype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vbrand` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `rates`
--

INSERT INTO `rates` (`id`, `vtype`, `vbrand`, `created_at`, `updated_at`, `slug`) VALUES
(2, 'Carro', '23', '2020-09-14 20:39:08', '2020-09-14 20:39:08', 'Carro'),
(3, 'Moto', '35', '2020-09-14 20:39:38', '2020-09-14 20:39:38', 'Moto'),
(4, 'Bicicleta', '12', '2020-09-14 20:39:44', '2020-09-14 20:39:44', 'Bicicleta');

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
  `vbrand` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vplate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vdate` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `userparkings`
--

INSERT INTO `userparkings` (`id`, `iduser`, `uname`, `ulname`, `vtype`, `vbrand`, `vplate`, `vdate`, `created_at`, `updated_at`, `slug`) VALUES
(19, 1033710289, 'diego', 'barbosa', '2', 'renault', 'aha123', '2020-09-14', '2020-09-16 01:05:50', '2020-09-16 01:05:50', '1033710289'),
(20, 10142622574, 'kev', 'sebastian', '3', '123ab', '45abab', '2020-09-14', '2020-09-16 01:06:49', '2020-09-16 01:06:49', '10142622574'),
(23, 234234, 'diego', 'barbosa', '2', '35w22', '45ababs2', '2020-09-14', '2020-09-16 01:44:42', '2020-09-16 01:44:42', '234234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `charges`
--
ALTER TABLE `charges`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `puts`
--
ALTER TABLE `puts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rates_slug_unique` (`slug`);

--
-- Indices de la tabla `userparkings`
--
ALTER TABLE `userparkings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `charges`
--
ALTER TABLE `charges`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `puts`
--
ALTER TABLE `puts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `rates`
--
ALTER TABLE `rates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `userparkings`
--
ALTER TABLE `userparkings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
