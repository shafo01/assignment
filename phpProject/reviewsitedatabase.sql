-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2016 at 09:32 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reviewsitedatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryId` int(11) NOT NULL,
  `categoryType` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryId`, `categoryType`) VALUES
(15, 'Make up'),
(16, 'Fragrance'),
(21, 'Eyecare'),
(22, '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productId` int(11) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `ingredients` varchar(100) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `countryOrigin` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productId`, `productName`, `ingredients`, `categoryId`, `countryOrigin`, `image`, `rating`) VALUES
(59, 'Dior Teint Foundation', 'Aqua (Water), Methyl Trimethicone, Isododecane, Alcohol, Dimethicone, PEG-9 Polydimethylsiloxyethyl ', 15, 'US', 'image15retrievefromhttpwww.sephora.comcountry_switch=ca.jpg', 0),
(60, 'ESTEE LAUDER Double Wear Stay in Place Makeup', 'Water, Cyclopentasiloxane, Trimethylsiloxysilicate, PEG/PPG-18/18 Dimethicone, Butylene Glycol, Trib', 15, 'US', 'image19retrievefromhttpwww.sephora.comcountry_switch=ca.jpg', 0),
(61, 'Dior Skin BB Cream', 'Aqua, methyl', 15, 'GB', 'image21retrievefromhttpwww.sephora.comcountry_switch=ca.jpg', 0),
(62, 'Tarte Amazon Clay Foundation', 'Amazonia Clay', 15, 'US', 'image20retrievefromhttpwww.sephora.comcountry_switch=ca.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `skintype`
--

CREATE TABLE `skintype` (
  `skinTypeId` int(11) NOT NULL,
  `skinType` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skintype`
--

INSERT INTO `skintype` (`skinTypeId`, `skinType`) VALUES
(1, 'OILY Type'),
(2, 'Acne'),
(10, 'Dry skin'),
(11, 'sensitive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `skintype`
--
ALTER TABLE `skintype`
  ADD PRIMARY KEY (`skinTypeId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `skintype`
--
ALTER TABLE `skintype`
  MODIFY `skinTypeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
