-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307:3307
-- Generation Time: Oct 24, 2024 at 08:29 PM
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
-- Database: `library_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` char(4) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_mail` varchar(100) NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `author_table`
--

CREATE TABLE `author_table` (
  `a_id` char(4) NOT NULL,
  `author_name` varchar(50) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `book_table`
--

CREATE TABLE `book_table` (
  `book_id` char(4) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `ISBN_no` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `publish_year` year(4) NOT NULL,
  `image` varchar(255) NOT NULL,
  `Auther_id` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `book_user_table`
--

CREATE TABLE `book_user_table` (
  `b_id` char(4) NOT NULL,
  `user_id` char(4) NOT NULL,
  `barrowed_date` date NOT NULL,
  `return_date` date NOT NULL,
  `action` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event_table`
--

CREATE TABLE `event_table` (
  `event_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `e_book_table`
--

CREATE TABLE `e_book_table` (
  `e_book_id` char(5) NOT NULL,
  `ISBN_no` int(11) NOT NULL,
  `e_book_name` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `publish_year` year(4) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `e_book_user_table`
--

CREATE TABLE `e_book_user_table` (
  `e_b_id` char(5) NOT NULL,
  `user_id` char(4) NOT NULL,
  `borrowed_date` int(11) NOT NULL,
  `return_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `magazine&articles_table`
--

CREATE TABLE `magazine&articles_table` (
  `id` char(5) NOT NULL,
  `title` int(100) NOT NULL,
  `writer` varchar(100) NOT NULL,
  `type` varchar(30) NOT NULL,
  `publish_date` date NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news_table`
--

CREATE TABLE `news_table` (
  `news_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `past_paper_table`
--

CREATE TABLE `past_paper_table` (
  `p_id` char(4) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `examination_typ` varchar(255) NOT NULL,
  `year` year(4) NOT NULL,
  `pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` char(4) NOT NULL,
  `NIC` int(11) NOT NULL,
  `User_profile` varchar(255) NOT NULL,
  `User_Nmae` varchar(100) NOT NULL,
  `User_Emaiil` varchar(100) NOT NULL,
  `User_Mobile` int(11) NOT NULL,
  `User_Address` varchar(255) NOT NULL,
  `User_Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `author_table`
--
ALTER TABLE `author_table`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `book_table`
--
ALTER TABLE `book_table`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `Auther_id` (`Auther_id`);

--
-- Indexes for table `book_user_table`
--
ALTER TABLE `book_user_table`
  ADD KEY `b_id` (`b_id`),
  ADD KEY `book_user_table_ibfk_1` (`user_id`);

--
-- Indexes for table `e_book_table`
--
ALTER TABLE `e_book_table`
  ADD PRIMARY KEY (`e_book_id`);

--
-- Indexes for table `e_book_user_table`
--
ALTER TABLE `e_book_user_table`
  ADD KEY `e_b_id` (`e_b_id`),
  ADD KEY `e_book_user_table_ibfk_1` (`user_id`);

--
-- Indexes for table `magazine&articles_table`
--
ALTER TABLE `magazine&articles_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `User_Emaiil` (`User_Emaiil`),
  ADD UNIQUE KEY `User_Nmae` (`User_Nmae`) USING BTREE,
  ADD UNIQUE KEY `NIC` (`NIC`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_table`
--
ALTER TABLE `book_table`
  ADD CONSTRAINT `book_table_ibfk_1` FOREIGN KEY (`Auther_id`) REFERENCES `author_table` (`a_id`);

--
-- Constraints for table `book_user_table`
--
ALTER TABLE `book_user_table`
  ADD CONSTRAINT `book_user_table_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_table` (`user_id`);

--
-- Constraints for table `e_book_user_table`
--
ALTER TABLE `e_book_user_table`
  ADD CONSTRAINT `e_book_user_table_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_table` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
