-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2018 at 07:02 PM
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
  `Date` date NOT NULL,
  `End_Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`Activity_ID`, `Activity_name`, `Objective`, `Type`, `Detail`, `Date`, `End_Date`) VALUES
(1, 'jogging', 'healty', 'High', 'jogging1', '2018-04-30', '2018-05-01'),
(2, 'Play Game', 'fun', 'High', 'Play Game for relex', '2018-05-31', '2018-05-31'),
(3, 'meeting', 'talk ploblems', 'High', 'talk about ploblems ', '2018-06-30', '2018-07-02');

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
(2, 2, 1),
(5, 3, 2),
(4, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `activity_status`
--

CREATE TABLE `activity_status` (
  `ID_listActivity` int(10) UNSIGNED NOT NULL,
  `ID_member` int(11) NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_status`
--

INSERT INTO `activity_status` (`ID_listActivity`, `ID_member`, `status`) VALUES
(1, 1, 'เข้าร่วม');

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
  `Depart_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Head_ID` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Tel` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Location_ID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Depart_ID`, `Depart_name`, `Head_ID`, `Tel`, `Location_ID`) VALUES
(1, 'Business Teachers, Postsecondary', '', '02-236-2000', 1),
(2, 'Computer Science Teachers, Postsecondary', '', '02-236-2001', 1),
(3, 'Mathematical Science Teachers, Postsecondary', '', '02-236-2002', 1),
(4, 'Architecture Teachers, Postsecondary', '', '02-236-2003', 1),
(5, 'Engineering Teachers, Postsecondary', '', '02-236-2004', 1),
(6, 'Agricultural Sciences Teachers, Postsecondary', '', '02-236-2005', 1),
(7, 'Biological Science Teachers, Postsecondary', '', '02-236-2006', 1),
(8, 'Forestry and Conservation ScienceTeachers,Postsecondary', '', '02-236-2007', 1);

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

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`Job_ID`, `Job_name`, `Salary`, `Salary_Parttime`, `Depart_ID`) VALUES
(1, 'Accounting Professor', 98438, 649, 1),
(2, 'Banking and Finance ', 54780, 610, 1),
(3, 'Business Administrat', 90327, 604, 1),
(4, 'Finance Professor', 75853, 618, 1),
(5, 'Management Professor', 67642, 616, 1),
(6, 'Marketing Instructor', 98433, 626, 1),
(7, 'Marketing Professor', 91478, 536, 1),
(8, 'C++ Professor', 84734, 790, 2),
(9, 'Computer Information', 74846, 764, 2),
(10, 'Computer Programming', 50049, 500, 2),
(11, 'Information Systems ', 52305, 650, 2),
(12, 'Information Technolo', 70420, 600, 2),
(13, 'IT Professor', 82659, 550, 2),
(14, 'Java Programming Pro', 62162, 700, 2),
(15, 'Actuarial Science Pr', 57078, 623, 3),
(16, 'Biostatistics Profes', 71000, 535, 3),
(17, 'Calculus Professor', 68000, 800, 3),
(18, 'Geometry Professor', 87000, 750, 3),
(19, 'Mathematics Professo', 83000, 600, 3),
(20, 'Statistical Methods ', 81000, 625, 3),
(21, 'Statistics Professor', 56000, 550, 3),
(22, 'Topology Professor', 65000, 500, 3),
(23, 'Architectural Design', 67000, 750, 4),
(24, 'Architecture Profess', 85000, 675, 4),
(25, 'Interior Design Prof', 55000, 650, 4),
(26, 'Landscape Architectu', 66000, 550, 4),
(27, 'Aeronautical Enginee', 8800, 600, 5),
(28, 'Ceramic Engineering ', 98000, 600, 5),
(29, 'Chemical Engineering', 86000, 600, 5),
(30, 'Civil Engineering Pr', 78000, 600, 5),
(31, 'Electrical Engineeri', 73000, 600, 5),
(32, 'Electronics Engineer', 96000, 600, 5),
(33, 'Industrial Engineeri', 66000, 600, 5),
(34, 'Manufacturing Engine', 75000, 600, 5),
(35, 'Marine Engineering P', 78500, 600, 5),
(36, 'Mechanical Engineeri', 89400, 600, 5),
(37, 'Petroleum Engineerin', 85600, 600, 5),
(38, 'Agricultural Soil Co', 81000, 650, 6),
(39, 'Agronomy Professor', 56000, 600, 6),
(40, 'Animal Husbandry Pro', 65000, 550, 6),
(41, 'Animal Science Profe', 67000, 700, 6),
(42, 'Aquaculture and Fish', 85000, 623, 6),
(43, 'Farm Management Prof', 55000, 535, 6),
(44, 'Floriculture Profess', 98000, 800, 6),
(45, 'Horticulture Instruc', 86000, 750, 6),
(46, 'Olericulture Profess', 78000, 600, 6),
(47, 'Anatomy Professor', 56000, 700, 7),
(48, 'Bacteriology Profess', 65000, 623, 7),
(49, 'Biochemistry Profess', 67000, 535, 7),
(50, 'Botany Professor', 85000, 800, 7),
(51, 'Embryology Professor', 55000, 750, 7),
(52, 'Microbiology Profess', 98000, 600, 7),
(53, 'Zoology Professor', 86000, 625, 7),
(54, 'Ecology Professor', 66000, 650, 8),
(55, 'Environmental Conser', 75000, 600, 8),
(56, 'Forest Biometrics Pr', 78500, 550, 8),
(57, 'Forest Ecology Profe', 89400, 700, 8),
(58, 'Forest Management Pr', 85600, 623, 8),
(59, 'Forest Pathology Pro', 81000, 535, 8),
(60, 'Forest Resources Pro', 56000, 800, 8),
(61, 'Forest Technology Pr', 65000, 750, 8),
(62, 'Silviculture Profess', 67000, 600, 8),
(63, 'Timber Management Pr', 85000, 700, 8),
(64, 'Wildlife Conservatio', 55000, 623, 8);

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
  `Tel` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tax` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`Location_ID`, `Location_name`, `Apartment`, `Building`, `Floor`, `House_No`, `Village`, `Village_No`, `Street`, `Sub_district_Sub_area`, `Alley_Lane`, `District_Area`, `Province`, `Postal_Code`, `Tel`, `Tax`) VALUES
(1, 'หมู่บ้านสวนธน', 'บ้านสวนธน', 'ทานตะวัน 3', '2', '435/639', 'บ้านสวนธน', 47, '5', 'ทุ่งตรุ', 'ประชาอุทิศ', '', 'กรุงเทพ', '10140', '0213456789', 7),
(2, 'kmutt', '', '', '', '126', '', 0, 'ประชาอุทิศ', '', '5', 'ทุ่งครุ', 'กรุงเทพ', '10140', '024708116', 7);

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
(1, 'วันสงกราณต์', '12-15 เม.ย 61', 500),
(2, 'วันขึ้นปีใหม่', '31 ธ.ค 61 - 3 ม.ค 62', 600),
(3, 'วันแรงงาน', '1 พ.ค 61', 500),
(4, 'วันวิสาขบูชา', '29 พ.ค 61', 500),
(5, 'วันอาสาฬหบูชา', '27 ก.ค 61', 500),
(6, 'วันเข้าพรรษา', '9 ก.ค 61', 500),
(7, 'วันแม่แห่งชาติ', '12 ส.ค 61', 500),
(8, 'วันหยุดชดเชยวันแม่', '13 ส.ค 61', 500),
(9, 'วันปิยมหาราช', '23 ต.ค 61', 500),
(10, 'วันพ่อแห่งชาติ', '5 ธ.ค 61', 500),
(11, 'วันรัฐธรรมนูญ', '10 ธ.ค 61', 500);

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
  `Tel` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Job_ID` int(10) UNSIGNED NOT NULL,
  `Social_link` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Work_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Education` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Emergency_Contact` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Hire_day` date NOT NULL,
  `End_date` date DEFAULT NULL,
  `Nationality` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Data_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `User_role` enum('admin','hr_admin','head','user') COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`ID_member`, `Firstname`, `Lastname`, `DOB`, `Gender`, `Marital_status`, `Email`, `Tel`, `Job_ID`, `Social_link`, `Work_type`, `Education`, `Photo`, `Emergency_Contact`, `Hire_day`, `End_date`, `Nationality`, `Data_status`, `User_role`, `password`, `remember_token`) VALUES
(1, 'พงศธร', 'จุ่งรุ่งเรือง', '1997-02-12', 'male', 'โสดเว้ย', 'fangc24h@gmail.com', '0922480725', 8, 'https://www.youtube.com/watch?v=qBIxl_6tFfo', 'Fulltime', 'KMUTT', '-', '1669', '2018-05-01', '2018-05-17', 'Thai', 'ทำอยู่เว้ย', 'user', '$2y$10$cJ18RKQrYe8uUVAtLHIn0OLKa1M6dZ4//wE3G8iDJXYpNg10hOvAO', 'b0mfcwaUPZ8lhTeBSZ9wIsZa5ezKxoVprLOrBpl3'),
(2, 'ธีรภัทร', 'ดวงกองเงิน', '2018-05-11', 'male', 'โสด', 'teeraphatmychin@gmail.com', '0837507839', 1, '-', 'parttime', '-', '-', '-', '2018-05-31', '2018-05-06', 'thai', 'ยังทำงานอยู่', 'user', '$2y$10$ECZIwxs/cbtJvxl4EjqJXu6bXhsR2WtP80dvew7UhNaNCmEOQl3fO', 'gZGKIhXEC4yo28jecH3Qz25AY7xotLBL3WLSyusopqSYKx48uiAlpAPVZuYh'),
(3, 'Velva', 'Prohaska', '1992-06-26', 'female', 'divorced', 'kenya39@yahoo.com', '0837119248', 8, '-', 'Full time', 'KMUIT', 'https://scontent.fbkk1-5.fna.fbcdn.net/v/t31.0-8/21082938_1634507129915520_7935661447298751260_o.jpg?_nc_cat=0&oh=e2b25e36c5f51fd0c01a004159a6ddf2&oe=5B4FF5A0', '0994587261', '2018-05-02', NULL, 'English', 'ทำงานอยู่', 'hr_admin', '$2y$10$pRPdbJk//ZcSXVv06bMxku9E28DxwYQLFc8FsEiru.JfNn5SfuziK', 'M8uD8GXVyH'),
(4, 'Kaia', 'Hamill', '1990-03-04', 'female', 'widowed', 'kayli.marquardt@yahoo.com', '0833005966', 1, '-', 'Part time', 'KMUTT', 'https://scontent.fbkk1-1.fna.fbcdn.net/v/t1.0-9/19554300_1405999659476969_400778324058538746_n.jpg?_nc_fx=fbkk1-5&_nc_cat=0&oh=3f8c5cfbd608c645a70c77253ee64ecb&oe=5B9D9C97', '0984343965', '2018-05-02', NULL, 'English', 'ทำงานอยู่', 'admin', '$2y$10$pRPdbJk//ZcSXVv06bMxku9E28DxwYQLFc8FsEiru.JfNn5SfuziK', 'gaCeIjRJVX'),
(5, 'Lori', 'Davis', '1979-06-12', 'male', 'single', 'elaina.grimes@yahoo.com', '0891334821', 5, '-', 'Full time', 'KMUTT', 'https://scontent.fbkk1-1.fna.fbcdn.net/v/t1.0-9/19554300_1405999659476969_400778324058538746_n.jpg?_nc_fx=fbkk1-5&_nc_cat=0&oh=3f8c5cfbd608c645a70c77253ee64ecb&oe=5B9D9C97', '0938221288', '2018-05-02', NULL, 'English', 'ทำงานอยู่', 'admin', '$2y$10$pRPdbJk//ZcSXVv06bMxku9E28DxwYQLFc8FsEiru.JfNn5SfuziK', 'vegvCbKe7B'),
(6, 'Nikki', 'Leffler', '1998-05-13', 'female', 'widowed', 'thauck@gmail.com', '0821873353', 5, '-', 'Part time', 'KMUNB', 'https://scontent.fbkk1-5.fna.fbcdn.net/v/t31.0-8/21082938_1634507129915520_7935661447298751260_o.jpg?_nc_cat=0&oh=e2b25e36c5f51fd0c01a004159a6ddf2&oe=5B4FF5A0', '0955001904', '2018-05-02', NULL, 'Thai', 'ไม่ได้ทำงานแล้ว', 'user', '$2y$10$pRPdbJk//ZcSXVv06bMxku9E28DxwYQLFc8FsEiru.JfNn5SfuziK', '194DaClnmV'),
(7, 'Daisha', 'Romaguera', '1991-06-01', 'female', 'divorced', 'jcrona@yahoo.com', '0883535250', 28, '-', 'Full time', 'KMUNB', 'https://scontent.fbkk1-5.fna.fbcdn.net/v/t31.0-8/21082938_1634507129915520_7935661447298751260_o.jpg?_nc_cat=0&oh=e2b25e36c5f51fd0c01a004159a6ddf2&oe=5B4FF5A0', '0938926387', '2018-05-02', NULL, 'Thai', 'ทำงานอยู่', 'hr_admin', '$2y$10$pRPdbJk//ZcSXVv06bMxku9E28DxwYQLFc8FsEiru.JfNn5SfuziK', 'Msrfn4280f'),
(8, 'Shanel', 'Pfannerstill', '1998-06-29', 'male', 'single', 'leuschke.joany@yahoo.com', '0883321798', 6, '-', 'Part time', 'KMUIT', 'https://scontent.fbkk1-5.fna.fbcdn.net/v/t31.0-8/21082938_1634507129915520_7935661447298751260_o.jpg?_nc_cat=0&oh=e2b25e36c5f51fd0c01a004159a6ddf2&oe=5B4FF5A0', '0950379802', '2018-05-02', NULL, 'English', 'ไม่ได้ทำงานแล้ว', 'admin', '$2y$10$pRPdbJk//ZcSXVv06bMxku9E28DxwYQLFc8FsEiru.JfNn5SfuziK', 'XDo3P7QAwZ'),
(9, 'Angelina', 'Lynch', '1992-01-07', 'female', 'single', 'trent.lesch@gmail.com', '0863299603', 26, '-', 'Full time', 'KMUTT', 'https://scontent.fbkk1-1.fna.fbcdn.net/v/t1.0-9/19554300_1405999659476969_400778324058538746_n.jpg?_nc_fx=fbkk1-5&_nc_cat=0&oh=3f8c5cfbd608c645a70c77253ee64ecb&oe=5B9D9C97', '0946477847', '2018-05-02', NULL, 'English', 'ไม่ได้ทำงานแล้ว', 'hr_admin', '$2y$10$pRPdbJk//ZcSXVv06bMxku9E28DxwYQLFc8FsEiru.JfNn5SfuziK', '2cMqswQrUh'),
(10, 'Nayeli', 'Ortiz', '1985-07-13', 'male', 'single', 'bertrand36@yahoo.com', '0884926429', 33, '-', 'Part time', 'KMUNB', 'https://scontent.fbkk1-5.fna.fbcdn.net/v/t31.0-8/21082938_1634507129915520_7935661447298751260_o.jpg?_nc_cat=0&oh=e2b25e36c5f51fd0c01a004159a6ddf2&oe=5B4FF5A0', '0972117388', '2018-05-02', NULL, 'Thai', 'ทำงานอยู่', 'admin', '$2y$10$pRPdbJk//ZcSXVv06bMxku9E28DxwYQLFc8FsEiru.JfNn5SfuziK', 'GQbo6NbpS9'),
(11, 'Emmanuelle', 'Yundt', '1997-02-03', 'female', 'Married', 'witting.katharina@gmail.com', '0893296539', 48, '-', 'Part time', 'KMUTT', 'https://scontent.fbkk1-1.fna.fbcdn.net/v/t1.0-9/19554300_1405999659476969_400778324058538746_n.jpg?_nc_fx=fbkk1-5&_nc_cat=0&oh=3f8c5cfbd608c645a70c77253ee64ecb&oe=5B9D9C97', '0942621475', '2018-05-02', NULL, 'Thai', 'ไม่ได้ทำงานแล้ว', 'admin', '$2y$10$pRPdbJk//ZcSXVv06bMxku9E28DxwYQLFc8FsEiru.JfNn5SfuziK', 'q8TWa17jKR'),
(12, 'Karli', 'McCullough', '1986-02-18', 'male', 'widowed', 'rahul.gulgowski@yahoo.com', '0871078856', 26, '-', 'Full time', 'KMUNB', 'https://scontent.fbkk1-5.fna.fbcdn.net/v/t31.0-8/21082938_1634507129915520_7935661447298751260_o.jpg?_nc_cat=0&oh=e2b25e36c5f51fd0c01a004159a6ddf2&oe=5B4FF5A0', '0926783620', '2018-05-02', NULL, 'Thai', 'ทำงานอยู่', 'head', '$2y$10$pRPdbJk//ZcSXVv06bMxku9E28DxwYQLFc8FsEiru.JfNn5SfuziK', '9mDxbtYKOK'),
(13, 'Kailee', 'Cummerata', '1989-10-29', 'male', 'divorced', 'xstoltenberg@gmail.com', '0842022244', 11, '-', 'Part time', 'KMUTT', 'https://scontent.fbkk1-5.fna.fbcdn.net/v/t31.0-8/21082938_1634507129915520_7935661447298751260_o.jpg?_nc_cat=0&oh=e2b25e36c5f51fd0c01a004159a6ddf2&oe=5B4FF5A0', '0948218660', '2018-05-02', NULL, 'English', 'ทำงานอยู่', 'hr_admin', '$2y$10$pRPdbJk//ZcSXVv06bMxku9E28DxwYQLFc8FsEiru.JfNn5SfuziK', 'Hlq0wp6URx'),
(14, 'Rhea', 'Collier', '1988-11-09', 'male', 'widowed', 'stroman.hunter@gmail.com', '0846342029', 48, '-', 'Part time', 'KMUTT', 'https://scontent.fbkk1-5.fna.fbcdn.net/v/t31.0-8/21082938_1634507129915520_7935661447298751260_o.jpg?_nc_cat=0&oh=e2b25e36c5f51fd0c01a004159a6ddf2&oe=5B4FF5A0', '0988215061', '2018-05-02', NULL, 'English', 'ไม่ได้ทำงานแล้ว', 'admin', '$2y$10$pRPdbJk//ZcSXVv06bMxku9E28DxwYQLFc8FsEiru.JfNn5SfuziK', 'D33rxBtz4PagbaBy9OFqIVyuCL8TD3jsFzjFqK9fU4kDI3C6EQbpzYmT046d'),
(15, 'Antonetta', 'Balistreri', '1995-05-30', 'male', 'widowed', 'goyette.hoyt@yahoo.com', '0853191275', 29, '-', 'Full time', 'KMUIT', 'https://scontent.fbkk1-5.fna.fbcdn.net/v/t31.0-8/21082938_1634507129915520_7935661447298751260_o.jpg?_nc_cat=0&oh=e2b25e36c5f51fd0c01a004159a6ddf2&oe=5B4FF5A0', '0954775372', '2018-05-02', NULL, 'Thai', 'ไม่ได้ทำงานแล้ว', 'hr_admin', '$2y$10$pRPdbJk//ZcSXVv06bMxku9E28DxwYQLFc8FsEiru.JfNn5SfuziK', 'NCBP5alOa0'),
(16, 'Vickie', 'Roob', '1981-07-03', 'female', 'divorced', 'reichert.pablo@yahoo.com', '0883765943', 11, '-', 'Part time', 'KMUTT', 'https://scontent.fbkk1-1.fna.fbcdn.net/v/t1.0-9/19554300_1405999659476969_400778324058538746_n.jpg?_nc_fx=fbkk1-5&_nc_cat=0&oh=3f8c5cfbd608c645a70c77253ee64ecb&oe=5B9D9C97', '0998477387', '2018-05-02', NULL, 'English', 'ไม่ได้ทำงานแล้ว', 'head', '$2y$10$pRPdbJk//ZcSXVv06bMxku9E28DxwYQLFc8FsEiru.JfNn5SfuziK', 'H9xsVbPXiZ'),
(17, 'Mafalda', 'O\'Connell', '1999-04-03', 'male', 'divorced', 'jan74@yahoo.com', '0818879290', 3, '-', 'Part time', 'KMUTT', 'https://scontent.fbkk1-5.fna.fbcdn.net/v/t31.0-8/21082938_1634507129915520_7935661447298751260_o.jpg?_nc_cat=0&oh=e2b25e36c5f51fd0c01a004159a6ddf2&oe=5B4FF5A0', '0993551129', '2018-05-02', NULL, 'English', 'ทำงานอยู่', 'head', '$2y$10$pRPdbJk//ZcSXVv06bMxku9E28DxwYQLFc8FsEiru.JfNn5SfuziK', '4qH8sOYA5m'),
(18, 'Gina', 'Wiza', '1982-03-25', 'male', 'divorced', 'borer.alva@yahoo.com', '0854149497', 19, '-', 'Full time', 'KMUIT', 'https://scontent.fbkk1-5.fna.fbcdn.net/v/t31.0-8/21082938_1634507129915520_7935661447298751260_o.jpg?_nc_cat=0&oh=e2b25e36c5f51fd0c01a004159a6ddf2&oe=5B4FF5A0', '0971377376', '2018-05-02', NULL, 'Thai', 'ไม่ได้ทำงานแล้ว', 'head', '$2y$10$pRPdbJk//ZcSXVv06bMxku9E28DxwYQLFc8FsEiru.JfNn5SfuziK', 'ufMcG8YP7U'),
(19, 'Marina', 'Morar', '1998-01-06', 'female', 'single', 'bhalvorson@hotmail.com', '0835824253', 17, '-', 'Part time', 'KMUIT', 'https://scontent.fbkk1-5.fna.fbcdn.net/v/t31.0-8/21082938_1634507129915520_7935661447298751260_o.jpg?_nc_cat=0&oh=e2b25e36c5f51fd0c01a004159a6ddf2&oe=5B4FF5A0', '0978825209', '2018-05-02', NULL, 'English', 'ไม่ได้ทำงานแล้ว', 'head', '$2y$10$pRPdbJk//ZcSXVv06bMxku9E28DxwYQLFc8FsEiru.JfNn5SfuziK', 'irdhwM9RH4'),
(20, 'Elouise', 'McClure', '1983-07-26', 'male', 'divorced', 'aliyah.fay@gmail.com', '0858115501', 36, '-', 'Part time', 'KMUIT', 'https://scontent.fbkk1-1.fna.fbcdn.net/v/t1.0-9/19554300_1405999659476969_400778324058538746_n.jpg?_nc_fx=fbkk1-5&_nc_cat=0&oh=3f8c5cfbd608c645a70c77253ee64ecb&oe=5B9D9C97', '0952553545', '2018-05-02', NULL, 'English', 'ไม่ได้ทำงานแล้ว', 'user', '$2y$10$pRPdbJk//ZcSXVv06bMxku9E28DxwYQLFc8FsEiru.JfNn5SfuziK', 'B0NVoQ8818');

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
  `Certificate_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Value_Certificate` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `value_of_each_certificate`
--

INSERT INTO `value_of_each_certificate` (`ID_Certificate`, `Certificate_name`, `Value_Certificate`) VALUES
(1, 'Certified Public Accountant (CPA)', '9000'),
(2, 'Certified Management Accountant (CMA)', '9000'),
(3, 'MCSE: Private Cloud', '10000'),
(4, 'CompTIA Cloud+ certifications', '10000'),
(5, ' Cisco Certified Network Professional (CCNP)', '9000'),
(6, 'Cisco Certified Internetwork Expert (CCIE)', '9500'),
(7, 'Oracle 11g certification', '9500'),
(8, 'Oracle 12c certification', '9500'),
(9, 'C/C++ certification', '7000'),
(10, 'Certified Information Security Manager designation offered through ISACA', '8500'),
(11, 'Certified Ethical Hacker (CEH)', '9000'),
(12, 'Certified Information Systems Security Professional (CISSP)', '10000');

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
  MODIFY `Activity_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `activity_department`
--
ALTER TABLE `activity_department`
  MODIFY `ID_listActivity` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `ID_Address` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `Depart_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `history_work`
--
ALTER TABLE `history_work`
  MODIFY `HW_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `Job_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `Location_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment_special`
--
ALTER TABLE `payment_special`
  MODIFY `ID_Payment_Special` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `ID_member` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `value_of_each_certificate`
--
ALTER TABLE `value_of_each_certificate`
  MODIFY `ID_Certificate` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
