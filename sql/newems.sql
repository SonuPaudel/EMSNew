-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2023 at 08:05 AM
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `photopath`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Birthday', '1693752877_1684299987_cake.png', 'Birthday special', '2023-09-03 09:09:37', '2023-09-04 06:38:31'),
(2, 'Wedding', '1693830281_1684300944_wed1.png', 'Wedding event special', '2023-09-04 06:39:41', '2023-09-04 06:39:41'),
(3, 'Mendi', '1693830739_1684301884_mendhi.png', 'Mendi special event', '2023-09-04 06:47:19', '2023-09-04 06:47:19'),
(4, 'Reception', '1693830803_1684302044_reciption.png', 'Reception event special', '2023-09-04 06:48:23', '2023-09-04 06:48:47'),
(5, 'Anniversary', '1693830968_1684418701_anniversary4.png', 'Anniversary special event', '2023-09-04 06:51:08', '2023-09-04 06:51:08'),
(6, 'Formal Program', '1693831142_1684301269_fomal1.png', 'Formal Program event', '2023-09-04 06:53:01', '2023-09-04 06:55:39'),
(7, 'Informal Program', '1693832442_1684301693_welcome.png', 'Informal Program event', '2023-09-04 07:15:42', '2023-09-04 07:15:42'),
(8, 'Haldi & mendi', '1693835412_1684415321_offer1.png', 'Haldi and Mendi event Special', '2023-09-04 08:05:12', '2023-09-04 08:05:57');

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
(1, 'Wedding', 'Wedding photo', '1693837415_1684247766_wed.png', '2023-09-04 08:38:35', '2023-09-04 08:38:35'),
(2, 'Mandap', 'Mandap for the wedding', '1693837555_1684248096_mandap.png', '2023-09-04 08:40:55', '2023-09-04 08:41:06'),
(3, 'Mendi', 'Mendi decoration', '1693837959_1684248292_mendhi.png', '2023-09-04 08:47:39', '2023-09-04 08:47:39'),
(4, 'Lighting', 'Lighting Decoration', '1693838015_1684248336_light.png', '2023-09-04 08:48:35', '2023-09-04 08:48:35'),
(5, 'Sound System', 'Sound system arrangement', '1693838066_1684300384_sound.png', '2023-09-04 08:49:26', '2023-09-04 08:49:26');

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
(6, '2023_04_04_134842_create_services_table', 1),
(7, '2023_04_25_162937_create_venues_table', 1),
(8, '2023_05_15_115129_create_galleries_table', 1),
(9, '2023_09_03_152745_create_offers_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `discounted_rate` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `service_id`, `discounted_rate`, `created_at`, `updated_at`) VALUES
(10, 2, '50', '2023-09-03 13:45:21', '2023-09-04 09:30:32');

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
  `rate` varchar(255) NOT NULL,
  `photopath` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `event_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `rate`, `photopath`, `description`, `event_id`, `created_at`, `updated_at`) VALUES
(2, 'Birthday Services', '15000', '1693831395_1684251537_birthday.png', 'Birthday celebrations with the full decoration of flower, lights etc.', 1, '2023-09-03 10:30:38', '2023-09-04 07:08:58'),
(4, 'Wedding services', '50000', '1693832179_1684252483_mandap.png', 'Wedding decorations with mandap, gate, entry etc. with flower, light', 4, '2023-09-04 07:11:19', '2023-09-04 07:11:19'),
(5, 'Mendi Services', '10000', '1693832930_1684252971_mendhi.png', 'Mendi decoration with the full arrangement of music, light, sound, flower etc.', 5, '2023-09-04 07:23:50', '2023-09-04 07:23:50'),
(6, 'Formal Program Services', '5000', '1693833037_1684252247_formal.png', 'Formal program arrangement with all the requirement', 8, '2023-09-04 07:25:37', '2023-09-04 07:46:10'),
(7, 'Reception Services', '60000', '1693833171_1684252721_reciption.png', 'Reception decoration with the arrangement of light, sound, stage etc.', 6, '2023-09-04 07:27:51', '2023-09-04 07:27:51'),
(8, 'Informal Program Services', '10000', '1693835087_1684251939_welcome.png', 'Full arrangement of informal program with all the required services like sound, music, light, decoration etc.', 10, '2023-09-04 07:59:47', '2023-09-04 07:59:47'),
(9, 'Anniversary', '15000', '1693835250_1684416333_offer3.png', 'Anniversary decoration with all the services required like light, music, etc. all the other services', 7, '2023-09-04 08:02:30', '2023-09-04 08:02:30'),
(10, 'Haldi & mendi Services', '20000', '1693835672_1684415321_offer1.png', 'All the services required for the haldi and mendi like flower, light, music, sound etc.', 11, '2023-09-04 08:09:32', '2023-09-04 08:09:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_type` enum('admin','user') NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `user_type`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ritesh sapkota', 'ritesh@lict.edu.np', 'admin', NULL, '$2y$10$48egQSNzIf.xShCBftCuyuadBAGh1omU3GabEOdzOZTLHKClBmYKK', NULL, '2023-09-03 08:59:09', '2023-09-03 08:59:09'),
(2, 'Sonu', 'paudelsonu10@gmail.com', 'user', NULL, '$2y$10$4OV3DfZZ5x3dZLsBCMl5DepyN2aTI.kDrcwBE7/vPsjptHI9p6m3S', NULL, '2023-09-04 09:11:25', '2023-09-04 09:11:25'),
(3, 'dipa paudel', 'paudelsonu@gmail.com', 'user', NULL, '$2y$10$x0wCznIPmN22lsRqXNPykO3e0GrX4wyRFaAhOsSR1TaD4CR04ni46', NULL, '2023-09-04 21:15:37', '2023-09-04 21:15:37');

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
  `capacity` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `venues`
--

INSERT INTO `venues` (`id`, `name`, `description`, `photopath`, `location`, `capacity`, `created_at`, `updated_at`) VALUES
(1, 'Bharatpur garden resort for wedding', 'Location of the Chitwan', '1693758414_1684337091_venue2.png', 'Bharatpur', '100', '2023-09-03 10:41:54', '2023-09-04 08:29:30'),
(3, 'Narayani party Palace for formal & informal program', 'Location of the Nawlapur, gaindakot', '1693836991_1684298329_venue5.png', 'Nawalpur', '500', '2023-09-04 08:31:31', '2023-09-04 08:37:47'),
(4, 'Diyalo Party Palace for reception, wedding', 'Location at the Narayanghat, chitwan', '1693837087_1693758269_1684294977_venue1.png', 'Naranghat', '2000', '2023-09-04 08:33:07', '2023-09-04 08:33:07'),
(5, 'Dev party palace for birthday', 'Location in gaindakot', '1693837178_1684297954_venue6.png', 'Gaindakot, Nawalpur', '1000', '2023-09-04 08:34:38', '2023-09-04 08:34:38'),
(6, 'Yellow house resort for haldi & mendi', 'Location in gaindakot', '1693837298_1684297264_venue3.png', 'Gaindakot, Nawalpur', '1000', '2023-09-04 08:36:01', '2023-09-04 08:36:38');

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `offers_service_id_foreign` (`service_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_events_id_foreign` (`event_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `venues`
--
ALTER TABLE `venues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `offers`
--
ALTER TABLE `offers`
  ADD CONSTRAINT `offers_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`);

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_events_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
