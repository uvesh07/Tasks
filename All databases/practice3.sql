-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 30, 2022 at 09:03 AM
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
-- Database: `practice3`
--

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `sp_get_by_job`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_by_job` (IN `x` INT)   begin select * from employee where dep_no=x; end$$

DROP PROCEDURE IF EXISTS `sp_get_employee`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_employee` ()   begin 
select * from employee;
end$$

DROP PROCEDURE IF EXISTS `sp_get_total`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_total` (OUT `x` INT)   begin select count(*) into x from employee; end$$

DROP PROCEDURE IF EXISTS `sp_get_total_manager`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_total_manager` (INOUT `x` INT, IN `y` VARCHAR(20))   begin select count(*) into x from employee where job_title=y;  end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee` (
  `e_id` int(6) NOT NULL,
  `e_name` varchar(20) NOT NULL,
  `salary` bigint(10) NOT NULL,
  `job_title` varchar(20) NOT NULL,
  `dep_no` int(6) NOT NULL,
  `commision` tinyint(1) NOT NULL,
  `join_date` date NOT NULL,
  `manager` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`e_id`, `e_name`, `salary`, `job_title`, `dep_no`, `commision`, `join_date`, `manager`) VALUES
(1, 'uvesh', 20000, 'developer', 4, 0, '2018-08-20', NULL),
(2, 'shruti', 200000, 'developer', 4, 0, '2018-08-25', 1),
(3, 'setu', 20000, 'developer', 4, 0, '2019-08-18', 1),
(4, 'sanket', 20000, 'developer', 4, 1, '2020-08-20', 1),
(5, 'ramesh', 25000, 'developer', 4, 1, '2018-08-15', 2),
(6, 'mahesh', 35000, 'developer', 4, 1, '2015-09-26', 3),
(7, 'suresh', 15000, 'developer', 4, 0, '2018-08-27', 2),
(8, 'himesh', 18000, 'developer', 4, 1, '2021-08-14', 3),
(9, 'Aditi', 20000, 'designer', 3, 0, '2016-04-22', NULL),
(10, 'Akash', 14000, 'designer', 3, 0, '2018-08-30', 9),
(11, 'Anand', 22000, 'designer', 3, 1, '2021-08-26', 0),
(12, 'Arnav', 10000, 'designer', 3, 0, '2018-08-18', 0),
(13, 'Archana', 5000, 'designer', 3, 0, '2018-08-18', 0),
(14, 'Arnav', 17000, 'designer', 3, 1, '2018-08-18', 0),
(15, 'Kabir', 26000, 'designer', 3, 0, '2019-03-05', 0),
(16, 'Padma', 21000, 'designer', 3, 1, '2018-08-18', 0),
(17, 'sabir', 25000, 'P.C.', 6, 1, '2018-08-18', 0),
(18, 'sonu', 30000, 'P.C.', 6, 1, '2018-08-18', 0),
(19, 'saheba', 22000, 'P.C.', 6, 0, '2020-06-23', 0),
(20, 'Akash', 18000, 'P.C.', 6, 0, '2018-08-18', 0),
(21, 'neha', 12000, 'P.C.', 6, 0, '2018-08-18', 0),
(22, 'sneha', 14000, 'P.C.', 6, 1, '2017-06-04', 0),
(23, 'sadakat', 20000, 'P.C.', 6, 1, '2018-08-18', 0),
(24, 'Rabia', 25000, 'P.C.', 6, 1, '2018-08-18', 0),
(25, 'Pooja', 50000, 'H.R.', 2, 0, '2012-04-16', 0),
(26, 'Deep', 20000, 'H.R.', 2, 1, '2018-08-18', 0),
(27, 'Arjun', 22000, 'H.R.', 2, 0, '2018-08-18', 0),
(28, 'Keshav', 26000, 'H.R.', 2, 0, '2016-11-14', 0),
(29, 'khalid', 30000, 'Manager', 1, 0, '2018-08-18', 0),
(30, 'saurabh', 35000, 'Manager', 1, 0, '2018-08-18', 0),
(31, 'shubham', 15000, 'Clerk', 5, 1, '2018-08-18', 0),
(32, 'Mahesh', 10000, 'Clerk', 5, 0, '2017-12-24', 0),
(33, 'karun', 5000, 'Clerk', 5, 0, '2018-08-18', 0),
(34, 'raghav', 20000, 'Clerk', 5, 1, '2018-08-18', 0),
(35, 'Bharatwaj', 15000, 'S.A.', 7, 0, '2021-10-25', 0),
(36, 'poojan', 15000, 'S.A.', 7, 0, '2018-08-18', 0),
(37, 'pramod', 20000, 'S.A.', 7, 1, '2014-08-24', 0),
(38, 'john', 23000, 'S.A.', 7, 1, '2015-06-12', NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `select_from_employee`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `select_from_employee`;
CREATE TABLE `select_from_employee` (
`e_id` int(6)
,`e_name` varchar(20)
,`salary` bigint(10)
,`job_title` varchar(20)
,`dep_no` int(6)
,`commision` tinyint(1)
,`join_date` date
,`manager` int(6)
);

-- --------------------------------------------------------

--
-- Structure for view `select_from_employee`
--
DROP TABLE IF EXISTS `select_from_employee`;

DROP VIEW IF EXISTS `select_from_employee`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `select_from_employee`  AS SELECT `employee`.`e_id` AS `e_id`, `employee`.`e_name` AS `e_name`, `employee`.`salary` AS `salary`, `employee`.`job_title` AS `job_title`, `employee`.`dep_no` AS `dep_no`, `employee`.`commision` AS `commision`, `employee`.`join_date` AS `join_date`, `employee`.`manager` AS `manager` FROM `employee``employee`  ;

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
