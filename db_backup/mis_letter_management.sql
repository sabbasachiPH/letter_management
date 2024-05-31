-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2024 at 05:14 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mis_letter_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `letters`
--

CREATE TABLE `letters` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sender` varchar(255) DEFAULT NULL,
  `receiver` varchar(255) DEFAULT NULL,
  `issue_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `submission_deadline` timestamp NOT NULL DEFAULT current_timestamp(),
  `task_status` int(11) NOT NULL DEFAULT 1,
  `assigned_officer` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `letters`
--

INSERT INTO `letters` (`id`, `title`, `sender`, `receiver`, `issue_date`, `submission_deadline`, `task_status`, `assigned_officer`) VALUES
(1, 'Total Forced Loan Outstanding edit', 'BB ISMD edit', 'MISD,JBPLC edit', '2024-05-13 18:00:00', '2024-06-05 18:00:00', 2, 'SABBASACHI SAHA edit'),
(2, 'toatal Reschedule Loan', 'BB ISMD', 'MISD,JBPLC ', '2024-04-30 18:00:00', '2024-05-31 18:00:00', 1, 'SABBASACHI SAHA'),
(3, 'Women Disaggregated Data', 'BB, WFID', 'MISD,JBPLC ', '2024-04-24 18:00:00', '2024-06-24 18:00:00', 4, 'S. M. ABU SALEH shawon'),
(4, 'APA', 'FID', 'MISD,JBPLC ', '2023-12-31 18:00:00', '2024-01-30 18:00:00', 1, 'IMROJ AHSAN'),
(5, 'APA', 'FID', 'MISD,JBPLC ', '2023-12-31 18:00:00', '2024-06-29 18:00:00', 3, 'IMROJ AHSAN');

-- --------------------------------------------------------

--
-- Table structure for table `task_status`
--

CREATE TABLE `task_status` (
  `id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `task_status`
--

INSERT INTO `task_status` (`id`, `title`) VALUES
(1, 'pending'),
(2, 'received by the assigned officer'),
(3, 'work in progress'),
(4, 'done');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `letters`
--
ALTER TABLE `letters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_status`
--
ALTER TABLE `task_status`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `letters`
--
ALTER TABLE `letters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
