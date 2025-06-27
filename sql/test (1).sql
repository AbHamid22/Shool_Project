-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2025 at 07:04 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(10) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `mobile` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `name`, `mobile`) VALUES
(1, 'BMW', '0123545'),
(2, 'TATA', '23545');

-- --------------------------------------------------------

--
-- Table structure for table `collection`
--

CREATE TABLE `collection` (
  `Id` int(10) NOT NULL,
  `Amount` varchar(20) DEFAULT NULL,
  `student_Id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `collection`
--

INSERT INTO `collection` (`Id`, `Amount`, `student_Id`) VALUES
(1, '50000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE `collections` (
  `id` int(20) NOT NULL,
  `name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `collections`
--

INSERT INTO `collections` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(10) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `mobile` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `mobile`) VALUES
(1, 'ISL', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `core_academy_admissions`
--

CREATE TABLE `core_academy_admissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `academy_student_id` int(10) UNSIGNED NOT NULL,
  `academy_batch_id` int(10) UNSIGNED NOT NULL,
  `academy_section_id` int(10) UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL,
  `roll` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_academy_admissions`
--

INSERT INTO `core_academy_admissions` (`id`, `academy_student_id`, `academy_batch_id`, `academy_section_id`, `created_at`, `roll`) VALUES
(1, 1, 1, 2, '2025-03-19 15:20:06', 2);

-- --------------------------------------------------------

--
-- Table structure for table `core_academy_attendances`
--

CREATE TABLE `core_academy_attendances` (
  `id` int(10) UNSIGNED NOT NULL,
  `academy_student_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `present_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `status` varchar(45) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_academy_attendances`
--

INSERT INTO `core_academy_attendances` (`id`, `academy_student_id`, `date`, `present_id`, `status`) VALUES
(1, 1, '2025-03-20 18:00:00', 1, 'Present'),
(2, 1, '2025-03-02 18:00:00', 2, 'Absent'),
(3, 2, '0000-00-00 00:00:00', 1, 'Present'),
(4, 2, '2025-03-23 18:00:00', 2, 'Absent');

-- --------------------------------------------------------

--
-- Table structure for table `core_academy_batches`
--

CREATE TABLE `core_academy_batches` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `current_class_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_academy_batches`
--

INSERT INTO `core_academy_batches` (`id`, `name`, `current_class_id`) VALUES
(1, 'Batch2', 1),
(2, 'Batch5', 2),
(7, 'Batch2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `core_academy_classes`
--

CREATE TABLE `core_academy_classes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_academy_classes`
--

INSERT INTO `core_academy_classes` (`id`, `name`) VALUES
(1, 'KG'),
(2, 'ONE'),
(3, 'TWO'),
(4, 'THREE'),
(5, 'FOUR'),
(6, 'FIVE');

-- --------------------------------------------------------

--
-- Table structure for table `core_academy_current_classes`
--

CREATE TABLE `core_academy_current_classes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_academy_current_classes`
--

INSERT INTO `core_academy_current_classes` (`id`, `name`) VALUES
(1, 'Five'),
(2, 'Six');

-- --------------------------------------------------------

--
-- Table structure for table `core_academy_exam_types`
--

CREATE TABLE `core_academy_exam_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_academy_exam_types`
--

INSERT INTO `core_academy_exam_types` (`id`, `name`) VALUES
(1, 'MCQ'),
(2, 'CT');

-- --------------------------------------------------------

--
-- Table structure for table `core_academy_money_receipts`
--

CREATE TABLE `core_academy_money_receipts` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` varchar(45) NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `remark` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core_academy_money_receipt_details`
--

CREATE TABLE `core_academy_money_receipt_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `service_id` int(10) UNSIGNED NOT NULL,
  `fee` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core_academy_periods`
--

CREATE TABLE `core_academy_periods` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `time` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_academy_periods`
--

INSERT INTO `core_academy_periods` (`id`, `name`, `time`) VALUES
(1, '1st Period', '( 9:00 AM - 9:45 AM)'),
(2, '2nd Period', '( 9:45 AM - 10:30 AM)'),
(3, '3rd Period', '( 10:30 AM - 11:15 AM)'),
(4, '4th Period', '( 11:15 AM - 12:00 PM)');

-- --------------------------------------------------------

--
-- Table structure for table `core_academy_presents`
--

CREATE TABLE `core_academy_presents` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_academy_presents`
--

INSERT INTO `core_academy_presents` (`id`, `name`) VALUES
(1, 'Yes'),
(2, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `core_academy_results`
--

CREATE TABLE `core_academy_results` (
  `id` int(10) UNSIGNED NOT NULL,
  `academy_student_id` int(10) UNSIGNED NOT NULL,
  `academy_subject_id` int(10) UNSIGNED NOT NULL,
  `academy_term_id` int(10) UNSIGNED NOT NULL,
  `academy_exam_type_id` int(10) UNSIGNED NOT NULL,
  `mark` float NOT NULL,
  `fullmark` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_academy_results`
--

INSERT INTO `core_academy_results` (`id`, `academy_student_id`, `academy_subject_id`, `academy_term_id`, `academy_exam_type_id`, `mark`, `fullmark`) VALUES
(1, 1, 1, 1, 1, 20, 50),
(2, 1, 2, 1, 1, 28, 50),
(3, 1, 3, 1, 1, 40, 50),
(4, 1, 4, 1, 1, 32, 50),
(5, 1, 5, 1, 1, 46, 50),
(6, 1, 2, 2, 2, 90, 100);

-- --------------------------------------------------------

--
-- Table structure for table `core_academy_routines`
--

CREATE TABLE `core_academy_routines` (
  `id` int(10) UNSIGNED NOT NULL,
  `academy_class_id` int(10) UNSIGNED NOT NULL,
  `academy_subject_id` int(10) UNSIGNED NOT NULL,
  `academy_teacher_id` int(10) UNSIGNED NOT NULL,
  `day` varchar(45) NOT NULL,
  `time` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_academy_routines`
--

INSERT INTO `core_academy_routines` (`id`, `academy_class_id`, `academy_subject_id`, `academy_teacher_id`, `day`, `time`) VALUES
(1, 1, 3, 3, 'SUN', '( 9:00 AM - 9:45 AM)'),
(2, 1, 2, 2, 'SUN', '( 9:00 AM - 9:45 AM)'),
(3, 1, 3, 1, 'MON', '( 9:00 AM - 9:45 AM)'),
(4, 2, 6, 4, 'SUN', '(10:45 AM - 11:30 AM )');

-- --------------------------------------------------------

--
-- Table structure for table `core_academy_sections`
--

CREATE TABLE `core_academy_sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_academy_sections`
--

INSERT INTO `core_academy_sections` (`id`, `name`) VALUES
(1, 'A'),
(2, 'B');

-- --------------------------------------------------------

--
-- Table structure for table `core_academy_services`
--

CREATE TABLE `core_academy_services` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core_academy_students`
--

CREATE TABLE `core_academy_students` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `fathers_name` varchar(45) NOT NULL,
  `mothers_name` varchar(45) NOT NULL,
  `academy_batch_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `dob` date DEFAULT NULL,
  `photo` varchar(45) DEFAULT NULL,
  `contact_no` varchar(45) DEFAULT NULL,
  `address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_academy_students`
--

INSERT INTO `core_academy_students` (`id`, `name`, `fathers_name`, `mothers_name`, `academy_batch_id`, `created_at`, `dob`, `photo`, `contact_no`, `address`) VALUES
(1, 'Jahidul Islam', 'Habibur Rahama', 'Najma Akter', 1, '2025-03-22 23:19:25', '2000-03-19', '1.jpg', '45435436565', 'Rampura'),
(2, 'Mahedi Hassan', 'Hamim', 'Jarin', 2, '2025-03-22 23:38:36', '2000-03-19', '2.jpg', '45435436565', 'Badda\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `core_academy_subjects`
--

CREATE TABLE `core_academy_subjects` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_academy_subjects`
--

INSERT INTO `core_academy_subjects` (`id`, `name`) VALUES
(1, 'Bengali'),
(2, 'English'),
(3, 'Mathematics'),
(4, 'Science'),
(5, 'Islamic Studies'),
(6, 'Social Science');

-- --------------------------------------------------------

--
-- Table structure for table `core_academy_teachers`
--

CREATE TABLE `core_academy_teachers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `contact_no` varchar(45) NOT NULL,
  `position` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_academy_teachers`
--

INSERT INTO `core_academy_teachers` (`id`, `name`, `contact_no`, `position`) VALUES
(1, 'Md. Hassan', '324324324', 'Asst. Teacher'),
(2, 'Md. Sabbir Ahmed', '3432432', 'Teacher'),
(3, 'Md. Hamid', '334324', 'Headmaster'),
(4, 'Md. Kamruzzaman', '34324324', 'Asst. Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `core_academy_terms`
--

CREATE TABLE `core_academy_terms` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_academy_terms`
--

INSERT INTO `core_academy_terms` (`id`, `name`) VALUES
(1, 'Mid Term'),
(2, 'Final');

-- --------------------------------------------------------

--
-- Table structure for table `core_assets`
--

CREATE TABLE `core_assets` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `price` double NOT NULL,
  `purchased_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_assets`
--

INSERT INTO `core_assets` (`id`, `name`, `price`, `purchased_at`) VALUES
(1, 'Computer', 50000, '2025-01-01 00:00:00'),
(2, 'Laptop', 60000, '2025-01-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `core_attendances`
--

CREATE TABLE `core_attendances` (
  `id` int(10) UNSIGNED NOT NULL,
  `roll_no` varchar(45) NOT NULL DEFAULT '',
  `student_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `date` datetime DEFAULT NULL,
  `status` varchar(45) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_attendances`
--

INSERT INTO `core_attendances` (`id`, `roll_no`, `student_id`, `date`, `status`) VALUES
(1, '2', 0, '1970-01-01 00:00:00', 'present'),
(2, '1', 1, '2025-03-26 00:00:00', 'present'),
(3, '3', 4, '1970-01-01 00:00:00', 'present'),
(4, '3', 4, '2025-03-21 00:00:00', 'Absent');

-- --------------------------------------------------------

--
-- Table structure for table `core_bookings`
--

CREATE TABLE `core_bookings` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL,
  `order_total` float NOT NULL,
  `paid_total` float NOT NULL,
  `remark` text DEFAULT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_bookings`
--

INSERT INTO `core_bookings` (`id`, `created_at`, `order_total`, `paid_total`, `remark`, `customer_id`) VALUES
(1, '2024-05-22 00:00:00', 1000, 1000, 'Test', 7),
(2, '2024-05-24 00:00:00', 700, 700, 'Test Update Api', 3),
(3, '2024-05-25 00:00:00', 3544, 3544, 'Test', 2),
(4, '2024-05-23 00:00:00', 500, 500, 'Test Api', 3),
(5, '0000-00-00 00:00:00', 446, 446, 'Test', 2),
(6, '0000-00-00 00:00:00', 344, 455, 'test', 1),
(7, '0000-00-00 00:00:00', 5000, 2000, 'NT', 1);

-- --------------------------------------------------------

--
-- Table structure for table `core_booking_details`
--

CREATE TABLE `core_booking_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `booking_id` int(10) UNSIGNED NOT NULL,
  `room_id` int(10) UNSIGNED NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_booking_details`
--

INSERT INTO `core_booking_details` (`id`, `booking_id`, `room_id`, `from_date`, `to_date`, `price`) VALUES
(1, 1, 1, '2024-02-10', '2024-02-11', 500),
(2, 6, 2, '2024-05-01', '2024-05-03', 500),
(3, 6, 1, '2024-05-01', '2024-05-03', 2000),
(4, 7, 2, '2024-05-29', '2024-05-30', 500),
(5, 7, 1, '2024-05-29', '2024-05-30', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `core_cache`
--

CREATE TABLE `core_cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core_cache_locks`
--

CREATE TABLE `core_cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core_cattles`
--

CREATE TABLE `core_cattles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `region` varchar(45) NOT NULL,
  `dob` date NOT NULL,
  `color` varchar(45) NOT NULL,
  `description` text DEFAULT NULL,
  `photo` varchar(45) DEFAULT NULL,
  `gender` tinyint(1) UNSIGNED DEFAULT NULL,
  `cattle_category_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_cattles`
--

INSERT INTO `core_cattles` (`id`, `name`, `region`, `dob`, `color`, `description`, `photo`, `gender`, `cattle_category_id`) VALUES
(2, 'Black and White', 'Indian', '2021-05-07', 'White', '', '2.webp', 1, 2),
(3, 'BlackCow', 'Indian', '2021-05-07', 'Black', '', '3.jpeg', 1, 1),
(19, 'Goat 25', 'Deshi', '2024-05-01', 'Red', '', '19.png', 0, 1),
(24, 'Goat 25', 'Deshi', '2021-05-07', 'Red', 'Test', '1-925-webp.webp', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `core_cattle_categories`
--

CREATE TABLE `core_cattle_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_cattle_categories`
--

INSERT INTO `core_cattle_categories` (`id`, `name`) VALUES
(1, 'Cow'),
(2, 'Goat');

-- --------------------------------------------------------

--
-- Table structure for table `core_company`
--

CREATE TABLE `core_company` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `bin` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `website` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `area` varchar(45) DEFAULT NULL,
  `street_address` varchar(45) DEFAULT NULL,
  `post_code` varchar(45) DEFAULT NULL,
  `inactive` tinyint(3) UNSIGNED DEFAULT NULL,
  `logo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_company`
--

INSERT INTO `core_company` (`id`, `name`, `mobile`, `bin`, `email`, `website`, `city`, `area`, `street_address`, `post_code`, `inactive`, `logo`) VALUES
(1, 'OYELI FASHION', '432523432', '3423423432', 'oyeili@gmail.com', 'www.oyelibd.com', 'Dhaka', 'Mirpur', 'Building: 21, Road: 12, Block: A', '1219', 0, '1.png');

-- --------------------------------------------------------

--
-- Table structure for table `core_contacts`
--

CREATE TABLE `core_contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `contact_category_id` int(10) UNSIGNED NOT NULL,
  `contact_no` varchar(45) NOT NULL,
  `email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_contacts`
--

INSERT INTO `core_contacts` (`id`, `name`, `contact_category_id`, `contact_no`, `email`) VALUES
(1, 'Mehedi', 4, '01797993131', 'mehedihasandb0@gmail.com'),
(2, 'Jahid', 1, '3423423', 'jahid1@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `core_contact_categories`
--

CREATE TABLE `core_contact_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_contact_categories`
--

INSERT INTO `core_contact_categories` (`id`, `name`) VALUES
(1, 'Family'),
(2, 'Relative'),
(3, 'Friend'),
(4, 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `core_customers`
--

CREATE TABLE `core_customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `mobile` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `address` text DEFAULT NULL,
  `photo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_customers`
--

INSERT INTO `core_customers` (`id`, `name`, `mobile`, `email`, `created_at`, `updated_at`, `address`, `photo`) VALUES
(2, 'Tanmoy', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(3, 'Niyamot', '3434343', 'niyamot@yahoo.com', '2023-12-05 10:27:19', '2023-12-05 10:27:19', 'Mirpur', '3.png'),
(6, 'Jahidul Islam', '34324324', 'mehedihasandb0@gmail.com', '2023-12-05 10:28:16', '2023-12-05 10:28:16', '333', 'beetroot-hummus-23bae4e-jpg.jpg'),
(7, 'Jahidul2', '34324324', 'mehedihasandb0@gmail.com', '2023-12-05 10:43:59', '2023-12-05 10:43:59', '343', '7.jpg'),
(8, 'Mehedi3', '34324324', 'mehedihasandb0@gmail.com', '2023-12-05 10:31:09', '2023-12-05 10:31:09', '', '34324324.jpg'),
(9, 'Sabbir Ahmed', '34343434', 'sabbir3@gmail.com', '2023-12-30 09:30:13', '2023-12-30 09:30:13', 'NA', NULL),
(10, 'Abdur Rahman', '35443434', 'abrahman@gmail.com', '2023-12-30 09:32:00', '2023-12-30 09:32:00', 'Rampua', NULL),
(12, 'Mahedi Hassanere', '9433442sfds', 'mah3edi@gmail.com', '2023-12-30 09:59:14', '2023-12-30 09:59:14', 'NA', NULL),
(15, 'Siam', '44444444', 'siam@yahoo.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(21, 'Laiju', '123456778', 'laiju@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(25, 'abc', '0000', 'abc@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(28, 'Md Salman Aisur Rahman', '019886131', 'salman@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(29, 'Atiquer Rahman', '098563146', 'Atiqur@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(30, 'razib', '1222222', 'razijb@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(31, '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(32, 'Al AMin', '96354965', 'Alamin@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(33, 'Rahul ', '8797446', 'Rahul@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(34, 'Laiju', '98754324', 'laiju@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(35, 'Engr. Naiiyem Hossain', '12555555', 'naiyem@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `core_deliveries`
--

CREATE TABLE `core_deliveries` (
  `id` int(10) UNSIGNED NOT NULL,
  `create_at` datetime NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `person_id` int(10) UNSIGNED NOT NULL,
  `shipper_id` int(10) UNSIGNED NOT NULL,
  `shipped_at` datetime NOT NULL,
  `delivery_status_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core_delivery_details`
--

CREATE TABLE `core_delivery_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `delivery_id` varchar(45) NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `qty` varchar(45) DEFAULT NULL,
  `price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core_delivery_status`
--

CREATE TABLE `core_delivery_status` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_delivery_status`
--

INSERT INTO `core_delivery_status` (`id`, `name`) VALUES
(1, 'In transit'),
(2, 'Shipped');

-- --------------------------------------------------------

--
-- Table structure for table `core_departments`
--

CREATE TABLE `core_departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_departments`
--

INSERT INTO `core_departments` (`id`, `code`, `name`) VALUES
(1, '10', 'Accounts'),
(2, '20', 'IT'),
(3, '30', 'HR'),
(4, '40', 'Sales and Marketing');

-- --------------------------------------------------------

--
-- Table structure for table `core_districts`
--

CREATE TABLE `core_districts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `division_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_districts`
--

INSERT INTO `core_districts` (`id`, `name`, `division_id`) VALUES
(1, 'Narayangang', 1),
(2, 'Nonakhali', 3),
(3, 'Feni', 3),
(4, 'Tingile', 1),
(5, 'Gajipur', 1),
(6, 'Potuakhali', 2),
(7, 'Dhaka', 1);

-- --------------------------------------------------------

--
-- Table structure for table `core_divisions`
--

CREATE TABLE `core_divisions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_divisions`
--

INSERT INTO `core_divisions` (`id`, `name`) VALUES
(1, 'Dhaka'),
(2, 'Borishal'),
(3, 'Chottrogram');

-- --------------------------------------------------------

--
-- Table structure for table `core_employee`
--

CREATE TABLE `core_employee` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `mobile` varchar(45) NOT NULL,
  `address` text NOT NULL,
  `photo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core_failed_jobs`
--

CREATE TABLE `core_failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core_fees`
--

CREATE TABLE `core_fees` (
  `id` int(10) UNSIGNED NOT NULL,
  `fee_type` varchar(45) NOT NULL DEFAULT '',
  `student_id` int(10) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `core_fees`
--

INSERT INTO `core_fees` (`id`, `fee_type`, `student_id`) VALUES
(1, 'Tuition Fee', 1),
(2, 'Library Fee', 1),
(3, 'Admission Fee', 1),
(4, 'Sports Fee', 1),
(5, 'Tuition Fee', 2);

-- --------------------------------------------------------

--
-- Table structure for table `core_grads`
--

CREATE TABLE `core_grads` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_grads`
--

INSERT INTO `core_grads` (`id`, `name`) VALUES
(1, 'A+'),
(2, 'A'),
(3, 'A-'),
(4, 'B+'),
(5, 'B'),
(6, 'B-'),
(7, 'C+'),
(8, 'C');

-- --------------------------------------------------------

--
-- Table structure for table `core_groups`
--

CREATE TABLE `core_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_groups`
--

INSERT INTO `core_groups` (`id`, `name`) VALUES
(1, 'Science'),
(2, 'Arts'),
(3, 'Commerce');

-- --------------------------------------------------------

--
-- Table structure for table `core_hms_appointments`
--

CREATE TABLE `core_hms_appointments` (
  `id` int(10) UNSIGNED NOT NULL,
  `patient_id` int(10) UNSIGNED NOT NULL,
  `doctor_id` int(10) UNSIGNED NOT NULL,
  `appointment_at` datetime NOT NULL,
  `cc` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core_hms_consultants`
--

CREATE TABLE `core_hms_consultants` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `hms_department_id` int(10) UNSIGNED NOT NULL,
  `designation` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_hms_consultants`
--

INSERT INTO `core_hms_consultants` (`id`, `name`, `hms_department_id`, `designation`) VALUES
(1, 'Dr. Moshaidul Islam', 1, 'MBBS'),
(2, 'Jahidul Islam', 2, 'Prof.');

-- --------------------------------------------------------

--
-- Table structure for table `core_hms_departments`
--

CREATE TABLE `core_hms_departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_hms_departments`
--

INSERT INTO `core_hms_departments` (`id`, `name`) VALUES
(1, 'Medicine'),
(2, 'ENT');

-- --------------------------------------------------------

--
-- Table structure for table `core_hms_medicines`
--

CREATE TABLE `core_hms_medicines` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `hms_medicine_category_id` int(10) UNSIGNED NOT NULL,
  `hms_medicine_type_id` int(10) UNSIGNED NOT NULL,
  `generic_name` varchar(45) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_hms_medicines`
--

INSERT INTO `core_hms_medicines` (`id`, `name`, `hms_medicine_category_id`, `hms_medicine_type_id`, `generic_name`, `description`) VALUES
(1, 'Napa 500mg', 4, 1, 'Paracitamal', 'Na'),
(2, 'Seclo 20mg', 3, 4, 'Antacid', 'Na');

-- --------------------------------------------------------

--
-- Table structure for table `core_hms_medicine_categories`
--

CREATE TABLE `core_hms_medicine_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_hms_medicine_categories`
--

INSERT INTO `core_hms_medicine_categories` (`id`, `name`) VALUES
(1, 'Antibiotic'),
(2, 'Vitamin'),
(3, 'Painkiller'),
(4, 'Antacids');

-- --------------------------------------------------------

--
-- Table structure for table `core_hms_medicine_types`
--

CREATE TABLE `core_hms_medicine_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_hms_medicine_types`
--

INSERT INTO `core_hms_medicine_types` (`id`, `name`) VALUES
(1, 'Tab'),
(2, 'Inj'),
(3, 'Syr'),
(4, 'Cap');

-- --------------------------------------------------------

--
-- Table structure for table `core_hms_patients`
--

CREATE TABLE `core_hms_patients` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `mobile` varchar(45) NOT NULL,
  `dob` date NOT NULL,
  `mob_ext` int(10) UNSIGNED NOT NULL,
  `gender` tinyint(3) UNSIGNED NOT NULL,
  `profession` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_hms_patients`
--

INSERT INTO `core_hms_patients` (`id`, `name`, `mobile`, `dob`, `mob_ext`, `gender`, `profession`) VALUES
(1, 'Jahidul Islam', '038403423', '2000-01-01', 1, 1, 'student'),
(2, 'Jamuna', '034343345', '2023-01-02', 1, 1, 'na'),
(3, 'Abdur Rahman', '23432432', '2000-01-20', 1, 1, 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `core_hms_prescriptions`
--

CREATE TABLE `core_hms_prescriptions` (
  `id` int(10) UNSIGNED NOT NULL,
  `patient_id` int(10) UNSIGNED NOT NULL,
  `consultant_id` int(10) UNSIGNED NOT NULL,
  `cc` text NOT NULL,
  `rf` text NOT NULL,
  `investigation` text NOT NULL,
  `advice` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core_hms_prescription_details`
--

CREATE TABLE `core_hms_prescription_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `prescription_id` int(10) UNSIGNED NOT NULL,
  `medicine_id` int(10) UNSIGNED NOT NULL,
  `dose` varchar(20) NOT NULL,
  `days` double NOT NULL,
  `suggestion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core_jobs`
--

CREATE TABLE `core_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core_job_batches`
--

CREATE TABLE `core_job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core_judgements`
--

CREATE TABLE `core_judgements` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `subject_id` int(10) UNSIGNED NOT NULL,
  `term_id` int(10) UNSIGNED NOT NULL,
  `marks` int(11) NOT NULL,
  `grad_id` int(10) UNSIGNED NOT NULL,
  `status` varchar(45) NOT NULL,
  `comment` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_judgements`
--

INSERT INTO `core_judgements` (`id`, `student_id`, `subject_id`, `term_id`, `marks`, `grad_id`, `status`, `comment`) VALUES
(1, 1, 1, 1, 90, 1, 'Passed', 'Very good'),
(2, 0, 0, 0, 0, 0, 'pass', ''),
(3, 0, 1, 0, 0, 1, 'pass', ''),
(4, 0, 1, 2, 62, 1, 'faild', 'y'),
(5, 1, 1, 2, 70, 2, 'Passed', 'Not Good'),
(6, 2, 4, 2, 88, 1, 'Passed', 'Very Good');

-- --------------------------------------------------------

--
-- Table structure for table `core_levels`
--

CREATE TABLE `core_levels` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_levels`
--

INSERT INTO `core_levels` (`id`, `name`) VALUES
(1, 'Six'),
(2, 'Seven'),
(3, 'Eight'),
(4, 'Nine'),
(5, 'Ten');

-- --------------------------------------------------------

--
-- Table structure for table `core_manufacturers`
--

CREATE TABLE `core_manufacturers` (
  `id` int(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_manufacturers`
--

INSERT INTO `core_manufacturers` (`id`, `name`) VALUES
(1, 'APCL'),
(2, 'ISL'),
(3, 'IDB');

-- --------------------------------------------------------

--
-- Table structure for table `core_mfg_boms`
--

CREATE TABLE `core_mfg_boms` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `qty` varchar(45) NOT NULL,
  `labour_cost` float NOT NULL,
  `date` datetime DEFAULT NULL,
  `remark` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_mfg_boms`
--

INSERT INTO `core_mfg_boms` (`id`, `code`, `name`, `product_id`, `qty`, `labour_cost`, `date`, `remark`) VALUES
(1, '100', 'T-Shirt', 1, '100', 2000, NULL, NULL),
(2, '343', 'BM-3', 47, '3', 45, NULL, NULL),
(3, '3532', 'BM93', 47, '34', 432, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `core_mfg_bom_details`
--

CREATE TABLE `core_mfg_bom_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `bom_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `qty` float NOT NULL,
  `cost` float NOT NULL,
  `uom_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_mfg_bom_details`
--

INSERT INTO `core_mfg_bom_details` (`id`, `bom_id`, `product_id`, `qty`, `cost`, `uom_id`) VALUES
(1, 1, 400, 200, 100, 1),
(2, 1, 401, 100, 10, 2),
(3, 1, 402, 10, 50, 3),
(4, 3, 49, 13, 30, 1),
(5, 3, 17, 14, 2500, 1);

-- --------------------------------------------------------

--
-- Table structure for table `core_mfg_bom_secondary_products`
--

CREATE TABLE `core_mfg_bom_secondary_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `qty` float NOT NULL,
  `price` float NOT NULL,
  `uom` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_mfg_bom_secondary_products`
--

INSERT INTO `core_mfg_bom_secondary_products` (`id`, `product_id`, `qty`, `price`, `uom`) VALUES
(1, 500, 5, 400, 5);

-- --------------------------------------------------------

--
-- Table structure for table `core_mfg_productions`
--

CREATE TABLE `core_mfg_productions` (
  `id` int(10) UNSIGNED NOT NULL,
  `production_datetime` datetime NOT NULL,
  `bom_id` int(10) UNSIGNED NOT NULL,
  `qty` float NOT NULL,
  `labor_cost` float NOT NULL,
  `manager_id` int(10) UNSIGNED NOT NULL,
  `total_cost` float NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `uom_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core_mfg_production_details`
--

CREATE TABLE `core_mfg_production_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `production_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `qty` float NOT NULL,
  `uom_id` int(10) UNSIGNED NOT NULL,
  `cost` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core_migrations`
--

CREATE TABLE `core_migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `core_migrations`
--

INSERT INTO `core_migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(17, '2024_07_02_044553_create_personal_access_tokens_table', 3),
(18, '0001_01_01_000000_create_users_table', 4),
(19, '0001_01_01_000001_create_cache_table', 4),
(20, '0001_01_01_000002_create_jobs_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `core_money_receipts`
--

CREATE TABLE `core_money_receipts` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `remark` text DEFAULT NULL,
  `receipt_total` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_money_receipts`
--

INSERT INTO `core_money_receipts` (`id`, `created_at`, `updated_at`, `customer_id`, `remark`, `receipt_total`) VALUES
(1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Na', 100),
(2, '2023-12-27 13:57:23', '2023-12-27 13:57:23', 0, 'NA', 0),
(3, '2023-12-27 13:59:35', '2023-12-27 13:59:35', 0, 'NA', 0),
(4, '2023-12-27 14:00:07', '2023-12-27 14:00:07', 0, 'NA', 0),
(5, '2023-12-27 14:00:27', '2023-12-27 14:00:27', 0, 'NA', 0),
(6, '2023-12-27 14:02:47', '2023-12-27 14:02:47', 2, '', 3673.95),
(7, '2023-12-27 14:04:33', '2023-12-27 14:04:33', 3, '', 6487.95),
(8, '2023-12-27 14:06:11', '2023-12-27 14:06:11', 1, '', 2625),
(9, '2023-12-28 09:59:35', '2023-12-28 09:59:35', 0, 'NA', 0),
(10, '2023-12-28 10:00:38', '2023-12-28 10:00:38', 1, 'NA', 200),
(11, '2023-12-28 10:03:17', '2023-12-28 10:03:17', 0, 'NA', 0),
(12, '2023-12-28 10:14:49', '2023-12-28 10:14:49', 0, 'NA', 0),
(13, '2023-12-28 10:15:57', '2023-12-28 10:15:57', 0, 'NA', 0),
(14, '2023-12-28 10:21:16', '2023-12-28 10:21:16', 0, 'NA', 0),
(15, '2023-12-28 10:22:41', '2023-12-28 10:22:41', 0, 'NA', 0),
(16, '2023-12-28 10:25:03', '2023-12-28 10:25:03', 0, 'NA', 0),
(17, '2023-12-28 10:26:13', '2023-12-28 10:26:13', 0, 'NA', 0),
(18, '2023-12-28 10:26:23', '2023-12-28 10:26:23', 0, 'NA', 0),
(19, '2023-12-28 10:26:34', '2023-12-28 10:26:34', 0, 'NA', 0),
(20, '2023-12-28 10:31:35', '2023-12-28 10:31:35', 1, 'Test', 200),
(21, '2023-12-28 10:34:39', '2023-12-28 10:34:39', 1, 'NA', 200),
(22, '2023-12-28 10:34:48', '2023-12-28 10:34:48', 1, 'NA', 200),
(23, '2024-01-03 12:50:54', '2024-01-03 12:50:54', 0, '', 12304.95),
(24, '2024-01-03 12:53:38', '2024-01-03 12:53:38', 0, '', 1426.95),
(25, '2024-01-03 12:57:41', '2024-01-03 12:57:41', 0, '', 1426.95),
(26, '2024-01-03 13:01:07', '2024-01-03 13:01:07', 0, '', 1426.95),
(27, '2024-01-03 13:04:23', '2024-01-03 13:04:23', 1, '', 1426.95),
(28, '2024-01-03 13:07:18', '2024-01-03 13:07:18', 1, '', 1426.95),
(29, '2024-01-03 13:09:58', '2024-01-03 13:09:58', 1, '', 1426.95);

-- --------------------------------------------------------

--
-- Table structure for table `core_money_receipt_details`
--

CREATE TABLE `core_money_receipt_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `money_receipt_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `price` double NOT NULL,
  `qty` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_money_receipt_details`
--

INSERT INTO `core_money_receipt_details` (`id`, `money_receipt_id`, `product_id`, `price`, `qty`) VALUES
(1, 1, 36, 100, 1),
(2, 7, 0, 2500, 2),
(3, 7, 0, 180, 1),
(4, 7, 0, 999, 1),
(5, 8, 36, 2500, 1),
(6, 25, 0, 180, 2),
(7, 25, 0, 999, 1),
(8, 26, 46, 180, 2),
(9, 26, 47, 999, 1),
(10, 27, 46, 180, 2),
(11, 27, 47, 999, 1),
(12, 28, 46, 180, 2),
(13, 28, 47, 999, 1),
(14, 29, 46, 180, 2),
(15, 29, 47, 999, 1);

-- --------------------------------------------------------

--
-- Table structure for table `core_munni`
--

CREATE TABLE `core_munni` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `mobile` varchar(45) NOT NULL,
  `photo` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core_orders`
--

CREATE TABLE `core_orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `order_date` datetime NOT NULL,
  `delivery_date` datetime NOT NULL,
  `shipping_address` text DEFAULT NULL,
  `order_total` double NOT NULL DEFAULT 0,
  `paid_amount` double NOT NULL DEFAULT 0,
  `remark` text DEFAULT NULL,
  `status_id` int(10) UNSIGNED DEFAULT 1,
  `discount` float DEFAULT 0,
  `vat` float DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_orders`
--

INSERT INTO `core_orders` (`id`, `customer_id`, `order_date`, `delivery_date`, `shipping_address`, `order_total`, `paid_amount`, `remark`, `status_id`, `discount`, `vat`, `created_at`, `updated_at`) VALUES
(44, 6, '2025-03-23 00:00:00', '2025-03-23 00:00:00', '', 13125, 0, '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `core_order_details`
--

CREATE TABLE `core_order_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `qty` float NOT NULL,
  `price` float NOT NULL,
  `vat` float NOT NULL DEFAULT 0,
  `discount` float NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_order_details`
--

INSERT INTO `core_order_details` (`id`, `order_id`, `product_id`, `qty`, `price`, `vat`, `discount`, `created_at`, `updated_at`) VALUES
(1, 1, 17, 1, 16, 0, 0, '2021-12-14 06:45:23', '2021-12-14 06:45:23'),
(2, 1, 18, 1, 40, 0, 0, '2021-12-14 06:45:23', '2021-12-14 06:45:23'),
(3, 2, 18, 4, 40, 0, 0, '2021-12-14 06:45:23', '2021-12-14 06:45:23'),
(4, 2, 17, 2, 16, 0, 0, '2021-12-14 06:45:23', '2021-12-14 06:45:23'),
(5, 3, 17, 2, 16, 0, 0, '2021-12-14 06:45:23', '2021-12-14 06:45:23'),
(6, 3, 18, 1, 40, 0, 0, '2021-12-14 06:45:23', '2021-12-14 06:45:23'),
(7, 4, 17, 1, 16, 0, 0, '2021-12-14 06:45:23', '2021-12-14 06:45:23'),
(8, 4, 18, 1, 40, 0, 0, '2021-12-14 06:45:23', '2021-12-14 06:45:23'),
(9, 5, 17, 1, 16, 0, 0, '2021-12-14 06:45:23', '2021-12-14 06:45:23'),
(10, 14, 18, 1, 30, 0, 0, '2021-12-14 01:14:27', '2021-12-14 01:14:27'),
(11, 14, 17, 1, 15, 0, 0, '2021-12-14 01:14:27', '2021-12-14 01:14:27'),
(12, 15, 18, 1, 40, 0, 0, '2021-12-15 12:48:59', '2021-12-15 12:48:59'),
(13, 15, 17, 2, 16, 0, 0, '2021-12-15 12:48:59', '2021-12-15 12:48:59'),
(14, 16, 28, 1, 5000, 0, 0, '2022-01-06 06:39:11', '2022-01-06 06:39:11'),
(15, 16, 29, 1, 342, 0, 0, '2022-01-06 06:39:11', '2022-01-06 06:39:11'),
(16, 17, 29, 1, 342, 0, 0, '2022-01-06 06:43:37', '2022-01-06 06:43:37'),
(17, 17, 28, 1, 5000, 0, 0, '2022-01-06 06:43:37', '2022-01-06 06:43:37'),
(18, 17, 20, 1, 110, 0, 0, '2022-01-06 06:43:37', '2022-01-06 06:43:37'),
(19, 18, 28, 10, 5000, 0, 0, '2022-01-06 09:14:42', '2022-01-06 09:14:42'),
(20, 19, 30, 1, 7999, 0, 0, '2022-01-08 03:05:54', '2022-01-08 03:05:54'),
(21, 19, 31, 1, 4444, 0, 0, '2022-01-08 03:05:54', '2022-01-08 03:05:54'),
(22, 19, 20, 1, 110, 0, 0, '2022-01-08 03:05:55', '2022-01-08 03:05:55'),
(23, 20, 29, 1, 342, 0, 0, '2022-01-08 03:06:58', '2022-01-08 03:06:58'),
(24, 20, 20, 1, 110, 0, 0, '2022-01-08 03:06:58', '2022-01-08 03:06:58'),
(25, 20, 30, 1, 7999, 0, 0, '2022-01-08 03:06:58', '2022-01-08 03:06:58'),
(26, 20, 32, 1, 5555, 0, 0, '2022-01-08 03:06:58', '2022-01-08 03:06:58'),
(27, 21, 29, 1, 342, 0, 0, '2022-01-08 03:07:27', '2022-01-08 03:07:27'),
(28, 21, 28, 1, 5000, 0, 0, '2022-01-08 03:07:27', '2022-01-08 03:07:27'),
(29, 21, 31, 1, 4444, 0, 0, '2022-01-08 03:07:27', '2022-01-08 03:07:27'),
(30, 21, 32, 2, 5555, 0, 0, '2022-01-08 03:07:27', '2022-01-08 03:07:27'),
(31, 21, 30, 1, 7999, 0, 0, '2022-01-08 03:07:27', '2022-01-08 03:07:27'),
(32, 21, 20, 1, 110, 0, 0, '2022-01-08 03:07:28', '2022-01-08 03:07:28'),
(40, 25, 18, 1, 180, 0, 0, '2024-03-13 02:26:34', '2024-03-13 02:26:34'),
(41, 25, 17, 1, 2500, 0, 0, '2024-03-13 02:26:34', '2024-03-13 02:26:34'),
(42, 26, 18, 1, 180, 0, 0, '2024-03-13 02:40:15', '2024-03-13 02:40:15'),
(43, 26, 17, 1, 2500, 0, 0, '2024-03-13 02:40:15', '2024-03-13 02:40:15'),
(44, 32, 17, 1, 100, 0, 0, '2024-05-12 06:40:03', '2024-05-12 06:40:03'),
(45, 33, 17, 1, 2500, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 34, 52, 1, 20000, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 35, 17, 5, 2500, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 36, 17, 1, 2500, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 37, 17, 1, 2500, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 37, 52, 1, 20000, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 38, 17, 1, 2500, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 38, 52, 2, 20000, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 38, 53, 1, 60000, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 39, 17, 4, 2500, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 40, 52, 1, 20000, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 41, 53, 2, 60000, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 42, 53, 3, 60000, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 42, 52, 1, 20000, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 43, 52, 2, 20000, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 44, 17, 5, 2500, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `core_password_reset_tokens`
--

CREATE TABLE `core_password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core_personal_access_tokens`
--

CREATE TABLE `core_personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core_persons`
--

CREATE TABLE `core_persons` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `position_id` int(10) UNSIGNED NOT NULL,
  `sex` tinyint(1) NOT NULL,
  `dob` date NOT NULL,
  `doj` date NOT NULL,
  `mobile` varchar(45) NOT NULL,
  `address` varchar(45) DEFAULT NULL,
  `inactive` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_persons`
--

INSERT INTO `core_persons` (`id`, `name`, `position_id`, `sex`, `dob`, `doj`, `mobile`, `address`, `inactive`) VALUES
(1, 'Jahidul Islam', 1, 0, '2000-01-01', '2021-01-01', '677657657567', 'Rampura', 0);

-- --------------------------------------------------------

--
-- Table structure for table `core_positions`
--

CREATE TABLE `core_positions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `grade` int(10) UNSIGNED NOT NULL,
  `department_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_positions`
--

INSERT INTO `core_positions` (`id`, `name`, `grade`, `department_id`) VALUES
(1, 'Programmer', 6, 2),
(2, 'System Analyst', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `core_products`
--

CREATE TABLE `core_products` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `offer_price` double DEFAULT NULL,
  `manufacturer_id` int(10) NOT NULL,
  `regular_price` double NOT NULL,
  `description` text DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `product_category_id` int(10) UNSIGNED NOT NULL,
  `product_section_id` int(10) UNSIGNED NOT NULL,
  `is_featured` tinyint(1) DEFAULT 0,
  `star` int(10) UNSIGNED DEFAULT NULL,
  `is_brand` tinyint(1) DEFAULT 0,
  `offer_discount` float DEFAULT 0,
  `uom_id` int(10) UNSIGNED NOT NULL,
  `weight` float DEFAULT NULL,
  `barcode` varchar(45) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `product_type_id` int(10) UNSIGNED NOT NULL,
  `product_unit_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_products`
--

INSERT INTO `core_products` (`id`, `name`, `offer_price`, `manufacturer_id`, `regular_price`, `description`, `photo`, `product_category_id`, `product_section_id`, `is_featured`, `star`, `is_brand`, `offer_discount`, `uom_id`, `weight`, `barcode`, `created_at`, `updated_at`, `product_type_id`, `product_unit_id`) VALUES
(17, 'Brown Borka', 2500, 3, 4000, '', '17.jpg', 5, 1, 1, 0, 1, 0, 1, 0, '4456342342', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 2),
(50, 'Apple', 345, 1, 400, 'NA', '50.webp', 2, 1, 0, 5, 1, 0, 1, 0, '1002', '2025-03-10 15:42:45', '2025-03-10 15:42:45', 1, 1),
(52, 'Oppo a3x', 20000, 1, 23000, 'Oppo a3x', 'a3x-jpg.jpg', 7, 1, 1, 3, 1, 0, 1, 3, '343463566', '2025-03-10 15:44:24', '2025-03-10 15:44:24', 2, 1),
(53, 'Samsung Galaxy A9', 60000, 2, 70000, 'Samsung Galaxy A9', '4-jpeg.jpeg', 7, 1, 1, 5, 1, 2000, 1, 6, '235443', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `core_product_brands`
--

CREATE TABLE `core_product_brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_product_brands`
--

INSERT INTO `core_product_brands` (`id`, `name`) VALUES
(1, 'RFL'),
(2, 'Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `core_product_categories`
--

CREATE TABLE `core_product_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `section_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_product_categories`
--

INSERT INTO `core_product_categories` (`id`, `name`, `section_id`, `created_at`, `updated_at`) VALUES
(2, 'Vegetables', 3, '2022-01-11 06:46:24', NULL),
(3, 'Fish', 3, '2022-01-11 06:46:24', NULL),
(4, 'Drugs', 3, '2022-01-11 06:46:24', NULL),
(5, 'Cameras', 1, '2022-01-11 06:46:24', NULL),
(6, 'Computers, Tablets & Laptops', 1, '2022-01-11 06:46:24', NULL),
(7, 'Mobile Phone', 1, '2022-01-11 06:46:24', NULL),
(8, 'Sound & Vision', 1, '2022-01-11 06:46:24', NULL),
(9, 'Women\'s', 2, '2022-01-11 06:46:24', NULL),
(10, 'Men\'s', 2, '2022-01-11 06:46:24', NULL),
(11, 'Kids', 2, '2022-01-11 06:46:24', NULL),
(12, 'Cosmatics', 4, '2022-01-11 06:46:24', NULL),
(13, 'T-Shirt', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `core_product_sections`
--

CREATE TABLE `core_product_sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `unit_id` int(10) UNSIGNED DEFAULT NULL,
  `photo` varchar(145) DEFAULT NULL,
  `icon` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_product_sections`
--

INSERT INTO `core_product_sections` (`id`, `name`, `unit_id`, `photo`, `icon`) VALUES
(1, 'Electronices', 1, NULL, NULL),
(2, 'Clothings', 1, NULL, NULL),
(3, 'Food and Beverages', 1, NULL, NULL),
(4, 'Health & Beauty', 1, NULL, NULL),
(5, 'Sports & Leisure', 1, NULL, NULL),
(6, 'Books & Entertainments', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `core_product_types`
--

CREATE TABLE `core_product_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_product_types`
--

INSERT INTO `core_product_types` (`id`, `name`) VALUES
(1, 'Finished Goods'),
(2, 'Raw Materials'),
(3, 'Consumable Materials');

-- --------------------------------------------------------

--
-- Table structure for table `core_product_units`
--

CREATE TABLE `core_product_units` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `photo` varchar(45) DEFAULT NULL,
  `icon` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_product_units`
--

INSERT INTO `core_product_units` (`id`, `name`, `photo`, `icon`) VALUES
(1, 'Electronics', NULL, NULL),
(2, 'Grocery', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `core_purchases`
--

CREATE TABLE `core_purchases` (
  `id` int(10) UNSIGNED NOT NULL,
  `supplier_id` int(10) UNSIGNED NOT NULL,
  `purchase_date` datetime NOT NULL,
  `delivery_date` datetime NOT NULL,
  `shipping_address` text NOT NULL,
  `purchase_total` double NOT NULL,
  `paid_amount` double DEFAULT NULL,
  `remark` text DEFAULT NULL,
  `status_id` int(10) UNSIGNED NOT NULL,
  `discount` float DEFAULT 0,
  `vat` float DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_purchases`
--

INSERT INTO `core_purchases` (`id`, `supplier_id`, `purchase_date`, `delivery_date`, `shipping_address`, `purchase_total`, `paid_amount`, `remark`, `status_id`, `discount`, `vat`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-12-24 00:00:00', '2023-12-24 00:00:00', 'Rangpur', 18375, 0, 'Na', 1, 0, 0, '2024-03-31 10:17:58', '2024-03-31 10:17:42'),
(2, 2, '2023-12-24 00:00:00', '2023-12-24 00:00:00', '', 22050, 0, '', 1, 0, 0, '2024-03-31 10:17:58', '2024-03-31 10:17:42'),
(3, 1, '2023-12-24 00:00:00', '2023-12-24 00:00:00', '', 2121, 0, '', 1, 0, 0, '2024-03-31 10:17:58', '2024-03-31 10:17:42'),
(4, 1, '2023-12-24 00:00:00', '2023-12-24 00:00:00', '', 9450, 0, '', 1, 0, 0, '2024-03-31 10:17:58', '2024-03-31 10:17:42'),
(5, 1, '2024-03-10 00:00:00', '2024-03-10 00:00:00', 'Rampura', 0, 0, NULL, 1, 0, 0, '2024-03-31 04:20:36', '2024-03-31 04:20:36'),
(6, 1, '2024-03-10 00:00:00', '2024-03-10 00:00:00', 'Rampura', 0, 0, NULL, 1, 0, 0, '2024-03-31 04:25:03', '2024-03-31 04:25:03'),
(7, 1, '2024-03-10 00:00:00', '2024-03-10 00:00:00', 'Rampura', 0, 0, NULL, 1, 0, 0, '2024-03-31 04:26:17', '2024-03-31 04:26:17'),
(8, 1, '2024-03-10 00:00:00', '2024-03-10 00:00:00', 'Rampura', 0, 0, NULL, 1, 0, 0, '2024-04-01 03:52:29', '2024-04-01 03:52:29'),
(9, 1, '2024-03-10 00:00:00', '2024-03-10 00:00:00', 'Rampura', 0, 0, NULL, 1, 0, 0, '2024-04-01 03:53:48', '2024-04-01 03:53:48'),
(10, 1, '2024-03-10 00:00:00', '2024-03-10 00:00:00', 'Rampura', 0, 0, NULL, 1, 0, 0, '2024-04-01 03:56:29', '2024-04-01 03:56:29'),
(11, 1, '2024-03-10 00:00:00', '2024-03-10 00:00:00', 'Rampura', 0, 0, NULL, 1, 0, 0, '2024-04-01 04:22:59', '2024-04-01 04:22:59'),
(12, 2, '2024-04-03 00:00:00', '2024-04-03 00:00:00', 'Test', 0, 0, NULL, 1, 0, 0, '2024-04-02 03:48:06', '2024-04-02 03:48:06'),
(13, 2, '2024-04-03 00:00:00', '2024-04-03 00:00:00', 'Test', 0, 0, NULL, 1, 0, 0, '2024-04-02 03:49:37', '2024-04-02 03:49:37'),
(14, 2, '2024-04-03 00:00:00', '2024-04-03 00:00:00', 'Test', 0, 0, NULL, 1, 0, 0, '2024-04-02 03:50:35', '2024-04-02 03:50:35'),
(15, 2, '2024-04-03 00:00:00', '2024-04-03 00:00:00', 'Test', 0, 0, NULL, 1, 0, 0, '2024-04-02 03:51:47', '2024-04-02 03:51:47'),
(16, 1, '2024-06-04 00:00:00', '2024-06-04 00:00:00', 'Test', 2987.25, 0, '  NA', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 2, '2024-06-05 00:00:00', '2024-06-05 00:00:00', '', 42183.75, 0, '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 1, '2024-01-01 00:00:00', '2024-01-05 00:00:00', 'Rampura', 100, 1000, 'NA', 1, 0, 0, '2024-07-10 06:27:24', '2024-07-10 06:27:24'),
(19, 1, '2024-01-01 00:00:00', '2024-01-05 00:00:00', 'Rampura', 100, 1000, 'NA', 1, 0, 0, '2024-07-14 06:46:30', '2024-07-14 06:46:30'),
(20, 1, '2024-07-14 00:00:00', '2024-07-14 00:00:00', 'na', 3621.45, 3621.45, 'NA', 1, 0, 0, '2024-07-14 06:58:16', '2024-07-14 06:58:16'),
(21, 1, '2024-07-14 00:00:00', '2024-07-14 00:00:00', 'na', 3622.5, 3622.5, 'NA', 1, 0, 0, '2024-07-14 07:01:43', '2024-07-14 07:01:43'),
(22, 1, '2024-07-14 00:00:00', '2024-07-14 00:00:00', 'na', 29872.5, 29872.5, 'NA', 1, 0, 0, '2024-07-14 07:04:31', '2024-07-14 07:04:31'),
(23, 1, '2024-07-14 00:00:00', '2024-07-14 00:00:00', 'na', 29872.5, 29872.5, 'NA', 1, 0, 0, '2024-07-14 07:07:02', '2024-07-14 07:07:02'),
(24, 1, '2024-07-14 00:00:00', '2024-07-14 00:00:00', 'na', 29872.5, 29872.5, 'NA', 1, 0, 0, '2024-07-14 07:08:00', '2024-07-14 07:08:00'),
(25, 1, '2024-07-14 00:00:00', '2024-07-14 00:00:00', 'na', 29872.5, 29872.5, 'NA', 1, 0, 0, '2024-07-14 07:08:10', '2024-07-14 07:08:10'),
(26, 1, '2024-07-14 00:00:00', '2024-07-14 00:00:00', 'na', 29872.5, 29872.5, 'NA', 1, 0, 0, '2024-07-14 07:08:20', '2024-07-14 07:08:20'),
(27, 1, '2024-07-14 00:00:00', '2024-07-14 00:00:00', 'na', 29872.5, 29872.5, 'NA', 1, 0, 0, '2024-07-14 07:09:04', '2024-07-14 07:09:04'),
(28, 1, '2024-07-14 00:00:00', '2024-07-14 00:00:00', 'na', 29872.5, 29872.5, 'NA', 1, 0, 0, '2024-07-14 07:09:31', '2024-07-14 07:09:31'),
(29, 1, '2024-07-14 00:00:00', '2024-07-14 00:00:00', 'na', 29872.5, 29872.5, 'NA', 1, 0, 0, '2024-07-14 07:09:52', '2024-07-14 07:09:52'),
(30, 1, '2024-07-14 00:00:00', '2024-07-14 00:00:00', 'na', 29872.5, 29872.5, 'NA', 1, 0, 0, '2024-07-14 07:10:11', '2024-07-14 07:10:11'),
(31, 1, '2024-07-14 00:00:00', '2024-07-14 00:00:00', 'na', 29872.5, 29872.5, 'NA', 1, 0, 0, '2024-07-14 07:10:14', '2024-07-14 07:10:14'),
(32, 1, '2024-07-14 00:00:00', '2024-07-14 00:00:00', 'na', 3622.5, 3622.5, 'NA', 1, 0, 0, '2024-07-14 07:10:31', '2024-07-14 07:10:31'),
(33, 1, '2024-07-14 00:00:00', '2024-07-14 00:00:00', 'na', 3622.5, 3622.5, 'NA', 1, 0, 0, '2024-07-14 07:10:55', '2024-07-14 07:10:55'),
(34, 1, '2024-07-14 00:00:00', '2024-07-14 00:00:00', 'na', 37117.5, 37117.5, 'NA', 1, 0, 0, '2024-07-14 07:14:34', '2024-07-14 07:14:34'),
(35, 1, '2024-07-14 00:00:00', '2024-07-14 00:00:00', 'na', 37117.5, 37117.5, 'NA', 1, 0, 0, '2024-07-14 07:15:05', '2024-07-14 07:15:05'),
(36, 1, '2024-07-14 00:00:00', '2024-07-14 00:00:00', 'na', 37117.5, 37117.5, 'NA', 1, 0, 0, '2024-07-14 07:15:07', '2024-07-14 07:15:07'),
(37, 1, '2024-07-14 00:00:00', '2024-07-14 00:00:00', 'na', 37117.5, 37117.5, 'NA', 1, 0, 0, '2024-07-14 07:15:31', '2024-07-14 07:15:31'),
(38, 1, '2024-07-14 00:00:00', '2024-07-14 00:00:00', 'na', 37117.5, 37117.5, 'NA', 1, 0, 0, '2024-07-14 07:15:33', '2024-07-14 07:15:33'),
(39, 1, '2024-07-14 00:00:00', '2024-07-14 00:00:00', 'na', 37117.5, 37117.5, 'NA', 1, 0, 0, '2024-07-14 07:16:00', '2024-07-14 07:16:00'),
(40, 1, '2024-07-14 00:00:00', '2024-07-14 00:00:00', 'na', 37117.5, 37117.5, 'NA', 1, 0, 0, '2024-07-14 07:16:01', '2024-07-14 07:16:01'),
(41, 1, '2024-07-14 00:00:00', '2024-07-14 00:00:00', 'na', 37117.5, 37117.5, 'NA', 1, 0, 0, '2024-07-14 07:16:02', '2024-07-14 07:16:02'),
(42, 1, '2024-07-14 00:00:00', '2024-07-14 00:00:00', 'na', 37117.5, 37117.5, 'NA', 1, 0, 0, '2024-07-14 07:16:05', '2024-07-14 07:16:05'),
(43, 1, '2024-07-14 00:00:00', '2024-07-14 00:00:00', 'na', 3622.5, 3622.5, 'NA', 1, 0, 0, '2024-07-14 07:16:20', '2024-07-14 07:16:20'),
(44, 1, '2024-07-14 00:00:00', '2024-07-14 00:00:00', 'na', 3622.5, 3622.5, 'NA', 1, 0, 0, '2024-07-14 07:17:23', '2024-07-14 07:17:23'),
(45, 1, '2024-07-14 00:00:00', '2024-07-14 00:00:00', 'na', 3622.5, 3622.5, 'NA', 1, 0, 0, '2024-07-14 07:17:31', '2024-07-14 07:17:31'),
(46, 1, '2024-07-14 00:00:00', '2024-07-14 00:00:00', 'na', 3622.5, 3622.5, 'NA', 1, 0, 0, '2024-07-14 07:18:13', '2024-07-14 07:18:13'),
(47, 1, '2024-07-14 00:00:00', '2024-07-14 00:00:00', 'na', 3622.5, 3622.5, 'NA', 1, 0, 0, '2024-07-14 07:18:22', '2024-07-14 07:18:22'),
(48, 1, '2024-07-14 00:00:00', '2024-07-14 00:00:00', 'na', 29872.5, 29872.5, 'NA', 1, 0, 0, '2024-07-14 07:18:42', '2024-07-14 07:18:42'),
(49, 1, '2024-07-14 00:00:00', '2024-07-14 00:00:00', 'na', 29872.5, 29872.5, 'NA', 1, 0, 0, '2024-07-14 07:19:35', '2024-07-14 07:19:35'),
(50, 4, '2025-03-10 00:00:00', '2025-03-10 00:00:00', '', 119700, 0, 'Testk', 1, 0, 0, '2025-03-10 09:58:37', '2025-03-10 09:58:37'),
(51, 4, '2025-03-19 00:00:00', '2025-03-19 00:00:00', '', 16800, 0, '', 1, 0, 0, '2025-03-19 08:29:20', '2025-03-19 08:29:20');

-- --------------------------------------------------------

--
-- Table structure for table `core_purchase_details`
--

CREATE TABLE `core_purchase_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `purchase_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `qty` float NOT NULL,
  `price` float NOT NULL,
  `vat` float NOT NULL DEFAULT 0,
  `discount` float NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_purchase_details`
--

INSERT INTO `core_purchase_details` (`id`, `purchase_id`, `product_id`, `qty`, `price`, `vat`, `discount`, `created_at`, `updated_at`) VALUES
(1, 1, 17, 50, 200, 0, 0, NULL, NULL),
(2, 1, 18, 30, 250, 0, 0, NULL, NULL),
(3, 2, 17, 20, 210, 0, 0, NULL, NULL),
(4, 2, 40, 70, 240, 0, 0, NULL, NULL),
(5, 3, 39, 10, 202, 0, 0, NULL, NULL),
(6, 4, 40, 30, 300, 0, 0, NULL, NULL),
(7, 10, 1, 4, 200, 0, 0, NULL, NULL),
(8, 15, 18, 1, 180, 0, 0, NULL, NULL),
(9, 15, 50, 1, 345, 0, 0, NULL, NULL),
(10, 15, 17, 1, 2500, 0, 0, NULL, NULL),
(11, 16, 50, 1, 345, 0, 0, NULL, NULL),
(12, 16, 17, 1, 2500, 0, 0, NULL, NULL),
(13, 17, 17, 14, 2500, 0, 0, NULL, NULL),
(14, 17, 50, 15, 345, 0, 0, NULL, NULL),
(15, 50, 52, 6, 19000, 0, 0, NULL, NULL),
(16, 51, 17, 3, 4000, 0, 0, NULL, NULL),
(17, 51, 52, 1, 4000, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `core_rest_tables`
--

CREATE TABLE `core_rest_tables` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `status` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `photo` varchar(45) DEFAULT NULL,
  `seats` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_rest_tables`
--

INSERT INTO `core_rest_tables` (`id`, `name`, `status`, `photo`, `seats`) VALUES
(1, 'Table 1', 0, '1.png', 6),
(2, 'Table 2', 1, '2.jpeg', 5),
(3, 'Table 3', 2, '3.jpg', 2),
(4, 'Table 4', 1, '4.jpeg', 4),
(5, 'Table 5', 1, '5.jpg', 2),
(6, 'Table 6', 1, '6.jpg', 12),
(7, 'Table 7', 1, '10-jpg.jpg', 10),
(8, 'Guest 1', 1, '6-png.png', 5);

-- --------------------------------------------------------

--
-- Table structure for table `core_roles`
--

CREATE TABLE `core_roles` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_roles`
--

INSERT INTO `core_roles` (`id`, `name`, `updated_at`, `created_at`) VALUES
(1, 'Admin', '2024-03-02 04:59:14', '2024-03-02 04:59:14'),
(2, 'Manager', '2024-02-28 12:10:59', '2024-02-28 06:10:59'),
(4, 'Guest', '2024-03-07 10:24:21', '2024-03-07 04:24:21'),
(5, 'Demo1', '2024-03-07 12:25:34', '2024-06-09 06:38:21'),
(12, 'Dem34', '2024-06-11 05:29:21', '2024-06-10 23:29:21');

-- --------------------------------------------------------

--
-- Table structure for table `core_rooms`
--

CREATE TABLE `core_rooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `code` varchar(45) NOT NULL,
  `room_type_id` int(10) UNSIGNED NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_rooms`
--

INSERT INTO `core_rooms` (`id`, `name`, `code`, `room_type_id`, `price`) VALUES
(1, 'Double South Side 200sft 2nd floor- 322', '322', 2, 2000),
(2, 'Single 100sft non ac -324', '324', 1, 500);

-- --------------------------------------------------------

--
-- Table structure for table `core_room_types`
--

CREATE TABLE `core_room_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_room_types`
--

INSERT INTO `core_room_types` (`id`, `name`) VALUES
(1, 'Single'),
(2, 'Double');

-- --------------------------------------------------------

--
-- Table structure for table `core_round63`
--

CREATE TABLE `core_round63` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `contact` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `roll` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_round63`
--

INSERT INTO `core_round63` (`id`, `name`, `contact`, `email`, `roll`) VALUES
(1, 'Naiyem', '01515618932', 'mdnaiyem@gmail.com', '1286770');

-- --------------------------------------------------------

--
-- Table structure for table `core_sales_departments`
--

CREATE TABLE `core_sales_departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_sales_departments`
--

INSERT INTO `core_sales_departments` (`id`, `code`, `name`) VALUES
(1, '10', 'Accounts'),
(2, '20', 'IT'),
(3, '30', 'HR'),
(4, '40', 'Sales and Marketing');

-- --------------------------------------------------------

--
-- Table structure for table `core_school_teachers`
--

CREATE TABLE `core_school_teachers` (
  `teacher_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `salary` varchar(45) NOT NULL,
  `department_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `photo` varchar(45) DEFAULT NULL,
  `contact_no` varchar(45) DEFAULT NULL,
  `address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_school_teachers`
--

INSERT INTO `core_school_teachers` (`teacher_id`, `name`, `email`, `salary`, `department_id`, `created_at`, `photo`, `contact_no`, `address`) VALUES
(1, 'Jahidul Islam', 'Habibur Rahama', 'Najma Akter', 2, '0000-00-00 00:00:00', '1.jpg', '45435436565', 'Rampura'),
(2, 'hamid', 'dsdsf', 'fff', 1, '2025-03-04 17:27:36', 'rt', 'werwer', 'tuyty');

-- --------------------------------------------------------

--
-- Table structure for table `core_sections`
--

CREATE TABLE `core_sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_sections`
--

INSERT INTO `core_sections` (`id`, `name`) VALUES
(1, 'Electronices'),
(2, 'Clothings'),
(3, 'Food and Beverages'),
(4, 'Health & Beauty'),
(5, 'Sports & Leisure'),
(6, 'Books & Entertainments');

-- --------------------------------------------------------

--
-- Table structure for table `core_sessions`
--

CREATE TABLE `core_sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core_shippers`
--

CREATE TABLE `core_shippers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `contact_person` varchar(45) NOT NULL,
  `contact_no` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_shippers`
--

INSERT INTO `core_shippers` (`id`, `name`, `contact_person`, `contact_no`) VALUES
(1, 'Sundarban Courier ', 'Mr. Jahid', '343243242');

-- --------------------------------------------------------

--
-- Table structure for table `core_site_albums`
--

CREATE TABLE `core_site_albums` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `description` text DEFAULT NULL,
  `photo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_site_albums`
--

INSERT INTO `core_site_albums` (`id`, `name`, `created_at`, `description`, `photo`) VALUES
(1, 'Main Slider', NULL, 'Na', NULL),
(2, 'INDUSTRY SECTORS', NULL, 'We cover different industry sectors, from food and beverage, chemical, retail, durable goods and more. Check the full list.', NULL),
(3, 'Screenshot - Home Page', NULL, NULL, NULL),
(4, 'POS', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `core_site_album_details`
--

CREATE TABLE `core_site_album_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `site_album_id` int(10) UNSIGNED NOT NULL,
  `photo` varchar(245) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `inactive` tinyint(3) UNSIGNED DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_site_album_details`
--

INSERT INTO `core_site_album_details` (`id`, `site_album_id`, `photo`, `name`, `description`, `inactive`) VALUES
(1, 1, './uploads/posts/1548841158.jpg', 'Intellect Software Ltd', 'Leading Software Company', 0),
(2, 1, '1548843065.jpg', 'Intellect Cloud POS', 'Intellect Enterprise Resource Planning (ERP) is business management&#8230;', 0),
(3, 1, '1548841332.jpg', 'Education and Training', 'For many people, gaining new skills through accredited&#8230;', 0),
(4, 2, '1548867137.svg', 'Food and Beverage', NULL, 0),
(5, 2, '1548867301.svg', 'Retail Goods', NULL, 0),
(6, 2, '1548867424.svg', 'Energy, Oil and Gas', NULL, 0),
(7, 2, '1548867363.svg', 'Chemical Goods', NULL, 0),
(8, 2, '1548867453.svg', 'Consumer Packaged Goods', NULL, 0),
(9, 3, '15488786820.jpg', 'Screenshot1', NULL, 0),
(10, 3, '15488786821.jpg', 'Screenshot2', NULL, 0),
(11, 4, '15488797600.jpg', 'POS1', NULL, 0),
(12, 4, '15488797601.jpg', 'POS2', NULL, 0),
(13, 4, '15488797602.jpg', 'POS3', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `core_site_attributes`
--

CREATE TABLE `core_site_attributes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` varchar(245) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core_site_clients`
--

CREATE TABLE `core_site_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `photo` varchar(300) DEFAULT NULL,
  `review` text DEFAULT NULL,
  `website` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_site_clients`
--

INSERT INTO `core_site_clients` (`id`, `name`, `photo`, `review`, `website`) VALUES
(1, 'Karnaphuli Group', '1548871087-png.png', 'Na', 'https://www.karnaphuli.com/'),
(2, 'Doreen', '1548871127-png.png', 'Na', 'https://doreen.com/');

-- --------------------------------------------------------

--
-- Table structure for table `core_site_menus`
--

CREATE TABLE `core_site_menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `link` varchar(45) NOT NULL,
  `has_child` tinyint(3) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_site_menus`
--

INSERT INTO `core_site_menus` (`id`, `name`, `link`, `has_child`) VALUES
(1, 'Home', '/', 0),
(2, 'Software', './software.html', 1),
(3, 'Service', './service.html', 0),
(4, 'Partner', './partner.html', 0),
(5, 'Client', './client.html', 0),
(6, 'About', './about.html', 0),
(7, 'Contact', '/contact.html', 0),
(8, 'Blog', './blog.html', 1);

-- --------------------------------------------------------

--
-- Table structure for table `core_site_menu_subs`
--

CREATE TABLE `core_site_menu_subs` (
  `id` int(10) UNSIGNED NOT NULL,
  `site_menu_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `link` varchar(45) NOT NULL,
  `has_child` tinyint(3) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_site_menu_subs`
--

INSERT INTO `core_site_menu_subs` (`id`, `site_menu_id`, `name`, `link`, `has_child`) VALUES
(1, 2, 'POS ERP', 'pos-erp', 0),
(2, 2, 'ERP-Garments', 'garment-erp', 0),
(3, 2, 'ERP-General Insurance', 'general-insurance-erp', 0),
(4, 2, 'ERP-Education', 'education-erp', 0),
(5, 2, 'ERP Manufacturing', 'manufacturing-erp', 0),
(6, 2, 'ERP Hospital', 'hospital-erp', 0),
(7, 2, 'ERP Texttile', 'texttile-erp', 0),
(8, 2, 'ERP Real Estate', 'real-estate-erp', 0),
(9, 8, 'Web publising', 'webpublishing', 0),
(10, 8, 'Javascript Library', 'javascript-library', 0),
(11, 8, 'Server Side', 'server-side', 0);

-- --------------------------------------------------------

--
-- Table structure for table `core_site_menu_sub_details`
--

CREATE TABLE `core_site_menu_sub_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `link` varchar(45) NOT NULL,
  `site_menu_sub_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core_site_pages`
--

CREATE TABLE `core_site_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `link` varchar(45) DEFAULT NULL,
  `inactive` tinyint(3) UNSIGNED DEFAULT 0,
  `slug` varchar(145) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `photo` varchar(245) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_site_pages`
--

INSERT INTO `core_site_pages` (`id`, `name`, `link`, `inactive`, `slug`, `description`, `photo`) VALUES
(1, 'POS ERP', 'http', 0, NULL, 'Integrated solution from production to point of sale for any retials business including\r\n                                supershop, clothing, pharmacy, restaurant/food, electronics, library, jewellery,\r\n                                furniture, tiles &amp; sanitary etc', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `core_site_posts`
--

CREATE TABLE `core_site_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `slug` varchar(245) DEFAULT NULL,
  `site_album_id` int(10) UNSIGNED DEFAULT NULL,
  `inactive` tinyint(3) UNSIGNED DEFAULT 0,
  `post_category_id` int(10) UNSIGNED DEFAULT NULL,
  `post_page_id` int(10) UNSIGNED DEFAULT NULL,
  `photo` varchar(245) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_site_posts`
--

INSERT INTO `core_site_posts` (`id`, `name`, `description`, `slug`, `site_album_id`, `inactive`, `post_category_id`, `post_page_id`, `photo`) VALUES
(1, 'Explain why its best', 'There are several kind of information we have for why we are best. Some the best features\r\n                                we provide for you that are the world wide challenging features. Some best features are\r\n                                given below.', NULL, 3, 0, 1, 1, NULL),
(2, 'Great way to Include with POS', 'With integrated POS software, the following business software is listed together.', NULL, 4, 0, 1, 1, NULL),
(3, 'ERP - POS', 'Integrated solution from production to point of sale for any retials business including\r\n                                supershop, clothing, pharmacy, restaurant/food, electronics, library, jewellery,\r\n                                furniture, tiles &amp; sanitary etc', NULL, 5, 0, 1, 1, '1548843653.jpg'),
(4, 'Intellect Cloud POS Software - features', 'Responsive & optimized for mobile devices. Completely without coding skills!', NULL, NULL, 0, NULL, NULL, '15488780820.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `core_site_post_categories`
--

CREATE TABLE `core_site_post_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_site_post_categories`
--

INSERT INTO `core_site_post_categories` (`id`, `name`) VALUES
(1, 'Business'),
(2, 'Software');

-- --------------------------------------------------------

--
-- Table structure for table `core_site_post_details`
--

CREATE TABLE `core_site_post_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `site_post_id` int(10) UNSIGNED NOT NULL,
  `description` text DEFAULT NULL,
  `photo` varchar(245) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_site_post_details`
--

INSERT INTO `core_site_post_details` (`id`, `site_post_id`, `description`, `photo`, `name`) VALUES
(1, 1, 'Product multi-dimensional measurement unit', NULL, NULL),
(2, 1, 'Convenience of buying and selling products according to batch / lot\r\n                                        number', NULL, NULL),
(3, 1, 'Advantages of Product Metrics', NULL, NULL),
(4, 1, 'Business data will never be lost or ', NULL, NULL),
(5, 1, 'Buying from multiple branches can be sold through the same software', NULL, NULL),
(6, 1, 'The software will never slow down, if the data is high or even from the remote\r\n                                        location.', NULL, NULL),
(7, 2, 'Accounting Management', NULL, NULL),
(8, 2, 'Payroll Management', NULL, NULL),
(9, 2, ' Inventory Management', NULL, NULL),
(10, 2, 'Purchase Management', NULL, NULL),
(11, 2, 'Production & Distribution Management', NULL, NULL),
(12, 2, ' Human Resource Management', NULL, NULL),
(13, 2, ' Customer Relationship Management', NULL, NULL),
(14, 2, 'Sales Management', NULL, NULL),
(15, 2, 'Barcode Creator', NULL, NULL),
(16, 2, 'Cloud Backup Server', NULL, NULL),
(17, 4, 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos\r\n                                        himenaeos. Nulla nunc dui, tristique in semper vel.', NULL, 'Super Design Layout '),
(18, 4, 'Intellect Cloud pos software can be automated update after the release new\r\n                                        version of software. Update for the better performace and better userfriendly.', NULL, 'Regular Updates & Support'),
(19, 4, 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos\r\n                                        himenaeos nulla nunc dui.', NULL, 'Responsive Web Design');

-- --------------------------------------------------------

--
-- Table structure for table `core_site_products`
--

CREATE TABLE `core_site_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `site_product_category_id` int(10) UNSIGNED NOT NULL,
  `description` text DEFAULT NULL,
  `photo` varchar(345) DEFAULT NULL,
  `regular_price` float DEFAULT NULL,
  `offer_price` float DEFAULT NULL,
  `inactive` tinyint(3) UNSIGNED DEFAULT NULL,
  `current_stock` float DEFAULT NULL,
  `site_product_uom_id` int(10) UNSIGNED DEFAULT NULL,
  `slug` varchar(45) DEFAULT NULL,
  `icon` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_site_products`
--

INSERT INTO `core_site_products` (`id`, `name`, `site_product_category_id`, `description`, `photo`, `regular_price`, `offer_price`, `inactive`, `current_stock`, `site_product_uom_id`, `slug`, `icon`) VALUES
(1, 'POS ERP', 1, ' Integrated solution from production to point of sale for any retials business including supershop, clothing, pharmacy, restaurant/food, electronics, library, jewellery, furniture, tiles & sanitary etc', '1548843653.jpg', 0, 0, 0, 0, 1, 'pos-erp', ''),
(2, 'ERP - GARMENTS', 1, 'Intellect Garments ERP is one of the leading ERP solution provider, especially for Garments industries which is integrated with different modules that cover all the…', '1548855465.jpg', 0, 0, 0, 0, 1, 'garments-erp', NULL),
(3, 'ERP - GENERAL INSURANCE', 1, 'Our Insurance software so flexible that you will reach your business goals in no time. Stop struggling with legacy systems! Our intellect software will help…', '1548855650.jpg', 0, 0, 0, 0, 1, 'genaral-insurance-erp', NULL),
(4, 'ERP - EDUCATION', 1, 'Intellect education management software is used by teachers, students, and school/college/university administrators for organization and collaboration, and to facilitate learning. School software is', '1548856590.jpg', 0, 0, 0, 0, 1, 'education-erp', NULL),
(5, 'ERP - MANUFACTURING', 1, 'Intellect ERP gives a company an integrated real-time view of its core business processes such as production, order processing, and inventory management, tied together by…', '1548856850.jpg', 0, 0, 0, 0, 1, 'manufacturing-erp', NULL),
(6, 'ERP - HOSPITAL', 1, 'Intellect Hospital Management Software is a comprehensive and integrated hospital management software, designed to manage all aspects of hospital operations.(i.e. Outpatient and Inpatient management, Patient…', '1548857774.jpg', 0, 0, 0, 0, 1, 'hospital-erp', NULL),
(7, 'ERP - MERCHANDISING', 1, 'Merchandising, CONTROL Retail Management System and POS also takes care of Retail CRM, Inventory Management, online trading, Sales & Profit Analysis, Order Entry & Invoicing,…', '1548858095.jpg', 0, 0, 0, 0, 1, 'merchandising-erp', NULL),
(8, 'ERP - TEXTILE', 1, 'The Intellect ERP (enterprise resource planning) software solutions - seek to integrate the business processes involving eight critical areas in the textile production planning which…', '1548858372.jpg', 0, 0, 0, 0, 1, 'texttile-erp', NULL),
(9, 'ERP - REAL ESTATE', 1, 'Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater', '1548858645.jpg', 0, 0, 0, 0, 1, 'real-estate-erp', NULL),
(10, 'Accounting', 2, 'Accounting Software includes general journal, creating bill & invoice, all financial reports (Trial Balance, Income Statement, Balance Sheet) and so on.', '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"48\" height=\"48\" viewBox=\"0 0 24 24\" class=\"text-primary\" fill=\"currentColor\"><path d=\"M19 2H5c-1.103 0-2 .897-2 2v16c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2zM5 20V4h14l.001 16H5z\"></path><path d=\"M7 12h2v2H7zm0 4h2v2H7zm4-4h2v2h-2zM7 6h10v4H7zm4 10h2v2h-2zm4-4h2v6h-2z\"></path>', 0, 0, 0, 0, 1, 'accounting', NULL),
(11, 'HR & Accounting', 2, 'Human Resource Management System includes person management, payroll, attendance, leave & holiday, shift & schedule, accounting and so on.', '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"48\" height=\"48\" viewBox=\"0 0 24 24\" class=\"text-primary\" fill=\"currentColor\"><path d=\"M9.715 12c1.151 0 2-.849 2-2s-.849-2-2-2-2 .849-2 2 .848 2 2 2z\"></path><path d=\"M20 4H4c-1.103 0-2 .841-2 1.875v12.25C2 19.159 2.897 20 4 20h16c1.103 0 2-.841 2-1.875V5.875C22 4.841 21.103 4 20 4zm0 14-16-.011V6', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Diagnostic Application', 2, 'Diagnostic Application includes pharmacy management, radioloy reporting management, sample collection and reporting management and so on', '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"48\" height=\"48\" viewBox=\"0 0 24 24\" class=\"text-primary\" fill=\"currentColor\"><path d=\"M15.794 11.09c.332-.263.648-.542.947-.84l.136-.142c.283-.293.552-.598.801-.919l.062-.075c.255-.335.486-.688.702-1.049l.128-.22c.205-.364.395-.737.559-1.123.02-.047.035-.095.055-.142.147-.361.274-.731.383-1.109.02', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Doctors Prescription', 2, 'Doctors Prescription Application includes appointment scheduling, visit fee collection, create and print prescription and so on..', '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"48\" height=\"48\" viewBox=\"0 0 24 24\" class=\"text-primary\" fill=\"currentColor\"><path d=\"M8.434 20.566c1.335 0 2.591-.52 3.535-1.464l7.134-7.133a5.008 5.008 0 0 0-.001-7.072 4.969 4.969 0 0 0-3.536-1.463c-1.335 0-2.59.52-3.534 1.464l-7.134 7.133a5.01 5.01 0 0 0-.001 7.072 4.971 4.971 0 0 0 3.537 1.46', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Asset Management', 2, 'Asset Management System includes asset and components, operation schedule, material & service requisition and so on.', '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"48\" height=\"48\" viewBox=\"0 0 24 24\" class=\"text-primary\" fill=\"currentColor\"><path d=\"m20.772 13.155-1.368-4.104A2.995 2.995 0 0 0 16.559 7H7.441a2.995 2.995 0 0 0-2.845 2.051l-1.368 4.104A2.001 2.001 0 0 0 2 15v3c0 .738.404 1.376 1 1.723V21a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1h12v1a1 1 0 0 0 1 1h1a1 ', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Inventory Management', 2, 'Inventory Management System includes stock management, warehouse management, stock adjustment, requisition management, stock reporting and so on.', '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"48\" height=\"48\" viewBox=\"0 0 24 24\" class=\"text-primary\" fill=\"currentColor\"><path d=\"M21.993 7.95a.96.96 0 0 0-.029-.214c-.007-.025-.021-.049-.03-.074-.021-.057-.04-.113-.07-.165-.016-.027-.038-.049-.057-.075-.032-.045-.063-.091-.102-.13-.023-.022-.053-.04-.078-.061-.039-.032-.075-.067-.12-.094-.', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'RealTime Attendance System', 2, 'Biometric System Application includes registration with finger print and webcam device, Bio-Metric verification, real time data storage, system & security and so on.', '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"48\" height=\"48\" viewBox=\"0 0 24 24\" class=\"text-primary\" fill=\"currentColor\"><path d=\"M5.962 17.674C7 19.331 7 20.567 7 22h2c0-1.521 0-3.244-1.343-5.389l-1.695 1.063zM16.504 3.387C13.977 1.91 7.55.926 4.281 4.305c-3.368 3.481-2.249 9.072.001 11.392.118.122.244.229.369.333.072.061.146.116.205.184l1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Project Management', 2, 'Project Management Application includes person management, task & team management, asset management, costing, reporting and so o', '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"48\" height=\"48\" viewBox=\"0 0 24 24\" class=\"text-primary\" fill=\"currentColor\"><path d=\"M5 22h14c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2h-2a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1H5c-1.103 0-2 .897-2 2v15c0 1.103.897 2 2 2zM5 5h2v2h10V5h2v15H5V5z\"></path><path d=\"m11 13.586-1.793-1.793-1.414 1.414L11 16.414l5', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Logistics Management', 2, 'Logistics Management System includes procurement & delivery management, transportation & route management, storage of goods & transportation flow, navigation, billing and so on.', '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"48\" height=\"48\" viewBox=\"0 0 24 24\" class=\"text-primary\" fill=\"currentColor\"><path d=\"M14.844 20H6.5C5.121 20 4 18.879 4 17.5S5.121 15 6.5 15h7c1.93 0 3.5-1.57 3.5-3.5S15.43 8 13.5 8H8.639a9.812 9.812 0 0 1-1.354 2H13.5c.827 0 1.5.673 1.5 1.5s-.673 1.5-1.5 1.5h-7C4.019 13 2 15.019 2 17.5S4.019 22 ', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'E-Commerce Solution', 2, 'E-Commerce Solution includes website, management of product, order, purchase, warehouse, customer, supplier, payment gateway and so on.', '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"48\" height=\"48\" viewBox=\"0 0 24 24\" class=\"text-primary\" fill=\"currentColor\"><path d=\"M4 20h2V10a1 1 0 0 1 1-1h12V7a1 1 0 0 0-1-1h-3.051c-.252-2.244-2.139-4-4.449-4S6.303 3.756 6.051 6H3a1 1 0 0 0-1 1v11a2 2 0 0 0 2 2zm6.5-16c1.207 0 2.218.86 2.45 2h-4.9c.232-1.14 1.243-2 2.45-2z\"></path><path d=\"', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'Visa Processing Software', 2, 'Our Visa Processing Software includes customer registration, deed and document management, visa & ticket processing step management, invoice & payment, status report and so on.', '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"48\" height=\"48\" viewBox=\"0 0 24 24\" class=\"text-primary\" fill=\"currentColor\"><path d=\"M3 18h18v2H3zm18.509-9.473a1.61 1.61 0 0 0-2.036-1.019L15 9 7 6 5 7l6 4-4 2-4-2-1 1 4 4 14.547-5.455a1.611 1.611 0 0 0 .962-2.018z\"></path></svg>', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `core_site_product_categories`
--

CREATE TABLE `core_site_product_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_site_product_categories`
--

INSERT INTO `core_site_product_categories` (`id`, `name`) VALUES
(1, 'ERP'),
(2, 'OTHER SOFTWARES');

-- --------------------------------------------------------

--
-- Table structure for table `core_site_product_uoms`
--

CREATE TABLE `core_site_product_uoms` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_site_product_uoms`
--

INSERT INTO `core_site_product_uoms` (`id`, `name`) VALUES
(1, 'Piece');

-- --------------------------------------------------------

--
-- Table structure for table `core_site_routes`
--

CREATE TABLE `core_site_routes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `src` varchar(45) DEFAULT NULL,
  `inactive` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `site_menu_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_site_routes`
--

INSERT INTO `core_site_routes` (`id`, `name`, `src`, `inactive`, `site_menu_id`) VALUES
(1, 'pos-erp', 'views/pages/ERP-POS.php', 0, 2),
(2, 'garment-erp', 'views/pages/ERP-Garments.php', 0, 2),
(3, 'education-erp', 'views/pages/ERP-Education.php', 0, 2),
(4, 'general-insurance-erp', 'views/pages/ERP-General-Insurance.php', 0, 2),
(5, 'manufacturing-erp', 'views/pages/ERP-Manufacturing.php', 0, 2),
(6, 'hospital-erp', 'views/pages/ERP-Hospital.php', 0, 2),
(7, 'texttile-erp', 'views/pages/ERP-Textitle.php', 0, 2),
(8, 'real-estate-erp', 'views/pages/ERP-Real-Estate.php', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `core_site_services`
--

CREATE TABLE `core_site_services` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text DEFAULT NULL,
  `regular_price` float DEFAULT 0,
  `offer_price` float DEFAULT 0,
  `icon` varchar(45) DEFAULT NULL,
  `inactive` tinyint(3) UNSIGNED DEFAULT 0,
  `photo` varchar(145) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_site_services`
--

INSERT INTO `core_site_services` (`id`, `name`, `category_id`, `description`, `regular_price`, `offer_price`, `icon`, `inactive`, `photo`) VALUES
(1, 'Software Quality Assurance', 1, 'Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater', 0, 0, NULL, 0, '1548863121.png'),
(2, 'Software forensic', 1, 'Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater', 0, 0, NULL, 0, '1548863180.png'),
(3, 'Database Migration', 1, 'Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater', 0, 0, NULL, 0, '1548863362.png'),
(4, 'Setup Own Hosting', 1, 'Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater', 0, 0, NULL, 0, '1548863484.png'),
(5, 'Cloud Backup Service', 1, 'Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greate', 0, 0, NULL, 0, '1548862800.png'),
(6, 'Software Upgrade and Maintenance', 1, 'Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater', 0, 0, NULL, 0, '1548863512.png'),
(7, 'Incredibly Responsive', 2, 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel.', 0, 0, '<i class=\"fa fa-laptop v-icon\"></i>', 0, NULL),
(8, 'Fully Customizible', 2, 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel.', 0, 0, '<i class=\"fa fa-leaf v-icon\"></i>', 0, NULL),
(9, 'Interactive Elements', 2, 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel.', 0, 0, '<i class=\"fa fa-scissors v-icon\"></i>', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `core_site_service_categories`
--

CREATE TABLE `core_site_service_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_site_service_categories`
--

INSERT INTO `core_site_service_categories` (`id`, `name`) VALUES
(1, 'Software Enable Service');

-- --------------------------------------------------------

--
-- Table structure for table `core_status`
--

CREATE TABLE `core_status` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_status`
--

INSERT INTO `core_status` (`id`, `name`) VALUES
(1, 'Processing'),
(2, 'Shifted'),
(3, 'Delivered'),
(4, 'Invoiced');

-- --------------------------------------------------------

--
-- Table structure for table `core_stocks`
--

CREATE TABLE `core_stocks` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `qty` float NOT NULL,
  `transaction_type_id` int(10) UNSIGNED NOT NULL,
  `remark` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `warehouse_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_stocks`
--

INSERT INTO `core_stocks` (`id`, `product_id`, `qty`, `transaction_type_id`, `remark`, `created_at`, `warehouse_id`) VALUES
(14, 50, 1, 3, 'Purchase', '2024-06-04 06:47:19', 1),
(15, 17, 1, 3, 'Purchase', '2024-06-04 06:47:19', 1),
(16, 17, 14, 3, 'Purchase', '2024-06-05 03:22:00', 1),
(17, 50, 15, 3, 'Purchase', '2024-06-05 03:22:00', 1),
(18, 17, -1, 6, 'Damage', '0000-00-00 00:00:00', 1),
(19, 50, 2, 4, 'selse return', '0000-00-00 00:00:00', 1),
(20, 50, 2, 2, 'yj', '0000-00-00 00:00:00', 1),
(21, 17, 2, 1, 'ytjk', '0000-00-00 00:00:00', 1),
(22, 17, -1, 1, 'Order', '0000-00-00 00:00:00', 0),
(23, 52, 6, 3, 'Purchase', '2025-03-10 09:58:37', 1),
(24, 52, -1, 1, 'Order', '0000-00-00 00:00:00', 0),
(25, 52, 3, 5, 'Test', '0000-00-00 00:00:00', 2),
(26, 50, -2, 6, 'Tst', '0000-00-00 00:00:00', 1),
(27, 17, -5, 1, 'Order', '0000-00-00 00:00:00', 0),
(28, 17, -1, 1, 'Order', '0000-00-00 00:00:00', 0),
(29, 17, -1, 1, 'Order', '0000-00-00 00:00:00', 0),
(30, 52, -1, 1, 'Order', '0000-00-00 00:00:00', 0),
(31, 17, 3, 3, 'Purchase', '2025-03-19 08:29:20', 2),
(32, 52, 1, 3, 'Purchase', '2025-03-19 08:29:20', 2),
(33, 17, -1, 1, 'Order', '0000-00-00 00:00:00', 0),
(34, 52, -2, 1, 'Order', '0000-00-00 00:00:00', 0),
(35, 53, -1, 1, 'Order', '0000-00-00 00:00:00', 0),
(36, 17, -4, 1, 'Order', '0000-00-00 00:00:00', 0),
(37, 52, -1, 1, 'Order', '0000-00-00 00:00:00', 0),
(38, 53, -2, 1, 'Order', '0000-00-00 00:00:00', 0),
(39, 53, -3, 1, 'Order', '0000-00-00 00:00:00', 0),
(40, 52, -1, 1, 'Order', '0000-00-00 00:00:00', 0),
(41, 52, -2, 1, 'Order', '0000-00-00 00:00:00', 0),
(42, 17, -5, 1, 'Order', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `core_stock_adjustments`
--

CREATE TABLE `core_stock_adjustments` (
  `id` int(10) UNSIGNED NOT NULL,
  `adjustment_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_id` int(10) UNSIGNED NOT NULL,
  `remark` text NOT NULL,
  `adjustment_type_id` int(10) UNSIGNED NOT NULL,
  `werehouse_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_stock_adjustments`
--

INSERT INTO `core_stock_adjustments` (`id`, `adjustment_at`, `user_id`, `remark`, `adjustment_type_id`, `werehouse_id`) VALUES
(1, '2021-12-27 18:00:00', 1, 'ddd', 2, 1),
(2, '2021-12-27 18:00:00', 1, 'ddd', 2, 1),
(3, '2021-12-27 18:00:00', 1, 'ddddfd', 6, 1),
(4, '2021-12-27 18:00:00', 1, 'NA', 6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `core_stock_adjustment_details`
--

CREATE TABLE `core_stock_adjustment_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `adjustment_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `qty` float NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_stock_adjustment_details`
--

INSERT INTO `core_stock_adjustment_details` (`id`, `adjustment_id`, `product_id`, `qty`, `price`) VALUES
(1, 2, 20, 5, 400),
(2, 3, 20, 50, 400),
(3, 4, 28, 70, 6650),
(4, 4, 20, 30, 300);

-- --------------------------------------------------------

--
-- Table structure for table `core_stock_adjustment_types`
--

CREATE TABLE `core_stock_adjustment_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `factor` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_stock_adjustment_types`
--

INSERT INTO `core_stock_adjustment_types` (`id`, `name`, `factor`) VALUES
(1, 'Is Outdated', -1),
(2, 'Is Damaged', -1),
(3, 'Material Missing', -1),
(4, 'Product Is Obsolete', -1),
(5, 'Existing Inventory', 1),
(6, 'Fixed/Found Inventory', 1);

-- --------------------------------------------------------

--
-- Table structure for table `core_students`
--

CREATE TABLE `core_students` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL DEFAULT '',
  `level_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `fathers_name` varchar(45) NOT NULL DEFAULT '',
  `mothers_name` varchar(45) NOT NULL DEFAULT '',
  `dob` date DEFAULT NULL,
  `contact_no` varchar(45) DEFAULT NULL,
  `address` text NOT NULL DEFAULT '',
  `photo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_students`
--

INSERT INTO `core_students` (`id`, `name`, `level_id`, `fathers_name`, `mothers_name`, `dob`, `contact_no`, `address`, `photo`) VALUES
(1, 'Mahedi Hassan', 5, 'Torikul', 'Mim', '2000-03-19', '45435436565', 'Ranpura', 'mahedi-hassan.jpg'),
(2, 'Kaled', 4, 'Abdur Rahman', 'Amena Akter', '2001-01-19', '01236545', 'Badda', 'kaled.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `core_student_names`
--

CREATE TABLE `core_student_names` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core_subjects`
--

CREATE TABLE `core_subjects` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_subjects`
--

INSERT INTO `core_subjects` (`id`, `name`) VALUES
(1, 'English'),
(2, 'Bangla'),
(3, 'Math'),
(4, 'Chemistry'),
(5, 'Physics'),
(6, 'History'),
(7, 'Islam'),
(8, 'Geograpy'),
(9, 'Biology');

-- --------------------------------------------------------

--
-- Table structure for table `core_suppliers`
--

CREATE TABLE `core_suppliers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `mobile` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `photo` varchar(145) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_suppliers`
--

INSERT INTO `core_suppliers` (`id`, `name`, `mobile`, `email`, `photo`) VALUES
(1, 'Md. Shahin', '56879898', 'shahin@yahoo.com', '1.jpeg'),
(2, 'kulsum', '07154545', 'kulsum@gmail.com', '2.png'),
(4, 'Jahid', '3654533', 'jahid@gmail.com', '4.jpg'),
(9, 'rahim', '1123334', 'aa@gmail.com', '9.png'),
(10, 'kuddush', '678798', 'kuddush@gmail.com', NULL),
(15, 'ismail riyad4', '04555545', 'karim@.com', NULL),
(21, 'Abdul', '3534354', 'kader@gmail.com', NULL),
(22, 'Jahidul Islam', '3423423', 'kader@gmail.com', NULL),
(24, 'Kader', '34343', 'kader@gmail.com', NULL),
(36, 'Jahidul Islam', '343433333333333', 'kader@gmail.com', '6-png.png'),
(37, 'Naiyem Limited', '343243243444', 'naiyem', 'images-png.png');

-- --------------------------------------------------------

--
-- Table structure for table `core_tailor_dresses`
--

CREATE TABLE `core_tailor_dresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_tailor_dresses`
--

INSERT INTO `core_tailor_dresses` (`id`, `name`, `price`) VALUES
(1, 'Shirt', 1000),
(2, 'Kamiz', 1200),
(3, 'Pants', 1100),
(4, 'Borka', 2500),
(5, 'Panjabi', 1300);

-- --------------------------------------------------------

--
-- Table structure for table `core_tailor_dress_parameters`
--

CREATE TABLE `core_tailor_dress_parameters` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `dress_id` int(10) UNSIGNED NOT NULL,
  `default_size` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_tailor_dress_parameters`
--

INSERT INTO `core_tailor_dress_parameters` (`id`, `name`, `dress_id`, `default_size`) VALUES
(1, 'Chest', 1, NULL),
(2, 'Waist', 1, NULL),
(3, 'Seat', 1, NULL),
(4, 'Bicep', 1, NULL),
(5, 'Shirt Length', 1, NULL),
(6, 'Shoulder Width', 1, NULL),
(7, 'Sleeve Length', 1, NULL),
(8, 'Cuff Circumference', 1, NULL),
(9, 'Collar Size', 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `core_tailor_orders`
--

CREATE TABLE `core_tailor_orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(20) NOT NULL,
  `paid_amount` double DEFAULT NULL,
  `order_datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `delivery_datetime` datetime NOT NULL,
  `order_total` double DEFAULT NULL,
  `shipping_address` text DEFAULT NULL,
  `remark` text DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `discount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_tailor_orders`
--

INSERT INTO `core_tailor_orders` (`id`, `customer_name`, `paid_amount`, `order_datetime`, `delivery_datetime`, `order_total`, `shipping_address`, `remark`, `mobile`, `discount`) VALUES
(1, 'Jahidul Islam', 500, '0000-00-00 00:00:00', '2024-01-20 00:00:00', 950, 'Rampura', '', '3434343234', 50);

-- --------------------------------------------------------

--
-- Table structure for table `core_tailor_order_details`
--

CREATE TABLE `core_tailor_order_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `dress_id` int(10) UNSIGNED NOT NULL,
  `price` double NOT NULL,
  `qty` double NOT NULL,
  `discount` double NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_tailor_order_details`
--

INSERT INTO `core_tailor_order_details` (`id`, `dress_id`, `price`, `qty`, `discount`, `order_id`) VALUES
(1, 1, 1000, 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `core_tailor_order_measurements`
--

CREATE TABLE `core_tailor_order_measurements` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `measurement_id` int(10) UNSIGNED NOT NULL,
  `size` varchar(10) NOT NULL,
  `uom_id` int(10) UNSIGNED NOT NULL,
  `dress_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_tailor_order_measurements`
--

INSERT INTO `core_tailor_order_measurements` (`id`, `order_id`, `measurement_id`, `size`, `uom_id`, `dress_id`) VALUES
(1, 1, 1, '34', 1, 1),
(2, 1, 2, '33', 1, 1),
(3, 1, 5, '22', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `core_tailor_uoms`
--

CREATE TABLE `core_tailor_uoms` (
  `id` int(10) UNSIGNED NOT NULL,
  `abbr` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `inactive` tinyint(3) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_tailor_uoms`
--

INSERT INTO `core_tailor_uoms` (`id`, `abbr`, `name`, `inactive`) VALUES
(1, 'inc', 'Inch', 0),
(2, 'ft', 'Foot', 0),
(3, 'yd', 'yard', 0),
(4, 'piece', 'piece', 0);

-- --------------------------------------------------------

--
-- Table structure for table `core_teachers`
--

CREATE TABLE `core_teachers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `group_id` int(10) UNSIGNED NOT NULL,
  `salary` varchar(45) DEFAULT NULL,
  `contact_no` varchar(45) DEFAULT NULL,
  `address` text NOT NULL,
  `photo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_teachers`
--

INSERT INTO `core_teachers` (`id`, `name`, `group_id`, `salary`, `contact_no`, `address`, `photo`) VALUES
(1, 'Hamid', 1, '200000', '0123654', 'Mirpur', '1.jpg'),
(2, 'Hamid Khan', 1, '52222', '45435436565', 'sdasa', 'images-4-jpg.jpg'),
(4, 'Hamid', 2, '52222', '5464', 'Badad\r\n', '4.jpg'),
(5, 'munni', 3, '52222', '54645456', 'Karwan Bazar', '5.jpg'),
(7, 'Abdul Hamid', 1, '30000', '987456321', 'Gulshan', 'img-20241003-004151-jpg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `core_terms`
--

CREATE TABLE `core_terms` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_terms`
--

INSERT INTO `core_terms` (`id`, `name`) VALUES
(1, 'Term-1'),
(2, 'Final');

-- --------------------------------------------------------

--
-- Table structure for table `core_thanas`
--

CREATE TABLE `core_thanas` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `district_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_thanas`
--

INSERT INTO `core_thanas` (`id`, `name`, `district_id`) VALUES
(1, 'Chatkhil', 2),
(2, 'Ramgonj', 2),
(3, 'Mijdi Sadar', 2),
(4, 'Begomganj', 2);

-- --------------------------------------------------------

--
-- Table structure for table `core_transaction_types`
--

CREATE TABLE `core_transaction_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_transaction_types`
--

INSERT INTO `core_transaction_types` (`id`, `name`) VALUES
(1, 'Sales Order'),
(2, 'Sales Return'),
(3, 'Purchase Order'),
(4, 'Purchase Return'),
(5, 'Positive Stock Adjustment'),
(6, 'Negative Stock Adjustment');

-- --------------------------------------------------------

--
-- Table structure for table `core_uoms`
--

CREATE TABLE `core_uoms` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_uoms`
--

INSERT INTO `core_uoms` (`id`, `name`) VALUES
(1, 'Piece'),
(2, 'Kg'),
(3, 'Pack'),
(4, 'Litter'),
(5, 'Gram'),
(6, 'Ton');

-- --------------------------------------------------------

--
-- Table structure for table `core_users`
--

CREATE TABLE `core_users` (
  `id` int(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `role_id` int(10) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `photo` varchar(50) DEFAULT NULL,
  `verify_code` varchar(50) DEFAULT NULL,
  `inactive` tinyint(1) UNSIGNED DEFAULT 0,
  `mobile` varchar(50) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `ip` varchar(45) DEFAULT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `remember_token` varchar(145) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_users`
--

INSERT INTO `core_users` (`id`, `name`, `role_id`, `password`, `email`, `full_name`, `created_at`, `photo`, `verify_code`, `inactive`, `mobile`, `updated_at`, `ip`, `email_verified_at`, `remember_token`) VALUES
(191, 'Dola', 1, '$2y$10$5wp0Z4ssl5zEdSbjLrdZ8exgNZR5HjP7XxzMp7qzsjShbWQujJfHG', 'samdola81@gmail.com', 'Samsunnahar', '2025-01-18 12:36:54', NULL, NULL, 0, '01832482305', NULL, '192.168.150.38', NULL, NULL),
(192, 'samira', 1, '$2y$10$5wp0Z4ssl5zEdSbjLrdZ8exgNZR5HjP7XxzMp7qzsjShbWQujJfHG', 'samira@gmail.com', 'Samira Akter', '2025-01-18 12:36:54', NULL, NULL, 0, '01881432313', NULL, '192.168.150.59', NULL, NULL),
(194, 'dibbo', 1, '$2y$10$5wp0Z4ssl5zEdSbjLrdZ8exgNZR5HjP7XxzMp7qzsjShbWQujJfHG', 'jkp.jakaria@gmail.com', 'jkp', '2025-01-18 12:36:54', NULL, NULL, 0, '01642527454', NULL, '192.168.150.47', NULL, NULL),
(196, 'akhi', 1, '$2y$10$5wp0Z4ssl5zEdSbjLrdZ8exgNZR5HjP7XxzMp7qzsjShbWQujJfHG', 'akhi26713@gmail.cm', 'Aminur Rahman', '2025-01-18 12:36:54', NULL, NULL, 0, '01946357571', NULL, '192.168.150.49', NULL, NULL),
(197, 'tasmin', 1, '$2y$10$5wp0Z4ssl5zEdSbjLrdZ8exgNZR5HjP7XxzMp7qzsjShbWQujJfHG', 'tanim@gmail.com', 'Rifat Ahammed Tanim', '2025-01-18 12:36:54', NULL, NULL, 0, '01900000000', NULL, '192.168.150.50', NULL, NULL),
(199, 'MD. HAFIJUL ISLAM', 1, '$2y$10$5wp0Z4ssl5zEdSbjLrdZ8exgNZR5HjP7XxzMp7qzsjShbWQujJfHG', 'imdhafijul453@gmail.com', 'Md.Hafijul Islam', '2025-01-18 12:36:54', NULL, NULL, 0, '01755747048', NULL, '192.168.150.55', NULL, NULL),
(200, 'kamruzzaman', 1, '$2y$10$5wp0Z4ssl5zEdSbjLrdZ8exgNZR5HjP7XxzMp7qzsjShbWQujJfHG', 'olba@gmail.com', 'Javed ', '2025-01-18 12:36:54', NULL, NULL, 0, '01869546555', NULL, '192.168.150.22', NULL, NULL),
(201, 'Tasmin Jahan', 1, '$2y$10$5wp0Z4ssl5zEdSbjLrdZ8exgNZR5HjP7XxzMp7qzsjShbWQujJfHG', 'Tasminjahan875@gmail.com', 'Tasmin Jahan', '2025-01-18 12:36:54', NULL, NULL, 0, '01623578437', NULL, '192.168.150.50', NULL, NULL),
(204, 'sabbir', 1, '$2y$10$5wp0Z4ssl5zEdSbjLrdZ8exgNZR5HjP7XxzMp7qzsjShbWQujJfHG', 'sabbir.001@outlook.com', 'Sabbir Ahmed', '2025-01-18 12:36:54', NULL, NULL, 0, '01752485143', NULL, '192.168.150.53', NULL, NULL),
(206, 'jahid', 1, '$2y$10$5wp0Z4ssl5zEdSbjLrdZ8exgNZR5HjP7XxzMp7qzsjShbWQujJfHG', 'jahid1@yahoo.com', 'Jahidul Islam', '2024-12-19 12:27:25', NULL, NULL, 0, NULL, '2024-07-04 05:52:52', '::1', NULL, NULL),
(207, 'admin', 1, '$2y$10$5wp0Z4ssl5zEdSbjLrdZ8exgNZR5HjP7XxzMp7qzsjShbWQujJfHG', 'towhid1@outlook.com', 'Towhidul Islam', '2024-12-19 12:25:39', NULL, NULL, 0, NULL, '2024-07-04 06:03:13', '::1', NULL, NULL),
(208, 'didar', 1, '$2y$10$5wp0Z4ssl5zEdSbjLrdZ8exgNZR5HjP7XxzMp7qzsjShbWQujJfHG', 'mddidar199911@gmail.com', 'Didar', '2025-01-18 12:36:54', NULL, NULL, 0, '01315451430', NULL, '192.168.150.52', NULL, NULL),
(209, 'alifa', 1, '$2y$10$5wp0Z4ssl5zEdSbjLrdZ8exgNZR5HjP7XxzMp7qzsjShbWQujJfHG', 'alifa@yahoo.com', 'Alifa', '2025-01-18 12:36:54', NULL, NULL, 0, '01758917270', NULL, '192.168.150.57', NULL, NULL),
(210, 'hasan', 1, '$2y$10$5wp0Z4ssl5zEdSbjLrdZ8exgNZR5HjP7XxzMp7qzsjShbWQujJfHG', 'hasanmd993@gmail.com', 'Md Hasan', '2025-01-18 11:48:36', NULL, NULL, 0, '01822304694', NULL, '192.168.150.7', NULL, NULL),
(211, 'Hamid', 1, '$2y$10$5wp0Z4ssl5zEdSbjLrdZ8exgNZR5HjP7XxzMp7qzsjShbWQujJfHG', 'hamidyahoo22@gmail.com', ' Abdul Hamid', '2025-01-18 12:36:54', NULL, NULL, 0, '01764577191', NULL, '192.168.150.47', NULL, NULL),
(212, 'anayet', 1, '$2y$10$5wp0Z4ssl5zEdSbjLrdZ8exgNZR5HjP7XxzMp7qzsjShbWQujJfHG', 'anayetmd2018@gmail.com', 'Md. Anayet Hossain', '2025-01-18 12:36:54', NULL, NULL, 0, '01622737936', NULL, '192.168.150.47', NULL, NULL),
(213, 'azmir', 1, '$2y$10$5wp0Z4ssl5zEdSbjLrdZ8exgNZR5HjP7XxzMp7qzsjShbWQujJfHG', 'azmir@yahoo.com', 'Azmir', '2025-01-18 12:36:54', NULL, NULL, 0, '3432432', NULL, '192.168.150.47', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `core_users0`
--

CREATE TABLE `core_users0` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `core_users0`
--

INSERT INTO `core_users0` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'jahid1@yahoo.com', NULL, '$2y$10$02LIGz04kyyFni4VVy619ehpI4JmYcDu9TGziPZwvSOxquyb.kFzC', NULL, '2024-06-11 22:46:24', '2024-06-11 22:46:24');

-- --------------------------------------------------------

--
-- Table structure for table `core_user_deposits`
--

CREATE TABLE `core_user_deposits` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `amount` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `transaction_at` datetime DEFAULT NULL,
  `note` varchar(45) DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_user_deposits`
--

INSERT INTO `core_user_deposits` (`id`, `user_id`, `amount`, `created_at`, `transaction_at`, `note`, `created_by`) VALUES
(1, 158, 100, '2024-04-04 05:22:32', '2024-04-04 00:00:00', 'NA', 127),
(2, 186, 10000, '2024-04-04 05:22:39', '1970-01-01 06:00:00', '', 186),
(3, 160, -5e17, '2024-04-04 05:23:50', '1970-01-01 06:00:00', '', 186),
(4, 194, 1009, '2024-04-04 05:44:18', '1970-01-01 06:00:00', 'NA', 194),
(5, 197, 10000, '2024-04-04 05:56:20', '1970-01-01 06:00:00', '', 197),
(6, 199, 1, '2024-04-04 05:56:29', '1970-01-01 06:00:00', 'Na', 199),
(7, 196, 1000, '2024-04-04 05:56:49', '1970-01-01 06:00:00', '', 196),
(8, 197, -1, '2024-04-04 05:57:17', '1970-01-01 06:00:00', '', 197),
(9, 196, 150, '2024-04-04 05:57:31', '1970-01-01 06:00:00', '', 127),
(10, 203, 5000, '2024-04-04 05:57:52', '2024-04-04 00:00:00', 'Eid Gift', 203),
(11, 204, 0, '2024-04-04 05:58:09', '2024-04-04 00:00:00', 'xero_xero', 91),
(12, 200, 9999, '2024-04-04 05:58:26', '1970-01-01 06:00:00', '', 200),
(13, 199, 4000, '2024-04-15 04:48:13', '2024-04-15 00:00:00', '', 127),
(14, 201, 3000, '2024-04-15 04:48:32', '1970-01-01 06:00:00', '', 127),
(15, 191, 500, '2024-12-19 12:42:46', '1970-01-01 06:00:00', '', 207),
(16, 192, 500, '2024-12-19 12:43:01', '1970-01-01 06:00:00', '', 207),
(17, 191, 100, '2024-12-19 12:43:52', '1970-01-01 06:00:00', '', 207),
(18, 213, 2000, '2024-12-19 12:44:52', '1970-01-01 06:00:00', '', 207),
(19, 208, 3555, '2024-12-19 12:45:04', '1970-01-01 06:00:00', '', 207),
(20, 204, 344, '2024-12-19 12:45:11', '1970-01-01 06:00:00', '', 207),
(21, 206, 456, '2024-12-19 12:45:16', '1970-01-01 06:00:00', '', 207),
(22, 207, 4555, '2024-12-19 12:45:21', '1970-01-01 06:00:00', '', 207),
(23, 209, 456, '2024-12-19 12:45:26', '1970-01-01 06:00:00', '', 207),
(24, 210, 455, '2024-12-19 12:45:34', '1970-01-01 06:00:00', '', 207),
(25, 211, 4322, '2024-12-19 12:45:39', '1970-01-01 06:00:00', '', 207),
(26, 212, 3556, '2024-12-19 12:45:49', '1970-01-01 06:00:00', '', 207);

-- --------------------------------------------------------

--
-- Table structure for table `core_vendors`
--

CREATE TABLE `core_vendors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `mobile` varchar(45) NOT NULL,
  `photo` varchar(45) NOT NULL,
  `address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_vendors`
--

INSERT INTO `core_vendors` (`id`, `name`, `mobile`, `photo`, `address`) VALUES
(1, 'Abdur Rahman', '23432432', '1.jpeg', 'Testsa fsa fsdaf'),
(2, 'Jahidul Islam', '23432432342', '2.png', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `core_warehouses`
--

CREATE TABLE `core_warehouses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `contact` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core_warehouses`
--

INSERT INTO `core_warehouses` (`id`, `name`, `city`, `contact`) VALUES
(1, 'Tajgon', 'Dhaka', '4543534534'),
(2, 'Rangpur', 'Rangpur', '324242342'),
(3, 'Badda', 'Rampura', '3434334324');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `id` int(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `contact` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `name`, `contact`) VALUES
(2, 'ISL', '2345454'),
(3, 'IDB', '9390033'),
(5, 'APCL', '23432432');

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE `model` (
  `id` int(10) NOT NULL,
  `name` varchar(33) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `brand_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`id`, `name`, `price`, `brand_id`) VALUES
(1, 'V1', 145263000, 1),
(2, 'V2', 145263000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `manufacturer_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `manufacturer_id`) VALUES
(3, 'HRM', 100000, 2),
(4, 'ERP', 3000000, 2),
(5, 'Car', 900000, 3),
(7, 'Headphone', 2000, 5);

-- --------------------------------------------------------

--
-- Table structure for table `receipts`
--

CREATE TABLE `receipts` (
  `id` int(10) NOT NULL,
  `student_id` int(10) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `receipts`
--

INSERT INTO `receipts` (`id`, `student_id`, `amount`, `created_at`) VALUES
(1, 1, 2000, '2025-02-03 05:28:00'),
(2, 3, 3000, '2025-02-03 05:28:00'),
(3, 1, 2000, '2025-02-03 05:28:00');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) NOT NULL,
  `name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'Manager'),
(3, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `salesmans`
--

CREATE TABLE `salesmans` (
  `id` int(20) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `salesmans`
--

INSERT INTO `salesmans` (`id`, `name`, `password`) VALUES
(1, 'Ab Hamid', '32566');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `Id` int(10) NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Roll` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`Id`, `Name`, `Roll`) VALUES
(1, 'Ab.Hamid', '1285547'),
(7, 'Dola', '1'),
(46, 'Hafij', '1');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(20) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `role_id` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `password`, `role_id`) VALUES
(1, 'Ab Hamid', '32566', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `role_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `role_id`) VALUES
(1, 'jahid2', '111111', 1),
(2, 'Test333', '333333', 2),
(3, 'rahim', '111111', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users1`
--

CREATE TABLE `users1` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `password` varchar(50) DEFAULT NULL,
  `inactive` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users1`
--

INSERT INTO `users1` (`id`, `name`, `created_at`, `password`, `inactive`) VALUES
(1, 'jahid', '2025-02-01 04:50:26', '111111', 0),
(2, 'rasel', '2025-02-01 04:50:26', '444444', 0),
(3, 'karim', '2025-02-01 04:50:26', '222222', 0);

-- --------------------------------------------------------

--
-- Table structure for table `v_product_list1`
--

CREATE TABLE `v_product_list1` (
  `id` int(10) DEFAULT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `mfg_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collection`
--
ALTER TABLE `collection`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `student_Id` (`student_Id`);

--
-- Indexes for table `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_academy_admissions`
--
ALTER TABLE `core_academy_admissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_academy_attendances`
--
ALTER TABLE `core_academy_attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_academy_batches`
--
ALTER TABLE `core_academy_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_academy_classes`
--
ALTER TABLE `core_academy_classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_academy_current_classes`
--
ALTER TABLE `core_academy_current_classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_academy_exam_types`
--
ALTER TABLE `core_academy_exam_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_academy_money_receipts`
--
ALTER TABLE `core_academy_money_receipts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_academy_money_receipt_details`
--
ALTER TABLE `core_academy_money_receipt_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_academy_periods`
--
ALTER TABLE `core_academy_periods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_academy_presents`
--
ALTER TABLE `core_academy_presents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_academy_results`
--
ALTER TABLE `core_academy_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_academy_routines`
--
ALTER TABLE `core_academy_routines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_academy_sections`
--
ALTER TABLE `core_academy_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_academy_services`
--
ALTER TABLE `core_academy_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_academy_students`
--
ALTER TABLE `core_academy_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_academy_subjects`
--
ALTER TABLE `core_academy_subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_academy_teachers`
--
ALTER TABLE `core_academy_teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_academy_terms`
--
ALTER TABLE `core_academy_terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_assets`
--
ALTER TABLE `core_assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_bookings`
--
ALTER TABLE `core_bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_booking_details`
--
ALTER TABLE `core_booking_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_cache`
--
ALTER TABLE `core_cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `core_cache_locks`
--
ALTER TABLE `core_cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `core_cattles`
--
ALTER TABLE `core_cattles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_cattle_categories`
--
ALTER TABLE `core_cattle_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_company`
--
ALTER TABLE `core_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_contacts`
--
ALTER TABLE `core_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_contact_categories`
--
ALTER TABLE `core_contact_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_customers`
--
ALTER TABLE `core_customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_deliveries`
--
ALTER TABLE `core_deliveries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_delivery_details`
--
ALTER TABLE `core_delivery_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_delivery_status`
--
ALTER TABLE `core_delivery_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_departments`
--
ALTER TABLE `core_departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_districts`
--
ALTER TABLE `core_districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_divisions`
--
ALTER TABLE `core_divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_employee`
--
ALTER TABLE `core_employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_failed_jobs`
--
ALTER TABLE `core_failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `core_failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `core_fees`
--
ALTER TABLE `core_fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_grads`
--
ALTER TABLE `core_grads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_groups`
--
ALTER TABLE `core_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_hms_appointments`
--
ALTER TABLE `core_hms_appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_hms_consultants`
--
ALTER TABLE `core_hms_consultants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_hms_departments`
--
ALTER TABLE `core_hms_departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_hms_medicines`
--
ALTER TABLE `core_hms_medicines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_hms_medicine_categories`
--
ALTER TABLE `core_hms_medicine_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_hms_medicine_types`
--
ALTER TABLE `core_hms_medicine_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_hms_patients`
--
ALTER TABLE `core_hms_patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_hms_prescriptions`
--
ALTER TABLE `core_hms_prescriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_hms_prescription_details`
--
ALTER TABLE `core_hms_prescription_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_jobs`
--
ALTER TABLE `core_jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `core_jobs_queue_index` (`queue`);

--
-- Indexes for table `core_job_batches`
--
ALTER TABLE `core_job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_judgements`
--
ALTER TABLE `core_judgements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_levels`
--
ALTER TABLE `core_levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_manufacturers`
--
ALTER TABLE `core_manufacturers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_mfg_boms`
--
ALTER TABLE `core_mfg_boms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_mfg_bom_details`
--
ALTER TABLE `core_mfg_bom_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_mfg_bom_secondary_products`
--
ALTER TABLE `core_mfg_bom_secondary_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_mfg_productions`
--
ALTER TABLE `core_mfg_productions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_mfg_production_details`
--
ALTER TABLE `core_mfg_production_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_migrations`
--
ALTER TABLE `core_migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_money_receipts`
--
ALTER TABLE `core_money_receipts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_money_receipt_details`
--
ALTER TABLE `core_money_receipt_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_munni`
--
ALTER TABLE `core_munni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_orders`
--
ALTER TABLE `core_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_order_details`
--
ALTER TABLE `core_order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_password_reset_tokens`
--
ALTER TABLE `core_password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `core_personal_access_tokens`
--
ALTER TABLE `core_personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `core_personal_access_tokens_token_unique` (`token`),
  ADD KEY `core_personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `core_persons`
--
ALTER TABLE `core_persons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_positions`
--
ALTER TABLE `core_positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_products`
--
ALTER TABLE `core_products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uni_barcode` (`barcode`),
  ADD UNIQUE KEY `uni_name` (`name`);

--
-- Indexes for table `core_product_brands`
--
ALTER TABLE `core_product_brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_product_categories`
--
ALTER TABLE `core_product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_product_sections`
--
ALTER TABLE `core_product_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_product_types`
--
ALTER TABLE `core_product_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_product_units`
--
ALTER TABLE `core_product_units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_purchases`
--
ALTER TABLE `core_purchases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_purchase_details`
--
ALTER TABLE `core_purchase_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_rest_tables`
--
ALTER TABLE `core_rest_tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_roles`
--
ALTER TABLE `core_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_rooms`
--
ALTER TABLE `core_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_room_types`
--
ALTER TABLE `core_room_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_round63`
--
ALTER TABLE `core_round63`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_sales_departments`
--
ALTER TABLE `core_sales_departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_school_teachers`
--
ALTER TABLE `core_school_teachers`
  ADD PRIMARY KEY (`teacher_id`) USING BTREE;

--
-- Indexes for table `core_sections`
--
ALTER TABLE `core_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_sessions`
--
ALTER TABLE `core_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `core_sessions_user_id_index` (`user_id`),
  ADD KEY `core_sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `core_shippers`
--
ALTER TABLE `core_shippers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_site_albums`
--
ALTER TABLE `core_site_albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_site_album_details`
--
ALTER TABLE `core_site_album_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_site_attributes`
--
ALTER TABLE `core_site_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_site_clients`
--
ALTER TABLE `core_site_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_site_menus`
--
ALTER TABLE `core_site_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_site_menu_subs`
--
ALTER TABLE `core_site_menu_subs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_site_menu_sub_details`
--
ALTER TABLE `core_site_menu_sub_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_site_pages`
--
ALTER TABLE `core_site_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_site_posts`
--
ALTER TABLE `core_site_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_site_post_categories`
--
ALTER TABLE `core_site_post_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_site_post_details`
--
ALTER TABLE `core_site_post_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_site_products`
--
ALTER TABLE `core_site_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_site_product_categories`
--
ALTER TABLE `core_site_product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_site_product_uoms`
--
ALTER TABLE `core_site_product_uoms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_site_routes`
--
ALTER TABLE `core_site_routes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uni_route` (`name`) USING BTREE;

--
-- Indexes for table `core_site_services`
--
ALTER TABLE `core_site_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_site_service_categories`
--
ALTER TABLE `core_site_service_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_status`
--
ALTER TABLE `core_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_stocks`
--
ALTER TABLE `core_stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_stock_adjustments`
--
ALTER TABLE `core_stock_adjustments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_stock_adjustment_details`
--
ALTER TABLE `core_stock_adjustment_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_stock_adjustment_types`
--
ALTER TABLE `core_stock_adjustment_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_student_names`
--
ALTER TABLE `core_student_names`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_subjects`
--
ALTER TABLE `core_subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_suppliers`
--
ALTER TABLE `core_suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_tailor_dresses`
--
ALTER TABLE `core_tailor_dresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_tailor_dress_parameters`
--
ALTER TABLE `core_tailor_dress_parameters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_tailor_orders`
--
ALTER TABLE `core_tailor_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_tailor_order_details`
--
ALTER TABLE `core_tailor_order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_tailor_order_measurements`
--
ALTER TABLE `core_tailor_order_measurements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_tailor_uoms`
--
ALTER TABLE `core_tailor_uoms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_teachers`
--
ALTER TABLE `core_teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_terms`
--
ALTER TABLE `core_terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_thanas`
--
ALTER TABLE `core_thanas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_transaction_types`
--
ALTER TABLE `core_transaction_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_uoms`
--
ALTER TABLE `core_uoms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_users`
--
ALTER TABLE `core_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`name`) USING BTREE;

--
-- Indexes for table `core_users0`
--
ALTER TABLE `core_users0`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `core_users_email_unique` (`email`);

--
-- Indexes for table `core_user_deposits`
--
ALTER TABLE `core_user_deposits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_vendors`
--
ALTER TABLE `core_vendors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_warehouses`
--
ALTER TABLE `core_warehouses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receipts`
--
ALTER TABLE `receipts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salesmans`
--
ALTER TABLE `salesmans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users1`
--
ALTER TABLE `users1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `collection`
--
ALTER TABLE `collection`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `collections`
--
ALTER TABLE `collections`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `core_academy_admissions`
--
ALTER TABLE `core_academy_admissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `core_academy_attendances`
--
ALTER TABLE `core_academy_attendances`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `core_academy_batches`
--
ALTER TABLE `core_academy_batches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `core_academy_classes`
--
ALTER TABLE `core_academy_classes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `core_academy_current_classes`
--
ALTER TABLE `core_academy_current_classes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `core_academy_exam_types`
--
ALTER TABLE `core_academy_exam_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `core_academy_money_receipts`
--
ALTER TABLE `core_academy_money_receipts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `core_academy_money_receipt_details`
--
ALTER TABLE `core_academy_money_receipt_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `core_academy_periods`
--
ALTER TABLE `core_academy_periods`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `core_academy_presents`
--
ALTER TABLE `core_academy_presents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `core_academy_results`
--
ALTER TABLE `core_academy_results`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `core_academy_routines`
--
ALTER TABLE `core_academy_routines`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `core_academy_sections`
--
ALTER TABLE `core_academy_sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `core_academy_services`
--
ALTER TABLE `core_academy_services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `core_academy_students`
--
ALTER TABLE `core_academy_students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `core_academy_subjects`
--
ALTER TABLE `core_academy_subjects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `core_academy_teachers`
--
ALTER TABLE `core_academy_teachers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `core_academy_terms`
--
ALTER TABLE `core_academy_terms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `core_assets`
--
ALTER TABLE `core_assets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `core_bookings`
--
ALTER TABLE `core_bookings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `core_booking_details`
--
ALTER TABLE `core_booking_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `core_cattles`
--
ALTER TABLE `core_cattles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `core_cattle_categories`
--
ALTER TABLE `core_cattle_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `core_company`
--
ALTER TABLE `core_company`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `core_contacts`
--
ALTER TABLE `core_contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `core_contact_categories`
--
ALTER TABLE `core_contact_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `core_customers`
--
ALTER TABLE `core_customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `core_deliveries`
--
ALTER TABLE `core_deliveries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `core_delivery_details`
--
ALTER TABLE `core_delivery_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `core_delivery_status`
--
ALTER TABLE `core_delivery_status`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `core_departments`
--
ALTER TABLE `core_departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `core_districts`
--
ALTER TABLE `core_districts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `core_divisions`
--
ALTER TABLE `core_divisions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `core_employee`
--
ALTER TABLE `core_employee`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `core_failed_jobs`
--
ALTER TABLE `core_failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `core_fees`
--
ALTER TABLE `core_fees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `core_grads`
--
ALTER TABLE `core_grads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `core_groups`
--
ALTER TABLE `core_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `core_hms_appointments`
--
ALTER TABLE `core_hms_appointments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `core_hms_consultants`
--
ALTER TABLE `core_hms_consultants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `core_hms_departments`
--
ALTER TABLE `core_hms_departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `core_hms_medicines`
--
ALTER TABLE `core_hms_medicines`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `core_hms_medicine_categories`
--
ALTER TABLE `core_hms_medicine_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `core_hms_medicine_types`
--
ALTER TABLE `core_hms_medicine_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `core_hms_patients`
--
ALTER TABLE `core_hms_patients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `core_hms_prescriptions`
--
ALTER TABLE `core_hms_prescriptions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `core_hms_prescription_details`
--
ALTER TABLE `core_hms_prescription_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `core_jobs`
--
ALTER TABLE `core_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `core_judgements`
--
ALTER TABLE `core_judgements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `core_levels`
--
ALTER TABLE `core_levels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `core_manufacturers`
--
ALTER TABLE `core_manufacturers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `core_mfg_boms`
--
ALTER TABLE `core_mfg_boms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `core_mfg_bom_details`
--
ALTER TABLE `core_mfg_bom_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `core_mfg_bom_secondary_products`
--
ALTER TABLE `core_mfg_bom_secondary_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `core_mfg_productions`
--
ALTER TABLE `core_mfg_productions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `core_mfg_production_details`
--
ALTER TABLE `core_mfg_production_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `core_migrations`
--
ALTER TABLE `core_migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `core_money_receipts`
--
ALTER TABLE `core_money_receipts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `core_money_receipt_details`
--
ALTER TABLE `core_money_receipt_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `core_munni`
--
ALTER TABLE `core_munni`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `core_orders`
--
ALTER TABLE `core_orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `core_order_details`
--
ALTER TABLE `core_order_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `core_personal_access_tokens`
--
ALTER TABLE `core_personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `core_persons`
--
ALTER TABLE `core_persons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `core_positions`
--
ALTER TABLE `core_positions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `core_products`
--
ALTER TABLE `core_products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `core_product_brands`
--
ALTER TABLE `core_product_brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `core_product_categories`
--
ALTER TABLE `core_product_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `core_product_sections`
--
ALTER TABLE `core_product_sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `core_product_types`
--
ALTER TABLE `core_product_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `core_product_units`
--
ALTER TABLE `core_product_units`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `core_purchases`
--
ALTER TABLE `core_purchases`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `core_purchase_details`
--
ALTER TABLE `core_purchase_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `core_rest_tables`
--
ALTER TABLE `core_rest_tables`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `core_roles`
--
ALTER TABLE `core_roles`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `core_rooms`
--
ALTER TABLE `core_rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `core_room_types`
--
ALTER TABLE `core_room_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `core_round63`
--
ALTER TABLE `core_round63`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `core_sales_departments`
--
ALTER TABLE `core_sales_departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `core_school_teachers`
--
ALTER TABLE `core_school_teachers`
  MODIFY `teacher_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `core_sections`
--
ALTER TABLE `core_sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `core_shippers`
--
ALTER TABLE `core_shippers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `core_site_albums`
--
ALTER TABLE `core_site_albums`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `core_site_album_details`
--
ALTER TABLE `core_site_album_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `core_site_attributes`
--
ALTER TABLE `core_site_attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `core_site_clients`
--
ALTER TABLE `core_site_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `core_site_menus`
--
ALTER TABLE `core_site_menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `core_site_menu_subs`
--
ALTER TABLE `core_site_menu_subs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `core_site_menu_sub_details`
--
ALTER TABLE `core_site_menu_sub_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `core_site_pages`
--
ALTER TABLE `core_site_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `core_site_posts`
--
ALTER TABLE `core_site_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `core_site_post_categories`
--
ALTER TABLE `core_site_post_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `core_site_post_details`
--
ALTER TABLE `core_site_post_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `core_site_products`
--
ALTER TABLE `core_site_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `core_site_product_categories`
--
ALTER TABLE `core_site_product_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `core_site_product_uoms`
--
ALTER TABLE `core_site_product_uoms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `core_site_routes`
--
ALTER TABLE `core_site_routes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `core_site_services`
--
ALTER TABLE `core_site_services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `core_site_service_categories`
--
ALTER TABLE `core_site_service_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `core_status`
--
ALTER TABLE `core_status`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `core_stocks`
--
ALTER TABLE `core_stocks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `core_stock_adjustments`
--
ALTER TABLE `core_stock_adjustments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `core_stock_adjustment_details`
--
ALTER TABLE `core_stock_adjustment_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `core_stock_adjustment_types`
--
ALTER TABLE `core_stock_adjustment_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `core_student_names`
--
ALTER TABLE `core_student_names`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `core_subjects`
--
ALTER TABLE `core_subjects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `core_suppliers`
--
ALTER TABLE `core_suppliers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `core_tailor_dresses`
--
ALTER TABLE `core_tailor_dresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `core_tailor_dress_parameters`
--
ALTER TABLE `core_tailor_dress_parameters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `core_tailor_orders`
--
ALTER TABLE `core_tailor_orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `core_tailor_order_details`
--
ALTER TABLE `core_tailor_order_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `core_tailor_order_measurements`
--
ALTER TABLE `core_tailor_order_measurements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `core_tailor_uoms`
--
ALTER TABLE `core_tailor_uoms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `core_teachers`
--
ALTER TABLE `core_teachers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `core_terms`
--
ALTER TABLE `core_terms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `core_thanas`
--
ALTER TABLE `core_thanas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `core_transaction_types`
--
ALTER TABLE `core_transaction_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `core_uoms`
--
ALTER TABLE `core_uoms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `core_users`
--
ALTER TABLE `core_users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=214;

--
-- AUTO_INCREMENT for table `core_users0`
--
ALTER TABLE `core_users0`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `core_user_deposits`
--
ALTER TABLE `core_user_deposits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `core_vendors`
--
ALTER TABLE `core_vendors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `core_warehouses`
--
ALTER TABLE `core_warehouses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `model`
--
ALTER TABLE `model`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `receipts`
--
ALTER TABLE `receipts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `salesmans`
--
ALTER TABLE `salesmans`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users1`
--
ALTER TABLE `users1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `collection`
--
ALTER TABLE `collection`
  ADD CONSTRAINT `collection_ibfk_1` FOREIGN KEY (`student_Id`) REFERENCES `students` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
