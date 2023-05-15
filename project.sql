-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2023 at 08:05 AM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id_client` bigint(20) UNSIGNED NOT NULL,
  `nama_client` varchar(100) NOT NULL,
  `ip_client` varchar(50) NOT NULL,
  `status` enum('online','offline') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id_client`, `nama_client`, `ip_client`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ruang 1', '2.2.2.1', 'online', '2023-05-11 18:10:51', '2023-05-14 21:42:47'),
(2, 'Ruang 2', '2.2.2.2', 'online', '2023-05-11 18:11:08', '2023-05-11 18:11:18'),
(3, 'Walikota', '3.3.3.2', NULL, '2023-05-11 18:11:44', '2023-05-11 18:11:44'),
(4, 'DPRD', '66.66.66.2', NULL, '2023-05-11 18:12:02', '2023-05-11 18:12:02'),
(5, 'Nawasena', '66.66.66.3', NULL, '2023-05-11 18:12:32', '2023-05-11 18:12:32'),
(6, 'Dikpora', '66.66.66.4', 'online', '2023-05-11 18:12:58', '2023-05-14 21:36:52'),
(7, 'Inspektorat', '66.66.66.5', NULL, '2023-05-11 18:13:18', '2023-05-11 18:13:18'),
(8, 'Sumerta Kauh', '66.66.66.7', NULL, '2023-05-11 18:13:42', '2023-05-11 18:13:42'),
(9, 'Layanan Desain', '66.66.66.8', NULL, '2023-05-11 18:14:25', '2023-05-11 18:14:25'),
(10, 'Ruang 3', '44.44.44.2', NULL, '2023-05-11 18:16:03', '2023-05-11 18:16:03'),
(11, 'Lurah Dangin Puri', '192.168.66.2', 'offline', '2023-05-11 18:16:37', '2023-05-14 06:19:38'),
(12, 'Desa Dangin Puri Kelod', '192.168.210.4', NULL, '2023-05-11 18:17:34', '2023-05-11 18:17:34'),
(13, 'Bapeda Switch', '192.168.210.5', NULL, '2023-05-11 18:23:14', '2023-05-11 18:23:14'),
(14, 'Bapeda Router', '192.168.210.2', NULL, '2023-05-11 18:23:37', '2023-05-11 18:23:37'),
(15, 'Satpol PP', '192.168.180.3', NULL, '2023-05-11 18:23:57', '2023-05-11 18:23:57'),
(16, 'Lurah Kesiman', '192.168.180.8', 'online', '2023-05-11 18:24:20', '2023-05-11 18:24:24'),
(17, 'Layanan KTP Dentim', '192.168.180.7', NULL, '2023-05-11 18:24:49', '2023-05-11 18:24:49'),
(18, 'Denpasar Timur', '192.168.180.5', NULL, '2023-05-11 18:25:20', '2023-05-11 18:25:20'),
(19, 'Dinas Kebudayaan', '192.168.180.4', NULL, '2023-05-11 18:25:47', '2023-05-11 18:25:47'),
(20, 'Lurah Sumerta', '192.168.180.6', NULL, '2023-05-11 19:07:24', '2023-05-11 19:07:24'),
(21, 'DPMD', '192.168.201.2', NULL, '2023-05-11 19:07:59', '2023-05-11 19:07:59'),
(22, 'Desa Pemecutan Kelod', '192.168.55.5', NULL, '2023-05-11 19:08:33', '2023-05-11 19:08:33'),
(23, 'BPBD', '192.168.55.4', NULL, '2023-05-11 19:08:58', '2023-05-11 19:08:58'),
(24, 'Lurah Pemecutan', '192.168.55.3', NULL, '2023-05-11 19:09:21', '2023-05-11 19:09:21'),
(26, 'server acak', '1.1.1.2', 'online', '2023-05-14 17:30:02', '2023-05-14 17:30:07'),
(27, 'Google', '8.8.8.8', 'online', '2023-05-14 18:49:26', '2023-05-14 18:49:31');

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
-- Table structure for table `info_opd`
--

CREATE TABLE `info_opd` (
  `id_opd` bigint(20) UNSIGNED NOT NULL,
  `nama_opd` varchar(100) NOT NULL,
  `alamat_opd` text NOT NULL,
  `telp` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id_log` bigint(20) UNSIGNED NOT NULL,
  `date_log` date NOT NULL,
  `hour_log` varchar(20) NOT NULL,
  `status_log` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(5, '2023_04_13_021044_create_client_table', 1),
(6, '2023_04_13_023854_create_info_opd_table', 1),
(7, '2023_04_13_032344_create_log_table', 1),
(9, '2023_05_12_015040_add_column_to_users_table', 2);

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
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Agus Prawira', 'bluewrxsti99@gmail.com', NULL, '$2y$10$h7GG5kEqzLlBslydIf1u6O5m/F9aIR9oAcV/f8Jvr95bp9pgZKKM2', NULL, '2023-05-11 18:02:27', '2023-05-14 08:05:07'),
(5, 'Agus Prawira', 'firstanon9999@gmail.com', NULL, '$2y$10$BaE6kA4eLoB22pMOzd/iDubMYS2GATjH4Bk8F9k8b2eHiEdk2ye0W', NULL, '2023-05-14 21:41:50', '2023-05-14 21:41:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `info_opd`
--
ALTER TABLE `info_opd`
  ADD PRIMARY KEY (`id_opd`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `info_opd`
--
ALTER TABLE `info_opd`
  MODIFY `id_opd` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id_log` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
