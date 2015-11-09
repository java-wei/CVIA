-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2015 at 03:32 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cvia`
--

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE IF NOT EXISTS `cv` (
  `cv_id` int(10) NOT NULL,
  `cv_job_id` int(11) NOT NULL,
  `cv_keyword` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `cv_name` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `cv_phone` varchar(32) COLLATE latin1_general_ci DEFAULT NULL,
  `cv_email` varchar(64) COLLATE latin1_general_ci DEFAULT NULL,
  `cv_description` longtext COLLATE latin1_general_ci NOT NULL,
  `cv_grade` float NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Store the CV information';

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`cv_id`, `cv_job_id`, `cv_keyword`, `cv_name`, `cv_phone`, `cv_email`, `cv_description`, `cv_grade`) VALUES
(1, 1, 'iOS developer', 'Wen Yiran', '98765432', 'yiran@sina.com', 'Wen Yiran                                             (+65) 9891 1715            aieryiran@gmail.com\nEducation\nUniversity            : National University of Singapore (NUS)\nGraduating Year  : 2016\nMajor                    : Computer Science\nFocus Areas        : Software Engineering; \n                                Interactive Media;\n\nRelevant Project Experiences\nâ€¢ Book-keeping mobile-based web app                                 MySQL, HTML, CSS, Javascript, PHP \n    - a responsive web app for mobile users to do book-keeping\nâ€¢ 2-player online game                                                            HTML, CSS, Javascript, PHP, node.js\n    - a web app which allows users to play XOXO games with nearby friends (Google Maps included) \nâ€¢ HR management app on iPhone                                                                                   Objective-C\n    - an iOS app which support scheduling, job applying and chatting functionalities\n    - this app won the 1st prize in 5th NUS School of Computing Term Project Showcase\nâ€¢ Tilt game on iPad                                                                                                           Objective-C\n    - an iOS game which is similar to Tilt to Live (play should try to survive from the auto-generated enemies)\n    - this app won the 1st prize in 4th NUS School of Computing Term Project Showcase\nâ€¢ Todo-list desktop software                                                                                                        Java\n    - a desktop application that support scheduling functionality\nâ€¢ Self-learning anatomy application                                                                                             C++\n    - a desktop application that allows students to read articles and images about anatomy and take quizzes\n\nIntern Experiences\niOS developer & UI designer                                                                 @Talenox, Sep - Nov, 2014\n\nâ€¢ Collaborated with three fellows\nâ€¢ Implemented an app supporting scheduling, job applying and chatting\nâ€¢ Designed the UI/UX\n\nStudent Intern                                                                   @Hangzhou TV Station, May - July, 2013\nâ€¢ Get hands-on experiences in working in real-world ofï¬ce and communicating with various \n\npeople from diverse background\n\nâ€¢ Assisted in doing topic research, information collection and interview\nâ€¢ Assisted in out-door shooting and Chinese-English translation\n\nAcademic & Other Awards\nâ€¢ 1st place in 5th NUS School of Computing Term Project Showcase (STePS)                 Nov, 2014\nâ€¢ 1st place in 4th NUS STePS                                                                                              Apr, 2014\nâ€¢ 1st place in Sequence Arts in Extravaganza 2014                                                           Aug, 2014\nâ€¢ 1st place in Sequence Arts in Extravaganza 2013                                                           Aug, 2013\n\nCo-Curricular Activities\nâ€¢ Publicity director of NUS Chinese Society Spring Festival 2015                                      Sep, 2014\nâ€¢ Exco member of NUS Comic and Animation Society                                             Sep, 2011 - Now\nâ€¢ Logo designer of Paciï¬c Graphics Conference 2013                                                       Dec, 2012\nâ€¢ Volunteer in Ministry of Education (MOE) GIVE program                                       Sep - Nov, 2011 \nâ€¢ Publicity director, president of schoolâ€™s literary society & class monitor                        2007 - 2011\n\nTechnical Skills\nLanguages                        : Objective-C, Java, C++, Python, C;\nWeb Related Languages : HTML, CSS, Javascript, PHP, mySQL;\nSoftwares                         : Xcode, Eclipse, Adobe Photoshop, Autodesk MAYA, Unity,\n                                            Qt Creator, SourceTree, Adobe Premiere Pro,\n                                            Dreamweaver, Microsoft Ofï¬ce, Pages, Keynote;\nOperating Systems          : Windows 7, Windows 8, Mac OS X;\n\nNontechnical Skills\nLanguages Spoken          : English, Mandarin, Japanese;\nStrengths                          : Drawing, Playing the piano, Writing, Singing;\nOther Skills                       : Teamwork skills, Interpersonal skills, \n                                             Leadership experiences, Public speaking experiences;\n\nCourse Work\nSoftware Engineering: Software Engineering on Modern Application Platformsï¼›\n                                       Web Programming and Applicationsï¼›\n                                       Software Engineering;\n                                       Introduction to Database Systems;\n                                       Introduction to Information and System Security;\n                                       Computer Networking;\nInteractive Media:        Human-Computer Interaction (HCI);\n                                      Phenomena and Theories of HCI;   \n                                      User Interface Developmentï¼›         \n                                      Game Development;\n                                      3D Modelling and Animation;\nOthers:                         Sound and Music Computing;\n                                      Digital Media Production;\n                                      Principles of Economics;\n\n', 0),
(44, 8, '', 'Praveen Deorani ', '98632702', 'deorani@gmail.com', 'Praveen Deorani \n\n \n\n \n\nResearch Assistant \nElectrical and Computer Engineering \nNational University of Singapore \n \nKEY QUALIFICATIONS \n\n             E-mail: deorani@gmail.com; elepd@nus.edu.sg \n \n \n\nAddress: Blk 12, #07-01, Jalan Lempeng \nPhone: +65 98632702  \n\n          \n\nâ€¢  Strong programming skills and analytic capability \nâ€¢  Expertise in statistical and mathematical modeling \nâ€¢  Skilled in machine learning and data mining \n\nCOMPUTER SKILLS \n\nâ€¢  Programming languages: Python, R, Java, Ruby, Common Lisp, C/C++ \nâ€¢  Software tools: Matlab, Octave, Origin, LabVIEW, AutoCAD, MS Office \nâ€¢  Expertise in Unix based systems and shell programming \n\nEDUCATION \n\nâ€¢  PhD in Electrical and Computer Engineering  \n\n \nNational University of Singapore (Jan 2015) \nTitle:  â€œMagnetization dynamics in spin orbit coupled systemsâ€ \n\n \n\n \n\nâ€¢  M.Sc. (Integrated) in Physics (July 2010) \n\nIndian Institute of Technology, Kanpur \n\nâ€¢ \n\nIndependent (coursework completed in MOOC) \n\n \n\n \n\n \n\n                    1 â€“ Learning from data, EDX (Caltech.) \n                    2 â€“ Statistical inference, Coursera (John Hopkins University) \n                    3 â€“ Machine learning, Coursera (Stanford University) \n                    4 â€“ R programming, Coursera (John Hopkins University) \n\n \n\n \n\nGPA: 4.58/5 \n\n GPA: 7.3/10 \n\nWORK EXPERIENCE \nâ€¢  Research Scholar \n\n \n\n \n\n \n\n \n\n      Jan 2011 â€“ present \n\nSpin and Energy Laboratory, National University of Singapore \n\n Developed simulations and computational methods for various research projects \n Designed and conducted nanofabrication experiments for spintronic devices \n Mentored junior students and taught undergraduate modules \n\nâ€¢  Research Assistant \n\n \n\n \n\n \n\n \n\n      Aug 2009 â€“ Oct 2010 \n\nLow Temperature Physics Laboratory, Indian Institute of Technology, Kanpur \n\n Developed Internet based labs \n Researched spin injection into metals \n\nâ€¢  Summer Internship \n\n      June 2008 â€“ July 2008 \nLaboratory of Photonics and Interfaces, Ecole Polytechnique de Lausanne, Switzerland \n Researched electro-catalytic activity of a Ruthenium complex in a PEFC electrode \n\n \n\n \n\n \n\n \n\nEXPERIMENTAL SKILLS \n\nâ€¢  Nanofabrication skills: photolithography, Ion-milling, Deposition \nâ€¢  Electrical transport measurements \n\nOTHER SCHOLASTIC ACHIEVEMENTS  \n\nâ€¢  Selected for 6 presentations in international conferences from 2012 â€“ 2014 (oral and poster) \nâ€¢  Recipient of NUS research scholarship (2011-2014) \nâ€¢  Recipient of CBSE Merit scholarship (2005-2010) \nâ€¢  Secured all India rank 506 in IIT JEE 2005 (top 0.1 %) \n\nEXTRA CURRICULARS AND RESPONSIBILITIES \n\nâ€¢  Member of the badminton team of National University of Singapore (NUS)  \nâ€¢  Member of the badminton team of Indian Institute of Technology Kanpur and captain during the \n\nperiod of Mar 08 â€“ Mar 09 \n\nâ€¢  Festival coordinator of  â€˜Joshâ€™ 09, the annual IIT Kanpur sports festival \nâ€¢  General Secretary of Games and Sports Council, IIT Kanpur (Oct 08 - Dec 08) \n\nPUBLICATIONS \n\nâ€¢  Praveen  Deorani,  Hyunsoo  Yang,  â€œRole  of  spin  mixing  conductance  in  spin  pumping: \nEnhancement of spin pumping efficiency in Ta/Cu/Py structuresâ€, Applied Physics Letters, 2013 \nâ€¢  Praveen Deorani, JH Kwon, Hyunsoo Yang, â€œNonreciprocity engineering in magnetostatic spin \n\nwavesâ€, Current Applied Physics, 2014  \n\nâ€¢  Praveen Deorani, Jaesung Son, Karan Banerjee, Nikesh Koirala, Matthew Brahlek, Seongshik \nOh,  Hyunsoo  Yang,  â€œObservation  of  inverse  spin  Hall  effect  in  bismuth  selenideâ€,  Physical \nReview B, 2014 \n\nâ€¢  SS Mukherjee, Praveen Deorani, JH Kwon, Hyunsoo Yang, â€œAttenuation characteristics of spin-\n\nâ€¢ \n\npumping signal due to traveling spin wavesâ€, Physical Review B, 2012 \nJH Kwon, SS Mukherjee, Praveen Deorani, M Hayashi, and Hyunsoo Yang, â€œCharacterization \nof  magnetostatic  surface  spin  waves  in  magnetic  thin  films:  evaluation  for  microelectronic \napplicationsâ€, Applied Physics A, 2013 \n\nâ€¢  Xuepeng  Qiu,  Kulothungasagaran  Narayanapillai,  Yang  Wu,  Praveen  Deorani,  Xinmao  Yin, \nAndrivo Rusydi, Kyung-Jin Lee, Hyun-Woo Lee, Hyunsoo Yang,  â€œSpin-orbit torque engineering \nvia oxygen manipulationâ€, Nature nanotechnology, 2015 \n\nâ€¢  Xuepeng  Qiu, Praveen  Deorani, Kulothungasagaran Narayanapillai, Ki-Seung  Lee,  Kyung-Jin \nLee,  Hyun-Woo  Lee,  and  Hyunsoo  Yang  ,  â€œAngular  and  temperature  dependence  of  current \ninduced spin-orbit effective fields in Ta/CoFeB/MgO nanowiresâ€, Scientific Reports, 2014 \n\nâ€¢  Li Ming Loong, Jae Hyun Kwon, Praveen Deorani, Chris Nga Tung Yu, Atsufumi Hirohata, and \nHyunsoo  Yang,  â€œInvestigation  of  the  temperature-dependence  of  ferromagnetic  resonance  and \nspin waves in Co2FeAl0.5Si0.5â€, Applied Physics Letters, 2014 \n\nâ€¢  Yi  Wang,  Praveen  Deorani,  Xuepeng  Qiu,  JH  Kwon,  and  Hyunsoo  Yang,  â€œDetermination  of \n\nintrinsic spin Hall angle in Ptâ€, Applied Physics Letters, 2014 \n\nâ€¢  Li Ming Loong, Xuepeng Qiu, Zhi Peng Neo, Praveen Deorani, Yang Wu, Charanjit S. Bhatia, \nMark  Saeys,  and  Hyunsoo  Yang,  â€œStrain-enhanced  tunneling  magnetoresistance  in  MgO \nmagnetic tunnel junctionsâ€, Scientific Reports, 2014 \n\n \n\n', 0),
(45, 1, 'Java, statistical and mathematical modeling', 'Praveen Deorani ', '98632702', 'deorani@gmail.com', 'Praveen Deorani \n\n \n\n \n\nResearch Assistant \nElectrical and Computer Engineering \nNational University of Singapore \n \nKEY QUALIFICATIONS \n\n             E-mail: deorani@gmail.com; elepd@nus.edu.sg \n \n \n\nAddress: Blk 12, #07-01, Jalan Lempeng \nPhone: +65 98632702  \n\n          \n\nâ€¢  Strong programming skills and analytic capability \nâ€¢  Expertise in statistical and mathematical modeling \nâ€¢  Skilled in machine learning and data mining \n\nCOMPUTER SKILLS \n\nâ€¢  Programming languages: Python, R, Java, Ruby, Common Lisp, C/C++ \nâ€¢  Software tools: Matlab, Octave, Origin, LabVIEW, AutoCAD, MS Office \nâ€¢  Expertise in Unix based systems and shell programming \n\nEDUCATION \n\nâ€¢  PhD in Electrical and Computer Engineering  \n\n \nNational University of Singapore (Jan 2015) \nTitle:  â€œMagnetization dynamics in spin orbit coupled systemsâ€ \n\n \n\n \n\nâ€¢  M.Sc. (Integrated) in Physics (July 2010) \n\nIndian Institute of Technology, Kanpur \n\nâ€¢ \n\nIndependent (coursework completed in MOOC) \n\n \n\n \n\n \n\n                    1 â€“ Learning from data, EDX (Caltech.) \n                    2 â€“ Statistical inference, Coursera (John Hopkins University) \n                    3 â€“ Machine learning, Coursera (Stanford University) \n                    4 â€“ R programming, Coursera (John Hopkins University) \n\n \n\n \n\nGPA: 4.58/5 \n\n GPA: 7.3/10 \n\nWORK EXPERIENCE \nâ€¢  Research Scholar \n\n \n\n \n\n \n\n \n\n      Jan 2011 â€“ present \n\nSpin and Energy Laboratory, National University of Singapore \n\n Developed simulations and computational methods for various research projects \n Designed and conducted nanofabrication experiments for spintronic devices \n Mentored junior students and taught undergraduate modules \n\nâ€¢  Research Assistant \n\n \n\n \n\n \n\n \n\n      Aug 2009 â€“ Oct 2010 \n\nLow Temperature Physics Laboratory, Indian Institute of Technology, Kanpur \n\n Developed Internet based labs \n Researched spin injection into metals \n\nâ€¢  Summer Internship \n\n      June 2008 â€“ July 2008 \nLaboratory of Photonics and Interfaces, Ecole Polytechnique de Lausanne, Switzerland \n Researched electro-catalytic activity of a Ruthenium complex in a PEFC electrode \n\n \n\n \n\n \n\n \n\nEXPERIMENTAL SKILLS \n\nâ€¢  Nanofabrication skills: photolithography, Ion-milling, Deposition \nâ€¢  Electrical transport measurements \n\nOTHER SCHOLASTIC ACHIEVEMENTS  \n\nâ€¢  Selected for 6 presentations in international conferences from 2012 â€“ 2014 (oral and poster) \nâ€¢  Recipient of NUS research scholarship (2011-2014) \nâ€¢  Recipient of CBSE Merit scholarship (2005-2010) \nâ€¢  Secured all India rank 506 in IIT JEE 2005 (top 0.1 %) \n\nEXTRA CURRICULARS AND RESPONSIBILITIES \n\nâ€¢  Member of the badminton team of National University of Singapore (NUS)  \nâ€¢  Member of the badminton team of Indian Institute of Technology Kanpur and captain during the \n\nperiod of Mar 08 â€“ Mar 09 \n\nâ€¢  Festival coordinator of  â€˜Joshâ€™ 09, the annual IIT Kanpur sports festival \nâ€¢  General Secretary of Games and Sports Council, IIT Kanpur (Oct 08 - Dec 08) \n\nPUBLICATIONS \n\nâ€¢  Praveen  Deorani,  Hyunsoo  Yang,  â€œRole  of  spin  mixing  conductance  in  spin  pumping: \nEnhancement of spin pumping efficiency in Ta/Cu/Py structuresâ€, Applied Physics Letters, 2013 \nâ€¢  Praveen Deorani, JH Kwon, Hyunsoo Yang, â€œNonreciprocity engineering in magnetostatic spin \n\nwavesâ€, Current Applied Physics, 2014  \n\nâ€¢  Praveen Deorani, Jaesung Son, Karan Banerjee, Nikesh Koirala, Matthew Brahlek, Seongshik \nOh,  Hyunsoo  Yang,  â€œObservation  of  inverse  spin  Hall  effect  in  bismuth  selenideâ€,  Physical \nReview B, 2014 \n\nâ€¢  SS Mukherjee, Praveen Deorani, JH Kwon, Hyunsoo Yang, â€œAttenuation characteristics of spin-\n\nâ€¢ \n\npumping signal due to traveling spin wavesâ€, Physical Review B, 2012 \nJH Kwon, SS Mukherjee, Praveen Deorani, M Hayashi, and Hyunsoo Yang, â€œCharacterization \nof  magnetostatic  surface  spin  waves  in  magnetic  thin  films:  evaluation  for  microelectronic \napplicationsâ€, Applied Physics A, 2013 \n\nâ€¢  Xuepeng  Qiu,  Kulothungasagaran  Narayanapillai,  Yang  Wu,  Praveen  Deorani,  Xinmao  Yin, \nAndrivo Rusydi, Kyung-Jin Lee, Hyun-Woo Lee, Hyunsoo Yang,  â€œSpin-orbit torque engineering \nvia oxygen manipulationâ€, Nature nanotechnology, 2015 \n\nâ€¢  Xuepeng  Qiu, Praveen  Deorani, Kulothungasagaran Narayanapillai, Ki-Seung  Lee,  Kyung-Jin \nLee,  Hyun-Woo  Lee,  and  Hyunsoo  Yang  ,  â€œAngular  and  temperature  dependence  of  current \ninduced spin-orbit effective fields in Ta/CoFeB/MgO nanowiresâ€, Scientific Reports, 2014 \n\nâ€¢  Li Ming Loong, Jae Hyun Kwon, Praveen Deorani, Chris Nga Tung Yu, Atsufumi Hirohata, and \nHyunsoo  Yang,  â€œInvestigation  of  the  temperature-dependence  of  ferromagnetic  resonance  and \nspin waves in Co2FeAl0.5Si0.5â€, Applied Physics Letters, 2014 \n\nâ€¢  Yi  Wang,  Praveen  Deorani,  Xuepeng  Qiu,  JH  Kwon,  and  Hyunsoo  Yang,  â€œDetermination  of \n\nintrinsic spin Hall angle in Ptâ€, Applied Physics Letters, 2014 \n\nâ€¢  Li Ming Loong, Xuepeng Qiu, Zhi Peng Neo, Praveen Deorani, Yang Wu, Charanjit S. Bhatia, \nMark  Saeys,  and  Hyunsoo  Yang,  â€œStrain-enhanced  tunneling  magnetoresistance  in  MgO \nmagnetic tunnel junctionsâ€, Scientific Reports, 2014 \n\n \n\n', 10.53);

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE IF NOT EXISTS `job` (
  `job_id` int(10) NOT NULL,
  `owner_id` int(10) NOT NULL,
  `job_title` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `job_description` varchar(2550) COLLATE latin1_general_ci NOT NULL,
  `job_keyword` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `keyword_importance` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `job_company` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `job_duedate` date DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Store the job information';

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `owner_id`, `job_title`, `job_description`, `job_keyword`, `keyword_importance`, `job_company`, `job_duedate`) VALUES
(1, 1, 'Web Designer', 'Passionate in Mobile Applications, Mobile OS and Web technologies. Technical knowledge in Objective C, C++, and/or HTML5 Javascript, Python. Experience with web service integration (JSON, XML, SOAP, REST) will be added advantage. Team Player and able to work independently with little supervision, we love go­getters! Good communication skills, working attitude and interpersonal skills.', 'Market Clearing Engine,market analysis,First class,Operations Research,Computer Science, VB.NET,Java,C#,Oracle SQL,statistical and mathematical modeling', '1,2,3,1,2,3,1,2,3,1', 'Garena', NULL),
(2, 1, 'Web Developer', 'Common entry-level job titles in Web development include Web designer, webmaster and graphic artist. Increased education and work experience can lead to advanced positions such as senior Web developer, designer and software designer. The U.S. Bureau of Labor Statistics (BLS) forecast that careers in Web development would grow by 20% from 2012-2022, which was faster than average (www.bls.gov). Web developers with programming and multimedia expertise should have the best job prospects. As of May 2013, the mean annual wage for Web developers was $67,540, according to the BLS.', 'Web developer,PHP,HTML,CSS', '1,2,2,1', 'National University of Singapore', NULL),
(3, 2, 'iOS developer', 'The work:\r\n\r\nWork with a small team of top-tier developers who are designing great user experiences and building truly great applications for iOS devices\r\n\r\nParticipate in scrums consisting of cross functional teams, both software and hardware\r\n\r\nEnsure that features are being delivered efficiently and on-time\r\n\r\nIn addition to code contribution, you will also participate in architectural review and design', 'iOS,Apple', '2,2', 'Vincense', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `memberID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `active` varchar(255) NOT NULL,
  `resetToken` varchar(255) DEFAULT NULL,
  `resetComplete` varchar(3) DEFAULT 'No'
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`memberID`, `username`, `password`, `email`, `active`, `resetToken`, `resetComplete`) VALUES
(11, 'aieryiran', '$2y$10$hSipVR0tyLzZSHSsoAXPPepYmZpTX9wNSh7JkBAV9Itfo2I1gvbNO', 'aieryiran@gmail.com', 'Yes', NULL, 'No'),
(1, 'cyj', '$2y$10$DXeIMM1PLEnJNmou1Iuof.lJx3TD57V5u93WY3G9Y/yFBUDnj2qxa', 'chengyingjie29@gmail.com', 'Yes', NULL, 'No');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`cv_id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`job_id`),
  ADD KEY `owner_id` (`owner_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`memberID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cv`
--
ALTER TABLE `cv`
  MODIFY `cv_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `job_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `memberID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
