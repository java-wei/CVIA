-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Nov 05, 2015 at 02:31 PM
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
  `cv_job_id` int(11) NOT NULL,
  `cv_keyword` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `cv_name` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `cv_phone` varchar(32) COLLATE latin1_general_ci DEFAULT NULL,
  `cv_email` varchar(64) COLLATE latin1_general_ci DEFAULT NULL,
  `cv_description` longtext COLLATE latin1_general_ci NOT NULL,
  `cv_grade` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Store the CV information' AUTO_INCREMENT=11 ;

--
-- Dumping data for table `CV`
--

INSERT INTO `CV` (`cv_id`, `cv_job_id`, `cv_keyword`, `cv_name`, `cv_phone`, `cv_email`, `cv_description`, `cv_grade`) VALUES
(1, 0, 'iOS developer', 'Wen Yiran', '98765432', 'yiran@sina.com', 'Wen Yiran                                             (+65) 9891 1715            aieryiran@gmail.com\nEducation\nUniversity            : National University of Singapore (NUS)\nGraduating Year  : 2016\nMajor                    : Computer Science\nFocus Areas        : Software Engineering; \n                                Interactive Media;\n\nRelevant Project Experiences\nâ€¢ Book-keeping mobile-based web app                                 MySQL, HTML, CSS, Javascript, PHP \n    - a responsive web app for mobile users to do book-keeping\nâ€¢ 2-player online game                                                            HTML, CSS, Javascript, PHP, node.js\n    - a web app which allows users to play XOXO games with nearby friends (Google Maps included) \nâ€¢ HR management app on iPhone                                                                                   Objective-C\n    - an iOS app which support scheduling, job applying and chatting functionalities\n    - this app won the 1st prize in 5th NUS School of Computing Term Project Showcase\nâ€¢ Tilt game on iPad                                                                                                           Objective-C\n    - an iOS game which is similar to Tilt to Live (play should try to survive from the auto-generated enemies)\n    - this app won the 1st prize in 4th NUS School of Computing Term Project Showcase\nâ€¢ Todo-list desktop software                                                                                                        Java\n    - a desktop application that support scheduling functionality\nâ€¢ Self-learning anatomy application                                                                                             C++\n    - a desktop application that allows students to read articles and images about anatomy and take quizzes\n\nIntern Experiences\niOS developer & UI designer                                                                 @Talenox, Sep - Nov, 2014\n\nâ€¢ Collaborated with three fellows\nâ€¢ Implemented an app supporting scheduling, job applying and chatting\nâ€¢ Designed the UI/UX\n\nStudent Intern                                                                   @Hangzhou TV Station, May - July, 2013\nâ€¢ Get hands-on experiences in working in real-world ofï¬ce and communicating with various \n\npeople from diverse background\n\nâ€¢ Assisted in doing topic research, information collection and interview\nâ€¢ Assisted in out-door shooting and Chinese-English translation\n\nAcademic & Other Awards\nâ€¢ 1st place in 5th NUS School of Computing Term Project Showcase (STePS)                 Nov, 2014\nâ€¢ 1st place in 4th NUS STePS                                                                                              Apr, 2014\nâ€¢ 1st place in Sequence Arts in Extravaganza 2014                                                           Aug, 2014\nâ€¢ 1st place in Sequence Arts in Extravaganza 2013                                                           Aug, 2013\n\nCo-Curricular Activities\nâ€¢ Publicity director of NUS Chinese Society Spring Festival 2015                                      Sep, 2014\nâ€¢ Exco member of NUS Comic and Animation Society                                             Sep, 2011 - Now\nâ€¢ Logo designer of Paciï¬c Graphics Conference 2013                                                       Dec, 2012\nâ€¢ Volunteer in Ministry of Education (MOE) GIVE program                                       Sep - Nov, 2011 \nâ€¢ Publicity director, president of schoolâ€™s literary society & class monitor                        2007 - 2011\n\nTechnical Skills\nLanguages                        : Objective-C, Java, C++, Python, C;\nWeb Related Languages : HTML, CSS, Javascript, PHP, mySQL;\nSoftwares                         : Xcode, Eclipse, Adobe Photoshop, Autodesk MAYA, Unity,\n                                            Qt Creator, SourceTree, Adobe Premiere Pro,\n                                            Dreamweaver, Microsoft Ofï¬ce, Pages, Keynote;\nOperating Systems          : Windows 7, Windows 8, Mac OS X;\n\nNontechnical Skills\nLanguages Spoken          : English, Mandarin, Japanese;\nStrengths                          : Drawing, Playing the piano, Writing, Singing;\nOther Skills                       : Teamwork skills, Interpersonal skills, \n                                             Leadership experiences, Public speaking experiences;\n\nCourse Work\nSoftware Engineering: Software Engineering on Modern Application Platformsï¼›\n                                       Web Programming and Applicationsï¼›\n                                       Software Engineering;\n                                       Introduction to Database Systems;\n                                       Introduction to Information and System Security;\n                                       Computer Networking;\nInteractive Media:        Human-Computer Interaction (HCI);\n                                      Phenomena and Theories of HCI;   \n                                      User Interface Developmentï¼›         \n                                      Game Development;\n                                      3D Modelling and Animation;\nOthers:                         Sound and Music Computing;\n                                      Digital Media Production;\n                                      Principles of Economics;\n\n', 0);

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
MODIFY `cv_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
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
