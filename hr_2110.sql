-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2018 at 04:52 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hr_2110`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `Activity_ID` int(10) UNSIGNED NOT NULL,
  `Activity_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Objective` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Detail` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`Activity_ID`, `Activity_name`, `Objective`, `Type`, `Detail`, `Date`) VALUES
(1, 'jogging', 'healty', 'excersice', 'jogging1', '2018-04-30');

-- --------------------------------------------------------

--
-- Table structure for table `activity_department`
--

CREATE TABLE `activity_department` (
  `Depart_ID` int(10) UNSIGNED NOT NULL,
  `Activity_ID` int(10) UNSIGNED NOT NULL,
  `ID_listActivity` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_department`
--

INSERT INTO `activity_department` (`Depart_ID`, `Activity_ID`, `ID_listActivity`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `activity_status`
--

CREATE TABLE `activity_status` (
  `ID_listActivity` int(10) UNSIGNED NOT NULL,
  `ID_member` int(11) NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `ID_member` int(10) UNSIGNED NOT NULL,
  `ID_Address` int(10) UNSIGNED NOT NULL,
  `Type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `House_No` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Village` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Village_No` int(11) NOT NULL,
  `Street` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Sub_district_Sub_area` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Alley_Lane` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `District_Area` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Province` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Postal_Code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`ID_member`, `ID_Address`, `Type`, `House_No`, `Village`, `Village_No`, `Street`, `Sub_district_Sub_area`, `Alley_Lane`, `District_Area`, `Province`, `Postal_Code`) VALUES
(1, 1, 'home', '439', 'สวนธน', 47, '5', 'thungkru', '5', 'lksdjfl', 'bangkok', '10140');

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `ID_Certificate` int(10) UNSIGNED NOT NULL,
  `ID_member` int(10) UNSIGNED NOT NULL,
  `Total_value_Certificate` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certificate`
--

INSERT INTO `certificate` (`ID_Certificate`, `ID_member`, `Total_value_Certificate`) VALUES
(1, 1, '14000');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Depart_ID` int(10) UNSIGNED NOT NULL,
  `Depart_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Head_ID` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tel` int(11) NOT NULL,
  `Location_ID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Depart_ID`, `Depart_name`, `Head_ID`, `Tel`, `Location_ID`) VALUES
(1, 'computer', 'nut', 91111111, 1);

-- --------------------------------------------------------

--
-- Table structure for table `education_history`
--

