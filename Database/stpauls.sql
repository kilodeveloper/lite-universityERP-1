-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 16, 2019 at 09:47 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stpauls`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@spu.ac.ke', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `attemptedunits`
--

CREATE TABLE `attemptedunits` (
  `id` int(200) NOT NULL,
  `unitname` varchar(20) NOT NULL,
  `unitcode` varchar(20) NOT NULL,
  `progress` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attemptedunits`
--

INSERT INTO `attemptedunits` (`id`, `unitname`, `unitcode`, `progress`) VALUES
(2, 'OOP', 'BCS2103', '100');

-- --------------------------------------------------------

--
-- Table structure for table `clearance`
--

CREATE TABLE `clearance` (
  `id` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `regno` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `studymode` varchar(200) NOT NULL,
  `course` varchar(200) NOT NULL,
  `phonenumber` varchar(200) NOT NULL,
  `postaddress` varchar(200) NOT NULL,
  `emailaddress` varchar(200) NOT NULL,
  `programme` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clearance`
--

INSERT INTO `clearance` (`id`, `name`, `regno`, `dob`, `studymode`, `course`, `phonenumber`, `postaddress`, `emailaddress`, `programme`) VALUES
(1, 'Martin M Mbithi', 'BSCMKS275517', '2019-03-13', 'Regular', 'Routing And Switching CCNA Module 4', '0704031263', '120 Kikima', 'martinmbithi@gmail.com', 'Certificate'),
(2, 'Martin  Mbithi', 'BCSMKS275517', '2019-03-28', 'Regular', 'Cisco CCNA', '0704031263', '120 Kikima', 'mail@martdev.info', 'Certificate'),
(3, 'Martin  Mbithi', 'BCSMKS275517', '2019-03-28', 'Regular', 'Cisco CCNA', '0704031263', '120 Kikima', 'mail@martdev.info', 'Certificate'),
(4, 'Mbithi Martin', 'BSCMKS275517', '2019-03-19', 'Regular', 'Bachelor Of Science In Computer Science', '+254 0737229776', '120 Kikima', 'mail@martdev.info', 'Bachelor');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `code` varchar(200) NOT NULL,
  `dept` varchar(200) NOT NULL,
  `faculty` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `code`, `dept`, `faculty`) VALUES
(1, 'Masters in Business Administration and Management', 'MBA', 'PostGraduate', 'Business'),
(2, 'Masters in Computer Science', 'MSC', 'PostGraduate', 'Computer Science'),
(3, 'Bachelor of Science In Computer Science', 'BCS', 'UnderGraduate', 'Computer Science'),
(4, 'Bachelor of Science In Social Sciences', 'BSS', 'UnderGraduate', 'Social Sciences'),
(5, 'Diploma in Computer Science', 'DCS', 'Diploma', 'Computer Science'),
(6, 'Certificate In Computer Science', 'CSC', 'Certificate', 'Computer Science'),
(7, 'Masters in Business Administration and Management', 'MBA', 'PostGraduate', 'Business '),
(8, 'Certificate In Business', 'CB', 'Certificate', 'Business');

-- --------------------------------------------------------

--
-- Table structure for table `ctforms`
--

CREATE TABLE `ctforms` (
  `name` varchar(200) NOT NULL,
  `regno` varchar(200) NOT NULL,
  `course` varchar(200) NOT NULL,
  `unit_1code` varchar(200) NOT NULL,
  `unit_2code` varchar(200) NOT NULL,
  `unit_3code` varchar(200) NOT NULL,
  `unit_4code` varchar(200) NOT NULL,
  `unit_5code` varchar(200) NOT NULL,
  `id` int(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ctforms`
--

INSERT INTO `ctforms` (`name`, `regno`, `course`, `unit_1code`, `unit_2code`, `unit_3code`, `unit_4code`, `unit_5code`, `id`, `status`) VALUES
('Martin M Mbithi', 'BSCMKS275517', 'Bachelor Of Science In Computer Science', 'BCS 2103 OOP1', 'BCS 2070 Discrete Structures 1', 'CSC 1210 Data Networks', 'CSC 1101 Basic Calculus', 'CSC 1234 Data Structures & Algorithms', 1, 'Approved'),
('Mbithi Martin', 'BSCMKS275517', 'Computer Science', 'CSC 1210 Database Systems', 'BCS 2070 Discrete Structures 1', 'CSC 2108 Priciples of Programming Languages', 'CSC 1101 Basic Calculus', 'CSC 3456 Linear Algebra', 2, 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `examcards`
--

CREATE TABLE `examcards` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `course` varchar(200) NOT NULL,
  `regno` varchar(200) NOT NULL,
  `studymode` varchar(200) NOT NULL,
  `unitname` text NOT NULL,
  `unitcode` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examcards`
--

INSERT INTO `examcards` (`id`, `name`, `course`, `regno`, `studymode`, `unitname`, `unitcode`) VALUES
(1, 'Martin Mbithi Nzilani', 'Bachelor of Science in Computer Science', 'BSCMKS275517', 'Regular', 'Mobile Computing,\r\nObject Oriented Programming,\r\nNumerical Analysis,\r\nAdvanced Databases,\r\nIT & Society,\r\n\r\n', 'BCS 2103,\r\nBCS 2450,\r\nBCS 3320,\r\nCSC 2345,\r\nCSC 1123');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `hod` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `hod`, `description`) VALUES
(1, 'Computer Science', 'Mr Mart', 'Computer Science Related Courses');

-- --------------------------------------------------------

--
-- Table structure for table `facultyfunds`
--

CREATE TABLE `facultyfunds` (
  `id` int(100) NOT NULL,
  `name` varchar(20000) NOT NULL,
  `funds` varchar(20000) NOT NULL,
  `budget` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facultyfunds`
--

INSERT INTO `facultyfunds` (`id`, `name`, `funds`, `budget`) VALUES
(2, 'Computer Science', 'Kes 100,000', 'Kes 120,000');

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE `fee` (
  `id` int(200) NOT NULL,
  `name` varchar(2000) NOT NULL,
  `regno` varchar(20000) NOT NULL,
  `course` mediumtext NOT NULL,
  `totalbilled` mediumtext NOT NULL,
  `totalpaid` mediumtext NOT NULL,
  `balance` mediumtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fee`
--

INSERT INTO `fee` (`id`, `name`, `regno`, `course`, `totalbilled`, `totalpaid`, `balance`, `date`) VALUES
(1, 'Martin M Mbithi', 'BSCMKS275517', 'Computer Science', '120,000.00', '100,000.00', '20,000.00', '2019-03-03 01:07:34');

-- --------------------------------------------------------

--
-- Table structure for table `finance`
--

CREATE TABLE `finance` (
  `id` int(100) NOT NULL,
  `name` varchar(120) NOT NULL,
  `username` varchar(110) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finance`
--

INSERT INTO `finance` (`id`, `name`, `username`, `password`) VALUES
(1, 'Spu Accountant', 'finance@spu.ac.ke', 'demo');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `id` int(250) NOT NULL,
  `sender` varchar(2000) NOT NULL,
  `content` text NOT NULL,
  `time` timestamp(4) NOT NULL DEFAULT CURRENT_TIMESTAMP(4) ON UPDATE CURRENT_TIMESTAMP(4)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`id`, `sender`, `content`, `time`) VALUES
(1, 'Martin Mbithi Nzilani (BSCMKS275517)', 'Hey there', '0000-00-00 00:00:00.0000'),
(2, 'Demo(DEMOMKS27517', 'wassup admin', '2019-03-26 06:50:24.1834');

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `id` int(20) NOT NULL,
  `sender` varchar(20000) NOT NULL,
  `receiver` varchar(20000) NOT NULL,
  `cc` varchar(200) NOT NULL,
  `bcc` varchar(200) NOT NULL,
  `subject` text NOT NULL,
  `content` text NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`id`, `sender`, `receiver`, `cc`, `bcc`, `subject`, `content`, `date`) VALUES
(1, 'admin@spu.ac.ke', 'bscmks275517@spu.ac.ke', 'finance-mks@spu.ac.ke', 'registry-mks@spu.ac.ke', 'Fee Payment', 'Deadline for fee payment is on 25th feb ', '0000-00-00 00:00:00.000000'),
(2, 'admin@spu.ac.ke', 'bscmks275517@spu.ac.ke', 'registry@spu.ac.ke', 'finance@spu.ac.ke', 'Defferment', '', '2019-03-10 06:30:32.448233');

-- --------------------------------------------------------

--
-- Table structure for table `receipts`
--

CREATE TABLE `receipts` (
  `id` int(20) NOT NULL,
  `refnumber` varchar(200) NOT NULL,
  `datepaid` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `amount` varchar(50000) NOT NULL,
  `name` varchar(200) NOT NULL,
  `regno` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receipts`
--

INSERT INTO `receipts` (`id`, `refnumber`, `datepaid`, `amount`, `name`, `regno`) VALUES
(1, 'REF/123/9900-001', '2019-03-15 15:59:01.644217', '20000', 'Martin Mbithi', 'BSCMKS275517'),
(2, 'REF/123/9900-030', '2019-03-15 15:59:01.819294', '20000', 'Martin Mbithi', 'BSCMKS275517'),
(3, 'REF/123/9900-030', '2019-03-15 15:59:01.914234', '35,000.00', 'Martin Mbithi', 'BSCMKS275517'),
(4, 'CN0000184', '2019-03-15 16:02:12.352230', '20,000', 'Martin  Mbithi', 'BSCMKS275517');

-- --------------------------------------------------------

--
-- Table structure for table `registry`
--

CREATE TABLE `registry` (
  `id` int(20) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registry`
--

INSERT INTO `registry` (`id`, `fname`, `lname`, `username`, `password`) VALUES
(1, 'Martin ', 'Mbithi', 'registry-mks@spu.ac.ke', 'demo');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `regno` varchar(200) NOT NULL,
  `grade` varchar(200) NOT NULL,
  `marks` varchar(200) NOT NULL,
  `remarks` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `name`, `regno`, `grade`, `marks`, `remarks`) VALUES
(6, 'Martin Mbithi Nzilani', 'BSCMKS275517', 'A', '95', 'Distinction'),
(7, 'Demo', 'DEMOMKS275517', 'C', '50', 'Credit');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `staffno` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `staffno`, `department`, `password`, `email`, `phone`) VALUES
(2, 'Martin M Mbithi', 'STP-001', 'ICT', 'martinez@', 'martinezmbithi@gmail.com', '0704031263');

