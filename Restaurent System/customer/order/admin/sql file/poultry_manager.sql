-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2016 at 11:53 AM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `poultry_manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `birds`
--

CREATE TABLE IF NOT EXISTS `birds` (
  `bird_id` int(11) NOT NULL,
  `bird_type` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `date_registered` date NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `num_check` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `birds`
--

INSERT INTO `birds` (`bird_id`, `bird_type`, `amount`, `age`, `date_registered`, `user_id`, `num_check`) VALUES
(2, 'broilers', '60', '1 week(s)', '2016-10-31', '1', '14'),
(5, 'broilers', '20', '3 week(s)', '2016-11-07', '2', '7'),
(6, 'layers', '30', '3 week(s)', '2016-10-24', '1', '21');

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE IF NOT EXISTS `disease` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `symptoms` varchar(255) NOT NULL,
  `treatment` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`id`, `name`, `symptoms`, `treatment`) VALUES
(1, 'Fever', 'headache, temperature', 'Panadol Extra, Boska'),
(2, 'Headache', 'headache', 'paracetamol'),
(8, 'Chicken Fever', 'yellow eyes, malnutrition', 'vaccine and feeding');

-- --------------------------------------------------------

--
-- Table structure for table `feeds_n_vaccine`
--

CREATE TABLE IF NOT EXISTS `feeds_n_vaccine` (
  `feed_id` int(11) NOT NULL,
  `week` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `feeds` varchar(100) NOT NULL,
  `vaccine` varchar(100) NOT NULL,
  `num_check` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feeds_n_vaccine`
--

INSERT INTO `feeds_n_vaccine` (`feed_id`, `week`, `type`, `feeds`, `vaccine`, `num_check`) VALUES
(1, '1', 'broilers', 'pre-starter', 'day 1: Glucose, Vitamin-mareaks\r\nDay 2- 5: Antibiotic, Vitamin\r\nDay 7: Gumboro vaccine', '7'),
(3, '2', 'broilers', 'pre-starter', 'Day 10: Coocidiosis vaccine\nDay 14: Lasota vaccine', '14'),
(4, '3', 'layers', 'starter', 'Day 21: Gumboro vaccine\r\nDay 21 - 25 vitamin', '21');

-- --------------------------------------------------------

--
-- Table structure for table `symptoms`
--

CREATE TABLE IF NOT EXISTS `symptoms` (
  `id` int(11) NOT NULL,
  `symptoms` varchar(100) DEFAULT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `symptoms`
--

INSERT INTO `symptoms` (`id`, `symptoms`, `name`) VALUES
(20, 'headache', 'Fever'),
(21, 'temperature', 'Fever'),
(22, 'headache', 'Headache'),
(23, 'yellow eyes', 'Chicken Fever'),
(24, ' malnutrition', 'Chicken Fever');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fullname`, `username`, `email`, `password`, `phone`) VALUES
(1, 'fullname', 'user', 'user@gmail.com', '12345', '09087654545'),
(2, 'Haruna Jamil', 'jamil', 'jamil@yahoo.com', '12345', '08098787898');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `birds`
--
ALTER TABLE `birds`
  ADD PRIMARY KEY (`bird_id`);

--
-- Indexes for table `disease`
--
ALTER TABLE `disease`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feeds_n_vaccine`
--
ALTER TABLE `feeds_n_vaccine`
  ADD PRIMARY KEY (`feed_id`);

--
-- Indexes for table `symptoms`
--
ALTER TABLE `symptoms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `birds`
--
ALTER TABLE `birds`
  MODIFY `bird_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `disease`
--
ALTER TABLE `disease`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `feeds_n_vaccine`
--
ALTER TABLE `feeds_n_vaccine`
  MODIFY `feed_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `symptoms`
--
ALTER TABLE `symptoms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
