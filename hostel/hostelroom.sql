-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2019 at 02:22 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostelroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `adlogin`
--

CREATE TABLE `adlogin` (
  `Empid` varchar(10) NOT NULL,
  `Empname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `Department` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adlogin`
--

INSERT INTO `adlogin` (`Empid`, `Empname`, `password`, `Department`) VALUES
('VIT1001', 'Ram Prasad', '1001pr', 'Accounts'),
('VIT1002', 'Hari Prasad', '1002hari', 'Hostel'),
('VIT1010', 'Raj ', '1010raj', 'Accounts'),
('VIT1011', 'Rahul', '1011', 'Hostel');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `regno` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`regno`, `name`, `password`) VALUES
('17bce1001', 'Satwik', 'Satwik01.'),
('17bce1002', 'Swapnil', 'Swapnil02.'),
('17bce1003', 'Pankaj ', 'Pankaj03.'),
('17bce1004', 'Ritwik ', 'Ritwik04.'),
('17bce1005', 'Rahul', 'Rahul05.'),
('17bce1009', 'Harshit', 'Harshit09.'),
('17bce1010', 'Zuber', 'Zuber10.'),
('17bce1179', 'Rahul Saw', 'Rahul79.'),
('17bce1241', 'Subodh Verma', 'Subodh41.'),
('17bce1256', 'Anish Dhanuka', 'Anish11.'),
('17bce1328', 'Dibyanshu', 'Dibyanshu28.'),
('17bec1001', 'Saqlain', 'Saqlain01.'),
('17blc1008', 'Prajjwal mishra', 'Prajjwal08.');

-- --------------------------------------------------------

--
-- Table structure for table `plogin`
--

CREATE TABLE `plogin` (
  `regno` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  `pmobile` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plogin`
--

INSERT INTO `plogin` (`regno`, `name`, `dob`, `pmobile`) VALUES
('17bce1179', 'Rahul Saw', '2019-02-01', '8786963530'),
('17bce1241', 'Subodh', '2019-02-13', '8794689632'),
('17bce1256', 'Anish Dhanuka', '2019-02-14', '9958658822'),
('17bce1328', 'Dibyanshu', '2019-02-11', '7796321211');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `regno` varchar(10) NOT NULL,
  `key` varchar(25) NOT NULL,
  `rank` int(11) NOT NULL,
  `NCGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`regno`, `key`, `rank`, `NCGPA`) VALUES
('17bce1001', '1011', 1, 9.6),
('17bce1179', '7896', 30, 8.96),
('17bce1241', '6325', 90, 8.4),
('17bce1256', '1028', 85, 8.5),
('17bce1328', '1087', 20, 9.1),
('17bec1001', '7894', 200, 8.3),
('17blc1008', '9856', 400, 6),
('17blc1010', '3658', 300, 8),
('17bce1002', '1022', 6, 9.2),
('17bce1003', '1033', 250, 7),
('17bce1005', '1055', 80, 8.7),
('17bce1009', '1099', 81, 8.9),
('17bce1010', '1011', 86, 8.4);

-- --------------------------------------------------------

--
-- Table structure for table `roomalo`
--

CREATE TABLE `roomalo` (
  `category` int(11) NOT NULL,
  `roomno` int(11) NOT NULL,
  `regno` varchar(10) NOT NULL,
  `fees` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roomalo`
--

INSERT INTO `roomalo` (`category`, `roomno`, `regno`, `fees`) VALUES
(1, 714, '17BCE1001', 65000),
(1, 414, '17bce1002', 65000),
(1, 714, '17bce1005', 65000),
(1, 414, '17bce1256', 65000);

-- --------------------------------------------------------

--
-- Table structure for table `roomava`
--

CREATE TABLE `roomava` (
  `category` int(11) NOT NULL,
  `roomno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roomava`
--

INSERT INTO `roomava` (`category`, `roomno`) VALUES
(1, 1414),
(2, 251),
(2, 451),
(3, 848),
(3, 948),
(4, 846),
(4, 946),
(4, 1046),
(5, 115),
(5, 615),
(6, 708),
(6, 808),
(6, 1008),
(6, 908),
(7, 909),
(7, 409),
(7, 509),
(7, 209),
(7, 309),
(8, 1013),
(1, 514);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `plogin`
--
ALTER TABLE `plogin`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `roomalo`
--
ALTER TABLE `roomalo`
  ADD PRIMARY KEY (`regno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
