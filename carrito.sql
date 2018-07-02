-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-07-2018 a las 00:01:54
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `carrito`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exist` int(11) NOT NULL,
  `img_route` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` date NOT NULL,
  `price` double(3,2) NOT NULL,
  `artist_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `articles`
--

INSERT INTO `articles` (`id`, `name`, `description`, `exist`, `img_route`, `year`, `price`, `artist_id`, `created_at`, `updated_at`) VALUES
(1, 'Adele25', 'New Adele album call Adele25', 27, 'adele25-album', '2018-06-22', 5.99, 1, NULL, '2018-07-03 04:51:09'),
(2, 'American Idiot', 'American Idiot is the seventh studio album by American rock band Green Day. Produced by Rob Cavallo, the album was released in the UK on September 20, 2004 and in the US on September 21, 2004 by Reprise Records. ', 18, 'americanidiot-album', '2004-09-20', 1.99, 3, NULL, '2018-07-03 05:00:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `article_genre`
--

CREATE TABLE `article_genre` (
  `genre_id` int(10) UNSIGNED NOT NULL,
  `article_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `article_payment`
--

CREATE TABLE `article_payment` (
  `id` int(11) NOT NULL,
  `payment_id` int(10) UNSIGNED NOT NULL,
  `article_id` int(10) UNSIGNED NOT NULL,
  `quant` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `article_payment`
--

INSERT INTO `article_payment` (`id`, `payment_id`, `article_id`, `quant`) VALUES
(12, 27, 1, 6),
(13, 27, 2, 6),
(14, 28, 1, 4),
(15, 28, 2, 5),
(16, 29, 1, 6),
(17, 29, 2, 6),
(18, 30, 1, 6),
(19, 30, 2, 6),
(20, 31, 1, 3),
(21, 32, 2, 3),
(22, 33, 2, 3),
(23, 34, 2, 3),
(24, 35, 2, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `article_purchase`
--

CREATE TABLE `article_purchase` (
  `purchase_id` int(10) UNSIGNED NOT NULL,
  `article_id` int(10) UNSIGNED NOT NULL,
  `quant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `article_purchase`
--

INSERT INTO `article_purchase` (`purchase_id`, `article_id`, `quant`) VALUES
(69, 1, 3),
(70, 2, 3),
(71, 1, 3),
(72, 2, 3),
(73, 1, 4),
(74, 2, 5),
(75, 1, 3),
(76, 2, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artists`
--

CREATE TABLE `artists` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stagename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `artists`
--

INSERT INTO `artists` (`id`, `firstname`, `lastname`, `stagename`) VALUES
(1, 'Adele ', 'Blue ', 'Adele'),
(2, 'Niall ', 'Horan', 'Nial Horan'),
(3, 'Green', 'Day', 'Green Day'),
(4, 'Johan', 'Marin', 'Lil Johan'),
(5, 'Pedro Jose', 'Parra', 'sdfsdf'),
(6, 'Pedro Jose', 'Parra', 'gfdgf'),
(7, 'Pedro Jose', 'Parra', 'gfdgf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bills`
--

CREATE TABLE `bills` (
  `id` int(10) UNSIGNED NOT NULL,
  `payment_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bills`
--

INSERT INTO `bills` (`id`, `payment_id`, `created_at`, `updated_at`) VALUES
(1, 32, '2018-07-03 04:59:25', '2018-07-03 04:59:25'),
(2, 33, '2018-07-03 05:00:12', '2018-07-03 05:00:12'),
(3, 34, '2018-07-03 05:00:24', '2018-07-03 05:00:24'),
(4, 35, '2018-07-03 05:00:44', '2018-07-03 05:00:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genres`
--

CREATE TABLE `genres` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `genres`
--

INSERT INTO `genres` (`id`, `name`) VALUES
(1, 'Pop'),
(2, 'Country'),
(3, 'Rap'),
(4, 'Hip-Hop'),
(5, 'Rock');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2018_06_19_170825_add_database', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `quant` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `article_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `orders`
--

INSERT INTO `orders` (`id`, `quant`, `created_at`, `updated_at`, `article_id`) VALUES
(6, 6, '2018-06-27 21:19:56', '2018-06-27 21:19:56', 1),
(7, 4, '2018-06-27 22:31:29', '2018-06-27 22:31:29', 1),
(8, 4, '2018-06-27 22:32:01', '2018-06-27 22:32:01', 1),
(9, 4, '2018-06-27 22:39:54', '2018-06-27 22:39:54', 1),
(10, 4, '2018-06-27 22:40:17', '2018-06-27 22:40:17', 1),
(11, 4, '2018-06-27 22:40:22', '2018-06-27 22:40:22', 1),
(12, 4, '2018-06-27 22:40:38', '2018-06-27 22:40:38', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `order_user`
--

CREATE TABLE `order_user` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payments`
--

CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `total` double DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `payments`
--

INSERT INTO `payments` (`id`, `user_id`, `total`, `created_at`, `updated_at`) VALUES
(27, 15, 47.88, '2018-07-03 02:49:08', '2018-07-03 02:49:08'),
(28, 14, 33.91, '2018-07-03 03:00:13', '2018-07-03 03:00:13'),
(29, 15, 47.88, '2018-07-03 03:48:08', '2018-07-03 03:48:08'),
(30, 15, 47.88, '2018-07-03 03:48:29', '2018-07-03 03:48:29'),
(31, 15, 17.97, '2018-07-03 04:51:09', '2018-07-03 04:51:09'),
(32, 15, 5.97, '2018-07-03 04:59:25', '2018-07-03 04:59:25'),
(33, 15, 5.97, '2018-07-03 05:00:12', '2018-07-03 05:00:12'),
(34, 15, 5.97, '2018-07-03 05:00:23', '2018-07-03 05:00:23'),
(35, 15, 5.97, '2018-07-03 05:00:44', '2018-07-03 05:00:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `purchases`
--

CREATE TABLE `purchases` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `soft_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `purchases`
--

INSERT INTO `purchases` (`id`, `user_id`, `soft_deleted`, `created_at`, `updated_at`) VALUES
(69, 15, 1, '2018-07-03 02:48:26', '2018-07-03 02:48:26'),
(70, 15, 1, '2018-07-03 02:48:31', '2018-07-03 02:48:31'),
(71, 15, 1, '2018-07-03 02:48:36', '2018-07-03 02:48:36'),
(72, 15, 1, '2018-07-03 02:48:40', '2018-07-03 02:48:40'),
(73, 14, 1, '2018-07-03 02:59:51', '2018-07-03 02:59:51'),
(74, 14, 1, '2018-07-03 02:59:56', '2018-07-03 02:59:56'),
(75, 15, 1, '2018-07-03 04:15:02', '2018-07-03 04:15:02'),
(76, 15, 1, '2018-07-03 04:15:07', '2018-07-03 04:15:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`) VALUES
(1, 'Admin'),
(2, 'Client');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`) VALUES
(1, 12),
(2, 13),
(2, 14),
(2, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dni` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `dni`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(12, 'Admin', 'Admin', '2546', 'admin@admin.com', '$2y$10$fw3gkD8UU1vGVgHYTUB8Sui.kccTFqaO.yHlt2KzrGtnVKFPX/l1S', 'kh0fnGIWBKGkM7uxHRMk1Iei0VyNkv9t75oZb0bB3LzBP0IvKQafAD778OHt', '2018-07-01 00:36:08', '2018-07-01 00:36:08'),
(13, 'Johan', 'Marin', '25456', 'johanmarin.9.9@gmail.com', '$2y$10$2v1WgXUxGBDaZJt7iYzsr.9b1zOBSokVgQYN4dSrR6QMmMQO7kwQm', '3GpdLtyROusPKZW8P9TvW6ISv78lBnhrg7fQdNt4XaLO8MATDoSa7k4Ee7Ub', '2018-07-01 00:36:21', '2018-07-01 00:36:21'),
(14, 'ronald', 'alfonso', '26618307', 'raalfonsoparra@gmail.com', '$2y$10$WmrSjawv29YKslDR7BWDNeBnYh3IIPHTSvmTvrKAcI5FVpzc6J4ii', 'OJj34VSwjCaDaOhWtX5zg65NodDz17phzpxScYEI3aGsIzYkMFxZNmgOwGb6', '2018-07-01 07:12:10', '2018-07-01 07:12:10'),
(15, 'joskar', 'hernandez', '26618307', 'joskarandres97@gmail.com', '$2y$10$QFXzXOU1ABXJPP/GNDuBOO0RabqhU4wS9quwIcoYe.syAN/D0OVpG', 'wDCXex0X91ObdlzMOD4X6xN6cw3ywdsvlj3I7lJjhtXLGIEnHYO5zflMuBYB', '2018-07-01 23:47:24', '2018-07-01 23:47:24');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_artist_id_foreign` (`artist_id`);

--
-- Indices de la tabla `article_genre`
--
ALTER TABLE `article_genre`
  ADD KEY `article_genre_genre_id_foreign` (`genre_id`),
  ADD KEY `article_genre_article_id_foreign` (`article_id`);

--
-- Indices de la tabla `article_payment`
--
ALTER TABLE `article_payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payment_id` (`payment_id`),
  ADD KEY `article_id` (`article_id`);

--
-- Indices de la tabla `article_purchase`
--
ALTER TABLE `article_purchase`
  ADD KEY `article_purchase_purchase_id_foreign` (`purchase_id`),
  ADD KEY `article_purchase_article_id_foreign` (`article_id`);

--
-- Indices de la tabla `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payment_id` (`payment_id`);

--
-- Indices de la tabla `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_article_id_foreign` (`article_id`);

--
-- Indices de la tabla `order_user`
--
ALTER TABLE `order_user`
  ADD KEY `order_user_order_id_foreign` (`order_id`),
  ADD KEY `order_user_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `purchases_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `role_user_role_id_foreign` (`role_id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT de la tabla `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `article_payment`
--
ALTER TABLE `article_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `artists`
--
ALTER TABLE `artists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_artist_id_foreign` FOREIGN KEY (`artist_id`) REFERENCES `artists` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `article_genre`
--
ALTER TABLE `article_genre`
  ADD CONSTRAINT `article_genre_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `article_genre_genre_id_foreign` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `article_payment`
--
ALTER TABLE `article_payment`
  ADD CONSTRAINT `article_payment_ibfk_1` FOREIGN KEY (`payment_id`) REFERENCES `payments` (`id`),
  ADD CONSTRAINT `article_payment_ibfk_2` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`);

--
-- Filtros para la tabla `article_purchase`
--
ALTER TABLE `article_purchase`
  ADD CONSTRAINT `article_purchase_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `article_purchase_purchase_id_foreign` FOREIGN KEY (`purchase_id`) REFERENCES `purchases` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_ibfk_1` FOREIGN KEY (`payment_id`) REFERENCES `payments` (`id`);

--
-- Filtros para la tabla `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `order_user`
--
ALTER TABLE `order_user`
  ADD CONSTRAINT `order_user_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `purchases`
--
ALTER TABLE `purchases`
  ADD CONSTRAINT `purchases_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
