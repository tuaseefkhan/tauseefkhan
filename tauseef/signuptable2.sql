-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 08, 2018 at 11:01 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manform`
--

-- --------------------------------------------------------

--
-- Table structure for table `signuptable2`
--

DROP TABLE IF EXISTS `signuptable2`;
CREATE TABLE IF NOT EXISTS `signuptable2` (
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `New_password` varchar(100) NOT NULL,
  `DOB` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signuptable2`
--

INSERT INTO `signuptable2` (`First_Name`, `Last_Name`, `Email`, `New_password`, `DOB`, `gender`) VALUES
('dsfsd', 'ffff', 'amin@gmail.com', 'admin', '2018-03-06', 'Male'),
('dsfsd', 'ffff', 'amin@gmail.com', 'admin', '2018-03-06', 'Male'),
('dsfsd', 'ffff', 'amin@gmail.com', 'admin', '2018-03-06', 'Male'),
('dsfsd', 'ffff', 'amin@gmail.com', 'admin', '2018-03-06', 'Male'),
('dsfsd', 'ffff', 'amin@gmail.com', 'admin', '2018-03-06', 'Male'),
('dsfsd', 'ffff', 'amin@gmail.com', 'admin', '2018-03-06', 'Male'),
('dsfsd', 'ffff', 'amin@gmail.com', 'admin', '2018-03-06', 'Male'),
('dsfsd', 'ffff', 'amin@gmail.com', 'admin', '2018-03-06', 'Male'),
('dsfsd', 'ffff', 'amin@gmail.com', 'admin', '2018-03-06', 'Male'),
('sahil', 'khan', 'amin@gmail.com', 'amin', '2018-03-07', 'Male'),
('sahil', 'khan', 'amin@gmail.com', 'amin', '2018-03-07', 'Male'),
('sahil', 'khan', 'amin@gmail.com', 'amin', '2018-03-07', 'Male'),
('sahil', 'kakks', 'amin@gmail.com', '1234', '2018-03-06', 'Male');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