CREATE TABLE `education_history` (
  `ID_mamber` int(10) UNSIGNED NOT NULL,
  `ID_Education` int(11) NOT NULL,
  `certificate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Academy` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education_history`
--

INSERT INTO `education_history` (`ID_mamber`, `ID_Education`, `certificate`, `Academy`) VALUES
(1, 1, 'verilog', 'kmutt');

-- --------------------------------------------------------

--
-- Table structure for table `forms_evidence`
--

CREATE TABLE `forms_evidence` (
  `ID_member` int(10) UNSIGNED NOT NULL,
  `ID_Evidence` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Reason` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Confirm` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `forms_evidence`
--

INSERT INTO `forms_evidence` (`ID_member`, `ID_Evidence`, `Date`, `created_at`, `updated_at`, `Reason`, `Confirm`) VALUES
(1, '1', '2018-04-18', '2018-04-03 17:00:00', '2018-04-10 17:00:00', 'sick', '');

-- --------------------------------------------------------

--
-- Table structure for table `history_work`
--

CREATE TABLE `history_work` (
  `ID_member` int(10) UNSIGNED NOT NULL,
  `HW_ID` int(10) UNSIGNED NOT NULL,
  `Job` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Position` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Experience` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Company` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `history_work`
--

INSERT INTO `history_work` (`ID_member`, `HW_ID`, `Job`, `Position`, `Experience`, `Company`) VALUES
(1, 1, 'webprogrammer', '111', '2 year', 'kfc');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `Job_ID` int(10) UNSIGNED NOT NULL,
  `Job_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Salary` int(11) NOT NULL,
  `Salary_Parttime` int(11) NOT NULL,
  `Depart_ID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`Job_ID`, `Job_name`, `Salary`, `Salary_Parttime`, `Depart_ID`) VALUES
(1, 'Sound Engineering', 1500, 150, 1),
(2, 'Computerengineering', 30000, 2000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `Location_ID` int(10) UNSIGNED NOT NULL,
  `Location_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Apartment` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Building` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Floor` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `House_No` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Village` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Village_No` int(11) NOT NULL,
  `Street` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Sub_district_Sub_area` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Alley_Lane` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `District_Area` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Province` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Postal_Code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tel` int(11) NOT NULL,
  `Tax` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`Location_ID`, `Location_name`, `Apartment`, `Building`, `Floor`, `House_No`, `Village`, `Village_No`, `Street`, `Sub_district_Sub_area`, `Alley_Lane`, `District_Area`, `Province`, `Postal_Code`, `Tel`, `Tax`) VALUES
(1, 'บ้านสวนธน', '', 'ทานตะวัน3', '2', '435/639', 'บ้านสวนธน', 47, '5', 'thungkru', 'dfasdf', 'asdf', 'bangkok', '10140', 900212368, 7);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_04_29_171042_create_Activity_Department_table', 1),
(2, '2018_04_29_171042_create_Activity_table', 1),
(3, '2018_04_29_171042_create_Address_table', 1),
(4, '2018_04_29_171042_create_Certificate_table', 1),
(5, '2018_04_29_171042_create_Department_table', 1),
(6, '2018_04_29_171042_create_Forms_Evidence_table', 1),
(7, '2018_04_29_171042_create_History_Work_table', 1),
(8, '2018_04_29_171042_create_Job_table', 1),
(9, '2018_04_29_171042_create_Location_table', 1),
(10, '2018_04_29_171042_create_PM__history_table', 1),
(11, '2018_04_29_171042_create_PM_of_each_department_table', 1),
(12, '2018_04_29_171042_create_Payment_Special_table', 1),
(13, '2018_04_29_171042_create_Performance_measurement_table', 1),
(14, '2018_04_29_171042_create_Profile_table', 1),
(15, '2018_04_29_171042_create_Status_work_table', 1),
(16, '2018_04_29_171042_create_Transection_Peyment_table', 1),
(17, '2018_04_29_171042_create_Value_of_Each_Certificate_table', 1),
(18, '2018_04_29_171043_create_Activity_status_table', 1),
(19, '2018_04_29_171043_create_Education_history_table', 1),
(20, '2018_04_29_171053_create_foreign_keys', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment_special`
--

CREATE TABLE `payment_special` (
  `ID_Payment_Special` int(10) UNSIGNED NOT NULL,
  `Detail` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Work_date` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cost_perday` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_special`
--

INSERT INTO `payment_special` (`ID_Payment_Special`, `Detail`, `Work_date`, `Cost_perday`) VALUES
(1, 'saraly', '1 ', 222);

-- --------------------------------------------------------

--
-- Table structure for table `performance_measurement`
--

CREATE TABLE `performance_measurement` (
  `KPI_Code` int(10) UNSIGNED NOT NULL,
  `Indicators` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MC` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `performance_measurement`
--

INSERT INTO `performance_measurement` (`KPI_Code`, `Indicators`, `MC`) VALUES
(1, 'fasdfjldsf', 'dsfasdf');

-- --------------------------------------------------------

--
-- Table structure for table `pm_of_each_department`
--

CREATE TABLE `pm_of_each_department` (
  `PM_ID` int(10) UNSIGNED NOT NULL,
  `Depart_ID` int(10) UNSIGNED NOT NULL,
  `KPI_CODE` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pm_of_each_department`
--

INSERT INTO `pm_of_each_department` (`PM_ID`, `Depart_ID`, `KPI_CODE`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pm__history`
--

CREATE TABLE `pm__history` (
  `PM_ID` int(10) UNSIGNED NOT NULL,
  `Month` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Year` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Value` enum('succeed','failure') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pm__history`
--

INSERT INTO `pm__history` (`PM_ID`, `Month`, `Year`, `Value`) VALUES
(1, 'january', '1994', 'succeed');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `ID_member` int(10) UNSIGNED NOT NULL,
  `Firstname` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Lastname` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DOB` date NOT NULL,
  `Gender` enum('male','female') COLLATE utf8mb4_unicode_ci NOT NULL,
  `Marital_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tel` int(11) NOT NULL,
  `Job_ID` int(10) UNSIGNED NOT NULL,
  `Social_link` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Work_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Education` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Emergency_Contact` int(11) NOT NULL,
  `Hire_day` date NOT NULL,
  `End_date` date NOT NULL,
  `Nationality` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Data_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `User_role` enum('admin','hr_admin','hod','user') COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`ID_member`, `Firstname`, `Lastname`, `DOB`, `Gender`, `Marital_status`, `Email`, `Tel`, `Job_ID`, `Social_link`, `Work_type`, `Education`, `Photo`, `Emergency_Contact`, `Hire_day`, `End_date`, `Nationality`, `Data_status`, `User_role`, `password`, `remember_token`) VALUES
(1, 'teeraphat', 'duangkongngoen', '2018-04-17', 'male', 'single', '123@123.com', 0, 1, 'facebook', 'full time', 'ประถม', '', 900212368, '2018-04-02', '0000-00-00', 'thai', 'on', 'user', '$2y$10$/hORS04mmGZ3GMtwz.6o6.5sUd83vtJWHE4QD9LIaQK5dsNCn3MI.', '8OMYJy0vLuF3wFZ3wbrdFZiduyn9SC0AGLTBhD8bm07oAHXMJgbEIkJtRx5E');

-- --------------------------------------------------------

--
-- Table structure for table `status_work`
--

CREATE TABLE `status_work` (
  `ID_Status` int(10) UNSIGNED NOT NULL,
  `ID_member` int(10) UNSIGNED NOT NULL,
  `Work_date` date NOT NULL,
  `Work_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Time_checkin` date NOT NULL,
  `Time_checkout` date NOT NULL,
  `OT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status_work`
--

INSERT INTO `status_work` (`ID_Status`, `ID_member`, `Work_date`, `Work_status`, `Time_checkin`, `Time_checkout`, `OT`) VALUES
(1, 1, '2018-04-01', 'full time', '2018-04-01', '0000-00-00', 0),
(3, 1, '2018-04-01', 'full time', '2018-04-01', '0000-00-00', 22);

-- --------------------------------------------------------

--
-- Table structure for table `transection_peyment`
--

CREATE TABLE `transection_peyment` (
  `ID_list` int(10) UNSIGNED NOT NULL,
  `ID_member` int(10) UNSIGNED NOT NULL,
  `Salary` bigint(20) NOT NULL,
  `Total_Value_Skill` bigint(20) NOT NULL,
  `Date_Pay` date NOT NULL,
  `Value_OT_total` bigint(20) NOT NULL,
  `Value_Bonus_total` bigint(20) NOT NULL,
  `ID_payment_special` int(10) UNSIGNED NOT NULL,
  `ALL_Total` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transection_peyment`
--

INSERT INTO `transection_peyment` (`ID_list`, `ID_member`, `Salary`, `Total_Value_Skill`, `Date_Pay`, `Value_OT_total`, `Value_Bonus_total`, `ID_payment_special`, `ALL_Total`) VALUES
(1, 1, 14000, 2222, '2018-04-30', 111121, 2112, 1, 21211);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'meenkx', 'tyamdej@gmail.com', '$2y$10$/hORS04mmGZ3GMtwz.6o6.5sUd83vtJWHE4QD9LIaQK5dsNCn3MI.');

-- --------------------------------------------------------

--
-- Table structure for table `value_of_each_certificate`
--

CREATE TABLE `value_of_each_certificate` (
  `ID_Certificate` int(10) UNSIGNED NOT NULL,
  `Certificate_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Value_Certificate` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `value_of_each_certificate`
--

INSERT INTO `value_of_each_certificate` (`ID_Certificate`, `Certificate_name`, `Value_Certificate`) VALUES
(1, 'java', '10000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`Activity_ID`);

--
-- Indexes for table `activity_department`
--
ALTER TABLE `activity_department`
  ADD PRIMARY KEY (`ID_listActivity`),
  ADD KEY `activity_department_depart_id_foreign` (`Depart_ID`),
  ADD KEY `activity_department_activity_id_foreign` (`Activity_ID`);

--
-- Indexes for table `activity_status`
--
ALTER TABLE `activity_status`
  ADD KEY `activity_status_id_listactivity_foreign` (`ID_listActivity`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`ID_Address`),
  ADD KEY `address_id_member_foreign` (`ID_member`);

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD KEY `certificate_id_certificate_foreign` (`ID_Certificate`),
  ADD KEY `certificate_id_member_foreign` (`ID_member`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`Depart_ID`),
  ADD KEY `department_location_id_foreign` (`Location_ID`);

--
-- Indexes for table `education_history`
--
ALTER TABLE `education_history`
  ADD KEY `education_history_id_mamber_foreign` (`ID_mamber`);

--
-- Indexes for table `forms_evidence`
--
ALTER TABLE `forms_evidence`
  ADD KEY `forms_evidence_id_member_foreign` (`ID_member`);

--
-- Indexes for table `history_work`
--
ALTER TABLE `history_work`
  ADD PRIMARY KEY (`HW_ID`),
  ADD KEY `history_work_id_member_foreign` (`ID_member`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`Job_ID`),
  ADD KEY `job_depart_id_foreign` (`Depart_ID`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`Location_ID`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_special`
--
ALTER TABLE `payment_special`
  ADD PRIMARY KEY (`ID_Payment_Special`);

--
-- Indexes for table `performance_measurement`
--
ALTER TABLE `performance_measurement`
  ADD PRIMARY KEY (`KPI_Code`);

--
-- Indexes for table `pm_of_each_department`
--
ALTER TABLE `pm_of_each_department`
  ADD PRIMARY KEY (`PM_ID`),
  ADD KEY `pm_of_each_department_depart_id_foreign` (`Depart_ID`),
  ADD KEY `pm_of_each_department_kpi_code_foreign` (`KPI_CODE`);

--
-- Indexes for table `pm__history`
--
ALTER TABLE `pm__history`
  ADD KEY `pm__history_pm_id_foreign` (`PM_ID`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`ID_member`),
  ADD KEY `profile_job_id_foreign` (`Job_ID`);

--
-- Indexes for table `status_work`
--
ALTER TABLE `status_work`
  ADD PRIMARY KEY (`ID_Status`),
  ADD KEY `status_work_id_member_foreign` (`ID_member`);

--
-- Indexes for table `transection_peyment`
--
ALTER TABLE `transection_peyment`
  ADD PRIMARY KEY (`ID_list`),
  ADD KEY `transection_peyment_id_member_foreign` (`ID_member`),
  ADD KEY `transection_peyment_id_payment_special_foreign` (`ID_payment_special`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `value_of_each_certificate`
--
ALTER TABLE `value_of_each_certificate`
  ADD PRIMARY KEY (`ID_Certificate`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `Activity_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `activity_department`
--
ALTER TABLE `activity_department`
  MODIFY `ID_listActivity` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `ID_Address` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `Depart_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `history_work`
--
ALTER TABLE `history_work`
  MODIFY `HW_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `Job_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `Location_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `payment_special`
--
ALTER TABLE `payment_special`
  MODIFY `ID_Payment_Special` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `performance_measurement`
--
ALTER TABLE `performance_measurement`
  MODIFY `KPI_Code` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pm_of_each_department`
--
ALTER TABLE `pm_of_each_department`
  MODIFY `PM_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `ID_member` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `status_work`
--
ALTER TABLE `status_work`
  MODIFY `ID_Status` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transection_peyment`
--
ALTER TABLE `transection_peyment`
  MODIFY `ID_list` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `value_of_each_certificate`
--
ALTER TABLE `value_of_each_certificate`
  MODIFY `ID_Certificate` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity_department`
--
ALTER TABLE `activity_department`
  ADD CONSTRAINT `activity_department_activity_id_foreign` FOREIGN KEY (`Activity_ID`) REFERENCES `activity` (`Activity_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `activity_department_depart_id_foreign` FOREIGN KEY (`Depart_ID`) REFERENCES `department` (`Depart_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `activity_status`
--
ALTER TABLE `activity_status`
  ADD CONSTRAINT `activity_status_id_listactivity_foreign` FOREIGN KEY (`ID_listActivity`) REFERENCES `activity_department` (`ID_listActivity`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_id_member_foreign` FOREIGN KEY (`ID_member`) REFERENCES `profiles` (`ID_member`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `certificate`
--
ALTER TABLE `certificate`
  ADD CONSTRAINT `certificate_id_certificate_foreign` FOREIGN KEY (`ID_Certificate`) REFERENCES `value_of_each_certificate` (`ID_Certificate`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `certificate_id_member_foreign` FOREIGN KEY (`ID_member`) REFERENCES `profiles` (`ID_member`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_location_id_foreign` FOREIGN KEY (`Location_ID`) REFERENCES `location` (`Location_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `education_history`
--
ALTER TABLE `education_history`
  ADD CONSTRAINT `education_history_id_mamber_foreign` FOREIGN KEY (`ID_mamber`) REFERENCES `profiles` (`ID_member`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `forms_evidence`
--
ALTER TABLE `forms_evidence`
  ADD CONSTRAINT `forms_evidence_id_member_foreign` FOREIGN KEY (`ID_member`) REFERENCES `profiles` (`ID_member`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `history_work`
--
ALTER TABLE `history_work`
  ADD CONSTRAINT `history_work_id_member_foreign` FOREIGN KEY (`ID_member`) REFERENCES `profiles` (`ID_member`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `job_depart_id_foreign` FOREIGN KEY (`Depart_ID`) REFERENCES `department` (`Depart_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pm_of_each_department`
--
ALTER TABLE `pm_of_each_department`
  ADD CONSTRAINT `pm_of_each_department_depart_id_foreign` FOREIGN KEY (`Depart_ID`) REFERENCES `department` (`Depart_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pm_of_each_department_kpi_code_foreign` FOREIGN KEY (`KPI_CODE`) REFERENCES `performance_measurement` (`KPI_Code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pm__history`
--
ALTER TABLE `pm__history`
  ADD CONSTRAINT `pm__history_pm_id_foreign` FOREIGN KEY (`PM_ID`) REFERENCES `pm_of_each_department` (`PM_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profile_job_id_foreign` FOREIGN KEY (`Job_ID`) REFERENCES `job` (`Job_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `status_work`
--
ALTER TABLE `status_work`
  ADD CONSTRAINT `status_work_id_member_foreign` FOREIGN KEY (`ID_member`) REFERENCES `profiles` (`ID_member`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transection_peyment`
--
ALTER TABLE `transection_peyment`
  ADD CONSTRAINT `transection_peyment_id_member_foreign` FOREIGN KEY (`ID_member`) REFERENCES `profiles` (`ID_member`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transection_peyment_id_payment_special_foreign` FOREIGN KEY (`ID_payment_special`) REFERENCES `payment_special` (`ID_Payment_Special`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
