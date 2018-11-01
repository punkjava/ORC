-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2018 at 05:13 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orc_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admine_details`
--

CREATE TABLE `admine_details` (
  `Admin_id` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admine_details`
--

INSERT INTO `admine_details` (`Admin_id`, `password`) VALUES
('admin$1', 'Shreya@12');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `rollno` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` char(1) NOT NULL,
  `DOB` date NOT NULL,
  `course` varchar(255) NOT NULL,
  `flat_no` varchar(255) DEFAULT NULL,
  `area` varchar(255) NOT NULL,
  `society` varchar(255) DEFAULT NULL,
  `pin_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`rollno`, `first_name`, `middle_name`, `last_name`, `gender`, `DOB`, `course`, `flat_no`, `area`, `society`, `pin_code`) VALUES
(501652, 'sushant', 'chalak', 'Ravi', 'M', '2018-10-24', 'IT', 'B-432', 'Navi Mumbai', 'Lodha', 400038),
(501668, 'Pankaj', 'Ramkuber', 'Gupta', 'M', '2018-10-10', 'IT', 'H/17', 'kurla', 'shri krishna chowk', 400070),
(501669, 'Shreya', 'Shrirang', 'Joshi', 'F', '1999-02-05', 'IT', 'k/78', 'khar', 'taj hotel', 400038);

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE `student_login` (
  `roll_no` int(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `token` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`roll_no`, `password`, `email`, `status`, `token`) VALUES
(501668, 'pankajg#22', 'pankajgupta.pg877@gmail.com', 1, ''),
(501670, 'Swapnali@321', 'ip.proj.Orc@gmail.com', 1, ''),
(501667, '', '', 0, ''),
(501652, '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_details`
--

CREATE TABLE `ticket_details` (
  `App_id` int(50) NOT NULL,
  `current_Tic_no` varchar(10) NOT NULL,
  `duration` varchar(10) NOT NULL,
  `source` varchar(10) NOT NULL,
  `Roll_no` int(8) NOT NULL,
  `date_of_app` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admine_details`
--
ALTER TABLE `admine_details`
  ADD PRIMARY KEY (`Admin_id`),
  ADD UNIQUE KEY `uk` (`password`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`rollno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ticket_details`
--
ALTER TABLE `ticket_details`
  MODIFY `App_id` int(50) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
