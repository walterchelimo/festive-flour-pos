-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2022 at 09:07 AM
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
-- Table structure for table `customerorder`
--

CREATE TABLE `customerorder` (
  `OrderId` int(11) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `CustomerName` varchar(255) NOT NULL,
  `Quantity1` int(255) NOT NULL,
  `TotalSell` float NOT NULL,
  `Payterm` varchar(255) NOT NULL,
  `ShippingCost` float NOT NULL,
  `PaymentAmount` float NOT NULL,
  `Due` float NOT NULL,
  `SellDate` date NOT NULL,
  `PaymentMethod` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `Paid` varchar(255) NOT NULL,
  `DiscountType` varchar(255) NOT NULL,
  `DiscountAmount` float NOT NULL,
  `ComputedDiscount` int(11) NOT NULL,
  `PaymentDate` date NOT NULL,
  `Quantity2` int(255) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `OrderDate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerorder`
--

INSERT INTO `customerorder` (`OrderId`, `ProductName`, `CustomerName`, `Quantity1`, `TotalSell`, `Payterm`, `ShippingCost`, `PaymentAmount`, `Due`, `SellDate`, `PaymentMethod`, `details`, `Paid`, `DiscountType`, `DiscountAmount`, `ComputedDiscount`, `PaymentDate`, `Quantity2`, `Status`, `OrderDate`) VALUES
(8, 'Maize Flour                                          ', '1  ', 1, 3904.7, 'Daily', 0, 1500, 2404.7, '0000-00-00', 'Cash', '', '', '', 0, 0, '0000-00-00', 1, 1, '2022-08-23'),
(9, 'Maize Flour                                            ', '1  ', 2, 7809.4, 'Daily', 0, 5000, 2809.4, '0000-00-00', 'Cash', '', '', '', 0, 0, '0000-00-00', 2, 1, '2022-08-23'),
(10, 'Maize Flour                                              ', '1  ', 2, 5857.05, 'Daily', 0, 5740, 117, '0000-00-00', 'Cash', '', '', '', 0, 0, '0000-00-00', 2, 0, '2022-08-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customerorder`
--
ALTER TABLE `customerorder`
  ADD PRIMARY KEY (`OrderId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customerorder`
--
ALTER TABLE `customerorder`
  MODIFY `OrderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
