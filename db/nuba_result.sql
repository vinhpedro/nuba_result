-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2021 at 08:27 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nuba_result`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(30) UNSIGNED NOT NULL,
  `username` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `name`, `password`, `date_time`) VALUES
(1, 'vinh', 'Elijah', '1111111111', '2021-04-03 14:50:06');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `file_no` int(30) UNSIGNED NOT NULL,
  `name` varchar(25) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `state` varchar(25) NOT NULL,
  `regno` varchar(25) NOT NULL,
  `department` varchar(25) NOT NULL,
  `section` varchar(30) NOT NULL,
  `password` varchar(25) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`file_no`, `name`, `gender`, `state`, `regno`, `department`, `section`, `password`, `date_time`) VALUES
(8, 'victor', 'male', 'kaduna', 'ncom1829082132', 'computer science', 'ND-1', '1111111111', '2021-04-03 08:40:50'),
(9, 'elijah', 'male', 'kaduna', 'ncom1829082', 'computer science', 'ND-2', '1111111111', '2021-04-03 08:41:53'),
(10, 'EMMANUEL', 'male', 'kaduna', 'ncom18290822', 'statistics', 'ND-2', '1111111111', '2021-04-09 06:25:53');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_allocate`
--

CREATE TABLE `tbl_allocate` (
  `id` int(30) UNSIGNED NOT NULL,
  `department` varchar(25) NOT NULL,
  `regno` varchar(25) NOT NULL,
  `course` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_allocate`
--

INSERT INTO `tbl_allocate` (`id`, `department`, `regno`, `course`) VALUES
(3, 'COMPUTER SCIENCE', 'NCOM1829082132', 'com121'),
(4, 'COMPUTER SCIENCE', 'NCOM1829082132', 'slt23232'),
(5, 'COMPUTER SCIENCE', 'NCOM1829082132', 'com565'),
(6, 'COMPUTER SCIENCE', 'NCOM1829082', 'com121'),
(7, 'COMPUTER SCIENCE', 'NCOM1829082', 'com565'),
(8, 'COMPUTER SCIENCE', 'NCOM1829082132', 'gls1213'),
(9, 'COMPUTER SCIENCE', 'NCOM1829082132', 'dsdfdfgf'),
(10, 'COMPUTER SCIENCE', 'NCOM1829082132', 'sta121');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courses`
--

CREATE TABLE `tbl_courses` (
  `id` int(30) UNSIGNED NOT NULL,
  `department` varchar(25) NOT NULL,
  `courses` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_courses`
--

INSERT INTO `tbl_courses` (`id`, `department`, `courses`) VALUES
(1, 'computer science', 'com121'),
(6, 'computer science', 'com121'),
(7, 'glass tech', 'gls1213'),
(8, 'computer science', 'com565'),
(9, 'slt', 'slt23232'),
(10, 'slt', 'dsdfdfgf'),
(11, 'statistics', 'sta121');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department`
--

CREATE TABLE `tbl_department` (
  `id` int(30) UNSIGNED NOT NULL,
  `department` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_department`
--

INSERT INTO `tbl_department` (`id`, `department`) VALUES
(1, 'computer science'),
(2, 'glass tech'),
(3, 'slt'),
(4, 'statistics');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_result`
--

CREATE TABLE `tbl_result` (
  `id` int(30) UNSIGNED NOT NULL,
  `regno` varchar(25) NOT NULL,
  `course` varchar(25) NOT NULL,
  `result` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_result`
--

INSERT INTO `tbl_result` (`id`, `regno`, `course`, `result`) VALUES
(13, 'ncom1829082', 'com121', '111'),
(14, 'ncom1829082', 'com565', '333'),
(15, 'ncom1829082132', 'com121', '111'),
(16, 'ncom1829082132', 'slt23232', '111'),
(17, 'ncom1829082132', 'com565', '444'),
(18, 'ncom1829082132', 'gls1213', '343'),
(19, 'ncom1829082132', 'dsdfdfgf', '3545'),
(20, 'ncom1829082132', 'sta121', '121');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`file_no`);

--
-- Indexes for table `tbl_allocate`
--
ALTER TABLE `tbl_allocate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_courses`
--
ALTER TABLE `tbl_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_department`
--
ALTER TABLE `tbl_department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_result`
--
ALTER TABLE `tbl_result`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(30) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `file_no` int(30) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_allocate`
--
ALTER TABLE `tbl_allocate`
  MODIFY `id` int(30) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_courses`
--
ALTER TABLE `tbl_courses`
  MODIFY `id` int(30) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_department`
--
ALTER TABLE `tbl_department`
  MODIFY `id` int(30) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_result`
--
ALTER TABLE `tbl_result`
  MODIFY `id` int(30) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
