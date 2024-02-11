-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 17, 2021 at 12:45 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crime_reporting`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` varchar(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `UserName`, `Password`) VALUES
('1', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `police_table`
--

CREATE TABLE `police_table` (
  `id` int(10) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pstation` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pposition` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `iname` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `doj` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `report` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `police_table`
--

INSERT INTO `police_table` (`id`, `pname`, `pstation`, `area`, `city`, `pposition`, `contact`, `iname`, `image`, `doj`, `description`, `password`, `status`, `report`) VALUES
(1, 'mickey', 'S1', 'market', 'trichy', 'SI', '100', 'mickey', 't3.jpg', '2000-03-18', 'hhhhd', '1234', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user_crime`
--

CREATE TABLE `user_crime` (
  `id` int(10) NOT NULL,
  `user` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date_fo_crime` varchar(100) NOT NULL,
  `time_of_crime` varchar(100) NOT NULL,
  `uaddress` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `crime_type` varchar(100) NOT NULL,
  `crime_location` varchar(100) NOT NULL,
  `details` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `report` varchar(100) NOT NULL,
  `cdate` varchar(100) NOT NULL,
  `report1` varchar(100) NOT NULL,
  `accust` varchar(100) NOT NULL,
  `complete_status` varchar(100) NOT NULL,
  `police_name` varchar(100) NOT NULL,
  `taken_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_crime`
--

INSERT INTO `user_crime` (`id`, `user`, `fname`, `lname`, `gender`, `date_fo_crime`, `time_of_crime`, `uaddress`, `city`, `contact`, `email`, `crime_type`, `crime_location`, `details`, `status`, `report`, `cdate`, `report1`, `accust`, `complete_status`, `police_name`, `taken_date`) VALUES
(1, 'arunextazee@gmail.com', 'arun', 'raj', 'Male', '2019-10-15', '13:00', 'cantonment', 'trichy', '9876543210', 'arunextazee@gmail.com', 'theft', 'trichy', 'one person theft my mobile', '4', '0', '2019-10-01', '0', '0', '0', '0', '0'),
(2, 'jack@gmail.com', 'jack', 'son', 'Male', '2021-02-11', '13:08', 'market,trichy', 'trichy', '9876543210', 'jack@gmail.com', 'murder', 'market', 'incident of crime details', '1', '0', '2021-02-13', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `Id` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `DateOfBirth` varchar(100) NOT NULL,
  `MobileNumber` varchar(100) NOT NULL,
  `EmailId` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`Id`, `Name`, `Gender`, `DateOfBirth`, `MobileNumber`, `EmailId`, `Address`, `Password`, `Status`) VALUES
(1, 'arun', 'Male', '2019-09-11', '0987654321', 'arunextazee@gmail.com', 'trichy', '123', '0'),
(2, 'jack', 'Male', '2021-02-18', '9876543212', 'jack@gmail.com', 'thillai nagar, trichy', '1234', '0'),
(3, 'cherry', 'Male', '2021-02-10', '9876543212', 'cherry', 'thillai nagar, trichy', '1234', '0');
