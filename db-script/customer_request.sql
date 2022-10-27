-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2022 at 09:03 AM
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
  `fullName` varchar(50) NOT NULL,
  `phoneNumber` bigint(11) NOT NULL,
  `services` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` enum('7AM','8AM','9AM','10AM','11AM','1PM','2PM','3PM','4PM','5PM') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_request`
--

INSERT INTO `customer_request` (`id`, `fullName`, `phoneNumber`, `services`, `date`, `time`) VALUES
(103, 'Deuz De la Cruz', 9123456789, 'Full Wrap', '2022-10-26', '7AM'),
(112, 'Vince Mendoza', 9456789123, 'Hood Wrap', '2022-10-28', '8AM'),
(113, 'Ronald Parcarey', 9789456123, 'Headlight Film', '2022-10-28', '9AM'),
(114, 'Leigh Ayuma', 9123789456, 'Customize plate', '2022-10-29', '10AM');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
