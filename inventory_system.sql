-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2020 at 02:31 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `insertdata`
--

DROP TABLE IF EXISTS `insertdata`;
CREATE TABLE `insertdata` (
  `id` int(11) NOT NULL,
  `code_unique` varchar(50) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `id_pic` varchar(100) NOT NULL,
  `nama_pic` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insertdata`
--

INSERT INTO `insertdata` (`id`, `code_unique`, `nama_barang`, `location`, `date`, `id_pic`, `nama_pic`, `status`) VALUES
(1, 'MNT03', 'Monitor', 'ABC', '2020-12-31', '123', 'ABC', 'Ready'),
(7, 'MNT02', 'Monitor', 'ABCD', '2020-12-01', '1234', 'ABCD', 'Ready'),
(9, 'MNT01', 'Monitor', 'ABCD', '2020-12-02', '1234', 'ABCD', 'Ready');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `nama`, `email`, `password`, `level`, `created_at`) VALUES
(1, 'admin', 'Admin', 'admin@admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', '2020-02-17 14:39:01'),
(2, 'dzakiyah', 'Dzakiyah', 'dzakiyah@dzak', '75da24d5570e6a068905701ddba19496', 'User', '2020-03-02 10:59:45'),
(3, 'pq', 'PQ', 'popopop@popo.com', '382da15dfcfa571b3973cb5ae2223f76', 'User', '2020-03-06 16:26:48'),
(4, 'vian', 'Vian', 'vian@vian', '2ceefdecaeaba09fd7d342302d91debf', 'User', '2020-03-18 22:22:17'),
(5, 'siwon', 'siwon', 'siwon@siw', 'ff51d65278f5e1eefef544cf75b4d560', 'User', '2020-03-18 22:24:05'),
(6, 'superj', 'super junior', 'super@jr', 'eb03a81479d1b771474c5e1ba84eca4d', 'Admin', '2020-03-18 22:30:19');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `code_unique` varchar(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `nama_peminjam` varchar(255) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `code_unique`, `nama_barang`, `nama_peminjam`, `tanggal_pinjam`, `tanggal_kembali`, `status`) VALUES
(9, 'MNT03', 'Monitor', 'ABCD', '2020-03-26', '0000-00-00', 'Dipinjam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `insertdata`
--
ALTER TABLE `insertdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `insertdata`
--
ALTER TABLE `insertdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
