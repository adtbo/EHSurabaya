-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 23, 2015 at 03:34 AM
-- Server version: 5.5.41-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `earthhour`
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

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`IDEvent`, `NamaEvent`, `TglMulai`, `TglSelesai`, `DeskripsiEvent`) VALUES
(0, 'asdasdasd', '2015-03-22', '2015-03-25', '<p>sadasdasdasd</p>\n');

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE IF NOT EXISTS `gambar` (
  `IDGambar` int(11) NOT NULL,
  `DataGambar` mediumblob NOT NULL,
  `JudulGambar` varchar(100) NOT NULL,
  `WaktuGambar` date NOT NULL,
  `DeskripsiGambar` text NOT NULL,
  PRIMARY KEY (`IDGambar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `listgambar`
--

CREATE TABLE IF NOT EXISTS `listgambar` (
  `IDEvent` int(11) NOT NULL,
  `IDGambar` int(11) NOT NULL,
  KEY `IDEvent` (`IDEvent`),
  KEY `IDGambar` (`IDGambar`)
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
  `Gplus` varchar(20) NOT NULL,
  `Linkedin` varchar(20) NOT NULL,
  `Instagram` varchar(20) NOT NULL,
  PRIMARY KEY (`IDOrganisasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organisasi`
--

INSERT INTO `organisasi` (`IDOrganisasi`, `NamaOrganisasi`, `Alamat`, `Deskripsi`, `Email`, `NoTlp`, `Facebook`, `Twitter`, `Pinterest`, `Gplus`, `Linkedin`, `Instagram`) VALUES
(1, '', 'sebelah aiola', '<p>asdfasdfasdf</p>\n', 'surya.igede@gmail.com', '081811111', 'Earth Hour', 'Earth Hour', 'Earth Hour', 'Earth Hour', 'Earth Hour', 'Earth Hour');

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
  PRIMARY KEY (`IDVideo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `disponsori`
--
ALTER TABLE `disponsori`
  ADD CONSTRAINT `disponsori_ibfk_1` FOREIGN KEY (`IDEvent`) REFERENCES `event` (`IDEvent`),
  ADD CONSTRAINT `disponsori_ibfk_2` FOREIGN KEY (`IDSponsor`) REFERENCES `sponsor` (`IDSponsor`);

--
-- Constraints for table `listgambar`
--
ALTER TABLE `listgambar`
  ADD CONSTRAINT `listgambar_ibfk_1` FOREIGN KEY (`IDEvent`) REFERENCES `event` (`IDEvent`),
  ADD CONSTRAINT `listgambar_ibfk_2` FOREIGN KEY (`IDGambar`) REFERENCES `gambar` (`IDGambar`);

--
-- Constraints for table `listvideo`
--
ALTER TABLE `listvideo`
  ADD CONSTRAINT `listvideo_ibfk_1` FOREIGN KEY (`IDVideo`) REFERENCES `video` (`IDVideo`),
  ADD CONSTRAINT `listvideo_ibfk_2` FOREIGN KEY (`IDEvent`) REFERENCES `event` (`IDEvent`),
  ADD CONSTRAINT `listvideo_ibfk_3` FOREIGN KEY (`IDVideo`) REFERENCES `video` (`IDVideo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
