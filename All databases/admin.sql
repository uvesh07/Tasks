-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 16, 2022 at 10:01 AM
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
-- Database: `admin`
--
CREATE DATABASE IF NOT EXISTS `admin` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `admin`;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--
-- Creation: Sep 14, 2022 at 04:50 AM
-- Last update: Sep 16, 2022 at 05:12 AM
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `name` varchar(20) NOT NULL,
  `image` varchar(50) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `category`:
--

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`name`, `image`, `id`) VALUES
('Electronics', 'images/electronics.jpeg', 1),
('Clothes', 'images/fashion.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `Clothes`
--
-- Creation: Sep 14, 2022 at 08:34 AM
--

DROP TABLE IF EXISTS `Clothes`;
CREATE TABLE `Clothes` (
  `name` varchar(20) DEFAULT NULL,
  `price` bigint(20) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `dimention` varchar(50) DEFAULT NULL,
  `highlight` varchar(200) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `id` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `Clothes`:
--

--
-- Dumping data for table `Clothes`
--

INSERT INTO `Clothes` (`name`, `price`, `description`, `image`, `color`, `dimention`, `highlight`, `type`, `id`) VALUES
('Jeans', 2300, 'Levis jeans', 'images/levis2.jpg', 'gray', '34 inch X 30 inch', 'Get straight to your summer mood with our ', 'bottum wear', 7),
('shirt', 800, 'A Levi\'s shirt', 'images/shirt.jpeg', 'light blue', 'XL', 'Cotton Men\'s Plain Casual Shirts, Full sleeves.', 'Top wear', 8),
('T-shirt', 500, 'Levi\'s T-shirt', 'images/tshirt.png', 'Blue&gray', 'XL', 'Cotton Causal, Office Round Neck Plain Tshirt With Multi Color.', 'Top wear', 9);

-- --------------------------------------------------------

--
-- Table structure for table `Electronics`
--
-- Creation: Sep 14, 2022 at 08:32 AM
--

DROP TABLE IF EXISTS `Electronics`;
CREATE TABLE `Electronics` (
  `name` varchar(20) DEFAULT NULL,
  `price` bigint(20) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `dimention` varchar(50) DEFAULT NULL,
  `highlight` varchar(200) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `id` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `Electronics`:
--

--
-- Dumping data for table `Electronics`
--

INSERT INTO `Electronics` (`name`, `price`, `description`, `image`, `color`, `dimention`, `highlight`, `type`, `id`) VALUES
('Realme', 17000, 'Realme 7', 'images/realme7.jpg', 'blue', '162.3 x 75.4 x 9.4 mm ', 'Coming to the display, the Realme 7 comes with a bigger 6.5-inch super AMOLED display.', 'smart phone', 2),
('iphone', 80000, 'iphone 13 pro', 'images/iphone.jpg', 'gray', '147 mm x 72 mm x 7.65 mm', 'With a new display, larger battery and better camera hardware and software, the iPhone 13 is the new benchmark for flagship phones.', 'smart phone', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
-- Creation: Sep 15, 2022 at 07:56 AM
-- Last update: Sep 16, 2022 at 05:12 AM
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `pic` varchar(20) NOT NULL,
  `id` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `users`:
--

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `pass`, `pic`, `id`) VALUES
('Uvesh', 'uvesh@gmail.com', 'ca80c49fd579cfeb741c6e202ab1f173', 'images/mei.jpg', 22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Clothes`
--
ALTER TABLE `Clothes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Electronics`
--
ALTER TABLE `Electronics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `Clothes`
--
ALTER TABLE `Clothes`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `Electronics`
--
ALTER TABLE `Electronics`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
