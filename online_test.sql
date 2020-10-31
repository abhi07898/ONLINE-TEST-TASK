-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:1306
-- Generation Time: Oct 31, 2020 at 01:31 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(155) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'abhi', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `id` int(155) NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `exam_id` int(155) NOT NULL,
  `que_title` varchar(255) NOT NULL,
  `ans1` varchar(255) NOT NULL,
  `ans2` varchar(255) NOT NULL,
  `ans3` varchar(255) NOT NULL,
  `ans4` varchar(255) NOT NULL,
  `true_ans` int(155) NOT NULL,
  `your_ans` int(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `session_id`, `exam_id`, `que_title`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`, `your_ans`) VALUES
(181, '5f9beb7d6fbf7', 1, 'what is html', 'HTML', 'html', 'Html', 'hTml', 3, 4),
(182, '5f9beb7d6fbf7', 1, 'whats is CCC', 'Corse', 'degree', 'UG', 'PG', 1, 2),
(183, '5f9beb7d6fbf7', 1, 'what is html?', 'progrming language', 'scription language', 'markup language', 'none', 3, 3),
(184, '5f9beb7d6fbf7', 1, 'div is a ', 'division', 'divide', 'define', 'none', 1, 2),
(185, '5f9beb7d6fbf7', 1, 'img means in html', 'image', 'imagine', 'both', 'none', 1, 3),
(209, '5f9bee0508375', 1, 'div is a ', 'division', 'divide', 'define', 'none', 1, 1),
(214, '5f9bee0508375', 1, 'img means in html', 'image', 'imagine', 'both', 'none', 1, 2),
(216, '5f9bee0508375', 1, 'what is html', 'HTML', 'html', 'Html', 'hTml', 3, 2),
(217, '5f9bee0508375', 1, 'whats is CCC', 'Corse', 'degree', 'UG', 'PG', 1, 3),
(218, '5f9bee0508375', 1, 'what is html?', 'progrming language', 'scription language', 'markup language', 'none', 3, 2),
(239, '5f9bf26c5ad06', 1, 'what is html', 'HTML', 'html', 'Html', 'hTml', 3, 0),
(240, '5f9bf26c5ad06', 1, 'whats is CCC', 'Corse', 'degree', 'UG', 'PG', 1, 0),
(241, '5f9bf26c5ad06', 1, 'what is html?', 'progrming language', 'scription language', 'markup language', 'none', 3, 0),
(242, '5f9bf26c5ad06', 1, 'div is a ', 'division', 'divide', 'define', 'none', 1, 0),
(243, '5f9bf26c5ad06', 1, 'img means in html', 'image', 'imagine', 'both', 'none', 1, 0),
(255, '5f9bf41038dff', 1, 'what is html', 'HTML', 'html', 'Html', 'hTml', 3, 1),
(258, '5f9bf41038dff', 1, 'whats is CCC', 'Corse', 'degree', 'UG', 'PG', 1, 2),
(259, '5f9bf41038dff', 1, 'what is html?', 'progrming language', 'scription language', 'markup language', 'none', 3, 3),
(260, '5f9bf41038dff', 1, 'div is a ', 'division', 'divide', 'define', 'none', 1, 2),
(261, '5f9bf41038dff', 1, 'img means in html', 'image', 'imagine', 'both', 'none', 1, 2),
(262, '5f9bf7ac67701', 1, 'what is html', 'HTML', 'html', 'Html', 'hTml', 3, 2),
(264, '5f9bf7ac67701', 1, 'whats is CCC', 'Corse', 'degree', 'UG', 'PG', 1, 2),
(268, '5f9bf7ac67701', 1, 'what is html?', 'progrming language', 'scription language', 'markup language', 'none', 3, 0),
(269, '5f9bf7ac67701', 1, 'div is a ', 'division', 'divide', 'define', 'none', 1, 1),
(271, '5f9bf7ac67701', 1, 'img means in html', 'image', 'imagine', 'both', 'none', 1, 1),
(272, '5f9bffba2ea4d', 1, 'what is html', 'HTML', 'html', 'Html', 'hTml', 3, 0),
(273, '5f9bffba2ea4d', 1, 'whats is CCC', 'Corse', 'degree', 'UG', 'PG', 1, 0),
(274, '5f9bffba2ea4d', 1, 'what is html?', 'progrming language', 'scription language', 'markup language', 'none', 3, 0),
(275, '5f9bffba2ea4d', 1, 'div is a ', 'division', 'divide', 'define', 'none', 1, 0),
(282, '5f9bffba2ea4d', 1, 'img means in html', 'image', 'imagine', 'both', 'none', 1, 0),
(296, '5f9cbe50e4d5d', 1, 'what is html', 'HTML', 'html', 'Html', 'hTml', 3, 4),
(297, '5f9cbe50e4d5d', 1, 'whats is CCC', 'Corse', 'degree', 'UG', 'PG', 1, 4),
(298, '5f9cbe50e4d5d', 1, 'what is html?', 'progrming language', 'scription language', 'markup language', 'none', 3, 4),
(299, '5f9cbe50e4d5d', 1, 'div is a ', 'division', 'divide', 'define', 'none', 1, 1),
(300, '5f9cbe50e4d5d', 1, 'img means in html', 'image', 'imagine', 'both', 'none', 1, 1),
(301, '5f9ce18e5971c', 1, 'what is html', 'HTML', 'html', 'Html', 'hTml', 3, 1),
(302, '5f9ce18e5971c', 1, 'whats is CCC', 'Corse', 'degree', 'UG', 'PG', 1, 1),
(303, '5f9ce18e5971c', 1, 'what is html?', 'progrming language', 'scription language', 'markup language', 'none', 3, 3),
(304, '5f9ce18e5971c', 1, 'div is a ', 'division', 'divide', 'define', 'none', 1, 3),
(305, '5f9ce18e5971c', 1, 'img means in html', 'image', 'imagine', 'both', 'none', 1, 1),
(306, '5f9cee0d4568f', 1, 'img means in html', 'image', 'imagine', 'both', 'none', 1, 1),
(311, '5f9cee0d4568f', 1, 'what is html', 'HTML', 'html', 'Html', 'hTml', 3, 0),
(312, '5f9cee0d4568f', 1, 'whats is CCC', 'Corse', 'degree', 'UG', 'PG', 1, 0),
(313, '5f9cee0d4568f', 1, 'what is html?', 'progrming language', 'scription language', 'markup language', 'none', 3, 0),
(314, '5f9cee0d4568f', 1, 'div is a ', 'division', 'divide', 'define', 'none', 1, 0),
(315, '5f9d1529d5e5f', 1, 'img means in html', 'image', 'imagine', 'both', 'none', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `exam_id` int(155) NOT NULL,
  `title` varchar(255) NOT NULL,
  `total_question` int(155) NOT NULL,
  `right_marks` int(155) NOT NULL,
  `wrong_marks` int(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`exam_id`, `title`, `total_question`, `right_marks`, `wrong_marks`) VALUES
(1, 'html TEST 10', 5, 4, 1),
(2, 'BHU ENTRANCE 2010', 11, 6, 3),
(4, 'BBDU TEST FOR TGT', 100, 4, 1),
(6, 'BBDU TEST FOR TGT 2020', 100, 4, 1),
(18, 'BBD Scholar 101', 0, 0, 0),
(19, 'test abhishke entrance', 10, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question_id` int(155) NOT NULL,
  `exam_id` int(155) NOT NULL,
  `que_title` varchar(255) NOT NULL,
  `ans1` varchar(255) NOT NULL,
  `ans2` varchar(255) NOT NULL,
  `ans3` varchar(255) NOT NULL,
  `ans4` varchar(255) NOT NULL,
  `ans_option` int(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `exam_id`, `que_title`, `ans1`, `ans2`, `ans3`, `ans4`, `ans_option`) VALUES
(1, 1, 'what is html', 'HTML', 'html', 'Html', 'hTml', 3),
(4, 6, 'what is html', 'HTML', 'html', 'Html', 'hTml', 2),
(7, 1, 'whats is CCC', 'Corse', 'degree', 'UG', 'PG', 1),
(8, 1, 'what is html?', 'progrming language', 'scription language', 'markup language', 'none', 3),
(9, 1, 'div is a ', 'division', 'divide', 'define', 'none', 1),
(10, 1, 'img means in html', 'image', 'imagine', 'both', 'none', 1);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(155) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_ques` int(155) NOT NULL,
  `attempt` int(155) NOT NULL,
  `correct_ans` int(155) NOT NULL,
  `right_marks` int(155) NOT NULL,
  `wrong_marks` int(155) NOT NULL,
  `gain` int(155) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `name`, `total_ques`, `attempt`, `correct_ans`, `right_marks`, `wrong_marks`, `gain`, `status`) VALUES
(1, 'abhi', 5, 5, 3, 4, 1, 10, 'PASS');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UID` int(155) NOT NULL,
  `USERNAME` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `QUALIFICATION` varchar(255) NOT NULL,
  `E-MAIL` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UID`, `USERNAME`, `PASSWORD`, `QUALIFICATION`, `E-MAIL`) VALUES
(26, 'abhi', '1234', '1234', 'abhishekpandey@cedcoss.com'),
(29, 'prince', '12345', 'Graduation', 'abhii@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `exam_id` (`exam_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(155) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(155) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=316;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `exam_id` int(155) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `question_id` int(155) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(155) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UID` int(155) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`exam_id`) REFERENCES `exam` (`exam_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
