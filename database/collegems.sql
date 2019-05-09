-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2019 at 07:50 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collegems`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_college`
--

CREATE TABLE `tbl_college` (
  `college_id` int(200) NOT NULL,
  `collegename` varchar(200) NOT NULL,
  `branch` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_college`
--

INSERT INTO `tbl_college` (`college_id`, `collegename`, `branch`) VALUES
(1, 'abc', 'bhopal'),
(2, 'abc', 'bhopal'),
(3, 'zxc', 'sohagpur'),
(4, 'bu', 'bhopal'),
(5, 'settings', 'cOLLEGE'),
(6, 'abc', 'bhopal'),
(7, 'abc', 'bhopal');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `role_id` int(255) NOT NULL,
  `rolename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`role_id`, `rolename`) VALUES
(1, 'Admin'),
(2, 'Co Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `id` int(200) NOT NULL,
  `studentname` varchar(200) NOT NULL,
  `college_id` int(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `course` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`id`, `studentname`, `college_id`, `gender`, `email`, `course`) VALUES
(2, 'luckyvyaparic', 2, 'Male', 'lucky@gmail.com', 'dsl'),
(3, 'luckyvyapari', 3, 'Male', 'lucky@gmail.com', 'information technology dsl'),
(4, 'luckyvyaparidfs', 4, 'Male', 'lucky@example.com', 'information technology dsl'),
(5, 'dsf', 4, 'Male', 'lucky@gmail.com', 'sda'),
(6, 'luckyvyapari2', 5, 'Male', 'lucky@gmail.com', 'dsl');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `college_id` int(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `role_id` int(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `confpwd` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `username`, `college_id`, `email`, `gender`, `role_id`, `password`, `confpwd`) VALUES
(1, 'luckyvyapari', 2, 'lucky@admin.com', 'Male', 1, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(12, 'lucky', 4, 'lucky@demo.com', 'Male', 2, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(17, 'luckyvyaparii', 2, 'lucky@coadmin.com', 'Male', 2, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(23, 'reeler', 0, 'lucky@ex.com', 'Male', 2, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_college`
--
ALTER TABLE `tbl_college`
  ADD PRIMARY KEY (`college_id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_college`
--
ALTER TABLE `tbl_college`
  MODIFY `college_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `role_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
