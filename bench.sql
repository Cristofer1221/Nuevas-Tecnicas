-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-12-2019 a las 02:05:48
-- Versión del servidor: 8.0.17
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bench`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cases`
--

CREATE TABLE `cases` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `caseID` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ventiladores` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PuertosUSB` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoporteMainBoard` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `categoria` varchar(192) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `created_at`, `updated_at`, `categoria`) VALUES
(1, '2019-09-27 09:21:56', '2019-09-27 09:21:56', 'CPU'),
(2, '2019-09-27 09:22:06', '2019-09-27 09:22:06', 'RAM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cpus`
--

CREATE TABLE `cpus` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ClockSpeed` double NOT NULL,
  `TurboClockSpeed` double NOT NULL,
  `Cores` bigint(20) NOT NULL,
  `Socket` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Marca` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Foto` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cpus`
--

INSERT INTO `cpus` (`id`, `created_at`, `updated_at`, `ClockSpeed`, `TurboClockSpeed`, `Cores`, `Socket`, `Marca`, `Foto`, `categoria_id`) VALUES
(1, '2019-09-27 09:36:39', '2019-09-27 10:56:30', 4, 4.5, 8, 'LG5155', 'Intel', 'uploads/fZJo5PlZjxThA1wDgYN76a4EujWIiiJ0DEMAPhdH.jpeg', 1),
(2, '2019-09-27 09:45:58', '2019-09-27 10:56:21', 2.5, 4, 16, 'FCLGA3647', 'Intel', 'uploads/PJ0sYn0uSOXdE7aamgouIJUSK7rd1kMSEbOMYIif.jpeg', 1),
(3, '2019-09-27 10:41:34', '2019-10-31 10:04:55', 2, 4, 4, 'LG115549', 'AMD', 'uploads/Q9Et7UnkOWRrj2wq2oVcYsQ3dTACIAu1stiOmNX0.jpeg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `discos`
--

CREATE TABLE `discos` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `discoID` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacidad` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vellectura` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `velescritura` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gpuses`
--

CREATE TABLE `gpuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gpuID` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arquitectura` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frecuencia` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `memoria_de_video` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mice`
--

CREATE TABLE `mice` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `mouseID` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DPI_Max` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DPI_Ajustable` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Diseño` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_09_27_035034_create_categorias_table', 1),
(4, '2019_09_27_035201_create_cpus_table', 1),
(5, '2019_12_08_225704_create_rams_table', 2),
(6, '2019_12_08_230507_create_rams_table', 3),
(7, '2019_12_08_234236_create_discos_table', 4),
(8, '2019_12_08_234616_create_gpuses_table', 4),
(9, '2019_12_08_234946_create_mice_table', 4),
(10, '2019_12_08_235347_create_cases_table', 5),
(11, '2019_12_09_000919_create_cases_table', 6),
(12, '2019_12_09_001346_create_cases_table', 7),
(13, '2019_12_09_001601_create_mice_table', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rams`
--

CREATE TABLE `rams` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ramID` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frecuencia` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacidad` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Eddie Ramos', 'eddieverdesoto@gmail.com', NULL, '$2y$10$r/4eoRugSWU8VmFgewOu0eV7hDCXE6B3vQrbPL9AxmcxpVvBrygrC', NULL, '2019-09-27 08:54:03', '2019-09-27 08:54:03');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cases_categoria_id_foreign` (`categoria_id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cpus`
--
ALTER TABLE `cpus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cpus_categoria_id_foreign` (`categoria_id`);

--
-- Indices de la tabla `discos`
--
ALTER TABLE `discos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `discos_categoria_id_foreign` (`categoria_id`);

--
-- Indices de la tabla `gpuses`
--
ALTER TABLE `gpuses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gpuses_categoria_id_foreign` (`categoria_id`);

--
-- Indices de la tabla `mice`
--
ALTER TABLE `mice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mice_categoria_id_foreign` (`categoria_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `rams`
--
ALTER TABLE `rams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rams_categoria_id_foreign` (`categoria_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cases`
--
ALTER TABLE `cases`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `cpus`
--
ALTER TABLE `cpus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `discos`
--
ALTER TABLE `discos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `gpuses`
--
ALTER TABLE `gpuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mice`
--
ALTER TABLE `mice`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `rams`
--
ALTER TABLE `rams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cases`
--
ALTER TABLE `cases`
  ADD CONSTRAINT `cases_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`);

--
-- Filtros para la tabla `cpus`
--
ALTER TABLE `cpus`
  ADD CONSTRAINT `cpus_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`);

--
-- Filtros para la tabla `discos`
--
ALTER TABLE `discos`
  ADD CONSTRAINT `discos_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`);

--
-- Filtros para la tabla `gpuses`
--
ALTER TABLE `gpuses`
  ADD CONSTRAINT `gpuses_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`);

--
-- Filtros para la tabla `mice`
--
ALTER TABLE `mice`
  ADD CONSTRAINT `mice_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`);

--
-- Filtros para la tabla `rams`
--
ALTER TABLE `rams`
  ADD CONSTRAINT `rams_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
