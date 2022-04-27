-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 27, 2022 at 09:14 AM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cec-portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` int(11) NOT NULL,
  `std_id` int(11) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `std_id`, `grade`, `subject`, `semester`) VALUES
(1, 4, '1.1', 'IT64', 'FIRST SEMESTER'),
(2, 4, '2.0', 'IT32', 'FIRST SEMESTER'),
(3, 4, '3.0', 'IT21', 'FIRST SEMESTER'),
(4, 4, '3.0', 'IT21', 'FIRST SEMESTER'),
(5, 4, '3.1', 'IT64', 'FIRST SEMESTER'),
(6, 5, '2.5', 'IT21', 'FIRST SEMESTER'),
(7, 5, '2.0', 'IT64', 'FIRST SEMESTER'),
(8, 5, '2.1', 'IT10', 'FIRST SEMESTER'),
(9, 6, '1.0', 'IT21', 'FIRST SEMESTER'),
(10, 6, '2.0', 'IT10', 'FIRST SEMESTER'),
(11, 6, '3.1', 'IT64', 'FIRST SEMESTER');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `post` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `admin_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post`, `type`, `admin_id`) VALUES
(2, 'Post 1', 'ANNOUNCEMENT', '1'),
(3, 'Post 2', 'ANNOUNCEMENT', '1'),
(4, 'Post 3', 'ANNOUNCEMENT', '1'),
(5, 'Post 4', '', '1'),
(6, 'Post 5', 'ANNOUNCEMENT', '1');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `section` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `section`) VALUES
(2, 'BSIT 1 SECTION 2'),
(3, 'BSIT 1 SECTION 3'),
(4, 'BSIT 1 SECTION 4');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`) VALUES
(4, 'IT32'),
(5, 'IT21'),
(6, 'IT10'),
(7, 'IT64');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `role` varchar(1) NOT NULL DEFAULT 'S'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `section`, `year`, `role`) VALUES
(1, 'Kurt John ', 'Mojado', 'kjmojado21', 'user', '', '', 'S'),
(4, 'sample_user_1', 'sample', 'sample_user_1', 'sample_user_1', 'BSIT 1 SECTION 4', 'FIRST YEAR', 'S'),
(5, 'sample_user_2', 'sample_user_1', 'sample_user_2', 'sample_user_2', 'BSIT 1 SECTION 4', 'FIRST YEAR', 'S'),
(6, 'sample_user_3', 'sample_user_3', 'sample_user_3', 'sample_user_3', 'BSIT 1 SECTION 4', 'FIRST YEAR', 'S'),
(7, 'sample_user_4', 'sample_user_4', 'sample_user_4', 'sample_user_4', 'BSIT 1 SECTION 3', 'FIRST YEAR', 'S'),
(8, 'sample_user_5', 'sample_user_5', 'sample_user_5', 'sample_user_5', 'BSIT 1 SECTION 3', 'FIRST YEAR', 'S'),
(9, 'sample_user_6', 'sample_user_6', 'sample_user_6', 'sample_user_6', 'BSIT 1 SECTION 3', 'FIRST YEAR', 'S'),
(10, 'sample_user_7', 'sample_user_7', 'sample_user_7', 'sample_user_7', 'BSIT 1 SECTION 2', 'FIRST YEAR', 'S'),
(11, 'sample_user_8', 'sample_user_8', 'sample_user_8', 'sample_user_8', 'BSIT 1 SECTION 2', 'FIRST YEAR', 'S'),
(12, 'sample_user_9', 'sample_user_9', 'sample_user_9', 'sample_user_9', 'BSIT 1 SECTION 2', 'FIRST YEAR', 'S');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
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
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
