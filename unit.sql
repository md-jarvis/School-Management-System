-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 10, 2014 at 05:43 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `class_6`
--

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE IF NOT EXISTS `unit` (
  `userid` varchar(40) DEFAULT NULL,
  `math_full` float DEFAULT NULL,
  `math` float DEFAULT NULL,
  `science_full` float DEFAULT NULL,
  `science` float DEFAULT NULL,
  `social_float` float DEFAULT NULL,
  `social` float DEFAULT NULL,
  `english_full` float DEFAULT NULL,
  `english` float DEFAULT NULL,
  `hindi_full` float DEFAULT NULL,
  `hindi` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`userid`, `math_full`, `math`, `science_full`, `science`, `social_float`, `social`, `english_full`, `english`, `hindi_full`, `hindi`) VALUES
('53215', 20, 12, 20, 14, 20, 16, 20, 16, 20, 17),
('53426', 20, 20, 20, 17, 20, 18, 20, 15, 20, 19),
('63421', 20, 13, 20, 17, 20, 18, 20, 16, 20, 18),
('64522', 20, 17, 20, 16, 20, 18, 20, 19, 20, 13);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
