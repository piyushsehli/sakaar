-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2017 at 12:07 PM
-- Server version: 5.7.12-log
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `backend`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `employee_address` varchar(90) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `company_name` varchar(65) NOT NULL,
  `designation` varchar(65) NOT NULL,
  `businesstype` varchar(65) NOT NULL,
  `company_contact` varchar(25) NOT NULL,
  `company_address` varchar(65) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` varchar(25) NOT NULL,
  `state` varchar(50) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `can_view` tinyint(1) DEFAULT NULL,
  `can_insert` tinyint(1) DEFAULT NULL,
  `can_update` tinyint(1) DEFAULT NULL,
  `can_delete` tinyint(1) DEFAULT NULL,
  `user_registered_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `employee_address`, `contact`, `password`, `company_name`, `designation`, `businesstype`, `company_contact`, `company_address`, `city`, `pincode`, `state`, `isAdmin`, `isActive`, `can_view`, `can_insert`, `can_update`, `can_delete`, `user_registered_on`) VALUES
(1, 'aaaaaaa', 'aaaaaaa', 'aaaaaaa', 'aaaaaaa', '5d793fc5b00a2348c3fb9ab59e5ca98a', 'aaaaaaa', 'aaaaaaa', 'aaaaaaa', 'aaaaaaa', 'aaaaaaa', 'aaaaaaa', 'aaaaaaa', 'aaaaaaa', 0, 1, 1, 1, 1, 1, '2017-01-13 17:34:20');

-- --------------------------------------------------------

--
-- Table structure for table `super`
--

CREATE TABLE `super` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `isSuper` tinyint(1) DEFAULT NULL,
  `isActive` tinyint(1) DEFAULT NULL,
  `can_view` tinyint(1) DEFAULT NULL,
  `can_insert` tinyint(1) DEFAULT NULL,
  `can_update` tinyint(1) DEFAULT NULL,
  `can_delete` tinyint(1) DEFAULT NULL,
  `user_registered_on` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `super`
--

INSERT INTO `super` (`id`, `name`, `email`, `contact`, `password`, `isSuper`, `isActive`, `can_view`, `can_insert`, `can_update`, `can_delete`, `user_registered_on`) VALUES
(1, 'kajsd', 'kajsd', 'kajsd', 'kajsd', NULL, NULL, NULL, NULL, NULL, NULL, '2017-01-12 15:17:21'),
(2, 'askh', 'jhaksjd', '', '73b9c3c66b1b6d53aea9f0dac6bea9b2', NULL, NULL, NULL, NULL, NULL, NULL, '2017-01-13 10:59:09'),
(3, '111111111', '1111111', '', '1bbd886460827015e5d605ed44252251', NULL, NULL, NULL, NULL, NULL, NULL, '2017-01-13 10:59:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `register_date`) VALUES
(1, 'shivji@gmail.com', 'shivji@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '2017-01-10 11:15:25'),
(2, 'abc', 'abc@gmail.com', '900150983cd24fb0d6963f7d28e17f72', '2017-01-10 12:46:16'),
(3, 'ajay', 'abc@gmail.com', '900150983cd24fb0d6963f7d28e17f72', '2017-01-10 15:35:34'),
(4, 'ajay', 'abc@gmail.com', '900150983cd24fb0d6963f7d28e17f72', '2017-01-10 15:36:29'),
(5, 'abc', 'abc@gmail.com', '900150983cd24fb0d6963f7d28e17f72', '2017-01-10 15:49:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `super`
--
ALTER TABLE `super`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `super`
--
ALTER TABLE `super`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
