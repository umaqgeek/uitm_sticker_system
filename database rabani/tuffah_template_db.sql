-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2015 at 04:09 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tuffah_template_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `register_id` int(50) NOT NULL AUTO_INCREMENT,
  `plat` varchar(255) NOT NULL,
  `kenderaan` varchar(255) NOT NULL,
  `model` varchar(10) NOT NULL DEFAULT '',
  `engin` varchar(255) NOT NULL,
  `chasis` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `warna` varchar(255) NOT NULL,
  `ic` int(50) NOT NULL,
  `telefon` varchar(255) NOT NULL,
  `hubungan` varchar(255) NOT NULL,
  `lesen` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `cukai` varchar(255) NOT NULL,
  `waris` varchar(255) NOT NULL,
  PRIMARY KEY (`register_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`register_id`, `plat`, `kenderaan`, `model`, `engin`, `chasis`, `nama`, `warna`, `ic`, `telefon`, `hubungan`, `lesen`, `kelas`, `cukai`, `waris`) VALUES
(1, 'asd123', 'asd123', '', '', '', '', '', 0, '', '', '', '', '', '0000-00-00 00:00:00'),
(2, 'xasdasd', '3123asdasd', '', '', '', '', '', 0, '', '', '', '', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `signup_id` int(50) NOT NULL AUTO_INCREMENT,
  `ic_no` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_no` int(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`signup_id`),
  UNIQUE KEY `name` (`name`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `password` (`password`),
  UNIQUE KEY `phone_no` (`phone_no`),
  UNIQUE KEY `phone_no_2` (`phone_no`),
  UNIQUE KEY `email` (`email`),
  KEY `name_2` (`name`),
  KEY `username_2` (`username`),
  KEY `password_2` (`password`),
  KEY `phone_no_3` (`phone_no`),
  KEY `email_2` (`email`),
  KEY `email_3` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`signup_id`, `ic_no`, `name`, `username`, `password`, `phone_no`, `email`) VALUES
(2, 2147483647, 'Muhammad Rabani Bin Rosli', 'rabani', '1234', 34268126, 'rabanirosli@yahoo.com'),
(7, 2147483647, 'azwan', 'azwan', '1345', 3456789, 'azwan@yahoo.com'),
(8, 0, '0', '0', '0', 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `title`) VALUES
(0, 'Anothe Title'),
(1, 'Some Title'),
(2, 'some title');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_fullname` varchar(200) NOT NULL,
  `u_username` varchar(20) NOT NULL,
  `u_password` varchar(20) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_fullname`, `u_username`, `u_password`) VALUES
(1, 'Administrator', 'admin', 'admin'),
(3, 'pengguna', 'pengguna', 'pengguna'),
(5, 'security officer', 'security', 'security');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
