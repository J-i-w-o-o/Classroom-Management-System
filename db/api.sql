-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2022 at 11:16 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `api`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `school_id` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `school_id`, `first_name`, `last_name`, `status`) VALUES
(19, 'admin01', 'Patrick', 'Garcia', 1);

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE `instructors` (
  `id` int(11) NOT NULL,
  `school_id` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`id`, `school_id`, `first_name`, `last_name`, `status`) VALUES
(4, 'Instructor1', 'Miku', 'Miku', 1);

-- --------------------------------------------------------

--
-- Table structure for table `profileimg`
--

CREATE TABLE `profileimg` (
  `id` int(11) NOT NULL,
  `school_id` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profileimg`
--

INSERT INTO `profileimg` (`id`, `school_id`, `status`) VALUES
(82, 'admin01', 0),
(83, 'Instructor1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `course` varchar(155) NOT NULL,
  `section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `course`, `section`) VALUES
(5, 'BSCS', '3A');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `school_id` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `section` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `school_id`, `first_name`, `last_name`, `section`, `status`) VALUES
(33, '20201138-M', 'Andriel', 'Gabriel', 'BSCS-3A', 1),
(34, '20201132-M', 'Jiwoo', 'Gabriel', 'BSCS-3A', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `subject` varchar(155) NOT NULL,
  `subject_code` varchar(11) NOT NULL,
  `course` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject`, `subject_code`, `course`) VALUES
(19, 'INTERMEDIATE PROGRAMMING', 'CCS 103', 'BSCS'),
(21, 'Ethics', 'GEC 008', 'BSCS');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `school_id` varchar(20) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uid`, `school_id`, `first_name`, `last_name`, `password`, `role`, `email`, `phone`) VALUES
(1, '', 'admin', 'admin', 'admin', '$2y$10$Z5/0HjMi/N23utTk6Zl0y.Q903eURA5oaFTJPOTlDhwPKjfkn7Zfi', 'admin', '', '0'),
(67, '', '20201138-M', 'Andriel', 'Gabriel', '$2y$10$ONsKlWKpBNJs.C5qVW.u5Op4E8nqO/jy.7.t2PWEPMIit/DlN7LgG', 'student', '', '0'),
(68, '', '20201132-M', 'Jiwoo', 'Jiwoo', '$2y$10$D1G8D2FrUacMh4U7s988auD6pjNNzMdUHlLYEAFYV0MI2FcSLq8qO', 'student', '', '0'),
(78, '', 'admin01', 'Patrick', 'Garcia', '$2y$10$ZCu16taHuLOBjui//PVxsOJdLs9CROy4X/vc2a7kl3oGaudQhe2J2', 'admin', 'patrickrenzgarcia@gmail.com', '09159224518'),
(79, '', 'Instructor1', 'Miku', 'Miku', '$2y$10$7V6K1aixX01AzX3lZ25WR.H11MmlHLZs8l3sg6UTUE1w4qtP5wQ/a', 'instructor', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instructors`
--
ALTER TABLE `instructors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profileimg`
--
ALTER TABLE `profileimg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `instructors`
--
ALTER TABLE `instructors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `profileimg`
--
ALTER TABLE `profileimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
