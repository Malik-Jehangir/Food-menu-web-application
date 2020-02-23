-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 30, 2017 at 11:34 AM
-- Server version: 5.5.54-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodonlinedeliveryplatform`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_contact`
--

CREATE TABLE `customer_contact` (
  `MessageID` int(10) NOT NULL,
  `Fname` text NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Mob` int(20) NOT NULL,
  `Msg` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer_contact`
--

INSERT INTO `customer_contact` (`MessageID`, `Fname`, `Email`, `Mob`, `Msg`) VALUES
(1, 'Malik', 'abc@abc.com', 33901923, 'Hello, can I have delivery next week'),
(2, 'hamza', 'mhamzaz18@gmail.com', 33223312, 'My previous order hasnt been delivered');

-- --------------------------------------------------------

--
-- Table structure for table `customer_signup`
--

CREATE TABLE `customer_signup` (
  `CusID` int(5) NOT NULL,
  `CusUname` text NOT NULL,
  `CusEmail` varchar(30) NOT NULL,
  `CusMob` int(20) NOT NULL,
  `CusTel` int(20) NOT NULL,
  `CusPass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer_signup`
--

INSERT INTO `customer_signup` (`CusID`, `CusUname`, `CusEmail`, `CusMob`, `CusTel`, `CusPass`) VALUES
(1, 'Jehangir', 'jehangir@jehangir.com', 33906010, 33901060, '123abc'),
(3, 'malik123', 'malik@malik.com', 39000191, 39000191, '456abc'),
(4, 'test123', 'test@test.com', 33901092, 33901092, '123xyz'),
(5, 'jehangir123', 'abc@abc.com', 33663366, 33663366, '123abc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_contact`
--
ALTER TABLE `customer_contact`
  ADD PRIMARY KEY (`MessageID`);

--
-- Indexes for table `customer_signup`
--
ALTER TABLE `customer_signup`
  ADD PRIMARY KEY (`CusID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_contact`
--
ALTER TABLE `customer_contact`
  MODIFY `MessageID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `customer_signup`
--
ALTER TABLE `customer_signup`
  MODIFY `CusID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
