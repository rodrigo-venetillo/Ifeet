CREATE TABLE `usuarios` (
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);
  
 CREATE TABLE `calcado` (
  `tamanho` int(11) DEFAULT NULL,
  `cor` varchar(100) DEFAULT NULL,
  `marca` varchar(100) DEFAULT NULL,
  `chave` int(11) AUTO_INCREMENT NOT NULL,
  `condicao` int(11) DEFAULT NULL,
  `preco` int(11) DEFAULT NULL,
  `curtidas_recebidas` int(11) DEFAULT NULL,
  `foto` varchar(500) DEFAULT NULL,
  `id_individuo` int(11) DEFAULT NULL,
  `id_tipo_de_calcado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `curtir` (
  `chave_calcado` int(11) NOT NULL,
  `chave_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `calcado`
  ADD PRIMARY KEY (`chave`);


ALTER TABLE `curtir`
  ADD PRIMARY KEY (`chave_calcado`,`chave_usuario`),
  ADD KEY `chave_usuario` (`chave_usuario`);
  

ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);
  
  ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;