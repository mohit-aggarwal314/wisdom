-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2022 at 11:42 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisdom_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `admission_enquiry`
--

CREATE TABLE `admission_enquiry` (
  `ID` int(255) NOT NULL,
  `Student_Name` varchar(255) NOT NULL,
  `Father_Name` varchar(255) NOT NULL,
  `D_O_B` date NOT NULL,
  `Gender` char(255) NOT NULL,
  `Category` char(255) NOT NULL,
  `Nationality` char(255) NOT NULL,
  `Boards` varchar(255) NOT NULL,
  `Stream` varchar(255) NOT NULL,
  `Seeking_Admission_Class` varchar(255) NOT NULL,
  `Presently_Studying` varchar(255) NOT NULL,
  `Previous_Pass_Class_Percentage` varchar(255) NOT NULL,
  `Previous_School_Board` varchar(255) NOT NULL,
  `Last_Class` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Mobile` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission_enquiry`
--

INSERT INTO `admission_enquiry` (`ID`, `Student_Name`, `Father_Name`, `D_O_B`, `Gender`, `Category`, `Nationality`, `Boards`, `Stream`, `Seeking_Admission_Class`, `Presently_Studying`, `Previous_Pass_Class_Percentage`, `Previous_School_Board`, `Last_Class`, `Email`, `Mobile`, `Address`) VALUES
(1, 'Admin', 'admin', '2022-01-17', 'Male', 'OBC', 'Indian', 'CBSE', 'SCIENCE', 'Admin', 'Admin', 'Admin', 'Admin', 'Admin', 'Admin@gmail.com', '0123456789', 'Jaipur'),
(2, 'a', 'a', '2020-10-10', 'Male', 'OBC', 'Indian', 'CBSE', 'SCIENCE', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `any_questions`
--

CREATE TABLE `any_questions` (
  `ID` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `any_questions`
--

INSERT INTO `any_questions` (`ID`, `Name`, `Email`, `Phone`, `Address`, `Message`) VALUES
(1, 'Admin', 'Admin@gmail.com', '0123456789', 'Jaipur', 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `birth` date NOT NULL,
  `phone_code` varchar(255) NOT NULL,
  `phone_num` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `street_address` varchar(255) NOT NULL,
  `city_add` varchar(255) NOT NULL,
  `state_add` varchar(255) NOT NULL,
  `zip_code_add` varchar(255) NOT NULL,
  `referred` varchar(255) NOT NULL,
  `others` varchar(255) NOT NULL,
  `up_resume` varchar(255) NOT NULL,
  `describe_skills` varchar(255) NOT NULL,
  `training` varchar(255) NOT NULL,
  `re_fname` varchar(255) NOT NULL,
  `re_lname` varchar(255) NOT NULL,
  `re_phone_code` varchar(255) NOT NULL,
  `re_phone_num` varchar(10) NOT NULL,
  `re_years` varchar(255) NOT NULL,
  `re_address` varchar(255) NOT NULL,
  `re_street_address` varchar(255) NOT NULL,
  `re_city_add` varchar(255) NOT NULL,
  `re_state_add` varchar(255) NOT NULL,
  `re_zip_code_add` varchar(255) NOT NULL,
  `re_country` varchar(255) NOT NULL,
  `ref_fname` varchar(255) NOT NULL,
  `ref_lname` varchar(255) NOT NULL,
  `ref_phone_code` varchar(255) NOT NULL,
  `ref_phone_num` varchar(255) NOT NULL,
  `ref_years` varchar(255) NOT NULL,
  `ref_address` varchar(255) NOT NULL,
  `ref_street_address` varchar(255) NOT NULL,
  `ref_city_add` varchar(255) NOT NULL,
  `ref_state_add` varchar(255) NOT NULL,
  `ref_zip_code_add` varchar(255) NOT NULL,
  `ref_country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `fname`, `lname`, `birth`, `phone_code`, `phone_num`, `email`, `address`, `street_address`, `city_add`, `state_add`, `zip_code_add`, `referred`, `others`, `up_resume`, `describe_skills`, `training`, `re_fname`, `re_lname`, `re_phone_code`, `re_phone_num`, `re_years`, `re_address`, `re_street_address`, `re_city_add`, `re_state_add`, `re_zip_code_add`, `re_country`, `ref_fname`, `ref_lname`, `ref_phone_code`, `ref_phone_num`, `ref_years`, `ref_address`, `ref_street_address`, `ref_city_add`, `ref_state_add`, `ref_zip_code_add`, `ref_country`) VALUES
(1, 'First Name', 'Last Name', '2022-01-19', '+Area Code', 'Phone Numb', 'myname@example.com', 'Street Address', 'Street Address line 2', 'City', 'State / Province', 'Postal / Zip Code', 'Walk-In,Newspaper Ad,Twitter,Other (please specify),Employee,Facebook,Craigslist', 'Others', 'vikash.docx', 'Describe your skills              ', 'Training or Certifications              ', 'First Name', 'Last Name', '+Area Code', 'Phone Numb', '1', 'Street Address', 'Street Address line 2', ' City', 'State / Province', 'Postal / Zip Code', 'India', 'First Name', 'Last Name', '+Area Code', 'Phone Number', '2', 'Street Address', 'Street Address line 2', 'City', 'State / Province', 'Postal / Zip Code', 'India');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission_enquiry`
--
ALTER TABLE `admission_enquiry`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `any_questions`
--
ALTER TABLE `any_questions`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admission_enquiry`
--
ALTER TABLE `admission_enquiry`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `any_questions`
--
ALTER TABLE `any_questions`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
