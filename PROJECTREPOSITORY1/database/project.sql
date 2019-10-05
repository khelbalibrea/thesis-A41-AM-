-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2019 at 06:40 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `ID` int(11) NOT NULL,
  `schoolid` varchar(50) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `middlename` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `course` varchar(250) NOT NULL,
  `department` varchar(250) NOT NULL,
  `employee` varchar(250) NOT NULL,
  `recoveryquestion` varchar(250) NOT NULL,
  `recoveryanswer` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `userlevel` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`ID`, `schoolid`, `firstname`, `middlename`, `lastname`, `gender`, `course`, `department`, `employee`, `recoveryquestion`, `recoveryanswer`, `username`, `password`, `userlevel`, `status`) VALUES
(1, '16-00706', 'Joanna Sean', 'Valiente', 'Gabriel', 'Female', 'BS in Computer Science', 'College of Information Computer Technology', 'Taguig City University (Administrator)', 'What is your favorite movie?', 'iron man', 'admin', 'admin', 'ADMINISTRATOR', 'ACTIVE'),
(2, '16-00384-T', 'Michael', 'Nojor', 'Balibrea', 'Male', 'BS in Computer Science', 'College of Information Computer Technology', 'Taguig City University (Administrator)', 'What is your favorite movie?', 'iron man', 'admin2', 'admin2', 'ADMINISTRATOR', 'ACTIVE'),
(3, '15-03056', 'Lance Matthew', 'Refugio', 'Dungca', 'Male', 'BS in Computer Science', 'College of Information Computer Technology', 'Taguig City University (Client)', 'What is your fathers name?', 'gary', 'client', 'client', 'CLIENT', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `id` int(10) NOT NULL,
  `collegename` varchar(100) NOT NULL,
  `collegecode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`id`, `collegename`, `collegecode`) VALUES
(1, 'College of Information and Communication Technology', 'CICT'),
(2, 'College of Business Management', 'CBM');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(10) NOT NULL,
  `coursename` varchar(100) NOT NULL,
  `coursecode` varchar(10) NOT NULL,
  `college` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `coursename`, `coursecode`, `college`) VALUES
(1, 'Course1', 'CRS', 'Course'),
(2, 'Course2', 'CRS2', 'College of Information and Communication Technology'),
(3, 'Bachelor of Science in Computer Science', 'BSCS', 'College of Information and Communication Technology');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `ID` int(11) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `middlename` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `course` varchar(250) NOT NULL,
  `department` varchar(250) NOT NULL,
  `project_type` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `file` varchar(250) NOT NULL,
  `date_uploaded` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`ID`, `firstname`, `middlename`, `lastname`, `course`, `department`, `project_type`, `description`, `file`, `date_uploaded`) VALUES
(5, 'John', 'Crusaldo', 'Cruz', 'BS in Computer Science', 'College of Information Computer Technology', 'Thesis', 'Android', '5d940843d08642.99553605.pdf', '2019-10-02');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `ID` int(11) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `middlename` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `operation` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`ID`, `firstname`, `middlename`, `lastname`, `description`, `status`, `operation`, `date`) VALUES
(24, 'de', 'de', 'de', 'NEW REGISTERED USER', '1', 'SIGN UP', '2019-Oct-02'),
(25, 'khel', 'khel', 'khel', 'NEW REGISTERED ADMINISTRATOR', '1', 'ADDED', '2019-Oct-02'),
(26, 'client1', 'cl', 'cleint', 'NEW REGISTERED USER', '1', 'SIGN UP', '2019-Oct-02'),
(27, 'de', 'de', 'de', 'JOHN CRUZ - BS IN COMPUTER SCIENCE - PROJECT DOCUMENT', '1', 'VVBMT0FE', '2019-Oct-02'),
(28, 'Admin', 'Midname', 'Last', 'QURNSU5JU1RSQVRPUiBJTkZPUk1BVElPTiBDSEFOR0VE', '1', 'VVBEQVRF', '2019-Oct-05'),
(29, 'Admin', 'Midname', 'User', 'QURNSU5JU1RSQVRPUiBJTkZPUk1BVElPTiBDSEFOR0VE', '1', 'VVBEQVRF', '2019-Oct-05'),
(30, 'Joanna Sean', 'Valiente', 'Gabriel', 'NEW REGISTERED USER', '1', 'SIGN UP', '2019-Oct-05'),
(31, 'Michael', 'Nojor', 'Balibrea', 'NEW REGISTERED USER', '1', 'SIGN UP', '2019-Oct-05'),
(32, 'Lance Matthew', 'Refugio', 'Dungca', 'NEW REGISTERED USER', '1', 'SIGN UP', '2019-Oct-05'),
(33, 'Lance Matthew', 'Refugio', 'Dungca', 'NEW REGISTERED USER', '1', 'SIGN UP', '2019-Oct-05'),
(34, 'Lance Matthew', 'Refugio', 'Dungca', 'NEW REGISTERED USER', '1', 'SIGN UP', '2019-Oct-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
