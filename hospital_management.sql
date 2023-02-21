-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2020 at 07:12 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `emergency_form`
--

CREATE TABLE `emergency_form` (
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `date` int(250) NOT NULL,
  `hpreference` varchar(250) NOT NULL,
  `phonenumber` int(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `homephone` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emergency_form`
--

INSERT INTO `emergency_form` (`fname`, `lname`, `gender`, `date`, `hpreference`, `phonenumber`, `address`, `city`, `homephone`) VALUES
('Pias', 'Paul', 'Male', 6, 'Apollo', 1776688358, 'A Block', 'Dhaka', 85163078),
('Pias', 'Paul', 'Male', 7, '142054', 1776688358, 'A Block', 'Chittagong', 85163078),
('Pias', 'Paul', 'Male', 7, '142054', 1776688358, 'A Block', 'Chittagong', 85163078),
('fasf', 'asff', 'Male', 4, 'asfasf', 99233123, 'saffaaaaaaaaaaaaaaaaaaa', 'MymenSingh', 999);

-- --------------------------------------------------------

--
-- Table structure for table `patient_registration`
--

CREATE TABLE `patient_registration` (
  `patient_name` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `mobile_number` varchar(30) NOT NULL,
  `day` int(20) NOT NULL,
  `month` varchar(20) NOT NULL,
  `year` int(20) NOT NULL,
  `street_address` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `zipcode` int(30) NOT NULL,
  `country` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `test1` varchar(20) NOT NULL,
  `test2` varchar(20) NOT NULL,
  `test3` varchar(20) NOT NULL,
  `test4` varchar(20) NOT NULL,
  `test5` varchar(20) NOT NULL,
  `test6` varchar(20) NOT NULL,
  `patient_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_registration`
--

INSERT INTO `patient_registration` (`patient_name`, `gender`, `mobile_number`, `day`, `month`, `year`, `street_address`, `city`, `zipcode`, `country`, `email`, `test1`, `test2`, `test3`, `test4`, `test5`, `test6`, `patient_id`) VALUES
('Ayat Ullah', 'Female', '014555', 2, 'September', 2018, 'A', 'B', 12, 'D', 'haranonil@gmail.com', '', '', 'on', '', '', '', 9);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `password`) VALUES
('omar181@gmail.com', 'password'),
('frickbrain@gamil.com', 'pass');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient_registration`
--
ALTER TABLE `patient_registration`
  ADD PRIMARY KEY (`patient_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient_registration`
--
ALTER TABLE `patient_registration`
  MODIFY `patient_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
