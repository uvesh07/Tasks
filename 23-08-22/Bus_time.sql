-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 24, 2022 at 09:13 AM
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
-- Table structure for table `Bus time`
--

CREATE TABLE `Bus time` (
  `bus_number` bigint(10) NOT NULL,
  `total_stops` bigint(10) NOT NULL,
  `arrival_time` time NOT NULL,
  `start_root` varchar(20) NOT NULL,
  `end_root` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Bus time`
--

INSERT INTO `Bus time` (`bus_number`, `total_stops`, `arrival_time`, `start_root`, `end_root`) VALUES
(101, 29, '07:00:00', 'Lal darwaja', 'Preksha Bharti'),
(102, 18, '07:30:00', 'Lal darwaja', 'New Airport'),
(103, 37, '08:00:00', 'Naroda', 'Gujarat University'),
(109, 62, '08:30:00', 'Naroda', 'Trimurti Mandir'),
(116, 24, '09:00:00', 'Civil Hospital', 'Danilimda Gam'),
(136, 70, '09:30:00', 'New India Colony', 'Sattadhar Society'),
(137, 45, '10:00:00', 'Bapunagar', 'Gujarat High Court'),
(14, 37, '10:30:00', 'Lal darwaja', 'Devadi gam'),
(142, 50, '11:00:00', 'Vastral gam', 'Gujarat University'),
(58, 73, '11:30:00', 'Thaltej gam', 'Kush Society');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
