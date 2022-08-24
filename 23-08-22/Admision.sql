-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 24, 2022 at 09:07 AM
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
-- Database: `practice2`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admision`
--

CREATE TABLE `Admision` (
  `id` bigint(10) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `fathers_name` varchar(20) DEFAULT NULL,
  `standard` int(2) DEFAULT NULL,
  `DOB` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Admision`
--

INSERT INTO `Admision` (`id`, `name`, `fathers_name`, `standard`, `DOB`) VALUES
(1, 'mahesh', 'ramesh', 5, '2012-08-02'),
(2, 'uttam', 'suresh', 2, '2015-06-09'),
(3, 'nishit', 'ramesh', 4, '2016-10-17'),
(4, 'mehul', 'dhama', 3, '2013-08-04'),
(5, 'pooja', 'mukesh', 2, '2014-04-06'),
(6, 'rahul', 'keshv', 5, '2012-03-12'),
(7, 'harshil', 'ratan', 4, '2013-10-05'),
(8, 'akash', 'ashok', 1, '2012-08-12'),
(9, 'sanket', 'rishi', 2, '2014-12-13'),
(10, 'atul', 'mehul', 5, '2012-05-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admision`
--
ALTER TABLE `Admision`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
