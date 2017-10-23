-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2017 at 03:27 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tuplive`
--

-- --------------------------------------------------------

--
-- Table structure for table `pending`
--

CREATE TABLE `pending` (
  `progname` varchar(100) NOT NULL,
  `starttime` time NOT NULL,
  `endtime` time NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `rep` varchar(10) NOT NULL,
  `length` int(100) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `tupmail` varchar(100) NOT NULL,
  `streamer` varchar(100) NOT NULL,
  `college` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pending`
--

INSERT INTO `pending` (`progname`, `starttime`, `endtime`, `startdate`, `enddate`, `rep`, `length`, `description`, `tupmail`, `streamer`, `college`) VALUES
('A good servant', '11:01:00', '11:16:00', '2017-10-23', '2017-10-23', 'Daily', 15, 'hehehehe', 'glenjester.ebina@tup.edu.ph', 'xFalzar', 'COS');

-- --------------------------------------------------------

--
-- Table structure for table `pendrep`
--

CREATE TABLE `pendrep` (
  `progname` varchar(100) NOT NULL,
  `starttime` time NOT NULL,
  `endtime` time NOT NULL,
  `repeat_every` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `repeats`
--

CREATE TABLE `repeats` (
  `prog_id` int(100) NOT NULL,
  `starttime` time NOT NULL,
  `endtime` time NOT NULL,
  `repeat_every` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `repeats`
--

INSERT INTO `repeats` (`prog_id`, `starttime`, `endtime`, `repeat_every`) VALUES
(1, '23:19:00', '00:19:00', 'Sunday'),
(1, '23:19:00', '00:19:00', 'Monday'),
(1, '23:19:00', '00:19:00', 'Tuesday'),
(1, '23:19:00', '00:19:00', 'Wednesday'),
(1, '23:19:00', '00:19:00', 'Thursday');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `prog_id` int(100) NOT NULL,
  `progname` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `starttime` time NOT NULL,
  `endtime` time NOT NULL,
  `length` int(60) NOT NULL,
  `rep` varchar(10) NOT NULL,
  `streamer` varchar(100) NOT NULL,
  `tupmail` varchar(100) NOT NULL,
  `college` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`prog_id`, `progname`, `description`, `startdate`, `enddate`, `starttime`, `endtime`, `length`, `rep`, `streamer`, `tupmail`, `college`) VALUES
(3, 'Sadness', 'Sadness', '2017-10-25', '2017-10-25', '07:03:00', '07:18:00', 15, 'Never', 'Dexy', 'glenjester.ebina@tup.edu.ph', 'CIT'),
(2, 'A walk to remember 2', 'Ahahahah', '2017-10-22', '2017-11-22', '14:50:00', '15:05:00', 15, 'Daily', 'xDaisuki', 'glenjester.ebina@tup.edu.ph', 'COS'),
(1, 'A walk to remember', 'A walk to remember 2', '2017-10-22', '2017-10-30', '23:19:00', '00:19:00', 60, 'Weekly', 'xFalzar', 'glenjester.ebina@tup.edu.ph', 'COS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pending`
--
ALTER TABLE `pending`
  ADD PRIMARY KEY (`progname`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`prog_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
