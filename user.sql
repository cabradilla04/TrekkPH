-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2016 at 11:54 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `useraccnt`
--

CREATE TABLE IF NOT EXISTS `useraccnt` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `userEmail` varchar(50) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `useraccnt`
--

INSERT INTO `useraccnt` (`userID`, `username`, `password`, `userEmail`) VALUES
(1, 'admin', 'admin', 'admin2@gmail.com'),
(2, 'admin', '1234', 'cabradilla04@gmail.com'),
(3, 'admin', '1234', 'cabradilla04@gmail.com'),
(4, 'arthlimchiu', '123456', 'limchiuarth@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `userprofile`
--

CREATE TABLE IF NOT EXISTS `userprofile` (
  `profID` int(11) NOT NULL AUTO_INCREMENT,
  `profLName` varchar(25) NOT NULL,
  `profFName` varchar(25) NOT NULL,
  `profSex` varchar(6) NOT NULL,
  `profBirthday` date NOT NULL,
  `profAge` int(2) NOT NULL,
  PRIMARY KEY (`profID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `userprofile`
--

INSERT INTO `userprofile` (`profID`, `profLName`, `profFName`, `profSex`, `profBirthday`, `profAge`) VALUES
(1, 'admin', 'admin', 'Male', '1997-09-04', 0),
(2, 'Cabradilla', 'Kyle', 'Male', '1997-09-04', 0),
(3, 'Cabradilla', 'Kyle', 'Male', '2016-03-08', 18),
(4, 'Lim', 'Arth Clarence Jonn', 'Male', '1995-10-14', 20);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
