-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 12, 2018 at 01:03 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.7

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

-- --------------------------------------------------------

--
-- Table structure for table `activity_department`
--

CREATE TABLE `activity_department` (
  `Depart_ID` int(10) UNSIGNED NOT NULL,
  `Activity_ID` int(10) UNSIGNED NOT NULL
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

-- --------------------------------------------------------

--
-- Table structure for table `bonus_deduction_from_status`
--

CREATE TABLE `bonus_deduction_from_status` (
  `Work_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Score_Bonus` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Work_status_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bonus_deduction_per_each_score`
--

CREATE TABLE `bonus_deduction_per_each_score` (
  `Deduction_Bonus_ID` int(10) UNSIGNED NOT NULL,
  `Rate_Score` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Value_Score` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `calendar_of_holiday`
--

CREATE TABLE `calendar_of_holiday` (
  `Id_holiday` int(10) UNSIGNED NOT NULL,
  `Date` date NOT NULL,
  `Detail` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `ID_Certificate` int(10) UNSIGNED NOT NULL,
  `ID_member` int(10) UNSIGNED NOT NULL,
  `Total_value_Certificate` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `forms_evidence`
--

CREATE TABLE `forms_evidence` (
  `ID_member` int(10) UNSIGNED NOT NULL,
  `Evidence` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date` date NOT NULL,
  `Reason` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Confirm` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2018_03_12_130236_create_Activity_Department_table', 1),
(2, '2018_03_12_130236_create_Activity_table', 1),
(3, '2018_03_12_130236_create_Address_table', 1),
(4, '2018_03_12_130236_create_Bonus_deduction_from_status_table', 1),
(5, '2018_03_12_130236_create_Bonus_deduction_per_each_score_table', 1),
(6, '2018_03_12_130236_create_Calendar_of_holiday_table', 1),
(7, '2018_03_12_130236_create_Certificate_table', 1),
(8, '2018_03_12_130236_create_Department_table', 1),
(9, '2018_03_12_130236_create_Forms_Evidence_table', 1),
(10, '2018_03_12_130236_create_History_Work_table', 1),
(11, '2018_03_12_130236_create_Job_table', 1),
(12, '2018_03_12_130236_create_Location_table', 1),
(13, '2018_03_12_130236_create_PM__history_table', 1),
(14, '2018_03_12_130236_create_PM_of_each_department_table', 1),
(15, '2018_03_12_130236_create_Payment_Special_table', 1),
(16, '2018_03_12_130236_create_Performance_measurement_table', 1),
(17, '2018_03_12_130236_create_Profile_table', 1),
(18, '2018_03_12_130236_create_Status_work_table', 1),
(19, '2018_03_12_130236_create_Transection_Peyment_table', 1),
(20, '2018_03_12_130236_create_Value_of_Each_Certificate_table', 1),
(21, '2018_03_12_130246_create_foreign_keys', 1);

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

-- --------------------------------------------------------

--
-- Table structure for table `performance_measurement`
--

CREATE TABLE `performance_measurement` (
  `KPI_Code` int(10) UNSIGNED NOT NULL,
  `Indicators` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MC` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pm_of_each_department`
--

CREATE TABLE `pm_of_each_department` (
  `PM_ID` int(10) UNSIGNED NOT NULL,
  `Depart_ID` int(10) UNSIGNED NOT NULL,
  `KPI_CODE` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `ID_member` int(10) UNSIGNED NOT NULL,
  `Firstname` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Lastname` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DOB` date NOT NULL,
  `Gender` enum('male','female') COLLATE utf8mb4_unicode_ci NOT NULL,
  `Marital_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `E-mail` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `Password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `status_work`
--

CREATE TABLE `status_work` (
  `ID_Status` int(10) UNSIGNED NOT NULL,
  `ID_member` int(10) UNSIGNED NOT NULL,
  `Work_date` date NOT NULL,
  `Work_status_id` int(10) UNSIGNED NOT NULL,
  `Time_checkin` date NOT NULL,
  `Time_checkout` date NOT NULL,
  `OT` int(11) NOT NULL,
  `Deduction_Bonus_ID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  ADD KEY `activity_department_depart_id_foreign` (`Depart_ID`),
  ADD KEY `activity_department_activity_id_foreign` (`Activity_ID`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`ID_Address`),
  ADD KEY `address_id_member_foreign` (`ID_member`);

--
-- Indexes for table `bonus_deduction_from_status`
--
ALTER TABLE `bonus_deduction_from_status`
  ADD PRIMARY KEY (`Work_status_id`);

--
-- Indexes for table `bonus_deduction_per_each_score`
--
ALTER TABLE `bonus_deduction_per_each_score`
  ADD PRIMARY KEY (`Deduction_Bonus_ID`);

--
-- Indexes for table `calendar_of_holiday`
--
ALTER TABLE `calendar_of_holiday`
  ADD PRIMARY KEY (`Id_holiday`);

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
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`ID_member`),
  ADD KEY `profile_job_id_foreign` (`Job_ID`);

--
-- Indexes for table `status_work`
--
ALTER TABLE `status_work`
  ADD PRIMARY KEY (`ID_Status`),
  ADD KEY `status_work_id_member_foreign` (`ID_member`),
  ADD KEY `status_work_work_status_id_foreign` (`Work_status_id`),
  ADD KEY `status_work_deduction_bonus_id_foreign` (`Deduction_Bonus_ID`);

--
-- Indexes for table `transection_peyment`
--
ALTER TABLE `transection_peyment`
  ADD PRIMARY KEY (`ID_list`),
  ADD KEY `transection_peyment_id_member_foreign` (`ID_member`),
  ADD KEY `transection_peyment_id_payment_special_foreign` (`ID_payment_special`);

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
  MODIFY `Activity_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `ID_Address` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bonus_deduction_from_status`
--
ALTER TABLE `bonus_deduction_from_status`
  MODIFY `Work_status_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bonus_deduction_per_each_score`
--
ALTER TABLE `bonus_deduction_per_each_score`
  MODIFY `Deduction_Bonus_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `calendar_of_holiday`
--
ALTER TABLE `calendar_of_holiday`
  MODIFY `Id_holiday` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `Depart_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `history_work`
--
ALTER TABLE `history_work`
  MODIFY `HW_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `Job_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `Location_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `payment_special`
--
ALTER TABLE `payment_special`
  MODIFY `ID_Payment_Special` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `performance_measurement`
--
ALTER TABLE `performance_measurement`
  MODIFY `KPI_Code` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pm_of_each_department`
--
ALTER TABLE `pm_of_each_department`
  MODIFY `PM_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `ID_member` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `status_work`
--
ALTER TABLE `status_work`
  MODIFY `ID_Status` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transection_peyment`
--
ALTER TABLE `transection_peyment`
  MODIFY `ID_list` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `value_of_each_certificate`
--
ALTER TABLE `value_of_each_certificate`
  MODIFY `ID_Certificate` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
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
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_id_member_foreign` FOREIGN KEY (`ID_member`) REFERENCES `profile` (`ID_member`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `certificate`
--
ALTER TABLE `certificate`
  ADD CONSTRAINT `certificate_id_certificate_foreign` FOREIGN KEY (`ID_Certificate`) REFERENCES `value_of_each_certificate` (`ID_Certificate`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `certificate_id_member_foreign` FOREIGN KEY (`ID_member`) REFERENCES `profile` (`ID_member`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_location_id_foreign` FOREIGN KEY (`Location_ID`) REFERENCES `location` (`Location_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `forms_evidence`
--
ALTER TABLE `forms_evidence`
  ADD CONSTRAINT `forms_evidence_id_member_foreign` FOREIGN KEY (`ID_member`) REFERENCES `profile` (`ID_member`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `history_work`
--
ALTER TABLE `history_work`
  ADD CONSTRAINT `history_work_id_member_foreign` FOREIGN KEY (`ID_member`) REFERENCES `profile` (`ID_member`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_job_id_foreign` FOREIGN KEY (`Job_ID`) REFERENCES `job` (`Job_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `status_work`
--
ALTER TABLE `status_work`
  ADD CONSTRAINT `status_work_deduction_bonus_id_foreign` FOREIGN KEY (`Deduction_Bonus_ID`) REFERENCES `bonus_deduction_per_each_score` (`Deduction_Bonus_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `status_work_id_member_foreign` FOREIGN KEY (`ID_member`) REFERENCES `profile` (`ID_member`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `status_work_work_status_id_foreign` FOREIGN KEY (`Work_status_id`) REFERENCES `bonus_deduction_from_status` (`Work_status_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transection_peyment`
--
ALTER TABLE `transection_peyment`
  ADD CONSTRAINT `transection_peyment_id_member_foreign` FOREIGN KEY (`ID_member`) REFERENCES `profile` (`ID_member`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transection_peyment_id_payment_special_foreign` FOREIGN KEY (`ID_payment_special`) REFERENCES `payment_special` (`ID_Payment_Special`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
