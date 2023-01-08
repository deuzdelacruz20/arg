-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 08, 2023 at 06:38 PM
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
  `user_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `earnings` int(11) NOT NULL DEFAULT 200
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_request`
--

INSERT INTO `customer_request` (`id`, `firstName`, `lastName`, `phoneNumber`, `date`, `services`, `time`, `timestamp`, `user_status`, `earnings`) VALUES
(280, 'Deuz', 'De la Cruz', '09124567893', '2023-01-10', 'Full Wrap', '7:00 AM - 8:00 AM', '2022-12-28 08:18:38', 'Done', 200),
(281, 'Vince', 'Mendoza', '09456789123', '2023-01-10', 'Hood Wrap', '8:00 AM - 9:00 AM', '2022-12-28 08:23:22', 'Pending', 200),
(283, 'Ronel', 'Tagala', '09454654564', '2023-01-10', 'Hood Wrap', '7:00 AM - 8:00 AM', '2022-12-28 09:53:20', 'Pending', 200),
(285, 'Leigh', 'Ayuma', '09456789123', '2023-01-10', 'Hood Wrap', '10:00 AM - 11:00 AM', '2022-12-28 09:56:12', 'Pending', 200),
(286, 'Aldous', 'Turgo', '09789456456', '2023-01-10', 'Hood Wrap', '9:00 AM - 10:00 AM', '2022-12-28 11:10:29', 'Pending', 200),
(287, 'Ronald', 'Parcarey', '09456789123', '2023-01-10', 'Customized Plate', '1:00 PM - 2:00 PM', '2023-01-05 17:21:40', 'Pending', 200),
(295, 'Leigh ', 'Turgo', '09454645464', '2023-01-09', 'HeadLight Film', '7:00 AM - 8:00 AM', '2023-01-08 11:51:28', 'Pending', 200),
(296, 'Leigh ', 'Turgo', '09454645464', '2023-01-09', 'HeadLight Film', '7:00 AM - 8:00 AM', '2023-01-08 11:51:48', 'Pending', 200);

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `inventoryImage` varchar(255) NOT NULL,
  `itemName` varchar(255) NOT NULL,
  `itemPrice` int(11) NOT NULL,
  `itemStocks` int(11) NOT NULL DEFAULT 0,
  `itemCategory` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `inventoryImage`, `itemName`, `itemPrice`, `itemStocks`, `itemCategory`, `timestamp`) VALUES
