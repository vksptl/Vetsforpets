-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Nov 29, 2016 at 10:43 AM
-- Server version: 5.6.29-76.2-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `evostpm9_vetsforpets`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(50) NOT NULL,
  `full_name` varchar(64) NOT NULL,
  `email` varchar(256) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `what_pet` varchar(50) NOT NULL,
  `specify` varchar(50) NOT NULL,
  `breed` varchar(50) NOT NULL,
  `age` int(50) NOT NULL,
  `doctor_nm` varchar(50) NOT NULL,
  `reg_date` datetime NOT NULL,
  `time` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `what_pet` (`what_pet`),
  KEY `specify` (`specify`),
  KEY `breed` (`breed`),
  KEY `age` (`age`),
  KEY `user_id` (`user_id`),
  KEY `doctor_nm` (`doctor_nm`),
  KEY `time` (`time`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(64) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(64) NOT NULL,
  `verified_users` tinyint(4) NOT NULL,
  `verif_code` varchar(200) NOT NULL,
  `reg_date` datetime NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `last_name` (`last_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `verified_users`, `verif_code`, `reg_date`, `status`) VALUES
(2, 'Alpesh', 'Viradiya', 'alpesh@gmail.com', '123456', 0, 'Q2n6gsTc9zmCULd8MOeXuHFtv', '2016-11-26 08:13:58', 1),
(3, 'mayank', 'lalani', 'mayankmca.patel@gmail.com', 'mayank', 0, 'y1VXrUC4dclBefkHOAGYFD2Ss', '2016-11-29 01:48:29', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
