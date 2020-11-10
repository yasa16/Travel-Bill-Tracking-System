-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2019 at 05:13 PM
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
-- Database: `shareex`
--

-- --------------------------------------------------------

--
-- Table structure for table `share`
--

CREATE TABLE `share` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `experiences` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `share`
--

INSERT INTO `share` (`id`, `name`, `experiences`) VALUES
(7, 'Emma watson', 'SL is the most amazing holiday destination beautiful wildlife, the most incredibly interesting historical and religious sites, wonderful food, good choice of accommodation to suit all budgets...'),
(8, 'Maggy Blake', 'The country is so rich of beautifull nature, very kind people and all over the country the nature is different. From beautifull shores till lovely mountains with the teaplantages. '),
(9, 'shenaya fonseka', 'dream wanderer really helped me to find  informations about destinations and hotels'),
(10, 'kylie Jenner', 'The most amazing holiday destination!â€'),
(11, 'jaani smith', 'The most amazing holiday destination!â€'),
(12, '', ''),
(13, 'vihan jayadeva', 'We all really enjoyed our visit to Sri Lanka and I would love to return to see more');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `share`
--
ALTER TABLE `share`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `share`
--
ALTER TABLE `share`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
