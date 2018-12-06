-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2018 at 05:29 AM
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
(0, '1', '1@1.com', '011', '123'),
(1, 'Rimon', 'rimon505@gmail.com', '01682725304', '12345'),
(2, '2', '2@1.com', '011', '123');

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
  `company_logo` binary(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`employer_id`, `company_name`, `contact_person_name`, `contact_person_email`, `employer_contact`, `company_description`, `employer_password`, `employer_status`, `employer_type`, `business_description`, `company_location`, `industry_type`, `company_logo`) VALUES
(1, '', '', '', '', '', '', 'Inactive', 'General', '', '', '', NULL),
(3, 'Sailor Info Tech', 'Rimon', '1@sailor.com', '0000', '0000', 'aA111111', 'Inactive', 'General', 'a', 'Dhaka', 'Information Technology (IT)', NULL),
(4, 'Thunder Sign', 'Rimon', 'rakiburrimon@gmail.com', '01682725304', '0000111', 'Amivalapola1', 'Inactive', 'General', 'Game', 'Gazipur', 'Information Technology (IT)', NULL);

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
(2, '4 months gj', 'Sailor Info Tech', 1, 'Developer vg'),
(3, '4 Year', 'IUBAT', 1, 'Student s');

-- --------------------------------------------------------

--
-- Table structure for table `interview`
--

CREATE TABLE `interview` (
  `interview_id` int(50) NOT NULL,
  `interview_date` datetime(6) DEFAULT NULL,
  `interview_place` varchar(200) DEFAULT NULL,
  `job_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interview`
--

INSERT INTO `interview` (`interview_id`, `interview_date`, `interview_place`, `job_id`) VALUES
(2, '2018-12-14 00:00:00.000000', 'Gazipur', 14),
(9, '2018-12-07 00:00:00.000000', 'FAA', 3),
(10, '2018-12-20 00:00:00.000000', 'fff', 4),
(11, '2018-12-15 00:00:00.000000', 'utvyutcv', 11),
(12, '2018-12-14 00:00:00.000000', 'rfdrcf', 12),
(13, '2018-12-19 00:00:00.000000', 'fg kk', 13),
(26, '0000-00-00 00:00:00.000000', '', 39),
(27, '2018-12-12 00:00:00.000000', '', 40);

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
  `job_status` varchar(10) NOT NULL,
  `job_location` varchar(30) NOT NULL,
  `job_salary` varchar(30) NOT NULL,
  `job_application_deadline` varchar(30) NOT NULL,
  `employer_id` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `job_title`, `job_context`, `job_responsibilities`, `educaqtional_requirement`, `job_experience_required`, `job_status`, `job_location`, `job_salary`, `job_application_deadline`, `employer_id`) VALUES
(3, 'Trainee Software Engineer (J)', 'dfdsf', 'cdses', 'csecss', 'csds', 'Active', 'cscsd', 'Negotiable', '2018-11-23', 3),
(4, 'Trainee Software Engineer (Japan)', 'dfdsf', 'cdses', 'csecss', 'csds', 'Active', 'cscsd', 'Negotiable', '2018-11-23', 3),
(9, 'Trainee Software Engineer (Japan)', '11', '11', '11', '11', 'Active', '11', 'Negotiable', '2018-11-29', 3),
(10, '', '', '', '', '', 'Active', '', '', '', 3),
(11, 'Trainee Software Engineer (Japan)', '00', '11', 'aa', 'aa', 'Active', 'aa', 'aa', '2018-11-30', 3),
(12, 'dsvhsgvjdhbdsjkhb', 'cxvdvjsudhvbbsdybh', 'svfsb vyhdbvhjvdsb', 'dfshbdfuydbbjshdcb', 'd sdjhcbsdhcbsujcn', 'Active', 'dcsdcn bjsdgbc', 'sdewesce', '2018-11-30', 3),
(13, 'lllllllllll', 'lllllllllllll', 'llllllllllllllllll', 'llllllllllllllllllllll', 'lllllllllllllllll', 'Active', 'llllllllllllllllll', 'lllllllllllllll', '2018-11-30', 3),
(14, 'Gamer', 'Should able to play game 13 hours in a day', 'Have to play all type games\r\nAvoid girls\r\nHave to play all console mode', 'None', 'Should have account on Steam, Origin, Uplay, Sony, Xbox, Wii', 'Active', 'At home', 'You need to pay me ', '2018-12-01', 4),
(17, 'Trainee Software Engineer (Japan)', 'sedfs', 'sdfsef', 'dvsdsdv', 'vxvdxdv', 'Active', 'xvdvxdv', 'Negotiable', '2018-11-30', 4),
(18, '', '', '', '', '', 'Active', '', '', '', 3),
(19, '2018-12-20', 'Home', '', '', '', 'Active', '', '', '', 3),
(20, 'drgdr', '11', '11', '11', '11', 'Active', '11', '111', '2018-12-21', 3),
(21, 'Gamerg', 'gfgvbgb', 'bccfbfxbdf', 'ezgdxgfbxbc', 'ddxvxdxdcxvd', 'Active', 'dxdvxvdv', 'Negotiable', '2018-12-21', 3),
(22, 'Gamergf bfb', 'fbfb v', '       cfbcf', 'AXjsjgvxu', 'dvwhgwhdg', 'Active', 'ugtvhg hs', 'aa', '2018-12-13', 3),
(23, 'Gamerg', 'scsdcd', 'vdcdvv', 'vdcvd', 'vddv', 'Active', 'dvvdv', '111', '2018-12-12', 3),
(24, 'drgdr', 'ftfthf', 'bfgfgbg', 'bgvnj', ' vgnvgnnv', 'Active', 'nvnggn', 'Negotiable', '2018-12-13', 3),
(25, 'cfhngv', '', '', '', '', 'Active', '', '', '', 3),
(26, 'cfhngv', '', '', '', '', 'Active', '', '', '', 3),
(27, 'KK', '', '', '', '', 'Active', '', '', '', 3),
(28, 'KK', '', '', '', '', 'Active', '', '', '', 3),
(29, 'xff', '', '', '', '', 'Active', '', '', '', 3),
(30, 'Trainee Software Engineer (Japan)dbgvzdhgvzdhdz', 'zdczd chfzcgzdcv', 'dzczghdzhdgcvzj', 'dzczkhcuyjzdbc', 'dzcdmh jhcd zd', 'Active', 'cznzs chgvzcs', 'Negotiable', '2018-12-21', 3),
(31, 'SFzesgsxg', '', '', '', '', 'Active', '', '', '', 3),
(32, 'cfhngv', '', '', '', '', 'Active', '', '', '', 3),
(33, 'KK', '', '', '', '', 'Active', '', '', '', 3),
(34, '', '', '', '', '', 'Active', '', '', '', 3),
(35, 'drgdr', '', '', '', '', 'Active', '', '', '', 3),
(36, 'drgdr', '', '', '', '', 'Active', '', '', '', 3),
(37, 'drgdr', '', '', '', '', 'Active', '', '', '', 3),
(38, 'cfhngv', '', '', '', '', 'Active', '', '', '', 3),
(39, 'drgdr', '', '', '', '', 'Active', '', '', '', 3),
(40, 'cfhngv', '', '', '', '', 'Active', '', '', '2018-12-22', 3);

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
  `job_seeker_career_objective` varchar(200) DEFAULT NULL,
  `job_seeker_job_profile` varchar(500) DEFAULT NULL,
  `job_seeker_gender` varchar(10) DEFAULT NULL,
  `image` binary(1) DEFAULT NULL,
  `job_seeker_password` varchar(30) NOT NULL,
  `job_seeker_status` varchar(10) NOT NULL,
  `job_seeker_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_seeker`
