-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2022 at 01:34 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `docname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `docid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statut` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `email`, `date`, `docname`, `docid`, `number`, `message`, `statut`, `userid`, `created_at`, `updated_at`) VALUES
(2, 'mohamed', 'mohamed12@gmail.com', '2022-07-09', 'Sarabennani', '3', '0674325622', 'test', 'approved', '8', '2022-06-01 14:18:46', '2022-06-01 14:22:45'),
(3, 'Fahd Belfequih', 'belfequihfahd@gmail.com', '2022-10-07', 'Sarabennani', '3', '0605280768', 'test test 3', 'canceld', '4', '2022-06-02 01:21:11', '2022-06-02 10:09:21'),
(4, 'Fahd Belfequih', 'belfequihfahd@gmail.com', '2022-07-01', 'youssefarabi', '5', '0605280768', 'test4', 'in progress', '4', '2022-06-02 01:21:49', '2022-06-02 01:21:49'),
(5, 'Fahd Belfequih', 'belfequihfahd@gmail.com', '2022-06-29', 'ayoubkamal', '9', '0605280768', 'test5', 'in progress', '4', '2022-06-02 01:24:05', '2022-06-02 01:24:05'),
(6, 'ayoub ouazani', 'Ayoub@gmail.com', '2022-07-02', 'Sarabennani', '3', '0607223456', 'test test', 'in progress', NULL, '2022-06-02 10:08:43', '2022-06-02 10:08:43');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `speciality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `age`, `phone`, `email`, `gender`, `speciality`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Fahd Belfequih', '20', '0605280768', 'belfequih@gmail.com', 'Male', 'Heart', '1654133906.jpg', '2022-05-25 10:21:50', '2022-06-02 00:38:26'),
(3, 'Sarabennani', '26', '0623457890', 'sara@gmail.com', 'Female', 'Ears', '1653477837.webp', '2022-05-25 10:23:04', '2022-05-25 10:23:57'),
(5, 'youssefarabi', '38', '0605237654', 'youssef@gmail.com', 'Male', 'Skin', '1654133943.png', '2022-05-25 10:26:20', '2022-06-02 00:39:03'),
(9, 'ayoubkamal', '24', '0605280768', 'ayoublag@gmail.com', 'Male', 'Eye', '1654097990.png', '2022-06-01 14:39:50', '2022-06-01 14:39:50');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medications`
--

CREATE TABLE `medications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `speciality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medications`
--

