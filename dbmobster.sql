-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2019 at 11:19 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbmobster`
--

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE IF NOT EXISTS `batch` (
  `kd_batch` int(11) NOT NULL AUTO_INCREMENT,
  `nama_batch` varchar(50) NOT NULL,
  `nama_client` varchar(50) NOT NULL,
  `isi` varchar(600) NOT NULL,
  `jumlah_karakter` int(10) NOT NULL,
  `masking` int(10) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL,
  `jumlah_sms` int(10) NOT NULL,
  `nama_operator` varchar(20) NOT NULL,
  PRIMARY KEY (`kd_batch`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2435 ;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`kd_batch`, `nama_batch`, `nama_client`, `isi`, `jumlah_karakter`, `masking`, `lokasi`, `tanggal`, `jumlah_sms`, `nama_operator`) VALUES
(2, '5', '', '2', 2, 2, '', '0000-00-00 00:00:00', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `kd_login` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL,
  PRIMARY KEY (`kd_login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`kd_login`, `username`, `password`, `email`, `level`) VALUES
(2, 'irfan', '24b90bc48a67ac676228', 'irfan.omawey@gmail.com', 'client'),
(11, 'tatang', 'tatang', 'tatang@gmail.com', 'client'),
(12, 'admin', 'admin', 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE IF NOT EXISTS `reservasi` (
  `kd_reservasi` int(11) NOT NULL AUTO_INCREMENT,
  `kd_batch` int(11) NOT NULL,
  `tgl_reservasi` datetime NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  PRIMARY KEY (`kd_reservasi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`kd_reservasi`, `kd_batch`, `tgl_reservasi`, `keterangan`) VALUES
(1, 2, '2019-04-22 00:00:00', 'Sukses');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
