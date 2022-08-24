-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 24, 2022 at 09:15 AM
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
-- Table structure for table `tranport`
--

CREATE TABLE `tranport` (
  `t_id` bigint(10) NOT NULL,
  `t_name` varchar(20) NOT NULL,
  `state_from` varchar(20) NOT NULL,
  `state_to` varchar(20) NOT NULL,
  `quantity` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tranport`
--

INSERT INTO `tranport` (`t_id`, `t_name`, `state_from`, `state_to`, `quantity`) VALUES
(1, 'Ramesh', 'bihar', 'gujarat', 20),
(2, 'mahesh', 'gujarat', 'rajasthan', 25),
(3, 'sanket', 'jammu', 'kerela', 53),
(4, 'Meet', 'Madhypradesh', 'Asam', 40),
(5, 'nishit', 'Punjab', 'odisa', 65),
(6, 'uttam', 'Tamilnadu', 'Himachal pradesh', 87),
(7, 'Mehul', 'Uttrakhand', 'Arunachal pradesh', 106),
(8, 'sagar', 'Uttar Pradesh', 'Rajasthan', 48),
(9, 'nishant', 'Jharkhand', 'Delhi', 34),
(10, 'Tanmay', 'Maharashtra', 'Gujarat', 208);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
