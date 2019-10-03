-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2019 at 02:52 PM
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

INSERT INTO `account` (`ID`, `firstname`, `middlename`, `lastname`, `gender`, `course`, `department`, `employee`, `recoveryquestion`, `recoveryanswer`, `username`, `password`, `userlevel`, `status`) VALUES
(38, 'SGllZHk=', 'R2Fjb3N0YQ==', 'VWh1YWQ=', 'RmVtYWxl', 'Ti9B', 'Q29sbGVnZSBvZiBBcnRzICYgU2NpZW5jZQ==', 'VGFndWlnIENpdHkgVW5pdmVyc2l0eSAoQWRtaW5pc3RyYXRvcik=', 'V2hhdCBpcyB5b3VyIHBldCBuYW1lPw==', 'YnVkaW5n', 'c2FtcGxl', 'c2FtcGxl', 'QURNSU5JU1RSQVRPUg==', 'QUNUSVZF'),
(39, 'UmFzZGll', 'VHVyYWpp', 'S2FzaW0=', 'TWFsZQ==', 'Ti9B', 'Q29sbGVnZSBvZiBUZWNobm9sb2d5ICYgRW5naW5lZXJpbmc=', 'VGFndWlnIENpdHkgVW5pdmVyc2l0eSAoQWRtaW5pc3RyYXRvcik=', 'V2hhdCBpcyB5b3VyIG1vdGhlcnMgbmFtZT8=', 'TGluZGEgS2FzaW0=', 'YWRtaW4=', 'YWRtaW4=', 'QURNSU5JU1RSQVRPUg==', 'QUNUSVZF'),
(40, 'TGVlIEpvY2Vm', 'QmFsdGF6YXI=', 'Qm95bw==', 'TWFsZQ==', 'QlMgaW4gSW5mb3JtYXRpb24gU3lzdGVt', 'Q29sbGVnZSBvZiBJbmZvcm1hdGlvbiBDb21wdXRlciBUZWNobm9sb2d5', 'VGFndWlnIENpdHkgVW5pdmVyc2l0eSAoQ2xpZW50KQ==', 'V2hhdCBpcyB5b3VyIGZhdGhlcnMgbmFtZT8=', 'dGFydWI=', 'dGFydWI=', 'dGFydWI=', 'Q0xJRU5U', 'QUNUSVZF'),
(41, 'UmVuYXRvIA==', 'RGVIaXRh', 'TWlyYWxsZXM=', 'TWFsZQ==', 'Ti9B', 'Q29sbGVnZSBvZiBJbmZvcm1hdGlvbiBDb21wdXRlciBUZWNobm9sb2d5', 'VGFndWlnIENpdHkgVW5pdmVyc2l0eSAoQWRtaW5pc3RyYXRvcik=', 'V2hhdCBpcyB5b3VyIHBldCBuYW1lPw==', 'YnVkaW5n', 'c3RhZmY=', 'c3RhZmY=', 'U1RBRkY=', 'QUNUSVZF'),
(42, 'de', 'de', 'de', 'Male', 'BS in Computer Science', 'College of Information Computer Technology', 'Taguig City University (Administrator)', 'What is your favorite movie?', 'movie', 'user', '123', 'ADMINISTRATOR', 'ACTIVE'),
(43, 'khel', 'khel', 'khel', 'Male', 'N/A', 'College of Information Computer Technology', 'Taguig City University (Administrator)', 'What is your pet name?', 'lala', 'admin2', 'admin2', 'ADMINISTRATOR', 'ACTIVE'),
(44, 'client1', 'cl', 'cleint', 'Male', 'BS in Computer Science', 'College of Information Computer Technology', 'Taguig City University (Client)', 'What is your mothers name?', 'mama', 'client', 'client', 'CLIENT', 'ACTIVE');

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
(1, 'College of Information and Communication Technology', 'CICT');

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
(2, 'Course2', 'CRS2', 'College of Information and Communication Technology');

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
(27, 'de', 'de', 'de', 'JOHN CRUZ - BS IN COMPUTER SCIENCE - PROJECT DOCUMENT', '1', 'VVBMT0FE', '2019-Oct-02');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
