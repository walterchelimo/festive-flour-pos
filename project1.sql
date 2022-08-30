-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2022 at 04:36 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `addpacketpurchase`
--

CREATE TABLE `addpacketpurchase` (
  `addpacketpurchaseID` int(11) NOT NULL,
  `PPurchaseId` int(11) NOT NULL,
  `Paying` double NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addpacketpurchase`
--

INSERT INTO `addpacketpurchase` (`addpacketpurchaseID`, `PPurchaseId`, `Paying`, `Date`) VALUES
(1, 13, 100, '2022-08-20 17:29:50'),
(2, 12, 15, '2022-08-20 17:39:04'),
(3, 14, 100, '2022-08-20 17:51:35'),
(4, 14, 300, '2022-08-20 17:53:24'),
(5, 11, 70, '2022-08-22 09:05:29'),
(6, 16, 13, '2022-08-22 09:12:16'),
(7, 9, 34, '2022-08-22 09:18:50'),
(8, 9, 34, '2022-08-22 09:19:24'),
(9, 9, 100, '2022-08-22 09:19:51'),
(10, 9, 100, '2022-08-22 09:20:30'),
(11, 8, 100, '2022-08-22 09:23:21'),
(12, 22, 100, '2022-08-24 12:58:03');

-- --------------------------------------------------------

--
-- Table structure for table `addpayment`
--

CREATE TABLE `addpayment` (
  `addpay_ID` int(11) NOT NULL,
  `Sellid` int(11) NOT NULL,
  `Paying` float NOT NULL,
  `Balance` float NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addpayment`
--

INSERT INTO `addpayment` (`addpay_ID`, `Sellid`, `Paying`, `Balance`, `Date`) VALUES
(1, 1, 20000, 0, '2022-08-15 08:58:52'),
(2, 2, 90000, 0, '2022-08-15 10:11:32'),
(3, 3, 4000, 36000, '2022-08-16 13:37:21'),
(4, 5, 94593, 0, '2022-08-23 06:34:42');

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

-- --------------------------------------------------------

--
-- Table structure for table `addpurchasepayments`
--

CREATE TABLE `addpurchasepayments` (
  `addpaypurchase_ID` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `Paying` float NOT NULL,
  `Balance` double NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addpurchasepayments`
--

INSERT INTO `addpurchasepayments` (`addpaypurchase_ID`, `ID`, `Paying`, `Balance`, `Date`) VALUES
(7, 61, 150, 0, '2022-08-17 17:13:48'),
(8, 63, 30000, 0, '2022-08-20 13:59:26');

-- --------------------------------------------------------

--
-- Table structure for table `addrawmaterial`
--

CREATE TABLE `addrawmaterial` (
  `RawMaterialId` varchar(255) NOT NULL,
  `RawMaterialName` varchar(255) NOT NULL,
  `Unit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addrawmaterial`
--

INSERT INTO `addrawmaterial` (`RawMaterialId`, `RawMaterialName`, `Unit`) VALUES
('m001 ', 'maize', 'Bls  ');

-- --------------------------------------------------------

--
-- Table structure for table `addunit`
--

CREATE TABLE `addunit` (
  `Name` varchar(255) NOT NULL,
  `ShortName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addunit`
--

INSERT INTO `addunit` (`Name`, `ShortName`) VALUES
('Bls', 'bales'),
('kg', 'kg');

-- --------------------------------------------------------

--
-- Table structure for table `addusers`
--

CREATE TABLE `addusers` (
  `user_ID` int(11) NOT NULL,
  `prefix` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `PhoneNumber` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Role` varchar(100) NOT NULL,
  `AccountHolderName` varchar(255) NOT NULL,
  `AccountNumber` varchar(255) NOT NULL,
  `BankName` varchar(255) NOT NULL,
  `BankIdentifierCode` varchar(255) NOT NULL,
  `Branch` varchar(255) NOT NULL,
  `TaxPayerID` varchar(255) NOT NULL,
  `BasicSalary` float NOT NULL,
  `PayMentCycle` mediumtext NOT NULL,
  `PayComponents` varchar(255) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `usertype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addusers`
--

INSERT INTO `addusers` (`user_ID`, `prefix`, `FirstName`, `LastName`, `Email`, `PhoneNumber`, `Address`, `username`, `password`, `Role`, `AccountHolderName`, `AccountNumber`, `BankName`, `BankIdentifierCode`, `Branch`, `TaxPayerID`, `BasicSalary`, `PayMentCycle`, `PayComponents`, `Date`, `usertype`) VALUES
(4, 'Mr', 'wal', 'yu', 'eee@gmail.com', '07323242324', '102 mogotio', 'wal', '123', 'Manager  ', 'josee', '8975432', 'KCB', '897689', 'nyahururu', 'gbg', 60000, 'Per Month', 'bank', '2022-08-18', ''),
(5, 'Mr', 'admin', 'ad', 'jojo@gmail.com', '0721977429', '102 mogotio', 'admin', '123', 'admin   ', 'walter', '78789988', 'KCB', '897689', 'NAKURU', '53TGVAT', 30000, 'Per Month', 'MPESA', '2022-08-18', ''),
(6, 'Ms', 'walt', '102 mogotio', 'driver@gmail.com', '', '102 mogotio', 'driver', '123', 'Drivers  ', 'james', '78789988', 'KCB', '76', 'nyahururu', 'gbg', 10000, 'Per Month', 'bank', '2022-08-18', ''),
(7, 'Mr', 'chelimo ', 'walter', 'drdtr@gmail.com', '0721977429', '102 mogotio', 'miller', '123', 'miller  ', 'walter', '78789988', 'KCB', '897689', 'NAKURU', 'VAT', 12333, 'Per Month', 'MPESA', '2022-08-18', ''),
(9, 'mr', 'mbogo', 'sammy', 'mbogo@gmail.com', '0721977429', '102 mogotio', 'superadmin', '123', 'superadmin  ', 'mbogo', '78789988', 'Joseph', '897689', 'NAKURU', '53TGVAT', 100000, 'Per Month', 'bank', '2022-08-19', ''),
(10, 'Mr', 'josephine', 'ndungu', 'josephine@gmail.com', '0721977429', '123', 'joseph', '123', 'manager  ', 'joseph', '8975432', 'KCB', '897689', 'NAKURU', '53TGVAT', 10000, 'Per Month', 'MPESA', '2022-08-23', '');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `AttendanceId` int(11) NOT NULL,
  `AttendanceName` varchar(255) NOT NULL,
  `Available` int(15) NOT NULL,
  `TotalPay` float NOT NULL,
  `AmountPaid` float NOT NULL,
  `Due` float NOT NULL,
  `WagePerPackager` float NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`AttendanceId`, `AttendanceName`, `Available`, `TotalPay`, `AmountPaid`, `Due`, `WagePerPackager`, `Date`) VALUES
(144, '  admin Mbugua  Riset kk  moses njuguna  walter chelimo', 4, 2000, 0, 0, 500, '2022-08-25'),
(145, '  admin Mbugua  Riset kk  moses njuguna', 3, 2000, 0, 0, 666.667, '2022-08-25'),
(146, '  admin Mbugua  Riset kk', 2, 180, 0, 0, 90, '2022-08-25'),
(147, '  admin Mbugua  Riset kk', 1, 21, 0, 0, 21, '2022-08-25');

-- --------------------------------------------------------

--
-- Table structure for table `cashflow`
--

CREATE TABLE `cashflow` (
  `transaction_id` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `amount` decimal(18,2) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `transaction_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `casuals`
--

CREATE TABLE `casuals` (
  `Casualid` int(11) NOT NULL,
  `prefix` varchar(15) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `PhoneNumber` int(13) NOT NULL,
  `Address` varchar(15) NOT NULL,
  `Role` varchar(255) NOT NULL,
  `TotalWage` float NOT NULL,
  `TotalPaid` float NOT NULL,
  `TotalDue` float NOT NULL,
  `AddedOn` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `casuals`
--

INSERT INTO `casuals` (`Casualid`, `prefix`, `FirstName`, `LastName`, `PhoneNumber`, `Address`, `Role`, `TotalWage`, `TotalPaid`, `TotalDue`, `AddedOn`) VALUES
(1, '', 'walter', 'chelimo', 7111123, '102 mogotio', 'Labourer', 0, 0, 0, '2022-08-15 12:08:42'),
(2, 'Mr', 'moses', 'njuguna', 791290037, 'Namanga', 'packaging', 0, 0, 0, '2022-08-22 12:23:41'),
(3, '', 'Riset', 'kk', 2147483647, 'Nairobi', 'Labourer', 94.75, 4, 90, '2022-08-23 13:11:23'),
(4, '', 'admin', 'Mbugua', 2147483647, 'Nairobi', 'Labourer', 852.75, 252, 600, '2022-08-24 12:45:23');

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
(10, 'Maize Flour                                              ', '1  ', 2, 5857.05, 'Daily', 0, 5740, 117, '0000-00-00', 'Cash', '', '', '', 0, 0, '0000-00-00', 2, 1, '2022-08-23'),
(11, 'Maize Flour          ', '1  ', 1, 13098, 'Daily', 0, 1, 13097, '0000-00-00', 'BankTransfer', '', '', '', 1, 2, '2022-08-24', 1, 1, '2022-08-24');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `CustomerId` varchar(255) NOT NULL,
  `CustomerName` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `PhoneNumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`CustomerId`, `CustomerName`, `Date`, `Location`, `Email`, `PhoneNumber`) VALUES
('1', 'moses', '', 'mombasa', 'jos@gmail.com', '09989898'),
('ctr6 ', 'moses', '2022-08-15', 'westlands nairobi', 'moses@gmail.com', '0999999');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `transaction_no` varchar(20) NOT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `endproduction`
--

CREATE TABLE `endproduction` (
  `Eid` int(11) NOT NULL,
  `MaterialName` varchar(255) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `Sacks` int(255) NOT NULL,
  `Bales` int(255) NOT NULL,
  `2KGBales` int(255) NOT NULL,
  `1KGBales` int(255) NOT NULL,
  `2KGRate` int(255) NOT NULL,
  `1KGRate` int(255) NOT NULL,
  `DailyWage` int(255) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `endproduction`
--

INSERT INTO `endproduction` (`Eid`, `MaterialName`, `ProductName`, `Sacks`, `Bales`, `2KGBales`, `1KGBales`, `2KGRate`, `1KGRate`, `DailyWage`, `Date`) VALUES
(44, 'Maize', 'Maize Flour                                              ', 10, 200, 100, 10, 100, 10, 2000, '2022-08-25'),
(45, 'Maize', 'Maize Flour                                              ', 3, 30, 12, 2, 18, 12, 180, '2022-08-25'),
(46, 'Maize', 'Maize Flour                                              ', 1, 11, 1, 1, 10, 11, 21, '2022-08-25');

-- --------------------------------------------------------

--
-- Table structure for table `expensecategpory`
--

CREATE TABLE `expensecategpory` (
  `expensecategory_ID` int(11) NOT NULL,
  `ExpenseCategory` varchar(255) NOT NULL,
  `CategoryCode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expensecategpory`
--

INSERT INTO `expensecategpory` (`expensecategory_ID`, `ExpenseCategory`, `CategoryCode`) VALUES
(1, 'electricity', 'D123'),
(2, 'water', '9099'),
(3, 'others', 'ot');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `expense_ID` int(11) NOT NULL,
  `ExpenseCategory` varchar(255) NOT NULL,
  `ExpenseName` varchar(255) NOT NULL,
  `TotalAmount` float NOT NULL,
  `terms_of_reccurence` varchar(255) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`expense_ID`, `ExpenseCategory`, `ExpenseName`, `TotalAmount`, `terms_of_reccurence`, `Date`) VALUES
(1, 'electricity  ', 'electricity bill', 2000, 'on', '2022-08-20'),
(2, 'others  ', 'others', 50000, '', '2022-08-20'),
(3, 'electricity  ', 'electricity bill', 216400, '', '2022-08-20'),
(4, 'others  ', 'casuals', 102000, '', '2022-08-20');

-- --------------------------------------------------------

--
-- Table structure for table `hrm`
--

CREATE TABLE `hrm` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `PhoneNumber` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Salary` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `initial_products`
--

CREATE TABLE `initial_products` (
  `id` varchar(50) NOT NULL,
  `initial_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `logout`
--

CREATE TABLE `logout` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `Role` varchar(255) NOT NULL,
  `LogOutTime` datetime NOT NULL DEFAULT current_timestamp(),
  `PhoneNumber` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logout`
--

INSERT INTO `logout` (`ID`, `FirstName`, `Role`, `LogOutTime`, `PhoneNumber`) VALUES
(0, 'walter', 'User admin login', '2022-08-18 12:13:18', 0),
(0, 'wal', 'User  login', '2022-08-18 15:38:19', 0),
(0, 'admin', 'User  login', '2022-08-18 15:41:52', 0),
(0, 'admin', 'User  login', '2022-08-18 15:42:50', 0),
(0, 'admin', 'User  login', '2022-08-18 15:48:34', 0),
(0, 'wal', 'User  login', '2022-08-18 16:03:22', 0),
(0, 'driver', 'User  login', '2022-08-18 16:12:47', 0),
(0, 'admin', 'User  login', '2022-08-18 16:19:06', 0),
(0, 'driver', 'User  login', '2022-08-18 22:40:08', 0),
(0, 'admin', 'User  login', '2022-08-18 22:41:39', 0),
(0, 'admin', 'User  login', '2022-08-18 22:44:15', 0),
(0, 'driver', 'User  login', '2022-08-18 23:07:51', 0),
(0, 'admin', 'User  login', '2022-08-18 23:47:59', 0),
(0, 'admin', 'User  login', '2022-08-18 23:48:05', 0),
(0, 'admin', 'User  login', '2022-08-18 23:56:58', 0),
(0, 'miller', 'User  login', '2022-08-19 00:26:05', 0),
(0, 'admin', 'User  login', '2022-08-19 00:43:31', 0),
(0, 'admin', 'User  login', '2022-08-19 02:02:34', 0),
(0, 'superadmin', 'User  login', '2022-08-19 11:13:48', 0),
(0, 'miller', 'User  login', '2022-08-19 11:16:46', 0),
(0, 'superadmin', 'User  login', '2022-08-20 10:47:40', 0),
(0, 'superadmin', 'User  login', '2022-08-22 14:00:52', 0),
(0, 'superadmin', 'User  login', '2022-08-22 19:26:08', 0),
(0, 'superadmin', 'User  login', '2022-08-23 09:02:57', 0),
(0, 'joseph', 'User  login', '2022-08-23 09:41:36', 0),
(0, 'superadmin', 'User  login', '2022-08-23 12:21:51', 0),
(0, 'joseph', 'User  login', '2022-08-23 12:51:00', 0),
(0, 'superadmin', 'User  login', '2022-08-23 13:10:03', 0),
(0, 'joseph', 'User  login', '2022-08-23 13:15:08', 0),
(0, 'superadmin', 'User  login', '2022-08-23 15:44:18', 0),
(0, 'joseph', 'User  login', '2022-08-23 15:51:29', 0),
(0, 'superadmin', 'User  login', '2022-08-23 17:43:56', 0),
(0, 'superadmin', 'User  login', '2022-08-23 17:58:28', 0),
(0, 'superadmin', 'User  login', '2022-08-23 18:12:15', 0),
(0, 'superadmin', 'User  login', '2022-08-23 18:30:34', 0),
(0, 'superadmin', 'User  login', '2022-08-23 18:43:57', 0),
(0, 'superadmin', 'User  login', '2022-08-25 07:55:14', 0),
(0, 'joseph', 'User  login', '2022-08-25 08:21:53', 0),
(0, 'superadmin', 'User  login', '2022-08-25 10:33:35', 0),
(0, 'superadmin', 'User  login', '2022-08-25 11:35:50', 0),
(0, 'superadmin', 'User  login', '2022-08-25 11:39:25', 0),
(0, 'superadmin', 'User  login', '2022-08-25 16:33:01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `Role` varchar(255) NOT NULL,
  `LogInTime` datetime NOT NULL DEFAULT current_timestamp(),
  `PhoneNumber` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`ID`, `FirstName`, `Role`, `LogInTime`, `PhoneNumber`) VALUES
(1, 'walter', 'User admin login', '2022-08-15 08:43:46', 0),
(2, 'walter', 'User admin login', '2022-08-17 09:51:22', 0),
(3, 'walter', 'User admin login', '2022-08-18 12:14:28', 0),
(4, 'wal', 'User  login', '2022-08-18 14:03:08', 0),
(5, 'admin', 'User  login', '2022-08-18 15:38:29', 0),
(6, 'admin', 'User  login', '2022-08-18 15:43:18', 0),
(7, 'wal', 'User  login', '2022-08-18 15:44:03', 0),
(8, 'driver', 'User  login', '2022-08-18 15:47:12', 0),
(9, 'admin', 'User  login', '2022-08-18 15:48:12', 0),
(10, 'wal', 'User  login', '2022-08-18 15:48:56', 0),
(11, 'driver', 'User  login', '2022-08-18 16:03:51', 0),
(12, 'admin', 'User  login', '2022-08-18 16:12:57', 0),
(13, 'driver', 'User  login', '2022-08-18 16:19:19', 0),
(14, 'admin', 'User  login', '2022-08-18 22:40:42', 0),
(15, 'driver', 'User  login', '2022-08-18 22:44:26', 0),
(16, 'admin', 'User  login', '2022-08-18 23:08:01', 0),
(17, 'driver', 'User  login', '2022-08-18 23:48:15', 0),
(18, 'admin', 'User  login', '2022-08-18 23:49:52', 0),
(19, 'miller', 'User  login', '2022-08-18 23:57:07', 0),
(20, 'admin', 'User  login', '2022-08-19 00:26:34', 0),
(21, 'superadmin', 'User  login', '2022-08-19 02:02:48', 0),
(22, 'miller', 'User  login', '2022-08-19 11:14:28', 0),
(23, 'superadmin', 'User  login', '2022-08-19 11:19:14', 0),
(24, 'superadmin', 'User  login', '2022-08-20 08:57:38', 0),
(25, 'superadmin', 'User  login', '2022-08-20 10:47:50', 0),
(26, 'superadmin', 'User  login', '2022-08-22 14:20:39', 0),
(27, 'joseph', 'User  login', '2022-08-23 09:07:12', 0),
(28, 'superadmin', 'User  login', '2022-08-23 09:41:46', 0),
(29, 'joseph', 'User  login', '2022-08-23 12:22:26', 0),
(30, 'superadmin', 'User  login', '2022-08-23 12:52:27', 0),
(31, 'joseph', 'User  login', '2022-08-23 13:10:36', 0),
(32, 'superadmin', 'User  login', '2022-08-23 13:15:16', 0),
(33, 'joseph', 'User  login', '2022-08-23 15:44:29', 0),
(34, 'superadmin', 'User  login', '2022-08-23 15:51:45', 0),
(35, 'superadmin', 'User  login', '2022-08-23 17:44:08', 0),
(36, 'superadmin', 'User  login', '2022-08-23 18:09:50', 0),
(37, 'superadmin', 'User  login', '2022-08-23 18:10:53', 0),
(38, 'superadmin', 'User  login', '2022-08-23 18:10:53', 0),
(39, 'superadmin', 'User  login', '2022-08-23 18:13:01', 0),
(40, 'superadmin', 'User  login', '2022-08-23 18:13:01', 0),
(41, 'superadmin', 'User  login', '2022-08-23 18:13:33', 0),
(42, 'superadmin', 'User  login', '2022-08-23 18:13:33', 0),
(43, 'superadmin', 'User  login', '2022-08-23 18:18:01', 0),
(44, 'superadmin', 'User  login', '2022-08-23 18:19:11', 0),
(45, 'superadmin', 'User  login', '2022-08-23 18:19:28', 0),
(46, 'superadmin', 'User  login', '2022-08-23 18:19:56', 0),
(47, 'superadmin', 'User  login', '2022-08-23 18:20:54', 0),
(48, 'superadmin', 'User  login', '2022-08-23 18:29:11', 0),
(49, 'superadmin', 'User  login', '2022-08-23 18:43:32', 0),
(50, 'superadmin', 'User  login', '2022-08-24 08:38:53', 0),
(51, 'joseph', 'User  login', '2022-08-25 07:56:24', 0),
(52, 'superadmin', 'User  login', '2022-08-25 08:22:52', 0),
(53, 'superadmin', 'User  login', '2022-08-25 11:05:14', 0),
(54, 'superadmin', 'User  login', '2022-08-25 11:35:37', 0),
(55, 'superadmin', 'User  login', '2022-08-25 11:49:01', 0),
(56, 'superadmin', 'User  login', '2022-08-25 16:56:22', 0);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `ID` int(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `PhoneNumber` varchar(15) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`ID`, `FirstName`, `LastName`, `PhoneNumber`, `Password`, `usertype`) VALUES
(1, 'walter', 'chelimo', '', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `packetpurchase`
--

CREATE TABLE `packetpurchase` (
  `PPurchaseId` int(11) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `SupplierName` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Bales` int(255) NOT NULL,
  `1KGPackets` int(255) NOT NULL,
  `2KGPackets` int(255) NOT NULL,
  `BaleCost` float NOT NULL,
  `1KGPacketCost` float NOT NULL,
  `2KGPacketCost` float NOT NULL,
  `Payment` float NOT NULL,
  `TotalDue` float NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packetpurchase`
--

INSERT INTO `packetpurchase` (`PPurchaseId`, `ProductName`, `SupplierName`, `Location`, `Bales`, `1KGPackets`, `2KGPackets`, `BaleCost`, `1KGPacketCost`, `2KGPacketCost`, `Payment`, `TotalDue`, `Date`) VALUES
(23, 'Maize Flour            ', '1  ', 'nakuru  ', 12, 12, 12, 13, 16, 16, 40, 500, '2022-08-24 13:44:30'),
(24, 'Maize Flour            ', '1  ', 'nakuru  ', 1000, 1000, 1000, 10, 10, 10, 30000, 0, '2022-08-24 14:35:33'),
(25, 'Maize Flour            ', '1  ', 'nakuru  ', 1000, 1000, 1000, 1, 1, 1, 1, 2999, '2022-08-24 14:41:37'),
(26, 'Maize Flour            ', '1  ', 'nakuru  ', 100000, 100000, 100000, 1, 1, 1, 300000, 0, '2022-08-24 14:45:19');

-- --------------------------------------------------------

--
-- Table structure for table `packets`
--

CREATE TABLE `packets` (
  `Packetid` int(11) NOT NULL,
  `BalePackets` int(255) NOT NULL,
  `1kgPackets` int(255) NOT NULL,
  `2kgPackets` int(255) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `ba` decimal(10,0) NOT NULL,
  `1kgPacketa` decimal(10,0) NOT NULL,
  `2kgPacketa` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packets`
--

INSERT INTO `packets` (`Packetid`, `BalePackets`, `1kgPackets`, `2kgPackets`, `ProductName`, `ba`, `1kgPacketa`, `2kgPacketa`) VALUES
(1, 100501, 83484, 93144, 'maize  ', '1000', '1000', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `PaymentId` int(11) NOT NULL,
  `PaymentMethod` varchar(255) NOT NULL,
  `TotalPaid` float NOT NULL,
  `TotalDue` float NOT NULL,
  `Total` float NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`PaymentId`, `PaymentMethod`, `TotalPaid`, `TotalDue`, `Total`, `Date`) VALUES
(1, 'Cash', 68200, 49850, 118050, '2022-08-23'),
(2, 'Mpesa', 30000, 2600, 32600, '2022-08-23'),
(3, 'BankTransfer', 0, 0, 0, '2022-08-23'),
(4, 'Cheque', 0, 0, 0, '2022-08-23');

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE `payroll` (
  `Payrollid` int(11) NOT NULL,
  `Paying` float NOT NULL,
  `Balance` float NOT NULL,
  `Casualid` int(255) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payroll`
--

INSERT INTO `payroll` (`Payrollid`, `Paying`, `Balance`, `Casualid`, `Date`) VALUES
(1, 9, 460, 4, '2022-08-24 14:22:23'),
(2, 60, 400, 4, '2022-08-24 14:22:23'),
(3, 100, 300, 4, '2022-08-24 14:48:15'),
(4, 4, 90, 3, '2022-08-24 15:05:12'),
(5, 79, 600, 4, '2022-08-24 15:15:53');

-- --------------------------------------------------------

--
-- Table structure for table `production`
--

CREATE TABLE `production` (
  `ID` int(11) NOT NULL,
  `BuyingPriceOfRawMaterials` double NOT NULL,
  `NumberOfSacks` int(255) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `QualityPercentage` int(255) NOT NULL,
  `PacketPrice` double NOT NULL,
  `BalePacketPrice` double NOT NULL,
  `NumberOfBales` int(255) NOT NULL,
  `NumberOfLabourers` int(255) NOT NULL,
  `TotalMonthlyExpense` double NOT NULL,
  `TransportExpense` double NOT NULL,
  `NumberOfBalesToBeTransported` int(255) NOT NULL,
  `BranCost` double NOT NULL,
  `GrandTotalSellingPrice` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `productionvalues`
--

CREATE TABLE `productionvalues` (
  `value_ID` int(11) NOT NULL,
  `ProductionName` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `textbox5` float NOT NULL,
  `UnitPrice` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productionvalues`
--

INSERT INTO `productionvalues` (`value_ID`, `ProductionName`, `quantity`, `textbox5`, `UnitPrice`) VALUES
(1, ' baler', 30, 90, 3);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(255) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `1kgAvailable` float NOT NULL,
  `2kgAvailable` float NOT NULL,
  `UpdateDate` datetime NOT NULL DEFAULT current_timestamp(),
  `1baq` double NOT NULL,
  `2baq` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `ProductName`, `1kgAvailable`, `2kgAvailable`, `UpdateDate`, `1baq`, `2baq`) VALUES
(2, 'Maize Flour                                                ', 784, 726, '2022-08-15 12:40:18', 50, '50');

-- --------------------------------------------------------

--
-- Table structure for table `product_delivered`
--

CREATE TABLE `product_delivered` (
  `transaction_no` varchar(30) NOT NULL,
  `product_id` varchar(30) NOT NULL,
  `total_qty` int(11) NOT NULL,
  `buy_price` decimal(18,2) NOT NULL,
  `tax_rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `PurchaseId` varchar(255) NOT NULL,
  `Supplier` varchar(255) NOT NULL,
  `PurchaseDate` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `Quantity` varchar(255) NOT NULL,
  `UnitCost` float NOT NULL,
  `TotalPrice` float NOT NULL,
  `QualityPercentage` float NOT NULL,
  `ExpectedBales` float NOT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ID` int(11) NOT NULL,
  `AmountPaid` float NOT NULL,
  `AmountDue` float NOT NULL,
  `AdvanceBalance` float NOT NULL,
  `PaidOn` varchar(255) NOT NULL,
  `PaymentMethod` varchar(255) NOT NULL,
  `ReferenceNo` varchar(255) NOT NULL,
  `PaymentAccount` varchar(255) NOT NULL,
  `PaymentNote` varchar(255) NOT NULL,
  `OffloadingCost` float NOT NULL,
  `OtherCosts` float NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`PurchaseId`, `Supplier`, `PurchaseDate`, `Location`, `ProductName`, `Quantity`, `UnitCost`, `TotalPrice`, `QualityPercentage`, `ExpectedBales`, `TimeStamp`, `ID`, `AmountPaid`, `AmountDue`, `AdvanceBalance`, `PaidOn`, `PaymentMethod`, `ReferenceNo`, `PaymentAccount`, `PaymentNote`, `OffloadingCost`, `OtherCosts`, `details`) VALUES
('', '4  ', '', 'Westlands  ', 'Maize  ', '5', 6070, 29150, 76, 14.25, '2022-08-17 14:13:48', 61, 9300, 19850, 0, '', 'Cash', '', '', '', 500, 700, ''),
('', '3  ', '', 'kitengela  ', 'Maize  ', '10', 3300, 32600, 76, 28.5, '2022-08-19 08:22:52', 62, 30000, 2600, 0, '', 'Mpesa', '', '', '', 200, 200, ''),
('', '7  ', '', 'nakuru  ', 'Maize  ', '10', 6070, 60300, 76, 28.5, '2022-08-20 10:59:26', 63, 30300, 30000, 0, '', 'Cash', '', '', '', 200, 200, ''),
('', '7  ', '', 'kitengela  ', 'Maize  ', '10', 3000, 28600, 76, 28.5, '2022-08-20 10:42:40', 64, 28600, 0, 0, '', 'Cash', '', '', '', 1000, 400, '');

-- --------------------------------------------------------

--
-- Table structure for table `rawmaterials`
--

CREATE TABLE `rawmaterials` (
  `ID` int(11) NOT NULL,
  `MaterialName` varchar(255) NOT NULL,
  `BuyingPrice` int(255) NOT NULL,
  `Quantity` int(255) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp(),
  `QualityPercentage` int(255) NOT NULL,
  `aq` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rawmaterials`
--

INSERT INTO `rawmaterials` (`ID`, `MaterialName`, `BuyingPrice`, `Quantity`, `Date`, `QualityPercentage`, `aq`) VALUES
(1, 'Maize', 0, 0, '0000-00-00', 0, 20);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `ID` int(11) NOT NULL,
  `RoleName` varchar(255) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp(),
  `permission` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`ID`, `RoleName`, `Date`, `permission`) VALUES
(14, 'superadmin', '2022-08-19 11:15:09', 'on,auser,vuser,duser,Euser,asup,vsup,endp,dsup,Esup,acus,vcus,dcus,Ecus,araw,vraw,draw,Eraw,aun,vun,dun,Eun,apv,vpv,dpv,Epv,aprr,dprr,vprr,Eprr,apur,vpur,dpur,Epur,amp,dmp,vmp,Emp ,asal,vsal,dsal,Esal,ast,vst,dst,Est,aX,vX,dX,EX,acw,vcw,dcw,Ecw,aRE,apro,Epro,vpro,dpro,apaa,acuo,dcuo,Ecuo,vcuo,ars,avll'),
(17, 'manager', '2022-08-23 08:45:08', 'apv,vpv,Epv,aprr,vprr,Eprr,');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `Sellid` int(11) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `CustomerName` varchar(255) NOT NULL,
  `Quantity1` int(255) NOT NULL,
  `TotalSell` int(255) NOT NULL,
  `Payterm` varchar(255) NOT NULL,
  `ShippingCost` float NOT NULL,
  `PaymentAmount` float NOT NULL,
  `Due` float NOT NULL,
  `SellDate` datetime NOT NULL DEFAULT current_timestamp(),
  `PaymentMethod` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `Paid` float NOT NULL,
  `DiscountType` varchar(255) NOT NULL,
  `DiscountAmount` float NOT NULL,
  `ComputedDiscount` float NOT NULL,
  `PaymentDate` datetime NOT NULL DEFAULT current_timestamp(),
  `Quantity2` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`Sellid`, `ProductName`, `CustomerName`, `Quantity1`, `TotalSell`, `Payterm`, `ShippingCost`, `PaymentAmount`, `Due`, `SellDate`, `PaymentMethod`, `details`, `Paid`, `DiscountType`, `DiscountAmount`, `ComputedDiscount`, `PaymentDate`, `Quantity2`) VALUES
(2, 'Maize Flour  ', 'ctr6   ', 10, 97568, 'Weekly', 0, 97567, 0, '2022-08-15 12:46:54', 'Cash', '', 0, '', 1, 50, '0000-00-00 00:00:00', 40),
(3, 'Maize Flour    ', 'ctr6   ', 20, 46832, 'Monthly', 0, 10832, 36000, '2022-08-15 13:09:50', 'Cash', '', 0, '', 1, 24, '2022-08-15 00:00:00', 4),
(4, 'Maize Flour      ', 'ctr6   ', 10, 40957, 'Daily', 0, 0, 40957.4, '2022-08-15 13:10:55', 'Cash', '', 0, '', 2, 42, '2022-08-15 00:00:00', 11),
(5, 'Maize Flour        ', 'ctr6   ', 170, 1894593, 'Daily', 0, 1894590, 0, '2022-08-19 16:06:48', 'Cash', '', 0, '', 10, 2950, '2022-08-19 00:00:00', 125),
(6, 'Maize Flour          ', '1  ', 1, 13098, 'Daily', 0, 1, 13097, '2022-08-24 15:44:06', 'BankTransfer', '', 0, '', 1, 2, '2022-08-24 00:00:00', 1),
(7, 'Maize Flour                                              ', '1  ', 2, 5857, 'Daily', 0, 5740, 117, '2022-08-24 15:44:31', 'Cash', '', 0, '', 0, 0, '0000-00-00 00:00:00', 2),
(8, 'Maize Flour                                                ', '1  ', 10, 131000, 'Weekly', 0, 122222, 8778, '2022-08-25 16:59:16', 'Cheque', 'check mature on date 12', 0, '', 0, 0, '2022-08-25 00:00:00', 10);

-- --------------------------------------------------------

--
-- Table structure for table `sales_product`
--

CREATE TABLE `sales_product` (
  `reciept_no` int(11) NOT NULL,
  `product_id` varchar(20) NOT NULL,
  `price` decimal(18,2) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sellingprice`
--

CREATE TABLE `sellingprice` (
  `Record` int(255) NOT NULL,
  `Date` date DEFAULT NULL,
  `SellingPrice` int(10) DEFAULT NULL,
  `Profit` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sellingproduction`
--

CREATE TABLE `sellingproduction` (
  `sp_ID` int(11) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `WorkingDays` int(11) NOT NULL,
  `NumberOfLabour` int(11) NOT NULL,
  `TotalLabourCost` float NOT NULL,
  `TotalAddedValues` float NOT NULL,
  `TotalMonthlyExpenses` float NOT NULL,
  `RecycleCost` float NOT NULL,
  `weight` float NOT NULL,
  `percentage` float NOT NULL,
  `TotalRecycledCost` float NOT NULL,
  `WeightPerSack` float NOT NULL,
  `WeightPerBale` float NOT NULL,
  `BalePrice` float NOT NULL,
  `sp` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sellingproduction`
--

INSERT INTO `sellingproduction` (`sp_ID`, `ProductName`, `WorkingDays`, `NumberOfLabour`, `TotalLabourCost`, `TotalAddedValues`, `TotalMonthlyExpenses`, `RecycleCost`, `weight`, `percentage`, `TotalRecycledCost`, `WeightPerSack`, `WeightPerBale`, `BalePrice`, `sp`) VALUES
(6, 'Maize Flour        ', 30, 10, 2508, 2090, 212333, 30, 24, 24, 172.8, 90, 24, 2007.15, '6550');

-- --------------------------------------------------------

--
-- Table structure for table `sp`
--

CREATE TABLE `sp` (
  `ID` int(11) NOT NULL,
  `sellingprice` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stockout`
--

CREATE TABLE `stockout` (
  `stockoutid` int(11) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `Quantity1` float NOT NULL,
  `StockOutDate` date NOT NULL DEFAULT current_timestamp(),
  `reason` varchar(255) NOT NULL,
  `Quantity2` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stockout`
--

INSERT INTO `stockout` (`stockoutid`, `ProductName`, `Quantity1`, `StockOutDate`, `reason`, `Quantity2`) VALUES
(2, 'Maize Flour  ', 10, '2022-08-15', '', 40),
(3, 'Maize Flour    ', 20, '2022-08-15', '', 4),
(4, 'Maize Flour      ', 10, '2022-08-15', '', 11),
(5, 'Maize Flour        ', 170, '2022-08-19', '', 125),
(6, 'Maize Flour          ', 5, '2022-08-19', 'personal use', 2),
(7, 'Maize Flour          ', 5, '2022-08-19', 'personal use', 4),
(11, 'Maize Flour          ', 2, '2022-08-19', 'personal use', 1),
(12, 'Maize Flour          ', 2, '2022-08-19', 'personal use', 1),
(13, 'Maize Flour          ', 3, '2022-08-19', '23', 3),
(14, 'Maize Flour          ', 1, '2022-08-24', '', 1),
(15, 'Maize Flour                                                ', 10, '2022-08-25', '', 10);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `SupplierId` varchar(255) NOT NULL,
  `SupplierName` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `AddedOn` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `PhoneNumber` varchar(255) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`SupplierId`, `SupplierName`, `Location`, `AddedOn`, `Email`, `PhoneNumber`, `Date`) VALUES
('1', 'walter', 'nakuru', '2022-08-15', 'wanjiru@gmail.com', '0721977429', '2022-08-18'),
('3', 'Joseph', 'nairobi', '2022-08-17', 'Joseph@gmail.com', '07323242324', '2022-08-18'),
('4', 'Moses', 'kitengela', '2022-08-17', 'Joseph@gmail.com', '07323242324', '2022-08-18'),
('7', 'Miriam', 'Westlands', '2022-08-17', 'Jph@gmail.com', '0789878378', '2022-08-18');

-- --------------------------------------------------------

--
-- Table structure for table `tax`
--

CREATE TABLE `tax` (
  `ID` int(11) NOT NULL,
  `TaxName` varchar(255) NOT NULL,
  `Percentage` float NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `position` varchar(20) NOT NULL,
  `contact_number` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addpacketpurchase`
--
ALTER TABLE `addpacketpurchase`
  ADD PRIMARY KEY (`addpacketpurchaseID`);

--
-- Indexes for table `addpayment`
--
ALTER TABLE `addpayment`
  ADD PRIMARY KEY (`addpay_ID`);

--
-- Indexes for table `addpayment1`
--
ALTER TABLE `addpayment1`
  ADD PRIMARY KEY (`addpay_ID`);

--
-- Indexes for table `addpurchasepayments`
--
ALTER TABLE `addpurchasepayments`
  ADD PRIMARY KEY (`addpaypurchase_ID`);

--
-- Indexes for table `addrawmaterial`
--
ALTER TABLE `addrawmaterial`
  ADD PRIMARY KEY (`RawMaterialId`);

--
-- Indexes for table `addunit`
--
ALTER TABLE `addunit`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `addusers`
--
ALTER TABLE `addusers`
  ADD PRIMARY KEY (`user_ID`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`AttendanceId`);

--
-- Indexes for table `cashflow`
--
ALTER TABLE `cashflow`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `casuals`
--
ALTER TABLE `casuals`
  ADD PRIMARY KEY (`Casualid`);

--
-- Indexes for table `customerorder`
--
ALTER TABLE `customerorder`
  ADD PRIMARY KEY (`OrderId`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CustomerId`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`transaction_no`),
  ADD KEY `supplier_id` (`supplier_id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `endproduction`
--
ALTER TABLE `endproduction`
  ADD PRIMARY KEY (`Eid`);

--
-- Indexes for table `expensecategpory`
--
ALTER TABLE `expensecategpory`
  ADD PRIMARY KEY (`expensecategory_ID`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`expense_ID`);

--
-- Indexes for table `hrm`
--
ALTER TABLE `hrm`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `initial_products`
--
ALTER TABLE `initial_products`
  ADD KEY `id` (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `packetpurchase`
--
ALTER TABLE `packetpurchase`
  ADD PRIMARY KEY (`PPurchaseId`);

--
-- Indexes for table `packets`
--
ALTER TABLE `packets`
  ADD PRIMARY KEY (`Packetid`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`PaymentId`);

--
-- Indexes for table `payroll`
--
ALTER TABLE `payroll`
  ADD PRIMARY KEY (`Payrollid`);

--
-- Indexes for table `production`
--
ALTER TABLE `production`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `productionvalues`
--
ALTER TABLE `productionvalues`
  ADD PRIMARY KEY (`value_ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product_delivered`
--
ALTER TABLE `product_delivered`
  ADD KEY `product_id` (`product_id`),
  ADD KEY `transaction_no` (`transaction_no`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rawmaterials`
--
ALTER TABLE `rawmaterials`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `MaterialName` (`MaterialName`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `RoleName` (`RoleName`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`Sellid`);

--
-- Indexes for table `sales_product`
--
ALTER TABLE `sales_product`
  ADD KEY `product_id` (`product_id`),
  ADD KEY `reciept_no` (`reciept_no`);

--
-- Indexes for table `sellingprice`
--
ALTER TABLE `sellingprice`
  ADD PRIMARY KEY (`Record`);

--
-- Indexes for table `sellingproduction`
--
ALTER TABLE `sellingproduction`
  ADD PRIMARY KEY (`sp_ID`),
  ADD UNIQUE KEY `ProductName` (`ProductName`);

--
-- Indexes for table `sp`
--
ALTER TABLE `sp`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `stockout`
--
ALTER TABLE `stockout`
  ADD PRIMARY KEY (`stockoutid`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`SupplierId`);

--
-- Indexes for table `tax`
--
ALTER TABLE `tax`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `user_id` (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addpacketpurchase`
--
ALTER TABLE `addpacketpurchase`
  MODIFY `addpacketpurchaseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `addpayment`
--
ALTER TABLE `addpayment`
  MODIFY `addpay_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `addpayment1`
--
ALTER TABLE `addpayment1`
  MODIFY `addpay_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `addpurchasepayments`
--
ALTER TABLE `addpurchasepayments`
  MODIFY `addpaypurchase_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `addusers`
--
ALTER TABLE `addusers`
  MODIFY `user_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `AttendanceId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `cashflow`
--
ALTER TABLE `cashflow`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `casuals`
--
ALTER TABLE `casuals`
  MODIFY `Casualid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customerorder`
--
ALTER TABLE `customerorder`
  MODIFY `OrderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `endproduction`
--
ALTER TABLE `endproduction`
  MODIFY `Eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `expensecategpory`
--
ALTER TABLE `expensecategpory`
  MODIFY `expensecategory_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `expense_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hrm`
--
ALTER TABLE `hrm`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `packetpurchase`
--
ALTER TABLE `packetpurchase`
  MODIFY `PPurchaseId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `packets`
--
ALTER TABLE `packets`
  MODIFY `Packetid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `PaymentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payroll`
--
ALTER TABLE `payroll`
  MODIFY `Payrollid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `production`
--
ALTER TABLE `production`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productionvalues`
--
ALTER TABLE `productionvalues`
  MODIFY `value_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `rawmaterials`
--
ALTER TABLE `rawmaterials`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `Sellid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sales_product`
--
ALTER TABLE `sales_product`
  MODIFY `reciept_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sellingprice`
--
ALTER TABLE `sellingprice`
  MODIFY `Record` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sellingproduction`
--
ALTER TABLE `sellingproduction`
  MODIFY `sp_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sp`
--
ALTER TABLE `sp`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stockout`
--
ALTER TABLE `stockout`
  MODIFY `stockoutid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tax`
--
ALTER TABLE `tax`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cashflow`
--
ALTER TABLE `cashflow`
  ADD CONSTRAINT `cashflow_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
