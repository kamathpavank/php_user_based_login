-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2018 at 03:58 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `userbased`
--

CREATE TABLE `userbased` (
  `no` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `access` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userbased`
--

INSERT INTO `userbased` (`no`, `username`, `password`, `access`) VALUES
(1, 'Admin', 'admin123', 123),
(2, 'Patil', 'patil123', 12),
(3, 'Jain', 'jain123', 1),
(4, 'Jha', 'jha123', 1),
(5, 'Burhan', 'burhan123', 12),
(6, 'Harshit', 'harshit123', 3),
(7, 'Adit', 'adit123', 13),
(8, 'Jeet', 'jeet123', 12),
(9, 'Ishani', 'parkar123', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userbased`
--
ALTER TABLE `userbased`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userbased`
--
ALTER TABLE `userbased`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
