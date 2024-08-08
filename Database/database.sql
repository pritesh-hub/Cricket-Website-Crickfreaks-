-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2024 at 09:05 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tab`
--

CREATE TABLE `admin_tab` (
  `uid` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_tab`
--

INSERT INTO `admin_tab` (`uid`, `username`, `email`, `password`) VALUES
(1, 'crickfreaks', 'crickfreaks@gmail.com', 'crick@all');

-- --------------------------------------------------------

--
-- Table structure for table `cus_info`
--

CREATE TABLE `cus_info` (
  `uid` int(5) NOT NULL,
  `username` varchar(39) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cus_info`
--

INSERT INTO `cus_info` (`uid`, `username`, `email`, `password`) VALUES
(13, 'pooja', 'pooja@gmail.com', '456'),
(14, 'rajeshwarii', 'rajeshwarii159@gmail.com', '1915'),
(15, 'piyush', 'piyushgavali2003@gmail.com', '1911'),
(16, 'raj', 'vedantgavali2007@gmail.com', '1234'),
(17, 'Piyush_gavali', 'piyushgavali19@gmail.com', 'prem195'),
(18, 'Piyush_gavali', 'piyushgavali19@gmail.com', 'prem195'),
(19, 'raj', 'raj@gmail.com', '12'),
(20, 'piy', 'any@mail', '111'),
(21, 'piyush19', 'piyushgavali1915@gmail.com', 'piyush159'),
(22, 'virat kohli', 'viratkohli18@gmail.com', 'virushka11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cus_info`
--
ALTER TABLE `cus_info`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cus_info`
--
ALTER TABLE `cus_info`
  MODIFY `uid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
