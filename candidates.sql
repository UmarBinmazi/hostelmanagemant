-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2023 at 08:15 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `ID` int(11) NOT NULL,
  `FULLNAME` varchar(50) NOT NULL,
  `WORK` varchar(100) NOT NULL,
  `DEPARTMENT` varchar(50) NOT NULL,
  `ADDRESS` varchar(500) NOT NULL,
  `DOB` varchar(50) NOT NULL,
  `ADMISSION DATE` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `FILE` varchar(35) NOT NULL,
  `ROOM NO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`ID`, `FULLNAME`, `WORK`, `DEPARTMENT`, `ADDRESS`, `DOB`, `ADMISSION DATE`, `EMAIL`, `PASSWORD`, `FILE`, `ROOM NO`) VALUES
(1, 'KRUSHNA ANKUSH SAHANE', 'Govt. Poly.  Ambad', 'COMPUTER', 'At sirasgaon Mandap TQ bhokardan Dist Jalna , Maharashtra, India', '2003-10-03', '2023-02-03', 'krushnasahane7@gmail.com', '12345', 'krish.jpg', 7),
(2, 'UMAR BINMAZI JUNAID', 'Govt. Poly.  Ambad', 'COMPUTER', 'At Ambad, jalna', '2003-10-03', '2023-02-03', 'umar@gmail.com', '1122', 'teddy.png', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
