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
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `p_id` bigint(10) NOT NULL,
  `p_name` varchar(20) NOT NULL,
  `price` int(6) NOT NULL,
  `quantity` int(6) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`p_id`, `p_name`, `price`, `quantity`, `date`) VALUES
(1, 'phone', 15000, 1, '2022-08-01 10:14:42'),
(2, 'butter', 400, 2, '2022-08-01 11:18:36'),
(3, 'laptop', 54000, 1, '2022-08-02 14:24:12'),
(4, 'books', 600, 4, '2022-08-02 16:38:00'),
(5, 'Tiffinbox', 500, 5, '2022-08-03 13:07:30'),
(6, 'bottel', 200, 4, '2022-08-04 20:10:38'),
(7, 'fruits', 350, 6, '2022-08-05 17:03:39'),
(8, 'T-shirts', 1500, 5, '2022-08-04 19:38:12'),
(9, 'pents', 3600, 6, '2022-08-22 13:44:42'),
(10, 'shoes', 800, 1, '2022-08-09 15:00:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `p_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
