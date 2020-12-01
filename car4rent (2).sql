-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2020 at 10:00 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

-- This SQL is used for Locations Pages and User SignIn/SignUp

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car4rent`
--

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `locationID` int(3) NOT NULL,
  `locationName` varchar(100) NOT NULL,
  `locationStreet` varchar(100) NOT NULL,
  `locationCity` varchar(60) NOT NULL,
  `locationState` varchar(2) NOT NULL,
  `locationZip` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`locationID`, `locationName`, `locationStreet`, `locationCity`, `locationState`, `locationZip`) VALUES
(1, 'Houston Midtown', '2101 Travis', 'Houston', 'TX', '77002'),
(2, 'Downtown Houston JW Marriott Hotel', '820 Main St Ste 300', 'Houston', 'TX', '77002'),
(3, 'Houston Heights', '3709 Washington Ave', 'Houston', 'TX', '77007'),
(4, 'Houston GreenWay', '3777 SW Freeway', 'Houston', 'TX', '77027'),
(5, 'Houston Broadway & Gulf Fwy', '7745 Gulf Freeway', 'Houston', 'TX', '77017'),
(6, 'Downtown Austin', '816 Colorado St', 'Austin', 'TX', '78701'),
(7, 'Austin Manchaca & Stassney', '2016 W Stassney Ln', 'Austin', 'TX', '78745'),
(8, 'Austin Research Blvd', '8310 Research Blvd', 'Austin', 'TX', '78758'),
(9, 'Downtown Dallas Vans', '1920 Elm St', 'Dallas', 'TX', '75201'),
(10, 'Dallas-Ft. Worth International Airport', '2424 E 38th Street', 'Dallas', 'TX', '75261'),
(11, 'Dallas Oak Cliff', '3939 S Polk St #102', 'Dallas', 'TX', '75224'),
(13, 'Austin AMM Collision', '5316 Ed Bluestein Blvd', 'Austin', 'TX', '78723');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'kentleeme', '1z2x3c', '2020-11-30 12:15:26'),
(2, 'abc', '123', '2020-11-30 12:49:02'),
(4, 'kentleeme1', '12345', '2020-11-30 13:13:23'),
(5, 'abcd', '12345', '2020-11-30 13:32:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`locationID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `locationID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
