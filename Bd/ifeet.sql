-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2024 at 10:56 PM
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
  `tamanho` int(11) DEFAULT NULL,
  `cor` int(11) DEFAULT NULL,
  `marca` int(11) DEFAULT NULL,
  `Chave` int(11) NOT NULL,
  `Condição` int(11) DEFAULT NULL,
  `Preço` int(11) DEFAULT NULL,
  `Curtidas_Recebidas` int(11) DEFAULT NULL,
  `Foto_Tenis` int(11) DEFAULT NULL,
  `idIndividuo` int(11) DEFAULT NULL,
  `idtipo_de_calcado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `curtir`
--

CREATE TABLE `curtir` (
  `Chave_calcado` int(11) NOT NULL,
  `Chave_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `individuo`
--

CREATE TABLE `individuo` (
  `cpf` int(11) DEFAULT NULL,
  `nome` int(11) DEFAULT NULL,
  `email` int(11) DEFAULT NULL,
  `Chave` int(11) NOT NULL,
  `Aniversario` int(11) DEFAULT NULL,
  `Genero` int(11) DEFAULT NULL,
  `Tamanho_Pe` int(11) DEFAULT NULL,
  `Usuario` int(11) DEFAULT NULL,
  `Senha` int(11) DEFAULT NULL,
  `Endereço` int(11) DEFAULT NULL,
  `Fotos_Usuario` int(11) DEFAULT NULL,
  `Classificação_Usuario` int(11) DEFAULT NULL
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
('teste@gmail.com', '$2y$10$sUp0OE/5qrlCBmbMhAnHB.45xyd5CwH.I/xrWN.CmAmhJkKYpMbI.', 39, 'Teste', 'Teste');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calcado`
--
ALTER TABLE `calcado`
  ADD PRIMARY KEY (`Chave`);

--
-- Indexes for table `curtir`
--
ALTER TABLE `curtir`
  ADD PRIMARY KEY (`Chave_calcado`,`Chave_usuario`),
  ADD KEY `Chave_usuario` (`Chave_usuario`);

--
-- Indexes for table `individuo`
--
ALTER TABLE `individuo`
  ADD PRIMARY KEY (`Chave`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `curtir`
--
ALTER TABLE `curtir`
  ADD CONSTRAINT `curtir_ibfk_1` FOREIGN KEY (`Chave_calcado`) REFERENCES `calcado` (`Chave`),
  ADD CONSTRAINT `curtir_ibfk_2` FOREIGN KEY (`Chave_usuario`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
