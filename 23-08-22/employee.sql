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
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `e_id` bigint(10) NOT NULL,
  `e_name` varchar(20) NOT NULL,
  `e_salary` bigint(10) NOT NULL,
  `e_gender` varchar(10) NOT NULL,
  `e_dept` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`e_id`, `e_name`, `e_salary`, `e_gender`, `e_dept`) VALUES
(1, 'Uvesh', 20000, 'male', 'Drupal'),
(2, 'Shruti', 20000, 'female', 'drupal'),
(3, 'meet', 15000, 'male', 'React JS'),
(4, 'Setu', 25000, 'female', 'Drupal'),
(5, 'parth', 60000, 'male', 'ML'),
(6, 'Nishit', 30000, 'male', 'Angular'),
(7, 'Rahul', 25000, 'male', 'Flutter'),
(8, 'sanket', 18000, 'male', 'Drupal'),
(9, 'Ami', 10000, 'female', 'Android'),
(10, 'Mehul', 40000, 'male', 'React JS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`e_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
