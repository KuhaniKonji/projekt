-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2024 at 08:11 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `redovalnica`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `geslo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `geslo`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `naloge`
--

CREATE TABLE `naloge` (
  `id_naloge` int(11) NOT NULL,
  `id_predmeta` int(11) NOT NULL,
  `ime_naloge` varchar(70) NOT NULL,
  `navodilo` text NOT NULL,
  `datum_razpisa` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `rok_za_oddajo` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_general_ci;

--
-- Dumping data for table `naloge`
--

INSERT INTO `naloge` (`id_naloge`, `id_predmeta`, `ime_naloge`, `navodilo`, `datum_razpisa`, `rok_za_oddajo`) VALUES
(2, 1, 'Druga naloga za SLO', 'Naloga', '2021-09-28 06:54:34', '2021-09-29'),
(3, 3, 'Prva naloga', 'asdf', '2021-10-05 08:23:06', '2021-10-29'),
(5, 3, 'slo3', 'aaa', '2021-10-05 08:45:54', '2021-10-27'),
(6, 1, 'asdasd', 'asdasd', '2024-09-17 06:53:47', '2024-09-18');

-- --------------------------------------------------------

--
-- Table structure for table `ocenjene_naloge`
--

CREATE TABLE `ocenjene_naloge` (
  `id_ocenjene_naloge` int(11) NOT NULL,
  `id_oddane_naloge` int(11) NOT NULL,
  `ocena` int(1) NOT NULL,
  `datum` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_general_ci;

--
-- Dumping data for table `ocenjene_naloge`
--

INSERT INTO `ocenjene_naloge` (`id_ocenjene_naloge`, `id_oddane_naloge`, `ocena`, `datum`) VALUES
(6, 8, 3, '2024-09-17 06:44:39'),
(7, 9, 3, '2024-09-17 06:45:10');

-- --------------------------------------------------------

--
-- Table structure for table `oddane_naloge`
--

CREATE TABLE `oddane_naloge` (
  `id_oddane_naloge` int(11) NOT NULL,
  `id_ucenca` int(11) NOT NULL,
  `id_naloge` int(11) NOT NULL,
  `naloga` varchar(100) NOT NULL,
  `datum_oddaje` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `pregledano` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_general_ci;

--
-- Dumping data for table `oddane_naloge`
--

INSERT INTO `oddane_naloge` (`id_oddane_naloge`, `id_ucenca`, `id_naloge`, `naloga`, `datum_oddaje`, `pregledano`) VALUES
(8, 1, 1, 'Naloge/license.txt', '2021-10-05 08:43:19', 1),
(9, 8, 2, 'Naloge/legal.htm', '2021-10-05 07:19:57', 0),
(10, 1, 4, 'Naloge/az.pak', '2021-10-05 08:28:04', 1),
(11, 10, 1, '../Naloge/wifi.txt', '2024-09-10 06:51:12', 0),
(12, 1, 3, '../Naloge/AŽProjektnaNPP.sql', '2024-10-01 06:39:42', 0);

-- --------------------------------------------------------

--
-- Table structure for table `predmeti`
--

CREATE TABLE `predmeti` (
  `id_predmeta` int(11) NOT NULL,
  `ime_predmeta` varchar(30) NOT NULL,
  `okrajsava` varchar(5) NOT NULL,
  `letnik` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_general_ci;

--
-- Dumping data for table `predmeti`
--

INSERT INTO `predmeti` (`id_predmeta`, `ime_predmeta`, `okrajsava`, `letnik`) VALUES
(1, 'Slovenscina', 'SLO', 1),
(2, 'Slovenscina', 'SLO', 2),
(3, 'Slovenscina', 'SLO', 3);

-- --------------------------------------------------------

--
-- Table structure for table `ucenci`
--

CREATE TABLE `ucenci` (
  `id_ucenca` int(11) NOT NULL,
  `ime` varchar(30) NOT NULL,
  `priimek` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `geslo` varchar(50) NOT NULL,
  `datum_registracije` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_general_ci;

--
-- Dumping data for table `ucenci`
--

INSERT INTO `ucenci` (`id_ucenca`, `ime`, `priimek`, `email`, `geslo`, `datum_registracije`) VALUES
(1, 'Teo', 'Bizjak', 'bizjak.teo@gmail.com', 'pass', '2021-09-28 06:20:34'),
(7, 'Aa', 'A', 'johnsmith@gmail.com', 'koko', '2021-09-28 18:57:16'),
(8, 'B', 'B', 'teobizjak1@hotmail.com', 'bbb', '2021-09-28 18:58:17'),
(9, 'Aa', 'Bb', 's@gmail.com', 'pass', '2021-10-05 05:32:38'),
(11, 'anze', 'znidar', 'anzeznidar@dijak', '123', '2024-10-22 06:10:59');

-- --------------------------------------------------------

--
-- Table structure for table `ucenec_predmet`
--

CREATE TABLE `ucenec_predmet` (
  `id_ucenec_predmet` int(11) NOT NULL,
  `id_ucenca` int(11) NOT NULL,
  `id_predmeta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_general_ci;

