-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Dez-2021 às 05:11
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
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `cargo` varchar(20) DEFAULT 'Funcionario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id`, `nome`, `email`, `cpf`, `senha`, `cargo`) VALUES
(1, 'Jefferson Eduardo Ribeiro Silva', 'dono@gmail.com', '12345678909', '1cbb8e6c6ae3f9e5d25381f7a59c54f9', 'Dono');

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
  `tipoUse` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `cpf`, `senha`, `tipoUse`) VALUES
(1, 'Jefferson Eduardo Ribeiro Silva', 'teste@gmail.com', '123.456.789-09', 'e10adc3949ba59abbe56e057f20f883e', 'Dono'),
(17, 'Ana', 'teste10g@gmail.com', '1234124124', '42141241', 'Funcionario'),
(18, 'Wallace', 'teste11@gmail.com', '1234124124', '42141241', 'Funcionario'),
(19, 'Edu', 'teste12@gmail.com', '1234124124', '42141241', 'Funcionario'),
(20, 'Eduardo', 'teste13@gmail.com', '1234124124', '42141241', 'Funcionario'),
(21, 'BlackBolt', 'teste14@gmail.com', '1234124124', '42141241', 'Funcionario'),
(22, 'Golden', 'teste15@gmail.com', '1234124124', '42141241', 'Funcionario'),
(23, 'Byeaninha', 'teste16@gmail.com', '1234124124', '42141241', 'Funcionario');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
