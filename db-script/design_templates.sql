-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 01, 2022 at 05:57 AM
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
