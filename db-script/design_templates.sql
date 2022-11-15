-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2022 at 09:02 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

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
(3, 'TEMPLATE 1', 20, 5, 'Motorcycles', 'template_1.png'),
(4, 'TEMPLATE 2', 30, 5, 'Motorcycles', ''),
(5, 'qweqwe', 123, 123, 'Motorcycles', ''),
(8, '123123', 123, 123, 'Motorcycles', '242666677_232513255511570_3339153575293357148_n.jpg'),
(9, 'asdasdasd', 123, 123, 'Motorcycles', '256282789_2978495022465376_1962325282944518172_n.png'),
(10, '123123', 123123, 123123, 'Motorcycles', '269813717_423424606082249_4620455796745956289_n.gif'),
(11, '12312312', 123123, 123, 'Motorcycles', '269813717_423424606082249_4620455796745956289_n.gif'),
(12, '123', 123, 123, 'Cars', '180530174_582579059580776_8050788854912858893_n (1).jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
