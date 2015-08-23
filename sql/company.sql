-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2015 at 03:28 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `internprogtracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `compname` varchar(50) NOT NULL,
  `compadd` varchar(100) NOT NULL,
  `deptass` varchar(50) NOT NULL,
  `conperson` varchar(50) NOT NULL,
  `cpcontactno` int(11) NOT NULL,
  `cpemail` varchar(50) NOT NULL,
  PRIMARY KEY (`compname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`compname`, `compadd`, `deptass`, `conperson`, `cpcontactno`, `cpemail`) VALUES
('', '', '', '', 0, ''),
('CPC', 'Quezon City', 'Technical Support', 'Ako', 987654321, 'ako@yahoo.com'),
('Valucare', 'Ortigas', 'ICT', 'Ruby', 123, 'ruby@valucare.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
