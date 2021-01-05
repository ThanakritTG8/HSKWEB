-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2021 at 02:07 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chinyhot_hsk`
--

-- --------------------------------------------------------

--
-- Table structure for table `hsk1_pretest_ans`
--

CREATE TABLE `hsk1_pretest_ans` (
  `HSK1_Pretest_AnsID` int(2) NOT NULL,
  `ans_chi` varchar(100) CHARACTER SET utf8 NOT NULL,
  `ans_eng` varchar(100) CHARACTER SET utf8 NOT NULL,
  `mark` int(1) NOT NULL,
  `HSK1_Pretest_TopicID` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hsk1_pretest_ans`
--

INSERT INTO `hsk1_pretest_ans` (`HSK1_Pretest_AnsID`, `ans_chi`, `ans_eng`, `mark`, `HSK1_Pretest_TopicID`) VALUES
(1, 'nnnn', 'cat', 1, 1),
(2, 'bbb', 'catt', 0, 1),
(3, 'hhh', 'catt', 0, 1),
(4, 'fff', 'cattt', 0, 1),
(7, 'dogg', 'dogg', 0, 2),
(8, 'dog', 'dog', 1, 2),
(9, 'doggg', 'doggg', 0, 2),
(10, 'doggg', 'doggg', 0, 2),
(11, 'ion', 'lion', 1, 3),
(12, 'ion', 'lionn', 0, 3),
(13, 'iono', 'inon', 0, 3),
(14, 'oho', 'ogho', 0, 3),
(15, 'thiht', 'tiger', 1, 4),
(16, 'rrg', 'tidfdf', 0, 4),
(17, 'sdd', 'ggg', 0, 4),
(18, 'gg', 'ggg', 0, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hsk1_pretest_ans`
--
ALTER TABLE `hsk1_pretest_ans`
  ADD PRIMARY KEY (`HSK1_Pretest_AnsID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hsk1_pretest_ans`
--
ALTER TABLE `hsk1_pretest_ans`
  MODIFY `HSK1_Pretest_AnsID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
