-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2016 at 04:41 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `productreviewdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryId` int(11) NOT NULL,
  `categoryType` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `image` blob NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `productlog`
--

CREATE TABLE `productlog` (
  `logId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `productId` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `ingredient` varchar(100) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `images` varchar(50) DEFAULT NULL,
  `dateUpdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `productreview`
--

CREATE TABLE `productreview` (
  `reviewId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `reviewMessage` varchar(200) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profilelog`
--

CREATE TABLE `profilelog` (
  `logId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `country` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `skinType` varchar(50) DEFAULT NULL,
  `skinTone` varchar(50) DEFAULT NULL,
  `hairType` varchar(50) DEFAULT NULL,
  `hairColor` varchar(50) DEFAULT NULL,
  `dateUpdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `roleID` int(10) NOT NULL,
  `roleName` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`roleID`, `roleName`, `status`) VALUES
(1, 'Administrator', 1),
(2, 'registerUser', 1),
(3, 'guest', 1);

-- --------------------------------------------------------

--
-- Table structure for table `skintype`
--

CREATE TABLE `skintype` (
  `skinTypeId` int(11) NOT NULL,
  `skinType` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usercharacteristics`
--

CREATE TABLE `usercharacteristics` (
  `userId` int(11) NOT NULL,
  `skinTypeId` varchar(50) NOT NULL,
  `hairType` varchar(50) NOT NULL,
  `skinTone` varchar(50) NOT NULL,
  `skinProblem` varchar(100) NOT NULL,
  `eyeColor` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `loginId` int(11) NOT NULL,
  `roleID` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`loginId`, `roleID`, `userId`, `email`, `password`, `username`) VALUES
(2, 1, 0, 'Password_1', 'Password_1', 'shussain'),
(3, 1, 0, 'shafeezahussain@yahoo.com', 'Password_1', 'shussain'),
(4, 1, 0, 'shafeezahussain@yahoo.com', 'Password_1', 'shussain'),
(5, 1, 0, 'something@email.com', 'Password_1', 'user'),
(6, 1, 0, 'shafeezahussain@yahoo.com', 'Password_1', 'shussain'),
(7, 1, 0, 'shafeezahussain@yahoo.com', 'Password_1', 'Shafeeza'),
(8, 1, 0, 'shafeezahussain@yahoo.com', 'Password_1', 'Shafeza');

-- --------------------------------------------------------

--
-- Table structure for table `userprofile`
--

CREATE TABLE `userprofile` (
  `userId` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `ethnic` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `country` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `productlog`
--
ALTER TABLE `productlog`
  ADD PRIMARY KEY (`logId`);

--
-- Indexes for table `profilelog`
--
ALTER TABLE `profilelog`
  ADD PRIMARY KEY (`logId`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`roleID`),
  ADD UNIQUE KEY `roleID` (`roleID`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`loginId`);

--
-- Indexes for table `userprofile`
--
ALTER TABLE `userprofile`
  ADD UNIQUE KEY `userId` (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `loginId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `userprofile`
--
ALTER TABLE `userprofile`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
