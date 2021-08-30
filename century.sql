-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2021 at 10:48 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `century`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `slug`) VALUES
(1, 'Campus', 'campus'),
(2, 'Student', 'student'),
(3, 'News', 'news');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `day` int(11) DEFAULT NULL,
  `month` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `title`, `day`, `month`, `description`) VALUES
(1, 1, 'Virtual Discover Century Information Session', 30, 'AUG', 'Virtual - Zoom'),
(2, 1, 'Century College Theatre - Auditions for “The Curious Incident of the Dog in the Nighttime”', 31, 'AUG', 'West Campus Theatre'),
(3, 1, 'Century College Theatre - Auditions for “The Curious Incident of the Dog in the Nighttime”', 1, 'SEP', 'West Campus Theatre'),
(4, 1, 'Liberal & Fine Arts: Discover Century Session & Campus Tour', 7, 'SEP', 'West Campus, W2290'),
(5, 1, 'Technical Programs: Discover Century Session & Campus Tour', 21, 'SEP', 'East Campus, TBD'),
(6, 1, 'Virtual Discover Century Information Session', 13, 'SEP', 'Virtual - Zoom'),
(7, 2, 'FREE Ice Cream', 30, 'AUG', 'West Campus Main Commons & East Campus Kopp Center Entrance'),
(8, 2, 'Century College Theatre - Auditions for “The Curious Incident of the Dog in the Nighttime”', 31, 'AUG', 'West Campus Theatre'),
(9, 2, 'Resume Writing 101', 31, 'AUG', 'Virtual'),
(10, 2, 'PAC Carnival', 1, 'SEP', 'West Backyard (Nest rain site)'),
(11, 2, 'Century College Theatre - Auditions for “The Curious Incident of the Dog in the Nighttime”', 1, 'SEP', 'West Campus Theatre'),
(12, 2, 'FREE Breakfast', 7, 'SEP', 'West Campus Main Commons Courtyard (Main Commons rain site)'),
(19, 3, 'Meet Century College Alum Ariel Pouchak', 22, 'AUG', 'After taking a year of classes through Century College\"s Post-Secondary Enrollment Options (PSEO) program while in high school, Ariel Pouchak made a very strategic choice for her future.'),
(20, 3, 'Meet Century College Student Madeline Dahlstrom', 19, 'JUL', 'When Century College student Madeline Dahlstrom found out that she had been named an Outstanding Student for 2021 in English, she was ecstatic.  \"I did a happy dance,\" she says. \"I found my voice at Century.  I was given an opportunity to write my truth, and I had no idea I was so good at it.\"'),
(21, 3, 'Meet Century College Alum Mitchell Heim', 15, 'JUL', 'Century College Alum Mitch Heim loves creating and designing things on a computer, and seeing his designs come to life.  In high school, he was fascinated with robotics, and he dedicated long hours after class and on weekends to working on his creative projects. He planned to go into mechanical engineering, until he was steered toward aerospace engineering.'),
(22, 3, 'Meet Century College Student Alexis Cortes Ruiz', 8, 'JUL', 'Alexis Cortes Ruiz has found a second home at Century College.  \"Coming here was one of best decisions of my life.  I love Minnesota and Century College.'),
(23, 3, 'Meet Century College Alum Josh Englert ', 25, 'JUN', 'Josh Englert was in the beginning of his college career, taking his general educational requirements at a local community college, when his video business began to take off.  He had always been interested in creating videos, and had taught himself how to create music and sports videos, from an early age.  He studied how the videos were done and eventually found his own distinctive style. '),
(24, 3, 'Meet Century College Alum Jordan Anderson', 8, 'JUN', 'After working as an IT professional, Jordan Anderson knew that he wanted to take his career in a different direction.  He wanted to pursue a career in film and videography.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`) VALUES
(4, 'Phạm Thu Hà', 'phamha', '21232f297a57a5a743894a0e4a801fc3'),
(5, 'Nguyễn Văn A', 'nguyena', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
