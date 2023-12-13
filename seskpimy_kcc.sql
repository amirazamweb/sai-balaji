-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 27, 2023 at 04:35 AM
-- Server version: 5.7.23-23
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seskpimy_kcc`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DOB` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `language` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `course` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `foccupation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fmobile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `femail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `moccupation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmobile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `memail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `house_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `street` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phouse_no` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pstreet` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pcity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pstate` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Highschools` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `intermediate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Graduation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CAT` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MAT` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `XAT` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `otherexam` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Declaration` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `name`, `DOB`, `nationality`, `picture`, `gender`, `category`, `language`, `course`, `email`, `mobile`, `fname`, `foccupation`, `fmobile`, `femail`, `mname`, `moccupation`, `mmobile`, `memail`, `house_no`, `street`, `city`, `state`, `phouse_no`, `pstreet`, `pcity`, `pstate`, `Highschools`, `intermediate`, `Graduation`, `CAT`, `MAT`, `XAT`, `otherexam`, `Declaration`, `created`) VALUES
(1, 'karuna', '2022-11-13', 'select', 'karuna.png', 'Female', 'Select', 'English', 'MBA +', 'karunaranpise@gmail.com', '9921159964', 'asdf', 'service', '99212124343', 'ajk@gmail.com', 'rajashri', 'house', '99924452', 'raj@gmail.com', '243', 'vcbcv', 'cvbc', 'vcx', 'xxx', 'xcx', 'srtgr', 's', '67', '89', '44', '78', '66', '66', '66', 'I certify that all of the information included in my application is true, complete and accurate. I understand that all\r\ncomponents of my application are subject to verification and I give my permission for any person or entity to\r\nprovide Mangalmay or its duly authorized agency with information relevant to such verification. If Mangalmay determines\r\nthat I have omitted or in any way misrepresented any facts, I may be subject to disciplinary action, up to and\r\nincluding expulsion from Mangalmay. Disputes of any kind during the admission process or the course/program are\r\nsubject to the jurisdiction of Noida courts only. I understand that all components of my application become the\r\nproperty of Mangalmay and that they will not be returned to me or duplicated for me. I understand that the application fee\r\nis not refundable. I also declare that, to the best of my knowledge, my health allows me to undertake the\r\nproposed study program.', '2022-11-14'),
(2, 'karuna', '2022-11-13', 'select', 'karuna.png', 'Female', 'Select', 'English', 'MBA +', 'karunaranpise@gmail.com', '9921159964', 'asdf', 'service', '99212124343', 'ajk@gmail.com', 'rajashri', 'house', '99924452', 'raj@gmail.com', '243', 'vcbcv', 'cvbc', 'vcx', 'xxx', 'xcx', 'srtgr', 's', '67', '89', '44', '78', '66', '66', '66', 'I certify that all of the information included in my application is true, complete and accurate. I understand that all\r\ncomponents of my application are subject to verification and I give my permission for any person or entity to\r\nprovide Mangalmay or its duly authorized agency with information relevant to such verification. If Mangalmay determines\r\nthat I have omitted or in any way misrepresented any facts, I may be subject to disciplinary action, up to and\r\nincluding expulsion from Mangalmay. Disputes of any kind during the admission process or the course/program are\r\nsubject to the jurisdiction of Noida courts only. I understand that all components of my application become the\r\nproperty of Mangalmay and that they will not be returned to me or duplicated for me. I understand that the application fee\r\nis not refundable. I also declare that, to the best of my knowledge, my health allows me to undertake the\r\nproposed study program.', '2022-11-14'),
(3, 'karuna', '2022-11-13', 'select', 'karuna.png', 'Female', 'Select', 'English', 'MBA +', 'karunaranpise@gmail.com', '9921159964', 'asdf', 'service', '99212124343', 'ajk@gmail.com', 'rajashri', 'house', '99924452', 'raj@gmail.com', '243', 'vcbcv', 'cvbc', 'vcx', 'xxx', 'xcx', 'srtgr', 's', '67', '89', '44', '78', '66', '66', '66', 'I certify that all of the information included in my application is true, complete and accurate. I understand that all\r\ncomponents of my application are subject to verification and I give my permission for any person or entity to\r\nprovide Mangalmay or its duly authorized agency with information relevant to such verification. If Mangalmay determines\r\nthat I have omitted or in any way misrepresented any facts, I may be subject to disciplinary action, up to and\r\nincluding expulsion from Mangalmay. Disputes of any kind during the admission process or the course/program are\r\nsubject to the jurisdiction of Noida courts only. I understand that all components of my application become the\r\nproperty of Mangalmay and that they will not be returned to me or duplicated for me. I understand that the application fee\r\nis not refundable. I also declare that, to the best of my knowledge, my health allows me to undertake the\r\nproposed study program.', '2022-11-14'),
(4, 'karuna', '2022-11-13', 'select', 'karuna.png', 'Female', 'Select', 'English', 'MBA +', 'karunaranpise@gmail.com', '9921159964', 'asdf', 'service', '99212124343', 'ajk@gmail.com', 'rajashri', 'house', '99924452', 'raj@gmail.com', '243', 'vcbcv', 'cvbc', 'vcx', 'xxx', 'xcx', 'srtgr', 's', '67', '89', '44', '78', '66', '66', '66', 'I certify that all of the information included in my application is true, complete and accurate. I understand that all\r\ncomponents of my application are subject to verification and I give my permission for any person or entity to\r\nprovide Mangalmay or its duly authorized agency with information relevant to such verification. If Mangalmay determines\r\nthat I have omitted or in any way misrepresented any facts, I may be subject to disciplinary action, up to and\r\nincluding expulsion from Mangalmay. Disputes of any kind during the admission process or the course/program are\r\nsubject to the jurisdiction of Noida courts only. I understand that all components of my application become the\r\nproperty of Mangalmay and that they will not be returned to me or duplicated for me. I understand that the application fee\r\nis not refundable. I also declare that, to the best of my knowledge, my health allows me to undertake the\r\nproposed study program.', '2022-11-14');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `username`, `password`) VALUES
(6, 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Appno` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fees` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category`, `Appno`, `fees`, `link`, `created`) VALUES
(1, 'Managment', '85858', 'No Fees', 'https://kccmbanoida.com/application/index.php', '2022-11-08 10:49:26'),
(2, 'Managment', '101', '500', 'https://kccmbanoida.com/application/index.php', '2022-11-09 02:08:14');

