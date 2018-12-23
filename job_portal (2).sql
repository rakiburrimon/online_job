-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2018 at 07:45 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) DEFAULT NULL,
  `admin_email` varchar(30) DEFAULT NULL,
  `admin_contact` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_contact`, `password`) VALUES
(1, 'Rimon', 'rakiburrahmanrimon@gmail.com', '01682725304', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `employer_id` int(20) NOT NULL,
  `company_name` varchar(20) NOT NULL,
  `contact_person_name` varchar(30) NOT NULL,
  `contact_person_email` varchar(30) NOT NULL,
  `employer_contact` varchar(30) NOT NULL,
  `company_description` varchar(300) NOT NULL,
  `employer_password` varchar(50) NOT NULL,
  `employer_status` varchar(10) NOT NULL,
  `employer_type` varchar(10) NOT NULL,
  `business_description` varchar(400) NOT NULL,
  `company_location` varchar(100) NOT NULL,
  `industry_type` varchar(100) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`employer_id`, `company_name`, `contact_person_name`, `contact_person_email`, `employer_contact`, `company_description`, `employer_password`, `employer_status`, `employer_type`, `business_description`, `company_location`, `industry_type`, `logo`) VALUES
(1, 'Caveman', 'Rimon', 'rakiburrimon@gmail.com', '01682725304', 'aaaaaa', 'aA123456', 'active', 'Special', 'aaaaaaaaaaaaggg', 'Dhaka', 'Information Technology (IT)', 'caveman.png'),
(7, 'IUBAT', 'Dr Utpal Kanti Das', 'ukd@iubat.edu', '01999999999999', 'sdefemfhbefkhbefkhbef', 'Iubat123', 'active', 'General', 'gvfhjdhbdjhbfedh', 'sedydgeybyebfhef', 'Education', 'Caaefaepture.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `experience_id` int(70) NOT NULL,
  `experience_duration` varchar(30) NOT NULL,
  `experience_organization` varchar(30) NOT NULL,
  `job_seeker_id` int(20) NOT NULL,
  `designation` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`experience_id`, `experience_duration`, `experience_organization`, `job_seeker_id`, `designation`) VALUES
(1, '4 Months', 'Caveman', 3, 'Intern Dev'),
(4, '3 years', 'Sailor Info Tech', 4, 'Developer'),
(5, '4 Months', 'Caveman', 1, 'Developer');

-- --------------------------------------------------------

--
-- Table structure for table `interview`
--

CREATE TABLE `interview` (
  `interview_id` int(50) NOT NULL,
  `interview_date` datetime DEFAULT NULL,
  `interview_place` varchar(200) DEFAULT NULL,
  `job_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interview`
--

INSERT INTO `interview` (`interview_id`, `interview_date`, `interview_place`, `job_id`) VALUES
(1, '2018-12-24 00:00:00', 'Dhaka', 1),
(2, '2018-12-22 00:00:00', 'Dhaka s', 2),
(3, '2018-12-28 00:00:00', 'Dhaka', 6),
(6, '0000-00-00 00:00:00', '', 9),
(7, '2018-12-21 00:00:00', 'Dhaka', 10),
(8, '2018-12-26 00:00:00', 'Dhaka', 11),
(9, '0000-00-00 00:00:00', '', 12),
(10, '0000-00-00 00:00:00', '', 13),
(11, '0000-00-00 00:00:00', '', 10);

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `job_id` int(20) NOT NULL,
  `job_title` varchar(50) NOT NULL,
  `job_context` varchar(300) NOT NULL,
  `job_responsibilities` varchar(400) NOT NULL,
  `educaqtional_requirement` varchar(100) NOT NULL,
  `job_experience_required` varchar(100) NOT NULL,
  `job_status` varchar(30) NOT NULL,
  `job_type` varchar(20) NOT NULL,
  `job_location` varchar(30) NOT NULL,
  `job_salary` varchar(30) NOT NULL,
  `job_application_deadline` varchar(30) NOT NULL,
  `employer_id` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `job_title`, `job_context`, `job_responsibilities`, `educaqtional_requirement`, `job_experience_required`, `job_status`, `job_type`, `job_location`, `job_salary`, `job_application_deadline`, `employer_id`) VALUES
(1, 'Trainee Software Engineer (Japan)', 'aaaaaaa', 'aaaaaaaaaaaa', 'aaaaaaaa', 'aaaaaaaa', '', 'General', 'Dhaka', 'Negotiable', '2018-12-24', 1),
(2, 'fthcfh', 'hc', 'vxdxd', 'vxdvx', 'xdvdxvv', '', 'Special', 'xvdxdv', 'vxvdx', '2018-11-13', 1),
(5, '', '', '', '', '', '', 'General', '', '', '2018-12-18', 1),
(6, 'KK', 'xfggdfg', 'cbcfcfb', 'bcfbcfb', 'b cfbcfb', '', 'General', 'b fbcfb', 'Negotiable', '2018-12-22', 1),
(7, 'Gamerg', 'cgdhgrd', '', '', '', 'Active', 'General', 'dgrrgrg', 'Negotiable', '2018-12-21', 7),
(8, 'drgdr', '', '', '', '', 'Active', '', '', '', '2018-12-29', 7),
(9, 'Trainee Software Engineer (Japan)', '', '', '', '', 'Active', '', '', '', '2018-12-28', 7),
(10, 'drgdr', '', '', '', '', 'Active', '', '', '', '2018-12-22', 7),
(11, 'Gamerg', '', '', '', '', 'Active', '', '', '', '2018-12-27', 1),
(12, 'edsefeefsefsef', '', '', '', '', 'Active', '', '', 'Negotiable', '2018-12-24', 1),
(13, 'KK', 'ftfthtthtr', '', '', '', 'Active', '', '', '', '2018-12-28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `job_seeker`
--

CREATE TABLE `job_seeker` (
  `job_seeker_id` int(20) NOT NULL,
  `job_seeker_name` varchar(30) NOT NULL,
  `job_seeker_email` varchar(30) NOT NULL,
  `job_seeker_contact` varchar(30) NOT NULL,
  `job_seeker_address` varchar(100) DEFAULT NULL,
  `job_seeker_career_objective` varchar(500) DEFAULT NULL,
  `job_seeker_job_profile` varchar(500) DEFAULT NULL,
  `job_seeker_gender` varchar(10) DEFAULT NULL,
  `image` varchar(300) DEFAULT NULL,
  `job_seeker_password` varchar(30) NOT NULL,
  `job_seeker_status` varchar(10) NOT NULL,
  `job_seeker_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_seeker`
--

INSERT INTO `job_seeker` (`job_seeker_id`, `job_seeker_name`, `job_seeker_email`, `job_seeker_contact`, `job_seeker_address`, `job_seeker_career_objective`, `job_seeker_job_profile`, `job_seeker_gender`, `image`, `job_seeker_password`, `job_seeker_status`, `job_seeker_type`) VALUES
(1, 'Fatema Hossain', 'fatemahossain95@gmail.com', '01954460889', 'Dhaka', 'aaaaaaaaaaaaaaaaaaaaaaaauhiubkjbkjb', 'Aaaaaaaaaaaaaaaaaaaaaaaaaa', 'Female', '920719_156286337874433_1175018250_o.jpg', 'Sweety12', 'Active', 'Special'),
(3, 'Md. Rakibur Rahman', 'rakiburrimon@gmail.com', '01682725304', 'Gazipur, Dhaka', 'ffvdvr', 'drgdrgdrgrgrgrg', 'Male', 'A514F9FC-EA11-4F00-A6BE-87ED4D2740B1.jpg', 'Rimon505', 'Active', 'General'),
(4, 'Ashiqur Rahman', 'arrobin02@gmail.com', '0000000000', '', '', '', 'Male', '44065466_2131745706857885_3368425554695946240_n.jpg', 'Robin123', 'Disable', 'Special');

-- --------------------------------------------------------

--
-- Table structure for table `job_seeking_interview`
--

CREATE TABLE `job_seeking_interview` (
  `job_seeking_interview_id` int(80) NOT NULL,
  `job_seeker_id` int(20) NOT NULL,
  `interview_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_seeking_interview`
--

INSERT INTO `job_seeking_interview` (`job_seeking_interview_id`, `job_seeker_id`, `interview_id`) VALUES
(1, 1, 1),
(2, 3, 2),
(3, 1, 7),
(4, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `online_application`
--

CREATE TABLE `online_application` (
  `online_application_id` int(70) NOT NULL,
  `job_id` int(20) NOT NULL,
  `job_seeker_id` int(20) NOT NULL,
  `application_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `online_application`
