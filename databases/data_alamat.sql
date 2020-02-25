-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2020 at 03:43 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_alamat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_alamat`
--

CREATE TABLE `tabel_alamat` (
  `id_alamat` int(10) NOT NULL,
  `kelurahan` text COLLATE utf8_unicode_ci NOT NULL,
  `kecamatan` text COLLATE utf8_unicode_ci NOT NULL,
  `provinsi` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tabel_alamat`
--

INSERT INTO `tabel_alamat` (`id_alamat`, `kelurahan`, `kecamatan`, `provinsi`) VALUES
(1, 'test 1', 'test 1', 'test 1'),
(2, 'test 2', 'test 2', 'test 2'),
(7, 'sukadamai', 'cikupa', 'banten'),
(13, 'sukamaju', 'kalideres', '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_alamat`
--
ALTER TABLE `tabel_alamat`
  ADD PRIMARY KEY (`id_alamat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_alamat`
--
ALTER TABLE `tabel_alamat`
  MODIFY `id_alamat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
