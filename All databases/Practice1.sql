-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 30, 2022 at 09:01 AM
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
-- Table structure for table `Admission`
--

CREATE TABLE `Admission` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `fathers_name` varchar(20) NOT NULL,
  `standard` int(2) NOT NULL,
  `DOB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Admission`
--

INSERT INTO `Admission` (`id`, `name`, `fathers_name`, `standard`, `DOB`) VALUES
(1, 'mahesh', 'ramesh', 5, '2012-08-02'),
(2, 'uttam', 'suresh', 2, '2015-06-09'),
(3, 'nishit', 'ramesh', 4, '2016-10-17'),
(4, 'Mehul', 'dhama', 3, '2013-08-04'),
(5, 'pooja', 'mukesh', 2, '2014-04-06'),
(6, 'rahul', 'keshav', 5, '2012-03-12'),
(7, 'harshil', 'ratan', 4, '2013-10-05'),
(8, 'nitin', 'kalu bhai', 1, '2012-08-12'),
(9, 'sanket', 'rishi', 2, '2014-12-13'),
(10, 'atul', 'mehul', 5, '2012-05-09');

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

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `age` int(2) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobile` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `name`, `age`, `address`, `mobile`) VALUES
(1, 'Uvesh', 20, 'Ahmedabad', 1234567899),
(2, 'shruti', 24, 'ahmedabad', 2135469870),
(3, 'Setu', 21, 'ahmedabad', 321313132132),
(4, 'sanket', 26, 'mehsana', 3216547896),
(5, 'nishit', 22, 'ahmedabad', 2546317893),
(6, 'uttam', 26, 'Mehsana', 2315604789),
(7, 'meet', 21, 'Mumbai', 6541239874),
(8, 'Ami', 22, 'Ahmedabad', 6541238527),
(9, 'Rahul', 25, 'Surat', 9874563211),
(10, 'Mehul', 24, 'Junagadh', 8569741235);

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `marksheet`
--
ALTER TABLE `marksheet`
  ADD PRIMARY KEY (`roll_number`);

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
