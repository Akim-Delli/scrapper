-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 28, 2013 at 06:37 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eservices`
--

-- --------------------------------------------------------

--
-- Table structure for table `costs`
--

DROP TABLE IF EXISTS `costs`;
CREATE TABLE IF NOT EXISTS `costs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `billinghours` int(11) NOT NULL,
  `fixedcost` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=89 ;

--
-- Dumping data for table `costs`
--

INSERT INTO `costs` (`id`, `date`, `user_id`, `project_id`, `billinghours`, `fixedcost`) VALUES
(1, '2013-01-04', 9, 4, 17, NULL),
(3, '2013-01-11', 9, 4, 4, NULL),
(4, '2013-01-18', 9, 4, 12, NULL),
(5, '2013-01-25', 9, 4, 8, NULL),
(6, '2013-01-18', 9, 2, 6, NULL),
(7, '2013-01-25', 9, 2, 4, NULL),
(8, '2013-02-01', 9, 4, 2, NULL),
(9, '2013-02-01', 9, 2, 3, NULL),
(10, '2013-02-08', 9, 4, 29, NULL),
(11, '2013-02-08', 9, 5, 4, NULL),
(12, '2013-02-15', 9, 4, 33, NULL),
(13, '2013-02-15', 9, 2, 3, NULL),
(14, '2013-02-22', 9, 2, 1, NULL),
(15, '2013-02-22', 9, 4, 21, NULL),
(16, '2013-03-01', 9, 4, 31, NULL),
(17, '2013-03-01', 9, 2, 2, NULL),
(18, '2013-03-08', 9, 4, 34, NULL),
(19, '2013-03-08', 9, 2, 1, NULL),
(22, '2013-04-08', 9, 6, 1, NULL),
(23, '2013-03-15', 9, 4, 22, NULL),
(24, '2013-03-15', 9, 6, 3, NULL),
(25, '2013-03-22', 9, 6, 3, NULL),
(26, '2013-03-22', 9, 4, 31, NULL),
(27, '2013-03-29', 9, 4, 34, NULL),
(28, '2013-04-05', 9, 4, 5, NULL),
(29, '2013-04-05', 9, 2, 2, NULL),
(30, '2013-04-12', 9, 2, 3, NULL),
(31, '2013-04-12', 9, 4, 14, NULL),
(32, '2013-04-19', 9, 4, 11, NULL),
(33, '2013-01-04', 9, 3, 1, NULL),
(34, '2013-01-11', 9, 3, 25, NULL),
(35, '2013-01-18', 9, 3, 13, NULL),
(36, '2013-01-25', 9, 3, 15, NULL),
(37, '2013-02-01', 9, 3, 28, NULL),
(38, '2013-02-08', 9, 3, 2, NULL),
(39, '2013-02-22', 9, 3, 2, NULL),
(40, '2013-04-05', 9, 3, 27, NULL),
(41, '2013-04-12', 9, 3, 19, NULL),
(42, '2013-04-19', 9, 3, 16, NULL),
(43, '2013-02-22', 1, 4, 27, NULL),
(44, '2013-03-01', 1, 4, 35, NULL),
(45, '2013-03-08', 1, 4, 16, NULL),
(46, '2013-03-01', 1, 1, 5, NULL),
(47, '2013-03-08', 1, 1, 24, NULL),
(48, '2013-03-15', 1, 1, 30, NULL),
(49, '2013-03-22', 1, 1, 18, NULL),
(50, '2013-03-15', 1, 4, 6, NULL),
(51, '2013-03-22', 1, 4, 5, NULL),
(52, '2013-03-15', 1, 6, 4, NULL),
(53, '2013-03-22', 1, 6, 7, NULL),
(54, '2013-03-29', 1, 1, 12, NULL),
(55, '2013-04-05', 1, 1, 10, NULL),
(56, '2013-04-05', 1, 4, 4, NULL),
(57, '2013-03-29', 1, 4, 6, NULL),
(58, '2013-03-29', 1, 5, 2, NULL),
(59, '2013-03-29', 1, 6, 7, NULL),
(60, '2013-04-05', 1, 6, 15, NULL),
(61, '2013-04-12', 1, 1, 12, NULL),
(62, '2013-04-19', 1, 4, 21, NULL),
(63, '2013-04-12', 1, 6, 14, NULL),
(64, '2013-04-19', 1, 6, 4, NULL),
(65, '2013-04-12', 1, 5, 1, NULL),
(66, '2013-01-04', 8, 1, 20, NULL),
(67, '2013-01-11', 8, 1, 39, NULL),
(68, '2013-01-18', 8, 1, 37, NULL),
(69, '2013-01-25', 8, 1, 13, NULL),
(70, '2013-01-25', 8, 5, 1, NULL),
(71, '2013-02-01', 8, 1, 17, NULL),
(72, '2013-02-08', 8, 1, 21, NULL),
(73, '2013-02-01', 8, 5, 8, NULL),
(74, '2013-02-08', 8, 5, 18, NULL),
(75, '2013-02-15', 8, 1, 36, NULL),
(76, '2013-02-22', 8, 1, 25, NULL),
(77, '2013-03-01', 8, 1, 35, NULL),
(78, '2013-03-08', 8, 1, 35, NULL),
(79, '2013-03-08', 8, 5, 1, NULL),
(80, '2013-03-15', 8, 1, 25, NULL),
(81, '2013-03-22', 8, 1, 30, NULL),
(82, '2013-03-22', 8, 5, 2, NULL),
(83, '2013-03-29', 8, 1, 26, NULL),
(84, '2013-04-05', 8, 1, 32, NULL),
(85, '2013-03-29', 8, 5, 2, NULL),
(86, '2013-04-05', 8, 5, 1, NULL),
(87, '2013-04-12', 8, 1, 16, NULL),
(88, '2013-04-24', 1, 8, 12, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(100) NOT NULL,
  `project_billing_code` varchar(20) NOT NULL,
  `project_description` text NOT NULL,
  `project_client` text NOT NULL,
  `project_budget` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_name`, `project_billing_code`, `project_description`, `project_client`, `project_budget`) VALUES
(1, 'NYDOH Prenatal ', '2186.01.03', 'New York State Dept of Health Prenatal Data Capture Tool ', 'Paul Enfield', 50000),
(2, 'WhyNotTheBest', '3070.1002.07', 'Commonwhealth Fund WhyNotTheBest.org', 'Commonwhealth Fund', 20000),
(3, 'Million Hearts', '1090.04.03', '', 'Allan Silver', 70000),
(4, 'NYDOH HMH', '2186.01.37', '', 'New York Dept of Health', 80000),
(5, 'idph maintenance', '3070.1006.02', '', 'Illinois Dept Of Health', 5000),
(6, 'Kentucky MCO Dashboard', '3020.4502.02', 'Kentucky MCO Dashboard', 'Chuck Merino', 40000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `costrate` decimal(10,0) DEFAULT NULL,
  `jobtitle` varchar(50) NOT NULL,
  `iproid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `costrate`, `jobtitle`, `iproid`) VALUES
