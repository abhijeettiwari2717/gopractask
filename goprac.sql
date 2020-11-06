-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2020 at 04:18 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goprac`
--

-- --------------------------------------------------------

--
-- Table structure for table `goprac`
--

CREATE TABLE `goprac` (
  `id` int(11) NOT NULL,
  `code` varchar(6) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `goprac`
--

INSERT INTO `goprac` (`id`, `code`, `start_date`, `end_date`) VALUES
(508, 'oUXsRa', '2020-11-05', '4-11-2021'),
(511, 'yxcqSE', '2020-11-05', '4-11-2021'),
(525, 'QA5hs3', '2020-11-06', '5-11-2021'),
(526, 'w4r5xz', '2020-11-06', '5-11-2021');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `goprac`
--
ALTER TABLE `goprac`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `goprac`
--
ALTER TABLE `goprac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=528;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
