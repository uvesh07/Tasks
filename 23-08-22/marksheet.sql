-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 24, 2022 at 09:14 AM
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
-- Database: `Practice1`
--

-- --------------------------------------------------------

--
-- Table structure for table `marksheet`
--

CREATE TABLE `marksheet` (
  `roll_number` bigint(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `maths` int(5) NOT NULL,
  `english` int(5) NOT NULL,
  `science` int(5) NOT NULL,
  `physics` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marksheet`
--

INSERT INTO `marksheet` (`roll_number`, `name`, `maths`, `english`, `science`, `physics`) VALUES
(1, 'uvesh', 65, 85, 95, 75),
(2, 'shruti', 54, 87, 65, 95),
(3, 'setu', 74, 56, 89, 36),
(4, 'sanket', 74, 58, 96, 45),
(5, 'nishit', 65, 24, 54, 85),
(6, 'rahul', 85, 74, 96, 24),
(7, 'uttam', 65, 45, 35, 85),
(8, 'meet', 74, 50, 85, 9),
(9, 'Ami', 65, 74, 84, 96),
(10, 'mehul', 85, 96, 88, 79);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marksheet`
--
ALTER TABLE `marksheet`
  ADD PRIMARY KEY (`roll_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