(1, 'Akim', 'Delli', 'akim@ipro.us', '80', 'Lead Software Architect', 15087),
(2, 'Rurik', 'Peterson', 'rurik@ipro.us', '80', 'Assistant Director of Technology', NULL),
(3, 'Karen', 'Hirko', 'karen@ipro.us', '80', 'Assistant director', NULL),
(4, 'Joseph', 'Gullotta', 'joseph@ipro.us', '50', 'Manager Data Systems', NULL),
(5, 'Nichole', 'Boseman', 'nichole@ipro.us', '40', 'Web Editor', NULL),
(6, 'Paul', 'Sciaraffo', 'paul@ipro.us', '40', 'Web editor', NULL),
(7, 'Jackie', 'Geis', 'jackie@ipro.us', '50', 'Content Manager', NULL),
(8, 'Ikhide', 'Odion', 'ikhide@ipro.us', '60', 'web developer', 61276),
(9, 'Collin', 'York', 'collin@ipro.us', '60', 'Web developer', 98986),
(10, 'Jaz-Michael', 'King', 'jazmichael@ipro.us', NULL, 'Chief Technical Officer', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_projects`
--

DROP TABLE IF EXISTS `users_projects`;
CREATE TABLE IF NOT EXISTS `users_projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users_projects`
--

INSERT INTO `users_projects` (`id`, `user_id`, `project_id`) VALUES
(1, 3, 1),
(2, 10, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
