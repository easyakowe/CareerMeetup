-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 19, 2019 at 09:16 PM
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
-- Database: `meetupca_meetup_career`
--

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `sn` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`sn`, `email`) VALUES
(1, 'example1@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `professional_registration`
--

CREATE TABLE `professional_registration` (
  `sn` int(11) NOT NULL,
  `title` varchar(210) NOT NULL,
  `first_name` varchar(210) NOT NULL,
  `last_name` varchar(210) NOT NULL,
  `gender` varchar(210) NOT NULL,
  `country` varchar(210) NOT NULL,
  `city` varchar(210) NOT NULL,
  `language` varchar(210) NOT NULL,
  `educational_level` varchar(210) NOT NULL,
  `field` varchar(255) NOT NULL,
  `phone_no` varchar(210) NOT NULL,
  `email` varchar(210) NOT NULL,
  `password` varchar(210) NOT NULL,
  `date_registered` varchar(210) NOT NULL,
  `prof_reg_id` varchar(210) NOT NULL,
  `checker` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `professional_registration`
--

INSERT INTO `professional_registration` (`sn`, `title`, `first_name`, `last_name`, `gender`, `country`, `city`, `language`, `educational_level`, `field`, `phone_no`, `email`, `password`, `date_registered`, `prof_reg_id`, `checker`) VALUES
(1, 'Mr', 'Emmanuel', 'Ogundare', 'Male', 'Nigeria', 'Ibadan', 'ang', 'Bachelors Degree', 'Human Medicine', 'Resource id #8', 'ogundare.emmanuel@gmail.com', '12345', 'Feb 05, 2019 08:00pm', 'MPDXHRW', 0),
(2, 'Miss', 'Olanike', 'Ogundipe', 'Female', 'Nigeria', 'Ibadan', 'English', 'Higher National Diploma', 'Computer Engineering', 'Resource id #8', 'tijesunimiolanike@gmail.com', 'Bonus', 'Feb 06, 2019 09:46pm', '2KZRPD9', 0),
(3, 'Miss', 'Olarike', 'Ogundipe', 'Female', 'Nigeria', 'Ibadan', 'English', 'Higher National Diploma', 'Computing', '09023467821', 'ogundipe.aishat@yahoo.com', 'Itesiwaju', 'Feb 06, 2019 09:59pm', 'SCKXRVW', 0),
(4, 'Mrs', 'Felicia', 'Yusuf', 'Female', 'Nigeria', 'Ota', 'ang', 'Masters', 'Meteorology', 'Resource id #8', 'rinola_olufemi@hotmail.com', 'sunshine1', 'Feb 22, 2019 12:47pm', 'YFJVP1N', 0),
(5, 'Mr', 'Michael', 'Fagbohun', 'Male', 'Nigeria', 'Canaan Landa, Ota', 'ang', 'Higher National Diploma', 'Agricultural Science', 'Resource id #8', 'michael.fagbohun@covenantuniversity.edu.ng', 'gatewayz', 'Mar 09, 2019 09:15pm', 'SDWG9NB', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reg_details`
--

CREATE TABLE `reg_details` (
  `sn` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_details`
--

INSERT INTO `reg_details` (`sn`, `email`, `password`) VALUES
(1, 'example1@example.com', 'example1'),
(2, 'example2@example.com', 'example2');

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `sn` int(50) NOT NULL,
  `stud_id_no` varchar(7) NOT NULL,
  `title` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `id_type` varchar(255) NOT NULL,
  `fluent_lang` varchar(255) NOT NULL,
  `country_of_residence` varchar(255) NOT NULL,
  `phone` int(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `field_of_interest` varchar(255) NOT NULL,
  `date_registered` date NOT NULL,
  `checker` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`sn`, `stud_id_no`, `title`, `firstname`, `lastname`, `gender`, `date_of_birth`, `nationality`, `address`, `id_type`, `fluent_lang`, `country_of_residence`, `phone`, `email`, `password`, `field_of_interest`, `date_registered`, `checker`) VALUES
(1, 'SCI24FV', 'Mr', 'Bola', 'Tiwa', 'Male', '2019-02-05', 'Nigerian', '452, Abuja Road', 'Student ID', 'English', 'Nigeria', 812443567, 'bolatiwa@example.com', '123456', 'Mechanical Engineering', '2019-03-19', 0);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_registration`
--

CREATE TABLE `teacher_registration` (
  `sn` int(11) NOT NULL,
  `teach_id_no` varchar(7) NOT NULL,
  `title` varchar(7) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `educational_level` varchar(255) NOT NULL,
  `field` varchar(255) NOT NULL,
  `phone_no` int(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_registered` date NOT NULL,
  `checker` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_registration`
--

INSERT INTO `teacher_registration` (`sn`, `teach_id_no`, `title`, `first_name`, `last_name`, `gender`, `country`, `city`, `language`, `educational_level`, `field`, `phone_no`, `email`, `password`, `date_registered`, `checker`) VALUES
(1, 'DDD73XV', 'Mr', 'Dan', 'Achi', 'Male', 'Nigeria', 'Lokoja', 'English', 'Bachelors Degree', 'Machine Learning', 705893939, 'danachi1@example.com', 'danachi', '2019-03-19', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `professional_registration`
--
ALTER TABLE `professional_registration`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `teacher_registration`
--
ALTER TABLE `teacher_registration`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `sn` (`sn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `professional_registration`
--
ALTER TABLE `professional_registration`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student_registration`
--
ALTER TABLE `student_registration`
  MODIFY `sn` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacher_registration`
--
ALTER TABLE `teacher_registration`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
