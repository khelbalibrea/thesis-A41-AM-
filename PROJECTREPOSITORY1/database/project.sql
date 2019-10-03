-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2019 at 04:36 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
(41, 'UmVuYXRvIA==', 'RGVIaXRh', 'TWlyYWxsZXM=', 'TWFsZQ==', 'Ti9B', 'Q29sbGVnZSBvZiBJbmZvcm1hdGlvbiBDb21wdXRlciBUZWNobm9sb2d5', 'VGFndWlnIENpdHkgVW5pdmVyc2l0eSAoQWRtaW5pc3RyYXRvcik=', 'V2hhdCBpcyB5b3VyIHBldCBuYW1lPw==', 'YnVkaW5n', 'c3RhZmY=', 'c3RhZmY=', 'U1RBRkY=', 'QUNUSVZF');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`ID`);

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
