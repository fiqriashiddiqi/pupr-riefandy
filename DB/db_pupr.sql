-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2022 at 12:30 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pupr`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_backend_groups`
--

CREATE TABLE `tb_backend_groups` (
  `id_backend_groups` int(10) NOT NULL,
  `groups_name` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_backend_groups`
--

INSERT INTO `tb_backend_groups` (`id_backend_groups`, `groups_name`) VALUES
(1, 'Super Admin'),
(2, 'Manajemen'),
(3, 'Petugas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_backend_menus`
--

CREATE TABLE `tb_backend_menus` (
  `id_backend_menus` int(10) NOT NULL,
  `menus_name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `menus_controller` text CHARACTER SET latin1 NOT NULL,
  `menus_favicon` varchar(100) CHARACTER SET latin1 NOT NULL,
  `menus_groups_rules` text CHARACTER SET latin1 NOT NULL,
  `menus_submenus_status` enum('Yes','No','Header') CHARACTER SET latin1 NOT NULL,
  `menus_access_status` enum('Activated','Deactivated') COLLATE utf8mb4_unicode_ci NOT NULL,
  `menus_orders` int(5) NOT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_backend_menus`
--

INSERT INTO `tb_backend_menus` (`id_backend_menus`, `menus_name`, `menus_controller`, `menus_favicon`, `menus_groups_rules`, `menus_submenus_status`, `menus_access_status`, `menus_orders`, `status`) VALUES
(1, 'Dashboard Admin Officer', 'Admin/B_dashboard', 'fa-dashboard', '[\"1\"]', 'No', 'Activated', 1, NULL),
(2, 'Perubahan Kontrak', 'Admin/B_users', 'fa-book', '[\"1\"]', 'No', 'Activated', 3, 'disabled'),
(3, 'Daftar Permohonan', 'Admin/B_tempatbayar', 'fa-pencil-square-o', '[\"1\"]', 'No', 'Activated', 2, 'disabled');

-- --------------------------------------------------------

--
-- Table structure for table `tb_backend_users`
--

CREATE TABLE `tb_backend_users` (
  `id_backend_users` int(10) NOT NULL,
  `id_backend_groups` int(10) NOT NULL,
  `id_tempat_bayar` int(10) NOT NULL,
  `users_username` varchar(50) CHARACTER SET latin1 NOT NULL,
  `users_password` text CHARACTER SET latin1 NOT NULL,
  `users_name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `users_role` text CHARACTER SET latin1 NOT NULL,
  `users_access_status` enum('Activated','Deactivated') CHARACTER SET latin1 NOT NULL,
  `users_last_signin` datetime NOT NULL,
  `users_last_signout` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_backend_users`
--

INSERT INTO `tb_backend_users` (`id_backend_users`, `id_backend_groups`, `id_tempat_bayar`, `users_username`, `users_password`, `users_name`, `users_role`, `users_access_status`, `users_last_signin`, `users_last_signout`) VALUES
(1, 1, 2, 'backdoor', '21bf21f8a9aedc6a395dd0720a1e11ec2220804c', 'Admin Officer', '', 'Activated', '2022-08-02 14:37:30', '2022-08-02 14:40:31'),
(5, 3, 4, 'tinaa', '7c222fb2927d828af22f592134e8932480637c0d', 'Tina Agustina', '', 'Activated', '2020-11-04 08:48:35', '2020-11-03 09:20:26'),
(7, 1, 4, 'ramonda', '7c222fb2927d828af22f592134e8932480637c0d', 'Ramonda', '', 'Activated', '2020-11-04 11:08:28', '2020-11-04 11:12:23'),
(8, 3, 3, 'krisna', '7c222fb2927d828af22f592134e8932480637c0d', 'krisna', '', 'Activated', '2020-11-04 11:13:32', '2020-11-04 11:08:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_backend_groups`
--
ALTER TABLE `tb_backend_groups`
  ADD PRIMARY KEY (`id_backend_groups`);

--
-- Indexes for table `tb_backend_menus`
--
ALTER TABLE `tb_backend_menus`
  ADD PRIMARY KEY (`id_backend_menus`);

--
-- Indexes for table `tb_backend_users`
--
ALTER TABLE `tb_backend_users`
  ADD PRIMARY KEY (`id_backend_users`),
  ADD KEY `id_backend_groups` (`id_backend_groups`),
  ADD KEY `id_tempat_bayar` (`id_tempat_bayar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_backend_groups`
--
ALTER TABLE `tb_backend_groups`
  MODIFY `id_backend_groups` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_backend_menus`
--
ALTER TABLE `tb_backend_menus`
  MODIFY `id_backend_menus` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_backend_users`
--
ALTER TABLE `tb_backend_users`
  MODIFY `id_backend_users` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
