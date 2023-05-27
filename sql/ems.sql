-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2023 at 02:54 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ems`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `photopath` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `rate` varchar(255) NOT NULL,
  `capacity` varchar(255) NOT NULL,
  `services_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `photopath`, `description`, `rate`, `capacity`, `services_id`, `created_at`, `updated_at`) VALUES
(2, 'Birthday', '1684299987_cake.png', 'Birthday party including the decoration', '2000', '25', 2, '2023-05-15 00:44:53', '2023-05-16 23:21:27'),
(4, 'Wedding', '1684300944_wed1.png', 'Wedding event including (simple decoration, mandap, gate)', '30000', '900', 2, '2023-05-16 23:37:24', '2023-05-16 23:45:03'),
(5, 'Formal Program', '1684301269_fomal1.png', 'Formal program including (meeting, seminar, training).', '5000', '250', 2, '2023-05-16 23:42:49', '2023-05-16 23:45:20'),
(6, 'Party', '1684301693_welcome.png', 'Party with the party services (light, sound)', '15000', '500', 3, '2023-05-16 23:49:53', '2023-05-16 23:49:53'),
(7, 'Haldi & Mendi', '1684301884_mendhi.png', 'Haldi and Mendi event with including (simple decoration, flower, sound)', '8000', '250', 7, '2023-05-16 23:53:04', '2023-05-16 23:53:04'),
(8, 'Reception', '1684302044_reciption.png', 'Reception event of the wedding including all the decoration, light, sound.', '20000', '900', 6, '2023-05-16 23:55:44', '2023-05-16 23:55:44'),
(9, 'Anniversary', '1684418701_anniversary4.png', 'It include all the services related to the anniversary', '15000', '200', 11, '2023-05-18 08:20:01', '2023-05-18 08:20:01');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `photopath` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `name`, `description`, `photopath`, `created_at`, `updated_at`) VALUES
(2, 'Wedding', 'Wedding', '1684247766_wed.png', '2023-05-15 06:16:16', '2023-05-16 23:27:19'),
(3, 'Decoration', 'Decoration for the wedding', '1684248096_mandap.png', '2023-05-15 06:25:30', '2023-05-16 08:56:36'),
(4, 'Haldi Mendi Decoration', 'decoration for the haldi and mendi', '1684248292_mendhi.png', '2023-05-16 08:59:52', '2023-05-16 08:59:52'),
(5, 'Lighting', 'Lighting services', '1684248336_light.png', '2023-05-16 09:00:36', '2023-05-16 09:00:36'),
(6, 'Sound', 'Sound services', '1684300384_sound.png', '2023-05-16 23:28:04', '2023-05-16 23:28:04');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_22_044429_create_events_table', 1),
(6, '2023_03_29_144015_create_galleries_table', 1),
(7, '2023_04_04_134842_create_services_table', 1),
(8, '2023_04_25_124826_add_role_to_users', 1),
(9, '2023_04_25_162937_create_venues_table', 1),
(10, '2023_05_15_114429_create_galleries_table', 2),
(11, '2023_05_15_115129_create_galleries_table', 3),
(12, '2023_05_16_042052_create_offers_table', 4),
(13, '2023_05_16_053430_create_offers_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `photopath` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `rate` varchar(255) NOT NULL,
  `capacity` varchar(255) NOT NULL,
  `services_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `name`, `photopath`, `description`, `rate`, `capacity`, `services_id`, `created_at`, `updated_at`) VALUES
(2, 'Wedding, Reception Package', '1684416542_offer2.png', 'Its the package which including all the services related to the wedding and reception', '80000', '1000', 2, '2023-05-16 02:02:30', '2023-05-18 07:54:29'),
(3, 'Haldi & mendi ,Wedding package', '1684417128_offer1.png', 'Its include all the decoration related to the package', '20000', '800', 8, '2023-05-18 07:52:49', '2023-05-18 07:53:48'),
(4, 'Birthday Package', '1684420420_offer3.png', 'Its include all the services related to the birthday party arrangement', '10000', '500', 2, '2023-05-18 07:56:40', '2023-05-18 08:48:40'),
(5, 'Anniversary Package', '1684418784_anniversary.png', 'It include all the services related to the anniversary event', '20000', '300', 12, '2023-05-18 08:21:24', '2023-05-18 08:21:24');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `priority` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `photopath` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `type`, `photopath`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Birthday', 'Birthday Decoration', '1684251537_birthday.png', 'All the decoration related to the birthday like balloon, candle, flower, cake etc. as per booking.', '2023-05-15 00:46:32', '2023-05-16 09:54:16'),
(3, 'Party', 'Party Decoration', '1684251939_welcome.png', 'According to the party like fresher, farewell and other party type as per booking', '2023-05-16 10:00:39', '2023-05-16 10:00:39'),
(4, 'Formal Program', 'Formal program', '1684252247_formal.png', 'As per the requirement formal program like meeting, seminar, training etc. are arrange.', '2023-05-16 10:05:47', '2023-05-16 10:05:47'),
(5, 'Wedding', 'Wedding decortaion', '1684252483_mandap.png', 'All the decoration required for the wedding like mandap, hall, gate decoration, photo station etc.', '2023-05-16 10:09:43', '2023-05-16 10:09:43'),
(6, 'Reception', 'Reception Decoration', '1684252721_reciption.png', 'All the decoration related to the reception i.e light , sound flower decoration', '2023-05-16 10:13:41', '2023-05-16 10:13:41'),
(7, 'Haldi & Mendi', 'Haldi & Mendi Decoration', '1684252971_mendhi.png', 'All the services related to the haldi and mendi like hall, music, light, flower decoration etc. are provided', '2023-05-16 10:17:51', '2023-05-16 10:17:51'),
(8, 'Haldi & mendi ,Wedding package', 'Haldi & mendi , Wedding decoration', '1684415321_offer1.png', 'Its the package which include both haldi & mendi decoration ( simple decoration, light, sound, photoshoot) before the day of wedding and also include the decoration of wedding (gate, mandap, photoshoot)', '2023-05-18 07:23:41', '2023-05-18 08:12:17'),
(9, 'Wedding, Reception Package', 'Wedding, reception decoration', '1684415844_offer2.png', 'It\'s the package that include all the services required for the wedding and reception (gate, mandap, photoshoot, all the decoration)', '2023-05-18 07:32:24', '2023-05-18 07:32:35'),
(10, 'Birthday Package', 'Birthday decoration', '1684416333_offer3.png', 'All the decoration related to birthday party (balloon, candle, photoshoot, flower decoration)', '2023-05-18 07:40:33', '2023-05-18 07:40:33'),
(11, 'Anniversary', 'Anniversary decoration', '1684418065_anniversary2.png', 'Its include the decoration for the anniversary (balloon, flower, light, sound)', '2023-05-18 08:09:25', '2023-05-18 08:09:25'),
(12, 'Anniversary Package', 'Anniversary decoration', '1684418212_anniversary3.png', 'Its include all the services related to the anniversary (balloon, candle, flower, photoshoot)', '2023-05-18 08:11:52', '2023-05-18 08:11:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'editor'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Sonu Paudel', 'paudelsonu10@gmail.com', NULL, '$2y$10$nzuBJ2fV2OhXyswINrjyuu/HUquhuJWnSUh.jlj4wpTxSKH7X9GUa', NULL, '2023-05-14 20:19:33', '2023-05-14 20:19:33', 'admin'),
(2, 'gu', 'paudelsonu@gmail.com', NULL, '$2y$10$DxCfPNyEHvInaW11jPDn6e9C.j76qKCPLCvApXhy2qIGX305nCuV.', NULL, '2023-05-19 01:01:30', '2023-05-19 01:01:30', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `venues`
--

CREATE TABLE `venues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `photopath` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `venues`
--

INSERT INTO `venues` (`id`, `name`, `description`, `photopath`, `location`, `created_at`, `updated_at`) VALUES
(1, 'Wedding Venue', 'Venue for wedding at RainForest Resort', '1684294977_venue1.png', 'Chitwan', '2023-05-14 22:58:54', '2023-05-16 22:31:23'),
(2, 'Wedding Venue', 'Venue for the wedding at Hotel Jungle Crown', '1684337091_venue2.png', 'Chitwan', '2023-05-16 22:31:04', '2023-05-17 09:39:52'),
(3, 'Mendi Venue', 'Venue for the mendi and haldi', '1684297264_venue3.png', 'Chitwan', '2023-05-16 22:36:04', '2023-05-16 22:36:04'),
(4, 'Reception', 'Venue for the reception at Hotel Jungle Resort', '1684298454_venue4.png', 'Chitwan', '2023-05-16 22:42:45', '2023-05-16 22:55:54'),
(5, 'Formal Program', 'Venue for the formal program like meeting, seminar, training, etc.', '1684298329_venue5.png', 'Naranghat', '2023-05-16 22:44:38', '2023-05-16 22:53:49'),
(6, 'Birthday', 'Venue for the birthday party.', '1684297954_venue6.png', 'Chitwan', '2023-05-16 22:44:39', '2023-05-16 22:47:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `venues`
--
ALTER TABLE `venues`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `venues`
--
ALTER TABLE `venues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
