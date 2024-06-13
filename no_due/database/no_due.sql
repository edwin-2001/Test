-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 06, 2019 at 06:30 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `no_due`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `id` int(11) NOT NULL,
  `fees_for` varchar(20) NOT NULL,
  `fees` double NOT NULL,
  `rdate` varchar(15) NOT NULL,
  `details` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`id`, `fees_for`, `fees`, `rdate`, `details`) VALUES
(1, 'Hostel', 3000, '06-02-2019', 'Last date on 15-02-2019'),
(2, 'Library', 1000, '06-02-2019', 'Last date on 15-02-2019'),
(3, 'Semester', 5000, '06-02-2019', 'Last date on 20-02-2019'),
(4, 'Exam', 0, '06-02-2019', 'not now');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `regno` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `mobile2` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `course` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `st_hostel` int(11) NOT NULL,
  `st_library` int(11) NOT NULL,
  `st_office` int(11) NOT NULL,
  `rdate` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `regno`, `name`, `gender`, `dob`, `mobile`, `mobile2`, `email`, `address`, `dept`, `course`, `year`, `pass`, `st_hostel`, `st_library`, `st_office`, `rdate`) VALUES
(1, '101', 'Sugu', 'Male', '25-12-1995', 9150028012, 9976570006, 'sugu@gmail.com', 'ss', 'CS', 'BSc', '2016-2019', '1234', 2, 2, 2, '06-02-2019'),
(2, '102', 'Surya', 'Male', '12-02-1990', 9988776655, 9976570022, 'sugu@gmail.com', 'ddd', 'CS', 'BSc', '2016-2019', '1234', 0, 0, 0, '06-02-2019');
