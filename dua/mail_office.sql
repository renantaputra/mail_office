-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2020 at 02:45 PM
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
(2, NULL, 'Kepala Dinas Komunikasi dan Informatika'),
(3, 23, 'Kasi Pengembangan aplikasi');

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
  `nama_pengirim` varchar(255) NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `lampiran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `surat_keluar`
--

INSERT INTO `surat_keluar` (`id_sk`, `id_user`, `no_surat`, `tgl_surat`, `nama_pengirim`, `perihal`, `deskripsi`, `lampiran`) VALUES
(10, 12, 'test', '2020-08-17', 'Super_admin', 'test', '', ''),
(11, 20, 'RE/01', '2020-08-17', 'Renanta Putra O', 'test', '', ''),
(12, 13, 'Percobaan1', '2020-08-17', 'Renanta Putra O', 'Minuman', '', ''),
(16, 22, '123', '2020-08-21', 'Renanta Putra O', '123', '', ''),
(17, 12, 'TEST', '2020-08-21', 'Admin', 'TEST', '', ''),
(19, 6, 'kjkj', '2020-08-21', 'Admin', 'kkjk', '', ''),
(20, 20, 'TERSERAH', '2020-08-21', 'Admin', 'MIN MINTA TOLONG BELIKAN AKU MAKANAN', '', ''),
(21, 13, 'CI123', '2020-08-24', 'Renanta Putra O', 'SURAT DINAS', '', ''),
(22, 12, 'asd', '2020-08-24', 'Renanta Putra O', 'asdsad', '', ''),
(23, 20, '123', '2020-08-24', 'Renanta Putra O', '123', '', ''),
(28, 12, 'BARU', '2020-08-24', 'Renanta Putra O', 'BARU', '', ''),
(30, 12, '123', '2020-08-24', 'Sobakhul Munir S', 'BARU COY', '', ''),
(32, 20, '123', '2003-09-20', 'Renanta Putra O', '123123', '', ''),
(33, 6, '1111111111111', '2020-09-23', 'Renanta Putra O', '1111111111111111', '', ''),
(34, 12, 'QWER', '2020-09-10', 'Renanta Putra O', ' QWER', 'QWER', 'surat_36.pdf'),
(35, 12, ' HOAM123', '2020-09-10', 'Renanta Putra O', ' HOAM', 'HOAM....\r\n\r\n\r\nHOAM\r\nHOAM\r\n\r\nASDSADASDASD', 'surat_19.pdf'),
(36, 12, 'zxczxc', '2020-09-10', 'Renanta Putra O', ' zcxzczxczxc', 'zxczxc\r\n\r\n\r\nzxczxc\r\n\r\n\r\nzxczxczx\r\n\r\nzxczxc', 'surat_20.pdf'),
(37, 12, '    asd', '2020-09-10', 'Renanta Putra O', '    asd', 'asdasd', 'surat_21.pdf'),
(38, 12, ' 13123123', '2020-09-10', 'Renanta Putra O', ' 123123', '123123', 'surat_22.pdf'),
(41, 12, ' 1', '2020-09-10', 'Renanta Putra O', ' 1', '1', 'SBiasa 5A.doc'),
(42, 12, ' BM/III/2020/01/120', '2020-09-11', 'Renanta Putra O', '  Permohonan', 'Asalamualaikum .wr.wb\r\n\r\nSehubungan dengan adannya kegiatan seminar keagamaan yang diadakan di pondok pesantren Al Ihya Ulumuddin Jakarta, yang diadakan pada :\r\n\r\nHari/tanggal : Sabtu, 11 Februari 2019\r\nwaktu : 07.30 s/d selesai\r\nTempat : Aula Ponpes Al Ihya Ulumuddin\r\nUntuk ini kami mewakili dari perwakilan pondok pesantren untuk bantuan dana guna acaa seminar keagamaan yang diadakan setahun sekali. Sebagai pertimbangan kami lampirkan satu berkas proposal mengenai seminar yang akan dilakukan.\r\n\r\nDemikian surat permohonan dari kami, atas partisipasinya kami ucapkan terima kasih.', 'fcd_surat_37.pdf'),
(43, 12, ' BM/III/2020/01/121', '2020-09-11', 'Renanta Putra O', ' Permohonan', 'Assalamualaikum .wr.wb \r\n<br> <br> \r\nSehubungan dengan adanya kegiatan seminar keagamaan yang diadakan di\r\npondok pesantren Al Ihya Ulumuddin Jakarta, yang diadakan pada : \r\n<br> <br> \r\nHari/tanggal : Sabtu, 11 Februari 2019  <br> \r\nwaktu : 07.30 s/d selesai  <br> \r\nTempat : Aula Ponpes Al Ihya Ulumuddin  <br> <br> \r\nUntuk ini kami mewakili dari perwakilan pondok pesantren untuk bantuan dana guna acaa seminar keagamaan yang diadakan setahun sekali. Sebagai pertimbangan kami lampirkan satu berkas proposal mengenai seminar yang akan dilakukan. \r\n<br> <br> \r\nDemikian surat permohonan dari kami, atas partisipasinya kami ucapkan terima kasih.', '588_surat_60.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id_sm` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL,
  `no_surat` varchar(100) NOT NULL,
  `tgl_surat` date NOT NULL,
  `nama_pengirim` varchar(255) NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `lampiran` varchar(100) NOT NULL,
  `dibaca` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `surat_masuk`
