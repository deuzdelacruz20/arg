-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2022 at 09:29 AM
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
-- Table structure for table `design_templates`
--

CREATE TABLE `design_templates` (
  `id` int(11) NOT NULL,
  `designName` varchar(255) CHARACTER SET latin1 NOT NULL,
  `designPrice` int(11) NOT NULL,
  `designStocks` int(11) NOT NULL,
  `designCategory` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `design_templates`
--

INSERT INTO `design_templates` (`id`, `designName`, `designPrice`, `designStocks`, `designCategory`) VALUES
(3, 'TEMPLATE 1', 20, 5, 'Motorcycles'),
(4, 'TEMPLATE 2', 30, 5, 'Motorcycles');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `design_templates`
--
ALTER TABLE `design_templates`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `design_templates`
--
ALTER TABLE `design_templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
