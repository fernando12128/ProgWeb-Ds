-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 20-Nov-2023 às 15:48
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `padariacamargo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbproduto`
--

DROP TABLE IF EXISTS `tbproduto`;
CREATE TABLE IF NOT EXISTS `tbproduto` (
  `idProduto` int NOT NULL AUTO_INCREMENT,
  `produto` varchar(100) DEFAULT NULL,
  `descrProduto` varchar(1000) DEFAULT NULL,
  `valor` decimal(10,2) DEFAULT NULL,
  `dtCadastro` date DEFAULT NULL,
  `foto` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`idProduto`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbvenda`
--

DROP TABLE IF EXISTS `tbvenda`;
CREATE TABLE IF NOT EXISTS `tbvenda` (
  `idVenda` int NOT NULL AUTO_INCREMENT,
  `idProduto` int DEFAULT NULL,
  `qtdProduto` int DEFAULT NULL,
  PRIMARY KEY (`idVenda`),
  KEY `idProduto` (`idProduto`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
