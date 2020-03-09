-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2020 at 10:57 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database aset bmck`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('\0', '\0'),
('\0', '\0'),
('gelen123', 'dukahilap'),
('powpu', 'huntu');

-- --------------------------------------------------------

--
-- Table structure for table `atribut`
--

CREATE TABLE `atribut` (
  `id` int(2) NOT NULL,
  `dinas` varchar(100) NOT NULL,
  `kabupaten_dinas` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `web` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `tgl` varchar(100) NOT NULL,
  `nama_ttd` varchar(100) NOT NULL,
  `nip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `atribut`
--

INSERT INTO `atribut` (`id`, `dinas`, `kabupaten_dinas`, `alamat`, `web`, `kota`, `tgl`, `nama_ttd`, `nip`) VALUES
(2712, 'dinas kependudukan fucekboy', 'sido muncul', 'lingkungan team ambyar', 'binomo.com', 'kota mumbay', '01022020', 'rambut ilminet', '012910910921xxxx');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(5) NOT NULL,
  `kd_brg1` varchar(10) NOT NULL,
  `kd_brg2` varchar(10) NOT NULL,
  `kd_brg4` varchar(4) NOT NULL,
  `kd_bgb` varchar(20) NOT NULL,
  `nama_barang` varchar(200) NOT NULL,
  `merk` varchar(200) NOT NULL,
  `nilai_aset` float NOT NULL,
  `letak` int(10) NOT NULL,
  `kondisi` int(5) NOT NULL,
  `asal_perolehan` varchar(100) NOT NULL,
  `thn_dapat` text NOT NULL,
  `tgl_buku` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `kd_brg1`, `kd_brg2`, `kd_brg4`, `kd_bgb`, `nama_barang`, `merk`, `nilai_aset`, `letak`, `kondisi`, `asal_perolehan`, `thn_dapat`, `tgl_buku`) VALUES
(56676517, '001', '002', '004', '441', 'prozen', 'wings', 7, 453, 78987, 'import peternakan sapi', '1089-2020', '2020-03-25 16:40:31');

-- --------------------------------------------------------

--
-- Table structure for table `brg1`
--

CREATE TABLE `brg1` (
  `kode_1` varchar(10) NOT NULL,
  `nama` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brg1`
--

INSERT INTO `brg1` (`kode_1`, `nama`) VALUES
('01', 'si kepala kubus');

-- --------------------------------------------------------

--
-- Table structure for table `brg2`
--

CREATE TABLE `brg2` (
  `kode_1` varchar(10) NOT NULL,
  `kode_2` varchar(10) NOT NULL,
  `nama` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brg2`
--

INSERT INTO `brg2` (`kode_1`, `kode_2`, `nama`) VALUES
('1', '2', 'si kepala '),
('02', '03', 'si kepala '),
('02', '9', 'babak1');

-- --------------------------------------------------------

--
-- Table structure for table `dinas`
--

CREATE TABLE `dinas` (
  `id_dinas` int(2) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dinas`
--

INSERT INTO `dinas` (`id_dinas`, `nama`, `alamat`, `logo`) VALUES
(54, 'nekopoi', 'london wetan', 'pinkiboy');

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `id_ruang` int(3) NOT NULL,
  `nama_ruang` varchar(150) NOT NULL,
  `kondisi` int(3) NOT NULL,
  `luas` float NOT NULL,
  `tngg_jawab` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`id_ruang`, `nama_ruang`, `kondisi`, `luas`, `tngg_jawab`) VALUES
(243, 'ruang guru', 22, 56, 'dilan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atribut`
--
ALTER TABLE `atribut`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `dinas`
--
ALTER TABLE `dinas`
  ADD PRIMARY KEY (`id_dinas`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id_ruang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56676518;

--
-- AUTO_INCREMENT for table `dinas`
--
ALTER TABLE `dinas`
  MODIFY `id_dinas` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id_ruang` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
