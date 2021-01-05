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
-- Table structure for table `hsk1_pretest_topic`
--

CREATE TABLE `hsk1_pretest_topic` (
  `HSK1_Pretest_TopicID` int(2) NOT NULL,
  `Topic` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Type` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hsk1_pretest_topic`
--

INSERT INTO `hsk1_pretest_topic` (`HSK1_Pretest_TopicID`, `Topic`, `Type`) VALUES
(1, 'cat แปลว่า ? ', 'read'),
(2, 'dog แปลว่า ?', 'read'),
(3, 'สิงโต แปลว่า ? ', 'read'),
(4, 'เสือ แปลว่า ?', 'read');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hsk1_pretest_topic`
--
ALTER TABLE `hsk1_pretest_topic`
  ADD PRIMARY KEY (`HSK1_Pretest_TopicID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hsk1_pretest_topic`
--
ALTER TABLE `hsk1_pretest_topic`
  MODIFY `HSK1_Pretest_TopicID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