--

INSERT INTO `job_seeker` (`job_seeker_id`, `job_seeker_name`, `job_seeker_email`, `job_seeker_contact`, `job_seeker_address`, `job_seeker_career_objective`, `job_seeker_job_profile`, `job_seeker_gender`, `image`, `job_seeker_password`, `job_seeker_status`, `job_seeker_type`) VALUES
(1, 'Fatema Hossain', 'fatemahossain95@gmail.com', '01954460889', 'Tongi, Gazipur', 'To build up a career in any challenging field related to Computer Science & Engineering (CSE). So as to maximize the application of acquired knowledge & potential and want to show strong sense of resp', 'Another possible career route in this industry is that of a computer hardware engineer. As the name implies, this career focuses on creating, improving, and evaluating the various parts that make up the computers and computer systems such as routers, memory boards, central processing units, video sound cards, network components, etc. More than likely you would work in a laboratory building, testing your ideas; but you could also be involved in the manufacturing or the installation aspect of this', 'Female', 0x00, 'Sweety12', 'active', 'general');

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
(1, 1, 9),
(2, 1, 9),
(3, 1, 2),
(4, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `online_application`
--

CREATE TABLE `online_application` (
  `online_application_id` int(70) NOT NULL,
  `job_id` int(20) NOT NULL,
  `job_seeker_id` int(20) NOT NULL,
  `application_time` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `online_application`
--

INSERT INTO `online_application` (`online_application_id`, `job_id`, `job_seeker_id`, `application_time`) VALUES
(1, 14, 1, '2018-12-29 00:00:00.000000'),
(12, 3, 1, '2018-04-12 12:58:41.000000'),
(17, 9, 1, '2018-05-12 11:13:25.000000'),
(18, 11, 1, '2018-05-12 12:14:36.000000'),
(20, 13, 1, '2018-12-29 00:00:00.000000');

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
(1, 'BSc in CSE', '3.48', 'IUBAT', 1);

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
(1, 'Md. Rakibur Rahman', 'Studentgg', 'Sailor fg', 'uuusussususu', 'rakiburrimon@gmail.com', '01682725304', 'Family Friend', 1),
(2, 'Md. Rakibur Rahman', 'Student', 'IUBAT', 'tfhfghfcfhc', 'rakiburrimon@gmail.com', '01682725304', 'Family Friend', 1);

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `skill_id` int(70) NOT NULL,
  `skill_name` int(70) NOT NULL,
  `skill_description` varchar(200) NOT NULL,
  `job_seeker_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`skill_id`, `skill_name`, `skill_description`, `job_seeker_id`) VALUES
(1, 144, '011021gg', 1),
(2, 0, '00112233', 1),
(3, 0, 'aaa', 1),
(4, 0, 'ttttttttttttttttttttttttttt', 1);

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
  MODIFY `employer_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `experience_id` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `interview`
--
ALTER TABLE `interview`
  MODIFY `interview_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `job_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `job_seeker`
--
ALTER TABLE `job_seeker`
  MODIFY `job_seeker_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job_seeking_interview`
--
ALTER TABLE `job_seeking_interview`
  MODIFY `job_seeking_interview_id` int(80) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `online_application`
--
ALTER TABLE `online_application`
  MODIFY `online_application_id` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `qualification`
--
ALTER TABLE `qualification`
  MODIFY `qualification_id` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reference`
--
ALTER TABLE `reference`
  MODIFY `reference_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `skill_id` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
