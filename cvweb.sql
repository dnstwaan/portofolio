-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 28, 2024 at 10:55 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cvweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `organizations_companies`
--

CREATE TABLE `organizations_companies` (
  `id` int NOT NULL,
  `organizations_companies` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `masuk` varchar(5) NOT NULL,
  `keluar` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `organizations_companies`
--

INSERT INTO `organizations_companies` (`id`, `organizations_companies`, `masuk`, `keluar`) VALUES
(3, 'Printmax Sukabumi as Administrator', '2021', '2022'),
(4, 'Aleogama Porto Guidance Counseling as Psychological Test Supervisor', '2022', 'till now');

-- --------------------------------------------------------

--
-- Table structure for table `school_study`
--

CREATE TABLE `school_study` (
  `id` int NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `masuk` varchar(5) NOT NULL,
  `keluar` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `school_study`
--

INSERT INTO `school_study` (`id`, `nama_sekolah`, `masuk`, `keluar`) VALUES
(1, 'Sukabumi Junior High School 1', '2017', '2019'),
(2, 'Sukabumi Senior High School 4', '2019', '2021'),
(3, 'Sukabumi Muhammadiyah University', '2021', 'till now'),
(4, 'RevoU Indonesia Academy', '2023', '2024');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `organizations_companies`
--
ALTER TABLE `organizations_companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_study`
--
ALTER TABLE `school_study`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `organizations_companies`
--
ALTER TABLE `organizations_companies`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `school_study`
--
ALTER TABLE `school_study`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
