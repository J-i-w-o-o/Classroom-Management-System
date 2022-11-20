-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2022 at 09:49 PM
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
(1, 'admin2', 'andriel', 'gabriel', 0),
(2, 'admin32', '123xdgsdgs', '123', 1),
(3, 'asdada', 'asdasd', 'asdadad', 1),
(4, 'admin', 'asd', 'asdasd', 1),
(5, 'admin123', 'jiwoo', 'meow', 1),
(6, 'admin321', 'meow', 'lol', 1),
(7, 'adminadmin', '123', '123', 1),
(8, 'admin03', 'jiwoo', 'jwii', 1),
(9, 'admin07', 'tanginamo', 'haha', 1);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `department` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department`) VALUES
(1, 'Department ni jiwoo'),
(2, 'Computer Science Department');

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
(35, '20201138-M', 0),
(51, 'admin03', 0),
(52, 'test', 1),
(53, 'admin07', 0);

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
(1, 'BSCS', '3C'),
(2, 'BSCS', '3A'),
(3, 'BSIT', '1A');

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
(1, '202011322-MS', 'geo', 'gabriela', 'BSCS-3C', 1),
(11, '20201132-M', 'Daniel', 'Sigue', 'BSCS-3C', 1),
(22, '20201139-M', 'patwik', 'tite', 'BSCS-3C', 0),
(23, '20201138-M', 'dsad', 'asdasd', 'BSCS-3C', 0),
(24, '2020113-M', 'sadsad', 'asdsadasdad', 'BSCS-3C', 0),
(25, '202012313-M', 'asfaf', 'asdfsad', 'BSCS-3A', 0),
(26, 'test', '123', '123', 'BSCS-3C', 1);

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
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uid`, `school_id`, `first_name`, `last_name`, `password`, `role`) VALUES
(1, '', 'admin', 'admin', 'admin', '$2y$10$Z5/0HjMi/N23utTk6Zl0y.Q903eURA5oaFTJPOTlDhwPKjfkn7Zfi', 'admin'),
(45, '', '20201138-M', 'Andriel Geomer Villas', 'Gabriel', '$2y$10$.iaD1CqtopsGkpJUTF4.yeqnjZsmzDGRJ3GysISORz6VAlvoOwFGW', 'admin'),
(51, '', 'admin123', 'jiwoo', 'meow', '$2y$10$.ohLLfuJ1XV2lQMgfAZPQ.1h8ZFZssIUoPlNM/73ZV7If7M53i9tC', 'admin'),
(52, '', 'admin321', 'meow', 'lol', '$2y$10$WqK8gpmlF/jgggNxvuMK4OG0KTUUvMQKsXJsQw/lot.zS2H.i2D2u', 'admin'),
(53, '', 'adminadmin', '123', '123', '$2y$10$pCdLSEz6Zamitqbf4S/XeOICmDrqAJ5Rgb.bjphTd3n3jKyYw5Uhy', 'admin'),
(54, '', 'admin03', 'jiwoo', 'jwii', '$2y$10$Sax8hBBUQKKp2PIxrtRMruMqxlmFillLog21rkMh0ZiEdYcMBormy', 'admin'),
(55, '', 'test', '123', '123', '', 'student'),
(56, '', 'admin07', 'tanginamo', 'haha', '$2y$10$5/21YyCYlEoGZ8y3FQCdL.05i.SFvA9gbHoJmJorbvySQWWe4sPnO', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `profileimg`
--
ALTER TABLE `profileimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
