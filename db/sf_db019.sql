-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 04, 2018 at 03:39 AM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sf_db019`
--

-- --------------------------------------------------------

--
-- Table structure for table `parameter`
--

CREATE TABLE `parameter` (
  `id_param` int(11) NOT NULL,
  `nama` text NOT NULL,
  `param1` text,
  `param2` text,
  `param3` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parameter`
--

INSERT INTO `parameter` (`id_param`, `nama`, `param1`, `param2`, `param3`) VALUES
(1, 'jml_user', '1', '4136', '083892903267'),
(2, 'admin', '32f6f1361a29d7e19de9beeb92a9f4683d2022003b0731f3688482f09addffba', '142d43c36a95fc9fed5e5bf921780485b3eda0cd0aff9ad12ddc957ec2504e27', NULL),
(3, 'note', 'addd', 'sd', NULL),
(4, 'coba', '1', '2', '3'),
(10, 'dbank_mandiri', '014_862395', 'bca swarga', 'andini nu fatya'),
(9, 'dbank_iman', '014_862395', 'bca swarga', 'andini nu fatya'),
(11, 'dbank_iwan', '014_862395', 'bca swarga', 'andini nu fatya'),
(12, 'seq', '0', NULL, NULL),
(13, 'Paytren', 'type', 'pyt', NULL),
(14, 'Oriflame', 'type', 'ori', NULL),
(15, 'Eco Racing', 'type', 'eco', NULL),
(17, '90000', 'harga', 'pyt', '6 bulan'),
(18, '150000', 'harga', 'pyt', '1 tahun'),
(19, '200000', 'harga', 'pyt', '2 tahun'),
(20, '50000', 'harga', 'ori', '6 bulan'),
(21, '100000', 'harga', 'ori', '1 tahun'),
(22, '120000', 'harga', 'ori', '2 tahun'),
(23, '55000', 'harga', 'eco', '6 bulan'),
(24, '80000', 'harga', 'eco', '1 tahun'),
(25, '110000', 'harga', 'eco', '2 tahun'),
(26, 'lokasi', 'Bekasi', NULL, NULL),
(27, 'status', 'non aktif', NULL, NULL),
(28, '+93', 'nomor', 'Afganistan', NULL),
(29, '+27', 'nomor', 'Afrika Selatan', NULL),
(30, '+236', 'nomor', 'Afrika Tengah', NULL),
(31, '+1', 'nomor', 'Amerika Serikat', NULL),
(32, '+966', 'nomor', 'Arab Saudi', NULL),
(33, '+53', 'nomor', 'Argentina', NULL),
(34, '+61', 'nomor', 'Australia', NULL),
(35, '+43', 'nomor', 'Austria', NULL),
(36, '+994', 'nomor', 'Azerbaijan', NULL),
(37, '+973', 'nomor', 'Bahrain', NULL),
(38, '+880', 'nomor', 'Bangladesh', NULL),
(39, '+963', 'nomor', 'Syria', NULL),
(40, '+60', 'nomor', 'Malaysia', NULL),
(41, '+20', 'nomor', 'Mesir', NULL),
(42, '+64', 'nomor', 'Selandia Baru', NULL),
(43, '+62', 'nomor', 'Indonesia', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `parameter`
--
ALTER TABLE `parameter`
  ADD PRIMARY KEY (`id_param`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `parameter`
--
ALTER TABLE `parameter`
  MODIFY `id_param` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
