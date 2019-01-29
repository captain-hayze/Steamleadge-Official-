-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2018 at 07:40 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reportapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `held`
--

CREATE TABLE `held` (
  `id` int(10) NOT NULL,
  `ThrustLead` text NOT NULL,
  `ThrustAssistant` text NOT NULL,
  `Date` date NOT NULL,
  `PartnerSChool` text NOT NULL,
  `Class` varchar(50) NOT NULL,
  `Program` varchar(100) NOT NULL,
  `Duration` int(3) NOT NULL,
  `Topic` text NOT NULL,
  `BehaviouralObjective` varchar(100) NOT NULL,
  `Remarks` varchar(500) NOT NULL,
  `Attendance` longtext NOT NULL,
  `TDD` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `held`
--

INSERT INTO `held` (`id`, `ThrustLead`, `ThrustAssistant`, `Date`, `PartnerSChool`, `Class`, `Program`, `Duration`, `Topic`, `BehaviouralObjective`, `Remarks`, `Attendance`, `TDD`) VALUES
(1, 'Peter Olu', 'Ibrahim Azeez', '2018-12-05', 'Sweet haven', 'SS1', 'PCC2', 50, 'Text', 'Text', 'Text', 'Text', ''),
(2, 'Ibrahim Azeez', 'Peter Olu', '2018-12-03', 'Sweet haven', 'classer', 'PCC2', 0, 'Texter', 'Bojo', 'The task was acheived', 'KKB', 'WeakPoor'),
(3, 'Ibrahim Azeez', 'Peter Olu', '2018-12-10', 'Sweet haven', 'ss2', '', 0, '', '', '', '', ''),
(4, 'Ibrahim Azeez', 'Peter Olu', '2018-12-10', 'Sweet haven', 'ss2', 'PCC2', 40, 'Text4', 'text6', 'Null7', 'longtext', 'PoorGood');

-- --------------------------------------------------------

--
-- Table structure for table `unheld`
--

CREATE TABLE `unheld` (
  `id` int(11) NOT NULL,
  `ThrustLead` text NOT NULL,
  `ThrustAssistant` text NOT NULL,
  `PartnerSchool` varchar(100) NOT NULL,
  `dateo` date NOT NULL,
  `class` varchar(20) NOT NULL,
  `reasons` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unheld`
--

INSERT INTO `unheld` (`id`, `ThrustLead`, `ThrustAssistant`, `PartnerSchool`, `dateo`, `class`, `reasons`) VALUES
(1, 'Azeez Ibrahim', 'Peter Olu', 'Sweet Haven', '2018-11-28', 'SS1', 'Power Outage'),
(2, 'Peter Olu', 'Ibrahim Azeez', 'Sweet Haven', '2018-11-29', 'Jss3', 'No space'),
(3, 'Peter Olu', 'Ibrahim Azeez', 'Sweet Haven', '2018-11-29', 'Jss3', 'No space'),
(4, 'Ibrahim Azeez', 'Peter Olu', 'Sweet Haven', '2018-12-05', 'SS1', 'Text'),
(5, 'Ibrahim Azeez', 'Peter Olu', 'Intercontinental College', '2018-12-11', 'SS1', 'Public holiday'),
(6, 'Peter Olu', 'Ibrahim Azeez', 'Intercontinental College', '2018-12-11', 'ss2', '');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `username`, `password`) VALUES
(1, 'azeezibrahim@steamledge.com', 'olamilekan'),
(2, 'peterolu@steamledge.com', 'olapade');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `held`
--
ALTER TABLE `held`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unheld`
--
ALTER TABLE `unheld`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `held`
--
ALTER TABLE `held`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `unheld`
--
ALTER TABLE `unheld`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
