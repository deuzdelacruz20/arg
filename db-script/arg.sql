-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 12, 2022 at 03:46 PM
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
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_status` varchar(255) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_request`
--

INSERT INTO `customer_request` (`id`, `firstName`, `lastName`, `phoneNumber`, `date`, `services`, `time`, `timestamp`, `user_status`) VALUES
(144, 'Deuz', 'De la Cruz', '09123456789', '2022-11-09', 'Hood Wrap', '8:00 AM - 9:00 AM', '2022-11-30 11:47:40', 'Rejected'),
(146, 'Vince', 'Mendoza', '09789123456', '2022-11-11', 'HeadLight Film', '9:00 AM - 10:00 AM', '2022-11-09 11:57:10', 'Pending'),
(147, 'Ronald', 'Parcarey', '09456789123', '2022-11-10', 'Hood Wrap', '8:00 AM - 9:00 AM', '2022-11-09 11:57:58', 'Pending'),
(148, 'Leigh', 'Ayuma', '09456789123', '2022-11-12', 'Customized Plate', '7:00 AM - 8:00 AM', '2022-11-30 11:10:10', 'Pending'),
(166, 'Ronel', 'Tagala', '09423113654', '2022-11-30', 'Signage', '8:00 AM - 9:00 AM', '2022-11-30 11:07:52', 'Pending'),
(175, 'Aldous', 'Turgo', '09123456789', '2022-12-10', 'HeadLight Film', '7:00 AM - 8:00 AM', '2022-12-10 10:02:07', 'Accepted'),
(176, 'Steven', 'Quinto', '09456789123', '2022-12-12', 'HeadLight Film', '7:00 AM - 8:00 AM', '2022-12-10 10:03:41', 'Done'),
(177, 'Joshua', 'Garcia', '09456789123', '2022-12-12', 'Hood Wrap', '7:00 AM - 8:00 AM', '2022-12-11 18:38:41', 'Pending'),
(178, 'Piolo', 'Pagana', '0945678123', '2022-12-12', 'HeadLight Film', '7:00 AM - 8:00 AM', '2022-12-12 08:00:14', 'Pending');

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
(15, 'car.png', 'TRANSFORMERS', 20, 10, 'Cars'),
(16, 'car2.png', 'DYNOMAX', 20, 10, 'Cars'),
(17, 'car3.png', 'RS AKIMOTO', 20, 10, 'Cars'),
(18, 'car4.png', 'TRANSFORMERS 2', 20, 10, 'Cars'),
(19, 'car5.png', 'FW 808', 20, 10, 'Cars'),
(20, 'car6.png', 'RUROUNI KENSHIN', 20, 10, 'Cars'),
(21, 'car7.png', 'TURBO', 20, 10, 'Cars'),
(22, 'car8.png', 'RS AKIMOTO RED', 20, 10, 'Cars'),
(23, 'car9.png', 'RS AKIMOTO ANIME', 20, 10, 'Cars'),
(24, 'car10.png', 'NITRO SPORT', 20, 10, 'Cars'),
(25, 'car11.png', 'TURBO - the spirit of competition', 20, 10, 'Cars'),
(26, 'car12.png', 'AMERICAN RACING', 20, 10, 'Cars'),
(27, 'motorcycle1.png', 'SPORTY NMAX', 20, 10, 'Motorcycles'),
(28, 'suv1.png', 'DRAGON BALL SUPER', 20, 10, 'SUVs'),
(29, 'suv2.png', 'DRAGON BALL SUPER 2', 20, 10, 'SUVs'),
(30, 'suv3.png', 'SUV The Spirit of Competition', 20, 10, 'SUVs'),
(31, 'suv4.png', 'RED AND GRAY', 20, 10, 'SUVs'),
(32, 'van1.png', 'VAN Spirit of Competition', 20, 10, 'Vans'),
(34, 'van2.png', 'ONE PIECE', 20, 10, 'Vans'),
(35, 'van3.png', 'TOYOTA RACING DEVELOPMENT', 20, 10, 'Vans');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT for table `design_templates`
--
ALTER TABLE `design_templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
