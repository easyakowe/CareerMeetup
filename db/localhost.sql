-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 16, 2019 at 12:17 PM
-- Server version: 5.7.25-cll-lve
-- PHP Version: 7.2.7

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
CREATE DATABASE IF NOT EXISTS `meetupca_meetup_career` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `meetupca_meetup_career`;

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

INSERT INTO `professional_registration` (`sn`, `title`, `first_name`, `last_name`, `gender`, `country`, `city`, `language`, `educational_level`, `phone_no`, `email`, `password`, `date_registered`, `prof_reg_id`, `checker`) VALUES
(1, 'Mr', 'Emmanuel', 'Ogundare', 'Male', 'Nigeria', 'Ibadan', 'ang', 'Bachelors Degree', 'Resource id #8', 'ogundare.emmanuel@gmail.com', '12345', 'Feb 05, 2019 08:00pm', 'MPDXHRW', 0),
(2, 'Miss', 'Olanike', 'Ogundipe', 'Female', 'Nigeria', 'Ibadan', 'English', 'Higher National Diploma', 'Resource id #8', 'tijesunimiolanike@gmail.com', 'Bonus', 'Feb 06, 2019 09:46pm', '2KZRPD9', 0),
(3, 'Miss', 'Olarike', 'Ogundipe', 'Female', 'Nigeria', 'Ibadan', 'English', 'Higher National Diploma', 'Resource id #8', 'ogundipe.aishat@yahoo.com', 'Itesiwaju', 'Feb 06, 2019 09:59pm', 'SCKXRVW', 0),
(4, 'Mrs', 'Felicia', 'Yusuf', 'Female', 'Nigeria', 'Ota', 'ang', 'Masters', 'Resource id #8', 'rinola_olufemi@hotmail.com', 'sunshine1', 'Feb 22, 2019 12:47pm', 'YFJVP1N', 0),
(5, 'Mr', 'Michael', 'Fagbohun', 'Male', 'Nigeria', 'Canaan Landa, Ota', 'ang', 'Higher National Diploma', 'Resource id #8', 'michael.fagbohun@covenantuniversity.edu.ng', 'gatewayz', 'Mar 09, 2019 09:15pm', 'SDWG9NB', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `professional_registration`
--
ALTER TABLE `professional_registration`
  ADD PRIMARY KEY (`sn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `professional_registration`
--
ALTER TABLE `professional_registration`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
