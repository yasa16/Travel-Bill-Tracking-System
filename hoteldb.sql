-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2019 at 05:11 PM
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
-- Database: `hoteldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `Location` char(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Number` int(10) NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `description` text NOT NULL,
  `name2` varchar(50) NOT NULL,
  `number2` int(10) NOT NULL,
  `email2` char(100) NOT NULL,
  `address2` text NOT NULL,
  `description2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `Location`, `Name`, `Number`, `email`, `address`, `description`, `name2`, `number2`, `email2`, `address2`, `description2`) VALUES
(1, 'Anuradhapura', 'Heritage Hotel', 772288093, 'heritagehotel@gmail.com', 'no 25,galwala Rd,pothanegama,Anuradhapura.', 'price per night as kow as LKR 5000.00,\r\nA/C non A/C rooms, Resturants', 'City Resort Anuradhapura', 252223529, 'cityhotel@gmail.com', '242,national housing,new town,Anuradhapura', 'price per night as lower as LKR 12000.00,\r\nA/C non A/C Rooms, Resturants,swimming pool\r\n'),
(2, 'Ella', 'Paradise Inn', 725606765, 'paradiseinn@gmail.com', 'no 34,warterfall Rd,Ella', 'price per night as lower as LKR 6500.00\r\n(2 Adults)\r\nReataurants, A/C non A/C Rooms, free wifi\r\n3-star', 'Ella Okreech Hotel', 777794007, 'okreechhotel@gmail.com', 'no 56,bandarawela Rd,Ella', 'price per night as lower as LKR 10000.00\r\n(2 Adults),4-star,reastarant,free wifi,nice view'),
(3, 'Nuwara Eliya', 'Cold Inn', 777223589, 'coldinn@gmail.com', 'no 45,Badulla Rd,Nuwara Eliya', 'price per night as lower as LKR 3500.00\r\n( 2 Adults) Very close to the town\r\n', 'Galaxy Grand Hotel', 522223628, 'galaxygrand@gmail.com', 'Peradeniya-Badulla-Chenkaladi hwy,Nuwara Eliya', 'price per night as lower as LKR 8000.00\r\nResturants,free wifi'),
(4, 'Galle', 'Amaya Rest', 713890246, 'amatarest@gmail.com', 'no 523C,Colombo-Galle main Rd,Galle.', 'price per night as lower as LKR 4500.00\r\nswimming pool,restarants,free wifi,A/C Rooms', 'jetwing Lighthouse', 112345720, 'lighthouse@gmail.com', 'no 70,dadella,Galle', 'price per night as lower as LKR 25000.00\r\n(2 adults), 5-star,swimmping pool,bar,A/C Rooms, Resturatnts,free wifi'),
(5, 'Sigiriya', 'Rock View Hotel', 710567889, 'rockview@gmail.com', 'No 30,temple road,sigiriya', 'price per night as lower as LKR 4500.00\r\n(2 adults), Restaurant, Non A/C rooms', 'Hotel Kashyapa', 771361616, 'kashyapaking@gmail.com', 'no 176,panelehena,thalkote,sigiriya', 'price per night as lower as LKR 6000.00\r\nRestaurants , A/C non A/c Rooms,free wifi'),
(6, 'Kandy', 'Queen Hotel', 756890876, 'queenhotel@gmail.com', 'no 10,Ds Senanayka veediya,Kandy.', 'price per night as lower as LKR 6000.00\r\nRestarants, A/C non A/c Rooms,Free wifi', 'Earl\'s Regent Hotel', 812221144, 'earlsr@gmail.com', '40/1 Deveni Rajasinghe Mawatha,Kandy', 'price per night as lower as LKR 30000.00\r\n(2 Adults) A/C non A/C Rooms,swimming Pool,\r\nRestaurants,free wifi'),
(7, 'Hikkaduwa', 'Hotel Coral Reef', 71361190, 'coralreef@gmail.com', 'no 298, Galle Rd,Hikkaduwa', 'price per night as lower as LKR 3500.00\r\nA/C non A/C Rooms,No Restaurants, nice beach view', 'Citrus Hikkaduwa', 915560005, 'citrushikka@gmail.com', '400,Galle Rd,Hikkaduwa', 'price per night as lower as LKR 35000.00\r\n5-star, A/C non A/c Rooms,Bar,Reataurants,Free wifi'),
(8, 'Polonnaruwa', ' Hotel Sudu Araliya', 772690359, 'suduaraliya@gmail.com', 'no 3,bund road,Pollonnaruwa', 'price per night as lower as LKR 20000.00\r\n A/C non A/C Rooms,Swimming pool,\r\nBar,Restaurants,Free wifi', 'Ruins View Hotel', 770839059, 'ruinsview@gmail.com', 'no 30,mahaoya,polonnaruwa', 'price per night as lower as LKR 5500.00\r\n(2 adults), Resturant, A/C non A/c Rooms'),
(9, 'Arugam Bay', 'Beach View Hotel', 722333507, 'beachview@gmail.com', 'no 30, colombo Rd, Arugam Bay.', 'price per night as lower as LKR 3500.00\r\n(2 Adults)\r\nNon A/C rooms, Beach view', 'Bay Vista, Arugam Bay', 632248577, 'bayvista@gmail.com', 'no 227,main street,Arugam Bay', 'price per night as lower as LKR 5750.00\r\nA/C non A/C rooms,Resetaurants,Beach view'),
(10, 'Yala', 'Wild Inn', 779142664, 'wildinn@gmail.com', 'no 22, palatupana,kirinda,yala', ' price per night as low as LKR 4000.00\r\n( 2 Adults)\r\n3-Star, Buffet,Free wifi', 'Cinnamon Wild Yala', 472239449, 'cinnamonwildyala@gmail.com', 'no 3,kirinda-palatupana-Yala RD,Palatupana', 'P.P.N as lowest LKR.16,000.00\r\nswimming pool,free wifi,bar,A/C rooms,Buffet,Safari packages available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
