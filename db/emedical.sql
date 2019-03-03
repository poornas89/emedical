-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 23, 2018 at 10:07 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `emedical`
--
CREATE DATABASE IF NOT EXISTS `emedical` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `emedical`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(12) NOT NULL,
  `name` varchar(40) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `name`) VALUES
(2, 'admin', 'admin', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `institute`
--

CREATE TABLE IF NOT EXISTS `institute` (
  `instituteid` varchar(50) NOT NULL,
  `institutename` varchar(200) NOT NULL,
  `institutetype` varchar(50) NOT NULL,
  `instituteregno` varchar(100) NOT NULL,
  `address1` varchar(200) NOT NULL,
  `address2` varchar(200) NOT NULL,
  `gsdivision` varchar(5) NOT NULL,
  `phoneno` varchar(20) NOT NULL,
  `datereg` date NOT NULL,
  PRIMARY KEY (`instituteid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `institute`
--

INSERT INTO `institute` (`instituteid`, `institutename`, `institutetype`, `instituteregno`, `address1`, `address2`, `gsdivision`, `phoneno`, `datereg`) VALUES
('10001', 'harcourt', 'Pharmacy', 'C/45/896', 'Main Road', 'jaffna', 'J/355', '0215698789', '2017-12-13'),
('10002', 'Rubhins', 'pharmacy', 'L/45/782', ' K.K.S Road', ' jaffna', 'J/356', '0778965489', '2015-12-08'),
('1003', 'Lanka', 'Laboratory', '45/986/63', 'Galle Road', 'Colombo 6', 'C/156', '01123654987', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE IF NOT EXISTS `lab` (
  `patientid` varchar(10) NOT NULL,
  `labid` varchar(10) NOT NULL,
  `labname` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `doctor` varchar(35) NOT NULL,
  `testtype` varchar(15) NOT NULL,
  `test` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `details` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `patientid` varchar(10) NOT NULL,
  `title` varchar(5) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `middlename` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `nicno` int(11) NOT NULL,
  `dateofbirth` date NOT NULL,
  `religion` varchar(10) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `maritalstatus` varchar(8) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(35) NOT NULL,
  `address` varchar(50) NOT NULL,
  `guardianname` varchar(50) NOT NULL,
  `guardianphone` int(10) NOT NULL,
  `guardiannicno` varchar(11) NOT NULL,
  `guardianaddress` varchar(50) NOT NULL,
  `entrydate` date NOT NULL,
  `releasedate` date NOT NULL,
  `dateofdeath` date NOT NULL,
  `bloodgroup` varchar(5) NOT NULL,
  `rhfactor` int(5) NOT NULL,
  `district` varchar(12) NOT NULL,
  `patientalergic` varchar(50) NOT NULL,
  PRIMARY KEY (`patientid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy`
--

CREATE TABLE IF NOT EXISTS `pharmacy` (
  `patientid` varchar(10) NOT NULL,
  `prescriptionid` varchar(10) NOT NULL,
  `dugname` varchar(30) NOT NULL,
  `quantity` varchar(5) NOT NULL,
  `refills` varchar(10) NOT NULL,
  `dosage` varchar(10) NOT NULL,
  `frequency` varchar(10) NOT NULL,
  `status` varchar(15) NOT NULL,
  `edit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `usertype` varchar(10) NOT NULL,
  `usercode` varchar(10) NOT NULL,
  `hospitalname` varchar(50) NOT NULL,
  `title` varchar(10) NOT NULL,
  `firstname` varchar(15) NOT NULL,
  `middlename` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `dateofbirth` date NOT NULL,
  `nicno` varchar(11) NOT NULL,
  `sex` varchar(5) NOT NULL,
  `residence` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`usercode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`usertype`, `usercode`, `hospitalname`, `title`, `firstname`, `middlename`, `lastname`, `dateofbirth`, `nicno`, `sex`, `residence`, `address`, `mobile`, `email`) VALUES
('user', '123', 'Rubhins', 'Mr', 'Madhu', 'Kumara', 'Sashi', '1998-02-10', '98569854562', 'Male', 'wattala', 'hhhjkjk', '0778965325', 'jkjjklk@yahoo.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
