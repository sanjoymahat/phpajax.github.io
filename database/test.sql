-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 04, 2023 at 02:00 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `student_name` varchar(200) NOT NULL,
  `age` int(11) NOT NULL,
  `city` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `student_name`, `age`, `city`) VALUES
(1, 'Yahoo Baba', 25, 'Delhi'),
(2, 'Salman Khan', 24, 'Agra'),
(3, 'Shahid Kapoor', 24, 'Bhopal'),
(4, 'Juhi Chawla', 26, 'Delhi'),
(5, 'Anil Kapoor', 25, 'Mumbai'),
(6, 'Kumar Sanu', 23, 'Goa'),
(7, 'Sonu Nigam', 24, 'Mumbai'),
(8, 'Sonam Kapoor', 23, 'Goa'),
(9, 'Sharukh Khan', 26, 'Delhi'),
(10, 'Abhijeet Kumar', 25, 'Bhopal');

-- --------------------------------------------------------

--
-- Table structure for table `country_tb`
--

CREATE TABLE `country_tb` (
  `cid` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country_tb`
--

INSERT INTO `country_tb` (`cid`, `cname`) VALUES
(1, 'India'),
(2, 'Pakistan'),
(3, 'Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` varchar(50) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `country` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `name`, `age`, `gender`, `country`) VALUES
(27, 'Sanjoy mahato', '1', 'male', 'india'),
(28, 'Sanjoy mahato', '1', 'male', 'india'),
(29, 'Sanjoy mahato', '1', 'male', 'india'),
(30, 'Sanjoy mahato', '1', 'male', 'india'),
(31, 'Sanjoy mahato', '1', 'male', 'india'),
(32, 'Sanjoy mahato', '1', 'male', 'india'),
(33, 'Sanjoy mahato', '1', 'male', 'india'),
(34, 'Sanjoy mahato', '1', 'male', 'india'),
(35, 'Sanjoy mahato', '1', 'male', 'india'),
(36, 'Sanjoy mahato', '1', 'male', 'india'),
(37, 'Sanjoy mahato', '1', 'male', 'india'),
(38, 'Sanjoy mahato', '1', 'male', 'india'),
(39, 'Sanjoy mahato', '1', 'male', 'india'),
(40, 'Sanjoy mahato', '1', 'male', 'india'),
(41, 'Sanjoy mahato', '1', 'male', 'india'),
(42, 'Sanjoy mahato', '1', 'male', 'india'),
(43, 'Sanjoy mahato', '1', 'male', 'india'),
(44, 'Sanjoy mahato', '1', 'male', 'india'),
(45, 'Sanjoy mahato', '1', 'male', 'india'),
(46, 'Sanjoy mahato', '1', 'male', 'india'),
(47, 'Sanjoy mahato', '1', 'male', 'india'),
(48, 'Sanjoy mahato', '1', 'male', 'india'),
(49, 'Sanjoy mahato', '1', 'male', 'india'),
(50, 'Sanjoy mahato', '1', 'male', 'india'),
(51, 'Sanjoy mahato', '1', 'male', 'india'),
(52, 'Sanjoy mahato', '1', 'male', 'india'),
(53, 'Sanjoy mahato', '1', 'male', 'india'),
(54, 'Sanjoy mahato', '1', 'male', 'india'),
(55, 'Sanjoy mahato', '1', 'male', 'india'),
(56, 'Sanjoy mahato', '1', 'male', 'india'),
(57, 'Sanjoy mahato', '1', 'male', 'india'),
(58, 'Sanjoy mahato', '1', 'male', 'india'),
(59, 'Sanjoy mahato', '1', 'male', 'india'),
(60, 'Sanjoy mahato', '1', 'male', 'india'),
(61, 'Sanjoy mahato', '1', 'male', 'india'),
(62, 'desi', '2', 'male', 'india'),
(63, 'desi', '13', 'female', 'india'),
(69, 'Shahid Kapoors', '11', 'male', 'india'),
(70, 'lichu ram mahato', '22', 'male', 'india');

-- --------------------------------------------------------

--
-- Table structure for table `lang`
--

CREATE TABLE `lang` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `language` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lang`
--

INSERT INTO `lang` (`id`, `name`, `language`) VALUES
(1, '[sanjoy]', '[]'),
(2, 'sanjoy', ''),
(3, 'desi', 'PHP,Python,C++');

-- --------------------------------------------------------

--
-- Table structure for table `state_tb`
--

CREATE TABLE `state_tb` (
  `sid` int(11) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `country` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state_tb`
--

INSERT INTO `state_tb` (`sid`, `sname`, `country`) VALUES
(1, 'Haryana', 1),
(2, 'Gujrat', 1),
(3, 'Uttar Pradesh', 1),
(4, 'Maharashtra', 1),
(5, 'Rajasthan', 1),
(6, 'Madhya Pradesh', 1),
(7, 'Balochistan', 2),
(8, 'Punjab', 2),
(9, 'Sindh', 2),
(10, 'Barisal', 3),
(11, 'Chittagong', 3),
(12, 'Dhaka', 3),
(13, 'Khulna', 3);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `last_name`) VALUES
(1, 'sanju', 'Baba'),
(2, 'Salman', 'Khan'),
(3, 'Shahid', 'Kapoor'),
(4, 'Sanjoy', 'mahato'),
(5, 'raju', 'murmu'),
(7, 'lali', 'mahato'),
(8, 'Sanjoy', 'mahato'),
(9, 'Sanjoy', 'mahato'),
(10, 'Sanjoy', 'mahato');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country_tb`
--
ALTER TABLE `country_tb`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lang`
--
ALTER TABLE `lang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state_tb`
--
ALTER TABLE `state_tb`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `country_tb`
--
ALTER TABLE `country_tb`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `lang`
--
ALTER TABLE `lang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `state_tb`
--
ALTER TABLE `state_tb`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
