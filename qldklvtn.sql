-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 30, 2017 at 01:29 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `qldklvtn`
--
CREATE DATABASE IF NOT EXISTS `qldklvtn` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `qldklvtn`;

-- --------------------------------------------------------

--
-- Table structure for table `dotdk`
--

CREATE TABLE IF NOT EXISTS `dotdk` (
  `MaDot` int(11) NOT NULL AUTO_INCREMENT,
  `TGBatDauDK` datetime NOT NULL,
  `TGKetThucDK` datetime NOT NULL,
  `TGBatDauLVTN` datetime NOT NULL,
  `TGKetThucLVTN` datetime NOT NULL,
  PRIMARY KEY (`MaDot`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `dotdk`
--

INSERT INTO `dotdk` (`MaDot`, `TGBatDauDK`, `TGKetThucDK`, `TGBatDauLVTN`, `TGKetThucLVTN`) VALUES
(1, '2017-11-20 00:00:00', '2017-11-30 00:00:00', '2017-04-01 00:00:00', '2017-08-10 00:00:00'),
(2, '2017-12-12 00:00:00', '2017-11-14 00:00:00', '1996-12-17 00:00:00', '1996-12-08 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `giangvien`
--

CREATE TABLE IF NOT EXISTS `giangvien` (
  `magv` int(11) NOT NULL AUTO_INCREMENT,
  `tengv` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hocham` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hocvi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `idloaigv` int(11) NOT NULL,
  PRIMARY KEY (`magv`),
  KEY `d` (`idloaigv`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `giangvien`
--

INSERT INTO `giangvien` (`magv`, `tengv`, `hocham`, `hocvi`, `idloaigv`) VALUES
(1, 'Nguyễn Văn A', 'Thạc sĩ', '2', 2),
(2, 'Nguyễn Văn B', 'Giáo Sư', '1', 1),
(4, 'dasd1', 'abc1', 'Tiến Sĩ', 2);

-- --------------------------------------------------------

--
-- Table structure for table `nhom`
--

CREATE TABLE IF NOT EXISTS `nhom` (
  `manhom` int(11) NOT NULL AUTO_INCREMENT,
  `hoten1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mssv1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hoten2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mssv2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lop` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nganh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `siso` int(11) NOT NULL,
  `tendetai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngaydangky` datetime NOT NULL,
  `magv` int(11) NOT NULL,
  `MaDot` int(11) NOT NULL,
  PRIMARY KEY (`manhom`),
  KEY `magv` (`magv`),
  KEY `MaDot` (`MaDot`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=77 ;

--
-- Dumping data for table `nhom`
--

INSERT INTO `nhom` (`manhom`, `hoten1`, `mssv1`, `hoten2`, `mssv2`, `lop`, `nganh`, `siso`, `tendetai`, `ngaydangky`, `magv`, `MaDot`) VALUES
(19, 'tam huynh', 'DH51401108', '', '', 'D14TH03', 'CNTT', 2, 'ban hang', '0000-00-00 00:00:00', 2, 1),
(43, 'tam huynh', 'DH51401108', '', '', 'D14TH03', 'CNTT', 1, 'ban hang', '2017-11-27 21:59:20', 2, 0),
(49, '', '', '', '', '', '', 0, '', '2017-11-29 21:30:42', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `phanloaigv`
--

CREATE TABLE IF NOT EXISTS `phanloaigv` (
  `idloaigv` int(11) NOT NULL,
  `tenloaigv` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idloaigv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phanloaigv`
--

INSERT INTO `phanloaigv` (`idloaigv`, `tenloaigv`) VALUES
(1, 'Cơ hữu'),
(2, 'Thỉnh giảng');

-- --------------------------------------------------------

--
-- Table structure for table `thanhvien`
--

CREATE TABLE IF NOT EXISTS `thanhvien` (
  `MaThanhVien` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenthanhvien` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`MaThanhVien`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `thanhvien`
--

INSERT INTO `thanhvien` (`MaThanhVien`, `username`, `password`, `tenthanhvien`, `level`) VALUES
(1, 'admin', 'admin', 'admin', 0),
(2, 'sinhvien', 'sinhvien', 'huynhtam', 1),
(3, 'giangvien', 'giangvien', 'thaytung', 2),
(4, 'sinhvien1', 'sinhvien1', 'abc', 1),
(5, 'thuky', 'thuky', 'Thư ký khoa', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
