-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23-Jun-2018 às 15:09
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feedback`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `estrutura`
--

CREATE TABLE `estrutura` (
  `id` int(10) NOT NULL,
  `nome` varchar(80) DEFAULT NULL,
  `local` varchar(50) NOT NULL,
  `problema` varchar(80) NOT NULL,
  `ban_sexo` int(1) DEFAULT NULL,
  `ban_local` varchar(10) DEFAULT NULL,
  `lado` int(1) DEFAULT NULL,
  `sala` varchar(5) DEFAULT NULL,
  `sala_corredor` varchar(10) DEFAULT NULL,
  `m_sabonete` tinyint(1) DEFAULT NULL,
  `m_papel_h` tinyint(1) DEFAULT NULL,
  `m_papel_t` tinyint(1) DEFAULT NULL,
  `protocolo` varchar(12) DEFAULT NULL,
  `retorno` varchar(80) DEFAULT NULL,
  `andamento` int(1) DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estrutura`
--

INSERT INTO `estrutura` (`id`, `nome`, `local`, `problema`, `ban_sexo`, `ban_local`, `lado`, `sala`, `sala_corredor`, `m_sabonete`, `m_papel_h`, `m_papel_t`, `protocolo`, `retorno`, `andamento`) VALUES
(1, '', 'Lab. Redes', 'LÃ¢mpada queimada', NULL, 'NULL', NULL, '', 'NULL', 0, 0, 0, '126091647064', 'Terminado!', 1),
(2, '', 'Biblioteca', 'Ar condicionado nÃ£o funciona', 1, '2 Andar', 0, '7', 'NULL', 1, 0, 1, '129091658053', 'Espere 2 semanas', 2),
(3, 'Aydguyqi', 'Biblioteca', 'Ar condicionado nÃ£o funciona', 2, '1 Andar', 1, '88', 'NULL', 0, 1, 0, '130091685012', 'Aguarde o retorno', 3),
(4, '', 'Biblioteca', 'Ar condicionado nÃ£o funciona', 1, '1 Andar', 1, '95', '2 Andar', 1, 1, 1, '130091640008', 'Aguarde o retorno', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `Id` int(10) NOT NULL,
  `Nome` varchar(80) NOT NULL,
  `Login` varchar(12) NOT NULL,
  `Senha` varchar(12) NOT NULL,
  `privilegio` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`Id`, `Nome`, `Login`, `Senha`, `privilegio`) VALUES
(1, 'Admin', 'admin', 'admin', 1),
(2, 'Zezinho', 'Zezinho', '1234', 3),
(11, 'Anta', 'anta', '123123', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ouvidoria`
--

CREATE TABLE `ouvidoria` (
  `id` int(10) NOT NULL,
  `nome` varchar(80) DEFAULT NULL,
  `email` varchar(120) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `periodo` varchar(5) DEFAULT NULL,
  `conteudo` text NOT NULL,
  `protocolo` varchar(12) DEFAULT NULL,
  `retorno` varchar(80) DEFAULT NULL,
  `curso` varchar(30) DEFAULT NULL,
  `andamento` int(1) DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ouvidoria`
--

INSERT INTO `ouvidoria` (`id`, `nome`, `email`, `telefone`, `periodo`, `conteudo`, `protocolo`, `retorno`, `curso`, `andamento`) VALUES
(1, '', '', '', '', '', '226091618688', 'Aguarde o retorno', '', 3),
(2, 'oi', '', '', '', 'teste', '226091660311', 'Aguarde o retorno', '', 3),
(3, '', '', '', '', 'teste', '227091622851', 'Aguarde o retorno', '', 3),
(4, '', '', '', '', 'algo', '227091628494', 'Aguarde o retorno', '', 3),
(5, '', '', '', '', 'testando', '227091660485', 'EstarÃ¡ pronto daqui a 2 semanas', '', 2),
(6, 'anta', 'aaaaa@aaaa.com', '27-88888888', '8', 'nada nao', '230091689230', 'Aguarde o retorno', 'Direito', 3),
(7, '', '', '2222222222222222222', '', '', '204101626126', 'Aguarde o retorno', '', 3),
(8, '', '', '', '', 'ahsshuagsiagsqbjenquehygeybriwbithwohtoty3otykrgygeheui2heu2e2ep2jroh3gui2', '207101651614', 'Terminado!', '', 1),
(9, '', '', '', '', 'nada', '21010162633', 'Aguarde o retorno', '', 3),
(10, '', '', '', '', 'denovo', '210101613806', 'Aguarde o retorno', '', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `estrutura`
--
ALTER TABLE `estrutura`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `ouvidoria`
--
ALTER TABLE `ouvidoria`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `estrutura`
--
ALTER TABLE `estrutura`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `ouvidoria`
--
ALTER TABLE `ouvidoria`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
