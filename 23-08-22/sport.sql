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
-- Table structure for table `sport`
--

CREATE TABLE `sport` (
  `surname` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `sport` varchar(20) NOT NULL,
  `year` year(4) NOT NULL,
  `age` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sport`
--

INSERT INTO `sport` (`surname`, `name`, `email`, `sport`, `year`, `age`) VALUES
('pathan', 'uvesh', 'uvesh@gmail.com', 'Running Race', 2018, 20),
('patel', 'sahil', 'sahil@gmail.com', 'cricket', 2019, 25),
('patel ', 'kush', 'pkush@gmail.com', 'football', 2015, 22),
('pathan', 'rauf', 'rauf@gmail.com', 'cricket', 2019, 18),
('vaghadiya', 'nishit', 'nick@gmail.com', 'kabaddi', 2012, 23),
('pathan ', 'sakib', 'sk2002@gmail.com', 'wresling', 2017, 20),
('sharma', 'kapil', 'kapil@gmail.com', 'car race', 2019, 35),
('sathiya', 'parth', 'parth@gmail.com', 'swiming', 2015, 24),
('thakkar', 'nishchal', 'nish@gmail.com', 'chess', 2020, 23),
('thakkar', 'dev', 'dev@gmail.com', 'tracking', 2022, 21);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
