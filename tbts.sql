-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2019 at 08:37 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tbts`
--

-- --------------------------------------------------------

--
-- Table structure for table `profileimg`
--

CREATE TABLE `profileimg` (
  `id` int(11) NOT NULL,
  `userId` varchar(100) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profileimg`
--

INSERT INTO `profileimg` (`id`, `userId`, `status`) VALUES
(1, '0', 1),
(3, '123', 0),
(4, 'admin', 1),
(5, '12345', 1),
(6, 'yasa98', 0);

-- --------------------------------------------------------

--
-- Table structure for table `registered_user`
--

CREATE TABLE `registered_user` (
  `userId` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered_user`
--

INSERT INTO `registered_user` (`userId`, `fname`, `lname`, `userName`, `email`, `password`) VALUES
(1, 'Nishan', 'Niriella', 'Flynn Ryder', 'nishandilip12@gmail.com', '$2y$10$ykuIyRV6lacnWhaIeGgboOzlgRzh5aRuU9waEfHgD6bEnNOdx6Ul.'),
(6, 'John', 'Cena', 'Cena5', 'johncena5@rocketmail.com', '$2y$10$PXXSs4qsjgUJy17SHUdMM.MOqZZL3UFilraf/OZ98Fd7XsVQfqDDy'),
(7, 'Bob', 'Marley', 'marley12', 'marly@gmail.com', '$2y$10$8gz0j2S3GKRLS9HnADDD6.uNnWAXPqUyF/D5vSRcXtfTyo/uLH5kO'),
(9, '123', '12345', '123', '123@gmail.com', '$2y$10$bDb/adAkIWLOfN.F2YQqseJEgGeTL8O3LACAavSrYFqiE2dHtQFaK'),
(10, 'Nishan', 'Dilip', 'admin', 'nishandilip12@gmail.com', '$2y$10$0Rm05uWWbmW3mgjvWnTfw.p1cEx/0WRBdlD3puK9FHOjfN6UXenxq'),
(11, 'Nishan', 'Dilip', '12345', 'nishandilip12@gmail.com', '$2y$10$7yTgVL.Mx78xx5LcuXsmROvzkLpu.GvOAPUlqgox4VWhNgOsdV9NC'),
(12, 'yasa', 'nike', 'yasa98', 'yasa98@ymail.com', '$2y$10$/9YWYANJP83asAfm7DljLukYuvBpS0scfiZL1sN6v4WxO88Ue6SgS');

-- --------------------------------------------------------

--
-- Table structure for table `userpost`
--

CREATE TABLE `userpost` (
  `postId` int(11) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `userId` int(11) NOT NULL,
  `travellingCharges` float DEFAULT NULL,
  `accomodationCharges` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userpost`
--

INSERT INTO `userpost` (`postId`, `description`, `location`, `userId`, `travellingCharges`, `accomodationCharges`) VALUES
(3, 'Ta hike!!!', 'Ella', 9, 5000, 20000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profileimg`
--
ALTER TABLE `profileimg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registered_user`
--
ALTER TABLE `registered_user`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `userpost`
--
ALTER TABLE `userpost`
  ADD PRIMARY KEY (`postId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profileimg`
--
ALTER TABLE `profileimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `registered_user`
--
ALTER TABLE `registered_user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `userpost`
--
ALTER TABLE `userpost`
  MODIFY `postId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
