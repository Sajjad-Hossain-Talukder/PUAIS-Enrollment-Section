-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2022 at 08:48 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `academic_info_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `activate_session_infos`
--

CREATE TABLE `activate_session_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session_sl` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activate_session_infos`
--

INSERT INTO `activate_session_infos` (`id`, `session_sl`, `created_at`, `updated_at`) VALUES
(1, 13, '2022-09-15 14:12:06', '2022-10-27 12:44:03');

-- --------------------------------------------------------

--
-- Table structure for table `admin_infos`
--

CREATE TABLE `admin_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_infos`
--

INSERT INTO `admin_infos` (`id`, `name`, `designation`, `email`, `contact`, `password`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Taufique Sayeed', 'Chairman', 'admin@gmail.com', '01875864525', '827ccb0eea8a706c4c34a16891f84e7b', '1662321570deansir.jpg', '2022-09-04 13:59:30', '2022-09-04 13:59:30');

-- --------------------------------------------------------

--
-- Table structure for table `advisorship_infos`
--

CREATE TABLE `advisorship_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_sl` bigint(20) UNSIGNED NOT NULL,
  `teacher_sl` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advisorship_infos`
--

INSERT INTO `advisorship_infos` (`id`, `student_sl`, `teacher_sl`, `created_at`, `updated_at`) VALUES
(4, 3, 1, '2022-09-09 00:13:21', '2022-09-09 00:13:21'),
(5, 1, 2, '2022-09-09 00:15:28', '2022-09-09 00:15:28'),
(6, 4, 3, '2022-09-18 13:46:37', '2022-09-18 13:46:37'),
(7, 5, 2, '2022-09-21 00:43:09', '2022-09-21 00:43:09'),
(8, 8, 1, '2022-10-27 12:41:10', '2022-10-27 12:41:10'),
(9, 9, 2, '2022-10-27 12:41:20', '2022-10-27 12:41:20'),
(10, 11, 3, '2022-10-27 12:41:28', '2022-10-27 12:41:28'),
(11, 10, 1, '2022-10-27 12:41:37', '2022-10-27 12:41:37'),
(12, 12, 2, '2022-10-27 12:41:43', '2022-10-27 12:41:43'),
(13, 13, 3, '2022-10-27 12:41:49', '2022-10-27 12:41:49'),
(14, 6, 2, '2022-10-27 12:41:57', '2022-10-27 12:41:57');

-- --------------------------------------------------------

--
-- Table structure for table `all_users`
--

CREATE TABLE `all_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_approved` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `all_users`
--

INSERT INTO `all_users` (`id`, `name`, `email`, `password`, `role`, `image`, `is_approved`, `created_at`, `updated_at`) VALUES
(4, 'Taufique Sayeed', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'admin', '1662321483deansir.jpg', 1, '2022-09-04 13:58:03', '2022-09-04 13:58:03'),
(6, 'Sajjad Hossain Talukder', 'sajjad@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', '1662622460292471957_1742437246115486_4499143554723687030_n.jpg', 1, '2022-09-08 01:34:20', '2022-09-08 01:34:20'),
(8, 'Anik Sen', 'anik@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'teacher', '1662624473aniksen.jpeg', 1, '2022-09-08 02:07:53', '2022-09-08 02:07:53'),
(9, 'K.M. Naimuddin', 'naim@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', '1662674746test.jpg', 1, '2022-09-08 16:05:47', '2022-09-08 16:05:47'),
(10, 'Mehedi Hasan', 'hasan@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'teacher', '1662675029mehedisir.jpeg', 1, '2022-09-08 16:10:29', '2022-09-08 16:10:29'),
(11, 'Arman Mahmud', 'arman@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', '1663527910download.jpeg', 1, '2022-09-18 13:05:11', '2022-09-18 13:05:11'),
(12, 'Syed Md. Minhaz Hossain', 'minhaj@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'teacher', '16635287341564067983869.jpeg', 1, '2022-09-18 13:18:54', '2022-09-18 13:18:54'),
(13, 'Rakibur Rahman', 'rakibrah@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', '1663742173istockphoto-973481352-612x612.jpg', 1, '2022-09-21 00:36:15', '2022-09-21 00:36:15'),
(14, 'Kousik Chowdhury', 'kousik@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', '1663988662154540296-indian-asian-collage-boy-in-formal-dress-and-wearing-spectacles.webp', 1, '2022-09-23 21:04:23', '2022-09-23 21:04:23'),
(15, 'Nuran Tanzim', 'nuran@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', '1663988808images.jpeg', 1, '2022-09-23 21:06:48', '2022-09-23 21:06:48'),
(16, 'Student 01', 'one@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'student', '1666894709one.png', 1, '2022-10-27 12:18:29', '2022-10-27 12:18:29'),
(17, 'Student 02', 'two@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'student', '1666895715two.png', 1, '2022-10-27 12:35:15', '2022-10-27 12:35:15'),
(18, 'Student 04', 'four@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'student', '1666895866four.png', 1, '2022-10-27 12:37:46', '2022-10-27 12:37:46'),
(19, 'Student 03', 'three@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'student', '1666895939three.png', 1, '2022-10-27 12:38:59', '2022-10-27 12:38:59'),
(20, 'Student 05', 'five@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'student', '1666896003five.jpeg', 1, '2022-10-27 12:40:03', '2022-10-27 12:40:03'),
(21, 'Student 06', 'six@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'student', '1666896053six.jpeg', 1, '2022-10-27 12:40:53', '2022-10-27 12:40:53');

-- --------------------------------------------------------

--
-- Table structure for table `course_infos`
--

CREATE TABLE `course_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nsemester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prerequisite` bigint(255) NOT NULL,
  `credit` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_infos`
--

INSERT INTO `course_infos` (`id`, `nsemester`, `semester`, `course_code`, `course_title`, `prerequisite`, `credit`, `created_at`, `updated_at`) VALUES
(1, '-', '-', '-', 'N/A', 0, 0.00, '2022-09-07 09:12:23', '2022-09-07 09:12:24'),
(2, '1', 'First', 'CSE 110', 'Introduction to Computer systems', 1, 2.00, '2022-09-09 03:43:39', '2022-09-09 03:43:39'),
(3, '1', 'First', 'EEE 101', 'Electrical Circuits I', 1, 3.00, '2022-09-09 03:45:29', '2022-09-09 03:45:29'),
(4, '1', 'First', 'EEE 102', 'Electrical Circuits I lab', 1, 1.50, '2022-09-09 03:48:22', '2022-09-09 03:48:22'),
(5, '1', 'First', 'MAT 105', 'Engineering Math I', 1, 3.00, '2022-09-09 03:48:46', '2022-09-09 03:48:46'),
(6, '1', 'First', 'PHY 101', 'Engineering Physics I', 1, 3.00, '2022-09-09 03:49:10', '2022-09-09 03:49:10'),
(7, '1', 'First', 'ME 101', 'Mechnical Engineering & CAD', 1, 1.00, '2022-09-09 03:49:44', '2022-09-09 03:49:44'),
(8, '1', 'First', 'ACC 101', 'Basic Accounting', 1, 3.00, '2022-09-09 03:50:02', '2022-09-09 03:50:02'),
(9, '1', 'First', 'ENG 101', 'General English', 1, 3.00, '2022-09-09 03:50:25', '2022-09-09 03:50:25'),
(10, '2', 'Second', 'CSE 111', 'Structured Programming Language', 2, 2.00, '2022-09-09 03:51:58', '2022-09-09 03:51:58'),
(11, '2', 'Second', 'CSE 112', 'Structured Programming Language Lab', 2, 2.00, '2022-09-09 03:52:22', '2022-09-09 03:52:22'),
(12, '2', 'Second', 'EEE 211', 'Electronics I', 3, 3.00, '2022-09-09 03:53:19', '2022-09-09 03:53:19'),
(13, '2', 'Second', 'EEE 212', 'Electronics I Lab', 4, 1.50, '2022-09-21 01:46:45', '2022-09-21 01:46:45'),
(14, '2', 'Second', 'CSE 103', 'Discreate Mathematics', 1, 3.00, '2022-09-21 01:48:25', '2022-09-21 01:48:25'),
(15, '2', 'Second', 'PHY 101', 'Engineering Physics II', 6, 3.00, '2022-09-21 01:50:43', '2022-09-21 01:50:43'),
(16, '2', 'Second', 'MAT 106', 'Engineering Mathematics II', 5, 3.00, '2022-09-21 01:51:18', '2022-09-21 01:51:18'),
(17, '2', 'Second', 'ENG 103', 'Developing English Skills', 9, 2.00, '2022-09-21 01:52:22', '2022-09-21 01:52:22'),
(18, '3', 'Third', 'CSE 221', 'Data Structure', 10, 2.00, '2022-09-21 01:53:07', '2022-09-21 01:53:07'),
(19, '3', 'Third', 'CSE 222', 'Data Structure Lab', 11, 2.00, '2022-09-21 01:53:41', '2022-09-21 01:53:41'),
(20, '3', 'Third', 'CSE 211', 'Object Oriented Programming', 1, 3.00, '2022-09-21 01:54:13', '2022-09-21 01:54:13'),
(21, '3', 'Third', 'CSE 212', 'Object Oriented Programming Lab', 1, 1.50, '2022-09-21 01:54:35', '2022-09-21 01:54:35'),
(22, '3', 'Third', 'EEE 311', 'Digital Electronics', 12, 3.00, '2022-09-21 01:55:22', '2022-09-21 01:55:22'),
(23, '3', 'Third', 'EEE 312', 'Digital Electronics Lab', 13, 1.50, '2022-09-21 01:55:53', '2022-09-21 01:55:53'),
(25, '3', 'Third', 'MAT 201', 'Engineering Mathematics III', 16, 3.00, '2022-09-21 01:58:17', '2022-09-21 01:58:17'),
(26, '3', 'Third', 'ECO 201', 'Economics', 8, 3.00, '2022-09-21 02:00:01', '2022-09-21 02:00:01'),
(27, '4', 'Fourth', 'CSE 225', 'Alogrithm Design & Analysis', 18, 3.00, '2022-09-21 02:00:52', '2022-09-21 02:00:52'),
(28, '4', 'Fourth', 'CSE 226', 'Alogrithm Design & Analysis lab', 19, 1.00, '2022-09-21 02:01:37', '2022-09-21 02:01:37'),
(29, '4', 'Fourth', 'MAT 203', 'Engineering Mathematics IV', 25, 3.00, '2022-09-21 02:02:32', '2022-09-21 02:02:32'),
(30, '4', 'Fourth', 'EEE 201', 'Signals & Systems', 12, 3.00, '2022-09-21 02:04:32', '2022-09-21 02:04:32'),
(31, '4', 'Fourth', 'EEE 202', 'Signals & Systems Lab', 13, 1.00, '2022-09-21 02:05:10', '2022-09-21 02:05:10'),
(32, '4', 'Fourth', 'CSE 237', 'DBMS', 20, 3.00, '2022-09-21 02:05:44', '2022-09-21 02:05:44'),
(33, '4', 'Fourth', 'CSE 238', 'DBMS Lab', 21, 1.50, '2022-09-21 02:06:10', '2022-09-21 02:06:10'),
(34, '4', 'Fourth', 'MGT 203', 'Indrustrial & Business Management', 26, 3.00, '2022-09-21 02:06:43', '2022-09-21 02:06:43'),
(35, '5', 'Fifth', 'CSE 301', 'CMEP', 29, 3.00, '2022-09-21 02:08:01', '2022-09-21 02:08:01'),
(36, '5', 'Fifth', 'CSE 302', 'CMEP Lab', 1, 1.00, '2022-09-21 02:08:21', '2022-09-21 02:08:21'),
(37, '5', 'Fifth', 'EEE 371', 'Microprocessor & Microcontoller', 30, 3.00, '2022-09-21 02:09:02', '2022-09-21 02:09:02'),
(39, '5', 'Fifth', 'EEE 372', 'Microprocessor & Microcontoller Lab', 30, 1.50, '2022-10-27 11:46:28', '2022-10-27 11:46:28'),
(40, '5', 'Fifth', 'CSE 305', 'SEISD', 32, 4.00, '2022-10-27 11:49:23', '2022-10-27 11:49:23'),
(41, '5', 'Fifth', 'CSE 306', 'SEISD Lab', 32, 1.50, '2022-10-27 11:49:59', '2022-10-27 11:49:59'),
(42, '5', 'Fifth', 'EEE 309', 'Communications Theory', 30, 3.00, '2022-10-27 11:50:45', '2022-10-27 11:50:45'),
(43, '5', 'Fifth', 'EEE 310', 'Communications Theory  Lab', 31, 1.50, '2022-10-27 11:51:16', '2022-10-27 11:51:16'),
(44, '5', 'Fifth', 'MGT 251', 'Organizational Behavior', 1, 3.00, '2022-10-27 11:52:08', '2022-10-27 11:52:08'),
(45, '6', 'Sixth', 'CSE 333', 'Operation System', 37, 3.00, '2022-10-27 11:53:12', '2022-10-27 11:53:12'),
(46, '6', 'Sixth', 'CSE 334', 'Operation System Lab', 39, 1.50, '2022-10-27 11:53:51', '2022-10-27 11:53:51'),
(47, '6', 'Sixth', 'CSE 337', 'Computer Organization & Architecture', 37, 3.00, '2022-10-27 11:54:36', '2022-10-27 11:54:36'),
(48, '6', 'Sixth', 'CSE 317', 'Artificial Intelligence', 35, 3.00, '2022-10-27 11:55:39', '2022-10-27 11:55:39'),
(49, '6', 'Sixth', 'CSE 318', 'Artificial Intelligence Lab', 36, 1.50, '2022-10-27 11:56:26', '2022-10-27 11:56:26'),
(50, '6', 'Sixth', 'CSE 367', 'Computer Network', 30, 3.00, '2022-10-27 11:57:26', '2022-10-27 11:57:26'),
(51, '6', 'Sixth', 'CSE 368', 'Computer Network Lab', 30, 1.50, '2022-10-27 11:58:07', '2022-10-27 11:58:07'),
(52, '6', 'Sixth', 'CSE 338', 'Software Development', 32, 2.00, '2022-10-27 11:59:00', '2022-10-27 11:59:00'),
(53, '6', 'Sixth', 'CSE 363', 'Data Communication', 1, 3.00, '2022-10-27 11:59:30', '2022-10-27 11:59:30'),
(54, '7', 'Seventh', 'EEE 313', 'Control Systems', 48, 3.00, '2022-10-27 12:00:35', '2022-10-27 12:00:35'),
(55, '7', 'Seventh', 'EEE 314', 'Control Systems Lab', 49, 1.50, '2022-10-27 12:01:22', '2022-10-27 12:01:22'),
(56, '7', 'Seventh', 'ENG 401', 'Technical Writing & Presentation', 9, 2.00, '2022-10-27 12:02:45', '2022-10-27 12:02:45'),
(57, '7', 'Seventh', 'CSE 309', 'Theory of Computation', 35, 2.00, '2022-10-27 12:03:49', '2022-10-27 12:03:49'),
(58, '7', 'Seventh', 'CSE 451', 'Neural Network & Fuzzy Logic', 48, 3.00, '2022-10-27 12:04:41', '2022-10-27 12:04:41'),
(59, '7', 'Seventh', 'CSE 452', 'Neural Network & Fuzzy Logic Lab', 49, 1.00, '2022-10-27 12:05:10', '2022-10-27 12:05:10'),
(60, '7', 'Seventh', 'CSE 437', 'Network & Computer Security', 50, 3.00, '2022-10-27 12:05:57', '2022-10-27 12:05:57'),
(61, '7', 'Seventh', 'CSE 455', 'CGIP', 48, 3.00, '2022-10-27 12:06:27', '2022-10-27 12:06:27'),
(62, '7', 'Seventh', 'CSE 456', 'CGIP Lab', 49, 1.00, '2022-10-27 12:06:59', '2022-10-27 12:06:59'),
(63, '8', 'Eighth', 'CSE 453', 'Compiler Construction', 57, 3.00, '2022-10-27 12:08:11', '2022-10-27 12:08:11'),
(64, '8', 'Eighth', 'CSE 454', 'Compiler Construction Lab', 58, 1.50, '2022-10-27 12:08:55', '2022-10-27 12:08:55'),
(65, '8', 'Eighth', 'CSE 457', 'Machine Learning', 48, 3.00, '2022-10-27 12:09:38', '2022-10-27 12:09:38'),
(66, '8', 'Eighth', 'CSE 458', 'Machine Learning Lab', 49, 1.00, '2022-10-27 12:10:17', '2022-10-27 12:10:17'),
(67, '8', 'Eighth', 'CSE 459', 'Pattern Recognition', 25, 3.00, '2022-10-27 12:10:59', '2022-10-27 12:10:59'),
(68, '8', 'Eighth', 'CSE 460', 'Pattern Recognition Lab', 25, 1.00, '2022-10-27 12:11:40', '2022-10-27 12:11:40');

-- --------------------------------------------------------

--
-- Table structure for table `image_models`
--

CREATE TABLE `image_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_08_14_194803_create_routines_table', 1),
(3, '2022_09_01_072619_create_image_models_table', 1),
(4, '2022_09_02_075032_create_all_users_table', 1),
(5, '2022_09_04_193022_create_admin_infos_table', 2),
(6, '2022_09_08_064027_create_student_infos_table', 3),
(7, '2022_09_08_075010_create_teacher_infos_table', 4),
(8, '2022_09_08_203140_create_advisorship_infos_table', 5),
(9, '2022_09_09_065111_create_session_infos_table', 6),
(10, '2022_09_09_090736_create_course_infos_table', 7),
(11, '2022_09_11_074109_create_offer_course_infos_table', 8),
(12, '2022_09_11_074948_create_offer_course_infos_table', 9),
(13, '2022_09_13_191655_create_pre_offer_course_infos_table', 10),
(14, '2022_09_15_195354_create_activate_session_infos_table', 11),
(15, '2022_09_15_215944_create_pre_enroll_course_infos_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `offer_course_infos`
--

CREATE TABLE `offer_course_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_sl` bigint(20) UNSIGNED NOT NULL,
  `session_sl` bigint(20) UNSIGNED NOT NULL,
  `teacher_sl` bigint(20) UNSIGNED NOT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_capacity` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offer_course_infos`
--

INSERT INTO `offer_course_infos` (`id`, `course_sl`, `session_sl`, `teacher_sl`, `section`, `student_capacity`, `created_at`, `updated_at`) VALUES
(1, 2, 11, 2, 'A', 40, '2022-09-11 02:24:47', '2022-09-11 02:24:47'),
(2, 3, 10, 1, 'A', 40, '2022-09-11 02:27:52', '2022-09-11 02:27:52'),
(3, 4, 9, 1, 'A1', 20, '2022-09-11 02:30:51', '2022-09-11 02:30:51'),
(4, 3, 11, 1, 'B', 40, '2022-09-11 02:34:56', '2022-09-11 02:34:56'),
(5, 5, 11, 2, 'A', 40, '2022-09-11 12:21:43', '2022-09-11 12:21:43'),
(6, 7, 11, 1, 'A1', 20, '2022-09-11 12:27:26', '2022-09-11 12:27:26'),
(7, 8, 11, 2, 'A', 40, '2022-09-11 12:27:47', '2022-09-11 12:27:47'),
(8, 9, 11, 2, 'A', 40, '2022-09-11 12:29:25', '2022-09-11 12:29:25'),
(9, 10, 10, 2, 'B', 40, '2022-09-12 13:46:58', '2022-09-12 13:46:58'),
(10, 10, 10, 2, 'B2', 56, '2022-09-12 13:51:33', '2022-09-12 13:51:33'),
(11, 10, 10, 2, 'B2', 56, '2022-09-12 13:52:00', '2022-09-12 13:52:00'),
(12, 10, 11, 2, 'E', 40, '2022-09-12 14:03:18', '2022-09-12 14:03:18'),
(13, 3, 11, 2, 'B', 40, '2022-09-12 14:03:50', '2022-09-12 14:03:50'),
(14, 3, 11, 1, 'A', 40, '2022-09-12 14:05:41', '2022-09-12 14:05:41'),
(15, 3, 8, 1, 'A', 40, '2022-09-14 07:11:13', '2022-09-14 07:11:13');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pre_enroll_course_infos`
--

CREATE TABLE `pre_enroll_course_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session_sl` bigint(20) NOT NULL,
  `course_sl` bigint(20) NOT NULL,
  `student_sl` bigint(20) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pre_enroll_course_infos`
--

INSERT INTO `pre_enroll_course_infos` (`id`, `session_sl`, `course_sl`, `student_sl`, `type`, `created_at`, `updated_at`) VALUES
(18, 12, 3, 3, 'Regular', '2022-09-22 13:10:06', '2022-09-22 13:10:06'),
(20, 12, 3, 5, 'Retake', '2022-09-22 13:10:46', '2022-09-22 13:10:46'),
(21, 10, 6, 1, 'Regular', '2022-09-23 21:50:57', '2022-09-23 21:50:57'),
(22, 10, 2, 1, 'Recourse', '2022-09-23 21:50:57', '2022-09-23 21:50:57'),
(23, 10, 3, 1, 'Retake', '2022-09-23 21:50:57', '2022-09-23 21:50:57'),
(24, 10, 7, 1, 'Regular', '2022-09-23 21:50:57', '2022-09-23 21:50:57'),
(25, 10, 4, 1, 'Recourse', '2022-09-23 21:50:57', '2022-09-23 21:50:57'),
(26, 10, 11, 1, 'Regular', '2022-09-23 21:50:57', '2022-09-23 21:50:57'),
(27, 10, 15, 1, 'Regular', '2022-09-23 21:50:57', '2022-09-23 21:50:57'),
(28, 10, 12, 1, 'Regular', '2022-09-23 21:50:57', '2022-09-23 21:50:57'),
(29, 10, 6, 3, 'Regular', '2022-09-23 21:52:41', '2022-09-23 21:52:41'),
(30, 10, 2, 3, 'Recourse', '2022-09-23 21:52:41', '2022-09-23 21:52:41'),
(31, 10, 3, 3, 'Recourse', '2022-09-23 21:52:41', '2022-09-23 21:52:41'),
(32, 10, 7, 3, 'Retake', '2022-09-23 21:52:41', '2022-09-23 21:52:41'),
(33, 10, 15, 3, 'Regular', '2022-09-23 21:52:41', '2022-09-23 21:52:41'),
(34, 10, 12, 3, 'Regular', '2022-09-23 21:52:41', '2022-09-23 21:52:41'),
(76, 13, 40, 8, 'Recourse', '2022-10-27 14:15:41', '2022-10-27 14:15:41'),
(77, 13, 50, 8, 'Regular', '2022-10-27 14:15:41', '2022-10-27 14:15:41'),
(78, 13, 54, 8, 'Recourse', '2022-10-27 14:15:41', '2022-10-27 14:15:41'),
(79, 13, 57, 8, 'Regular', '2022-10-27 14:15:41', '2022-10-27 14:15:41'),
(80, 13, 61, 8, 'Recourse', '2022-10-27 14:15:41', '2022-10-27 14:15:41'),
(81, 13, 63, 8, 'Regular', '2022-10-27 14:15:41', '2022-10-27 14:15:41'),
(82, 13, 67, 8, 'Recourse', '2022-10-27 14:15:41', '2022-10-27 14:15:41'),
(83, 13, 68, 8, 'Retake', '2022-10-27 14:15:41', '2022-10-27 14:15:41'),
(84, 13, 65, 8, 'Regular', '2022-10-27 14:15:41', '2022-10-27 14:15:41'),
(85, 13, 35, 9, 'Retake', '2022-10-27 14:19:47', '2022-10-27 14:19:47'),
(86, 13, 40, 9, 'Regular', '2022-10-27 14:19:47', '2022-10-27 14:19:47'),
(87, 13, 50, 9, 'Recourse', '2022-10-27 14:19:47', '2022-10-27 14:19:47'),
(88, 13, 45, 9, 'Regular', '2022-10-27 14:19:47', '2022-10-27 14:19:47'),
(89, 13, 54, 9, 'Recourse', '2022-10-27 14:19:47', '2022-10-27 14:19:47'),
(90, 13, 59, 9, 'Retake', '2022-10-27 14:19:47', '2022-10-27 14:19:47'),
(91, 13, 57, 9, 'Regular', '2022-10-27 14:19:47', '2022-10-27 14:19:47'),
(92, 13, 61, 9, 'Recourse', '2022-10-27 14:19:47', '2022-10-27 14:19:47'),
(93, 13, 67, 9, 'Regular', '2022-10-27 14:19:47', '2022-10-27 14:19:47'),
(94, 13, 65, 9, 'Recourse', '2022-10-27 14:19:47', '2022-10-27 14:19:47'),
(126, 13, 65, 11, 'Regular', '2022-10-28 04:44:49', '2022-10-28 04:44:49'),
(127, 13, 67, 11, 'Recourse', '2022-10-28 04:44:49', '2022-10-28 04:44:49'),
(128, 13, 68, 11, 'Retake', '2022-10-28 04:44:49', '2022-10-28 04:44:49'),
(129, 13, 45, 11, 'Recourse', '2022-10-28 04:45:52', '2022-10-28 04:45:52'),
(130, 13, 50, 11, 'Regular', '2022-10-28 04:45:52', '2022-10-28 04:45:52'),
(131, 13, 57, 11, 'Recourse', '2022-10-28 04:45:52', '2022-10-28 04:45:52'),
(132, 13, 54, 11, 'Regular', '2022-10-28 04:45:52', '2022-10-28 04:45:52'),
(133, 13, 35, 11, 'Regular', '2022-10-28 04:46:27', '2022-10-28 04:46:27'),
(140, 13, 64, 11, 'Retake', '2022-10-28 04:48:39', '2022-10-28 04:48:39'),
(142, 13, 40, 11, 'Recourse', '2022-10-28 04:49:27', '2022-10-28 04:49:27'),
(143, 13, 32, 10, 'Regular', '2022-10-28 04:52:32', '2022-10-28 04:52:32'),
(144, 13, 53, 10, 'Regular', '2022-10-28 04:52:32', '2022-10-28 04:52:32'),
(145, 13, 50, 10, 'Recourse', '2022-10-28 04:52:32', '2022-10-28 04:52:32'),
(146, 13, 52, 10, 'Recourse', '2022-10-28 04:52:32', '2022-10-28 04:52:32'),
(147, 13, 48, 10, 'Regular', '2022-10-28 04:52:32', '2022-10-28 04:52:32'),
(148, 13, 57, 10, 'Regular', '2022-10-28 04:52:32', '2022-10-28 04:52:32'),
(149, 13, 61, 10, 'Recourse', '2022-10-28 04:52:32', '2022-10-28 04:52:32'),
(150, 13, 54, 10, 'Recourse', '2022-10-28 04:52:32', '2022-10-28 04:52:32'),
(151, 13, 4, 10, 'Retake', '2022-10-28 04:53:10', '2022-10-28 04:53:10'),
(152, 13, 32, 12, 'Recourse', '2022-10-28 04:55:57', '2022-10-28 04:55:57'),
(153, 13, 53, 12, 'Regular', '2022-10-28 04:55:57', '2022-10-28 04:55:57'),
(154, 13, 45, 12, 'Regular', '2022-10-28 04:55:57', '2022-10-28 04:55:57'),
(155, 13, 50, 12, 'Regular', '2022-10-28 04:55:57', '2022-10-28 04:55:57'),
(156, 13, 46, 12, 'Recourse', '2022-10-28 04:55:57', '2022-10-28 04:55:57'),
(157, 13, 51, 12, 'Regular', '2022-10-28 04:55:57', '2022-10-28 04:55:57'),
(158, 13, 48, 12, 'Recourse', '2022-10-28 04:55:57', '2022-10-28 04:55:57'),
(159, 13, 52, 12, 'Recourse', '2022-10-28 04:55:57', '2022-10-28 04:55:57'),
(160, 13, 5, 12, 'Retake', '2022-10-28 04:57:02', '2022-10-28 04:57:02'),
(161, 13, 32, 13, 'Regular', '2022-10-28 04:58:58', '2022-10-28 04:58:58'),
(162, 13, 30, 13, 'Recourse', '2022-10-28 04:58:58', '2022-10-28 04:58:58'),
(163, 13, 35, 13, 'Regular', '2022-10-28 04:58:58', '2022-10-28 04:58:58'),
(164, 13, 40, 13, 'Recourse', '2022-10-28 04:58:58', '2022-10-28 04:58:58'),
(165, 13, 53, 13, 'Recourse', '2022-10-28 04:58:58', '2022-10-28 04:58:58'),
(166, 13, 45, 13, 'Recourse', '2022-10-28 04:58:58', '2022-10-28 04:58:58'),
(167, 13, 50, 13, 'Regular', '2022-10-28 04:58:58', '2022-10-28 04:58:58'),
(168, 13, 57, 13, 'Regular', '2022-10-28 04:58:58', '2022-10-28 04:58:58'),
(169, 13, 12, 13, 'Retake', '2022-10-28 05:00:18', '2022-10-28 05:00:18');

-- --------------------------------------------------------

--
-- Table structure for table `pre_offer_course_infos`
--

CREATE TABLE `pre_offer_course_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_sl` bigint(20) UNSIGNED NOT NULL,
  `session_sl` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pre_offer_course_infos`
--

INSERT INTO `pre_offer_course_infos` (`id`, `course_sl`, `session_sl`, `created_at`, `updated_at`) VALUES
(24, 2, 11, '2022-09-22 12:35:40', '2022-09-22 12:35:40'),
(25, 3, 11, '2022-09-22 12:35:40', '2022-09-22 12:35:40'),
(26, 4, 12, '2022-09-22 13:42:55', '2022-09-22 13:42:55'),
(27, 23, 12, '2022-09-22 13:42:55', '2022-09-22 13:42:55'),
(28, 3, 12, '2022-09-22 13:43:33', '2022-09-22 13:43:33'),
(29, 2, 12, '2022-09-22 14:06:18', '2022-09-22 14:06:18'),
(30, 10, 12, '2022-09-22 14:06:57', '2022-09-22 14:06:57'),
(31, 5, 12, '2022-09-22 14:08:33', '2022-09-22 14:08:33'),
(32, 2, 10, '2022-09-23 21:49:33', '2022-09-23 21:49:33'),
(33, 3, 10, '2022-09-23 21:49:33', '2022-09-23 21:49:33'),
(34, 4, 10, '2022-09-23 21:49:33', '2022-09-23 21:49:33'),
(35, 5, 10, '2022-09-23 21:49:33', '2022-09-23 21:49:33'),
(36, 6, 10, '2022-09-23 21:49:33', '2022-09-23 21:49:33'),
(37, 7, 10, '2022-09-23 21:49:33', '2022-09-23 21:49:33'),
(38, 8, 10, '2022-09-23 21:49:33', '2022-09-23 21:49:33'),
(39, 9, 10, '2022-09-23 21:49:33', '2022-09-23 21:49:33'),
(40, 10, 10, '2022-09-23 21:49:33', '2022-09-23 21:49:33'),
(41, 11, 10, '2022-09-23 21:49:33', '2022-09-23 21:49:33'),
(42, 12, 10, '2022-09-23 21:49:33', '2022-09-23 21:49:33'),
(43, 13, 10, '2022-09-23 21:49:33', '2022-09-23 21:49:33'),
(44, 14, 10, '2022-09-23 21:49:33', '2022-09-23 21:49:33'),
(45, 15, 10, '2022-09-23 21:49:33', '2022-09-23 21:49:33'),
(46, 16, 10, '2022-09-23 21:49:33', '2022-09-23 21:49:33'),
(47, 17, 10, '2022-09-23 21:49:33', '2022-09-23 21:49:33'),
(48, 18, 10, '2022-09-23 21:49:33', '2022-09-23 21:49:33'),
(49, 2, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(50, 3, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(51, 4, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(52, 5, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(53, 6, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(54, 7, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(55, 8, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(56, 9, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(57, 10, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(58, 11, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(59, 12, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(60, 13, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(61, 14, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(62, 15, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(63, 16, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(64, 17, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(65, 18, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(66, 19, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(67, 20, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(68, 21, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(69, 22, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(70, 23, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(71, 25, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(72, 26, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(73, 27, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(74, 28, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(75, 29, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(76, 30, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(77, 31, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(78, 32, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(79, 33, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(80, 34, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(81, 35, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(82, 36, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(83, 37, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(84, 39, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(85, 40, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(86, 41, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(87, 42, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(88, 43, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(89, 44, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(90, 45, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(91, 46, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(92, 47, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(93, 48, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(94, 49, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(95, 50, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(96, 51, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(97, 52, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(98, 53, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(99, 54, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(100, 55, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(101, 56, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(102, 57, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(103, 58, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(104, 59, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(105, 60, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(106, 61, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(107, 62, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(108, 63, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(109, 64, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(110, 65, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(111, 66, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(112, 67, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23'),
(113, 68, 13, '2022-10-27 12:45:23', '2022-10-27 12:45:23');

-- --------------------------------------------------------

--
-- Table structure for table `routines`
--

CREATE TABLE `routines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `session_infos`
--

CREATE TABLE `session_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `session_infos`
--

INSERT INTO `session_infos` (`id`, `session_name`, `session_year`, `created_at`, `updated_at`) VALUES
(8, 'Spring', '2021', '2022-09-11 01:20:55', '2022-09-11 01:20:55'),
(9, 'Fall', '2021', '2022-09-11 01:21:06', '2022-09-11 01:21:06'),
(10, 'Spring', '2022', '2022-09-11 01:21:18', '2022-09-11 01:21:18'),
(11, 'Fall', '2022', '2022-09-11 01:21:41', '2022-09-11 01:21:41'),
(12, 'Spring', '2023', '2022-09-21 00:38:30', '2022-09-21 00:38:30'),
(13, 'Spring', '2030', '2022-10-27 12:43:46', '2022-10-27 12:43:46');

-- --------------------------------------------------------

--
-- Table structure for table `student_infos`
--

CREATE TABLE `student_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_infos`
--

INSERT INTO `student_infos` (`id`, `name`, `father_name`, `mother_name`, `date_of_birth`, `gender`, `department`, `student_id`, `batch`, `email`, `mobile`, `address`, `image`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Sajjad Hossain Talukder', 'Abu Alam Talukder', 'Saju Begum', '1998-12-19', 'male', 'Computer Science & Engineering - CSE', '1803510201623', '35', 'sajjad@gmail.com', '01871156068', 'Tara Building , Kalarpool , khatiberhat , Hazi Chand Mia Road , Bahaddarhat , Chittagong', '1662622460292471957_1742437246115486_4499143554723687030_n.jpg', '827ccb0eea8a706c4c34a16891f84e7b', '2022-09-08 01:34:20', '2022-09-08 01:34:20'),
(3, 'K.M. Naimuddin', 'K.M. Jainal Uddin', 'Nur jahan Begum', '1999-09-12', 'male', 'Computer Science & Engineering - CSE', '1803510201621', '35', 'naim@gmail.com', '01868795896', 'Cosmopolitob Residential', '1662674746test.jpg', '827ccb0eea8a706c4c34a16891f84e7b', '2022-09-08 16:05:47', '2022-09-08 16:05:47'),
(4, 'Arman Mahmud', 'Sarafat Ahmed', 'Alia Ahmed', '2022-09-01', 'male', 'Computer Science & Engineering - CSE', '1803510201625', '34', 'arman@gmail.com', '01879564265', '2 no gate , Chittagong', '1663527910download.jpeg', '827ccb0eea8a706c4c34a16891f84e7b', '2022-09-18 13:05:11', '2022-09-18 13:05:11'),
(5, 'Rakibur Rahman', 'X', 'Y', '2022-09-07', 'male', 'Computer Science & Engineering - CSE', '1803510201638', '33', 'rakibrah@gmail.com', '01856987845', 'Tiger Pass , Chittagong', '1663742173istockphoto-973481352-612x612.jpg', '827ccb0eea8a706c4c34a16891f84e7b', '2022-09-21 00:36:14', '2022-09-21 00:36:14'),
(6, 'Kousik Chowdhury', 'X', 'Y', '2022-09-01', 'male', 'Computer Science & Engineering - CSE', '1402710200803', '27', 'kousik@gmail.com', '01865987456', 'Kotowali', '1663988662154540296-indian-asian-collage-boy-in-formal-dress-and-wearing-spectacles.webp', '827ccb0eea8a706c4c34a16891f84e7b', '2022-09-23 21:04:23', '2022-09-23 21:04:23'),
(7, 'Nuran Tanzim', 'X', 'Y', '2022-08-25', 'male', 'Computer Science & Engineering - CSE', '1803510201640', '35', 'nuran@gmail.com', '01879856412', 'Bahaddarhat , Chittagong', '1663988808images.jpeg', '827ccb0eea8a706c4c34a16891f84e7b', '2022-09-23 21:06:48', '2022-09-23 21:06:48'),
(8, 'Student 01', 'X', 'Y', '2022-10-28', 'male', 'Computer Science & Engineering - CSE', '1803510201601', '36', 'one@gmail.com', '01871156068', 'Tara Building , Kalarpool , khatiberhat , Hazi Chand Mia Road , Bahaddarhat , Chittagong', '1666894709one.png', '81dc9bdb52d04dc20036dbd8313ed055', '2022-10-27 12:18:29', '2022-10-27 12:18:29'),
(9, 'Student 02', 'X', 'Y', '2022-10-28', 'male', 'Computer Science & Engineering - CSE', '1803510201602', '37', 'two@gmail.com', '01871156068', 'Tara Building , Kalarpool , khatiberhat , Hazi Chand Mia Road , Bahaddarhat , Chittagong', '1666895715two.png', '81dc9bdb52d04dc20036dbd8313ed055', '2022-10-27 12:35:15', '2022-10-27 12:35:15'),
(10, 'Student 04', 'X', 'Y', '2022-10-28', 'male', 'Computer Science & Engineering - CSE', '1803510201604', '38', 'four@gmail.com', '01871156068', 'Tara Building , Kalarpool , khatiberhat , Hazi Chand Mia Road , Bahaddarhat , Chittagong', '1666895866four.png', '81dc9bdb52d04dc20036dbd8313ed055', '2022-10-27 12:37:46', '2022-10-27 12:37:46'),
(11, 'Student 03', 'X', 'Y', '2022-10-28', 'male', 'Computer Science & Engineering - CSE', '1803510201603', '39', 'three@gmail.com', '01871156068', 'Tara Building , Kalarpool , khatiberhat , Hazi Chand Mia Road , Bahaddarhat , Chittagong', '1666895939three.png', '81dc9bdb52d04dc20036dbd8313ed055', '2022-10-27 12:38:59', '2022-10-27 12:38:59'),
(12, 'Student 05', 'X', 'Y', '2022-10-28', 'male', 'Computer Science & Engineering - CSE', '1803510201605', '40', 'five@gmail.com', '01871156068', 'Tara Building , Kalarpool , khatiberhat , Hazi Chand Mia Road , Bahaddarhat , Chittagong', '1666896003five.jpeg', '81dc9bdb52d04dc20036dbd8313ed055', '2022-10-27 12:40:03', '2022-10-27 12:40:03'),
(13, 'Student 06', 'X', 'Y', '2022-10-28', 'male', 'Computer Science & Engineering - CSE', '1803510201606', '40', 'six@gmail.com', '01871156068', 'Tara Building , Kalarpool , khatiberhat , Hazi Chand Mia Road , Bahaddarhat , Chittagong', '1666896053six.jpeg', '81dc9bdb52d04dc20036dbd8313ed055', '2022-10-27 12:40:53', '2022-10-27 12:40:53');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_infos`
--

CREATE TABLE `teacher_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher_infos`
--

INSERT INTO `teacher_infos` (`id`, `name`, `father_name`, `mother_name`, `date_of_birth`, `gender`, `department`, `teacher_id`, `designation`, `email`, `mobile`, `address`, `image`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Anik Sen', 'X', 'Y', '1985-05-12', 'male', 'Computer Science & Engineering - CSE', '12345', 'Assistant Professor', 'anik@gmail.com', '01879852654', 'New market Chittagong', '1662624473aniksen.jpeg', '827ccb0eea8a706c4c34a16891f84e7b', '2022-09-08 02:07:53', '2022-09-08 02:07:53'),
(2, 'Mehedi Hasan', 'X', 'Y', '1987-11-12', 'male', 'Computer Science & Engineering - CSE', '1001', 'Lecturer', 'hasan@gmail.com', '01235487524', 'Andorkillah , Chittagong', '1662675029mehedisir.jpeg', '827ccb0eea8a706c4c34a16891f84e7b', '2022-09-08 16:10:29', '2022-09-08 16:10:29'),
(3, 'Syed Md. Minhaz Hossain', 'X', 'Y', '2022-08-03', 'male', 'Computer Science & Engineering - CSE', '10009', 'Assistant Professor', 'minhaj@gmail.com', '0183659874', 'GEC more , Chittagong', '16635287341564067983869.jpeg', '827ccb0eea8a706c4c34a16891f84e7b', '2022-09-18 13:18:54', '2022-09-18 13:18:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activate_session_infos`
--
ALTER TABLE `activate_session_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_infos`
--
ALTER TABLE `admin_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advisorship_infos`
--
ALTER TABLE `advisorship_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `advisorship_infos_student_sl_foreign` (`student_sl`),
  ADD KEY `advisorship_infos_teacher_sl_foreign` (`teacher_sl`);

--
-- Indexes for table `all_users`
--
ALTER TABLE `all_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_infos`
--
ALTER TABLE `course_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_models`
--
ALTER TABLE `image_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer_course_infos`
--
ALTER TABLE `offer_course_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `offer_course_infos_course_sl_foreign` (`course_sl`),
  ADD KEY `offer_course_infos_session_sl_foreign` (`session_sl`),
  ADD KEY `offer_course_infos_teacher_sl_foreign` (`teacher_sl`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pre_enroll_course_infos`
--
ALTER TABLE `pre_enroll_course_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pre_offer_course_infos`
--
ALTER TABLE `pre_offer_course_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pre_offer_course_infos_course_sl_foreign` (`course_sl`),
  ADD KEY `pre_offer_course_infos_session_sl_foreign` (`session_sl`);

--
-- Indexes for table `routines`
--
ALTER TABLE `routines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `session_infos`
--
ALTER TABLE `session_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_infos`
--
ALTER TABLE `student_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_infos`
--
ALTER TABLE `teacher_infos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activate_session_infos`
--
ALTER TABLE `activate_session_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_infos`
--
ALTER TABLE `admin_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `advisorship_infos`
--
ALTER TABLE `advisorship_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `all_users`
--
ALTER TABLE `all_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `course_infos`
--
ALTER TABLE `course_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `image_models`
--
ALTER TABLE `image_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `offer_course_infos`
--
ALTER TABLE `offer_course_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pre_enroll_course_infos`
--
ALTER TABLE `pre_enroll_course_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT for table `pre_offer_course_infos`
--
ALTER TABLE `pre_offer_course_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `routines`
--
ALTER TABLE `routines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `session_infos`
--
ALTER TABLE `session_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `student_infos`
--
ALTER TABLE `student_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `teacher_infos`
--
ALTER TABLE `teacher_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `advisorship_infos`
--
ALTER TABLE `advisorship_infos`
  ADD CONSTRAINT `advisorship_infos_student_sl_foreign` FOREIGN KEY (`student_sl`) REFERENCES `student_infos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `advisorship_infos_teacher_sl_foreign` FOREIGN KEY (`teacher_sl`) REFERENCES `teacher_infos` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `offer_course_infos`
--
ALTER TABLE `offer_course_infos`
  ADD CONSTRAINT `offer_course_infos_course_sl_foreign` FOREIGN KEY (`course_sl`) REFERENCES `course_infos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `offer_course_infos_session_sl_foreign` FOREIGN KEY (`session_sl`) REFERENCES `session_infos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `offer_course_infos_teacher_sl_foreign` FOREIGN KEY (`teacher_sl`) REFERENCES `teacher_infos` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pre_offer_course_infos`
--
ALTER TABLE `pre_offer_course_infos`
  ADD CONSTRAINT `pre_offer_course_infos_course_sl_foreign` FOREIGN KEY (`course_sl`) REFERENCES `course_infos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pre_offer_course_infos_session_sl_foreign` FOREIGN KEY (`session_sl`) REFERENCES `session_infos` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
