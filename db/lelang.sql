-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2018 at 04:34 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lelang`
--

-- --------------------------------------------------------

--
-- Table structure for table `hasil_lelang`
--

CREATE TABLE `hasil_lelang` (
  `id_hasil_lelang` int(11) NOT NULL,
  `nama_pelelang` varchar(25) NOT NULL,
  `divisi_pelelang` varchar(25) NOT NULL,
  `nama_penawar` varchar(25) NOT NULL,
  `divisi_penawar` varchar(25) NOT NULL,
  `nama_brg` varchar(25) NOT NULL,
  `harga_lelang` int(6) NOT NULL,
  `harga_tawaran` int(6) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil_lelang`
--

INSERT INTO `hasil_lelang` (`id_hasil_lelang`, `nama_pelelang`, `divisi_pelelang`, `nama_penawar`, `divisi_penawar`, `nama_brg`, `harga_lelang`, `harga_tawaran`, `gambar`) VALUES
(3, 'karyawan', 'finance', 'karyawan3', 'security', 'Logo', 1500000, 1700000, 'gbr-1536582799.png'),
(4, 'karyawan', 'finance', 'karyawan2', 'IT', 'Logo', 1500000, 1650000, 'gbr-1536582799.png'),
(5, 'karyawan3', 'security', 'karyawan2', 'IT', 'Akun Google', 2000000, 2400000, 'google-plus-party-mode.png'),
(6, 'karyawan3', 'security', 'karyawan', 'finance', 'Akun Google', 2000000, 2800000, 'google-plus-party-mode.png'),
(7, 'karyawan', 'finance', 'karyawan3', 'security', 'Github', 500000, 1000000, 'github.png'),
(8, 'karyawan', 'finance', 'karyawan2', 'IT', 'Pesawat kertas', 1000000, 1400000, 'PaperPlane.png');

-- --------------------------------------------------------

--
-- Table structure for table `list_lelang`
--

CREATE TABLE `list_lelang` (
  `id_list_lelang` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `divisi` varchar(25) NOT NULL,
  `nama_brg` varchar(25) NOT NULL,
  `harga` int(6) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_lelang`
--

INSERT INTO `list_lelang` (`id_list_lelang`, `nama`, `divisi`, `nama_brg`, `harga`, `gambar`, `status`) VALUES
(1, 'karyawan', 'finance', 'Logo', 1500000, 'gbr-1536582799.png', 1),
(4, 'karyawan3', 'security', 'Akun Google', 2000000, 'google-plus-party-mode.png', 1),
(5, 'karyawan', 'finance', 'Github', 500000, 'github.png', 1),
(6, 'karyawan', 'finance', 'Pesawat kertas', 1000000, 'PaperPlane.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tambah_lelang`
--

CREATE TABLE `tambah_lelang` (
  `id_lelang` int(3) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `divisi` varchar(25) NOT NULL,
  `nama_brg` varchar(25) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tambah_lelang`
--

INSERT INTO `tambah_lelang` (`id_lelang`, `nama`, `divisi`, `nama_brg`, `gambar`, `status`) VALUES
(1, 'karyawan', 'finance', 'Logo', 'gbr-1536582799.png', 1),
(2, 'karyawan3', 'security', 'Akun Google', 'google-plus-party-mode.png', 1),
(3, 'karyawan', 'finance', 'Github', 'github.png', 1),
(4, 'karyawan', 'finance', 'Pesawat kertas', 'PaperPlane.png', 1),
(5, 'karyawan', 'finance', 'kapal', 'paper_boat.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(2) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `divisi` varchar(25) NOT NULL,
  `level` enum('karyawan','manager','pengadaan','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `divisi`, `level`) VALUES
(1, 'karyawan', 'indonesia', 'finance', 'karyawan'),
(2, 'manager', 'manager', 'manager', 'manager'),
(3, 'pengadaan', 'pengadaan', 'pengadaan', 'pengadaan'),
(4, 'karyawan2', 'indonesia2', 'IT', 'karyawan'),
(5, 'karyawan3', 'indonesia3', 'security', 'karyawan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hasil_lelang`
--
ALTER TABLE `hasil_lelang`
  ADD PRIMARY KEY (`id_hasil_lelang`);

--
-- Indexes for table `list_lelang`
--
ALTER TABLE `list_lelang`
  ADD PRIMARY KEY (`id_list_lelang`);

--
-- Indexes for table `tambah_lelang`
--
ALTER TABLE `tambah_lelang`
  ADD PRIMARY KEY (`id_lelang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hasil_lelang`
--
ALTER TABLE `hasil_lelang`
  MODIFY `id_hasil_lelang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `list_lelang`
--
ALTER TABLE `list_lelang`
  MODIFY `id_list_lelang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tambah_lelang`
--
ALTER TABLE `tambah_lelang`
  MODIFY `id_lelang` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
