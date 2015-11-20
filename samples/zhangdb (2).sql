-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 07, 2015 at 02:41 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zhangdb`
--
CREATE DATABASE IF NOT EXISTS `zhangdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `zhangdb`;

-- --------------------------------------------------------

--
-- Table structure for table `operationstable`
--

CREATE TABLE IF NOT EXISTS `operationstable` (
  `operationID` int(10) NOT NULL AUTO_INCREMENT,
  `patientID` int(10) NOT NULL,
  `physicianID` varchar(10) NOT NULL,
  `operationname` varchar(30) NOT NULL,
  `florencetime` varchar(30) NOT NULL,
  `DAP` varchar(30) NOT NULL,
  `referencedose` varchar(30) NOT NULL,
  `operationdate` date NOT NULL,
  PRIMARY KEY (`operationID`,`patientID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `operationstable`
--

INSERT INTO `operationstable` (`operationID`, `patientID`, `physicianID`, `operationname`, `florencetime`, `DAP`, `referencedose`, `operationdate`) VALUES
(11, 1, '1', 'TIPS', '10', '11', '123', '2015-01-08'),
(12, 2, '3', 'RIG', '3', '4', '5', '2015-02-10'),
(13, 3, '2', 'BIOSPY', '5', '69', '66', '2015-03-04'),
(19, 2, '2', 'RIG', '56', '77', '66', '2015-04-07'),
(20, 3, '2', 'IVC', '23', '12', '56', '2015-04-21'),
(21, 2, '3', 'RFA', '45', '67', '34', '2015-03-18'),
(22, 1, '5', 'IVC', '12', '34', '12', '2015-02-18'),
(23, 9, '7', 'RIG', '56', '78', '12', '2015-05-14'),
(24, 5, '9', 'BIOSPY', '23', '14', '45', '2015-03-20'),
(25, 11, '10', 'TIPS', '18', '36', '66', '2015-04-30'),
(31, 3, '4', 'RIG', '23', '45', '38', '2015-06-04'),
(32, 3, '5', 'BIOSPY', '27', '49', '77', '2015-07-24'),
(33, 6, '9', 'TIPS', '89', '89', '84', '2015-08-13'),
(34, 9, '1', 'RFA', '89', '89', '122', '2015-11-30'),
(35, 6, '1', 'RFA', '45', '78', '789', '2015-05-18'),
(36, 7, '2', 'TIPS', '48', '99', '389', '2015-06-17'),
(37, 7, '3', 'RFA', '48', '99', '189', '2015-07-16'),
(38, 8, '1', 'RIG', '678', '56', '444', '2015-02-10'),
(39, 11, '1', 'BIOSPY', '67', '06', '234', '2015-02-03'),
(40, 4, '1', 'BIOSPY', '65', '14', '23', '2015-03-31'),
(41, 5, '1', 'TIPS', '89', '34', '134', '2015-04-07'),
(42, 8, '1', 'IVC', '89', '34', '678', '2015-06-09'),
(43, 7, '1', 'IVC', '89', '37', '67', '2015-07-23'),
(44, 6, '1', 'IVC', '91', '39', '456', '2015-08-12'),
(45, 6, '1', 'TIPS', '86', '35', '256', '2015-09-23'),
(46, 10, '1', 'BIOSPY', '87', '36', '289', '2015-10-15'),
(47, 10, '1', 'IVC', '74', '32', '555', '2015-11-12'),
(48, 3, '2', 'RIG', '33', '34', '456', '2015-01-06'),
(49, 6, '2', 'RFA', '28', '40', '46', '2015-02-04'),
(50, 10, '2', 'IVC', '22', '35', '227', '2015-07-14'),
(51, 11, '2', 'BIOSPY', '56', '68', '345', '2015-08-21'),
(53, 11, '2', 'BIOSPY', '63', '72', '99', '2015-10-22'),
(54, 3, '2', 'TIPS', '67', '63', '490', '2015-11-27'),
(55, 10, '2', 'BIOSPY', '689', '630', '890', '2015-12-09'),
(57, 5, '3', 'RFA', '556', '67', '444', '2015-12-23'),
(58, 9, '3', 'RFA', '55', '78', '444', '2015-01-21'),
(59, 3, '3', 'TIPS', '65', '87', '234', '2015-04-21'),
(60, 8, '3', 'BIOSPY', '645', '89', '567', '2015-05-21'),
(61, 8, '3', 'BIOSPY', '645', '89', '56', '2015-08-21'),
(62, 2, '3', 'IVC', '64', '89', '789', '2015-09-21'),
(63, 6, '3', 'RFA', '33', '78', '400', '2015-10-21'),
(64, 1, '3', 'IVC', '39', '8', '763', '2015-12-02'),
(65, 1, '9', 'RIG', '78', '89', '89', '2015-05-27');

-- --------------------------------------------------------

--
-- Table structure for table `patienttable`
--

CREATE TABLE IF NOT EXISTS `patienttable` (
  `firstname` varchar(35) NOT NULL,
  `lastname` varchar(35) NOT NULL,
  `height` decimal(4,2) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `patientID` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`patientID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `patienttable`
--

INSERT INTO `patienttable` (`firstname`, `lastname`, `height`, `weight`, `patientID`) VALUES
('VAMSI', 'REDDY', '5.40', '167', 1),
('PAVAN', 'SAI', '5.70', '176', 2),
('PRADYU', 'NOOKALA', '6.00', '145', 3),
('MARIA', 'R', '5.00', '123', 4),
('RAM', 'K', '4.90', '133', 6),
('MALLI', 'REDDY', '5.11', '189', 7),
('SUSRUTHA', 'L', '5.20', '136', 8),
('USHA', 'E', '5.20', '100', 9),
('SWETHA', 'F', '5.40', '144', 10),
('KEVIN', 'P', '5.90', '178', 11);

-- --------------------------------------------------------

--
-- Table structure for table `physiciantable`
--

CREATE TABLE IF NOT EXISTS `physiciantable` (
  `firstname` varchar(35) NOT NULL,
  `lastname` varchar(35) NOT NULL,
  `experience` int(5) NOT NULL,
  `physicianID` int(5) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`physicianID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `physiciantable`
--

INSERT INTO `physiciantable` (`firstname`, `lastname`, `experience`, `physicianID`) VALUES
('doctor A', 'AAA', 5, 1),
('doctor B', 'BBB', 10, 2),
('doctor C', 'CCC', 7, 3),
('doctor D', 'DDD', 11, 4),
('doctor E', 'EEE', 8, 5),
('doctor F', 'FFF', 5, 6),
('doctor G', 'GGG', 2, 7),
('doctor H', 'HHH', 9, 8),
('doctor I', 'III', 14, 9),
('doctor J', 'JJJ', 19, 10);

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE IF NOT EXISTS `usertable` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(75) NOT NULL,
  `LastName` varchar(75) NOT NULL,
  `UserName` varchar(15) NOT NULL,
  `Password` text NOT NULL,
  `Email` varchar(75) NOT NULL,
  `privilege` varchar(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`ID`, `FirstName`, `LastName`, `UserName`, `Password`, `Email`, `privilege`) VALUES
(1, 'admin', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'vaishnavi.konda@uky.edu', 'N'),
(2, 'fei', 'zongming', 'fei', 'a3122aabeefce724a4757528d3439dd0', 'fei@uky.edu', 'Y'),
(3, 'vamsi', 'k', 'vamsi', '032f5eb8ce991a153d7057c4651ea671', 'vamc.red7@gmail.com', 'N'),
(4, 'sangeeta', 'r', 'sam', '332532dcfaa1cbf61e2a266bd723612c', 'sangeeta@gmail.com', 'N'),
(6, 'ZHANG', 'F', 'zhang', 'd0cd2693b3506677e4c55e91d6365bff', 'zhang@uky.edu', 'Y');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


sweb sql pwd: Ggsb91djqJs=
