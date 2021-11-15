-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Nov-2021 às 23:07
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cantinhodopet`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `tipoUse` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `cpf`, `senha`, `tipoUse`) VALUES
(1, 'Jefferson Eduardo', 'teste@gmail.com', '123.456.789-09', 'e10adc3949ba59abbe56e057f20f883e', 0),
(2, 'Jeff', 'teste1@gmail.com', '123.456.789-08', 'e10adc3949ba59abbe56e057f20f883e', 0),
(3, 'teste teste', 'teste2@gmail.com', '123.456.444-21', '', 0),
(4, 'teste teste', 'teste24@gmail.com', '123.456.444-25', '123456', 1),
(8, 'dsojkgfuikdsh', 'teste2546@gmail.com', '123.124.125-21', 'e10adc3949ba59abbe56e057f20f883e', NULL),
(9, '123124', 'teste2444@gmail.com', '12412412412-41', '81dc9bdb52d04dc20036dbd8313ed055', NULL),
(10, '12512512', 'teste2354@gmail.com', '512.512.512-51', '202cb962ac59075b964b07152d234b70', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
