-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 01, 2022 at 05:51 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arg`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `customer_request`
--

CREATE TABLE `customer_request` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `phoneNumber` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `services` varchar(50) NOT NULL,
  `time` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_request`
--

INSERT INTO `customer_request` (`id`, `firstName`, `lastName`, `phoneNumber`, `date`, `services`, `time`, `timestamp`) VALUES
(144, 'Deuz', 'De la Cruz', '09123456789', '2022-11-09', 'Hood Wrap', '8:00 AM - 9:00 AM', '2022-11-30 11:47:40'),
(146, 'Vince', 'Mendoza', '09789123456', '2022-11-11', 'HeadLight Film', '9:00 AM - 10:00 AM', '2022-11-09 11:57:10'),
(147, 'Ronald', 'Parcarey', '09456789123', '2022-11-10', 'Hood Wrap', '8:00 AM - 9:00 AM', '2022-11-09 11:57:58'),
(148, 'Leigh', 'Ayuma', '09456789123', '2022-11-12', 'Customized Plate', '7:00 AM - 8:00 AM', '2022-11-30 11:10:10'),
(166, 'Ronel', 'Tagala', '09423113654', '2022-11-30', 'Signage', '8:00 AM - 9:00 AM', '2022-11-30 11:07:52'),
(171, 'sdfsdfsf', 'asfdfsfd', '09424512132', '2022-12-01', 'Hood Wrap', '7:00 AM - 8:00 AM', '2022-12-01 03:12:32');

-- --------------------------------------------------------

--
-- Table structure for table `design_templates`
--

CREATE TABLE `design_templates` (
  `id` int(11) NOT NULL,
  `designName` varchar(255) CHARACTER SET latin1 NOT NULL,
  `designPrice` int(11) NOT NULL,
  `designStocks` int(11) NOT NULL,
  `designCategory` varchar(255) CHARACTER SET latin1 NOT NULL,
  `designImage` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `design_templates`
--

INSERT INTO `design_templates` (`id`, `designName`, `designPrice`, `designStocks`, `designCategory`, `designImage`) VALUES
(13, 'TEMPLATE 1', 20, 10, 'Motorcycles', 'template_1.png'),
(14, 'TEMPLATE 2', 20, 10, 'Cars', 'template_2.png'),
(15, 'TEMPLATE 3', 20, 10, 'SUVs', 'template_3.png'),
(16, 'TEMPLATE 4', 10, 20, 'Vans', 'template_4.png'),
(17, 'TEMPLATE 5', 10, 20, 'Motorcycles', 'template_5.png'),
(18, 'TEMPLATE 6', 20, 10, 'Cars', 'template_6.png'),
(19, 'TEMPLATE 7', 20, 10, 'SUVs', 'template_7.png'),
(20, 'TEMPLATE 8', 20, 10, 'Vans', 'template_8.png');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `inventoryImage` varchar(255) NOT NULL,
  `itemName` varchar(255) NOT NULL,
  `itemPrice` int(11) NOT NULL,
  `itemStocks` int(11) NOT NULL,
  `itemCategory` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `inventoryImage`, `itemName`, `itemPrice`, `itemStocks`, `itemCategory`) VALUES
(7, 'template_1.png', 'ITEM 1', 20, 10, 'Motorcycles'),
(8, 'template_2.png', 'ITEM 2', 20, 10, 'Cars'),
(9, 'template_3.png', 'ITEM 3', 20, 10, 'SUVs'),
(10, 'template_4.png', 'ITEM 4', 30, 10, 'Vans'),
(11, 'template_5.png', 'ITEM 5', 10, 20, 'Motorcycles'),
(12, 'template_6.png', 'ITEM 6', 20, 10, 'Cars'),
(13, 'template_7.png', 'ITEM 7', 20, 10, 'SUVs'),
(14, 'template_8.png', 'ITEM 8', 20, 31, 'Vans');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_request`
--
ALTER TABLE `customer_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `design_templates`
--
ALTER TABLE `design_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_request`
--
ALTER TABLE `customer_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- AUTO_INCREMENT for table `design_templates`
--
ALTER TABLE `design_templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
