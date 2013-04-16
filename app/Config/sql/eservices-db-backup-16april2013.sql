-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 16, 2013 at 10:18 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `costs`
--

INSERT INTO `costs` (`id`, `date`, `user_id`, `project_id`, `billinghours`, `fixedcost`) VALUES
(1, '2013-01-01', 1, 1, 20, 358),
(2, '2013-02-04', 2, 1, 15, 0),
(4, '2013-01-01', 4, 5, 59, NULL),
(5, '2013-02-06', 4, 5, 59, NULL),
(6, '2013-03-27', 1, 1, 36, NULL),
(7, '2013-03-04', 6, 1, 25, NULL),
(8, '2013-02-12', 1, 1, 45, NULL),
(9, '2013-04-06', 1, 1, 50, NULL),
(10, '2013-04-06', 2, 1, 30, NULL),
(11, '2013-04-06', 2, 1, 30, NULL),
(12, '2013-05-06', 2, 1, 10, NULL),
(13, '2013-05-10', 2, 1, 10, NULL),
(14, '2013-05-11', 2, 1, 10, NULL),
(15, '2013-05-12', 2, 1, 10, NULL),
(16, '2013-02-21', 1, 2, 50, NULL),
(17, '2013-03-21', 1, 2, 10, NULL),
(18, '2013-01-07', 5, 2, 10, NULL),
(22, '2013-01-06', 1, 3, 15, NULL),
(23, '2013-02-10', 1, 3, 10, NULL),
(24, '2013-03-10', 1, 3, 5, NULL),
(25, '2013-02-18', 4, 3, 5, NULL),
(26, '2013-04-12', 4, 3, 12, NULL),
(27, '2013-05-07', 1, 1, 5, NULL),
(28, '2013-05-07', 1, 1, 6, NULL),
(29, '2013-06-03', 1, 1, 6, NULL),
(30, '2013-05-11', 2, 1, 3, NULL),
(31, '2013-04-11', 3, 4, 7, NULL),
(32, '2013-04-11', 7, 4, 3, NULL),
(33, '2013-04-11', 5, 2, 2, NULL),
(34, '2013-04-11', 8, 3, 1, NULL),
(35, '2013-04-11', 1, 2, 3, NULL),
(36, '2013-03-11', 1, 1, 2, NULL),
(37, '2013-05-11', 1, 1, 2, NULL),
(38, '2013-07-11', 1, 1, 3, NULL),
(39, '2013-07-11', 1, 1, 3, NULL),
(40, '2013-01-11', 1, 1, 1, NULL),
(41, '2013-04-11', 1, 1, 0, NULL),
(42, '2013-04-11', 1, 1, 1, NULL),
(43, '2013-04-11', 1, 1, 0, NULL),
(44, '2013-04-11', 1, 1, 0, NULL),
(46, '2013-03-11', 1, 1, 1, NULL),
(47, '2013-04-19', 1, 1, 1, NULL),
(48, '2013-03-11', 1, 1, 2, NULL),
(49, '2013-02-04', 1, 1, 5, NULL),
(50, '2013-02-04', 1, 1, 5, NULL),
(51, '2013-07-02', 1, 1, 1, NULL),
(52, '2013-07-03', 1, 1, 1, NULL),
(53, '2013-07-04', 1, 1, 1, NULL),
(54, '2013-03-11', 7, 4, 1, NULL),
(55, '2013-03-19', 9, 3, 1, NULL),
(56, '2013-04-02', 3, 3, 4, NULL),
(57, '2013-06-11', 3, 3, 1, NULL),
(58, '2013-05-11', 8, 5, 6, NULL),
(59, '2013-05-11', 8, 3, 3, NULL),
(60, '2013-03-15', 4, 1, 2, NULL),
(61, '2013-04-16', 6, 4, 5, NULL),
(62, '2013-05-16', 6, 4, 1, NULL),
(63, '2013-06-16', 6, 4, 1, NULL),
(64, '2013-07-16', 6, 4, 1, NULL),
(65, '2013-02-04', 8, 3, 10, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_name`, `project_billing_code`, `project_description`, `project_client`, `project_budget`) VALUES
(1, 'NYDOH Prenatal ', '2186.01.03', 'New York State Dept of Health Prenatal Data Capture Tool ', 'Paul Enfield', 75000),
(2, 'WhyNotTheBest', '3070.1002.07', 'Commonwhealth Fund WhyNotTheBest.org', 'Commonwhealth Fund', 120000),
(3, 'Million Hearts', '1090.04.03', '', 'Allan Silver', 70000),
(4, 'NYDOH HMH', '2186.01.37', '', 'New York Dept of Health', 140000),
(5, 'idph maintenance', '3070.1006.02', '', 'Illinois Dept Of Health', 5000);

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
(1, 'Akim', 'Delli', 'akim@ipro.us', '45', 'Lead Software Architect', 5968437),
(2, 'Rurik', 'Peterson', 'rurik@ipro.us', '45', 'Assistant Director of Technology', NULL),
(3, 'Karen', 'Hirko', 'karen@ipro.us', '50', 'Project Manager', NULL),
(4, 'Joseph', 'Gullotta', 'joseph@ipro.us', '40', 'Manager Data Systems', NULL),
(5, 'Nichole', 'Boseman', 'nichole@ipro.us', '20', 'Web Editor', NULL),
(6, 'Paul', 'Sciaraffo', 'paul@ipro.us', '20', 'Web editor', NULL),
(7, 'Jackie', 'Geis', 'jackie@ipro.us', '30', 'Content Manager', NULL),
(8, 'Ikhide', 'Odion', 'ikhide@ipro.us', '40', 'web developer', NULL),
(9, 'Collin', 'York', 'collin@ipro.us', '37', 'Web developer', NULL),
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
