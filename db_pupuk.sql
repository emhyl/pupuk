-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 23, 2022 at 05:45 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pupuk`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nik` int(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `klp_tani` varchar(100) NOT NULL,
  `no_telpon` varchar(12) NOT NULL,
  `diskon` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `id_user`, `nik`, `nama`, `alamat`, `klp_tani`, `no_telpon`, `diskon`) VALUES
(1, 2, 1234567890, 'ERWIN', 'KINDANG', 'TANIKU', '085242343546', 5);

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `unit` int(100) NOT NULL,
  `total` int(100) NOT NULL,
  `tgl` date DEFAULT NULL,
  `sts_beli` varchar(7) NOT NULL,
  `metode_bayar` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `gambar_bukti` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id`, `nama`, `alamat`, `no_hp`, `status`, `nama_produk`, `unit`, `total`, `tgl`, `sts_beli`, `metode_bayar`, `gambar`, `gambar_bukti`) VALUES
(37, 'star', 'mantap', 90, 'non member', 'phonska', 1, 20000, '2022-07-23', 'sukses', 'transfer', '85472391.png', '43712956.jpeg'),
(38, 'aco', 'mantap', 909, 'non member', 'urea', 4, 240000, '2022-07-23', 'sukses', 'COD', '82391745.jpg', 'none'),
(39, 'ERWIN', 'KINDANG', 2147483647, 'member', 'star', 4, 100, '2022-07-23', 'sukses', 'COD', '29685014.jpeg', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nm_produk` varchar(100) NOT NULL,
  `harga` int(10) NOT NULL,
  `stok` int(5) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nm_produk`, `harga`, `stok`, `gambar`) VALUES
(23, 'poska', 60000, 10, '21583490.png'),
(25, 'urea', 60000, 1, '82391745.jpg'),
(26, 'Bio Tara', 90000, 6, '67528130.jpg'),
(27, 'petroganik', 100000, 11, '60837124.png'),
(28, 'phonska', 20000, 22, '85472391.png'),
(29, 'SP-36', 28000, 23, '42198637.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `password`, `status`, `username`) VALUES
(1, 'admin', 'admin', 'erwin'),
(2, 'star', 'member', 'star');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nm_produk` (`nm_produk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
