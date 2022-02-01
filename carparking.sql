-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2019 at 02:48 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carparking`
--

-- --------------------------------------------------------

--
-- Table structure for table `bike`
--

CREATE TABLE `bike` (
  `BikeSlot` varchar(5) NOT NULL,
  `Bslot` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bike`
--

INSERT INTO `bike` (`BikeSlot`, `Bslot`) VALUES
('B1', 0),
('B2', 0),
('B3', 0),
('B4', 0),
('B5', 0);

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `CarSlot` varchar(5) NOT NULL,
  `slot` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`CarSlot`, `slot`) VALUES
('C1', 0),
('C2', 0),
('C3', 0),
('C4', 0),
('C5', 0),
('C6', 0),
('C7', 0),
('C8', 0),
('C9', 0),
('C10', 0);

-- --------------------------------------------------------

--
-- Table structure for table `carlarge`
--

CREATE TABLE `carlarge` (
  `CarLSlot` varchar(5) NOT NULL,
  `Lslot` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carlarge`
--

INSERT INTO `carlarge` (`CarLSlot`, `Lslot`) VALUES
('CL1', 0),
('CL2', 0),
('CL3', 0),
('CL4', 0),
('CL5', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Type` text NOT NULL,
  `VehicleNumber` text NOT NULL,
  `ContactNumber` text NOT NULL,
  `PIN` int(4) NOT NULL,
  `ParkingSlot` varchar(5) NOT NULL,
  `PintTime` int(11) NOT NULL,
  `ParkingTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customerrecord`
--

CREATE TABLE `customerrecord` (
  `Type` varchar(10) NOT NULL,
  `VehicleNumber` varchar(10) NOT NULL,
  `ContactNumber` varchar(11) NOT NULL,
  `PIN` int(4) NOT NULL,
  `ParkingSlot` varchar(5) NOT NULL,
  `PintTime` int(11) NOT NULL,
  `ParkingTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `EintTime` int(11) NOT NULL,
  `ExitTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `Cost` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerrecord`
--

INSERT INTO `customerrecord` (`Type`, `VehicleNumber`, `ContactNumber`, `PIN`, `ParkingSlot`, `PintTime`, `ParkingTime`, `EintTime`, `ExitTime`, `Cost`) VALUES
('Bike', 'dh-m-123', '01600000000', 1234, 'B1', 1566124981, '2019-08-18 10:43:01', 1566125000, '2019-08-18 10:43:20', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customerrecord`
--
ALTER TABLE `customerrecord`
  ADD PRIMARY KEY (`PintTime`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
