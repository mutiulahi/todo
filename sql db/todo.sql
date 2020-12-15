-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2020 at 03:25 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todo`
--

-- --------------------------------------------------------

--
-- Table structure for table `userlogins`
--

CREATE TABLE `userlogins` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userlogins`
--

INSERT INTO `userlogins` (`id`, `username`, `password`, `email`) VALUES
(1, 'tescode', 'tescode', 'tescode@gmail.com'),
(2, 'sodeeq', 'sodeeq', 'sodeeq@gmail.com'),
(4, 'admin', 'tescode', 'tes@tesinfo.com');

-- --------------------------------------------------------

--
-- Table structure for table `usertodos`
--

CREATE TABLE `usertodos` (
  `id` int(11) NOT NULL,
  `foregink` varchar(12) NOT NULL,
  `todolist` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertodos`
--

INSERT INTO `usertodos` (`id`, `foregink`, `todolist`) VALUES
(2, '1', 'fgfdgdfg'),
(8, '2', 'dffdfdf'),
(17, '2', 'gdgdfg'),
(18, '2', 'xcxzcxz'),
(19, '2', 'computer science'),
(20, '2', 'tesleem'),
(21, '2', 'kjjjt'),
(22, '1', 'Beat peter'),
(23, '1', 'fdgtrdgdsghgfgdfsdgdhfggdfs'),
(24, '1', 'gdgdfg'),
(25, '4', 'read your book'),
(27, '4', 'ddgdg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userlogins`
--
ALTER TABLE `userlogins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `usertodos`
--
ALTER TABLE `usertodos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userlogins`
--
ALTER TABLE `userlogins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `usertodos`
--
ALTER TABLE `usertodos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
