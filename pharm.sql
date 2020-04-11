-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2020 at 06:44 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharm`
--

-- --------------------------------------------------------

--
-- Table structure for table `durations`
--

CREATE TABLE `durations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pharmacistsId` int(11) NOT NULL,
  `durStart` date NOT NULL,
  `durEnd` date NOT NULL,
  `durIncome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `durations`
--

INSERT INTO `durations` (`id`, `pharmacistsId`, `durStart`, `durEnd`, `durIncome`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-12-01', '2020-12-02', '900', '2020-02-27 17:32:17', '2020-02-27 17:32:17'),
(2, 2, '2020-12-01', '2020-12-02', '1200', '2020-03-05 14:03:38', '2020-03-05 14:03:38');

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
(3, '2020_02_26_120530_create_pharmacists_table', 1),
(8, '2020_02_27_190200_create_requests_table', 2),
(9, '2020_02_27_190333_create_pharmacists_table', 2),
(10, '2020_02_27_190352_create_phsales_table', 2),
(11, '2020_02_27_190420_create_durations_table', 2),
(12, '2020_02_27_192611_create_phsales_table', 3),
(13, '2020_02_29_092843_create_stores_table', 4),
(14, '2020_02_29_092901_create_pharmacies_table', 4),
(15, '2020_02_29_094213_create_sales_table', 5),
(16, '2020_02_29_114314_create_stores_table', 6),
(17, '2020_03_02_174938_create_pharmacies_table', 7),
(18, '2020_03_02_180423_create_pharmacies_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacies`
--

CREATE TABLE `pharmacies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pharmaciesId` int(11) NOT NULL,
  `phName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phAdmin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pharmacies`
--

INSERT INTO `pharmacies` (`id`, `pharmaciesId`, `phName`, `address`, `phAdmin`, `email`, `password`, `phone`, `created_at`, `updated_at`) VALUES
(1, 112, 'y', 'y', 'y', 'y@gmail.com', 'yyyyyyy', '09090090909', '2020-03-02 15:07:01', '2020-03-02 15:12:45'),
(2, 2, 'h', 'k', 'j', 'y@gmail.com', 'aaaaa', '090909', '2020-03-05 10:31:39', '2020-03-05 10:31:39');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacists`
--

CREATE TABLE `pharmacists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pharmacistName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phsales`
--

CREATE TABLE `phsales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `medicine` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `durationsId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phsales`
--

INSERT INTO `phsales` (`id`, `medicine`, `medType`, `qty`, `price`, `durationsId`, `created_at`, `updated_at`) VALUES
(1, 'banadol', 'tablet', 20, 120, 1, '2020-02-03 21:00:00', '2020-02-17 21:00:00'),
(2, 'tramadol', 'huganna', 49, 90, 1, '2020-02-25 21:00:00', '2020-02-27 17:09:05'),
(3, 'banadol', 'tablet', 20, 120, 1, '2020-02-03 21:00:00', '2020-02-17 21:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `medicineId` int(11) NOT NULL,
  `rqty` int(11) NOT NULL,
  `rcompany` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mtype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `medicineId`, `rqty`, `rcompany`, `mtype`, `created_at`, `updated_at`) VALUES
(8, 1, 90, 'medPharma', 'tablet', '2020-02-28 10:06:41', '2020-02-28 11:07:28'),
(9, 2, 23, 'delta', 'hugan', '2020-02-28 10:08:39', '2020-02-28 10:08:39'),
(10, 2, 70, 'pharmacology', 'injection', '2020-02-28 10:58:43', '2020-02-28 11:10:47'),
(11, 2, 10, 'helthCare', 'Drip', '2020-02-28 11:05:56', '2020-02-28 11:05:56'),
(12, 4, 55, 'tabjection', 'tablet', '2020-02-28 11:07:12', '2020-02-28 11:07:12'),
(13, 5, 100, 'helthCare', 'injection', '2020-02-28 11:10:01', '2020-02-28 11:10:34'),
(14, 2, 120, 'a', 'jj', '2020-02-29 05:52:59', '2020-02-29 05:53:28'),
(15, 1, 2, 's', 's', '2020-02-29 10:03:40', '2020-02-29 10:03:40'),
(16, 10, 120, 'medPharma', 'injection', '2020-03-02 13:50:28', '2020-03-02 14:00:24');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `salesId` int(11) NOT NULL,
  `pharmaciesId` bigint(20) UNSIGNED NOT NULL,
  `medicineId` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `salesId`, `pharmaciesId`, `medicineId`, `qty`, `created_at`, `updated_at`) VALUES
(2, 11, 11, 11, 230, '2020-03-02 14:04:17', '2020-03-02 14:04:28');

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `medicineId` int(11) NOT NULL,
  `medicine` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `proDate` date NOT NULL,
  `exDate` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `medicineId`, `medicine`, `mType`, `company`, `qty`, `price`, `proDate`, `exDate`, `created_at`, `updated_at`) VALUES
(2, 14, 'j', 'j', 'j', 1, 1, '2019-12-12', '2020-12-12', '2020-02-29 09:02:50', '2020-03-02 14:17:48'),
(3, 2, 'Panadol', 'tablet', 'pharmacology', 32, 34, '2019-12-12', '2020-12-12', '2020-03-02 15:39:05', '2020-03-02 15:39:05'),
(4, 3, 'h', 'h', 'h', 90, 90, '2019-12-12', '2020-12-12', '2020-03-05 04:51:13', '2020-03-05 04:51:13'),
(5, 12, 'zangabeel', 'nature', 'nearth', 10, 90, '2019-02-12', '2020-12-12', '2020-03-06 08:22:58', '2020-03-06 08:22:58'),
(6, 12, 'zangabeel', 'nature', 'nearth', 10, 90, '2019-02-12', '2020-02-12', '2020-03-06 08:22:59', '2020-03-06 08:22:59'),
(7, 21, 'oo', 'oo', 'oo', 1, 10, '2018-12-12', '2019-12-12', '2020-03-06 08:23:47', '2020-03-06 08:23:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `durations`
--
ALTER TABLE `durations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pharmacies`
--
ALTER TABLE `pharmacies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pharmacists`
--
ALTER TABLE `pharmacists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phsales`
--
ALTER TABLE `phsales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sales_pharmaciesid_index` (`pharmaciesId`),
  ADD KEY `sales_medicineid_index` (`medicineId`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
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
-- AUTO_INCREMENT for table `durations`
--
ALTER TABLE `durations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pharmacies`
--
ALTER TABLE `pharmacies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pharmacists`
--
ALTER TABLE `pharmacists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `phsales`
--
ALTER TABLE `phsales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
