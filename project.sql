-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2019 at 07:52 AM
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
(3, '15-03056', 'Lance Matthew', 'Refugio', 'Dungca', 'Male', 'BS in Computer Science', 'College of Information Computer Technology', 'Taguig City University (Client)', 'What is your fathers name?', 'gary', 'client', 'client', 'CLIENT', 'ACTIVE'),
(4, '15-03055', '1231', '123', '123', 'Male', 'BS in Computer Science', 'College of Information Computer Technology', 'Taguig City University (Client)', 'What is your favorite movie?', '123', '123', '123', 'CLIENT', 'ACTIVE'),
(5, '16-45641-T', 'try', 'try', 'try', 'Female', 'BS in Computer Science', 'College of Information Computer Technology', 'Taguig City University (Client)', 'What is your favorite movie?', 'qwe', 'qwe', 'qwe', 'CLIENT', 'ACTIVE'),
(6, '12-45678', 'try', 'try', 'try', 'Female', 'BS in Computer Science', 'College of Information Computer Technology', 'Taguig City University (Client)', 'What is your favorite movie?', 'qwe', 'qwert', 'qwert', 'CLIENT', 'ACTIVE'),
(7, '12-45678-T', 'try', 'tryt', 'try', 'Female', 'BS in Computer Science', 'College of Information Computer Technology', 'Taguig City University (Client)', 'What is your favorite movie?', 'gary', 'zxcvbn', 'zxcvbn', 'CLIENT', 'ACTIVE'),
(8, '12-45674-t', 'tyr', 'tyr', 'tyr', 'Female', 'BS in Computer Science', 'College of Information Computer Technology', 'Taguig City University (Client)', 'What is your pet name?', 'iron man', 'rtyuio', 'fghjkl', 'CLIENT', 'ACTIVE'),
(9, '12-45670-T', 'try', 'tyu', 'tui', 'Female', 'BS in Computer Science', 'College of Information Computer Technology', 'Taguig City University (Client)', 'What is your mothers name?', 'kjsdfkawgfkgsd', 'dshgfawk', 'ldfghiualweur', 'CLIENT', 'ACTIVE'),
(10, '16-00384-T', 'Michael', 'Nojor', 'Balibrea', 'Male', 'BS in Computer Science', 'College of Information Computer Technology', 'Taguig City University (Client)', 'What is your favorite number?', '1234', '', 'khel', 'CLIENT', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `adminaccount`
--

CREATE TABLE `adminaccount` (
  `adminid` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `recoveryquestion` varchar(100) NOT NULL,
  `recoveryanswer` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `userlevel` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminaccount`
--

INSERT INTO `adminaccount` (`adminid`, `firstname`, `middlename`, `lastname`, `gender`, `recoveryquestion`, `recoveryanswer`, `password`, `userlevel`, `status`) VALUES
('ADM-01', 'Matthew', 'Refugio', 'Dungca', 'Male', 'What is your favorite movie?', 'Ironman', 'admin1234', 'admin', 'ACTIVE'),
('ADM-02', 'Jas', 'Percival', 'Mamanta', 'Male', 'What is your favorite movie?', '1234', '123123123', 'ADMINISTRATOR', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `documentid` int(10) NOT NULL,
  `documenttitle` varchar(300) NOT NULL,
  `author1` varchar(100) NOT NULL,
  `author2` varchar(100) NOT NULL,
  `author3` varchar(100) NOT NULL,
  `author4` varchar(100) NOT NULL,
  `author5` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryid` varchar(50) NOT NULL,
  `categoryname` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `id` int(10) NOT NULL,
  `collegename` varchar(100) NOT NULL,
  `collegecode` varchar(10) NOT NULL,
  `collegephoto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`id`, `collegename`, `collegecode`, `collegephoto`) VALUES
(1, 'College of Information and Communication Technology', 'CICT', ''),
(2, 'College of Business Management', 'CBM', ''),
(3, 'College of Arts & Science', 'CAS', ''),
(4, 'College of Education', 'COE', ''),
(5, 'College of Engineering and Technology', 'CET', ''),
(6, 'College of Criminal Justice', 'CCJ', ''),
(7, 'College of Hospitality and Tourism Management', 'CHTM', ''),
(8, 'Bachelor of Secondary Education Major in English', 'BS-ENGLISH', '');

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
(3, 'BS in Computer Science', 'BSCS', 'College of Information and Communication Technology'),
(4, 'Bachelor of Elementary Education', 'BEE', 'College of Education'),
(5, 'BS in Secondary Education Major in English', 'BS-English', 'College of Education'),
(6, 'BS in Secondary Education Major in Mathematics', 'BS-Math', 'College of Education'),
(7, 'BS in Secondary Education Major in Physical Education', 'BSE-PE', 'College of Education'),
(8, 'BS in Secondary Education in Science', 'BS-Science', 'College of Education'),
(9, 'BS in Business Administration Major in Marketing Management', 'BSBM-MM', 'College of Business Management'),
(10, 'BS in Business Management', 'BSBM', 'College of Business Management'),
(11, 'BS in Enteprenurial Management', 'BSEM', 'College of Business Management'),
(12, 'BS in Office Administration', 'BSOA', 'College of Business Management'),
(13, 'BS in Office Management', 'BSOM', 'College of Business Management'),
(14, 'BS in Public Administration', 'BSPA', 'College of Business Management'),
(15, 'BS in Criminology', 'BSCrim', 'College of Criminal Justice'),
(16, 'BS in Psychology', 'BSPsych', 'College of Arts & Science'),
(17, 'BS in Social Work', 'BSSocialWo', 'College of Arts & Science'),
(18, 'BS in Civil Engineering', 'BSCE', 'College of Engineering and Technology'),
(19, 'BS in Industrial Engineering', 'BSIE', 'College of Engineering and Technology'),
(20, 'BS in Mechanical Engineering', 'BSME', 'College of Engineering and Technology'),
(21, 'BS in Hotel and Restaurant Management', 'BS-HRM', 'College of Hospitality and Tourism Management'),
(22, 'BS in Tourism Management', 'BSTM', 'College of Hospitality and Tourism Management'),
(23, 'BS in Travel Management', 'BSTrM', 'College of Hospitality and Tourism Management');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `ID` int(11) NOT NULL,
  `documenttitle` varchar(300) NOT NULL,
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

INSERT INTO `document` (`ID`, `documenttitle`, `course`, `department`, `project_type`, `description`, `file`, `date_uploaded`) VALUES
(5, '', 'BS in Computer Science', 'College of Information and Communication Technology', 'Thesis', 'Android', '5d940843d08642.99553605.pdf', '2019-10-02'),
(6, '', 'BS in Business Management', 'College of Business Management', 'Feasibility Study', 'Feasib Desc', '5d9967335de991.27952825.pdf', '2019-10-06'),
(7, '', 'BS in Public Administration', 'College of Arts & Science', 'Research', 'Reasearch', '5d99682953d064.12015884.pdf', '2019-10-06'),
(8, '', 'BS in Hotel and Restaurant Management', 'College of Hotel Tourism Management', 'OJT', 'OJT Details', '5d99689a69aa04.66354521.pdf', '2019-10-06'),
(9, '', 'BS in Civil Engineering', 'College of Techonology & Engineering', 'Research', 'Desc', '5d996916d59690.10787876.pdf', '2019-10-06'),
(10, '', 'BS in Education', 'College of Education', 'OJT', 'OJT', '5d996c4b897164.62641197.pdf', '2019-10-06'),
(11, '', 'BS in Criminology', 'College of Criminal Justice', 'OJT', 'OJT', '5d996c8c46aa20.23733103.pdf', '2019-10-06'),
(12, '', 'BS in Computer Science', 'College of Information and Communication Technology', 'Thesis', 'Thesis Description', '5d9986143dede3.91188500.pdf', '2019-10-06');

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
(34, 'Lance Matthew', 'Refugio', 'Dungca', 'NEW REGISTERED USER', '1', 'SIGN UP', '2019-Oct-05'),
(35, 'Joanna Sean', 'Valiente', 'Gabriel', 'JUAN CRUZ - BS IN BUSINESS MANAGEMENT - PROJECT DOCUMENT', '1', 'VVBMT0FE', '2019-Oct-06'),
(36, 'Joanna Sean', 'Valiente', 'Gabriel', 'JUAN CRUZ - PROJECT DETAILS FROM CBM HAS CHANGED', '1', 'VVBEQVRF', '2019-Oct-06'),
(37, 'Joanna Sean', 'Valiente', 'Gabriel', 'JOANNA DELA CRUZ - BS IN PUBLIC ADMINISTRATION - PROJECT DOCUMENT', '1', 'VVBMT0FE', '2019-Oct-06'),
(38, 'Joanna Sean', 'Valiente', 'Gabriel', 'NIKO MESA - BS IN HOTEL AND RESTAURANT MANAGEMENT - PROJECT DOCUMENT', '1', 'VVBMT0FE', '2019-Oct-06'),
(39, 'Joanna Sean', 'Valiente', 'Gabriel', 'FN2 LN2 - BS IN CIVIL ENGINEERING - PROJECT DOCUMENT', '1', 'VVBMT0FE', '2019-Oct-06'),
(40, 'Joanna Sean', 'Valiente', 'Gabriel', 'COE1 COE1 - BS IN EDUCATION - PROJECT DOCUMENT', '1', 'VVBMT0FE', '2019-Oct-06'),
(41, 'Joanna Sean', 'Valiente', 'Gabriel', 'CCJ1 CCJ1 - BS IN CRIMINOLOGY - PROJECT DOCUMENT', '1', 'VVBMT0FE', '2019-Oct-06'),
(42, 'Joanna Sean', 'Valiente', 'Gabriel', 'SEAN GABRIEL - BS IN COMPUTER SCIENCE - PROJECT DOCUMENT', '1', 'VVBMT0FE', '2019-Oct-06'),
(43, '1231', '123', '123', 'NEW REGISTERED USER', '1', 'SIGN UP', '2019-Oct-09'),
(44, 'try', 'try', 'try', 'NEW REGISTERED USER', '1', 'SIGN UP', '2019-Oct-09'),
(45, 'try', 'try', 'try', 'NEW REGISTERED USER', '1', 'SIGN UP', '2019-Oct-09'),
(46, 'try', 'try', 'try', 'NEW REGISTERED USER', '1', 'SIGN UP', '2019-Oct-09'),
(47, 'try', 'tryt', 'try', 'NEW REGISTERED USER', '1', 'SIGN UP', '2019-Oct-09'),
(48, 'tyr', 'tyr', 'tyr', 'NEW REGISTERED USER', '1', 'SIGN UP', '2019-Oct-09'),
(49, 'try', 'tyu', 'tui', 'NEW REGISTERED USER', '1', 'SIGN UP', '2019-Oct-09'),
(50, 'Michael', 'Nojor', 'Balibrea', 'NEW REGISTERED USER', '1', 'SIGN UP', '2019-Oct-11'),
(51, 'Michael', 'Nojor', 'Balibrea', 'NEW REGISTERED USER', '1', 'SIGN UP', '2019-Oct-11'),
(52, 'Michael', 'Nojor', 'Balibrea', 'NEW REGISTERED USER', '1', 'SIGN UP', '2019-Oct-11'),
(53, 'Michael', 'Nojor', 'Balibrea', 'NEW REGISTERED USER', '1', 'SIGN UP', '2019-Oct-11'),
(54, 'try', 'try', 'try', 'NEW REGISTERED USER', '1', 'SIGN UP', '2019-Oct-11'),
(55, 'Michael', 'Nojor', 'Balibrea', 'NEW REGISTERED USER', '1', 'SIGN UP', '2019-Oct-11'),
(56, 'Michael', 'Nojor', 'Balibrea', 'NEW REGISTERED USER', '1', 'SIGN UP', '2019-Oct-11'),
(57, 'try', 'try', 'try', 'NEW REGISTERED USER', '1', 'SIGN UP', '2019-Oct-11'),
(58, 'Michael', 'Nojor', 'Balibrea', 'NEW REGISTERED USER', '1', 'SIGN UP', '2019-Oct-11'),
(59, 'try', 'try', 'try', 'NEW REGISTERED USER', '1', 'SIGN UP', '2019-Oct-11'),
(60, 'try', 'try', 'try', 'NEW REGISTERED USER', '1', 'SIGN UP', '2019-Oct-11'),
(61, 'Michael', 'Nojor', 'Balibrea', 'NEW REGISTERED USER', '1', 'SIGN UP', '2019-Oct-11'),
(62, 'Michael', 'Nojor', 'Balibrea', 'NEW REGISTERED USER', '1', 'SIGN UP', '2019-Oct-11'),
(63, 'Michael', 'Nojor', 'Balibrea', 'NEW REGISTERED USER', '1', 'SIGN UP', '2019-Oct-11'),
(64, 'Michael', 'Nojor', 'Balibrea', 'NEW REGISTERED USER', '1', 'SIGN UP', '2019-Oct-11'),
(65, 'Michael', 'Nojor', 'Balibrea', 'NEW REGISTERED USER', '1', 'SIGN UP', '2019-Oct-11'),
(66, 'Michael', 'Nojor', 'Balibrea', 'NEW REGISTERED USER', '1', 'SIGN UP', '2019-Oct-11'),
(67, 'Michael', 'Nojor', 'Balibrea', 'NEW REGISTERED USER', '1', 'SIGN UP', '2019-Oct-11'),
(68, 'try', 'Nojor', 'Balibrea', 'NEW REGISTERED USER', '1', 'SIGN UP', '2019-Oct-11'),
(69, 'Michael', 'Nojor', 'Balibrea', 'NEW REGISTERED USER', '1', 'SIGN UP', '2019-Oct-11'),
(70, 'Michael', 'Nojor', 'Balibrea', 'NEW REGISTERED USER', '1', 'SIGN UP', '2019-Oct-11'),
(71, 'try', 'Nojor', 'Balibrea', 'NEW REGISTERED USER', '1', 'SIGN UP', '2019-Oct-11'),
(72, 'try', 'Nojor', 'Balibrea', 'NEW REGISTERED USER', '1', 'SIGN UP', '2019-Oct-11'),
(73, 'Michael', 'Nojor', 'Balibrea', 'NEW REGISTERED USER', '1', 'SIGN UP', '2019-Oct-11'),
(74, 'Michael', 'Nojor', 'Balibrea', 'NEW REGISTERED USER', '1', 'SIGN UP', '2019-Oct-11'),
(75, 'Michael', 'Nojor', 'Balibrea', 'NEW REGISTERED USER', '1', 'SIGN UP', '2019-Oct-11'),
(76, 'Michael', 'Nojor', 'Balibrea', 'QURNSU5JU1RSQVRPUiBJTkZPUk1BVElPTiBDSEFOR0VE', '1', 'VVBEQVRF', '2019-Nov-01'),
(77, 'Michael', 'Nojor', 'Balibrea', 'QURNSU5JU1RSQVRPUiBJTkZPUk1BVElPTiBDSEFOR0VE', '1', 'VVBEQVRF', '2019-Nov-01'),
(78, 'Khel', 'Nojor', 'Balibrea', 'QURNSU5JU1RSQVRPUiBJTkZPUk1BVElPTiBDSEFOR0VE', '1', 'VVBEQVRF', '2019-Nov-01'),
(79, 'Khel', 'Nojor', 'Balibrea', 'QURNSU5JU1RSQVRPUiBJTkZPUk1BVElPTiBDSEFOR0VE', '1', 'VVBEQVRF', '2019-Nov-01'),
(80, 'Michael', 'Nojor', 'Balibrea', 'QURNSU5JU1RSQVRPUiBJTkZPUk1BVElPTiBDSEFOR0VE', '1', 'VVBEQVRF', '2019-Nov-01'),
(81, 'Michael', 'Nojor', 'Balibrea', 'QURNSU5JU1RSQVRPUiBBQ0NPVU5UIENIQU5HRUQ=', '1', 'VVBEQVRF', '2019-Nov-01'),
(82, 'Michael', 'Nojor', 'Balibrea', 'QURNSU5JU1RSQVRPUiBJTkZPUk1BVElPTiBDSEFOR0VE', '1', 'VVBEQVRF', '2019-Nov-01'),
(83, 'Michael', 'Nojor', 'Balibrea', 'QURNSU5JU1RSQVRPUiBBQ0NPVU5UIENIQU5HRUQ=', '1', 'VVBEQVRF', '2019-Nov-01'),
(84, 'Michael', 'Nojor', 'Balibrea', 'QURNSU5JU1RSQVRPUiBBQ0NPVU5UIENIQU5HRUQ=', '1', 'VVBEQVRF', '2019-Nov-01'),
(85, 'Michael', 'Nojor', 'Balibrea', 'QURNSU5JU1RSQVRPUiBJTkZPUk1BVElPTiBDSEFOR0VE', '1', 'VVBEQVRF', '2019-Nov-01'),
(86, 'Matthew', 'Refugio', 'Dungca', 'QURNSU5JU1RSQVRPUiBJTkZPUk1BVElPTiBDSEFOR0VE', '1', 'VVBEQVRF', '2019-Nov-01'),
(87, 'Matthew', 'Refugio', 'Dungca', 'QURNSU5JU1RSQVRPUiBBQ0NPVU5UIENIQU5HRUQ=', '1', 'VVBEQVRF', '2019-Nov-01'),
(88, 'Jas', 'Percival', 'Mamanta', 'NEW REGISTERED ADMINISTRATOR', '1', 'ADDED', '2019-Nov-01'),
(89, 'Jas', 'Percival', 'Mamanta', 'NEW REGISTERED ADMINISTRATOR', '1', 'ADDED', '2019-Nov-01'),
(90, 'Jas', 'Percival', 'Mamanta', 'NEW REGISTERED ADMINISTRATOR', '1', 'ADDED', '2019-Nov-01'),
(91, 'Jas', 'Percival', 'Mamanta', 'NEW REGISTERED ADMINISTRATOR', '1', 'ADDED', '2019-Nov-01');

-- --------------------------------------------------------

--
-- Table structure for table `masterlist`
--

CREATE TABLE `masterlist` (
  `studentid` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `extname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masterlist`
--

INSERT INTO `masterlist` (`studentid`, `firstname`, `middlename`, `lastname`, `extname`) VALUES
('16-00384-T', 'Michael', 'Nojor', 'Balibrea', ''),
('16-00706', 'Joanna Sean', 'Valiente', 'Gabriel', '');

-- --------------------------------------------------------

--
-- Table structure for table `staffaccount`
--

CREATE TABLE `staffaccount` (
  `staffid` varchar(10) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `college` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `recoveryquestion` varchar(100) NOT NULL,
  `recoveryanswer` varchar(100) NOT NULL,
  `status` int(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentaccount`
--

CREATE TABLE `studentaccount` (
  `studentid` varchar(50) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `extname` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `course` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `recoveryquestion` varchar(100) NOT NULL,
  `recoveryanswer` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `userlevel` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentaccount`
--

INSERT INTO `studentaccount` (`studentid`, `firstname`, `middlename`, `lastname`, `extname`, `gender`, `course`, `department`, `recoveryquestion`, `recoveryanswer`, `password`, `userlevel`, `status`) VALUES
('16-00384-T', 'Michael', 'Nojor', 'Balibrea', '', 'Male', 'BS in Computer Science', 'College of Information and Communication Technology', 'What is your fathers name?', 'ruel', '123123123', 'student', 'ACTIVE'),
('16-00706', 'Joanna Sean', 'Valiente', 'Gabriel', '', '', 'BS in Computer Science', 'College of Information Computer Technology', 'Number', '1234', '12341234', 'student', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(11) NOT NULL,
  `documenttitle` varchar(300) NOT NULL,
  `course` varchar(250) NOT NULL,
  `department` varchar(250) NOT NULL,
  `project_type` varchar(250) NOT NULL,
  `description` varchar(500) NOT NULL,
  `file` varchar(250) NOT NULL,
  `dateuploaded` varchar(250) NOT NULL,
  `author1` varchar(100) NOT NULL,
  `author2` varchar(100) NOT NULL,
  `author3` varchar(100) NOT NULL,
  `author4` varchar(100) NOT NULL,
  `author5` varchar(100) NOT NULL,
  `panel1` varchar(100) NOT NULL,
  `panel2` varchar(100) NOT NULL,
  `panel3` varchar(100) NOT NULL,
  `panel4` varchar(100) NOT NULL,
  `panel5` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `documenttitle`, `course`, `department`, `project_type`, `description`, `file`, `dateuploaded`, `author1`, `author2`, `author3`, `author4`, `author5`, `panel1`, `panel2`, `panel3`, `panel4`, `panel5`) VALUES
(1, 'try', 'BS in Computer Science', 'College', 'OJT', 'dsghfghj', '5dbe74f3f21dc1.46997957.pdf', '2015-12-31', '1', 'N/A', 'N/A', 'N/A', 'N/A', '1', '2', 'N/A', 'N/A', 'N/A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `adminaccount`
--
ALTER TABLE `adminaccount`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`documentid`);

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
-- Indexes for table `masterlist`
--
ALTER TABLE `masterlist`
  ADD PRIMARY KEY (`studentid`);

--
-- Indexes for table `staffaccount`
--
ALTER TABLE `staffaccount`
  ADD PRIMARY KEY (`staffid`);

--
-- Indexes for table `studentaccount`
--
ALTER TABLE `studentaccount`
  ADD PRIMARY KEY (`studentid`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `documentid` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
