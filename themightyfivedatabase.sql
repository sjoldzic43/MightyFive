-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2018 at 08:43 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `themightyfivedatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_ID` int(11) NOT NULL,
  `admin_Email` varchar(255) NOT NULL,
  `admin_FName` varchar(60) NOT NULL,
  `admin_LName` varchar(60) NOT NULL,
  `admin_Username` varchar(60) NOT NULL,
  `admin_Password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_ID`, `admin_Email`, `admin_FName`, `admin_LName`, `admin_Username`, `admin_Password`) VALUES
(5, 'boss@boss.com', 'The', 'Boss', 'TheBoss', '$2y$10$FugRKqcPYmN15Zld2b.J..po2BaAByjWCcplt7VcazwtZg.Mnm91O');

-- --------------------------------------------------------

--
-- Table structure for table `clocking`
--

CREATE TABLE `clocking` (
  `clock_ID` int(12) NOT NULL,
  `emp_ID` int(12) NOT NULL,
  `timedate` datetime NOT NULL,
  `inorout` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clocking`
--

INSERT INTO `clocking` (`clock_ID`, `emp_ID`, `timedate`, `inorout`) VALUES
(1, 10, '1998-10-20 00:00:00', 'i'),
(2, 10, '1998-10-20 00:00:00', 'i'),
(3, 10, '1998-10-20 01:20:03', 'i'),
(4, 14, '0000-00-00 00:00:00', 'i'),
(5, 14, '2018-04-19 12:23:56', 'i'),
(6, 14, '2018-04-19 12:47:59', 'i'),
(7, 14, '2018-04-19 12:48:15', 'o'),
(8, 14, '2018-04-19 01:06:03', 'o'),
(9, 14, '2018-04-19 01:23:04', 'i'),
(10, 14, '2018-04-19 02:30:11', 'i');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_ID` int(12) NOT NULL,
  `emp_FName` varchar(60) NOT NULL,
  `emp_LName` varchar(60) NOT NULL,
  `emp_Password` varchar(255) NOT NULL,
  `emp_UserName` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_ID`, `emp_FName`, `emp_LName`, `emp_Password`, `emp_UserName`) VALUES
(14, 'Employee', 'Dude', '$2y$10$aOHiJcjsRx85Z7mb1chxeeiOQhx1gRRsXpTPL4gNcT62lwYhHFpKe', 'EmployeeDude');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `manage_ID` int(12) NOT NULL,
  `manage_FName` varchar(60) NOT NULL,
  `manage_LName` varchar(60) NOT NULL,
  `manage_Username` varchar(90) NOT NULL,
  `manage_Password` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`manage_ID`, `manage_FName`, `manage_LName`, `manage_Username`, `manage_Password`) VALUES
(1, '0', '0', 'BobDude', '$2y$10$TSvueHai7WdZXkpeVUCx..zZFE2nUqDNF8cW6pT2AoGDT3M1jWHmq'),
(2, '0', '0', 'wowbob', '$2y$10$b8iZyMeHGnaJGq3p.aLnaedknXkdLLOPgvcIZORQofB3Nkiu6mouy'),
(3, 'Bob ', 'Sagret', 'newdude', '$2y$10$QpIT2oXyLo0YoMyYF5BQrOOszi.zA2x5Zrr7bs4te677fhJ.sj/3S');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_ID`,`admin_Username`);

--
-- Indexes for table `clocking`
--
ALTER TABLE `clocking`
  ADD UNIQUE KEY `clock_ID` (`clock_ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_ID`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD KEY `manage_ID` (`manage_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `clocking`
--
ALTER TABLE `clocking`
  MODIFY `clock_ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `manage_ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

GRANT SELECT, INSERT, DELETE, UPDATE
ON themightyfivedatabase.*
TO themightyuser@localhost
IDENTIFIED BY 'themightypassword';
