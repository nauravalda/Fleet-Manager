-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2024 at 09:38 AM
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
-- Database: `nikelfleet`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `admin_users`
-- (See below for the actual view)
--
CREATE TABLE `admin_users` (
`id` bigint(20) unsigned
,`name` varchar(255)
,`email` varchar(255)
,`email_verified_at` timestamp
,`password` varchar(255)
,`remember_token` varchar(100)
,`created_at` timestamp
,`updated_at` timestamp
,`role` varchar(10)
);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `lokasi` int(11) NOT NULL,
  `catatan` varchar(120) DEFAULT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`id`, `nama`, `lokasi`, `catatan`, `no_telp`) VALUES
(11, 'Agus Prabowo', 1, NULL, '08123456789'),
(12, 'Budi Santoso', 2, NULL, '08234567890'),
(13, 'Cindy Wijaya', 3, NULL, '08345678901'),
(14, 'Dedi Setiawan', 4, NULL, '08456789012'),
(15, 'Eka Sari', 5, NULL, '08567890123'),
(16, 'Fani Rahman', 6, NULL, '08678901234'),
(17, 'Gita Permadi', 1, NULL, '08789012345'),
(18, 'Hadi Nugroho', 2, NULL, '08890123456'),
(19, 'Indra Cahyono', 3, NULL, '08901234567'),
(20, 'Joko Susilo', 4, NULL, '08912345678');

-- --------------------------------------------------------

--
-- Stand-in structure for view `driver_loc`
-- (See below for the actual view)
--
CREATE TABLE `driver_loc` (
`id` int(11)
,`nama` varchar(50)
,`catatan` varchar(120)
,`no_telp` varchar(15)
,`lokasi` varchar(30)
,`region` varchar(40)
);

-- --------------------------------------------------------

--
-- Table structure for table `kantor`
--

