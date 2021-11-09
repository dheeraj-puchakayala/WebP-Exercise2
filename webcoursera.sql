-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2021 at 11:55 AM
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
-- Database: `webcoursera`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `courseid` int(11) NOT NULL,
  `course_name` varchar(128) NOT NULL,
  `course_img` varchar(256) NOT NULL,
  `total_videos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`courseid`, `course_name`, `course_img`, `total_videos`) VALUES
(1, 'HTML', '../images/HTML.png', 9),
(2, 'CSS', '../images/css.png', 9),
(3, 'JAVASCRIPT', '../images/javascript.png', 9),
(4, 'AJAX', '../images/ajax.png', 9),
(5, 'PYTHON', '../images/python.png', 9),
(6, 'JAVA', '../images/java.png', 9);

-- --------------------------------------------------------

--
-- Table structure for table `course_ref`
--

CREATE TABLE `course_ref` (
  `courseid` int(11) NOT NULL,
  `ref_name` varchar(128) NOT NULL,
  `author` varchar(128) NOT NULL,
  `edition` varchar(128) NOT NULL,
  `publication` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_ref`
--

INSERT INTO `course_ref` (`courseid`, `ref_name`, `author`, `edition`, `publication`) VALUES
(1, 'HTML: Design and Build Websites', 'Jon Duckett', '2nd edition', 'Pearson'),
(1, 'Learning Web Design: A Beginner\'s Guide to HTML, CSS, JavaScript, and Web Graphics', 'Jennifer Robins', '2nd edition', 'Pearson'),
(2, 'CSS: Design and Build Websites', 'Jon Duckett', '2nd edition', 'Pearson'),
(2, 'Learning Web Design: A Beginner\'s Guide to HTML, CSS, JavaScript, and Web Graphics', 'Jennifer Robins', '2nd edition', 'Pearson'),
(3, 'JavaScript: Design and Build Websites', 'Jon Duckett', '2nd edition', 'Pearson'),
(3, 'Learning Web Design: A Beginner\'s Guide to HTML, CSS, JavaScript, and Web Graphics', 'Jennifer Robins', '2nd edition', 'Pearson'),
(6, 'JAVA: Design and Build Websites', 'Jon Duckett', '2nd edition', 'Pearson'),
(6, 'Learning Web Design: A Beginner\'s Guide to HTML, CSS, JavaScript, and Web Graphics', 'Jennifer Robins', '2nd edition', 'Pearson'),
(4, 'AJAX: Design and Build Websites', 'Jon Duckett', '2nd edition', 'Pearson'),
(4, 'Learning Web Design: A Beginner\'s Guide to HTML, CSS, JavaScript, and Web Graphics', 'Jennifer Robins', '2nd edition', 'Pearson'),
(5, 'Python for Data Analysis: Data Wrangling with Pandas, NumPy, and IPython', 'Wes McKinney', '2nd edition', 'O\'Reilly'),
(5, 'Programming Python: Python for Everybody using Python 3', 'Mark Lutz', '3rd edition', 'O\'Reilly');

-- --------------------------------------------------------

--
-- Table structure for table `course_reg`
--

