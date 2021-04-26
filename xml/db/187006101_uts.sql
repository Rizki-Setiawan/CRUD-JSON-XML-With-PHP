-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2021 at 04:51 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `187006101_uts`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_json`
--

CREATE TABLE `data_json` (
  `id` int(20) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `lokasi` varchar(30) DEFAULT NULL,
  `ketinggian` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_xml`
--

CREATE TABLE `data_xml` (
  `id` int(20) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `lokasi` varchar(30) DEFAULT NULL,
  `ketinggian` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_json`
--
ALTER TABLE `data_json`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_xml`
--
ALTER TABLE `data_xml`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
