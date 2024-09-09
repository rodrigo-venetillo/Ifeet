-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2024 at 12:11 AM
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
-- Database: `ifeet`
--

-- --------------------------------------------------------

--
-- Table structure for table `calcado`
--

CREATE TABLE `calcado` (
  `descricao` varchar(500) DEFAULT NULL,
  `modelo` varchar(100) DEFAULT NULL,
  `tamanho` int(11) DEFAULT NULL,
  `cor` varchar(100) DEFAULT NULL,
  `marca` varchar(100) DEFAULT NULL,
  `chave` int(11) NOT NULL,
  `condicao` int(11) DEFAULT NULL,
  `preco` int(11) DEFAULT NULL,
  `curtidas_recebidas` int(11) DEFAULT NULL,
  `foto` varchar(500) DEFAULT NULL,
  `id_individuo` int(11) DEFAULT NULL,
  `id_tipo_de_calcado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `calcado`
--

INSERT INTO `calcado` (`descricao`, `modelo`, `tamanho`, `cor`, `marca`, `chave`, `condicao`, `preco`, `curtidas_recebidas`, `foto`, `id_individuo`, `id_tipo_de_calcado`) VALUES
(NULL, NULL, 40, 'Preto', 'Nike Air', 5, 0, 500, NULL, '../uploads/nike.jpg', NULL, NULL),
(NULL, NULL, 40, 'Preto', 'Nike Air', 6, 0, 500, NULL, '../uploads/nike.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `curtir`
--

CREATE TABLE `curtir` (
  `chave_calcado` int(11) NOT NULL,
  `chave_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`email`, `senha`, `id`, `nome`, `sobrenome`) VALUES
('teste@gmail.com', '$2y$10$JdDBVsp/GJATBzniPsnF8.eSK9KpoHhs7zJxIGWe5KI7IPtU32/FS', 40, 'teste', 'teste');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calcado`
--
ALTER TABLE `calcado`
  ADD PRIMARY KEY (`chave`);

--
-- Indexes for table `curtir`
--
ALTER TABLE `curtir`
  ADD PRIMARY KEY (`chave_calcado`,`chave_usuario`),
  ADD KEY `chave_usuario` (`chave_usuario`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calcado`
--
ALTER TABLE `calcado`
  MODIFY `chave` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