CREATE TABLE `kantor` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `region` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kantor`
--

INSERT INTO `kantor` (`id`, `nama`, `region`) VALUES
(1, 'Tambang ABC', 'Kolaka, Sulawesi Tenggara'),
(2, 'Tambang DEF', 'Luwu Timur, Sulawesi Selatan'),
(3, 'Tambang GHI', 'Halmahera Timur, Maluku Utara'),
(4, 'Tambang JKL', 'Gag, Papua Barat'),
(5, 'Tambang MNO', 'Gresik, Jawa timur'),
(6, 'Tambang PQR', 'Morowali, Sulawesi Tengah');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis` varchar(6) NOT NULL,
  `no_polisi` char(11) NOT NULL,
  `ketersediaan` tinyint(1) NOT NULL DEFAULT 1,
  `vendor` varchar(30) DEFAULT NULL,
  `detail` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id`, `nama`, `jenis`, `no_polisi`, `ketersediaan`, `vendor`, `detail`) VALUES
(1, 'Toyota Avanza', 'orang', 'N 1234 ABC', 1, NULL, 'Kendaraan ini digunakan untuk angkutan penumpang.'),
(2, 'Honda Jazz', 'orang', 'B 5678 DEF', 0, 'PT A', 'Kendaraan ini sedang dalam perbaikan.'),
(3, 'Mitsubishi Triton', 'barang', 'N 91011 GHI', 1, NULL, 'Kendaraan ini digunakan untuk angkutan barang.'),
(4, 'Isuzu Elf', 'barang', 'B 121314 JK', 1, NULL, 'Kendaraan ini digunakan untuk angkutan barang berat.'),
(5, 'Daihatsu Xenia', 'orang', 'N 151617 MN', 1, NULL, 'Kendaraan ini digunakan untuk angkutan penumpang.'),
(6, 'Toyota Hiace', 'barang', 'B 181920 PQ', 0, 'PT B', 'Kendaraan ini sedang dalam perawatan rutin.'),
(7, 'Honda CR-V', 'orang', 'N 2122 STU', 1, NULL, 'Kendaraan ini digunakan untuk angkutan penumpang.'),
(8, 'Toyota Fortuner', 'orang', 'B 2324 VWX', 0, 'PT A', 'Kendaraan ini sedang dalam perbaikan mesin.'),
(9, 'Isuzu Panther', 'barang', 'N 2526 YZA', 1, NULL, 'Kendaraan ini digunakan untuk angkutan barang.'),
(10, 'Suzuki Carry', 'barang', 'B 2728 BCD', 1, NULL, 'Kendaraan ini digunakan untuk angkutan barang ringan.'),
(11, 'Daihatsu Terios', 'orang', 'N 2930 EFG', 1, NULL, 'Kendaraan ini digunakan untuk angkutan penumpang.'),
(12, 'Mitsubishi Pajero', 'barang', 'B 3132 HIJ', 0, 'PT B', 'Kendaraan ini sedang dalam perawatan ban.'),
(13, 'Toyota Kijang', 'orang', 'N 3334 KLM', 1, NULL, 'Kendaraan ini digunakan untuk angkutan penumpang.'),
(14, 'Mazda CX-5', 'orang', 'B 3536 NOP', 0, 'PT A', 'Kendaraan ini sedang dalam perbaikan body.'),
(15, 'Suzuki APV', 'barang', 'N 3738 QRS', 1, NULL, 'Kendaraan ini digunakan untuk angkutan barang.'),
(16, 'Toyota Innova', 'barang', 'B 3940 TUV', 1, NULL, 'Kendaraan ini digunakan untuk angkutan barang.');

-- --------------------------------------------------------

--
-- Stand-in structure for view `mid_lvl_users`
-- (See below for the actual view)
--
CREATE TABLE `mid_lvl_users` (
`id` bigint(20) unsigned
,`name` varchar(255)
,`email` varchar(255)
,`email_verified_at` timestamp
,`password` varchar(255)
,`remember_token` varchar(100)
,`created_at` timestamp
,`updated_at` timestamp
,`role` varchar(10)
);

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
(4, '0001_01_01_000000_create_users_table', 1),
(5, '0001_01_01_000001_create_cache_table', 1),
(6, '0001_01_01_000002_create_jobs_table', 1);

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
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(11) NOT NULL,
  `id_admin` bigint(20) UNSIGNED NOT NULL,
  `id_kendaraan` int(11) NOT NULL,
  `id_driver` int(11) NOT NULL,
  `id_approver_1` bigint(20) UNSIGNED NOT NULL,
  `id_approver_2` bigint(20) UNSIGNED NOT NULL,
  `status_1` tinyint(1) NOT NULL,
  `status_2` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `id_admin`, `id_kendaraan`, `id_driver`, `id_approver_1`, `id_approver_2`, `status_1`, `status_2`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 12, 3, 2, 0, 0, '2024-05-10 06:43:59', '2024-05-10 06:43:59'),
(2, 1, 4, 12, 6, 4, 0, 0, '2024-05-10 08:29:37', '2024-05-10 08:29:37'),
(3, 1, 2, 12, 6, 4, 0, 0, '2024-05-10 16:20:45', '2024-05-10 16:20:45'),
(4, 1, 2, 11, 3, 4, 0, 0, '2024-05-10 16:22:26', '2024-05-10 16:22:26'),
(5, 1, 2, 14, 3, 4, 0, 3, '2024-05-10 16:22:37', '2024-05-10 16:22:37'),
(6, 1, 6, 15, 3, 4, 0, 1, '2024-05-10 16:22:50', '2024-05-10 18:58:00'),
(7, 1, 6, 15, 3, 4, 0, 1, '2024-05-10 16:22:51', '2024-05-10 18:43:39');

-- --------------------------------------------------------

--
-- Stand-in structure for view `pemesanan_view`
-- (See below for the actual view)
--
CREATE TABLE `pemesanan_view` (
`id` int(11)
,`id_admin` bigint(20) unsigned
,`admin_name` varchar(255)
,`admin_email` varchar(255)
,`id_kendaraan` int(11)
,`kendaraan_nama` varchar(50)
,`no_polisi` char(11)
,`id_driver` int(11)
,`driver_no_telp` varchar(15)
,`driver_nama` varchar(50)
,`lokasi` varchar(30)
,`region` varchar(40)
,`id_approver_1` bigint(20) unsigned
,`approver1_name` varchar(255)
,`approver1_email` varchar(255)
,`id_approver_2` bigint(20) unsigned
,`approver2_name` varchar(255)
,`approver2_email` varchar(255)
,`status_1` tinyint(1)
,`status_2` tinyint(1)
,`created_at` timestamp
);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('JxxxZDNhal8vytqjegUMZEtLQ0bglSqpboOe0OKK', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidm9JV3Z2cGRuVmZsZ0lrSjZtb3Bsc1h2eXMwSDlNR3BobnAwNkdySCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wZW1lc2FuYW4iO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1715411910);

-- --------------------------------------------------------

--
-- Stand-in structure for view `top_lvl_users`
-- (See below for the actual view)
--
CREATE TABLE `top_lvl_users` (
`id` bigint(20) unsigned
,`name` varchar(255)
,`email` varchar(255)
,`email_verified_at` timestamp
,`password` varchar(255)
,`remember_token` varchar(100)
,`created_at` timestamp
,`updated_at` timestamp
,`role` varchar(10)
);

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
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Naufal Herdian', 'naufalnau@example.com', '2024-05-10 02:51:34', '$2y$12$4tkZeu1SZ6zrey8fTl86f.JFNfUsX.xMM2n92nQN8qVGw99MKqkBK', 'bI2qBhxrbcRh6K1Wu4mjbIcwLoJ9S7Ji7J20IQLtw7Tuzxt5JzU7ReWYhEiO', '2024-05-10 02:51:34', '2024-05-10 02:51:34', 'admin'),
(2, 'Nanang Ismail', 'nanang@gmail.com', '2024-05-10 02:51:34', '$2y$12$QH69NE63De.x8lbuAWR5yexbfvsm4NJZvwlg3KtbK8AayKdTVBpW6', 'GNFr3lXD1P', '2024-05-10 02:51:34', '2024-05-10 02:51:34', 'top-lvl'),
(3, 'Khansa Kirana', 'khansa@example.com', '2024-05-10 02:51:34', '$2y$12$j9Z/lv6E6nDzTXzzoX6C5OV8GbHGcZSXXiPbu6XZsdOWL01h4dpaG', 'khzgMvZBQY', '2024-05-10 02:51:34', '2024-05-10 02:51:34', 'mid-lvl'),
(4, 'Naura Valda Prameswari', 'nauranaura@example.com', '2024-05-10 02:51:35', '$2y$12$5et5nUBW01Ew74ntN830XuXwgotO2dEFiGGH9V.AfqlozKhfEAdrm', 'NnNVUKTULW0DmNcIEaGHyyDu21sm9m6lpPKZN0o2sAivuRuhgw8rwcjXRUQi', '2024-05-10 02:51:35', '2024-05-10 02:51:35', 'top-lvl'),
(5, 'John Doe', 'johndoe@gmail.com', '2024-05-10 02:51:35', '$2y$12$qm0Gk7Xc1WHfXExt9tQtYewG9ztAe4UjNRwpCbj0gXTyczPsjtIMq', 'R7YVCYxuqq', '2024-05-10 02:51:35', '2024-05-10 02:51:35', 'admin'),
(6, 'Jane Doe', 'janedoe@gmail.com', '2024-05-10 02:51:35', '$2y$12$st9I25bgwgghE4sNuzGf/u2JKaIaENgemYyMu6q6gDfSMpnv0X8Bm', '8fWeCgDoyp', '2024-05-10 02:51:35', '2024-05-10 02:51:35', 'mid-lvl'),
(7, 'Budi Setiawan', 'budbud@example.com', '2024-05-10 02:51:35', '$2y$12$JSYDwbR9M1aezeozODLtyO/yXKTn1OPpx/AryAXixBokVfTwufY5.', 'ez2dH2uDQe', '2024-05-10 02:51:35', '2024-05-10 02:51:35', 'admin'),
(8, 'Siti Rahayu', 'siti@example.com', '2024-05-10 02:51:36', '$2y$12$nPf04i9C5N1e/ysz3od9Ne4HRxmvKdDV.zMsdo8e0UCX9Y1W.hh1u', 'ObMcnqPy0R', '2024-05-10 02:51:36', '2024-05-10 02:51:36', 'mid-lvl'),
(9, 'Joko Susilo', 'jokojoko@example.com', '2024-05-10 02:51:36', '$2y$12$3.CoVgJTdomy5.WKywlo/O0aJpGVA3BoVT5ZRyLnsq3zuB5n4Idza', 'ccl7pTmOtS', '2024-05-10 02:51:36', '2024-05-10 02:51:36', 'mid-lvl'),
(10, 'Joni Sutrisno', 'jonijoni@example.com', '2024-05-10 02:51:36', '$2y$12$do9F6Mc1EuMNC9NZM9VCcuF3CA7ee0QIPov4IXH3d5zRO2uN9/R8y', 'hQXsgbUYEe', '2024-05-10 02:51:36', '2024-05-10 02:51:36', 'top-lvl');

-- --------------------------------------------------------

--
-- Structure for view `admin_users`
--
DROP TABLE IF EXISTS `admin_users`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `admin_users`  AS SELECT `users`.`id` AS `id`, `users`.`name` AS `name`, `users`.`email` AS `email`, `users`.`email_verified_at` AS `email_verified_at`, `users`.`password` AS `password`, `users`.`remember_token` AS `remember_token`, `users`.`created_at` AS `created_at`, `users`.`updated_at` AS `updated_at`, `users`.`role` AS `role` FROM `users` WHERE `users`.`role` = 'admin' ;

-- --------------------------------------------------------

--
-- Structure for view `driver_loc`
--
DROP TABLE IF EXISTS `driver_loc`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `driver_loc`  AS SELECT `driver`.`id` AS `id`, `driver`.`nama` AS `nama`, `driver`.`catatan` AS `catatan`, `driver`.`no_telp` AS `no_telp`, `kantor`.`nama` AS `lokasi`, `kantor`.`region` AS `region` FROM (`driver` join `kantor` on(`driver`.`lokasi` = `kantor`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `mid_lvl_users`
--
DROP TABLE IF EXISTS `mid_lvl_users`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `mid_lvl_users`  AS SELECT `users`.`id` AS `id`, `users`.`name` AS `name`, `users`.`email` AS `email`, `users`.`email_verified_at` AS `email_verified_at`, `users`.`password` AS `password`, `users`.`remember_token` AS `remember_token`, `users`.`created_at` AS `created_at`, `users`.`updated_at` AS `updated_at`, `users`.`role` AS `role` FROM `users` WHERE `users`.`role` = 'mid-lvl' ;

-- --------------------------------------------------------

--
-- Structure for view `pemesanan_view`
--
DROP TABLE IF EXISTS `pemesanan_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pemesanan_view`  AS SELECT `p`.`id` AS `id`, `u1`.`id` AS `id_admin`, `u1`.`name` AS `admin_name`, `u1`.`email` AS `admin_email`, `k`.`id` AS `id_kendaraan`, `k`.`nama` AS `kendaraan_nama`, `k`.`no_polisi` AS `no_polisi`, `d`.`id` AS `id_driver`, `d`.`no_telp` AS `driver_no_telp`, `d`.`nama` AS `driver_nama`, `d`.`lokasi` AS `lokasi`, `d`.`region` AS `region`, `p`.`id_approver_1` AS `id_approver_1`, `u2`.`name` AS `approver1_name`, `u2`.`email` AS `approver1_email`, `p`.`id_approver_2` AS `id_approver_2`, `u3`.`name` AS `approver2_name`, `u3`.`email` AS `approver2_email`, `p`.`status_1` AS `status_1`, `p`.`status_2` AS `status_2`, `p`.`created_at` AS `created_at` FROM (((((`pemesanan` `p` join `users` `u1` on(`p`.`id_admin` = `u1`.`id`)) join `kendaraan` `k` on(`p`.`id_kendaraan` = `k`.`id`)) join `driver_loc` `d` on(`p`.`id_driver` = `d`.`id`)) join `users` `u2` on(`p`.`id_approver_1` = `u2`.`id`)) join `users` `u3` on(`p`.`id_approver_2` = `u3`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `top_lvl_users`
--
DROP TABLE IF EXISTS `top_lvl_users`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `top_lvl_users`  AS SELECT `users`.`id` AS `id`, `users`.`name` AS `name`, `users`.`email` AS `email`, `users`.`email_verified_at` AS `email_verified_at`, `users`.`password` AS `password`, `users`.`remember_token` AS `remember_token`, `users`.`created_at` AS `created_at`, `users`.`updated_at` AS `updated_at`, `users`.`role` AS `role` FROM `users` WHERE `users`.`role` = 'top-lvl' ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lokasi` (`lokasi`);

--
-- Indexes for table `kantor`
--
ALTER TABLE `kantor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_driver` (`id_driver`),
  ADD KEY `id_kendaraan` (`id_kendaraan`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_approver_1` (`id_approver_1`),
  ADD KEY `id_approver_2` (`id_approver_2`);

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
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `kantor`
--
ALTER TABLE `kantor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2212;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `driver`
--
ALTER TABLE `driver`
  ADD CONSTRAINT `driver_ibfk_1` FOREIGN KEY (`lokasi`) REFERENCES `kantor` (`id`);

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_4` FOREIGN KEY (`id_driver`) REFERENCES `driver` (`id`),
  ADD CONSTRAINT `pemesanan_ibfk_5` FOREIGN KEY (`id_kendaraan`) REFERENCES `kendaraan` (`id`),
  ADD CONSTRAINT `pemesanan_ibfk_6` FOREIGN KEY (`id_admin`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `pemesanan_ibfk_7` FOREIGN KEY (`id_approver_1`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `pemesanan_ibfk_8` FOREIGN KEY (`id_approver_2`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
