-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Nov-2018 às 23:46
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistema_biblioteca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

CREATE TABLE `livro` (
  `id_livro` int(11) NOT NULL,
  `nome_livro` varchar(256) NOT NULL,
  `nome_autor` varchar(128) NOT NULL,
  `categoria_livro` varchar(128) NOT NULL,
  `status_livro` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(80) NOT NULL,
  `senha_usuario` varchar(32) NOT NULL,
  `email_usuario` varchar(256) NOT NULL,
  `cpf_usuario` varchar(11) NOT NULL,
  `tipo_usuario` char(1) NOT NULL,
  `data_cadastro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_livro`
--

CREATE TABLE `usuario_livro` (
  `id_aluguel` int(11) NOT NULL,
  `id_livro` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `data_retirada` datetime NOT NULL,
  `data_entrega` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`id_livro`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indexes for table `usuario_livro`
--
ALTER TABLE `usuario_livro`
  ADD KEY `id_livro` (`id_livro`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `usuario_livro`
--
ALTER TABLE `usuario_livro`
  ADD CONSTRAINT `usuario_livro_ibfk_1` FOREIGN KEY (`id_livro`) REFERENCES `livro` (`id_livro`),
  ADD CONSTRAINT `usuario_livro_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
