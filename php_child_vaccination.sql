-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 14, 2023 at 03:35 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `php_child_vaccination`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `admin_add_vaccination`
--

CREATE TABLE `admin_add_vaccination` (
  `id` int(50) NOT NULL,
  `vaccination_name` varchar(50) NOT NULL,
  `durage` varchar(50) NOT NULL,
  `month` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_add_vaccination`
--

INSERT INTO `admin_add_vaccination` (`id`, `vaccination_name`, `durage`, `month`) VALUES
(1, 'dolo vaccine', 'dolo', '01'),
(2, 'dart vaccine', 'dolo', '02'),
(3, 'corona vaccine', 'two', '04');

-- --------------------------------------------------------

--
-- Table structure for table `baby_details`
--

CREATE TABLE `baby_details` (
  `id` int(50) NOT NULL,
  `baby_name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `vaccine_name` varchar(50) NOT NULL,
  `month` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `baby_details`
--

INSERT INTO `baby_details` (`id`, `baby_name`, `gender`, `date`, `vaccine_name`, `month`, `username`) VALUES
(1, 'guru', 'male', '2023-03-10', 'dolo', '03', ''),
(2, 'guru', 'male', '2023-03-23', 'dolo', '03', 'guru');

-- --------------------------------------------------------

--
-- Table structure for table `parent_details`
--

CREATE TABLE `parent_details` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parent_details`
--

INSERT INTO `parent_details` (`id`, `name`, `contact`, `email`, `address`, `gender`, `username`, `password`) VALUES
(1, 'guru', '7894545455', 'guru@gmail.com', 'thillainagar', 'male', 'guru', '123');
