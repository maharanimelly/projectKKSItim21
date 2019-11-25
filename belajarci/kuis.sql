-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2019 at 02:59 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuis`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `pengarang` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `captcha`
--

CREATE TABLE `captcha` (
  `captcha_id` bigint(20) NOT NULL,
  `captcha_time` int(11) NOT NULL,
  `ip_address` varchar(16) NOT NULL,
  `word` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `captcha`
--

INSERT INTO `captcha` (`captcha_id`, `captcha_time`, `ip_address`, `word`) VALUES
(24, 1570596219, '::1', '1NFfjqlf'),
(25, 1570596328, '::1', 'YNBKqbDT');

-- --------------------------------------------------------

--
-- Table structure for table `uploadimage`
--

CREATE TABLE `uploadimage` (
  `ID` int(11) NOT NULL,
  `nama_gambar` varchar(35) DEFAULT NULL,
  `tipe_gambar` varchar(10) DEFAULT NULL,
  `ket_gambar` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploadimage`
--

INSERT INTO `uploadimage` (`ID`, `nama_gambar`, `tipe_gambar`, `ket_gambar`) VALUES
(1, 'file_1570245237.png', 'image/png', 'asd'),
(2, 'file_1570251957.jpg', 'image/jpeg', 'fgdgdf'),
(3, 'file_1570276726.png', 'image/png', 'gambar nih'),
(4, 'file_1570277204.png', 'image/png', 'sdasd'),
(5, 'sports-car-side-view5-768x408.gif', 'image/gif', 'car'),
(6, 'Program_RPL.jpg', 'image/jpeg', 'ini gambar 3'),
(7, 'GAMBAR-PEMANDANGAN-GUNUNG-DAN-SAWAH', 'image/jpeg', 'Pemandangan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(225) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `salt` varchar(50) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `nama`, `email`, `username`, `password`, `alamat`, `gender`, `salt`, `level`) VALUES
(1, '', '', 'admin', '21232f297a57a5a743894a0e4a801fc3', '', '', '', 'admin'),
(2, 'kiki', 'kikidewadota@gmail.com', 'kiki', '85c54c6bebf6fb1dc81f1a6cca2106639f642a0d', 'gunung putri', 'Male', '9mXcriAF', 'admin'),
(3, 'jkzxjs', 'kikidewadota@gmail.com', 'ksandjkasdnjk', 'c3e53fe2c8a1829d15b6e4b9026307202e71b5aa', 'gunung putri', 'Male', '&LFEPxeE', 'user'),
(4, 'kiki123', 'kikidewadota7@gmail.com', 'kiki123', 'e852d55df1898f2fb6e1705138fe0852b05d5895', 'gn putri', 'Male', 'OO.fzHyo', 'admin'),
(5, 'panjul', 'panjul@gmail.com', 'panjul123', '4cb3fca3090743fb5a84ab7a48f8a9bcda5a42d0', 'sentul', 'Male', 'McYRHCg3', 'admin'),
(6, 'andi', 'andi@gmail.com', 'andi123', '5da63405c06107046ec5aab68dd55a930d3ed448', 'asdjknsjandjqw', 'Male', 'LAz8UYFH', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `captcha`
--
ALTER TABLE `captcha`
  ADD PRIMARY KEY (`captcha_id`);

--
-- Indexes for table `uploadimage`
--
ALTER TABLE `uploadimage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `captcha`
--
ALTER TABLE `captcha`
  MODIFY `captcha_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `uploadimage`
--
ALTER TABLE `uploadimage`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