CREATE TABLE `course_reg` (
  `courseid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `compl_status` int(11) NOT NULL,
  `viewed_videos` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_reg`
--

INSERT INTO `course_reg` (`courseid`, `userid`, `compl_status`, `viewed_videos`) VALUES
(5, 11, 0, '37,38,39,40,41,42,44,45,43'),
(5, 13, 0, ''),
(5, 14, 0, ''),
(1, 11, 0, '');

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
(1, 'localhost/WebCoursera/courses/course_page.php?courseid=1'),
(2, 'localhost/WebCoursera/courses/course_page.php?courseid=2'),
(3, 'localhost/WebCoursera/courses/course_page.php?courseid=3'),
(4, 'localhost/WebCoursera/courses/course_page.php?courseid=4'),
(5, 'localhost/WebCoursera/courses/course_page.php?courseid=5'),
(6, 'localhost/WebCoursera/courses/course_page.php?courseid=6');

-- --------------------------------------------------------

--
-- Table structure for table `search1`
--

CREATE TABLE `search1` (
  `name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `search1`
--

INSERT INTO `search1` (`name`) VALUES
('about'),
('terms'),
('help'),
('contact'),
('policy'),
('HTML'),
('CSS'),
('PYTHON'),
('AJAX'),
('JAVA'),
('JAVASCRIPT');

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
(12, 'root', 'root@abc.com', '$2y$10$/SWdO/aezW0NdtXmQHa21e5JctXq8o4Z5XOOliVi4NlrnxLBbODnq', 'Admin'),
(13, 'adarsh', 'adarsh@abc.com', '$2y$10$.HQLY/DtQk7ogXjYO9KO0OpOaYe1v2SeTtjGZmStidYqiqjqHeFni', 'Adarsh'),
(14, 'aarthi', 'aarthi@abc.com', '$2y$10$ZHxB9Qo1PVM16xeHvObX5.omcUqf04A4N2SNnaaGPyeVYLWHjdo7i', 'Aarthi');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `courseid` int(11) NOT NULL,
  `video_id` int(11) NOT NULL,
  `video_type` int(11) NOT NULL,
  `video_name` varchar(128) NOT NULL,
  `video_link` varchar(256) NOT NULL,
  `video_duration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`courseid`, `video_id`, `video_type`, `video_name`, `video_link`, `video_duration`) VALUES
(1, 1, 1, 'HTML: Lecture 1', 'https://www.youtube.com/embed/salY_Sm6mv4', 5),
(1, 2, 1, 'HTML: Lecture 2', 'https://www.youtube.com/embed/salY_Sm6mv4', 6),
(1, 3, 1, 'HTML: Lecture 3', 'https://www.youtube.com/embed/salY_Sm6mv4', 8),
(1, 4, 2, 'HTML: Lecture 1', 'https://www.youtube.com/embed/salY_Sm6mv4', 16),
(1, 5, 2, 'HTML: Lecture 2', 'https://www.youtube.com/embed/salY_Sm6mv4', 20),
(1, 6, 2, 'HTML: Lecture 3', 'https://www.youtube.com/embed/salY_Sm6mv4', 18),
(1, 7, 3, 'HTML: Lecture 1', 'https://www.youtube.com/embed/salY_Sm6mv4', 38),
(1, 8, 3, 'HTML: Lecture 2', 'https://www.youtube.com/embed/salY_Sm6mv4', 50),
(1, 9, 3, 'HTML: Lecture 3', 'https://www.youtube.com/embed/salY_Sm6mv4', 45),
(2, 10, 1, 'CSS: Lecture 1', 'https://www.youtube.com/embed/salY_Sm6mv4', 9),
(2, 11, 1, 'CSS: Lecture 2', 'https://www.youtube.com/embed/salY_Sm6mv4', 5),
(2, 12, 1, 'CSS: Lecture 3', 'https://www.youtube.com/embed/salY_Sm6mv4', 6),
(2, 13, 2, 'CSS: Lecture 1', 'https://www.youtube.com/embed/salY_Sm6mv4', 19),
(2, 14, 2, 'CSS: Lecture 2', 'https://www.youtube.com/embed/salY_Sm6mv4', 12),
(2, 15, 2, 'CSS: Lecture 3', 'https://www.youtube.com/embed/salY_Sm6mv4', 14),
(2, 16, 3, 'CSS: Lecture 1', 'https://www.youtube.com/embed/salY_Sm6mv4', 35),
(2, 17, 3, 'CSS: Lecture 2', 'https://www.youtube.com/embed/salY_Sm6mv4', 40),
(2, 18, 3, 'CSS: Lecture 3', 'https://www.youtube.com/embed/salY_Sm6mv4', 38),
(3, 19, 1, 'JavaScript: Lecture 1', 'https://www.youtube.com/embed/e-5obm1G_FY', 3),
(3, 20, 1, 'JavaScript: Lecture 2', 'https://www.youtube.com/embed/e-5obm1G_FY', 7),
(3, 21, 1, 'JavaScript: Lecture 3', 'https://www.youtube.com/embed/e-5obm1G_FY', 9),
(3, 22, 2, 'JavaScript: Lecture 1', 'https://www.youtube.com/embed/e-5obm1G_FY', 12),
(3, 23, 2, 'JavaScript: Lecture 2', 'https://www.youtube.com/embed/e-5obm1G_FY', 15),
(3, 24, 2, 'JavaScript: Lecture 3', 'https://www.youtube.com/embed/e-5obm1G_FY', 20),
(3, 25, 3, 'JavaScript: Lecture 1', 'https://www.youtube.com/embed/e-5obm1G_FY', 23),
(3, 26, 3, 'JavaScript: Lecture 2', 'https://www.youtube.com/embed/e-5obm1G_FY', 25),
(3, 27, 3, 'JavaScript: Lecture 3', 'https://www.youtube.com/embed/e-5obm1G_FY', 30),
(4, 28, 1, 'AJAX: Lecture 1', 'https://www.youtube.com/embed/salY_Sm6mv4', 5),
(4, 29, 1, 'AJAX: Lecture 2', 'https://www.youtube.com/embed/salY_Sm6mv4', 6),
(4, 30, 1, 'AJAX: Lecture 3', 'https://www.youtube.com/embed/salY_Sm6mv4', 9),
(4, 31, 2, 'AJAX: Lecture 1', 'https://www.youtube.com/embed/salY_Sm6mv4', 18),
(4, 32, 2, 'AJAX: Lecture 2', 'https://www.youtube.com/embed/salY_Sm6mv4', 15),
(4, 33, 2, 'AJAX: Lecture 3', 'https://www.youtube.com/embed/salY_Sm6mv4', 16),
(4, 34, 3, 'AJAX: Lecture 1', 'https://www.youtube.com/embed/salY_Sm6mv4', 25),
(4, 35, 3, 'AJAX: Lecture 2', 'https://www.youtube.com/embed/salY_Sm6mv4', 29),
(4, 36, 3, 'AJAX: Lecture 3', 'https://www.youtube.com/embed/salY_Sm6mv4', 49),
(5, 37, 1, 'Python: Lecture 1', 'https://www.youtube.com/embed/avO8alp-JG8', 7),
(5, 38, 1, 'Python: Lecture 2', 'https://www.youtube.com/embed/avO8alp-JG8', 8),
(5, 39, 1, 'Python: Lecture 3', 'https://www.youtube.com/embed/avO8alp-JG8', 9),
(5, 40, 2, 'Python: Lecture 1', 'https://www.youtube.com/embed/avO8alp-JG8', 12),
(5, 41, 2, 'Python: Lecture 2', 'https://www.youtube.com/embed/avO8alp-JG8', 16),
(5, 42, 2, 'Python: Lecture 3', 'https://www.youtube.com/embed/avO8alp-JG8', 19),
(5, 43, 3, 'Python: Lecture 1', 'https://www.youtube.com/embed/avO8alp-JG8', 22),
(5, 44, 3, 'Python: Lecture 2', 'https://www.youtube.com/embed/avO8alp-JG8', 27),
(5, 45, 3, 'Python: Lecture 3', 'https://www.youtube.com/embed/avO8alp-JG8', 30),
(6, 46, 1, 'JAVA: Lecture 1', 'https://www.youtube.com/embed/ntLJmHOJ0ME?list=PLu0W_9lII9agS67Uits0UnJyrYiXhDS6q', 9),
(6, 47, 1, 'JAVA: Lecture 2', 'https://www.youtube.com/embed/ntLJmHOJ0ME?list=PLu0W_9lII9agS67Uits0UnJyrYiXhDS6q', 7),
(6, 48, 1, 'JAVA: Lecture 3', 'https://www.youtube.com/embed/ntLJmHOJ0ME?list=PLu0W_9lII9agS67Uits0UnJyrYiXhDS6q', 6),
(6, 49, 2, 'JAVA: Lecture 1', 'https://www.youtube.com/embed/ntLJmHOJ0ME?list=PLu0W_9lII9agS67Uits0UnJyrYiXhDS6q', 15),
(6, 50, 2, 'JAVA: Lecture 2', 'https://www.youtube.com/embed/ntLJmHOJ0ME?list=PLu0W_9lII9agS67Uits0UnJyrYiXhDS6q', 16),
(6, 51, 2, 'JAVA: Lecture 3', 'https://www.youtube.com/embed/ntLJmHOJ0ME?list=PLu0W_9lII9agS67Uits0UnJyrYiXhDS6q', 19),
(6, 52, 3, 'JAVA: Lecture 1', 'https://www.youtube.com/embed/ntLJmHOJ0ME?list=PLu0W_9lII9agS67Uits0UnJyrYiXhDS6q', 29),
(6, 53, 3, 'JAVA: Lecture 2', 'https://www.youtube.com/embed/ntLJmHOJ0ME?list=PLu0W_9lII9agS67Uits0UnJyrYiXhDS6q', 36),
(6, 54, 3, 'JAVA: Lecture 3', 'https://www.youtube.com/embed/ntLJmHOJ0ME?list=PLu0W_9lII9agS67Uits0UnJyrYiXhDS6q', 42);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`courseid`);

--
-- Indexes for table `course_ref`
--
ALTER TABLE `course_ref`
  ADD KEY `courseid` (`courseid`);

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
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`video_id`),
  ADD KEY `courseid` (`courseid`);

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
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course_ref`
--
ALTER TABLE `course_ref`
  ADD CONSTRAINT `course_ref_ibfk_1` FOREIGN KEY (`courseid`) REFERENCES `courses` (`courseid`) ON DELETE CASCADE ON UPDATE CASCADE;

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

--
-- Constraints for table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_ibfk_1` FOREIGN KEY (`courseid`) REFERENCES `courses` (`courseid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
