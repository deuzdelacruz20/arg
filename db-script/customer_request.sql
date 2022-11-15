-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 15, 2022 at 08:53 AM
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
(144, 'Deuz', 'De la Cruz', '09123456789', '2022-11-09', 'Hood Wrap', '7:00 AM - 8:00 AM', '2022-11-09 11:55:59'),
(146, 'Vince', 'Mendoza', '09789123456', '2022-11-11', 'HeadLight Film', '9:00 AM - 10:00 AM', '2022-11-09 11:57:10'),
(147, 'Ronald', 'Parcarey', '09456789123', '2022-11-10', 'Hood Wrap', '8:00 AM - 9:00 AM', '2022-11-09 11:57:58'),
(148, 'Leigh', 'Ayuma', '09456789123', '2022-11-12', 'Customized Plate', '10:00 AM - 11:00 AM', '2022-11-09 11:58:29'),
(151, 'Ronel ', 'Tagala', '09123456798', '2022-11-15', 'Hood Wrap', '1:00 PM - 2:00 PM', '2022-11-15 07:52:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_request`
--
ALTER TABLE `customer_request`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_request`
--
ALTER TABLE `customer_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