-- --------------------------------------------------------

--
-- Table structure for table `SOPforms`
--

CREATE TABLE `SOPforms` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `course` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Q1` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ans1` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Q2` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ans2` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Q3` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ans3` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Q4` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ans4` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `SOPforms`
--

INSERT INTO `SOPforms` (`id`, `name`, `email`, `mobile`, `course`, `state`, `city`, `Q1`, `ans1`, `Q2`, `ans2`, `Q3`, `ans3`, `Q4`, `ans4`, `created`) VALUES
(1, 'db.php', 'papa@gmail.com', '8521212131', 'PGDM', 'Maharashtra', 'Dighi (Pune)', ' Why do you want to pursue Management degree?(max 250 words only) *', 'max 250 words only\r\njhgvjvvuyvuymax 250 words only\r\njhgvjvvuyvuymax 250 words only\r\njhgvjvvuyvuymax 250 words only\r\njhgvjvvuyvuymax 250 words only\r\njhgvjvvuyvuymax 250 words only\r\njhgvjvvuyvuymax 250 words only\r\njhgvjvvuyvuymax 250 words only\r\njhgvjvvuyvuymax 250 words only\r\njhgvjvvuyvuymax 250 words only\r\njhgvjvvuyvuymax 250 words only\r\njhgvjvvuyvuymax 250 words only\r\njhgvjvvuyvuymax 250 words only\r\njhgvjvvuyvuymax 250 words only\r\njhgvjvvuyvuy', 'What are your post program objectives? (max 250 words only) *', 'max 250 words only\r\njhvjyvuyvu', ' Your experience on Case Analysis? (max 1000 words only)*', 'max 500 words only\r\nmhvjuyfv', 'Your experience on Case Analysis? (max 1000 words only)*', 'max 1000 words only\r\njhvutvytv6', '2021-02-17'),
(149, 'Mohit kapadia', 'mohitkapadia0o1@gmail.com', '09179732488', 'MBA', 'Madhya Pradesh', 'Burhanpur', ' Why do you want to pursue Management degree?(max 250 words only) *', 'To live life happily', 'What are your post program objectives? (max 250 words only) *', 'max 250 words only\r\nTo do job in MNCs and abroad', 'Your experience on Case Analysis? (max 1000 words only)*', 'Myself Mohit kapadia\r\nFrom :- Burhanpur Madhya Pradesh\r\nGraduation:- BBA from, mooljee jaitha college jalgaon\r\n10th:- CBSE 5.2CGPA\r\n12TH:- CBSE 67%\r\nCAT:- 30percentile', 'Your experience on Case Analysis? (max 1000 words only)*', '??\r\n', '2021-02-18'),
(154, 'appmanager', 'achaturvedi264@gmail.com', '9595656565', 'PGDM', 'Meghalaya', 'Shella Bazar', 'Why do you want to pursue Management degree?(max 250 words only) *', 'jhfjyfyjfjfj\r\n', 'What are your post program objectives? (max 250 words only) *', '\r\nhfjfjufujf', 'Summary of your profile -Who Am I? (It should demonstrate your skills and various achievements academic & non-academic? (max 500 words only)  *', '\r\nhdhdhydhy', 'Your experience on Case Analysis? (max 1000 words only)*', '\r\nhtyruyr', '2021-02-20'),
(155, 'Ankita Pandey', 'pandey1234ankita@gmail.com', '7255067255', 'MBA + IMMBANGLORE', 'Bihar', 'Patna', 'Why do you want to pursue Management degree?(max 250 words only) *', '\r\nI want to study in m.b.a I have completed my bachelor in commerce  course', 'What are your post program objectives? (max 250 words only) *', '\r\n', 'Summary of your profile -Who Am I? (It should demonstrate your skills and various achievements academic & non-academic? (max 500 words only)  *', 'My self Ankita Pandey from Patna Bihar still I am in b.com final year.\r\n', 'Your experience on Case Analysis? (max 1000 words only)*', '\r\n', '2021-03-23'),
(156, 'Ankita Pandey', 'pandey1234ankita@gmail.com', '7255067255', 'MBA + IMMBANGLORE', 'Bihar', 'Patna', 'Why do you want to pursue Management degree?(max 250 words only) *', '\r\nI want job in business administration', 'What are your post program objectives? (max 250 words only) *', 'Being a successful business girl\r\n', 'Summary of your profile -Who Am I? (It should demonstrate your skills and various achievements academic & non-academic? (max 500 words only)  *', '\r\nMyself Ankita Pandey I am from Patna Bihar. I am studying in b.com final year from r.p.s mahila College', 'Your experience on Case Analysis? (max 1000 words only)*', ' READ THE CASE STUDY AND QUESTIONS CAREFULLY. â€¢ ...then answer', '2021-03-23'),
(157, 'Ankita Pandey', 'pandey1234ankita@gmail.com', '7255067255', 'MBA + IMMBANGLORE', 'Bihar', 'Patna', 'Why do you want to pursue Management degree?(max 250 words only) *', '\r\nI want job in business administration', 'What are your post program objectives? (max 250 words only) *', 'Being a successful business girl ', 'Summary of your profile -Who Am I? (It should demonstrate your skills and various achievements academic & non-academic? (max 500 words only)  *', '\r\nMy self Ankita Pandey from Patna Bihar still I am final year b.com student from r.p.s mahila College..', 'Your experience on Case Analysis? (max 1000 words only)*', '\r\n READ THE CASE STUDY AND QUESTIONS CAREFULLY. â€¢ ...', '2021-03-23'),
(158, 'Abc', 'shivanipayala@gmail.com', '7838130942', 'MBA', 'Uttar Pradesh', 'Dadri', 'Why do you want to pursue Management degree?(max 250 words only) *', '\r\n', 'What are your post program objectives? (max 250 words only) *', '\r\n', 'Summary of your profile -Who Am I? (It should demonstrate your skills and various achievements academic & non-academic? (max 500 words only)  *', '\r\n', 'Your experience on Case Analysis? (max 1000 words only)*', '\r\n', '2021-04-07'),
(159, 'Manmohan Singh', 'manmohans989985@gmail.com', '9899852116', 'MBA +', 'Delhi', 'Delhi', 'Why do you want to pursue Management degree?(max 250 words only) *', 'Actually I have started a job in 2016 in logistic as a ground staff and and right now because of my qualification I am unable to enter the corporate office so I thought we have much time to pursue my study again and could complete my master and achieve my aim of enter the corporate.\r\n', 'What are your post program objectives? (max 250 words only) *', 'Currently I am working in logistic so I would like to choose logistic program. \r\n', 'Summary of your profile -Who Am I? (It should demonstrate your skills and various achievements academic & non-academic? (max 500 words only)  *', 'I am Manmohan and completed my 10+2 from UP Board and got 62% and after that started a job in logistic and as well as keep the study perused and completed the Graduation and got 48%.\r\n\r\n', 'Your experience on Case Analysis? (max 1000 words only)*', '\r\n', '2021-04-07'),
(160, 'Manmohan Singh', 'manmohans989985@gmail.com', '9899852116', 'MBA +', 'Delhi', 'Delhi', 'Why do you want to pursue Management degree?(max 250 words only) *', '\r\n', 'What are your post program objectives? (max 250 words only) *', '\r\n', 'Summary of your profile -Who Am I? (It should demonstrate your skills and various achievements academic & non-academic? (max 500 words only)  *', '\r\n', 'Your experience on Case Analysis? (max 1000 words only)*', '\r\n', '2021-04-07'),
(161, 'Shrasti thakre', 'shrasti13thakre@gmail.com', '7400571434', 'MBA', 'Madhya Pradesh', 'Chhindwara', 'Why do you want to pursue Management degree?(max 250 words only) *', '\r\nBecause I want to do a job in private sector..and also I want to develop my personality...in management degree, we will learn many things...how to manage the situation...I want work with intellectual mind and it develops in this degree..', 'What are your post program objectives? (max 250 words only) *', 'I want to do a job with multinational companies and serves to nation economy. If I will do this degree program, I will learn many things..and with it i will work for company for its betterment..', 'Summary of your profile -Who Am I? (It should demonstrate your skills and various achievements academic & non-academic? (max 500 words only)  *', '\r\nI am shrasti thakre. \r\nI have done my graduation with b.com degree with 58.18%. \r\nMy 10th standard percentage is 80.5% and 12th is 79%.\r\nI am also doing pgdca a computer post diploma course (final exam was done, waiting for result)..\r\nI am national football player..\r\n', 'Your experience on Case Analysis? (max 1000 words only)*', '\r\nI have no experience', '2021-04-09'),
(162, 'Shrasti Thakre', 'shrasti13thakre@gmail.com', '7400571434', 'MBA', 'Madhya Pradesh', 'Chhindwara', 'Why do you want to pursue Management degree?(max 250 words only) *', '\r\n', 'What are your post program objectives? (max 250 words only) *', '\r\n', 'Summary of your profile -Who Am I? (It should demonstrate your skills and various achievements academic & non-academic? (max 500 words only)  *', '\r\n', 'Your experience on Case Analysis? (max 1000 words only)*', '\r\n', '2021-04-09'),
(163, 'Kuldeep pathak', 'rishabpathak37634@gmail.com', '8318469792', 'MBA', 'Uttar Pradesh', 'Kanpur', 'Why do you want to pursue Management degree?(max 250 words only) *', '\r\n', 'What are your post program objectives? (max 250 words only) *', '\r\nYs', 'Summary of your profile -Who Am I? (It should demonstrate your skills and various achievements academic & non-academic? (max 500 words only)  *', '\r\nYs', 'Your experience on Case Analysis? (max 1000 words only)*', '\r\nNo', '2021-04-10'),
(164, 'Kanika', 'rastogikanika2@gmail.com', '7055785428', 'MBA +', 'Uttar Pradesh', 'Lucknow', 'Why do you want to pursue Management degree?(max 250 words only) *', '\r\n.', 'What are your post program objectives? (max 250 words only) *', '\r\n.', 'Summary of your profile -Who Am I? (It should demonstrate your skills and various achievements academic & non-academic? (max 500 words only)  *', '\r\n.', 'Your experience on Case Analysis? (max 1000 words only)*', '\r\n.', '2021-04-27'),
(165, 'Shivi', 'paylashivani@gmail.com', '7838130942', 'MBA + IMMBANGLORE', 'Dadra and Nagar Haveli', 'Amal', 'Why do you want to pursue Management degree?(max 250 words only) *', '\r\n', 'What are your post program objectives? (max 250 words only) *', '\r\n', 'Summary of your profile -Who Am I? (It should demonstrate your skills and various achievements academic & non-academic? (max 500 words only)  *', '\r\n', 'Your experience on Case Analysis? (max 1000 words only)*', '\r\n', '2021-05-15'),
(166, 'Sadhna', 'sadhna015yadv@gmail.com', '9354357397', 'MBA + IMMBANGLORE', 'Haryana', 'Gurgaon', 'Why do you want to pursue Management degree?(max 250 words only) *', '\r\nFor better placement', 'What are your post program objectives? (max 250 words only) *', '\r\nFinance banking', 'Summary of your profile -Who Am I? (It should demonstrate your skills and various achievements academic & non-academic? (max 500 words only)  *', '\r\nI m sadhna from gurugram. I have completed my schooling from dps rewari.my 10class per 60 and in 12class ....70. I have done my graduation from Delhi University 75+ agrregate', 'Your experience on Case Analysis? (max 1000 words only)*', '\r\n No', '2021-08-20'),
(167, 'check', 'saurabh.a.deshmukh10@gmail.com', '8793181634', 'MBA', 'Maharashtra', 'Pune', 'Why do you want to pursue Management degree?(max 250 words only) *', '\r\nyed', 'What are your post program objectives? (max 250 words only) *', '\r\ndsdf', 'Summary of your profile -Who Am I? (It should demonstrate your skills and various achievements academic & non-academic? (max 500 words only)  *', '\r\nsffff', 'Your experience on Case Analysis? (max 1000 words only)*', 'fsfsf\r\n', '2021-12-09');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `AlNo` varchar(50) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `name`, `email`, `mobile`, `AlNo`, `password`, `state`, `city`, `course`, `status`, `created`) VALUES
(1, 'karuna', 'karunaranpise@gmail.com', '9921159964', NULL, 'karuna@123', 'Maharashtra', 'Pune', 'MBA + IMMBANGLORE', 'aplication not submited', '2022-11-14 07:16:39'),
(2, 'JamesQuawl', 'gsahrum0211@outlook.com', '83951943831', NULL, 'T#852xntkfU', '', '', 'MBA +', 'aplication not submited', '2022-11-23 20:36:15'),
(3, 'Mohd Amir', 'mohd.amirkhan1569@gmail.com', '9125887919', NULL, 'm9415271745', 'Uttar Pradesh', 'Lucknow', 'MBA', 'aplication not submited', '2022-12-15 05:26:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AlNo` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_email`, `mobile`, `AlNo`, `user_password`, `state`, `city`, `course`, `status`) VALUES
(13, 'admin@gmail.com', 'achaturvedi264@gmail.com', '8871411497', '9+5646546', '$2y$10$hkVY4ijxKD21t.B/FMvDxu7mZeaU9PoFzQcSwT6i5rvuYr9IZWn.G', 'Madhya Pradesh', 'Dhar', 'PGDM (General)', 'Application submited'),
(14, 'alam hussain', 'mail.alamhussain@gmail.com', '9975324074', NULL, '$2y$10$yIvL2JuyraGWoIsgrZhLG.jJXc4t8MKCmBFmlmwyz5VeZn5UTPF3O', 'Arunachal Pradesh', 'Changlang', 'MBA', 'aplication not submited'),
(15, 'admin@gmail.com', 'k@gmail.com', '8871411497', NULL, '123456', 'Madhya Pradesh', 'Jabalpur', 'PGDM (General)', 'aplication not submited');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `SOPforms`
--
ALTER TABLE `SOPforms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `SOPforms`
--
ALTER TABLE `SOPforms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
