-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2015 at 03:25 PM
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
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `studno` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `college` varchar(50) NOT NULL,
  `contactno` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `compname` varchar(50) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `hoursrequired` int(11) NOT NULL,
  `hoursdone` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`studno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studno`, `fname`, `lname`, `course`, `college`, `contactno`, `email`, `password`, `compname`, `startdate`, `enddate`, `hoursrequired`, `hoursdone`) VALUES
(1210913, 'Jerome Ian', 'Llaguno', 'Computer Science', 'Computer Studies', 123, 'jicllaguno@neu.edu.ph', 'asd', 'ValuCare', '2015-08-23', '2015-08-31', 230, 100),
(1210914, 'Marnie Bright', 'Palapat', 'Computer Science', 'Computer Studies', 123456789, 'mbpalapar@neu.edu.ph', 'asd', 'CPC', '2015-01-01', '2015-01-02', 230, 50),
(1210915, 'Mikkle', 'Bondoc', 'Computer Science', 'Computer Studies', 123, 'mbondoc@neu.edu.ph', 'asd', 'CPC', '2015-08-23', '2015-08-30', 230, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
