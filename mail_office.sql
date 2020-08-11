-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2020 at 10:06 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mail_office`
--

-- --------------------------------------------------------

--
-- Table structure for table `bagian`
--

CREATE TABLE `bagian` (
  `id_bagian` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL,
  `nama_bagian` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bagian`
--

INSERT INTO `bagian` (`id_bagian`, `id_user`, `nama_bagian`) VALUES
(2, NULL, 'Kepala Dinas');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2020-07-30-041806', 'App\\Database\\Migrations\\User', 'default', 'App', 1596084993, 1),
(4, '2020-07-30-041859', 'App\\Database\\Migrations\\Bagian', 'default', 'App', 1596085435, 3),
(5, '2020-07-30-041832', 'App\\Database\\Migrations\\SuratMasuk', 'default', 'App', 1596520941, 4),
(7, '2020-07-30-041838', 'App\\Database\\Migrations\\SuratKeluar', 'default', 'App', 1596521088, 5);

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id_sk` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL,
  `no_surat` varchar(100) NOT NULL,
  `tgl_surat` date NOT NULL,
  `perihal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id_sm` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL,
  `no_surat` varchar(100) NOT NULL,
  `tgl_surat` date NOT NULL,
  `perihal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `pengalaman` varchar(255) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `level` enum('Super_Admin','Admin','User') NOT NULL DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama_lengkap`, `email`, `password`, `alamat`, `telepon`, `pengalaman`, `status`, `level`) VALUES
(6, 'SYAEKHONI22', 'Muhammad Syaekhoni', 'Syaekhonimuhammad@gmail.com', '$2y$10$Bs8iDrel7xQY0kx/QSBnMe0NQmNrCJM.oAb5Mze3Kda8pg1hO1COm', '', '', '', 'Active', 'Super_Admin'),
(7, 'MunirSobakhulMunir', 'Sobakhul Munir S', 'MunirSR@gmail.com', '$2y$10$XiXHE525UFlfRatR4er9jOLSGULUYQn2eyNRnh52fPsYsdMOQCL96', '', '', '', 'Active', 'Super_Admin'),
(8, 'Renanta_po', 'Renanta Putra O', 'RenantaPO@gmail.com', '', 'Malang', '085649750456', 'Fresh Graduate', 'Active', 'Super_Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bagian`
--
ALTER TABLE `bagian`
  ADD PRIMARY KEY (`id_bagian`),
  ADD KEY `bagian_id_user_foreign` (`id_user`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id_sk`),
  ADD KEY `surat_keluar_id_user_foreign` (`id_user`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id_sm`),
  ADD KEY `surat_masuk_id_user_foreign` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bagian`
--
ALTER TABLE `bagian`
  MODIFY `id_bagian` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id_sk` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id_sm` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bagian`
--
ALTER TABLE `bagian`
  ADD CONSTRAINT `bagian_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD CONSTRAINT `surat_keluar_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD CONSTRAINT `surat_masuk_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
