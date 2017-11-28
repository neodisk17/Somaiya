-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2017 at 12:57 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `somaiya`
--

-- --------------------------------------------------------

--
-- Table structure for table `content_master`
--

CREATE TABLE `content_master` (
  `content_id` int(20) NOT NULL,
  `course_id` int(20) NOT NULL,
  `year_id` int(20) NOT NULL,
  `sem_id` int(20) NOT NULL,
  `subject_id` int(20) NOT NULL,
  `content_type` varchar(50) NOT NULL,
  `content_title` varchar(50) NOT NULL,
  `content_desc` varchar(5000) NOT NULL,
  `content_url` varchar(500) NOT NULL,
  `author` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course_master`
--

CREATE TABLE `course_master` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_master`
--

INSERT INTO `course_master` (`course_id`, `course_name`) VALUES
(23, 'ewrtyu'),
(24, 'ukhjft');

-- --------------------------------------------------------

--
-- Table structure for table `semester_master`
--

CREATE TABLE `semester_master` (
  `semester_id` int(11) NOT NULL,
  `course_id` varchar(50) NOT NULL,
  `year_id` varchar(50) NOT NULL,
  `semester_name` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester_master`
--

INSERT INTO `semester_master` (`semester_id`, `course_id`, `year_id`, `semester_name`) VALUES
(10, '23', '1', 'qwert'),
(11, '23', '1', 'qwer5t'),
(12, '23', '1', 'rytuio');

-- --------------------------------------------------------

--
-- Table structure for table `subject_master`
--

CREATE TABLE `subject_master` (
  `subject_id` int(11) NOT NULL,
  `course_id` varchar(50) NOT NULL,
  `year_id` varchar(50) NOT NULL,
  `semester_id` varchar(50) NOT NULL,
  `subject_name` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_master`
--

INSERT INTO `subject_master` (`subject_id`, `course_id`, `year_id`, `semester_id`, `subject_name`) VALUES
(1, '23', '1', '10', 'qwert'),
(2, '23', '1', '10', 'qwert'),
(3, '23', '1', '10', 'qwert'),
(4, '23', '1', '10', 'qwert'),
(5, '23', '1', '10', 'qwert'),
(6, '23', '1', '10', 'qwert'),
(7, '23', '1', '10', 'qwert'),
(8, '23', '1', '10', 'qwert'),
(9, '23', '1', '10', '[piouy'),
(10, 'none', 'none', 'none', 'esrty'),
(11, 'none', 'none', 'none', 'esrty');

-- --------------------------------------------------------

--
-- Table structure for table `year_master`
--

CREATE TABLE `year_master` (
  `year_id` int(11) NOT NULL,
  `course_id` varchar(500) NOT NULL,
  `year` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year_master`
--

INSERT INTO `year_master` (`year_id`, `course_id`, `year`) VALUES
(1, '23', 'rytui'),
(2, '23', 'sedrftgyhu'),
(3, '23', 'sedrftgyhu'),
(4, '23', 'rytuyi'),
(5, '23', 'ertyu'),
(6, '23', 'ijk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content_master`
--
ALTER TABLE `content_master`
  ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `course_master`
--
ALTER TABLE `course_master`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `semester_master`
--
ALTER TABLE `semester_master`
  ADD PRIMARY KEY (`semester_id`);

--
-- Indexes for table `subject_master`
--
ALTER TABLE `subject_master`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `year_master`
--
ALTER TABLE `year_master`
  ADD PRIMARY KEY (`year_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content_master`
--
ALTER TABLE `content_master`
  MODIFY `content_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `course_master`
--
ALTER TABLE `course_master`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `semester_master`
--
ALTER TABLE `semester_master`
  MODIFY `semester_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `subject_master`
--
ALTER TABLE `subject_master`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `year_master`
--
ALTER TABLE `year_master`
  MODIFY `year_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
