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
-- Database: `practice2`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admision`
--

CREATE TABLE `Admision` (
  `id` bigint(10) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `fathers_name` varchar(20) DEFAULT NULL,
  `standard` int(2) DEFAULT NULL,
  `DOB` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Admision`
--

INSERT INTO `Admision` (`id`, `name`, `fathers_name`, `standard`, `DOB`) VALUES
(1, 'mahesh', 'ramesh', 5, '2012-08-02'),
(2, 'uttam', 'suresh', 2, '2015-06-09'),
(3, 'nishit', 'ramesh', 4, '2016-10-17'),
(4, 'mehul', 'dhama', 3, '2013-08-04'),
(5, 'pooja', 'mukesh', 2, '2014-04-06'),
(6, 'rahul', 'keshv', 5, '2012-03-12'),
(7, 'harshil', 'ratan', 4, '2013-10-05'),
(8, 'akash', 'ashok', 1, '2012-08-12'),
(9, 'sanket', 'rishi', 2, '2014-12-13'),
(10, 'atul', 'mehul', 5, '2012-05-09');

-- --------------------------------------------------------

--
-- Table structure for table `Bank`
--

CREATE TABLE `Bank` (
  `id` int(10) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `balance` bigint(10) DEFAULT NULL,
  `last_transaction` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Bank`
--

INSERT INTO `Bank` (`id`, `name`, `type`, `balance`, `last_transaction`) VALUES
(1, 'uvesh', 'current', 9999999, '2022-07-06 06:10:22'),
(2, 'Shruti', 'saving', 80000, '2022-06-12 10:29:10'),
(3, 'sanket', 'saving', 5000, '2022-05-02 12:30:22'),
(4, 'setu', 'saving', 2000, '2022-07-09 06:10:22'),
(5, 'nishit', 'current', 1000000, '2022-08-22 05:47:16'),
(6, 'uttam', 'current', 1500000, '2022-09-13 06:27:15'),
(7, 'meet', 'saving', 500, '2017-01-01 12:13:44'),
(8, 'parth', 'saving', 40000, '2022-08-01 08:10:02'),
(9, 'dev', 'saving', 100, '2022-07-05 10:10:22'),
(10, 'rahul', 'current', 50000, '2022-10-06 08:43:04');

-- --------------------------------------------------------

--
-- Table structure for table `Billing`
--

CREATE TABLE `Billing` (
  `p_id` bigint(10) NOT NULL,
  `p_name` varchar(20) DEFAULT NULL,
  `price` int(6) DEFAULT NULL,
  `quantity` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Billing`
--

INSERT INTO `Billing` (`p_id`, `p_name`, `price`, `quantity`) VALUES
(1, 'phone', 15000, 1),
(2, 'butter', 400, 2),
(3, 'laptop', 54000, 1),
(4, 'books', 600, 4),
(5, 'Tiffinbox', 500, 5),
(6, 'bottel', 200, 4),
(7, 'fruits', 350, 6),
(8, 'T-shirt', 1500, 5),
(9, 'pents', 3600, 6),
(10, 'shoes', 800, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Bus_time`
--

CREATE TABLE `Bus_time` (
  `bus_number` bigint(10) NOT NULL,
  `total_stops` bigint(10) DEFAULT NULL,
  `arrival_time` time DEFAULT NULL,
  `strat_root` varchar(20) DEFAULT NULL,
  `end_root` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Bus_time`
--

INSERT INTO `Bus_time` (`bus_number`, `total_stops`, `arrival_time`, `strat_root`, `end_root`) VALUES
(14, 37, '10:30:00', 'Lal darwaja', 'Devadi gam'),
(58, 73, '11:30:00', 'Thaltej gam', 'Kush society'),
(101, 29, '07:00:00', 'Lal darwaja', 'Preksha Bhar'),
(102, 18, '07:30:00', 'Lal darwaja', 'New Airport'),
(103, 37, '08:00:00', 'Naroda', 'Gujarat University'),
(109, 62, '08:30:00', 'Naroda', 'Trimurti Mandir'),
(116, 24, '09:00:00', 'Civil Hospital', 'Danilimda Gam'),
(136, 70, '09:30:00', 'New India Colony', 'Sattadhar society'),
(137, 45, '10:00:00', 'Bapunagar', 'Gujarat High court'),
(142, 50, '11:00:00', 'Vastral gam', 'Gujarat University');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `model_name` varchar(20) DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `milage` bigint(15) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `price` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`model_name`, `year`, `milage`, `type`, `price`) VALUES
('Hyundai Sedan', 2020, 25, 'private', 2000000),
('Indigo Sedan', 2017, 22, 'texi', 250000),
('kia Carens MPV', 2022, 14, 'private', 1500000),
('Mahindra Wagon', 2018, 24, 'private', 3500000),
('Maruti Eeco MPV', 2010, 35, 'texi', 150000),
('Maruti Ertiga MPV', 2019, 15, 'texi', 800000),
('Maruti Thar SUV', 2022, 15, 'private', 1600000),
('Tata Hatchback', 2017, 18, 'texi', 400000),
('Toyota Fortuner SUV', 2017, 12, 'private', 3500000),
('Toyota SUV', 2021, 20, 'private', 2500000);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `e_id` bigint(10) NOT NULL,
  `e_name` varchar(20) DEFAULT NULL,
  `e_salary` bigint(10) DEFAULT NULL,
  `e_dept` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`e_id`, `e_name`, `e_salary`, `e_dept`) VALUES
