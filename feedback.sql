-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Jul-2021 às 18:09
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `feedback`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `chamados`
--

CREATE TABLE `chamados` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL DEFAULT 'Anônimo',
  `setor` varchar(20) NOT NULL,
  `sala` int(3) NOT NULL,
  `problema` varchar(255) NOT NULL,
  `retorno` varchar(255) NOT NULL DEFAULT 'Aguarde o retorno',
  `andamento` int(1) NOT NULL DEFAULT 3,
  `protocolo` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `chamados`
--

INSERT INTO `chamados` (`id`, `nome`, `setor`, `sala`, `problema`, `retorno`, `andamento`, `protocolo`) VALUES
(0, 'Adeílson', 'Pronto Socorro', 303, 'Piso rachado.', 'Estamos Resolvendo!', 2, '1f7d7d9c-1222-4b92-e50a-ca33af200a6a'),
(0, 'Adaberto', 'Consultório', 101, 'Lâmpada Quebrada', 'Terminado!', 3, '61daeb8d-1dca-4abd-ec27-539df1ba5544'),
(0, 'Angelo', 'Internação', 315, 'Cama emperrada.', 'Terminado!', 1, '975bbea2-80e6-4262-bd6b-936ccfab61e5');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `usuario` varchar(12) NOT NULL,
  `senha` varchar(12) NOT NULL,
  `privilegio` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `nome`, `usuario`, `senha`, `privilegio`) VALUES
(1, 'Admin', 'admin', 'admin', 1),
(2, 'Zezinho', 'Zezinho', '1234', 3),
(3, 'Anta', 'anta', '123123', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ouvidoria`
--

CREATE TABLE `ouvidoria` (
  `id` int(10) NOT NULL,
  `nome` varchar(80) DEFAULT NULL,
  `email` varchar(120) DEFAULT NULL,
  `conteudo` text NOT NULL,
  `protocolo` varchar(36) DEFAULT NULL,
  `retorno` varchar(360) DEFAULT NULL,
  `andamento` int(1) DEFAULT 3
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ouvidoria`
--

INSERT INTO `ouvidoria` (`id`, `nome`, `email`, `conteudo`, `protocolo`, `retorno`, `andamento`) VALUES
(1, 'Anderson', 'oi@oi.com', 'Muito Obrigado por resolver meu chamado!', 'ced3fa43-12b1-4718-fd42-c2a18c4a8752', NULL, 3),
(5, NULL, NULL, 'péssimo', '63bdf90d-91ce-4353-d7d6-3c0f132b142e', 'Resolvido!!!', 1),
(6, NULL, NULL, 'Biscoito', 'e9e891b4-16b3-4ee7-c4c4-e57e8d684eec', 'Muito Obrigado pela sua Sugestão/Reclamação, ela foi recebida e ouvida! agradecemos a sua participação!', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `ouvidoria`
--
ALTER TABLE `ouvidoria`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `ouvidoria`
--
ALTER TABLE `ouvidoria`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
