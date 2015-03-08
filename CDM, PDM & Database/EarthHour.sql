-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2015 at 08:10 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `EarthHour`
--

-- --------------------------------------------------------

--
-- Table structure for table `disponsori`
--

CREATE TABLE IF NOT EXISTS `disponsori` (
  `IDEvent` int(11) NOT NULL,
  `IDSponsor` int(11) NOT NULL,
  KEY `IDEvent` (`IDEvent`),
  KEY `IDSponsor` (`IDSponsor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `IDEvent` int(11) NOT NULL,
  `NamaEvent` varchar(100) NOT NULL,
  `TglMulai` date NOT NULL,
  `TglSelesai` date NOT NULL,
  `DeskripsiEvent` text NOT NULL,
  PRIMARY KEY (`IDEvent`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE IF NOT EXISTS `foto` (
  `IDFoto` int(11) NOT NULL,
  `Judul` varchar(100) NOT NULL,
  `DeskripsiFoto` text NOT NULL,
  `WaktuFoto` date NOT NULL,
  `Gambar` blob NOT NULL,
  PRIMARY KEY (`IDFoto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `listfoto`
--

CREATE TABLE IF NOT EXISTS `listfoto` (
  `IDEvent` int(11) NOT NULL,
  `IDFoto` int(11) NOT NULL,
  KEY `IDEvent` (`IDEvent`),
  KEY `IDFoto` (`IDFoto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `listvideo`
--

CREATE TABLE IF NOT EXISTS `listvideo` (
  `IDEvent` int(11) NOT NULL,
  `IDVideo` int(11) NOT NULL,
  KEY `IDEvent` (`IDEvent`),
  KEY `IDVideo` (`IDVideo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `organisasi`
--

CREATE TABLE IF NOT EXISTS `organisasi` (
  `IDOrganisasi` int(11) NOT NULL,
  `NamaOrganisasi` varchar(50) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `Deskripsi` text NOT NULL,
  `Email` varchar(50) NOT NULL,
  `NoTlp` varchar(20) NOT NULL,
  `Facebook` varchar(20) NOT NULL,
  `Twitter` varchar(20) NOT NULL,
  `Pinterest` varchar(20) NOT NULL,
  `Google+` varchar(20) NOT NULL,
  `Linkedin` varchar(20) NOT NULL,
  PRIMARY KEY (`IDOrganisasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sponsor`
--

CREATE TABLE IF NOT EXISTS `sponsor` (
  `IDSponsor` int(11) NOT NULL,
  `NamaSponsor` varchar(50) NOT NULL,
  `LinkSponsor` varchar(200) NOT NULL,
  `Logo` blob NOT NULL,
  PRIMARY KEY (`IDSponsor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `IDVideo` int(11) NOT NULL,
  `Link` varchar(300) NOT NULL,
  `JudulVideo` varchar(100) NOT NULL,
  `WaktuVideo` date NOT NULL,
  `DeskripsiVideo` text NOT NULL,
  PRIMARY KEY (`IDVideo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `disponsori`
--
ALTER TABLE `disponsori`
  ADD CONSTRAINT `disponsori_ibfk_2` FOREIGN KEY (`IDSponsor`) REFERENCES `sponsor` (`IDSponsor`),
  ADD CONSTRAINT `disponsori_ibfk_1` FOREIGN KEY (`IDEvent`) REFERENCES `event` (`IDEvent`);

--
-- Constraints for table `listfoto`
--
ALTER TABLE `listfoto`
  ADD CONSTRAINT `listfoto_ibfk_2` FOREIGN KEY (`IDFoto`) REFERENCES `foto` (`IDFoto`),
  ADD CONSTRAINT `listfoto_ibfk_1` FOREIGN KEY (`IDEvent`) REFERENCES `event` (`IDEvent`);

--
-- Constraints for table `listvideo`
--
ALTER TABLE `listvideo`
  ADD CONSTRAINT `listvideo_ibfk_3` FOREIGN KEY (`IDVideo`) REFERENCES `video` (`IDVideo`),
  ADD CONSTRAINT `listvideo_ibfk_1` FOREIGN KEY (`IDVideo`) REFERENCES `video` (`IDVideo`),
  ADD CONSTRAINT `listvideo_ibfk_2` FOREIGN KEY (`IDEvent`) REFERENCES `event` (`IDEvent`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
