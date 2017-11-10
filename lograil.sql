-- phpMyAdmin SQL Dump
-- version 4.6.4deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 10, 2016 at 07:37 AM
-- Server version: 5.7.16-0ubuntu0.16.10.1
-- PHP Version: 7.0.12-1+deb.sury.org~yakkety+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lograil`
--
CREATE DATABASE IF NOT EXISTS `lograil` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lograil`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE IF NOT EXISTS `admin_table` (
  `User_ID` varchar(20) NOT NULL,
  `Password` varchar(15) NOT NULL,
  PRIMARY KEY (`User_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`User_ID`, `Password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `days_available`
--

CREATE TABLE IF NOT EXISTS `days_available` (
  `Train_ID` int(11) NOT NULL,
  `Available_days` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Train_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `days_available`
--

INSERT INTO `days_available` (`Train_ID`, `Available_days`) VALUES
(12685, '20161201');

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE IF NOT EXISTS `passenger` (
  `PNR` varchar(25) NOT NULL,
  `Seat_number` int(11) NOT NULL,
  `Passenger_name` varchar(30) NOT NULL,
  `Age` int(11) NOT NULL,
  `Gender` varchar(8) NOT NULL,
  `Train_ID` int(11) NOT NULL,
  PRIMARY KEY (`PNR`,`Seat_number`),
  KEY `Train_ID` (`Train_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`PNR`, `Seat_number`, `Passenger_name`, `Age`, `Gender`, `Train_ID`) VALUES
('29060', 19, 'Rahul Krishna', 21, 'male', 12485),
('30711', 48, 'Krishna', 21, 'male', 12485),
('62211', 5, 'Rahul Krishna', 21, 'male', 12485),
('75299', 19, 'Rahul Krishna', 21, 'male', 12485),
('80302', 17, 'John Doe', 21, 'male', 12485),
('99977', 54, 'Rahul Krishna', 21, 'male', 12485);

-- --------------------------------------------------------

--
-- Table structure for table `passenger_ticket`
--

CREATE TABLE IF NOT EXISTS `passenger_ticket` (
  `PNR` varchar(25) NOT NULL,
  `Source_ID` varchar(8) NOT NULL,
  `Destination_ID` varchar(8) NOT NULL,
  `Class_type` varchar(50) NOT NULL,
  `Reservation_status` varchar(25) NOT NULL,
  `Train_ID` int(11) NOT NULL,
  PRIMARY KEY (`PNR`),
  KEY `Train_ID` (`Train_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger_ticket`
--

INSERT INTO `passenger_ticket` (`PNR`, `Source_ID`, `Destination_ID`, `Class_type`, `Reservation_status`, `Train_ID`) VALUES
('45612345', '1', '2', 'sleeper', 'confirm', 12685);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `Train_ID` int(11) NOT NULL,
  `Available_Date` varchar(20) NOT NULL,
  `EmailID` varchar(30) NOT NULL,
  `PNR` varchar(20) NOT NULL,
  `Reservation_Date` text NOT NULL,
  `Reservation_Status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Train_ID`,`Available_Date`,`EmailID`,`PNR`),
  KEY `Train_ID` (`Train_ID`),
  KEY `Available_Date` (`Available_Date`),
  KEY `EmailID` (`EmailID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`Train_ID`, `Available_Date`, `EmailID`, `PNR`, `Reservation_Date`, `Reservation_Status`) VALUES
(12685, '20161201', 'rahul@krisambali.com', '45612345', '20161201', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE IF NOT EXISTS `route` (
  `Train_ID` int(11) NOT NULL,
  `Stop_number` int(11) NOT NULL,
  `Station_ID` varchar(8) NOT NULL,
  `Arrival_time` text NOT NULL,
  `Departure_time` text NOT NULL,
  `Source_distance` int(11) NOT NULL,
  PRIMARY KEY (`Train_ID`,`Stop_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`Train_ID`, `Stop_number`, `Station_ID`, `Arrival_time`, `Departure_time`, `Source_distance`) VALUES
(12685, 1, '1', '20:35', '20:40', 30),
(12685, 2, '2', '21:00', '21:15', 15),
(12790, 1, '4', '20:35', '20:40', 30);

-- --------------------------------------------------------

--
-- Table structure for table `route_has_station`
--

CREATE TABLE IF NOT EXISTS `route_has_station` (
  `Train_ID` int(11) NOT NULL,
  `Station_ID` varchar(20) NOT NULL,
  `Stop_number` int(11) NOT NULL,
  PRIMARY KEY (`Train_ID`,`Station_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE IF NOT EXISTS `station` (
  `Station_ID` int(11) NOT NULL,
  `Station_Name` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`Station_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`Station_ID`, `Station_Name`) VALUES
(1, 'CHN'),
(2, 'TVM'),
(3, 'MGR'),
(4, 'CLT'),
(6, 'KNH'),
(7, 'CHY');

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

CREATE TABLE IF NOT EXISTS `train` (
  `Train_ID` int(11) NOT NULL,
  `Train_name` varchar(50) NOT NULL,
  `Train_type` varchar(50) NOT NULL,
  `Source_stn` varchar(30) DEFAULT NULL,
  `Destination_stn` varchar(30) DEFAULT NULL,
  `Source_ID` int(11) DEFAULT NULL,
  `Destination_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`Train_ID`),
  KEY `Source_ID` (`Source_ID`),
  KEY `Destination_ID` (`Destination_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`Train_ID`, `Train_name`, `Train_type`, `Source_stn`, `Destination_stn`, `Source_ID`, `Destination_ID`) VALUES
(12485, 'Mangalore Express', 'Express', 'MGR', 'CHN', 3, 2),
(12685, 'Shathabdhi Express', 'Express', 'CHN', 'TVM', 1, 2),
(12790, 'Calicut Superfast', 'Superfast', 'CLT', 'TVM', 4, 2),
(33455, 'Guwahati Express', 'Express', 'MGR', 'CHN', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `train_class`
--

CREATE TABLE IF NOT EXISTS `train_class` (
  `Train_ID` int(11) NOT NULL,
  `Fare_Class1` int(11) NOT NULL,
  `Seat_Class1` int(11) NOT NULL,
  `Fare_Class2` int(11) NOT NULL,
  `Seat_Class2` int(11) NOT NULL,
  `Fare_Class3` int(11) NOT NULL,
  `Seat_Class3` int(11) NOT NULL,
  PRIMARY KEY (`Train_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `train_status`
--

CREATE TABLE IF NOT EXISTS `train_status` (
  `Train_ID` int(11) NOT NULL,
  `Available_Date` varchar(20) NOT NULL,
  `Booked_seats3` int(11) DEFAULT NULL,
  `Waiting_seats3` int(11) DEFAULT NULL,
  `Available_seats3` int(11) DEFAULT NULL,
  PRIMARY KEY (`Train_ID`,`Available_Date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train_status`
--

INSERT INTO `train_status` (`Train_ID`, `Available_Date`, `Booked_seats3`, `Waiting_seats3`, `Available_seats3`) VALUES
(12685, '20161201', 53, 0, 100),
(12685, '20161202', 10, 0, 100),
(12685, '20161203', 0, 0, 100),
(33455, '20161201', 20, 0, 100);

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE IF NOT EXISTS `user_table` (
  `EmailID` varchar(30) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `FullName` varchar(30) NOT NULL,
  `Gender` varchar(8) NOT NULL,
  `Mobile` varchar(14) NOT NULL,
  PRIMARY KEY (`EmailID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`EmailID`, `Password`, `FullName`, `Gender`, `Mobile`) VALUES
('hello@abc.com', 'pwdpwd', 'Hello', 'female', '9497897891'),
('rahul@krisambali.com', 'password', 'Rahul Krishna', 'male', '9003707891');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `passenger`
--
ALTER TABLE `passenger`
  ADD CONSTRAINT `passenger_ibfk_1` FOREIGN KEY (`Train_ID`) REFERENCES `train` (`Train_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `passenger_ticket`
--
ALTER TABLE `passenger_ticket`
  ADD CONSTRAINT `passenger_ticket_ibfk_1` FOREIGN KEY (`Train_ID`) REFERENCES `train` (`Train_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`Train_ID`,`Available_Date`) REFERENCES `train_status` (`Train_ID`, `Available_Date`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`EmailID`) REFERENCES `user_table` (`EmailID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `route`
--
ALTER TABLE `route`
  ADD CONSTRAINT `route_ibfk_1` FOREIGN KEY (`Train_ID`) REFERENCES `train` (`Train_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `train`
--
ALTER TABLE `train`
  ADD CONSTRAINT `train_ibfk_1` FOREIGN KEY (`Source_ID`) REFERENCES `station` (`Station_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `train_ibfk_2` FOREIGN KEY (`Destination_ID`) REFERENCES `station` (`Station_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `train_status`
--
ALTER TABLE `train_status`
  ADD CONSTRAINT `train_status_ibfk_1` FOREIGN KEY (`Train_ID`) REFERENCES `train` (`Train_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
