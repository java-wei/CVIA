-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Nov 05, 2015 at 12:02 PM
-- Server version: 5.5.38
-- PHP Version: 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `CViA`
--

-- --------------------------------------------------------

--
-- Table structure for table `CV`
--

CREATE TABLE `CV` (
`cv_id` int(10) NOT NULL,
  `cv_keyword` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `cv_name` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `cv_phone` varchar(32) COLLATE latin1_general_ci DEFAULT NULL,
  `cv_email` varchar(64) COLLATE latin1_general_ci DEFAULT NULL,
  `cv_description` longtext COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Store the CV information' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `CV`
--

INSERT INTO `CV` (`cv_id`, `cv_keyword`, `cv_name`, `cv_phone`, `cv_email`, `cv_description`) VALUES
(1, 'Oracle SQL, VB.NET, Java', '', NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `Job`
--

CREATE TABLE `Job` (
`job_id` int(10) NOT NULL,
  `owner_id` int(10) NOT NULL,
  `job_title` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `job_description` varchar(2550) COLLATE latin1_general_ci NOT NULL,
  `job_keyword` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `job_company` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `job_duedate` date DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Store the job information' AUTO_INCREMENT=4 ;

--
-- Dumping data for table `Job`
--

INSERT INTO `Job` (`job_id`, `owner_id`, `job_title`, `job_description`, `job_keyword`, `job_company`, `job_duedate`) VALUES
(1, 1, 'Web Designer', 'Passionate in Mobile Applications, Mobile OS and Web technologies. Technical knowledge in Objective C, C++, and/or HTML5 Javascript, Python. Experience with web service integration (JSON, XML, SOAP, REST) will be added advantage. Team Player and able to work independently with little supervision, we love go­getters! Good communication skills, working attitude and interpersonal skills.', 'Market Clearing Engine, market analysis, incident investigation, pricing analysis, First class, Operations Research, second class, Computer Science, VB.NET, Java, C#, Oracle SQL', 'Garena', NULL),
(2, 1, 'Web Developer', 'Common entry-level job titles in Web development include Web designer, webmaster and graphic artist. Increased education and work experience can lead to advanced positions such as senior Web developer, designer and software designer. The U.S. Bureau of Labor Statistics (BLS) forecast that careers in Web development would grow by 20% from 2012-2022, which was faster than average (www.bls.gov). Web developers with programming and multimedia expertise should have the best job prospects. As of May 2013, the mean annual wage for Web developers was $67,540, according to the BLS.', 'Web developer, PHP, HTML, CSS', 'National University of Singapore', NULL),
(3, 2, 'iOS developer', 'The work:\r\n\r\nWork with a small team of top-tier developers who are designing great user experiences and building truly great applications for iOS devices\r\n\r\nParticipate in scrums consisting of cross functional teams, both software and hardware\r\n\r\nEnsure that features are being delivered efficiently and on-time\r\n\r\nIn addition to code contribution, you will also participate in architectural review and design', 'iOS, Apple', 'Vincense', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Job_CV_grade`
--

CREATE TABLE `Job_CV_grade` (
  `job_id` int(10) NOT NULL,
  `cv_id` int(10) NOT NULL,
  `grade` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Store the mark of the CV related to the job';

--
-- Dumping data for table `Job_CV_grade`
--

INSERT INTO `Job_CV_grade` (`job_id`, `cv_id`, `grade`) VALUES
(1, 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
`memberID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `active` varchar(255) NOT NULL,
  `resetToken` varchar(255) DEFAULT NULL,
  `resetComplete` varchar(3) DEFAULT 'No'
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`memberID`, `username`, `password`, `email`, `active`, `resetToken`, `resetComplete`) VALUES
(1, 'aieryiran', '$2y$10$hSipVR0tyLzZSHSsoAXPPepYmZpTX9wNSh7JkBAV9Itfo2I1gvbNO', 'aieryiran@gmail.com', 'Yes', NULL, 'No');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CV`
--
ALTER TABLE `CV`
 ADD PRIMARY KEY (`cv_id`);

--
-- Indexes for table `Job`
--
ALTER TABLE `Job`
 ADD PRIMARY KEY (`job_id`), ADD KEY `owner_id` (`owner_id`);

--
-- Indexes for table `Job_CV_grade`
--
ALTER TABLE `Job_CV_grade`
 ADD KEY `job_id` (`job_id`,`cv_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
 ADD PRIMARY KEY (`memberID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `CV`
--
ALTER TABLE `CV`
MODIFY `cv_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `Job`
--
ALTER TABLE `Job`
MODIFY `job_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
MODIFY `memberID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
