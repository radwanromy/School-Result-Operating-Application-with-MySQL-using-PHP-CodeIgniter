-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2022 at 11:35 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `academy_info`
--

CREATE TABLE `academy_info` (
  `acode` int(11) NOT NULL,
  `ayear` varchar(50) NOT NULL,
  `aclass` varchar(50) NOT NULL,
  `asection` varchar(50) NOT NULL,
  `aexam` varchar(50) NOT NULL,
  `agroup` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academy_info`
--

INSERT INTO `academy_info` (`acode`, `ayear`, `aclass`, `asection`, `aexam`, `agroup`) VALUES
(1, '2022(Jan)-2022(Dec)', 'IX', 'A-Science', 'Half-Yearly Exam', 'Science'),
(2, '2021(Jan)-2021(Dec)', 'IX', 'A-Science', 'Final-Yearly Exam', 'Science'),
(3, '2021(Jan)-2021(Dec)', 'IX', 'A-Science', 'Half-Yearly Exam', 'Science');

-- --------------------------------------------------------

--
-- Table structure for table `excon`
--

CREATE TABLE `excon` (
  `exconid` int(11) NOT NULL,
  `ayear` varchar(50) NOT NULL,
  `aclass` varchar(50) NOT NULL,
  `asection` varchar(50) NOT NULL,
  `aexam` varchar(50) NOT NULL,
  `agroup` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `subjective` int(11) NOT NULL,
  `subjective_pass` int(11) NOT NULL,
  `objective` int(11) NOT NULL,
  `objective_pass` int(11) NOT NULL,
  `practical` int(11) NOT NULL,
  `practical_pass` int(11) NOT NULL,
  `exmark` int(11) NOT NULL,
  `atten` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `excon`
--

INSERT INTO `excon` (`exconid`, `ayear`, `aclass`, `asection`, `aexam`, `agroup`, `sname`, `subjective`, `subjective_pass`, `objective`, `objective_pass`, `practical`, `practical_pass`, `exmark`, `atten`, `status`) VALUES
(2, '2021(Jan)-2021(Dec)', 'IX', 'A-Science', 'Final-Yearly Exam', 'Science', 'Bangla 2', 60, 20, 40, 15, 0, 0, 100, 'on', 'on'),
(6, '2022(Jan)-2022(Dec)', 'XII', 'A-Science', 'Unit Test', 'Science', 'Bangla 1', 60, 20, 40, 15, 0, 0, 100, 'on', 'on'),
(7, '2022(Jan)-2022(Dec)', 'XII', 'A-Science', 'Half Yearly Exam', 'Science', 'English 1', 100, 33, 0, 0, 0, 0, 100, 'on', 'on'),
(8, '2021(Jan)-2021(Dec)', 'XII', 'A-Science', 'Half Yearly Exam', 'Science', 'Mathematics', 50, 18, 25, 10, 25, 10, 100, 'on', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `studentid` int(11) NOT NULL,
  `stdroll` int(11) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(64) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `sname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `studentid`, `stdroll`, `address`, `email`, `mobile`, `sname`) VALUES
(15, 22020001, 1241006, 'DHAKA', 'halim@gmail.com', '+88952656', 'HALIMUZZAMAN ALIF'),
(19, 22020002, 1241005, 'Dhaka', 'ishtiaq@gmail.com', '+511687694', 'ISHTIAQ ELAHI KHAN');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `stdsl` int(11) NOT NULL,
  `stdid` int(11) DEFAULT NULL,
  `roll` int(11) NOT NULL,
  `stdname` varchar(50) NOT NULL,
  `tmark` int(11) DEFAULT NULL,
  `stdclass` varchar(50) NOT NULL,
  `stdsection` varchar(50) NOT NULL,
  `stdgroup` varchar(50) NOT NULL,
  `stdyear` varchar(50) NOT NULL,
  `stdsub` varchar(50) NOT NULL,
  `stdexam` varchar(50) NOT NULL,
  `subjective` int(11) DEFAULT NULL,
  `objective` int(11) DEFAULT NULL,
  `practical` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`stdsl`, `stdid`, `roll`, `stdname`, `tmark`, `stdclass`, `stdsection`, `stdgroup`, `stdyear`, `stdsub`, `stdexam`, `subjective`, `objective`, `practical`) VALUES
(2, 22020001, 1241006, 'HALIMUZZAMAN ALIF', 80, 'XII', 'A-Science', 'Science', '2022(Jan)-2022(Dec)', 'Bangla 1', 'Unit Test', 50, 30, 0),
(3, 22020002, 1241005, 'ISHTIAQ ELAHI KHAN', 60, 'XII', 'A-Science', 'Science', '2022(Jan)-2022(Dec)', 'Bangla 2', 'Half Yearly Exam', 40, 20, 0),
(5, 22020002, 1241005, 'ISHTIAQ ELAHI KHAN', 80, 'XII', 'A-Science', 'Science', '2022(Jan)-2022(Dec)', 'Bangla 1', 'Half Yearly Exam', 50, 30, 0),
(6, 22020002, 1241005, 'ISHTIAQ ELAHI KHAN', 90, 'XII', 'A-Science', 'Science', '2022(Jan)-2022(Dec)', 'Mathematics', 'Half Yearly Exam', 55, 35, 0);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `scode` int(11) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `subjective` int(11) NOT NULL,
  `subjective_pass` int(11) NOT NULL,
  `objective` int(11) NOT NULL,
  `objective_pass` int(11) NOT NULL,
  `practical` int(11) NOT NULL,
  `practical_pass` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`scode`, `sname`, `subjective`, `subjective_pass`, `objective`, `objective_pass`, `practical`, `practical_pass`) VALUES
(1, 'Bangla 1', 60, 20, 40, 15, 0, 0),
(2, 'Bangla 2', 60, 20, 40, 15, 0, 0),
(3, 'English 1', 100, 33, 0, 0, 0, 0),
(4, 'English 2', 100, 33, 0, 0, 0, 0),
(6, 'Physics', 50, 18, 25, 10, 25, 10),
(7, 'Math 1', 60, 20, 40, 15, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academy_info`
--
ALTER TABLE `academy_info`
  ADD PRIMARY KEY (`acode`);

--
-- Indexes for table `excon`
--
ALTER TABLE `excon`
  ADD PRIMARY KEY (`exconid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `studentid` (`studentid`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`stdsl`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`scode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academy_info`
--
ALTER TABLE `academy_info`
  MODIFY `acode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `excon`
--
ALTER TABLE `excon`
  MODIFY `exconid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `stdsl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `scode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
