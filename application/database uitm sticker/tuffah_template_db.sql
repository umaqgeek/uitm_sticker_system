-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2015 at 12:12 PM
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
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('rabani', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `aduan`
--

CREATE TABLE IF NOT EXISTS `aduan` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `ic` varchar(13) NOT NULL,
  `status` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `komen` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `aduan`
--

INSERT INTO `aduan` (`id`, `ic`, `status`, `nama`, `email`, `komen`) VALUES
(1, '920401075655', 'PL', 'rabani rosli', 'rabanirosli@yahoo.com', 're'),
(2, '920401075655', 'PL', 'rabani', 'rabanirosli@yahoo.com', 'saya');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `register_id` int(6) NOT NULL AUTO_INCREMENT,
  `plat` varchar(7) NOT NULL,
  `kenderaan` varchar(255) NOT NULL,
  `model` varchar(10) NOT NULL DEFAULT '',
  `nama` varchar(255) NOT NULL,
  `ic` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `hubungan` varchar(255) NOT NULL,
  `lesen` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `cukai` varchar(255) NOT NULL,
  `waris` int(10) NOT NULL,
  `status` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `code` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`register_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`register_id`, `plat`, `kenderaan`, `model`, `nama`, `ic`, `phone`, `hubungan`, `lesen`, `kelas`, `cukai`, `waris`, `status`, `jenis`, `code`) VALUES
(64, 'pjb4396', 'KT', 'ALF', 'rabani', '920401075655', '0134268126', 'SD', '123456', 'D', '1233', 123456789, 'Approve', 'PL', '2015-11-05 08:10:46'),
(65, 'pjb4396', 'KT', 'ALF', 'azwan', '920401075655', '0134268126', 'SD', '123456', 'D', '1234', 123456789, 'Approve', 'PL', '2015-11-07 11:08:34'),
(66, 'pjb4396', 'KT', 'ALF', 'nazlin', '920401075655', '0134268126', 'SA', '123456', 'D', '1233', 123456789, 'Approve', 'PL', '2015-11-07 11:08:20');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `signup_id` int(50) NOT NULL AUTO_INCREMENT,
  `ic_no` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`signup_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`signup_id`, `ic_no`, `nama`, `username`, `password`, `phone_no`, `email`) VALUES
(1, '2147483647', 'rabani', 'rabani', '1234', 134268126, 'rabanirosli@yahoo.com'),
(2, '1234', 'muhammad babu', 'babu192', '12345', 123456, 'babu@yahoo.com'),
(3, '1234', 'muhammad babu', 'babu192', '12345', 123456, 'babu@yahoo.com'),
(4, '12345678', 'azwan', 'azwan', '123456', 12345678, 'azwan@yahoo.com'),
(8, '12', 'abcd', 'abcd', '1234', 123, 'afiq4630@yahoo.com'),
(10, '2147483647', 'rozaimi', 'rozaimi', '1234', 1234567890, 'rozaimi@yahoo.com'),
(11, '920401075655', 'rabani', 'rabani', '1234', 134268126, 'rabanirosli@yahoo.com'),
(12, '920401075655', 'rabani', 'rabani', '1234', 134268126, 'rabanirosli@yahoo.com'),
(13, '920401075655', 'rabani', 'rabani', '1234', 134268126, 'rabanirosli@yahoo.com'),
(14, '920401075655', 'rabani', 'rabani', '1234', 134268126, 'rabanirosli@yahoo.com');

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
