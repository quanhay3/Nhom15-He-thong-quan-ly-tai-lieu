-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2021 at 03:48 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `files_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `name`, `size`) VALUES
(4, '2021_Web Programming Projects.pdf', 299057),
(5, 'Dethigiuaky_2021.pdf', 136277),
(7, 'Report_2021.docx', 794045),
(11, 'matmacodien.docx', 246202);

-- --------------------------------------------------------

--
-- Table structure for table `information_user`
--

CREATE TABLE `information_user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `information_user`
--

INSERT INTO `information_user` (`id`, `first_name`, `last_name`, `phone`, `email`, `location`, `profile_image`) VALUES
(16, 'Nguyen', 'Quang B', 329494535, 'quanganhnguyen2382001@gmail.com', 'JAPAN', '1636166029_Cây TT bài 2.png'),
(21, 'Nguyen', 'Quang B', 329494535, 'quanganhnguyen2382001@gmail.com', 'JAPAN', '1636166218_Cây TT bài 2.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `email`, `password`, `level`) VALUES
(45, 'quanhay3', 'quanhay23@gmail.com', 'quanhay3', 0),
(51, 'quan', 'quanhay3@gmail.com', '$2y$10$QouDLBWrYNUNL.m9wbQniO6zynQvJ6jm21MbwnojoPBslQ4i.qVqG', 0),
(52, 'lol', 'lol@gmail.com', '$2y$10$eZbOfu.8NjimkOkP6aPrm.VUpR77T73JKa03a6TjDXrbbzmoyoH3y', 0),
(54, 'pro', 'pro@gmail.com', '$2y$10$ewu.6kviEvjZVDlsFfQJNOnjyVA07ugult/YBlnQV9Er/8K15CivO', 0),
(56, 'abc', 'abc@gmail.com', '$2y$10$fd73vt2mU8tHYzY/Go02p.sieBY3/AwuhtLkqSTSnnQijS74a/qky', 0),
(57, 'quang', 'quang@gmail.com', '$2y$10$WcrIrBXl6ZMsvmRSplIQxOB0GVfIGCIkuqZFirLwlpLFXCvvVGzU.', 0),
(58, 'chien', 'chien@gmail.com', '$2y$10$YVzyspdb.Wn0eGQydYJDFOB0mJxky5Xs4XkaU2skhGjpwfT4z0RT6', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `information_user`
--
ALTER TABLE `information_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `information_user`
--
ALTER TABLE `information_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
