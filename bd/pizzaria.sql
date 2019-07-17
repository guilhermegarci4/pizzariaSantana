-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17-Jul-2019 às 04:15
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizzaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cardapio`
--

CREATE TABLE `cardapio` (
  `idPizza` int(11) NOT NULL,
  `noPizza` int(11) DEFAULT NULL,
  `sabor` varchar(250) DEFAULT NULL,
  `ingredientes` varchar(250) DEFAULT NULL,
  `preco` varchar(250) DEFAULT NULL,
  `foto` text,
  `lado` tinyint(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `destaque`
--

CREATE TABLE `destaque` (
  `idDestaque` int(11) NOT NULL,
  `saborDestaque` varchar(250) DEFAULT NULL,
  `descricaoDestaque` varchar(250) DEFAULT NULL,
  `precoDestaque` varchar(250) DEFAULT NULL,
  `fotoDestaque` text,
  `lado` tinyint(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `destaque`
--

INSERT INTO `destaque` (`idDestaque`, `saborDestaque`, `descricaoDestaque`, `precoDestaque`, `fotoDestaque`, `lado`) VALUES
(1, 'No Teste', 'Juqueira', '40,00', 'image_5.jpg', 0),
(2, 'a', 'a', '29,00', 'drink-3.jpg', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `galeria`
--

CREATE TABLE `galeria` (
  `idGaleria` int(11) NOT NULL,
  `noGaleria` int(11) DEFAULT NULL,
  `foto` text,
  `descricaoFoto` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `galeria`
--

INSERT INTO `galeria` (`idGaleria`, `noGaleria`, `foto`, `descricaoFoto`) VALUES
(1, 1, 'foto1.png', 'aaaaaaaaaaaaaaaaaaaaaaaaaaae'),
(2, 2, 'foto2.png', 'beaufiul 1'),
(3, 3, 'foto3.png', 'aaa'),
(4, 4, 'foto4.png', 'bbb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cardapio`
--
ALTER TABLE `cardapio`
  ADD PRIMARY KEY (`idPizza`);

--
-- Indexes for table `destaque`
--
ALTER TABLE `destaque`
  ADD PRIMARY KEY (`idDestaque`);

--
-- Indexes for table `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`idGaleria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cardapio`
--
ALTER TABLE `cardapio`
  MODIFY `idPizza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `destaque`
--
ALTER TABLE `destaque`
  MODIFY `idDestaque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galeria`
--
ALTER TABLE `galeria`
  MODIFY `idGaleria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
