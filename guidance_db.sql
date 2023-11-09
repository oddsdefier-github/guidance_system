-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2023 at 05:25 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guidance_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) NOT NULL,
  `student_id` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `Y_level` varchar(50) NOT NULL,
  `contact_no` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_id`, `first_name`, `middle_name`, `last_name`, `gender`, `Y_level`, `contact_no`) VALUES
(7, 'IS001G20', 'jay', 'miguel', 'Gan', 'male', 'Grade 10', '09123456789'),
(9, 'IS001G21', 'john', 'miguel', 'gan', 'male', 'Grade 9', '09123456789');

-- --------------------------------------------------------

--
-- Table structure for table `student_report`
--

CREATE TABLE `student_report` (
  `report_no` int(11) NOT NULL,
  `n_student` varchar(50) NOT NULL,
  `teacher` varchar(50) NOT NULL,
  `reasons` varchar(500) NOT NULL,
  `involved_students` varchar(500) NOT NULL,
  `contact_no` text NOT NULL,
  `date_time` varchar(50) DEFAULT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_report`
--

INSERT INTO `student_report` (`report_no`, `n_student`, `teacher`, `reasons`, `involved_students`, `contact_no`, `date_time`, `status`) VALUES
(94, '', 'Roderick Mayo', 'test12', 'test12', '0', '2147483647', 'Approved'),
(96, '', 'khate ortiz', 'joking', 'test', '0', '2147483647', 'Approved'),
(103, '', 'Roderick Mayo', 'test', 'test', '0', '2147483647', 'Approved'),
(104, '', 'khate ortiz', 'joke', 'john', '0', '2147483647', 'Approved'),
(106, 'john', 'Roderick Mayo', 'test', 'test', '09123456789', '10', 'Approved'),
(107, 'jay', 'jay', 'test', 'test', '09123456789', '8', 'pending'),
(108, 'jay', 'khate ortiz', 'test', 'etst', '09123456789', '2-3PM', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` bigint(5) NOT NULL,
  `Student_id` varchar(100) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `Y_level` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `C_password` varchar(100) NOT NULL,
  `user_type` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `Student_id`, `first_name`, `middle_name`, `last_name`, `gender`, `Y_level`, `user_name`, `password`, `C_password`, `user_type`) VALUES
(3444, 'IS001G20', 'Jay Lord', 'Miguel', 'Gan', 'male', 'Grade 11', 'User', '1234', '1234', 'user'),
(5101145, 'Guidance Counsilor', 'Jasper', 'Balani', 'Dequila', 'male', 'Grade 11', 'Admin', '1234', '1234', 'admin'),
(301830204926171272, '12345est', 'test', 'test', 'test', 'male', 'Grade 12', 'Test123', '1234', '1234', 'user'),
(301830204926171275, 'IS00131', 'john', 'miguel', 'gan', 'male', '', 'John', '1234', '1234', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_report`
--
ALTER TABLE `student_report`
  ADD PRIMARY KEY (`report_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_id` (`first_name`),
  ADD KEY `user_name` (`middle_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student_report`
--
ALTER TABLE `student_report`
  MODIFY `report_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=301830204926171276;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
