-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 08:15 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `properties`
--

-- --------------------------------------------------------

--
-- Table structure for table `paymentnew`
--

CREATE TABLE `paymentnew` (
  `id` int(11) NOT NULL,
  `FullName` varchar(20) NOT NULL,
  `propertyName` varchar(20) NOT NULL,
  `EmailAddress` varchar(20) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Dateofbirthday` varchar(10) NOT NULL,
  `gender` char(1) NOT NULL,
  `pay` char(1) NOT NULL,
  `CardNumber` varchar(25) NOT NULL,
  `CardCVC` int(3) NOT NULL,
  `ExpMonth` varchar(20) NOT NULL,
  `ExpYear` int(4) NOT NULL,
  `Amount` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `PID` char(5) NOT NULL,
  `pType` varchar(20) NOT NULL,
  `price` bigint(20) NOT NULL,
  `availability` varchar(15) NOT NULL,
  `pName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`PID`, `pType`, `price`, `availability`, `pName`) VALUES
('P0001', 'Sales', 450000, 'unavailable', 'Heritance, Galle'),
('P0002', 'Rentals', 500000, 'available', 'Waterfall Residencies, Gampaha'),
('P0003', 'Rentals', 400000, 'available', 'Water Estate, Colombo'),
('P0004', 'Rentals', 300000, 'available', 'Scottish Island, Digana'),
('P0005', 'Rentals', 760000, 'available', 'Cinnamon residencies, Colombo'),
('P0006', 'Rentals', 200000, 'available', 'The Palace, Kegalle'),
('P0007', 'Rentals', 375000, 'available', 'Mill House, Colombo'),
('P0008', 'Rentals', 528000, 'available', 'Premium villas, Dalugama'),
('P0009', 'Lands', 750000, 'available', 'Land in Malabe'),
('P0010', 'Lands', 500000, 'available', 'Land in Kaduwela'),
('P0011', 'Lands', 430000, 'available', 'Land in Homagama'),
('P0012', 'Lands', 300000, 'available', 'Land in Kegalle'),
('P0013', 'Lands', 250000, 'available', 'Land in Rambukkana'),
('P0014', 'Lands', 950000, 'available', 'Land in Galle'),
('P0015', 'Lands', 650000, 'available', 'Land in Mathara'),
('P0016', 'Lands', 150000, 'available', 'Land in Piliyandala'),
('P0017', 'Sales', 105000000, 'available', 'Luxury apartment, Mount lavinia'),
('P0018', 'Sales', 95000000, 'available', 'EMPERROR 03, Colombo 3'),
('P0019', 'Sales', 45000000, 'available', 'Havelock city, Colombo'),
('P0020', 'Sales', 200000000, 'available', 'Super Luxury Villa, Kandy'),
('P0021', 'Sales', 60000000, 'available', 'Lincon House, Colombo'),
('P0022', 'Sales', 78000000, 'available', 'Star Life Residencies, Colombo 4'),
('P0023', 'Sales', 34000000, 'available', 'Super Luxury Villa, Galle'),
('P0024', 'Sales', 320000000, 'available', 'Cantebury Golf Villas');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `rid` int(11) NOT NULL,
  `cName` varchar(20) NOT NULL,
  `cEmail` varchar(30) NOT NULL,
  `review` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paymentnew`
--
ALTER TABLE `paymentnew`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`PID`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`rid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `paymentnew`
--
ALTER TABLE `paymentnew`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
