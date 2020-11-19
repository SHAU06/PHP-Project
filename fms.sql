-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2020 at 07:57 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `username`, `password`) VALUES
(1, 'Gaurav Borse', 'gborse108@gmail.com', 'root', '7b24afc8bc80e548d66c4e7ff72171c5'),
(2, 'shaurya Shete', 'shauryashete8@gmail.com', 'shau', 'aa3c44e0167f4fb68b14671f0cd32fcf'),
(3, 'Prajkta Deore', 'prajktadeore11gmail.com', 'praju', 'bc0d8dea38e46ca5e969325f9d1bf9a0'),
(4, 'Purnima Chandan', 'pratipurni@gmail.com', 'purnima', '427dcca7c7a65c556977ea067d303c63');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `folder_name` varchar(100) NOT NULL,
  `rollno` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `mobile`, `email`, `folder_name`, `rollno`) VALUES
(1, 'Gaurav', '21212', 'gborse108@gmail.com', 'Uploaded Files/cm2_176128.zip', '2'),
(2, 'shau', '12345678', 'pagarshruti52@gmail.com', 'Uploaded Files/smoothScroll-master.zip', '3'),
(3, 'Suraj Ahire', '8308544113', 'gborse3215@gmail.com', 'Uploaded Files/cm2_176128.zip', '3'),
(4, 'Himanshu', '12121212121', 'pagarshruti52@gmail.com', 'Uploaded Files/176106 (Gaurav).zip', '121212'),
(5, 'Prajkta Deore', '7212121212', 'pagarshruti52@gmail.com', 'Uploaded Files/176106 (Gaurav).zip', '176106'),
(6, 'Prajkta Deore', '7212121212', 'pagarshruti52@gmail.com', 'Uploaded Files/176106 (Gaurav).zip', '176106'),
(7, 'Karan', '12345678', 'gborse108@gmail.com', 'Uploaded Files/176106 (Gaurav).zip', '13'),
(8, 'Dhanu', '123456789', 'gborse108@gmail.com', 'Uploaded Files/cm2_176128.zip', '176132'),
(9, 'hacker', '1212121212', '05nashiktourism@gmail.com', 'Uploaded Files/cm2_176128.zip', '12'),
(11, 'Samer', '123645673', 'gborse108@gmail.com', 'Uploaded Files/smoothScroll-master.zip', '420'),
(12, 'Samer', '123645673', 'gborse108@gmail.com', 'Uploaded Files/smoothScroll-master.zip', '420'),
(13, 'Purnima Chandan', '6531261272', '05nashiktourism@gmail.com', 'Uploaded Files/India_divs.zip', '5412'),
(14, 'Gaurav', '1212', 'gborse3215@gmail.com', 'Uploaded Files/176106_(Gaurav).zip', '1212'),
(15, 'Gaurav', '1212', 'gborse3215@gmail.com', 'Uploaded Files/176106_(Gaurav).zip', '1212'),
(16, 'Ram Patil', '231128182', 'temp@gmail.com', 'Uploaded Files/msvcr120.zip', '176188');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