(15, 'car.png', 'TRANSFORMERS', 2000, 0, 'Cars', '2022-12-15 02:02:34'),
(16, 'car2.png', 'DYNOMAX', 2000, 0, 'Cars', '2022-12-15 02:02:34'),
(17, 'car3.png', 'RS AKIMOTO', 2000, 0, 'Cars', '2022-12-15 02:02:34'),
(18, 'car4.png', 'TRANSFORMERS 2', 2000, 0, 'Cars', '2022-12-15 02:02:34'),
(19, 'car5.png', 'FW 808', 2000, 0, 'Cars', '2022-12-15 02:02:34'),
(20, 'car6.png', 'RUROUNI KENSHIN', 2000, 0, 'Cars', '2022-12-15 02:02:34'),
(21, 'car7.png', 'TURBO', 2000, 0, 'Cars', '2022-12-15 02:02:34'),
(22, 'car8.png', 'RS AKIMOTO RED', 2000, 0, 'Cars', '2022-12-15 02:02:34'),
(23, 'car9.png', 'RS AKIMOTO ANIME', 2000, 0, 'Cars', '2022-12-15 02:02:34'),
(24, 'car10.png', 'NITRO SPORT', 2000, 0, 'Cars', '2022-12-15 02:02:34'),
(25, 'car11.png', 'TURBO 2', 2000, 0, 'Cars', '2022-12-15 02:02:34'),
(26, 'car12.png', 'AMERICAN RACING', 2000, 0, 'Cars', '2023-01-08 14:41:59'),
(27, 'motorcycle1.png', 'SPORTY NMAX', 2000, 0, 'Motorcycles', '2022-12-15 02:02:34'),
(28, 'suv1.png', 'DRAGON BALL SUPER', 2000, 0, 'SUVs', '2022-12-15 02:02:34'),
(29, 'suv2.png', 'DRAGON BALL SUPER 2', 2000, 0, 'SUVs', '2022-12-15 02:02:34'),
(30, 'suv3.png', 'SUV The Spirit of Competition', 2000, 0, 'SUVs', '2022-12-15 02:02:34'),
(31, 'suv4.png', 'RED AND GRAY', 2000, 0, 'SUVs', '2022-12-15 02:02:34'),
(32, 'van1.png', 'VAN Spirit of Competition', 2000, 0, 'Vans', '2022-12-15 02:02:34'),
(34, 'van2.png', 'ONE PIECE', 2000, 0, 'Vans', '2022-12-15 02:02:34'),
(69, '317734510_669839951463950_475695620104786064_n.jpg', 'CARBON WRAP', 200, 10, 'Materials', '2022-12-17 12:57:35'),
(70, '317817104_717800236594624_2481242579988808019_n.jpg', 'SILVER WRAP', 200, 10, 'Materials', '2022-12-17 12:57:56'),
(71, '317622386_697764101750791_6846100689376490875_n.jpg', 'ARROW', 20, 10, 'Stickers', '2022-12-17 12:59:07'),
(72, '317905270_1072044517526434_7613848791914141712_n.jpg', 'PLATE', 200, 10, 'Materials', '2022-12-17 12:59:59'),
(73, '318081917_1175765639986200_8393670962064059493_n.jpg', 'TAPE', 20, 10, 'Materials', '2022-12-17 21:56:53'),
(74, '318174872_6132620153424128_7851483035883338160_n.jpg', 'GREEN WRAP', 200, 10, 'Materials', '2022-12-17 21:56:57'),
(76, '318291870_1319403255561088_4332972954647928162_n.jpg', 'DARK GREEN WRAP', 200, 5, 'Materials', '2022-12-17 13:01:26'),
(77, '318359347_654214449739943_6992151778393281906_n.jpg', 'SILVER WRAP 2', 200, 5, 'Materials', '2022-12-17 13:02:28'),
(78, '318361297_522563273224074_5462613241574461822_n.jpg', 'LIGHT BLUE', 200, 10, 'Materials', '2022-12-17 13:02:56'),
(79, '318373143_541720000880009_3606032189556751043_n.jpg', 'CHROME COLOR', 200, 5, 'Materials', '2023-01-08 11:44:59'),
(80, '318421392_683567330092264_2693911548530780301_n.jpg', 'WHITE', 200, 5, 'Materials', '2022-12-17 13:04:12'),
(81, '317709498_5472159252892489_7891741831715654_n.jpg', 'HEAD', 20, 10, 'Stickers', '2022-12-17 13:05:26'),
(82, '317718793_1292824878166953_1288866209078409162_n.jpg', 'DIARY NI PAPS', 20, 10, 'Stickers', '2022-12-17 13:25:05'),
(83, '317741456_483057977265464_3928132800673153281_n.jpg', 'JRP', 20, 10, 'Stickers', '2022-12-17 13:25:25'),
(84, '317814568_388524233463834_3465495384634534929_n.jpg', 'DK RACING', 20, 10, 'Stickers', '2022-12-17 13:25:50'),
(85, '317831915_1265055284067137_5828192010331717587_n.jpg', 'SKULL', 20, 10, 'Stickers', '2022-12-17 13:26:08'),
(86, '317854264_632703588647242_4024855050316725167_n.jpg', 'BOYZA THAILAND', 20, 10, 'Stickers', '2022-12-17 20:27:43'),
(87, '317903354_2472732579547230_4305194785556985933_n.jpg', 'HELLO KITTY', 20, 10, 'Stickers', '2022-12-17 13:27:34'),
(88, '317907573_1275326113322830_8785915066048314661_n.jpg', 'KOBE', 20, 10, 'Stickers', '2022-12-17 13:27:56'),
(89, '317911576_682655043417020_6291641607554385403_n.jpg', 'CHACKS TO GO', 20, 10, 'Stickers', '2022-12-17 20:39:44');

-- --------------------------------------------------------

--
-- Table structure for table `inventory_movement`
--