--

INSERT INTO `surat_masuk` (`id_sm`, `id_user`, `no_surat`, `tgl_surat`, `nama_pengirim`, `perihal`, `deskripsi`, `lampiran`, `dibaca`) VALUES
(1, 12, 'test', '2020-08-17', 'Super_admin', 'test', '', '', 1),
(2, 13, 'test2', '2020-08-17', 'Super_admin', 'test2', '', '', 0),
(3, 6, 'test3', '2020-08-17', 'Super_admin', 'test3', '', '', 0),
(4, 20, 'c1', '2020-08-17', 'Renanta Putra O', 'ini surat baru', '', '', 1),
(5, 22, '123', '2020-08-21', 'Renanta Putra O', '123', '', '', 0),
(6, 12, 'TEST', '2020-08-21', 'Admin', 'TEST', '', '', 1),
(7, 12, 'k;k', '2020-08-21', 'Admin', 'kjkjkjkj', '', '', 1),
(8, 6, 'kjkj', '2020-08-21', 'Admin', 'kkjk', '', '', 0),
(9, 20, 'TERSERAH', '2020-08-21', 'Admin', 'MIN MINTA TOLONG BELIKAN AKU MAKANAN', '', '', 1),
(10, 13, 'CI123', '2020-08-24', 'Renanta Putra O', 'SURAT DINAS', '', '', 0),
(11, 12, 'asd', '2020-08-24', 'Renanta Putra O', 'asdsad', '', '', 1),
(12, 20, '123', '2020-08-24', 'Renanta Putra O', '123', '', '', 1),
(13, 21, '123', '2020-08-24', 'Renanta Putra O', '123', '', '', 1),
(14, 12, '123', '2020-08-24', 'Renanta Putra O', '123', '', '', 1),
(15, 20, '123', '2020-08-24', 'Renanta Putra O', '123', '', '', 1),
(16, 13, '123', '2020-08-24', 'Renanta Putra O', '123', '', '', 0),
(17, 12, 'BARU', '2020-08-24', 'Renanta Putra O', 'BARU', '', '', 1),
(18, 13, '123', '2020-08-24', 'Sobakhul Munir S', 'BARU COY', '', '', 0),
(19, 12, '123', '2020-08-24', 'Sobakhul Munir S', 'BARU COY', '', '', 1),
(20, 6, 'qwe', '2018-07-27', 'Renanta Putra O', 'qwe', '', '', 0),
(21, 20, '123', '2003-09-20', 'Renanta Putra O', '123123', '', '', 0),
(22, 6, '1111111111111', '2020-09-23', 'Renanta Putra O', '1111111111111111', '', '', 0),
(23, 12, 'QWER', '2020-09-10', 'Renanta Putra O', ' QWER', 'QWER', 'surat_36.pdf', 1),
(24, 12, ' HOAM', '2020-09-10', 'Renanta Putra O', ' HOAM', 'HOAM....\r\n\r\n\r\nTANGGAL : INI\r\nBULAN : INI\r\n\r\nSEKAINASDNASDKAMSLMDAD ...', 'surat_34.pdf', 1),
(25, 12, 'zxczxc', '2020-09-10', 'Renanta Putra O', ' zcxzczxczxc', 'zxczxc\r\n\r\n\r\nzxczxc\r\n\r\n\r\nzxczxczx\r\n\r\nzxczxc', 'surat_20.pdf', 1),
(26, 12, '    asd', '2020-09-10', 'Renanta Putra O', '    asd', 'asdasd', 'surat_21.pdf', 1),
(27, 12, ' 13123123', '2020-09-10', 'Renanta Putra O', ' 123123', '123123', 'surat_22.pdf', 0),
(28, 12, '  1', '2020-09-10', 'Renanta Putra O', '  1', '1111111111\r\n1\r\n1\r\n1\r\n1\r\n1\r\n\r\n1', 'surat_35.pdf', 0),
(29, 12, ' 1', '2020-09-10', 'Renanta Putra O', ' 1', '1\r\n1\r\n1\r\n1\r\n1\r\n', '1 Big Data Fundamentals.pptx', 0),
(30, 12, ' 1', '2020-09-10', 'Renanta Putra O', ' 1', '1', 'SBiasa 5A.doc', 0),
(31, 12, ' BM/III/2020/01/120', '2020-09-11', 'Renanta Putra O', '  Permohonan', 'Asalamualaikum .wr.wb\r\n\r\nSehubungan dengan adannya kegiatan seminar keagamaan yang diadakan di pondok pesantren Al Ihya Ulumuddin Jakarta, yang diadakan pada :\r\n\r\nHari/tanggal : Sabtu, 11 Februari 2019\r\nwaktu : 07.30 s/d selesai\r\nTempat : Aula Ponpes Al Ihya Ulumuddin\r\nUntuk ini kami mewakili dari perwakilan pondok pesantren untuk bantuan dana guna acaa seminar keagamaan yang diadakan setahun sekali. Sebagai pertimbangan kami lampirkan satu berkas proposal mengenai seminar yang akan dilakukan.\r\n\r\nDemikian surat permohonan dari kami, atas partisipasinya kami ucapkan terima kasih.', 'fcd_surat_37.pdf', 1),
(32, 12, ' BM/III/2020/01/121', '2020-09-11', 'Renanta Putra O', ' Permohonan', 'Assalamualaikum .wr.wb \r\n<br> <br> \r\nSehubungan dengan adanya kegiatan seminar keagamaan yang diadakan di\r\npondok pesantren Al Ihya Ulumuddin Jakarta, yang diadakan pada : \r\n<br> <br> \r\nHari/tanggal : Sabtu, 11 Februari 2019  <br> \r\nwaktu : 07.30 s/d selesai  <br> \r\nTempat : Aula Ponpes Al Ihya Ulumuddin  <br> <br> \r\nUntuk ini kami mewakili dari perwakilan pondok pesantren untuk bantuan dana guna acaa seminar keagamaan yang diadakan setahun sekali. Sebagai pertimbangan kami lampirkan satu berkas proposal mengenai seminar yang akan dilakukan. \r\n<br> <br> \r\nDemikian surat permohonan dari kami, atas partisipasinya kami ucapkan terima kasih.', '588_surat_60.pdf', 0);

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
  `level` enum('Super_Admin','Admin','User') NOT NULL DEFAULT 'User',
  `foto` varchar(250) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama_lengkap`, `email`, `password`, `alamat`, `telepon`, `pengalaman`, `status`, `level`, `foto`, `created_at`, `updated_at`) VALUES
(6, 'M_Syaekhoni22', 'Muhammad Syaekhoni', 'Syaekhonimuhammad@gmail.com', '$2y$10$Bs8iDrel7xQY0kx/QSBnMe0NQmNrCJM.oAb5Mze3Kda8pg1hO1COm', 'Tulungagung', '085876330381', 'Fresh Graduate', 'Active', 'Super_Admin', 'default.png', NULL, NULL),
(12, 'RenantaPO12345', 'Renanta Putra O', 'RenantaPO@gmail.com', '$2y$10$bthd7qNP75DVInYNLQjga.LFSxm4RNv3rD7zfrGp6K0M2FeQP/s66', 'Malang', '085649750587', 'Fresh Graduate', 'Active', 'Super_Admin', '341_renanta.jpg', NULL, NULL),
(13, 'MunirSR6999', 'Sobakhul Munir S', 'MunirSR@gmail.com', '$2y$10$N.X/zv52PXkoOHW.MHt2BucFLqDKsslwKvOSGK3fr6aZJ9Ov9w4ba', 'Blitar', '085649750456', 'Fresh Graduate', 'Active', 'User', 'default.png', NULL, NULL),
(20, 'S_admin', 'Super_admin', 's.admin@admin.com', '$2y$10$JXK4MFdlzxpjThvAg5pVTO9kg4uMhGh5HJlhtg3CIz.WlfKx/qUTC', 'admin', 'admin', 'Super Admin', 'Active', 'Super_Admin', 'default.png', NULL, NULL),
(21, 'user', 'user', 'user@user.com', '$2y$10$5ybranvdrLEoWeTfVAJ2Q.poVxpuerpMDnOzE3VBCUYnAkbLEFqlS', 'user', 'user', 'user', 'Active', 'User', 'default.png', NULL, NULL),
(22, 'admin', 'Admin', 'admin@admin.com', '$2y$10$NOmMEaCT42RFeAdgrjZ65.hOGL1heL6HKbZKD/LKjV5fj5HPrmzXu', 'admin', 'admin', 'Admin', 'Active', 'Admin', 'default.png', NULL, NULL),
(23, 'AHMAD_MUZAKI_S.T', 'AHMAD MUZAKI S.T', 'AHMAD_MUZAKI_S.T@gmail.com', '$2y$10$u9cKI4DkDbo74a5Ab0/IkufX24.RSqwYwu2J8txJSDD2bbWhy009S', '-', '-', '-', 'Active', 'Super_Admin', 'default.png', NULL, NULL);

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
  MODIFY `id_bagian` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id_sk` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id_sm` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

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
