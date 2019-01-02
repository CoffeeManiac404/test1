-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2018 at 11:37 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carwash`
--

-- --------------------------------------------------------

--
-- Table structure for table `cuci`
--

CREATE TABLE `cuci` (
  `id` int(11) NOT NULL,
  `nopol` varchar(20) NOT NULL,
  `jenken` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cuci`
--

INSERT INTO `cuci` (`id`, `nopol`, `jenken`, `nama`, `tanggal`, `status`) VALUES
(20, 'B 490 BP', 'Mobil', 'AVANZA', '2018-06-03', 'SELESAI'),
(21, 'B 890 JKL', 'Mobil', 'Toyota Yaris', '2018-06-03', 'SELESAI'),
(23, 'B 490 BP', 'Motor', 'AVANZA', '2018-06-06', 'SELESAI'),
(24, 'F 789 BHJ', 'Mobil', 'Xenia', '2018-06-06', 'SELESAI'),
(25, 'B 490 BP', 'Mobil', 'Jazz', '2018-07-03', 'SELESAI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cuci`
--
ALTER TABLE `cuci`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cuci`
--
ALTER TABLE `cuci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