CREATE TABLE `inventory_movement` (
  `id` int(11) NOT NULL,
  `inventoryImage` varchar(255) NOT NULL,
  `itemName` varchar(255) NOT NULL,
  `itemPrice` int(11) NOT NULL,
  `itemStocks` int(11) NOT NULL DEFAULT 0,
  `itemCategory` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory_movement`
--

INSERT INTO `inventory_movement` (`id`, `inventoryImage`, `itemName`, `itemPrice`, `itemStocks`, `itemCategory`, `timestamp`) VALUES
(15, 'car.png', 'TRANSFORMERS', 2000, 0, 'Cars', '2022-12-15 02:02:34'),
(16, 'car2.png', 'DYNOMAX', 2000, 0, 'Cars', '2022-12-15 02:02:34'),
(17, 'car3.png', 'RS AKIMOTO', 2000, 0, 'Cars', '2022-12-15 02:02:34'),
(18, 'car4.png', 'TRANSFORMERS 2', 2000, 0, 'Cars', '2022-12-15 02:02:34'),
(19, 'car5.png', 'FW 808', 2000, 0, 'Cars', '2022-12-15 02:02:34'),
(20, 'car6.png', 'RUROUNI KENSHIN', 2000, 0, 'Cars', '2022-12-15 02:02:34'),
(21, 'car7.png', 'TURBO', 2000, 0, 'Cars', '2022-12-15 02:02:34'),
(22, 'car8.png', 'RS AKIMOTO RED', 2000, 0, 'Cars', '2022-12-15 02:02:34'),
(23, 'car9.png', 'RS AKIMOTO ANIME', 2000, 0, 'Cars', '2022-12-15 02:02:34'),
(24, 'car10.png', 'NITRO SPORT', 2000, 0, 'Cars', '2022-12-15 02:02:34'),
(25, 'car11.png', 'TURBO 2', 2000, 0, 'Cars', '2022-12-15 02:02:34'),
(26, 'car12.png', 'AMERICAN RACING', 2000, 0, 'Cars', '2023-01-08 14:41:59'),
(27, 'motorcycle1.png', 'SPORTY NMAX', 2000, 0, 'Motorcycles', '2022-12-15 02:02:34'),
(28, 'suv1.png', 'DRAGON BALL SUPER', 2000, 0, 'SUVs', '2022-12-15 02:02:34'),
(29, 'suv2.png', 'DRAGON BALL SUPER 2', 2000, 0, 'SUVs', '2022-12-15 02:02:34'),
(30, 'suv3.png', 'SUV The Spirit of Competition', 2000, 0, 'SUVs', '2022-12-15 02:02:34'),
(31, 'suv4.png', 'RED AND GRAY', 2000, 0, 'SUVs', '2022-12-15 02:02:34'),
(32, 'van1.png', 'VAN Spirit of Competition', 2000, 0, 'Vans', '2022-12-15 02:02:34'),
(34, 'van2.png', 'ONE PIECE', 2000, 0, 'Vans', '2022-12-15 02:02:34'),
(69, '317734510_669839951463950_475695620104786064_n.jpg', 'CARBON WRAP', 200, 10, 'Materials', '2022-12-17 12:57:35'),
(70, '317817104_717800236594624_2481242579988808019_n.jpg', 'SILVER WRAP', 200, 10, 'Materials', '2022-12-17 12:57:56'),
(71, '317622386_697764101750791_6846100689376490875_n.jpg', 'ARROW', 20, 10, 'Stickers', '2022-12-17 12:59:07'),
(72, '317905270_1072044517526434_7613848791914141712_n.jpg', 'PLATE', 200, 10, 'Materials', '2022-12-17 12:59:59'),
(73, '318081917_1175765639986200_8393670962064059493_n.jpg', 'TAPE', 20, 10, 'Materials', '2022-12-17 21:56:53'),
(74, '318174872_6132620153424128_7851483035883338160_n.jpg', 'GREEN WRAP', 200, 10, 'Materials', '2022-12-17 21:56:57'),
(76, '318291870_1319403255561088_4332972954647928162_n.jpg', 'DARK GREEN WRAP', 200, 5, 'Materials', '2022-12-17 13:01:26'),
(77, '318359347_654214449739943_6992151778393281906_n.jpg', 'SILVER WRAP 2', 200, 5, 'Materials', '2022-12-17 13:02:28'),
(78, '318361297_522563273224074_5462613241574461822_n.jpg', 'LIGHT BLUE', 200, 10, 'Materials', '2022-12-17 13:02:56'),
(79, '318373143_541720000880009_3606032189556751043_n.jpg', 'CHROME COLOR', 200, 5, 'Materials', '2023-01-08 11:44:59'),
(80, '318421392_683567330092264_2693911548530780301_n.jpg', 'WHITE', 200, 5, 'Materials', '2022-12-17 13:04:12'),
(81, '317709498_5472159252892489_7891741831715654_n.jpg', 'HEAD', 20, 10, 'Stickers', '2022-12-17 13:05:26'),
(82, '317718793_1292824878166953_1288866209078409162_n.jpg', 'DIARY NI PAPS', 20, 10, 'Stickers', '2022-12-17 13:25:05'),
(83, '317741456_483057977265464_3928132800673153281_n.jpg', 'JRP', 20, 10, 'Stickers', '2022-12-17 13:25:25'),
(84, '317814568_388524233463834_3465495384634534929_n.jpg', 'DK RACING', 20, 10, 'Stickers', '2022-12-17 13:25:50'),
(85, '317831915_1265055284067137_5828192010331717587_n.jpg', 'SKULL', 20, 10, 'Stickers', '2022-12-17 13:26:08'),
(86, '317854264_632703588647242_4024855050316725167_n.jpg', 'BOYZA THAILAND', 20, 10, 'Stickers', '2022-12-17 20:27:43'),
(87, '317903354_2472732579547230_4305194785556985933_n.jpg', 'HELLO KITTY', 20, 10, 'Stickers', '2022-12-17 13:27:34'),
(88, '317907573_1275326113322830_8785915066048314661_n.jpg', 'KOBE', 20, 10, 'Stickers', '2022-12-17 13:27:56'),
(89, '317911576_682655043417020_6291641607554385403_n.jpg', 'CHACKS TO GO', 20, 10, 'Stickers', '2022-12-17 20:39:44'),
(102, '', 'aaaaa', 20, 1, 'Stickers', '2023-01-08 17:35:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_request`
--
ALTER TABLE `customer_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory_movement`
--
ALTER TABLE `inventory_movement`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_request`
--
ALTER TABLE `customer_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=297;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `inventory_movement`
--
ALTER TABLE `inventory_movement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
