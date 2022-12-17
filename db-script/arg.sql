-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 17, 2022 at 07:52 PM
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
(219, 'Deuz', 'De la Cruz', '09456781231', '2022-12-16', 'Hood Wrap', '7:00 AM - 8:00 AM', '2022-12-15 05:43:10', 'Pending', 200),
(220, 'Ronel', 'Tagala', '09456456466', '2022-12-16', 'Full Wrap', '8:00 AM - 9:00 AM', '2022-12-15 05:54:26', 'Pending', 200),
(221, 'Rodin', 'Brago', '09787979789', '2022-12-16', 'HeadLight Film', '9:00 AM - 10:00 AM', '2022-12-15 05:54:58', 'Pending', 200),
(222, 'Eubie', 'Clemente', '09456123123', '2022-12-16', 'Signage', '7:00 AM - 8:00 AM', '2022-12-15 14:38:49', 'Accepted', 200),
(223, 'Rodin', 'Brago', '09456123789', '2022-12-16', 'Hood Wrap', '7:00 AM - 8:00 AM', '2022-12-15 14:48:31', 'Accepted', 200),
(226, 'ronel', 'tagala', '09480638811', '2022-12-17', 'Hood Wrap', '1:00 PM - 2:00 PM', '2022-12-15 18:59:28', 'Accepted', 200),
(227, 'qwe', 'qwe', '12312113123', '2022-12-23', 'Hood Wrap', '10:00 AM - 11:00 AM', '2022-12-16 02:05:55', 'Done', 200),
(229, 'Arnold', 'Turgo', '09456789123', '2022-12-16', 'Hood Wrap', '1:00 PM - 2:00 PM', '2022-12-16 03:07:28', 'Done', 200);

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
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `availability` varchar(255) NOT NULL DEFAULT 'Available'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `inventoryImage`, `itemName`, `itemPrice`, `itemStocks`, `itemCategory`, `timestamp`, `availability`) VALUES
(15, 'car.png', 'TRANSFORMERS', 2000, 0, 'Cars', '2022-12-15 02:02:34', 'Available'),
(16, 'car2.png', 'DYNOMAX', 2000, 0, 'Cars', '2022-12-15 02:02:34', 'Available'),
(17, 'car3.png', 'RS AKIMOTO', 2000, 0, 'Cars', '2022-12-15 02:02:34', 'Available'),
(18, 'car4.png', 'TRANSFORMERS 2', 2000, 0, 'Cars', '2022-12-15 02:02:34', 'Available'),
(19, 'car5.png', 'FW 808', 2000, 0, 'Cars', '2022-12-15 02:02:34', 'Available'),
(20, 'car6.png', 'RUROUNI KENSHIN', 2000, 0, 'Cars', '2022-12-15 02:02:34', 'Available'),
(21, 'car7.png', 'TURBO', 2000, 0, 'Cars', '2022-12-15 02:02:34', 'Available'),
(22, 'car8.png', 'RS AKIMOTO RED', 2000, 0, 'Cars', '2022-12-15 02:02:34', 'Available'),
(23, 'car9.png', 'RS AKIMOTO ANIME', 2000, 0, 'Cars', '2022-12-15 02:02:34', 'Available'),
(24, 'car10.png', 'NITRO SPORT', 2000, 0, 'Cars', '2022-12-15 02:02:34', 'Available'),
(25, 'car11.png', 'TURBO 2', 2000, 0, 'Cars', '2022-12-15 02:02:34', 'Available'),
(26, 'car12.png', 'AMERICAN RACING', 2000, 0, 'Cars', '2022-12-15 02:02:34', 'Available'),
(27, 'motorcycle1.png', 'SPORTY NMAX', 2000, 0, 'Motorcycles', '2022-12-15 02:02:34', 'Available'),
(28, 'suv1.png', 'DRAGON BALL SUPER', 2000, 0, 'SUVs', '2022-12-15 02:02:34', 'Available'),
(29, 'suv2.png', 'DRAGON BALL SUPER 2', 2000, 0, 'SUVs', '2022-12-15 02:02:34', 'Available'),
(30, 'suv3.png', 'SUV The Spirit of Competition', 2000, 0, 'SUVs', '2022-12-15 02:02:34', 'Available'),
(31, 'suv4.png', 'RED AND GRAY', 2000, 0, 'SUVs', '2022-12-15 02:02:34', 'Available'),
(32, 'van1.png', 'VAN Spirit of Competition', 2000, 0, 'Vans', '2022-12-15 02:02:34', 'Available'),
(34, 'van2.png', 'ONE PIECE', 2000, 0, 'Vans', '2022-12-15 02:02:34', 'Available'),
(69, '317734510_669839951463950_475695620104786064_n.jpg', 'CARBON WRAP', 200, 10, 'Materials', '2022-12-17 12:57:35', 'Available'),
(70, '317817104_717800236594624_2481242579988808019_n.jpg', 'SILVER WRAP', 200, 10, 'Materials', '2022-12-17 12:57:56', 'Available'),
(71, '317622386_697764101750791_6846100689376490875_n.jpg', 'ARROW', 20, 10, 'Stickers', '2022-12-17 12:59:07', 'Available'),
(72, '317905270_1072044517526434_7613848791914141712_n.jpg', 'PLATE', 200, 10, 'Materials', '2022-12-17 12:59:59', 'Available'),
(73, '318081917_1175765639986200_8393670962064059493_n.jpg', 'TAPE', 20, 5, 'Materials', '2022-12-17 13:00:21', 'Available'),
(74, '318174872_6132620153424128_7851483035883338160_n.jpg', 'GREEN WRAP', 200, 5, 'Materials', '2022-12-17 13:00:42', 'Available'),
(75, '318285541_868564634145940_547498653271519090_n.jpg', 'BLUE WRAP', 200, 5, 'Materials', '2022-12-17 13:01:05', 'Available'),
(76, '318291870_1319403255561088_4332972954647928162_n.jpg', 'DARK GREEN WRAP', 200, 5, 'Materials', '2022-12-17 13:01:26', 'Available'),
(77, '318359347_654214449739943_6992151778393281906_n.jpg', 'SILVER WRAP 2', 200, 5, 'Materials', '2022-12-17 13:02:28', 'Available'),
(78, '318361297_522563273224074_5462613241574461822_n.jpg', 'LIGHT BLUE', 200, 10, 'Materials', '2022-12-17 13:02:56', 'Available'),
(79, '318373143_541720000880009_3606032189556751043_n.jpg', 'CHROME COLOR', 200, 5, 'Materials', '2022-12-17 13:03:53', 'Available'),
(80, '318421392_683567330092264_2693911548530780301_n.jpg', 'WHITE', 200, 5, 'Materials', '2022-12-17 13:04:12', 'Available'),
(81, '317709498_5472159252892489_7891741831715654_n.jpg', 'HEAD', 20, 10, 'Stickers', '2022-12-17 13:05:26', 'Available'),
(82, '317718793_1292824878166953_1288866209078409162_n.jpg', 'DIARY NI PAPS', 20, 10, 'Stickers', '2022-12-17 13:25:05', 'Available'),
(83, '317741456_483057977265464_3928132800673153281_n.jpg', 'JRP', 20, 10, 'Stickers', '2022-12-17 13:25:25', 'Available'),
(84, '317814568_388524233463834_3465495384634534929_n.jpg', 'DK RACING', 20, 10, 'Stickers', '2022-12-17 13:25:50', 'Available'),
(85, '317831915_1265055284067137_5828192010331717587_n.jpg', 'SKULL', 20, 10, 'Stickers', '2022-12-17 13:26:08', 'Available'),
(86, '317854264_632703588647242_4024855050316725167_n.jpg', 'BOYZA THAILAND', 20, 10, 'Stickers', '2022-12-17 13:26:58', 'Available'),
(87, '317903354_2472732579547230_4305194785556985933_n.jpg', 'HELLO KITTY', 20, 10, 'Stickers', '2022-12-17 13:27:34', 'Available'),
(88, '317907573_1275326113322830_8785915066048314661_n.jpg', 'KOBE', 20, 10, 'Stickers', '2022-12-17 13:27:56', 'Available'),
(89, '317911576_682655043417020_6291641607554385403_n.jpg', 'CHACKS TO GO', 20, 10, 'Stickers', '2022-12-17 13:28:43', 'Available');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_request`
--
ALTER TABLE `customer_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=275;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
