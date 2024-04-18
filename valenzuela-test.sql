-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2024 at 04:25 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `valenzuela-test`
--

-- --------------------------------------------------------

--
-- Table structure for table `e-agenda`
--

CREATE TABLE `e-agenda` (
  `id` int(11) NOT NULL,
  `title` varchar(600) NOT NULL,
  `date` date DEFAULT NULL,
  `filename` varchar(255) NOT NULL,
  `filepath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `incoming`
--

CREATE TABLE `incoming` (
  `id` bigint(255) NOT NULL,
  `title` varchar(600) NOT NULL,
  `category` varchar(255) NOT NULL,
  `date-uploaded` date NOT NULL DEFAULT current_timestamp(),
  `filename` varchar(255) NOT NULL,
  `filepath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `setting_author`
--

CREATE TABLE `setting_author` (
  `id` bigint(20) NOT NULL,
  `author_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `setting_category`
--

CREATE TABLE `setting_category` (
  `id` bigint(20) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `setting_category`
--

INSERT INTO `setting_category` (`id`, `category_name`) VALUES
(3, 'sample3'),
(4, 'sample4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `user_type`) VALUES
(1, 'sadmin1', '$2y$10$iufbI8SQ4Z9xFqC9qDZSI.dtrU9pCznFjrUfax746XTF6OAf3ASiq', 'superadmin'),
(2, 'superadmin', '$2y$10$Ifko2givu.w9vwVNB/VZ3OBqBhSxGPcm2xsaE4qHreBHPQ3DmzksC', 'superadmin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `e-agenda`
--
ALTER TABLE `e-agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `incoming`
--
ALTER TABLE `incoming`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_author`
--
ALTER TABLE `setting_author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_category`
--
ALTER TABLE `setting_category`
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
-- AUTO_INCREMENT for table `e-agenda`
--
ALTER TABLE `e-agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `incoming`
--
ALTER TABLE `incoming`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setting_author`
--
ALTER TABLE `setting_author`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `setting_category`
--
ALTER TABLE `setting_category`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
