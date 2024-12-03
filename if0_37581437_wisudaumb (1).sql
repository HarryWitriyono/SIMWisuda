-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql211.infinityfree.com
-- Generation Time: Dec 03, 2024 at 04:17 AM
-- Server version: 10.6.19-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_37581437_wisudaumb`
--

-- --------------------------------------------------------

--
-- Table structure for table `PeriodeWisuda`
--

CREATE TABLE `PeriodeWisuda` (
  `IdPeriodeWisuda` varchar(5) NOT NULL,
  `KuotaWisuda` int(4) NOT NULL,
  `WaktuWisuda` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `PeriodeWisuda`
--

INSERT INTO `PeriodeWisuda` (`IdPeriodeWisuda`, `KuotaWisuda`, `WaktuWisuda`) VALUES
('20241', 500, '0000-00-00 00:00:00'),
('20242', 500, '2025-03-26 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `Progam Studi`
--

CREATE TABLE `Progam Studi` (
  `KodeProdi` varchar(5) NOT NULL,
  `NamaProdi` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `Progam Studi`
--

INSERT INTO `Progam Studi` (`KodeProdi`, `NamaProdi`) VALUES
('55201', 'Teknik Informatika'),
('54201', 'Sistem Informasi');

-- --------------------------------------------------------

--
-- Table structure for table `wisudawan`
--

CREATE TABLE `wisudawan` (
  `NPM` varchar(10) NOT NULL,
  `NamaMahasiswa` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `KodeProdi` varchar(6) NOT NULL,
  `IdPeriodeWisuda` varchar(5) DEFAULT NULL,
  `TglLulusUjian` datetime DEFAULT NULL,
  `ipkakhir` double(3,2) DEFAULT NULL,
  `waktudaftar` datetime DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `PeriodeWisuda`
--
ALTER TABLE `PeriodeWisuda`
  ADD PRIMARY KEY (`IdPeriodeWisuda`);

--
-- Indexes for table `Progam Studi`
--
ALTER TABLE `Progam Studi`
  ADD PRIMARY KEY (`KodeProdi`);

--
-- Indexes for table `wisudawan`
--
ALTER TABLE `wisudawan`
  ADD PRIMARY KEY (`NPM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
