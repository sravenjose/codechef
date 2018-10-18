-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2016 at 05:16 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kdm`
--

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE IF NOT EXISTS `enquiry` (
  `name` char(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phno` varchar(20) NOT NULL,
  `msg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`name`, `email`, `phno`, `msg`) VALUES
('Akash', 'akaashbhaskaran@gmai', '9745306252', 'HELLO TEST'),
('Akash', 'akaashbhaskaran@gmai', '9745306252', 'HELLO TEST'),
('ambady', 'ambady@123`', '9778513230', 'testing\r\n'),
('Goutham', 'younggsn@gmail.com', '9633286433', 'Testing testing 123'),
('Hello', 'test etst tes', '9745306252', 'testing . '),
('', '', '', ''),
('mam', 'test', '97456213', 'test test'),
('Akash', 'akaashbhaskaran@gmai', '9745306252', 'akaashbhaskaran@gmail.com'),
('Akash', 'akaashbhaskaran@gmail.com', '9745306252', 'new varchar50'),
('Akash', 'akaashbhaskaran@gmail.com', '9745306252', 'new varchar50'),
('', '', '', ''),
('arjun', 'arjunhariharasubramani27@gmail.com', '7736509721', ''),
('arjun', '', '', ''),
('arjun', 'arjunhariharasubramani27@gmail.com', '7736509721', 'hai its me'),
('akhil', 'akhil@gmail.com', '9048658623', 'kfudsvc');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `name` char(20) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` char(7) NOT NULL,
  `status` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`name`, `userid`, `password`, `type`, `status`) VALUES
('', 'admin', 'admin123', 'admin', ''),
('', 'user', 'user123', 'user', ''),
('', 'admin@admin.com', 'admin123', 'admin', ''),
('', 'user@user.com', 'user123', 'user', 'online'),
('Akash', 'akash@akash.com', 'akash123', 'user', 'online'),
('Arjun', 'arjun@arjun.com', 'arjun123', '', ''),
('Ambady', 'akhil@akhil.com', 'akhil123', 'user', ''),
('akhil', '', '', 'user', ''),
('anil', 'akhilappu.ambady@gma', '123456789', 'user', ''),
('thomas', 'thomas@thomas.com', 'thomas123', 'user', 'online'),
('mihir', 'mihir@mihir.com', 'mihir123', 'user', 'online'),
('abhilash', 'abhilash@abhilash.com', '1234', 'user', 'online');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `name` varchar(40) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`name`, `msg`) VALUES
('', 'hello'),
('', 'hello'),
('Test', 'Hello '),
('', 'hello'),
('hello', 'this is tony\r\n'),
('HEy!', 'Hello THomas');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
