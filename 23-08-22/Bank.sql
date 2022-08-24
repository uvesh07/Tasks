-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 24, 2022 at 09:12 AM
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
-- Table structure for table `Bank`
--

CREATE TABLE `Bank` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL,
  `balance` bigint(10) NOT NULL,
  `last_transaction` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Bank`
--

INSERT INTO `Bank` (`id`, `name`, `type`, `balance`, `last_transaction`) VALUES
(1, 'uvesh', 'current', 999999999, '2022-07-06 06:10:22'),
(2, 'Shruti', 'saving', 80000, '2022-06-12 10:29:10'),
(3, 'sanket', 'saving', 5000, '2022-05-02 12:30:22'),
(4, 'setu', 'saving', 2000, '2022-07-09 06:10:22'),
(5, 'Nishit', 'current', 1000000, '2022-08-22 05:47:16'),
(6, 'uttam', 'current', 1500000, '2022-09-13 06:27:15'),
(7, 'meet', 'saving', 500, '2017-01-01 12:13:44'),
(8, 'parth', 'saving', 40000, '2022-08-01 08:10:22'),
(9, 'dev', 'saving', 100, '2022-07-05 10:10:22'),
(10, 'Rahul', 'current', 50000, '2022-10-06 08:43:04');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
