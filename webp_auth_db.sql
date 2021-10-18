-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2021 at 04:04 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webp_auth_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `courseid` int(11) NOT NULL,
  `course_name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`courseid`, `course_name`) VALUES
(1, 'HTML'),
(2, 'CSS'),
(3, 'JAVASCRIPT'),
(4, 'AJAX'),
(5, 'PYTHON'),
(6, 'JAVA');

-- --------------------------------------------------------

--
-- Table structure for table `course_reg`
--

CREATE TABLE `course_reg` (
  `courseid` int(11) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_reg`
--

INSERT INTO `course_reg` (`courseid`, `userid`) VALUES
(4, 12);

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `courseid` int(11) NOT NULL,
  `link` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`courseid`, `link`) VALUES
(1, 'localhost/WebCoursera/courses/HTML.php'),
(2, 'localhost/WebCoursera/courses/CSS.php'),
(3, 'localhost/WebCoursera/courses/JAVASCRIPT.php'),
(4, 'localhost/WebCoursera/courses/AJAX.php'),
(5, 'localhost/WebCoursera/courses/PYTHON.php'),
(6, 'localhost/WebCoursera/courses/JAVA.php');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` text NOT NULL,
  `name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `email`, `password`, `name`) VALUES
(11, 'dheeraj', 'dheeraj@abc.com', '$2y$10$/a18cDdfSGOa7zfZDXVqKeKiA1yzyS1C3XA//0uhW1ypojYG3lbjS', 'Dheeraj'),
(12, 'root', 'root@abc.com', '$2y$10$UO6MQYWBP7AHr5GlGRj.y.OBtCJX0pKAVMDhj0zgcMjqbvtPWVY4K', 'Admin'),
(13, 'adarsh', 'adarsh@abc.com', '$2y$10$.HQLY/DtQk7ogXjYO9KO0OpOaYe1v2SeTtjGZmStidYqiqjqHeFni', 'Adarsh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`courseid`);

--
-- Indexes for table `course_reg`
--
ALTER TABLE `course_reg`
  ADD KEY `courseid` (`courseid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD KEY `courseid` (`courseid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `courseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course_reg`
--
ALTER TABLE `course_reg`
  ADD CONSTRAINT `course_reg_ibfk_1` FOREIGN KEY (`courseid`) REFERENCES `courses` (`courseid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `course_reg_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `search`
--
ALTER TABLE `search`
  ADD CONSTRAINT `search_ibfk_1` FOREIGN KEY (`courseid`) REFERENCES `courses` (`courseid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
