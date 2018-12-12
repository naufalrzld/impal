-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2018 at 08:24 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_matrial`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `barang_id` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `images` varchar(100) NOT NULL DEFAULT 'default.png',
  `harga` int(11) NOT NULL,
  `deskripsi_b` text NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`barang_id`, `nama_barang`, `images`, `harga`, `deskripsi_b`, `stok`) VALUES
(6, 'Palu', 'palu.jpg', 15000, 'Warna hitam\r\nPegangan besi\r\nBerat 1.5 kg\r\nPanjang 20 cm', 10),
(7, 'Cat Tembok Merah', 'cat_vinilex.jpg', 200000, 'Cat untuk tembok warna merah', 8),
(8, 'Besi Beton Ulir', 'besi.jpg', 7000, 'Harga/kg, minimal pembelian 1 kg', 100);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`, `status`) VALUES
('icang@gmail.com', 'icang', 0),
('naufalrzld@gmail.com', 'naufalrizaldi', 1),
('nurliaha@gmail.com', 'nurliaha', 0);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `jenis_kelamin` int(1) NOT NULL,
  `foto` varchar(100) NOT NULL DEFAULT 'default.png',
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `email`, `nama`, `no_tlp`, `jenis_kelamin`, `foto`, `alamat`) VALUES
(1, 'naufalrzld@gmail.com', 'Mochammad Naufal Rizaldi', '087722390424', 1, 'PhotoGrid_1508002743859.jpg', 'Jl, Saturnus Ujung No. 17 Komp. Margahayu Raya Bandung'),
(2, 'icang@gmail.com', 'M. Faisal Nur', '082112345678', 1, 'akelaku2.png', 'surabaya'),
(3, 'nurliaha@gmail.com', 'Nurliah Awaliah', '082212345678', 0, 'default.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `kode_pemesanan` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `barang_id` int(11) NOT NULL,
  `id_pengiriman` int(11) NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`kode_pemesanan`, `member_id`, `barang_id`, `id_pengiriman`, `kuantitas`, `total`, `tanggal`) VALUES
(25, 1, 6, 3, 1, 15000, '2018-12-12 14:48:51'),
(26, 1, 7, 3, 1, 200000, '2018-12-12 14:48:51'),
(27, 2, 7, 4, 5, 1000000, '2018-12-13 00:04:07'),
(28, 2, 6, 5, 2, 30000, '2018-12-13 00:41:57'),
(29, 2, 8, 5, 5, 35000, '2018-12-13 00:41:57');

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id_pengiriman` int(11) NOT NULL,
  `nama_penerima` varchar(50) NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `alamat` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengiriman`
--

INSERT INTO `pengiriman` (`id_pengiriman`, `nama_penerima`, `no_tlp`, `alamat`, `status`) VALUES
(3, 'Ujang', '082115630310', 'Jl. Telekomunikasi No. 1 Dayehkolot Kab. Bandung', 2),
(4, 'M. Faisal Nur', '082112345678', 'Surabaya', 2),
(5, 'M. Faisal Nur', '082112345678', 'surabaya', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`barang_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`kode_pemesanan`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `barang_id` (`barang_id`),
  ADD KEY `id_pengiriman` (`id_pengiriman`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id_pengiriman`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `barang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `kode_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `id_pengiriman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`email`) REFERENCES `login` (`email`) ON DELETE CASCADE;

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `member` (`member_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`barang_id`) REFERENCES `barang` (`barang_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pemesanan_ibfk_3` FOREIGN KEY (`id_pengiriman`) REFERENCES `pengiriman` (`id_pengiriman`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
