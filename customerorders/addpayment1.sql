-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2022 at 09:14 AM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `addpayment1`
--

CREATE TABLE `addpayment1` (
  `addpay_ID` int(11) NOT NULL,
  `OrderId` int(255) NOT NULL,
  `Paying` float NOT NULL,
  `Balance` float NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addpayment1`
--

INSERT INTO `addpayment1` (`addpay_ID`, `OrderId`, `Paying`, `Balance`, `Date`) VALUES
(1, 10, 7, 150, '2022-08-23'),
(2, 10, 3, 147, '2022-08-23'),
(3, 10, 30, 117, '2022-08-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addpayment1`
--
ALTER TABLE `addpayment1`
  ADD PRIMARY KEY (`addpay_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addpayment1`
--
ALTER TABLE `addpayment1`
  MODIFY `addpay_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
