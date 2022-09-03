-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 04, 2022 at 12:17 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_talaba`
--

CREATE TABLE `login_talaba` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_talaba`
--

INSERT INTO `login_talaba` (`id`, `name`, `email`, `password`) VALUES
(10, 'Salohiddin', 'salohiddin@gmail.com', 'salohiddin'),
(11, 'rustam', 'rustam@gmail.com', 'rustam'),
(12, 'rustam', 'rustam@gmail.com', 'rustam'),
(13, 'rustam', 'rustam@gmail.com', 'rustam');

-- --------------------------------------------------------

--
-- Table structure for table `login_ticher`
--

CREATE TABLE `login_ticher` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_ticher`
--

INSERT INTO `login_ticher` (`id`, `name`, `email`, `password`) VALUES
(4, 'Salohiddin', 'salohiddin@gmail.com', 'salohiddin'),
(5, 'Samandar', 'samandar@gmail.com', 'samandar'),
(6, 'Samandar', 'samandar@gmail.com', 'samandar'),
(7, 'Muhammad', 'odilovmuhammad@gmail.com', 'muhammad'),
(8, 'Samandar', 'samandar@gmail.com', 'samandar');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `savol` text NOT NULL,
  `t_javob` varchar(255) NOT NULL,
  `n_javob` varchar(255) NOT NULL,
  `n_javob2` varchar(255) NOT NULL,
  `n_javob3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `savol`, `t_javob`, `n_javob`, `n_javob2`, `n_javob3`) VALUES
(1, 'Uzbekiston Respublikasi mustaqilligi qachon tashkil topgan?', '1991-yil', '1992-yil', '1990-yil', '1993-yil'),
(2, 'Uzbekiston Respublikasi konstitutsiyasi qachon qabul qilingan?', '1992-yil', '1989-yil', '1991-yil', '1993-yil'),
(3, 'Uzbekiston Respublikasi davlat bayrogi qchon qbul qilingan?', '1991-yil 18-noyabr', '1992-yil 18-noyabr', '1991-yil 8-noyabr', '1993-yil 18-noyabr'),
(4, 'O\'zbek tili davlat tili deb qachon e\'lon qilingan?', '1989-yil 21-oktabr', '1990-yil 21-oktabr', '1989-yil 1-oktabr', '1991-yil 1-sentabr'),
(25, '2*2 = ....?', '4', '8', '2', '5'),
(27, 'Amir Temur qAchon tug&#039;ilgan?', '1336 - yil', '1335 - yil', '1405 - yil', '1404 - yil');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_talaba`
--
ALTER TABLE `login_talaba`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_ticher`
--
ALTER TABLE `login_ticher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_talaba`
--
ALTER TABLE `login_talaba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `login_ticher`
--
ALTER TABLE `login_ticher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
