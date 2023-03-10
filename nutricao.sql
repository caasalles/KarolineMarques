-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Dez-2022 às 23:53
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `nutricao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `Nome` varchar(230) NOT NULL,
  `RG` varchar(9) NOT NULL,
  `CPF` varchar(12) NOT NULL,
  `Pai` varchar(230) NOT NULL,
  `Mãe` varchar(230) NOT NULL,
  `Email` varchar(230) NOT NULL,
  `Telefone` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `Nome`, `RG`, `CPF`, `Pai`, `Mãe`, `Email`, `Telefone`) VALUES
(8, 'Ana Carolina', '34214254', '424532423', 'Am', 'Maria', 'ana@gmail.com', '2145345354');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id` int(11) NOT NULL,
  `Nome` varchar(230) NOT NULL,
  `Nascimento` varchar(10) NOT NULL,
  `RG` varchar(8) NOT NULL,
  `CPF` varchar(11) NOT NULL,
  `Pai` varchar(230) NOT NULL,
  `Mãe` varchar(230) NOT NULL,
  `Email` varchar(230) NOT NULL,
  `Telefone` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id`, `Nome`, `Nascimento`, `RG`, `CPF`, `Pai`, `Mãe`, `Email`, `Telefone`) VALUES
(1, 'Ana Carolina', '', '26651417', '13585035753', 'Jose', 'Maria', 'ana@gmail.com', '21976807050'),
(2, 'Leticia Rubino ', '1997-02-11', '93939393', '19394949392', 'Antonio', 'Monica', 'leticia@gmail.com', '21970439190'),
(3, 'Maria', '1968-04-26', '39393939', '39393939393', 'Jose', 'Zulmira', 'maria@gmail.com', '21997984017');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `USUÁRIO` varchar(130) NOT NULL,
  `SENHA` varchar(130) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `USUÁRIO`, `SENHA`) VALUES
(1, 'teste@teste.com', 'teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `Produto` varchar(130) NOT NULL,
  `Preco` varchar(130) NOT NULL,
  `Disponibilidade` varchar(20) NOT NULL,
  `Codigo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `Produto`, `Preco`, `Disponibilidade`, `Codigo`) VALUES
(2, 'Consultas', '450.00', '1', '001'),
(13, 'Consultas Karol', '450.00', '1', '001'),
(14, 'Consultas Karol ', '450.00', '1', '001');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