INSERT INTO `medications` (`id`, `name`, `speciality`, `created_at`, `updated_at`) VALUES
(1, 'aspigic', 'heart', '2022-05-20 10:27:13', '2022-06-02 02:36:14'),
(3, 'santomofin', 'heart', '2022-05-25 10:31:00', '2022-05-25 10:31:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_05_05_170200_create_sessions_table', 1),
(9, '2022_05_11_190101_add_soft_delete_to_doctors_table', 4),
(11, '2022_05_12_153252_add_soft_delete_to_patients_table', 6),
(12, '2022_05_12_160556_create_medications_table', 7),
(13, '2022_05_15_150538_create_notifications_table', 8),
(14, '2022_05_19_144830_create_doctors_table', 9),
(15, '2022_05_19_145218_create_patients_table', 10),
(16, '2022_05_19_145628_create_appointments_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('belfequihfahd@gmail.com', '$2y$10$GWcDOmBjkUh1j5MagCwTo.m35zJqMf4ZEvNFc4TjRYkfGbJmWb4R6', '2022-05-15 15:28:46');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `age`, `phone`, `email`, `gender`, `adress`, `created_at`, `updated_at`) VALUES
(1, 'ayoub ouazani', '32', '0654327809', 'ayoub@gmail.com', 'Male', 'inzegan/ait melloul', '2022-05-20 09:59:54', '2022-05-25 10:29:05'),
(2, 'yassinchatoui', '20', '0687321405', 'yassin@gmail.com', 'Male', 'tamsna', '2022-05-25 10:27:20', '2022-05-25 10:27:20'),
(3, 'abdelkbirbelfequih', '50', '0660418279', 'abousara2012@gmail.com', 'Male', 'ait melloul/Agadir', '2022-05-25 10:36:13', '2022-05-25 10:36:13'),
(4, 'FahdBelfequih', '20', '0605280768', 'belfequihfahd@gmail.com', 'Male', 'inzegan/ait melloul', '2022-06-01 10:47:01', '2022-06-01 10:47:01');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('8EfWocqyiBm6bRT20SykIDgXnUoKigQ6n4RgggSe', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSzY2a2xmV2haWG5PemZOYWdqblE3MTlCVlp6bTZJOHN0eVR6MVZiaCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM7fQ==', 1654172866),
('bX94YbHW7OsELp84su4Ef5vsQGQmTnMeeImxLacK', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZDh5aHdWR1VOVWlZcXlqS3dNT1o1emg0bUVIZW5NRTlHa1gyaEw5VCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZWZlcnJhbF9MZXR0ZXIiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTozO30=', 1654188078),
('pzvdSthQR5JMwJ2iWA0Ebq4BilXb3MHchdCEYC7L', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTGRYWmlVMldHNGhwM0ZCZUlXN2lvbFdVSTVnSHpxSDRjcmIzUHhFbiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZWdpc3RlciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1654210119);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `adress`, `usertype`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '0654321245', 'tawjtat morocco', '1', NULL, '$2y$10$Zd44HZGy4MgVm4bqLRUn3et2H25QaPkG.93iBky7LlW.gYwBrWRqq', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-25 10:20:38', '2022-05-25 10:20:38'),
(2, 'mohamedalawi', 'mohamed@gmail.com', '0678985412', NULL, '2', NULL, '$2y$10$hW2ILijxDL72cKVm5tzto.m4NM0pCxl.PmlLH19bfYhC7a/UuIJOy', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-25 10:21:50', '2022-05-25 10:21:50'),
(3, 'Sarabennani', 'sara@gmail.com', '0623457890', NULL, '2', NULL, '$2y$10$ZiPWZFh8UW7DA.EHg28zAeowOD6ClvzNQBOBz6klCIPYTLTUltWbi', NULL, NULL, NULL, 'xhrYWspx4OPrxzWGx82sTE18arAqHGetVQn4Y6oxrl5VnG61Lj1leQAltnOV', NULL, NULL, '2022-05-25 10:23:04', '2022-05-25 10:23:04'),
(4, 'Fahd Belfequih', 'belfequihfahd@gmail.com', '0605280768', 'agadir morocco', '0', NULL, '$2y$10$0y8.z.EDtYhJmL/9mdBYq.Vs5E6iAvAXilIIo826kpP0RgUbRxq5K', NULL, NULL, NULL, 'QckmqwC9R3tinOC0kiRitGj3T7Rlt6hdwxMdAv7C5y5q0uPjv7P5k3e1CVHw', NULL, NULL, '2022-05-25 10:24:39', '2022-05-25 10:24:39'),
(5, 'youssefarabi', 'youssef@gmail.com', '0605237654', NULL, '2', NULL, '$2y$10$QxSIuaf39nz4ndbzi8Gade0B0v43Xi5wcF7xuwRXq4a7ewGBfJb6u', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-25 10:26:20', '2022-05-25 10:26:20'),
(6, 'ayoubmorafi', 'ayoub@gmail.com', '0678531234', NULL, '2', NULL, '$2y$10$3PxgyyXRacuFm6Hf1GiGj.vbr429G8d.EYYkTj9PsW0L7B24ZkGpC', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-01 10:45:44', '2022-06-01 10:45:44'),
(7, 'mohamedelasri', 'elasri@gmail.com', '0654327809', NULL, '2', NULL, '$2y$10$dVouE6zuZ2k0zcwhpJfZ1ulNfoDy5g4QvmbUA7788tji9i4mOKymC', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-01 10:51:40', '2022-06-01 10:51:40'),
(8, 'mohamed', 'mohamed12@gmail.com', '0654327809', 'howara', '0', NULL, '$2y$10$6TdbWllGkdf5IpAifBlgTeGBpQOMKGOlM0ptn/vmRnm8SoCkvMiGW', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-01 14:18:08', '2022-06-01 14:18:08'),
(9, 'ayoubkamal', 'ayoublag@gmail.com', '0605280768', NULL, '2', NULL, '$2y$10$ZDyj2IKNc6I46v/15e8ynOwBf3mTjjUZk1BV2CEHa/3nVWlyTynba', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-01 14:39:50', '2022-06-01 14:39:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `medications`
--
ALTER TABLE `medications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medications`
--
ALTER TABLE `medications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
