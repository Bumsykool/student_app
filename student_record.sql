-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 04, 2017 at 04:02 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `student_record`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `reg_number` varchar(15) NOT NULL,
  `class` varchar(10) NOT NULL,
  `birth_date` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `last_name`, `reg_number`, `class`, `birth_date`) VALUES
(1, 'bola', 'jegede', '', '', 0),
(2, 'bola', 'jegede', '', '', 0),
(3, 'bola', 'jegede', '', '', 0),
(4, 'bola', 'jegede', '', '', 0),
(5, 'bola', 'jegede', '', '', 0),
(6, 'bola', 'jegede', '', '', 0),
(7, 'bola', 'jegede', '', '', 0),
(8, 'bola', 'jegede', '', '', 0),
(9, 'bola', 'jegede', '', '', 0),
(10, 'bola', 'jegede', '', '', 0),
(11, 'bola', 'jegede', '', '', 0),
(12, 'bola', 'jegede', '', '', 0),
(13, 'bola', 'jegede', '', '', 0),
(15, 'bola', 'jegede', '', '', 0),
(16, 'bola', 'jegede', '', '', 0),
(17, 'Bunmi', 'Jegede', '64784932', '400', 3893),
(18, 'Bunmi', 'Jegede', '64784932', '400', 3893);
