-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2015 at 02:00 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `data1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tab1`
--

CREATE TABLE IF NOT EXISTS `tab1` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pwd` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tab1`
--

INSERT INTO `tab1` (`fname`, `lname`, `email`, `pwd`) VALUES
('ROHAN', 'RINGE', 'ROHAN@GMAIL', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tab2`
--

CREATE TABLE IF NOT EXISTS `tab2` (
  `name` varchar(30) NOT NULL,
  `time` varchar(6) NOT NULL,
  `tables` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tab2`
--

INSERT INTO `tab2` (`name`, `time`, `tables`) VALUES
('gurunath vishwakarma', '13:00', 2),
('aishwarya', '14:00', 2),
('samruddha', '14:30', 4),
('SURESH SIR', '21:30', 4),
('guru', '20:30', 2),
('rohan', '14:00', 10),
('sampada', '14:00', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tab3`
--

CREATE TABLE IF NOT EXISTS `tab3` (
  `name` varchar(30) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `meal` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tab3`
--

INSERT INTO `tab3` (`name`, `contact`, `meal`) VALUES
('aishwarya', '1234567890', 'Meal 1'),
('samruddha', '4568979845', 'Meal 2'),
('gurunath', '9898987456', 'Meal 3'),
('vikrant', '4654644554', 'Meal 2'),
('vikrant', '4654644554', 'Meal 2');

-- --------------------------------------------------------

--
-- Table structure for table `tab4`
--

CREATE TABLE IF NOT EXISTS `tab4` (
  `name` varchar(20) NOT NULL,
  `address` varchar(10) NOT NULL,
  `contact` int(10) NOT NULL,
  `orders` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tab4`
--

INSERT INTO `tab4` (`name`, `address`, `contact`, `orders`) VALUES
('aishwarya', 'versova', 2147483647, 'Meal 1'),
('samruddha', '4 bunglows', 2147483647, 'Meal 2'),
('gurunath', 'andheri', 2147483647, 'Meal 3'),
('vikrant', 'bhayander', 2147483647, 'Meal 1'),
('SURESH SIR', 'ANDHERI', 2147483647, 'Meal 2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
