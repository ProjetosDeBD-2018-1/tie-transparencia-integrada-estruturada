-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Jul-2018 às 18:02
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
-- Estrutura da tabela `tipo_nota`
--

CREATE TABLE `tipo_nota` (
  `id` int(11) NOT NULL,
  `desc_tipo_nota` varchar(50) DEFAULT NULL,
  `tipo_nota` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo_nota`
--

INSERT INTO `tipo_nota` (`id`, `desc_tipo_nota`, `tipo_nota`) VALUES
(1, 'Empenho Original', 1),
(2, 'Anulação de Empenho', 3),
(3, 'Cancelamento de Restos a Pagar não Processados em ', 17),
(4, 'OUTROS CANC DE RP', 13),
(5, 'Estorno de Cancelamento de Empenho de Restos a Pag', 15),
(6, 'Reforço de Empenho', 2),
(7, 'Estorno de Anulação de Empenho', 5),
(8, 'CANCELAMENTO RP POR INSUFICIENCIA DE RECURSO', 14),
(9, 'Anulação de despesa Pré-Empenhada', 9),
(10, 'Empenho de Despesa Pré-Empenhada', 7),
(11, 'Anulação de Pré-Empenho', 3),
(12, 'CAN NE FALTA CAIXA', 4),
(13, 'Estorno de Anulação de Empenho de Despesa Pré-Empe', 11),
(14, 'Estorno de Cancelamento de Empenho', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tipo_nota`
--
ALTER TABLE `tipo_nota`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tipo_nota`
--
ALTER TABLE `tipo_nota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
