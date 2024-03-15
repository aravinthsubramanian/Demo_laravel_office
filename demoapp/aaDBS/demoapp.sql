-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2024 at 02:24 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demoapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `mobile`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', '8877665544', NULL, '$2y$12$xHjjHMUSkTgQqSMGZYqltOEwj.LOMdqcyQSTmf09hT3wjWvbE0Ae.', NULL, '2024-03-13 05:12:31', '2024-03-13 05:12:31'),
(2, 'admin', 'admin1@admin.com', '9597694709', NULL, '$2y$12$CKDmwEP4umm0WZbJySVf0uqu49k1Y3F984mdv2eK8NYvGHYya4QdO', NULL, '2024-03-14 04:20:17', '2024-03-14 04:20:17');

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
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `product` varchar(255) DEFAULT NULL,
  `cost` double(8,2) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `main_catagories`
--

CREATE TABLE `main_catagories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `catagory` varchar(255) NOT NULL,
  `catagory_status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_catagories`
--

INSERT INTO `main_catagories` (`id`, `catagory`, `catagory_status`, `created_at`, `updated_at`) VALUES
(9, 'firs', 'enable', '2024-03-14 22:48:03', '2024-03-15 02:19:54'),
(10, 'second', 'dissable', '2024-03-14 22:48:07', '2024-03-14 22:48:07'),
(11, 'third', 'enable', '2024-03-14 22:48:11', '2024-03-14 22:48:11'),
(12, 'fourth', 'dissable', '2024-03-14 22:48:20', '2024-03-14 22:48:20');

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
(5, '2024_03_13_103320_create_admins_table', 2),
(6, '2024_03_14_051816_create_catagory_table', 3),
(7, '2024_03_14_063100_create_catagories_table', 4),
(8, '2024_03_14_073854_create_maincatagory_table', 5),
(9, '2024_03_14_074204_create_subcatagory_table', 6),
(10, '2024_03_14_075338_create_main_catagories_table', 7),
(11, '2024_03_14_075351_create_sub_catagories_table', 7),
(12, '2024_03_15_091424_create_photos_table', 8),
(13, '2024_03_15_103134_create_images_table', 9),
(14, '2024_03_15_115427_create_dynamic_field', 10),
(15, '2024_03_15_123737_create_texts_table', 11),
(16, '2024_03_15_124606_create_texts_table', 12);

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
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `product` varchar(30) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `cost` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `title`, `path`, `product`, `description`, `cost`, `created_at`, `updated_at`) VALUES
(7, 'pexels-pixabay-39857.jpg', 'public/asset/images/hdBMkjn3CeWXaRULMAnkPhA8rVKFvJU01jqS2XKl.jpg', NULL, NULL, NULL, NULL, NULL),
(8, 'pexels-david-dibert-635499.jpg', 'public/asset/images/fcatyAwArjHgZZKW4f1lpkNfSfPim0lXlXpK2lks.jpg', NULL, NULL, NULL, NULL, NULL),
(9, 'pexels-chevanon-photography-1108099.jpg', 'public/asset/images/zCUH00wm9t38n9LCqDBIJeZxC3XJCKibCFFrIMwp.jpg', NULL, NULL, NULL, NULL, NULL),
(10, 'pexels-pixabay-39857.jpg', 'public/asset/images/ielCmgAOEoEOBso1PPFf30aMJH1KFIkKxiyeA4qT.jpg', NULL, NULL, NULL, NULL, NULL),
(11, 'pexels-pixabay-39857.jpg', 'public/asset/images/oWXJpuhThQI1st68akvgNdrFPPAzA54jIKCjormx.jpg', NULL, NULL, NULL, NULL, NULL),
(12, 'pexels-david-dibert-635499.jpg', 'public/asset/images/Sr33Ct3sRAK5zSxLZL45MZRyvgR4PClnqfJL24cP.jpg', NULL, NULL, NULL, NULL, NULL),
(13, 'pexels-chevanon-photography-1108099.jpg', 'public/asset/images/6q0a23UGnCLkzPAVS63W5e3Fq7PW9IMhexF40eGq.jpg', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_catagories`
--

CREATE TABLE `sub_catagories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `catagory` varchar(255) NOT NULL,
  `subcatagory` varchar(255) NOT NULL,
  `subcatagory_status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_catagories`
--

INSERT INTO `sub_catagories` (`id`, `catagory`, `subcatagory`, `subcatagory_status`, `created_at`, `updated_at`) VALUES
(6, 'firs', 'sub44', 'enable', '2024-03-14 05:05:26', '2024-03-15 02:32:51'),
(8, 'four', 'ssder', 'dissable', '2024-03-14 08:02:44', '2024-03-15 02:34:06'),
(9, 'four', 'asdsadada', 'dissable', '2024-03-14 08:03:07', '2024-03-14 08:03:07');

-- --------------------------------------------------------

--
-- Table structure for table `texts`
--

CREATE TABLE `texts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `animal` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `texts`
--

INSERT INTO `texts` (`id`, `animal`, `created_at`, `updated_at`) VALUES
(1, 'cat', '2024-03-15 07:23:12', '2024-03-15 07:23:12'),
(2, 'dog', '2024-03-15 07:23:12', '2024-03-15 07:23:12'),
(3, 'human', '2024-03-15 07:23:12', '2024-03-15 07:23:12'),
(4, 'jeraffi', '2024-03-15 07:25:09', '2024-03-15 07:25:09'),
(5, 'elephant', '2024-03-15 07:25:09', '2024-03-15 07:25:09'),
(6, 'monkey', '2024-03-15 07:25:09', '2024-03-15 07:25:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(11, 'asasas', 'aravi@gmail.com', '9597694709', NULL, '$2y$12$kzbfUI9PYVpzZ9l8duYewO/AAvKFG3Q03LJwrFOilbMrw80rSTCBK', NULL, '2024-03-12 22:06:36', '2024-03-12 22:06:36'),
(12, 'scdsascf', 'aravith@gmail.com', '9597694709', NULL, '$2y$12$lIAWDe/1Eo7TEslLig10SOOwrU/i6XXgARsH65120/l.s9KtULD6K', NULL, '2024-03-12 22:19:36', '2024-03-12 22:19:36'),
(13, 'asderf', 'asderf@asdf.com', '9876543210', NULL, '$2y$12$5Nk9rekCGxD5vyqql5/H4.jSSZsp4iacC6SPWUMMhBsJqjI13bzJW', NULL, '2024-03-12 22:39:00', '2024-03-12 22:39:00'),
(14, 'asdfr', 'aaa@aaa.com', '1234567890', NULL, '$2y$12$DxdRV1/voMpeRZa8Ge4KkuZb4AWoH2aqkLgohZbLhhwqq9UajEbH.', NULL, '2024-03-13 04:58:32', '2024-03-13 04:58:32'),
(15, 'nandhi', 'nandhi@gmail.com', '1234567890', NULL, '$2y$12$fMBbIJ82/L.F0vhwNwZHZeLQ1dsV2gN/jo.bl8Pk8Dgek8Vnndnqa', NULL, '2024-03-13 22:28:07', '2024-03-13 22:28:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_catagories`
--
ALTER TABLE `main_catagories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `main_catagories_catagory_unique` (`catagory`);

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
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_catagories`
--
ALTER TABLE `sub_catagories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sub_catagories_subcatagory_unique` (`subcatagory`);

--
-- Indexes for table `texts`
--
ALTER TABLE `texts`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `main_catagories`
--
ALTER TABLE `main_catagories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sub_catagories`
--
ALTER TABLE `sub_catagories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `texts`
--
ALTER TABLE `texts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