--

INSERT INTO `online_application` (`online_application_id`, `job_id`, `job_seeker_id`, `application_time`) VALUES
(15, 1, 1, '2018-12-21'),
(16, 10, 1, '0000-00-00'),
(17, 1, 3, '0000-00-00'),
(18, 1, 4, '0000-00-00'),
(19, 9, 3, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE `qualification` (
  `qualification_id` int(70) NOT NULL,
  `qualification_name` varchar(30) NOT NULL,
  `qualification_result` varchar(20) NOT NULL,
  `qualification_institution` varchar(30) NOT NULL,
  `job_seeker_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qualification`
--

INSERT INTO `qualification` (`qualification_id`, `qualification_name`, `qualification_result`, `qualification_institution`, `job_seeker_id`) VALUES
(1, 'BSc in CSE', '3.46', 'IUBAT', 1),
(2, 'BSc in CSE', '3.4', 'IUBAT', 3),
(3, 'BSc in CSE', '3.48', 'IUBAT', 4);

-- --------------------------------------------------------

--
-- Table structure for table `reference`
--

CREATE TABLE `reference` (
  `reference_id` int(40) NOT NULL,
  `name` varchar(35) NOT NULL,
  `designation` varchar(30) DEFAULT NULL,
  `company` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `reference_type` varchar(40) NOT NULL,
  `job_seeker_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reference`
--

INSERT INTO `reference` (`reference_id`, `name`, `designation`, `company`, `address`, `email`, `phone`, `reference_type`, `job_seeker_id`) VALUES
(1, 'Md. Rakibur Rahman', 'Developer', 'Caveman', 'Dhaka', 'rakiburrimon@gmail.com', '01682725304', 'Family Friend', 1),
(2, 'Fatema Hossain', 'Developer', 'Caveman', 'Dhaka', 'fatemahossain95@gmail.com', '01954460889', 'Family Friend', 3),
(3, 'Md. Rakibur Rahman', 'Developer', 'Caveman', 'Gazipur', 'rakiburrimon@gmail.com', '01682725304', 'Family Friend', 3);

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `skill_id` int(70) NOT NULL,
  `skill_name` varchar(70) NOT NULL,
  `skill_description` varchar(200) NOT NULL,
  `job_seeker_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`skill_id`, `skill_name`, `skill_description`, `job_seeker_id`) VALUES
(1, 'Apache Hadoop', 'Dta Science and Cloud computing', 1),
(2, 'Laravel', 'PHP Framework', 3),
(3, 'PHP', 'sssssssssssssssssssssssss', 3),
(5, 'Windows Form Application', 'Desktop app builder', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_name` (`admin_name`),
  ADD UNIQUE KEY `admin_email` (`admin_email`);

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`employer_id`),
  ADD UNIQUE KEY `company_name` (`company_name`),
  ADD UNIQUE KEY `contact_person_email` (`contact_person_email`),
  ADD UNIQUE KEY `employer_contact` (`employer_contact`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`experience_id`),
  ADD KEY `experience_fk0` (`job_seeker_id`);

--
-- Indexes for table `interview`
--
ALTER TABLE `interview`
  ADD PRIMARY KEY (`interview_id`),
  ADD KEY `interview_fk0` (`job_id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`job_id`),
  ADD KEY `job_fk0` (`employer_id`);

--
-- Indexes for table `job_seeker`
--
ALTER TABLE `job_seeker`
  ADD PRIMARY KEY (`job_seeker_id`),
  ADD UNIQUE KEY `job_seeker_email` (`job_seeker_email`);

--
-- Indexes for table `job_seeking_interview`
--
ALTER TABLE `job_seeking_interview`
  ADD PRIMARY KEY (`job_seeking_interview_id`),
  ADD KEY `job_seeking_interview_fk0` (`job_seeker_id`),
  ADD KEY `job_seeking_interview_fk1` (`interview_id`);

--
-- Indexes for table `online_application`
--
ALTER TABLE `online_application`
  ADD PRIMARY KEY (`online_application_id`),
  ADD KEY `online_application_fk0` (`job_id`),
  ADD KEY `online_application_fk1` (`job_seeker_id`);

--
-- Indexes for table `qualification`
--
ALTER TABLE `qualification`
  ADD PRIMARY KEY (`qualification_id`),
  ADD KEY `qualification_fk0` (`job_seeker_id`);

--
-- Indexes for table `reference`
--
ALTER TABLE `reference`
  ADD PRIMARY KEY (`reference_id`),
  ADD KEY `reference_fk0` (`job_seeker_id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`skill_id`),
  ADD KEY `skill_fk0` (`job_seeker_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `employer_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `experience_id` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `interview`
--
ALTER TABLE `interview`
  MODIFY `interview_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `job_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `job_seeker`
--
ALTER TABLE `job_seeker`
  MODIFY `job_seeker_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `job_seeking_interview`
--
ALTER TABLE `job_seeking_interview`
  MODIFY `job_seeking_interview_id` int(80) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `online_application`
--
ALTER TABLE `online_application`
  MODIFY `online_application_id` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `qualification`
--
ALTER TABLE `qualification`
  MODIFY `qualification_id` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reference`
--
ALTER TABLE `reference`
  MODIFY `reference_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `skill_id` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `experience`
--
ALTER TABLE `experience`
  ADD CONSTRAINT `experience_fk0` FOREIGN KEY (`job_seeker_id`) REFERENCES `job_seeker` (`job_seeker_id`);

--
-- Constraints for table `interview`
--
ALTER TABLE `interview`
  ADD CONSTRAINT `interview_fk0` FOREIGN KEY (`job_id`) REFERENCES `job` (`job_id`);

--
-- Constraints for table `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `job_fk0` FOREIGN KEY (`employer_id`) REFERENCES `employer` (`employer_id`);

--
-- Constraints for table `job_seeking_interview`
--
ALTER TABLE `job_seeking_interview`
  ADD CONSTRAINT `job_seeking_interview_fk0` FOREIGN KEY (`job_seeker_id`) REFERENCES `job_seeker` (`job_seeker_id`),
  ADD CONSTRAINT `job_seeking_interview_fk1` FOREIGN KEY (`interview_id`) REFERENCES `interview` (`interview_id`);

--
-- Constraints for table `online_application`
--
ALTER TABLE `online_application`
  ADD CONSTRAINT `online_application_fk0` FOREIGN KEY (`job_id`) REFERENCES `job` (`job_id`),
  ADD CONSTRAINT `online_application_fk1` FOREIGN KEY (`job_seeker_id`) REFERENCES `job_seeker` (`job_seeker_id`);

--
-- Constraints for table `qualification`
--
ALTER TABLE `qualification`
  ADD CONSTRAINT `qualification_fk0` FOREIGN KEY (`job_seeker_id`) REFERENCES `job_seeker` (`job_seeker_id`);

--
-- Constraints for table `reference`
--
ALTER TABLE `reference`
  ADD CONSTRAINT `reference_fk0` FOREIGN KEY (`job_seeker_id`) REFERENCES `job_seeker` (`job_seeker_id`);

--
-- Constraints for table `skill`
--
ALTER TABLE `skill`
  ADD CONSTRAINT `skill_fk0` FOREIGN KEY (`job_seeker_id`) REFERENCES `job_seeker` (`job_seeker_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