-- --------------------------------------------------------

--
-- Table structure for table `staffsalary`
--

CREATE TABLE `staffsalary` (
  `name` varchar(2000) NOT NULL,
  `staffno` varchar(20000) NOT NULL,
  `department` varchar(20000) NOT NULL,
  `salary` mediumtext NOT NULL,
  `id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffsalary`
--

INSERT INTO `staffsalary` (`name`, `staffno`, `department`, `salary`, `id`) VALUES
('Mbithi Martin', 'SPUMKS001', 'Computer Science', 'Kes 70,000', 2);

-- --------------------------------------------------------

--
-- Table structure for table `statement`
--

CREATE TABLE `statement` (
  `id` int(200) NOT NULL,
  `refnumber` varchar(200) NOT NULL,
  `posdate` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `description` text NOT NULL,
  `debitamt` varchar(2000) NOT NULL,
  `creditamt` varchar(200) NOT NULL,
  `balance` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statement`
--

INSERT INTO `statement` (`id`, `refnumber`, `posdate`, `description`, `debitamt`, `creditamt`, `balance`) VALUES
(2, 'IN119893', '2019-01-31 21:00:00.000000', 'Fees Invoice 2016-2017 / January - April Semester', '10,750.00', '0.00', '10750.00'),
(3, 'IN119893', '2019-02-03 21:00:00.000000', 'Fees Invoice 2016-2017 / January - April Semester', '10,750.00', '0.00', '10,750.00'),
(4, '1250-060970', '2019-02-11 21:00:00.000000', 'Receipt No 1250-060970', '0.00', '10,000.00', '10,000.00'),
(5, 'CN00001843', '2019-02-10 21:00:00.000000', 'Credit Note for Claimed Receipt 1250-055805', '0.00', '30,000.00', '30,000.00'),
(6, 'CN00001843', '2019-02-10 21:00:00.000000', 'Credit Note for Claimed Receipt 1250-053720', '0.00', '45,000.00', '45,000.00'),
(7, 'CN00001843', '2019-02-10 21:00:00.000000', 'Credit Note for Claimed Receipt 1250-055805', '0.00', '30,000.00', '30,000.00'),
(8, 'CN00001843', '2019-02-10 21:00:00.000000', 'Credit Note for Claimed Receipt 1250-053720', '0.00', '45,000.00', '45,000.00'),
(9, 'CN00001843', '2019-03-03 00:42:24.747023', 'Fees Invoice 2016-2017 / January - April Semester', '10750', '0', '10750'),
(10, 'demo', '2019-03-15 15:44:21.524923', 'demo', '20000', '2000', '0');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `regno` varchar(200) NOT NULL,
  `password` varchar(20) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `studymode` varchar(20) NOT NULL,
  `course` varchar(200) NOT NULL,
  `phonenumber` varchar(2002) NOT NULL,
  `postaddress` varchar(200) NOT NULL,
  `emailaddress` varchar(200) NOT NULL,
  `kcseindexno` varchar(200) NOT NULL,
  `totalbilled` varchar(200) NOT NULL,
  `totalpaid` varchar(200) NOT NULL,
  `balance` varchar(200) NOT NULL,
  `attemptedunits` varchar(200) NOT NULL,
  `unitstaking` varchar(200) NOT NULL,
  `totalunits` varchar(200) NOT NULL,
  `performance` varchar(20) NOT NULL,
  `grade` varchar(20) NOT NULL,
  `programme` varchar(120) NOT NULL,
  `semester` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `regno`, `password`, `dob`, `studymode`, `course`, `phonenumber`, `postaddress`, `emailaddress`, `kcseindexno`, `totalbilled`, `totalpaid`, `balance`, `attemptedunits`, `unitstaking`, `totalunits`, `performance`, `grade`, `programme`, `semester`) VALUES
(1, 'Martin Mbithi Nzilani', 'BSCMKS275517', 'MMN.2017', '1996-07-13', 'Regular', 'Bachelor Of Science In Computer Science', '+254740847563', '120  Kikima', 'mail@martdev.info', '323101002', '900000', '900000', '0', '9', '3', '56', '95', 'Distinction', '', ''),
(2, 'Martin  Mbithi', 'BSCMKS25517', 'MMN.2017', '2019-03-26', 'Regular', 'Cisco CCNA', '07040311263', '120 Kikima', 'martinmbithi@gmail.com', '09876', '', '', '', '', '', '', '', '', '', ''),
(3, 'Martin M Mbithi', 'BSCMKS275517', '', '', '', 'Computer Science', '', '', '', '', '120,000.00', '100,000.00', '20,000.00', '', '', '', '', '', '', ''),
(4, 'Martin Mbithi Nzilani', 'MSCMKS275517', 'MMN.2017', '2019-03-19', 'Weekend', 'Masters in Computer Science', '+254 0740847563', '120 Kikima', 'martinmbithi@gmail.com', '', '', '', '', '', '', '', '', '', 'Masters ', 'January-April'),
(5, 'martdevelopers', 'MBAMKS275517', 'MDV.2019', '2019-03-25', 'Distance Learning', 'Masters in Business Management', '+254 0737229776', '120 machakos', 'mail@martdev.info', '', '', '', '', '', '', '', '', '', 'Masters ', 'May-August'),
(10, 'Martin M Mbithi', 'BCSMKS275516', 'martinez@', '2019-03-25', 'Regular', 'Bachelor Of Science In Computer Science', '+254 0737229776', '120 Kikima', 'martinbithi@gmail.com', '', '', '', '', '', '', '', '', '', 'Bachelor', 'September-December'),
(11, 'Database Systems', 'ADCSMKS265567', 'DS.2019', '2019-03-26', 'Regular', 'Advance Diploma in Computer Science', '+254 0740847563', '122 Machakos', 'ds@gmail.com', '', '', '', '', '', '', '', '', '', 'Advance Diploma', 'January-April'),
(12, 'DDDD', 'ddd', '2344', '2019-04-02', 'Regular', 'Diploma in Computer Science', '+254 0737229776', '567', 'demo@demo.com', '', '', '', '', '', '', '', '', '', 'Diploma', 'January-April'),
(13, 'Martin M Mbithi', 'CSCMKS275517', 'MMK.567', '2019-03-26', 'Regular', 'Certificate In Business and IT', '+254 0740847563', '122 Machakos', 'martiezmbithi@gmail.com', '', '', '', '', '', '', '', '', '', 'Certificate', 'May-August'),
(14, 'Mbithi Martin', 'BSCMKS275517', 'martinez@', '2019-03-26', 'Regular', 'Bachelor Of Science In Computer Science', '+254 0737229776', '120 Kikima', 'mail@martdev.info', '', '', '', '', '', '', '', '', '', 'Bachelor', 'January-April'),
(15, 'Demo', 'DEMOMKS275517', 'MDV.2019', '2019-03-26', 'Weekend', 'Certificate In Business and IT', '+254 0737229776', '122 Machakos', 'martinezmbithi@gmail.com', '', '', '', '', '', '', '', '', '', 'Certificate', 'May-August'),
(16, 'Martin M Mbithi', 'BSCMKS275517', 'MMN.2017', '2019-03-26', 'school based', 'Cisco CCNA', '+254 0740847563', '122 Machakos', 'mail@martdev.info', '', '', '', '', '', '', '', '', '', 'Certificate', 'May-August'),
(17, 'Mbithi Martin', 'BSCMKS275517', 'MMN.2017', '2019-03-20', 'Regular', 'Certificate Of Science In Computer Science', '+254 0740847563', '120 Kikima', 'mail@martdev.info', '', '', '', '', '', '', '', '', '', 'Certificate', 'September-December'),
(18, 'Mbithi Martin', 'BSCMKS275516', 'MMN', '2019-03-25', 'Weekend', 'Certificate In Business and IT', '+254 0740847563', '130 Machakos', 'martinbithi@gmail.com', '', '', '', '', '', '', '', '', '', 'Certificate', 'January-April');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `id` int(20) NOT NULL,
  `unitname` varchar(200) NOT NULL,
  `unitcode` varchar(20) NOT NULL,
  `day` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `roomno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`id`, `unitname`, `unitcode`, `day`, `time`, `roomno`) VALUES
(1, 'Advanced Databases', 'BCS 3209', 'Monday', '8:30 am - 11:30 am', 'Room 18'),
(2, 'Numerical Analysis', 'BCS 2109', 'Tuesday', '8:30 am - 11:30 am', 'Room 18'),
(3, 'IT and Society', 'CSC 2345', 'Wednesday', '2:00 pm - 4:00 pm', 'Room 18'),
(4, 'Object Oriented Programming', 'BCS 2103', 'Monday', '12:00 noon - 2:00 pm', 'Lab 1'),
(5, ' Mobile Computing', 'BCS 3278', 'Monday', '2:00 pm- 4:00 pm', 'Room 5'),
(6, 'DEMO', 'CDCDEMO', 'Monday', '2.00pm - 4.00pm', 'Room 3');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id` int(110) NOT NULL,
  `code` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `faculty` varchar(200) NOT NULL,
  `studymode` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id`, `code`, `name`, `faculty`, `studymode`) VALUES
