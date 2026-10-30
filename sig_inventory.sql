-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 26, 2014 at 07:42 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sig_inventory`
--
CREATE DATABASE IF NOT EXISTS `sig_inventory` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sig_inventory`;

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `floor` int(4) DEFAULT NULL,
  `username_owner` varchar(50) DEFAULT NULL,
  `department_location` varchar(250) DEFAULT NULL,
  `computername` varchar(20) DEFAULT NULL,
  `asset_tag_computer` varchar(20) DEFAULT NULL,
  `number_of_monitor` varchar(20) DEFAULT NULL,
  `brand_of_monitor` varchar(20) DEFAULT NULL,
  `asset_tag_monitor` varchar(50) DEFAULT NULL,
  `os` varchar(20) DEFAULT NULL,
  `oem` varchar(20) DEFAULT NULL,
  `avv` varchar(10) DEFAULT NULL,
  `processor` varchar(20) DEFAULT NULL,
  `ram` varchar(10) DEFAULT NULL,
  `hard_drive` varchar(10) DEFAULT NULL,
  `ms_office_version` varchar(15) DEFAULT NULL,
  `others` varchar(250) DEFAULT NULL,
  `date_given` varchar(25) DEFAULT NULL,
  `date_pulled_out` varchar(25) DEFAULT NULL,
  `timestamp` varchar(25) NOT NULL COMMENT 'keep track of changes',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
