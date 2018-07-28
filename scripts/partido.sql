-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Jul-2018 às 18:01
-- Versão do servidor: 10.1.22-MariaDB
-- PHP Version: 7.0.18

CREATE DATABASE IF NOT EXISTS TIE;

USE TIE;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tie`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `partido`
--

CREATE TABLE `partido` (
  `Id` int(11) NOT NULL,
  `Nome` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `partido`
--

INSERT INTO `partido` (`Id`, `Nome`) VALUES
(1, 'PR'),
(2, 'PSB'),
(3, 'PMDB'),
(4, 'PP'),
(5, 'PROS'),
(6, 'PSL'),
(7, 'PTB'),
(8, 'PRP'),
(9, 'PT'),
(10, 'PC do B'),
(11, 'PEN'),
(12, 'PPS'),
(13, 'PRTB'),
(14, 'PSD'),
(15, 'PSDC'),
(16, 'PSOL'),
(17, 'PTN'),
(18, 'REDE'),
(19, 'SD'),
(20, 'PSDB'),
(21, 'PHS'),
(22, 'PMB'),
(23, 'PRB'),
(24, 'PSC'),
(25, 'PTC'),
(26, 'PDT'),
(27, 'DEM'),
(28, 'PT do B'),
(29, 'PMN'),
(30, 'PV'),
(31, 'PPL'),
(32, 'PCB'),
(33, 'PCO'),
(34, 'PSTU'),
(35, 'PRONA'),
(36, 'PAN'),
(37, 'PFL'),
(38, 'PL'),
(39, 'PGT'),
(40, 'PPB'),
(41, 'PST'),
(42, 'PRN'),
(43, 'PSN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `partido`
--
ALTER TABLE `partido`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `partido`
--
ALTER TABLE `partido`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
