-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2023 at 05:05 PM
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
-- Database: `scholarship`
--

-- --------------------------------------------------------

--
-- Table structure for table `db`
--

CREATE TABLE `db` (
  `id` int(4) NOT NULL,
  `name` text DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `class` varchar(25) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `religion` varchar(25) DEFAULT NULL,
  `caste` varchar(25) DEFAULT NULL,
  `state` varchar(25) DEFAULT NULL,
  `income` varchar(50) DEFAULT NULL,
  `pwd` varchar(25) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db`
--

INSERT INTO `db` (`id`, `name`, `age`, `class`, `gender`, `religion`, `caste`, `state`, `income`, `pwd`, `date`) VALUES
(3, 'vidya', 19, 'ug', 'f', 'h', 'obc', 'yes', '4', 'no', '2023-01-20 16:05:56'),
(7, 'Vaishnavi Shet', 15, '10', '', '', '', '', '', '', '2023-01-31 12:19:42'),
(41, 'Xxx', 10, '6', 'm', 'h', 'obc', 'no', '6', 'no', '2023-02-13 10:28:23'),
(42, 'vinyas', 12, '9', 'm', 'c', 'm', 'no', '3', '', '2023-02-13 10:30:50'),
(43, '3333', 3, '', '', '', '', '', '', '', '2023-02-13 10:31:57'),
(44, 'vinyas', 19, '4', '', '', '', '', '', '', '2023-02-13 10:38:12'),
(45, 'Rama', 20, 'ug', 'f', 'h', 'obc', 'yes', '3', 'no', '2023-02-13 10:44:22'),
(46, 'Nagarathna', 33, '', 'f', 'h', 'obc', 'yes', '3', 'no', '2023-02-13 11:44:43'),
(47, 'nayana', 19, 'ug', 'f', 'h', 'obc', 'yes', '3', 'no', '2023-02-13 11:56:49'),
(48, 'Vaishnavi', 19, 'ug', 'f', 'h', 'obc', 'yes', '2', 'no', '2023-02-13 12:12:55'),
(49, 'karthikeya', 10, '4', 'm', 'h', 'obc', 'yes', '3', 'no', '2023-02-13 12:26:10'),
(50, 'maniksha', 20, 'ug', 'f', 'h', 'sc', 'yes', '3', 'no', '2023-02-13 12:29:24'),
(51, 'avani', 10, '4', 'f', 'h', 'g', 'yes', '3', 'no', '2023-02-13 12:41:13'),
(52, 'Vaishnavi', 20, '4', 'f', 'c', 'obc', 'no', '5', '', '2023-02-24 11:25:25'),
(53, 'Vaishnavi', 10, 'ug', 'f', '', '', '', '', '', '2023-02-24 11:33:55'),
(54, 'Vaishnavi', 20, 'ug', 'f', 'h', 'sc', 'yes', '3', '', '2023-02-24 11:34:27'),
(55, 'karthikeya', 10, '5', 'm', 'h', 'obc', 'yes', '4', 'no', '2023-02-24 11:35:08'),
(56, 'Vaishnavi Shet', 20, 'ug', 'f', 'h', 'obc', 'no', '5', 'no', '2023-02-24 11:41:29'),
(57, 'kar', 10, '5', 'm', 'h', 'obc', 'yes', '5', '', '2023-02-24 11:42:30'),
(58, 'Vaishnavi', 20, 'ug', 'f', 'h', 'st', 'yes', '3', 'no', '2023-02-24 11:43:37'),
(59, 'Vaishnavi', 20, 'ug', 'f', 'h', 'obc', 'yes', '2', 'no', '2023-02-24 11:45:24'),
(60, 'bhavya', 20, 'ug', 'f', 'h', 'obc', 'yes', '3', 'no', '2023-02-24 11:52:27'),
(61, 'Vaishnavi Shet', 10, '', '', '', '', '', '', '', '2023-02-24 11:53:52'),
(62, 'Vaishnavi Shet', 10, '7', 'f', '', '', '', '', '', '2023-02-24 11:54:02'),
(63, 'Vaishnavi Shet', 10, '7', 'f', 'j', 'sc', 'no', '5', 'no', '2023-02-24 11:54:11'),
(64, 'Xxx', 15, '10', 'f', 'h', 'obc', 'yes', '3', 'no', '2023-02-24 13:14:50'),
(65, 'karthikeya', 10, '', '', '', '', '', '', '', '2023-02-24 13:15:13'),
(66, 'karthikeya', 10, '8', 'm', '', '', '', '', '', '2023-02-24 13:15:20'),
(67, 'karthikeya', 10, '8', 'm', 'h', 'obc', 'no', '4', '', '2023-02-24 13:15:28'),
(68, '', 0, '', '', '', '', '', '', '', '2023-02-25 15:20:27'),
(69, 'Vaishnavi', 19, '', '', '', '', '', '', '', '2023-02-25 15:23:00'),
(70, 'Vaishnavi', 19, 'ug', 'f', '', '', '', '', '', '2023-02-25 15:23:07'),
(71, 'Vaishnavi', 19, 'ug', 'f', 'h', 'obc', 'yes', '3', 'no', '2023-02-25 15:23:18'),
(72, 'Vaishnavi', 19, 'ug', 'm', 'h', 'sc', 'yes', '3', 'no', '2023-02-25 15:23:34'),
(73, 'Vaishnavi', 19, 'ug', 'm', 'h', 'sc', 'no', '1', 'no', '2023-02-25 15:23:55'),
(74, 'Vaishnavi', 19, 'ug', 'm', 'h', 'sc', 'no', '1', '', '2023-02-25 15:24:04'),
(75, 'Vaishnavi', 10, 'ug', 'm', 'h', 'sc', 'no', '1', '', '2023-02-25 15:24:17'),
(76, 'Vaishnavi', 10, 'ug', 'm', 'h', 'sc', 'no', '1', '', '2023-02-25 15:24:24'),
(77, 'vidya', 19, 'ug', 'f', 'h', 'obc', 'yes', '2', 'no', '2023-08-09 21:55:47'),
(78, 'Xxx', 19, '4', 'f', 'm', 'sc', 'no', '4', 'no', '2023-08-28 19:56:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db`
--
ALTER TABLE `db`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db`
--
ALTER TABLE `db`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