(1, 'uvesh', 20000, 'Drupal'),
(2, 'shruti', 20000, 'Drupal'),
(3, 'meet', 15000, 'React JS'),
(4, 'Setu', 25000, 'Drupal'),
(5, 'parth', 60000, 'ML'),
(6, 'Nishit', 30000, 'Angular'),
(7, 'Rahul', 25000, 'Flutter'),
(8, 'Sanket', 18000, 'Drupal'),
(9, 'Ami', 10000, 'Android'),
(10, 'mehul', 40000, 'React JS');

-- --------------------------------------------------------

--
-- Table structure for table `gen_data`
--

CREATE TABLE `gen_data` (
  `id` int(5) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `age` int(2) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gen_data`
--

INSERT INTO `gen_data` (`id`, `name`, `age`, `address`, `mobile`) VALUES
(1, 'Uvesh', 20, 'Ahmedabad', 9775693204),
(2, 'Shruti', 24, 'Ahmedabad', 8745693214),
(3, 'Setu', 21, 'Ahmedabad', 6548952004),
(4, 'Sanket', 26, 'Mahesana', 3254169870),
(5, 'Nishit', 22, 'Ahmedabad', 8456971230),
(6, 'Uttam', 26, 'Kadi', 7412589631),
(7, 'Meet', 21, 'Mumbai', 9987456321),
(8, 'Ami', 22, 'Ahmedabad', 9658741235),
(9, 'Rahul', 25, 'Surat', 8796541232),
(10, 'Mehul', 24, 'Junagadh', 9874563214);

-- --------------------------------------------------------

--
-- Table structure for table `marksheet`
--

CREATE TABLE `marksheet` (
  `roll_number` bigint(10) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `maths` int(5) DEFAULT NULL,
  `english` int(5) DEFAULT NULL,
  `science` int(5) DEFAULT NULL,
  `physics` int(5) DEFAULT NULL
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
(7, 'uttam', 65, 44, 36, 84),
(8, 'meet', 75, 54, 86, 4),
(9, 'Ami', 65, 74, 86, 94),
(10, 'mehul', 85, 94, 88, 74);

-- --------------------------------------------------------

--
-- Table structure for table `sport`
--

CREATE TABLE `sport` (
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `sport` varchar(20) DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `age` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sport`
--

INSERT INTO `sport` (`name`, `email`, `sport`, `year`, `age`) VALUES
('pathan uvesh', 'uvesh@gmail.com', 'Running race', 2018, 20),
('patel sahil', 'sp@gmail.com', 'Cricket', 2019, 25),
('patel kush', 'kush@gmail.com', 'Football', 2015, 22),
('pathan rauf', 'rauf@gmail.com', 'Cricket', 2019, 18),
('Vaghadiya nishit', 'nick@gmail.com', 'kabaddi', 2012, 23),
('pathan sakib', 'sk@gmail.com', 'wresling', 2017, 21),
('sharma kapil', 'kp@gmail.com', 'car race', 2019, 35),
('sathiya parth', 'spd@gmail.com', 'swiming', 2015, 24),
('thakkar nishchal', 'nish@gmail.com', 'chess', 2020, 23),
('thakkar dev', 'dev@gmail.com', 'tracking', 2022, 21);

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE `transport` (
  `t_id` bigint(10) NOT NULL,
  `agent_name` varchar(20) DEFAULT NULL,
  `state_from` varchar(20) DEFAULT NULL,
  `state_to` varchar(20) DEFAULT NULL,
  `quantity` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transport`
--

INSERT INTO `transport` (`t_id`, `agent_name`, `state_from`, `state_to`, `quantity`) VALUES
(1, 'Ramesh', 'bihar', 'gujarat', 20),
(2, 'Mahesh', 'gujarat', 'rajasthan', 25),
(3, 'sanket', 'jammu', 'kerela', 53),
(4, 'meet', 'Madhypradesh', 'Asam', 40),
(5, 'nishit', 'Punjab', 'Odisha', 65),
(6, 'uttam', 'Tamilnadu', 'Himachalpradesh', 87),
(7, 'Mehul', 'Uttrakhand', 'Arunachalpradesh', 106),
(8, 'Sagar', 'Uttarpradesh', 'rajasthan', 48),
(9, 'nishant', 'Jharkhand', 'Delhi', 34),
(10, 'tanmay', 'Maharashtra', 'Gujarat', 208);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admision`
--
ALTER TABLE `Admision`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Bank`
--
ALTER TABLE `Bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Billing`
--
ALTER TABLE `Billing`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `Bus_time`
--
ALTER TABLE `Bus_time`
  ADD PRIMARY KEY (`bus_number`),
  ADD UNIQUE KEY `bus_number` (`bus_number`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD UNIQUE KEY `model_name` (`model_name`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `gen_data`
--
ALTER TABLE `gen_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marksheet`
--
ALTER TABLE `marksheet`
  ADD PRIMARY KEY (`roll_number`);

--
-- Indexes for table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`t_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
