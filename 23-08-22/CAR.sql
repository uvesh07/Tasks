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
-- Table structure for table `CAR`
--

CREATE TABLE `CAR` (
  `model_name` varchar(20) NOT NULL,
  `year` year(4) NOT NULL,
  `milage` bigint(15) NOT NULL,
  `type` varchar(10) NOT NULL,
  `price` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `CAR`
--

INSERT INTO `CAR` (`model_name`, `year`, `milage`, `type`, `price`) VALUES
('Hyundai Sedan', 2020, 25, 'private', 2000000),
('Toyota SUV', 2021, 20, 'private', 2500000),
('Indigo Sedan', 2017, 22, 'texi', 250000),
('Mahindra Wagon', 2018, 24, 'private', 3500000),
('Tata Hatchback', 2017, 18, 'texi', 400000),
('Maruti Eeco MPV', 2010, 35, 'texi', 150000),
('Kia Carens MPV', 2022, 14, 'private', 1500000),
('Maruti Ertiga MPV', 2019, 15, 'texi', 800000),
('Mahindra Thar SUV ', 2022, 15, 'private', 1600000),
('Toyota Fortuner  SUV', 2017, 12, 'private', 3500000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
