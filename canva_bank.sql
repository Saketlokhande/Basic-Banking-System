-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2021 at 10:26 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `canva_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `S.No.` int(100) NOT NULL,
  `Sender` varchar(255) NOT NULL,
  `Receiver` varchar(255) NOT NULL,
  `Amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`S.No.`, `Sender`, `Receiver`, `Amount`) VALUES
(1, 'Saket Lokhande', 'Rutuja Hokarne', '2000'),
(2, 'Sharwary', 'Rutuja Hokarne', '2000'),
(3, 'Sakshi', 'saurabh', '5000'),
(4, 'saurabh', 'sneha', '100'),
(5, 'sneha', 'Saket Lokhande', '5600'),
(6, 'cawa salve', 'Rutuja Hokarne', '8000'),
(7, 'Robert', 'saurabh', '1000'),
(8, 'Buddy', 'Sharwary', '100'),
(9, 'Sid', 'Robert', '100'),
(10, 'Sahil', 'Rutuja Hokarne', '2000'),
(11, 'Rutuja Hokarne', 'Sharwary', '100');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(100) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Balance` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Name`, `Email`, `Balance`) VALUES
(1, 'Rutuja Hokarne', 'Rutuja@gmail.com', '63900'),
(2, 'Saket Lokhande', 'saket@gmail.com', '63600'),
(3, 'Sharwary', 'sharwary@gmail.com', '48200'),
(4, 'Sakshi', 'sakshi@gmail.com', '55000'),
(5, 'saurabh', 'saurabh@gmal.com', '50900'),
(6, 'sneha', 'sneha@gmail.com', '72500'),
(7, 'cawa salve', 'cawa@gmail.com', '48000'),
(8, 'Robert', 'robert@gmail.com', '9100'),
(9, 'Buddy', 'buddy@gmail.com', '3900'),
(10, 'Sid', 'sid@gmail.com', '4900'),
(11, 'Sahil', 'sahil@gmail.com', '3600');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`S.No.`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `S.No.` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