(5, 'CSC 3256', 'Discrete Structures 2', 'Computer Science', ''),
(6, 'CSC 3256', 'Discrete Structures 2', 'Computer Science', ''),
(7, 'BCS 2103', 'Object Oriented Programming 2', 'Computer Science', ''),
(8, 'Christian World View', 'UCC 101', '', 'Evening'),
(9, '1234', 'DDDD', '', 'Regular');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attemptedunits`
--
ALTER TABLE `attemptedunits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clearance`
--
ALTER TABLE `clearance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ctforms`
--
ALTER TABLE `ctforms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examcards`
--
ALTER TABLE `examcards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facultyfunds`
--
ALTER TABLE `facultyfunds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee`
--
ALTER TABLE `fee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finance`
--
ALTER TABLE `finance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receipts`
--
ALTER TABLE `receipts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registry`
--
ALTER TABLE `registry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffsalary`
--
ALTER TABLE `staffsalary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statement`
--
ALTER TABLE `statement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attemptedunits`
--
ALTER TABLE `attemptedunits`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `clearance`
--
ALTER TABLE `clearance`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ctforms`
--
ALTER TABLE `ctforms`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `examcards`
--
ALTER TABLE `examcards`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `facultyfunds`
--
ALTER TABLE `facultyfunds`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fee`
--
ALTER TABLE `fee`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `finance`
--
ALTER TABLE `finance`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `receipts`
--
ALTER TABLE `receipts`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `registry`
--
ALTER TABLE `registry`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staffsalary`
--
ALTER TABLE `staffsalary`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `statement`
--
ALTER TABLE `statement`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
