-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2015 at 09:50 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sepeda`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `nama` varchar(50) NOT NULL,
  `noktp` varchar(16) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'AKTIF',
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`nama`, `noktp`, `alamat`, `email`, `telp`, `password`, `status`) VALUES
('Mohammad Wahyu Hidayat', '3212010304940001', 'Sukolilo Park Regency A5', 'im26vancrew@gmail.com', '091912953288', 'wahyu', 'AKTIF'),
('Risyanggi Azmi Faizin', '2212010703930004', 'Sukolilo Park Regency A5 Surabaya', 'switgarlik@gmail.com', '082963852746', 'llllll', 'AKTIF');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE IF NOT EXISTS `peminjaman` (
  `id_peminjaman` varchar(5) NOT NULL,
  `noktp` varchar(16) NOT NULL,
  `tanggal_peminjaman` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `jml_spd_anak` int(11) NOT NULL,
  `jml_spd_standar` int(11) NOT NULL,
  `jml_spd_gunung` int(11) NOT NULL,
  `jml_spd_tandem` int(11) NOT NULL,
  `biaya` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id_peminjaman`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE IF NOT EXISTS `petugas` (
  `Nama` varchar(50) NOT NULL,
  `No_KTP` varchar(16) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `Telepon` bigint(15) NOT NULL,
  `Email` varchar(15) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`Nama`, `No_KTP`, `Alamat`, `Telepon`, `Email`, `Username`, `Password`, `Status`) VALUES
('Wahyu', '1371101902950002', 'Haurgelis', 62819992233454, 'vancrew@gmail.c', 'vancrew', 'vancrew123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sepeda`
--

CREATE TABLE IF NOT EXISTS `sepeda` (
  `NO_ID` varchar(5) NOT NULL,
  `Jenis` varchar(15) NOT NULL,
  `Status` varchar(20) NOT NULL,
  PRIMARY KEY (`NO_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sepeda`
--

INSERT INTO `sepeda` (`NO_ID`, `Jenis`, `Status`) VALUES
('A0001', 'Anak-Anak', 'Siap'),
('A0002', 'Anak-Anak', 'Siap'),
('A0003', 'Anak-Anak', 'Siap'),
('A0004', 'Anak-Anak', 'Siap'),
('A0005', 'Anak-Anak', 'Siap'),
('A0006', 'Anak-Anak', 'Siap'),
('A0007', 'Anak-Anak', 'Siap'),
('A0008', 'Anak-Anak', 'Siap'),
('A0009', 'Anak-Anak', 'Siap'),
('A0010', 'Anak-Anak', 'Siap'),
('G0001', 'Gunung', 'Siap'),
('G0002', 'Gunung', 'Siap'),
('G0003', 'Gunung', 'Siap'),
('G0004', 'Gunung', 'Siap'),
('G0005', 'Gunung', 'Siap'),
('G0006', 'Gunung', 'Siap'),
('G0007', 'Gunung', 'Siap'),
('G0008', 'Gunung', 'Siap'),
('G0009', 'Gunung', 'Siap'),
('G0010', 'Gunung', 'Siap'),
('S0001', 'Standar', 'Siap'),
('S0002', 'Standar', 'Siap'),
('S0003', 'Standar', 'Siap'),
('S0004', 'Standar', 'Siap'),
('S0005', 'Standar', 'Siap'),
('S0006', 'Standar', 'Siap'),
('S0007', 'Standar', 'Siap'),
('S0008', 'Standar', 'Siap'),
('S0009', 'Standar', 'Siap'),
('S0010', 'Standar', 'Siap'),
('T0001', 'Tandem', 'Siap'),
('T0002', 'Tandem', 'Siap'),
('T0003', 'Tandem', 'Siap'),
('T0004', 'Tandem', 'Siap'),
('T0005', 'Tandem', 'Siap'),
('T0006', 'Tandem', 'Siap'),
('T0007', 'Tandem', 'Siap'),
('T0008', 'Tandem', 'Siap'),
('T0009', 'Tandem', 'Siap'),
('T0010', 'Tandem', 'Siap');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
