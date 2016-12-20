-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2016 at 02:44 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `testk24`
--
CREATE DATABASE IF NOT EXISTS `testk24` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `testk24`;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(70) NOT NULL,
  `ttl` date NOT NULL,
  `telpn` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `nama`, `alamat`, `ttl`, `telpn`, `email`) VALUES
(1, 'Novandy Purna DRD', 'Klaten', '0000-00-00', '087197301', 'novandy@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `idUser` int(100) NOT NULL AUTO_INCREMENT,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `Username`, `Password`) VALUES
(1, 'test1', 'test'),
(2, 'admin', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
