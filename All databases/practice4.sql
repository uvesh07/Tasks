-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 30, 2022 at 09:04 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `practice4`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE `department` (
  `id` int(6) DEFAULT NULL,
  `dep_name` varchar(20) DEFAULT NULL,
  `dep_id` int(6) DEFAULT NULL,
  `designation` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `dep_name`, `dep_id`, `designation`, `email`) VALUES
(1, 'IT', 1, 'developer', 'uvesh@gmail.com'),
(2, 'IT', 1, 'H.R', 'shruti@gmail.com'),
(5, 'IT', 1, 'designer', 'nick@gmail.com'),
(6, 'Management', 2, 'H.R', 'uk@gmail.com'),
(7, 'Management', 2, 'Manager', 'meet@gmail.com'),
(8, 'management', 2, 'H.R', 'mehul@gmail.com'),
(9, 'Managemant', 2, 'CEO', 'rahul@gmail.com'),
(10, 'Marketing', 3, 'sales', 'ami@gmail.com'),
(11, 'Marketing', 3, 'analyst', 'sahil@gmail.com'),
(13, 'Marketing', 3, 'consultant', 'nishchal@gmail.com'),
(15, 'Finance', 4, 'C.A', 'parth@gmail.com'),
(16, 'Finance', 4, 'Accountant', 'nisarg@gmail.com'),
(17, 'Finance', 4, 'Financial Planner ', 'dk@gmail.com'),
(19, 'Purchase', 5, 'Vendor', 'fardin@gmail.com'),
(20, 'Purchase', 5, 'Purchase Manager', 'mustakim@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee` (
  `id` int(6) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `address`, `mobile`) VALUES
(1, 'uvesh', 'ahmedabad', 1234567890),
(2, 'shruti', 'ahmedabad', 987654321),
(3, 'sanket', 'mehasana', 3214569870),
(4, 'setu', 'ghandhinagar', 1478523690),
(5, 'nishit', 'mumbai', 213654789),
(6, 'uttam', 'kadi', 2145630789),
(7, 'meet', 'pune', 3652147890),
(8, 'mehul', 'junaghadh', 3652147890),
(9, 'Rahul', 'surat', 9874563210),
(10, 'Ami', 'jaipur', 8521479630),
(11, 'sahil', 'nashik', 8745693120),
(12, 'kush', 'jamnagar', 8745693210),
(13, 'nishchal', 'kota', 9856321470),
(14, 'ramesh', 'kanpur', 8569012347),
(15, 'parth', 'delhi', 8854691230),
(16, 'nisarg', 'udaipur', 9632587410),
(17, 'danis', 'jamnagar', 8523697410),
(18, 'keshav', 'Raipur', 951478632),
(19, 'fardin', 'satara', 864251397),
(20, 'mustakim', 'Alwar', 7536984120);

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

DROP TABLE IF EXISTS `salary`;
CREATE TABLE `salary` (
  `email` varchar(20) DEFAULT NULL,
  `salary` bigint(10) DEFAULT NULL,
  `deduction` int(6) DEFAULT NULL,
  `bonus` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`email`, `salary`, `deduction`, `bonus`) VALUES
('uvesh@gmail.com', 50000, 5000, 2000),
('mustakim@gmail.com', 20000, 1000, 3000),
('shruti@gmail.com', 45000, 6000, 4000),
('nick@gmail.com', 40000, 2000, 5000),
('uk@gmail.com', 25000, 2000, 5000),
('meet@gmail.com', 30000, 2500, 1000),
('mehul@gmail.com', 40000, 4000, 0),
('rahul@gmail.com', 150000, 15000, 5000),
('ami@gmail.com', 15000, 1000, 0),
('sahil@gmail.com', 20000, 2000, 5000),
('nishchal@gmail.com', 35000, 5000, 2000),
('parth@gmail.com', 100000, 10000, 2500),
('nisarg@gmail.com', 75000, 3000, 2000),
('dk@gmail.com', 25000, 2000, 3000),
('fardin@gmail.com', 35000, 5000, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `super`
--

DROP TABLE IF EXISTS `super`;
CREATE TABLE `super` (
  `id` int(6) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `superid` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `super`
--

INSERT INTO `super` (`id`, `name`, `superid`) VALUES
(1, 'uvesh', NULL),
(2, 'setu', 1),
(3, 'sanket', 2),
(4, 'shruti', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
