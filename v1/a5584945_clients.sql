-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 24, 2014 at 10:12 PM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a5584945_clients`
--

-- --------------------------------------------------------

--
-- Table structure for table `fox_awesome`
--

CREATE TABLE `fox_awesome` (
  `asID` int(20) NOT NULL AUTO_INCREMENT,
  `upID` int(20) NOT NULL,
  `uID` int(20) NOT NULL,
  PRIMARY KEY (`asID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `fox_awesome`
--

INSERT INTO `fox_awesome` VALUES(1, 0, 0);
INSERT INTO `fox_awesome` VALUES(2, 6, 1);
INSERT INTO `fox_awesome` VALUES(3, 5, 1);
INSERT INTO `fox_awesome` VALUES(4, 4, 1);
INSERT INTO `fox_awesome` VALUES(5, 3, 1);
INSERT INTO `fox_awesome` VALUES(6, 6, 4);
INSERT INTO `fox_awesome` VALUES(7, 8, 4);
INSERT INTO `fox_awesome` VALUES(8, 9, 1);
INSERT INTO `fox_awesome` VALUES(9, 9, 2);
INSERT INTO `fox_awesome` VALUES(10, 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `fox_updates`
--

CREATE TABLE `fox_updates` (
  `upID` int(20) NOT NULL AUTO_INCREMENT,
  `datetime` datetime DEFAULT NULL,
  `status` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `aID` int(20) NOT NULL,
  PRIMARY KEY (`upID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `fox_updates`
--

INSERT INTO `fox_updates` VALUES(4, '2014-03-23 09:04:26', 'try lang ulit :))', 1);
INSERT INTO `fox_updates` VALUES(3, '2014-03-23 09:02:16', 'hi! this is the first post :D', 1);
INSERT INTO `fox_updates` VALUES(5, '2014-03-23 09:10:08', 'TEST 1 2 3 NANGGUGULO AKO MUAHAHAHAHAHAHA', 4);
INSERT INTO `fox_updates` VALUES(6, '2014-03-23 09:19:18', 'trial, sorry gnamit ko ung account mo row haha', 3);
INSERT INTO `fox_updates` VALUES(7, '2014-03-23 23:36:55', 'AWESOME! ITs WORKING <3 ahaha', 1);
INSERT INTO `fox_updates` VALUES(8, '2014-03-23 23:42:19', 'autoload update', 1);
INSERT INTO `fox_updates` VALUES(9, '2014-03-24 03:51:01', 'mobile mode using samsung galaxy note 8', 4);
INSERT INTO `fox_updates` VALUES(10, '2014-03-24 11:25:20', 'DROOLING OVER HERE', 2);

-- --------------------------------------------------------

--
-- Table structure for table `fox_users`
--

CREATE TABLE `fox_users` (
  `uID` int(30) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT 'First',
  `lname` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT 'last',
  `uname` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `pword` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `uname1` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `position` varchar(40) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`uID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `fox_users`
--

INSERT INTO `fox_users` VALUES(1, 'Jairenz', 'Batu', 'hailJai', 'passwordko', 'hailJai', 'Vice - Chairperson');
INSERT INTO `fox_users` VALUES(2, 'Mark Aljon', 'Sanchez', 'msanchez', 'msanchez', 'msanchez', 'Chairperson');
INSERT INTO `fox_users` VALUES(3, 'John Romer', 'Garcia', 'romer', 'romer', 'romer', 'LOOP President');
INSERT INTO `fox_users` VALUES(4, 'Charissa', 'Peña', 'charissa', 'charissa', 'charissa', 'Executive Secretary');
