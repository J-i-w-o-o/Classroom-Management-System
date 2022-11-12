-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2022 at 06:45 PM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `school_id` varchar(20) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uid`, `school_id`, `first_name`, `last_name`, `password`, `age`, `address`, `role`) VALUES
(1, '', 'admin', 'admin', 'admin', '$2y$10$Z5/0HjMi/N23utTk6Zl0y.Q903eURA5oaFTJPOTlDhwPKjfkn7Zfi', 22, '1657 Salmon St.', 'admin'),
(7, '', '20201138-M', 'andriel', 'gabriel', '$2y$10$0XEeJ4iO1BEYuS3hrZw8X.uVbeKP/cLUSKEUnBTG7u1csHmaYLe.a', 19, '#128 Concepcion MBS reparo Rd.', 'student'),
(8, '', '20200227-M', 'Adriano', 'Dota', '$2y$10$9bUbZD6gr.OviuUiIN37Je5DmW3fcSeFYo.Plt.4gkRgwKt842zIa', 21, '#128 Concepcion MBS reparo Rd.', 'student'),
(36, '', 'Jiwoo', 'andriel', 'gabriel', '$2y$10$.ImUxSP2U36xApLyLTzM2OqrMaZrQTU/fS0bfZrZNRAUhDiG1Ghry', 21, '#128 Concepcion MBS reparo Rd.', 'admin'),
(42, '', '20201138', 'Andriel', 'Gabriel', '$2y$10$n8BQW5/7y.6yMZV.vhgjFuzOgasYUyJ2bUxNI9cvuCJAumw9HyTem', 21, '#128 Concepcion Street Morning breeze Subdivision', 'admin'),
(43, '', 'patwik', 'patwik', 'patwik', '$2y$10$HfyN9ZhpLUTu9odtFpNwv.K8sue5rMPe9qN36aTNyNaI6WD2.dFL6', 0, 'patwik', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
