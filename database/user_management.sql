-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2025 at 04:37 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','guest') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `username`, `email`, `password`, `role`) VALUES
(1, 'ayan1', 'ayan@gmail.com', '$2y$10$t.VO/S2Tp5tjhFe5ZD0U4.u/ARrMws.NDgSur7nuHDFub04mmo/P2', 'guest'),
(2, 'admin', 'admin@gmail.com', '$2y$10$1pCYnxq5xbD6dBReTA5/AOlB4VTL9s8tkDi1zhTKSOx377MUgXpEu', 'admin'),
(3, 'ayan', 'ayan@gmail.com', '$2y$10$nW82a8YkVDcaRWsnbkDgme/i6yys.6HzfaQiDO8cXcHsZ61FQNAfW', 'guest'),
(5, 'ayan2', 'ayan2@gmail.com', '$2y$10$ovY62xYcL.q9jA7lxSfQg.9jaYifAwoDkqsg.Zn6P/QUlz0wmmPdG', 'guest'),
(6, 'sara', 'sara@gmail.com', '$2y$10$VKsKyuvdOeF6Obx6QoHFv.ywYGd5dGnWDxT1.V4ikrneUz9C3WsXC', 'guest');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `symbol` varchar(10) NOT NULL,
  `qty` int(11) NOT NULL,
  `buy_avg` decimal(10,4) NOT NULL,
  `ltp` decimal(10,4) NOT NULL,
  `present_value` decimal(15,4) NOT NULL,
  `pl` decimal(15,4) NOT NULL,
  `pl_change` decimal(10,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`symbol`, `qty`, `buy_avg`, `ltp`, `present_value`, `pl`, `pl_change`) VALUES
('AAPL', 100, '1466.0600', '1411.6400', '141164.0000', '-5442.0000', '-3.7100'),
('MSFT', 100, '1144.8300', '1043.8300', '104383.0000', '-10100.0000', '-8.8200'),
('GOOGL', 100, '146.8000', '143.3600', '14336.0000', '-344.0000', '-2.3400'),
('AMZN', 100, '1472.3300', '1299.5500', '129955.0000', '-17278.0000', '-11.7400'),
('TSLA', 100, '1042.1200', '1090.7600', '109076.0000', '4864.0000', '4.6700'),
('META', 100, '357.8000', '331.8700', '33187.0000', '-2593.0000', '-7.2500'),
('NFLX', 100, '1107.2900', '1084.2000', '108420.0000', '-2309.0000', '-2.0900'),
('NVDA', 100, '1364.4300', '1555.0400', '155504.0000', '19061.0000', '13.9700'),
('INTC', 100, '298.2100', '254.1000', '25410.0000', '-4411.0000', '-14.7900'),
('SPY', 100, '554.6200', '530.5100', '53051.0000', '-2411.0000', '-4.3500');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'hi', '$2y$10$tDEnkTLmHxeBIaCPLtPq5.01DYZe5LFTP5qNTC4Z1uJn4FdMOaAPu'),
(3, 'ayan', '$2y$10$7X/IGGfkWcuXz9b5CzYQF.T44a8LgemQyOETE5ipQMcriLlv.GR12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
