-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2024 at 07:26 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
  `agenda_no` bigint(20) NOT NULL,
  `title` varchar(600) NOT NULL,
  `author` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `filename` varchar(255) NOT NULL,
  `filepath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `e-agenda`
--

INSERT INTO `e-agenda` (`id`, `agenda_no`, `title`, `author`, `date`, `filename`, `filepath`) VALUES
(16, 1000, 'Title', 'Author', '2024-04-12', 'Home  Valenzuela.pdf', '../uploads/e-agenda/Home  Valenzuela.pdf'),
(17, 1001, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vestibulum erat ut nisl bibendum, a dapibus ex blandit. Nunc pulvinar nisl in urna porta, bibendum rutrum dolor accumsan. Nullam tincidunt nibh tempus, pellentesque felis id, mollis dolor. In feugiat sem quis urna dignissim, vel finibus libero interdum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin mollis scelerisque porttitor. Vestibulum malesuada eu ipsum eget eleifend.', 'author', '2024-04-12', 'Superadmin (1).pdf', '../uploads/e-agenda/Superadmin (1).pdf'),
(18, 1002, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vestibulum erat ut nisl bibendum, a dapibus ex blandit. Nunc pulvinar nisl in urna porta, bibendum rutrum dolor accumsan. Nullam tincidunt nibh tempus, pellentesque felis id, mollis dolor. In feugiat sem quis urna dignissim, vel finibus libero interdum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin mollis scelerisque porttitor. Vestibulum malesuada eu ipsum eget eleifend. 11', 'Author', '2024-04-12', 'Document.pdf', '../uploads/e-agenda/Document.pdf');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `incoming`
--
ALTER TABLE `incoming`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
