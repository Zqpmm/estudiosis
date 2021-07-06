# Linguagem utilizada: PHP (Sem utilização de framework)


# Administrador -> User: alexandre@gmail.com / Senha: alexandre@gmail.com
# Ceo -> User: felipe@gmail.com  / Senha: felipe@gmail.com
# Comercial -> User: pietro@gmail.com / Senha: pietro@gmail.com 
# Financeiro -> User: paulo@gmail.com / Senha: paulo@gmail.com

# dump MYSQL:------------------------------------------------------------------------------|

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 06-Jul-2021 às 16:38
-- Versão do servidor: 8.0.21
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `estudiosis`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aprovados`
--

DROP TABLE IF EXISTS `aprovados`;
CREATE TABLE IF NOT EXISTS `aprovados` (
  `cod_aprovado` int NOT NULL AUTO_INCREMENT,
  `nome_cliente_aprovado` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `valor_aprovado` int NOT NULL,
  `imovel_aprovado` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`cod_aprovado`)
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `aprovados`
--

INSERT INTO `aprovados` (`cod_aprovado`, `nome_cliente_aprovado`, `valor_aprovado`, `imovel_aprovado`) VALUES
(18, 'Felipe - 115426143', 100, '10 - Felipe Andrey Garcia'),
(19, 'Felipe - 115426143', 100, '10 - Felipe Andrey Garcia'),
(20, 'Felipe - 115426143', 100, '10 - Felipe Andrey Garcia'),
(21, 'Felipe - 115426143', 100, '10 - Felipe Andrey Garcia'),
(22, 'Felipe - 115426143', 100, '10 - Felipe Andrey Garcia'),
(23, 'Alexandre', 10000, '9'),
(24, 'Alexandre', 10000, '9'),
(25, 'Alexandre', 10000, '9'),
(26, 'Alexandre', 10000, '9'),
(27, '2', 2, '2'),
(28, '2', 2, '2'),
(29, '2', 2, '2'),
(30, '2', 2, '2'),
(31, '2', 2, '2'),
(32, '2', 2, '2'),
(33, '2', 2, '2'),
(34, 'j', 1, 'j'),
(35, 'j', 1, 'j'),
(36, 'j', 1, 'j'),
(37, 'j', 1, 'j'),
(38, '2', 2, '2'),
(39, '1', 1, '1'),
(40, '1', 1, '1'),
(41, '2', 2, '2'),
(42, '2', 2, '2'),
(43, '2', 2, '2'),
(44, 'Alexandre', 10000, '9'),
(45, '1', 1, '1'),
(46, '2', 2, '2'),
(47, '1', 1, '1'),
(48, '1', 1, '1'),
(49, '1', 1, '1'),
(50, '1', 1, '1'),
(51, '1', 1, '1'),
(52, '1', 1, '1'),
(53, '1', 1, '1'),
(54, '1', 1, '1'),
(55, '1', 1, '1'),
(56, '1', 1, '1'),
(57, '1', 1, '1'),
(58, '1', 1, '1'),
(59, '1', 1, '1'),
(60, '1', 1, '1'),
(61, '1', 1, '1'),
(62, '1', 1, '1'),
(63, '2', 2, '2'),
(64, '2', 2, '2'),
(65, '1', 1, '1'),
(66, '2', 2, '2'),
(67, '1', 1, '1'),
(68, '2', 2, '2'),
(69, '1', 1, '1'),
(70, 'sdasda - 1234', 100, '10 - Felipe Andrey Garcia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cliente` int NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `telefone` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `cpf` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nome_cliente`, `email`, `telefone`, `cpf`) VALUES
(1, 'Felipe', 'felipeandrey10@gmail.com', '(35) 99999999', '115426143'),
(2, 'sdasda', 'felipeandrey10@gmail.com', '1234', '1234');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imoveis`
--

DROP TABLE IF EXISTS `imoveis`;
CREATE TABLE IF NOT EXISTS `imoveis` (
  `cod_imovel` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `valor` int NOT NULL,
  `localizacao` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  `comprimento` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`cod_imovel`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `imoveis`
--

INSERT INTO `imoveis` (`cod_imovel`, `nome`, `valor`, `localizacao`, `comprimento`) VALUES
(1, 'a', 0, 'c', 'd'),
(2, 'a', 0, 'c', 'd'),
(3, 'a', 0, 'cc', 'd'),
(4, 'a', 0, 'cc', 'd'),
(5, 'a', 0, 'cc', 'dd'),
(6, 'a', 0, 'cc', 'dd'),
(7, 'a', 0, 'c', 'dd'),
(8, 'a', 0, 'c', 'dd'),
(9, 'Felipe Andrey Garcia', 0, 'ad', 'das'),
(10, 'Felipe Andrey Garcia', 0, 'ad', 'das'),
(11, '', 0, '', ''),
(12, '', 0, '', ''),
(13, '', 0, '', ''),
(14, '', 0, '', ''),
(15, 'd', 0, 'dsa', 'dsa'),
(16, 'd', 0, 'dsa', 'dsa'),
(17, 'd', 0, 'dsa', 'dsa'),
(18, '1', 1, '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `propostas`
--

DROP TABLE IF EXISTS `propostas`;
CREATE TABLE IF NOT EXISTS `propostas` (
  `cod_proposta` int NOT NULL AUTO_INCREMENT,
  `nome_cliente_proposta` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `valor` int NOT NULL,
  `imovel_proposta` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`cod_proposta`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `propostas`
--

INSERT INTO `propostas` (`cod_proposta`, `nome_cliente_proposta`, `valor`, `imovel_proposta`) VALUES
(12, 'Felipe - 115426143', 100000, '1 - a'),
(11, 'Felipe - 115426143', 100000, '1 - a'),
(13, 'Felipe - 115426143', 100000, '1 - a');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuarios` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  `cargo` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `senha` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_usuarios`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `nome`, `cargo`, `email`, `senha`) VALUES
(8, 'Carlos', 'financeiro', 'carlos@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'Rodrigo', 'comercial', 'rodrigo@gmail.com', 'rodrigo@gmail.com'),
(6, 'Felipe', 'ceo', 'felipe@gmail.com', 'felipe@gmail.com'),
(11, 'Victor', 'comercial', 'victor@gmail.com', 'victor@gmail.com'),
(10, 'Pedro', 'comercial', 'pedro@gmail.com', 'pedro@gmail.com'),
(12, 'Rosbevaldo', 'financeiro', 'rosbevaldo@gmail.com', 'rosbevaldo@gmail.com'),
(13, 'Pietro', 'comercial', 'pietro@gmail.com', 'pietro@gmail.com'),
(14, 'Paulo', 'financeiro', 'paulo@gmail.com', 'paulo@gmail.com'),
(15, 'Alexandre', 'administrador', 'alexandre@gmail.com', 'alexandre@gmail.com'),
(16, 'teste', 'administrador', 'teste@gmail.com', 'teste@gmail.com'),
(17, 'felipe', 'administrador', 'aa@gmail.com', 'aa@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
