-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2022 at 10:25 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_donation`
--

-- --------------------------------------------------------

--
-- Table structure for table `courierin`
--

CREATE TABLE `courierin` (
  `id` int(255) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `dishName` varchar(50) NOT NULL,
  `totalPlate` int(255) NOT NULL,
  `donateBy` varchar(50) NOT NULL,
  `collectAddress` varchar(50) NOT NULL,
  `deliveryStatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `courierout`
--

CREATE TABLE `courierout` (
  `id` int(255) NOT NULL,
  `requestPersonName` varchar(255) NOT NULL,
  `totalPlateWant` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `requestedTime` time NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `incoming`
--

CREATE TABLE `incoming` (
  `id` int(255) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `dishName` varchar(50) NOT NULL,
  `totalPlate` int(255) NOT NULL,
  `donateBy` varchar(50) NOT NULL,
  `collectAddress` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `outgoing`
--

CREATE TABLE `outgoing` (
  `id` int(255) NOT NULL,
  `requestPersonName` varchar(255) NOT NULL,
  `totalPlateWant` varchar(255) NOT NULL,
  `address` varchar(50) NOT NULL,
  `requestedTime` time NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `Uname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Uname`, `email`, `password`) VALUES
(1, 'kareena jethwani', 'missjethwani@email.com', '$2y$10$7QNTVXV/5FS/X0ACd8EY7u2pRXexeY4T0DQnmPBB9pZs4xp9yTpbW '),
(2, 'Palash Shah', 'palashshah110@gmail.com', '$2y$10$K90WqR0I8Cz8Xt9Wzwji1etzxbmgB2DgKLZKPbAtQTX/Msm/gQYR6'),
(3, 'admin', 'admin', '$2y$10$8.HDuXkez0XrYV6GE6JjXOzpp0JXrxlEKB1yVNSvYn8DBnW1KsPGu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courierin`
--
ALTER TABLE `courierin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courierout`
--
ALTER TABLE `courierout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `incoming`
--
ALTER TABLE `incoming`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outgoing`
--
ALTER TABLE `outgoing`
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
-- AUTO_INCREMENT for table `courierin`
--
ALTER TABLE `courierin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courierout`
--
ALTER TABLE `courierout`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `incoming`
--
ALTER TABLE `incoming`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `outgoing`
--
ALTER TABLE `outgoing`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
