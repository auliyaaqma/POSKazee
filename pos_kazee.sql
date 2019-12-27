-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2019 at 12:04 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos_kazee`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_transactions`
--

CREATE TABLE `detail_transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_transactions`
--

INSERT INTO `detail_transactions` (`id`, `transaction_id`, `product_id`, `qty`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 15, 1, 2, NULL, '2019-12-27 08:57:08', '2019-12-27 08:57:08'),
(3, 16, 2, 3, NULL, '2019-12-27 09:05:29', '2019-12-27 09:05:29'),
(4, 17, 1, 1, NULL, '2019-12-27 09:11:03', '2019-12-27 09:11:03'),
(5, 18, 2, 10, NULL, '2019-12-27 10:13:40', '2019-12-27 10:13:40'),
(6, 19, 2, 10, NULL, '2019-12-27 10:28:09', '2019-12-27 10:28:09'),
(7, 20, 3, 1, NULL, '2019-12-27 10:29:45', '2019-12-27 10:29:45');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_12_27_030833_create_products_table', 2),
(4, '2019_12_27_032821_create_transactions_table', 3),
(5, '2019_12_27_032854_create_detail_transactions_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `photo`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Bits Sport Beat Headphone Over Ear BT-008', 90000, 'gambar1.png', NULL, '2019-12-27 03:22:42', '2019-12-27 03:22:42'),
(2, 'HEADSET EARPHONE HANDSFREE VIVO', 35000, 'gambar2.png', NULL, '2019-12-27 03:22:42', '2019-12-27 03:22:42'),
(3, 'Inone Wireless Optical Mouse 20m transmission', 69900, 'gambar3.png', NULL, '2019-12-27 03:22:42', '2019-12-27 03:22:42'),
(4, 'Logitech B175 Wireless Mouse [ Garansi Resmi ]', 89000, 'gambar4.png', NULL, '2019-12-27 03:22:42', '2019-12-27 03:22:42'),
(5, 'Kipas portable lipat genggam mini hand fan angin gengam portabel handy', 23999, 'gambar5.png', NULL, '2019-12-27 03:22:42', '2019-12-27 03:22:42'),
(6, 'WS858 mic Portable Bluetooth Wireless Microphone Speaker Karaoke KTV MIC KARAOKE', 40500, 'gambar6.png', NULL, '2019-12-27 03:22:42', '2019-12-27 03:22:42'),
(7, 'MSHOP Best PRICE Lampu Tumbler H001 Lampu Hias Natal LED Ricelamp 8M Lampu Dekorasi(bisa kelip)', 12900, 'gambar7.png', NULL, '2019-12-27 03:22:42', '2019-12-27 03:22:42'),
(8, 'FYGALERY DISKON Lampu Tidur / Lampu Hias,LAMPU JAMUR, LED, Jamur Unik Model Avatar+ SENSOR', 5400, 'gambar8.png', NULL, '2019-12-27 03:22:42', '2019-12-27 03:22:42'),
(9, 'MESIN JAHIT PORTABLE 202 ( mini portable sew machine)', 87000, 'gambar9.png', NULL, '2019-12-27 03:22:42', '2019-12-27 03:22:42'),
(10, 'SPEAKER RETAK LED36 / SPEAKER BLUETOOTH LAMPU S10 MUSIC BOX SB', 19000, 'gambar10.png', NULL, '2019-12-27 03:22:42', '2019-12-27 03:22:42'),
(11, 'produk', 10000, '1577432010.png', NULL, '2019-12-27 00:33:30', '2019-12-27 00:33:30'),
(12, 'produk2', 10000, '1577432248.png', NULL, '2019-12-27 07:37:28', '2019-12-27 07:37:28'),
(13, 'produk 2', 13000, '1577432737.PNG', NULL, '2019-12-27 07:45:37', '2019-12-27 07:45:37'),
(14, 'hp', 1000000, '1577432930.jpg', NULL, '2019-12-27 07:48:50', '2019-12-27 07:48:50'),
(15, 'nama produk', 10000, '1577433226.png', '2019-12-27 08:06:11', '2019-12-27 07:53:46', '2019-12-27 08:06:11'),
(16, 'pro', 120, '1577433302.jpg', '2019-12-27 08:05:43', '2019-12-27 07:55:02', '2019-12-27 08:05:43'),
(17, 'contoh produk', 10000, '1577440663.jpg', NULL, '2019-12-27 09:57:44', '2019-12-27 09:57:44');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `total` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `total`, `deleted_at`, `created_at`, `updated_at`) VALUES
(15, 1, 180000, NULL, '2019-12-27 08:57:08', '2019-12-27 08:57:08'),
(16, 1, 105000, NULL, '2019-12-27 09:05:29', '2019-12-27 09:05:29'),
(17, 1, 90000, NULL, '2019-12-27 09:11:03', '2019-12-27 09:11:03'),
(18, 1, 350000, NULL, '2019-12-27 10:13:40', '2019-12-27 10:13:40'),
(19, 2, 350000, NULL, '2019-12-27 10:28:09', '2019-12-27 10:28:09'),
(20, 2, 69900, NULL, '2019-12-27 10:29:45', '2019-12-27 10:29:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '2' COMMENT '1: admin, 2: customer',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `photo`, `role`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Auliya Aqma Dinillah', 'admin@gmail.com', '2019-12-26 20:04:10', '$2y$10$MnQC1bJ1jip3dmrpNX6.QeNHsn/xpdwQ70x1LuFUKP2B1RNVjgVaC', NULL, NULL, '1', NULL, '2019-12-26 20:04:10', '2019-12-26 20:04:10'),
(2, 'customer', 'customer@gmail.com', NULL, '$2y$10$W7/9LzvQB.Augx4n3klnpOhkfKEjqX1IVNnx0ynlJv98MmNPaI/wG', NULL, NULL, '2', NULL, '2019-12-27 10:27:37', '2019-12-27 10:27:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_transactions`
--
ALTER TABLE `detail_transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_transactions_transaction_id_foreign` (`transaction_id`),
  ADD KEY `detail_transactions_product_id_foreign` (`product_id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `detail_transactions`
--
ALTER TABLE `detail_transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_transactions`
--
ALTER TABLE `detail_transactions`
  ADD CONSTRAINT `detail_transactions_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `detail_transactions_transaction_id_foreign` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`id`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
