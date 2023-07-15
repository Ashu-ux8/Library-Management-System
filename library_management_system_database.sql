-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 13, 2023 at 10:57 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library_managment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `pass`) VALUES
(2, 'admin@admin.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `bookname` varchar(25) NOT NULL,
  `bookdetail` varchar(110) NOT NULL,
  `bookaudor` varchar(25) NOT NULL,
  `bookpub` varchar(25) NOT NULL,
  `branch` varchar(110) NOT NULL,
  `bookprice` varchar(25) NOT NULL,
  `bookquantity` varchar(25) NOT NULL,
  `bookava` int(11) NOT NULL,
  `bookrent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `bookname`, `bookdetail`, `bookaudor`, `bookpub`, `branch`, `bookprice`, `bookquantity`, `bookava`, `bookrent`) VALUES
(1, 'Hamlet', '1st edition', 'William Shakespear', 'Suscipit', 'CO', '750', '20', 16, 0),
(2, 'The Alchemy of Air', 'Ancient Greek Poem', 'Thomas Hager', 'Dolorem ', 'electrical', '1200', '15', 15, 0),
(3, 'Elon Musk', 'Biography', 'Ashlee Vance', 'Quest Publication', 'ME', '2000', '20', 16, 4),
(4, 'Ikigai', 'Japanese Secret to a long and happy life', 'Hector Garcia', 'Japan Express', 'CO', '1700', '11', 0, 11),
(5, 'Brain Rules', 'Self-help', 'John Medina', 'SM publications', 'EE', '1300', '8', 7, 2),
(6, 'Power of Your subconsious', 'Novel', 'Joseph Murphy', 'Arihant Books', 'CO', '800', '5', 4, 1),
(7, 'Psychology of Money', 'Financial Independence', 'Organ Housel', 'Rupa Publications', 'CO', '1700', '12', 5, 7),
(8, 'Atomic Habits', 'Self-help', 'James Clear', 'Penguin Random House ', 'IT', '2000', '6', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `issue_book`
--

CREATE TABLE `issue_book` (
  `id` int(11) NOT NULL,
  `book_id` int(2) NOT NULL,
  `book_name` varchar(20) NOT NULL,
  `user_id` int(2) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `issue_date` date NOT NULL,
  `return_date` date DEFAULT NULL,
  `issue_days` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `issue_book`
--

INSERT INTO `issue_book` (`id`, `book_id`, `book_name`, `user_id`, `user_name`, `issue_date`, `return_date`, `issue_days`) VALUES
(2, 1, 'Eat that Frog', 6, 'Pruthvi Sadhankar', '2023-07-03', NULL, 7),
(3, 7, 'Psychology of Money', 6, 'Pruthvi Sadhankar', '2023-07-03', '2023-07-13', 3),
(4, 6, 'harry', 6, 'Pruthvi Sadhankar', '2023-07-05', NULL, 5),
(9, 8, 'Power of Your subcon', 6, 'Pruthvi Sadhankar', '2023-07-05', NULL, 1),
(17, 7, 'Psychology of Money', 3, 'Gabriel Daugherty', '2023-07-13', NULL, 7),
(18, 4, 'Ikigai', 5, 'Anna Merry', '2023-07-13', '2023-07-13', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `user_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_name`, `email`, `pass`, `user_type`) VALUES
(1, 'Manjeet Randhava', 'majeet34@gmail.com', 'man67%tH', 'Student'),
(2, 'Arya Mehera', 'aryamehera@gmail.com', 'aryaMeh56', 'Student'),
(3, 'Yuvraj', 'yuv@gmail.com', 'jyusg', 'Student'),
(4, 'Pruthvi Sadhankar', 'pruth@gmail.com', 'pruth45$', 'Student'),
(5, 'Anna Merry', 'ana.mer@gmail.com', 'aname@r12', 'Student'),
(10, 'Shlok Mehta', 'shlok@gmail.com', 'shlok78@w', 'Student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issue_book`
--
ALTER TABLE `issue_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `issue_book`
--
ALTER TABLE `issue_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
