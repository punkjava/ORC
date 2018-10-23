-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2018 at 09:33 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clg_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `rollno` int(11) NOT NULL,
  `password` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` char(1) NOT NULL,
  `dob` date NOT NULL,
  `course` varchar(255) NOT NULL,
  `flat_no` varchar(255) DEFAULT NULL,
  `area` varchar(255) NOT NULL,
  `society` varchar(255) NOT NULL,
  `sector` varchar(255) NOT NULL,
  `pincode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`rollno`, `password`, `first_name`, `middle_name`, `last_name`, `gender`, `dob`, `course`, `flat_no`, `area`, `society`, `sector`, `pincode`) VALUES
(501668, 1234, 'Pankaj', 'R', 'Gupta', 'M', '1998-10-23', 'IT', 'S-660', 'Panvel', 'abc', '12', 410211),
(501669, 501669, 'Shreya', 'Shrirang', 'Joshi', 'f', '1999-02-05', 'IT', 'G-278', 'Kharghar', 'Raghunathvihar', '14', 410210),
(501670, 123, 'Swapnali', 'B', 'Kadam', 'f', '1998-12-18', 'it', '430', 'kw', 'pqr', '9', 343220);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`rollno`),
  ADD UNIQUE KEY `uk` (`password`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