--
-- Dumping data for table `ucenec_predmet`
--

INSERT INTO `ucenec_predmet` (`id_ucenec_predmet`, `id_ucenca`, `id_predmeta`) VALUES
(14, 7, 1),
(18, 1, 1),
(19, 8, 1),
(20, 8, 3),
(21, 8, 2),
(22, 1, 2),
(26, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `ucitelji`
--

CREATE TABLE `ucitelji` (
  `id_ucitelja` int(11) NOT NULL,
  `ime_ucitelja` varchar(30) NOT NULL,
  `priimek_ucitelja` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `geslo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_general_ci;

--
-- Dumping data for table `ucitelji`
--

INSERT INTO `ucitelji` (`id_ucitelja`, `ime_ucitelja`, `priimek_ucitelja`, `email`, `geslo`) VALUES
(1, 'France', 'Preseren', 'fp@gmail.com', 'france');

-- --------------------------------------------------------

--
-- Table structure for table `ucitelj_predmet`
--

CREATE TABLE `ucitelj_predmet` (
  `id_ucitelj_predmet` int(11) NOT NULL,
  `id_predmeta` int(11) NOT NULL,
  `id_ucitelja` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_general_ci;

--
-- Dumping data for table `ucitelj_predmet`
--

INSERT INTO `ucitelj_predmet` (`id_ucitelj_predmet`, `id_predmeta`, `id_ucitelja`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 4, 1),
(6, 4, 1),
(7, 5, 1),
(8, 4, 1),
(9, 4, 1),
(10, 5, 1),
(11, 6, 1),
(12, 4, 1),
(13, 4, 1),
(14, 5, 1),
(15, 6, 1),
(16, 4, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `naloge`
--
ALTER TABLE `naloge`
  ADD PRIMARY KEY (`id_naloge`);

--
-- Indexes for table `ocenjene_naloge`
--
ALTER TABLE `ocenjene_naloge`
  ADD PRIMARY KEY (`id_ocenjene_naloge`);

--
-- Indexes for table `oddane_naloge`
--
ALTER TABLE `oddane_naloge`
  ADD PRIMARY KEY (`id_oddane_naloge`);

--
-- Indexes for table `predmeti`
--
ALTER TABLE `predmeti`
  ADD PRIMARY KEY (`id_predmeta`);

--
-- Indexes for table `ucenci`
--
ALTER TABLE `ucenci`
  ADD PRIMARY KEY (`id_ucenca`);

--
-- Indexes for table `ucenec_predmet`
--
ALTER TABLE `ucenec_predmet`
  ADD PRIMARY KEY (`id_ucenec_predmet`);

--
-- Indexes for table `ucitelji`
--
ALTER TABLE `ucitelji`
  ADD PRIMARY KEY (`id_ucitelja`);

--
-- Indexes for table `ucitelj_predmet`
--
ALTER TABLE `ucitelj_predmet`
  ADD PRIMARY KEY (`id_ucitelj_predmet`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `naloge`
--
ALTER TABLE `naloge`
  MODIFY `id_naloge` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ocenjene_naloge`
--
ALTER TABLE `ocenjene_naloge`
  MODIFY `id_ocenjene_naloge` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `oddane_naloge`
--
ALTER TABLE `oddane_naloge`
  MODIFY `id_oddane_naloge` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `predmeti`
--
ALTER TABLE `predmeti`
  MODIFY `id_predmeta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ucenci`
--
ALTER TABLE `ucenci`
  MODIFY `id_ucenca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ucenec_predmet`
--
ALTER TABLE `ucenec_predmet`
  MODIFY `id_ucenec_predmet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `ucitelji`
--
ALTER TABLE `ucitelji`
  MODIFY `id_ucitelja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ucitelj_predmet`
--
ALTER TABLE `ucitelj_predmet`
  MODIFY `id_ucitelj_predmet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
