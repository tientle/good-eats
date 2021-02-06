-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 06, 2021 at 03:22 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goodeats`
--

-- --------------------------------------------------------

--
-- Table structure for table `goodeats`
--

CREATE TABLE `goodeats` (
  `id` int(11) NOT NULL,
  `name` varchar(140) NOT NULL,
  `category` varchar(140) NOT NULL,
  `favorite` varchar(140) NOT NULL,
  `location` varchar(140) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `goodeats`
--

INSERT INTO `goodeats` (`id`, `name`, `category`, `favorite`, `location`) VALUES
(2, 'Tatte Bakery & Cafe', 'Breakfast', 'Blueberry & Hazelnut Muffin', 'Boston, Massachusetts'),
(3, 'Nobu', 'Dinner', 'Creamy Spicy Crab', 'Los Angeles, California'),
(4, 'The Capital Grille', 'Dinner', 'Pan Seared Sea Bass with Miso Butter', 'Seattle, Washington'),
(5, 'Jollibee', 'Lunch', 'Amazing Aloha Yumburger', 'Jacksonville, Florida'),
(6, 'Roxy\'s Grilled Cheese & Burgers', 'Lunch', 'Hand Cut Truffle Fries', 'Allston, Massachusetts'),
(7, 'Momoyaki', 'Dinner', 'Bulgogi', 'Gainesville, Florida'),
(8, 'Laishley Crab House', 'Dinner', 'Lobster and Crab Mac & Cheese', 'Punta Gorda, Florida'),
(9, 'ROYALTEA', 'other', 'Royal Bubble Tea', 'Orlando, Florida'),
(10, 'Beque Holic', 'Dinner', 'Korean Fried Chicken', 'Gainesville, Florida'),
(11, 'Blue Heaven ', 'Lunch', 'Yellowtail Snapper Salad', 'Key West, Florida');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `goodeats`
--
ALTER TABLE `goodeats`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `goodeats`
--
ALTER TABLE `goodeats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
