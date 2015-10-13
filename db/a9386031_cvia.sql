
-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 10, 2015 at 11:31 AM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a9386031_cvia`
--

-- --------------------------------------------------------

--
-- Table structure for table `CV`
--

CREATE TABLE `CV` (
  `cv_id` int(10) NOT NULL AUTO_INCREMENT,
  `owner_id` int(10) DEFAULT NULL,
  `cv_keyword` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`cv_id`),
  KEY `owner_id` (`owner_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Store the CV information' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `CV`
--

INSERT INTO `CV` VALUES(1, 1, 'Oracle SQL, VB.NET, Java');

-- --------------------------------------------------------

--
-- Table structure for table `Job`
--

CREATE TABLE `Job` (
  `job_id` int(10) NOT NULL AUTO_INCREMENT,
  `owner_id` int(10) NOT NULL,
  `job_title` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `job_description` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `job_keyword` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `company` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`job_id`),
  KEY `owner_id` (`owner_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Store the job information' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Job`
--

INSERT INTO `Job` VALUES(1, 1, 'MARKET OPERATIONS SPECIALIST', 'Responsibilities ?  Provide support to the Market Clearing Engine maintenance and change implementation ?  Proactively contribute to the market rule changes and market evolution processes ?  Involved in market analysis and simulation tools maintenance and', 'Market Clearing Engine, market analysis, incident investigation, pricing analysis, First class, Operations Research, second class, Computer Science, VB.NET, Java, C#, Oracle SQL', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Job_CV_grade`
--

CREATE TABLE `Job_CV_grade` (
  `job_id` int(10) NOT NULL,
  `cv_id` int(10) NOT NULL,
  `grade` int(10) NOT NULL,
  KEY `job_id` (`job_id`,`cv_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Store the mark of the CV related to the job';

--
-- Dumping data for table `Job_CV_grade`
--

INSERT INTO `Job_CV_grade` VALUES(1, 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `memberID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `active` varchar(255) NOT NULL,
  `resetToken` varchar(255) DEFAULT NULL,
  `resetComplete` varchar(3) DEFAULT 'No',
  PRIMARY KEY (`memberID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` VALUES(2, 'cyj', '', 'chengyingjie29@gmail.com', 'Yes', NULL, 'No');
INSERT INTO `members` VALUES(3, 'asddd', '', 'asddd@gmail.com', 'yes', NULL, 'No');
INSERT INTO `members` VALUES(4, 'dsaas', '', 'dsaas@gmail.com', 'yes', NULL, 'No');
INSERT INTO `members` VALUES(5, 'dasds', '', 'dasds@gmail.com', 'yes', NULL, 'No');
INSERT INTO `members` VALUES(6, 'Wen Yiran', '', 'aieryiran@gmail.com', 'Yes', NULL, 'No');
