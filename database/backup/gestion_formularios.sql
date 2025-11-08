-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2025 a las 01:53:46
-- Versión del servidor: 8.0.44
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestion_formularios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradors`
--

CREATE TABLE `administradors` (
  `id` bigint UNSIGNED NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dependencias`
--

CREATE TABLE `dependencias` (
  `id_Dependencia` bigint UNSIGNED NOT NULL,
  `usuario_Depen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sector_Depen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono_Depen` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extension_Depen` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_Depen` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `calle_Depen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_Depen` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `colonia_Depen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp_Depen` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `dependencias`
--

INSERT INTO `dependencias` (`id_Dependencia`, `usuario_Depen`, `sector_Depen`, `telefono_Depen`, `extension_Depen`, `email_Depen`, `calle_Depen`, `numero_Depen`, `colonia_Depen`, `cp_Depen`, `created_at`, `updated_at`) VALUES
(1, 'yeya', 'Turismo', '9515665852', '1232', 'yadirajime26@gmail.com', 'cuidad administrativa', '6', 'tlalixtac', '72596', '2025-10-27 08:28:38', '2025-10-27 08:28:38'),
(3, 'yami', 'publico', '1236547895', '44444', 'yamy26@gmail.com', 'azucenas', '6', 'pueblo nuevo', '78452', '2025-10-27 23:15:10', '2025-10-27 23:15:10'),
(10, 'cristian', 'Educación', '9515665852', '1232', 'salud23@gmail.com', 'cuidad administrativa', '78', 'suchil', '78452', '2025-10-28 02:56:28', '2025-10-28 02:56:28'),
(12, 'yeyis', 'Salud', '9515665852', '1232', 'salud23@gmail.com', 'cuidad administrativa', '6', 'tlalixtac', '72596', '2025-10-28 03:22:52', '2025-10-28 03:22:52'),
(13, 'fely', 'Cultura', '1236547895', '1232', 'yadirajime26@gmail.com', 'cuidad administrativa', '7', 'tlalixtac', '14895', '2025-10-28 03:24:47', '2025-10-28 03:24:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formularios`
--

CREATE TABLE `formularios` (
  `id_Formulario` bigint UNSIGNED NOT NULL,
  `titulo_Formulario` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion_Form` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fechacreacion_Form` date NOT NULL,
  `botonaccion_Form` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secciones_Form` int NOT NULL,
  `periodo_Form` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_Dep` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `formularios`
--

INSERT INTO `formularios` (`id_Formulario`, `titulo_Formulario`, `descripcion_Form`, `fechacreacion_Form`, `botonaccion_Form`, `secciones_Form`, `periodo_Form`, `id_Dep`, `created_at`, `updated_at`) VALUES
(1, 'datos personales', 'escribe tus datos personales', '2025-10-28', 'enviar', 2, '1', 1, '2025-10-27 08:34:33', '2025-10-27 08:38:46'),
(2, 'datos', 'escribe tu edad', '2025-10-26', 'revisar', 2, 'anual', 1, '2025-10-27 08:38:23', '2025-10-27 08:38:31'),
(3, 'hola', 'Holax2', '2025-10-04', 'eliminar', 5, '10/10/2025', 3, '2025-10-27 23:16:02', '2025-10-27 23:16:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_10_27_013043_create_dependencias_table', 1),
(6, '2025_10_27_013053_create_formularios_table', 1),
(7, '2025_10_27_203254_create_administradors_table', 2),
(8, '2025_10_27_231219_create_respuestas_turismo_table', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas_turismo`
--

CREATE TABLE `respuestas_turismo` (
  `id` bigint UNSIGNED NOT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad_turistas` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `respuestas_turismo`
--

INSERT INTO `respuestas_turismo` (`id`, `region`, `cantidad_turistas`, `created_at`, `updated_at`) VALUES
(1, 'Cañada', 2, '2025-10-29 04:55:45', '2025-10-29 04:55:45'),
(2, 'Costa', 3, '2025-10-29 04:55:45', '2025-10-29 04:55:45'),
(3, 'Cañada', 5, '2025-10-29 05:04:09', '2025-10-29 05:04:09'),
(4, 'Costa', 5, '2025-10-29 05:04:10', '2025-10-29 05:04:10'),
(5, 'Cañada', 1, '2025-10-29 05:07:08', '2025-10-29 05:07:08'),
(6, 'Costa', 1, '2025-10-29 05:07:09', '2025-10-29 05:07:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradors`
--
ALTER TABLE `administradors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `administradors_email_unique` (`email`);

--
-- Indices de la tabla `dependencias`
--
ALTER TABLE `dependencias`
  ADD PRIMARY KEY (`id_Dependencia`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `formularios`
--
ALTER TABLE `formularios`
  ADD PRIMARY KEY (`id_Formulario`),
  ADD KEY `formularios_id_dep_foreign` (`id_Dep`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `respuestas_turismo`
--
ALTER TABLE `respuestas_turismo`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de la tabla `administradors`
--
ALTER TABLE `administradors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `dependencias`
--
ALTER TABLE `dependencias`
  MODIFY `id_Dependencia` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `formularios`
--
ALTER TABLE `formularios`
  MODIFY `id_Formulario` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `respuestas_turismo`
--
ALTER TABLE `respuestas_turismo`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `formularios`
--
ALTER TABLE `formularios`
  ADD CONSTRAINT `formularios_id_dep_foreign` FOREIGN KEY (`id_Dep`) REFERENCES `dependencias` (`id_Dependencia`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
