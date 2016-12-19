-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2016 at 03:11 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `karyawan`
--
CREATE DATABASE IF NOT EXISTS `karyawan` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `karyawan`;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `NIK` varchar(10) NOT NULL DEFAULT '',
  `Nama` varchar(30) NOT NULL DEFAULT '',
  `Alamat` varchar(50) NOT NULL DEFAULT '',
  `Phone` varchar(15) NOT NULL DEFAULT '',
  `Tglmasuk` date NOT NULL DEFAULT '0000-00-00',
  `Bagian` varchar(20) NOT NULL DEFAULT '',
  `Jabatan` varchar(25) NOT NULL DEFAULT '',
  `Keterangan` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`NIK`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`NIK`, `Nama`, `Alamat`, `Phone`, `Tglmasuk`, `Bagian`, `Jabatan`, `Keterangan`) VALUES
('1427631678', 'Muhammad Rohmani', 'Pasar Kemis', '0897478378', '2014-12-11', 'Marketing', 'Manager Marketing', 'Bagus'),
('A101', 'Raharja', 'Cikokol', '021-5585444', '2006-12-25', 'Gudang 2', 'Supervisor', 'Bagus');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
