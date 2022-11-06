-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Out-2022 às 22:00
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `doar`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_campanha`
--

CREATE TABLE `tbl_campanha` (
  `camp_Id` int(11) NOT NULL,
  `camp_Nome` varchar(45) NOT NULL,
  `camp_Descricao` varchar(255) NOT NULL,
  `camp_Agradecimento` varchar(255) DEFAULT NULL,
  `camp_DataInicioCampanha` date DEFAULT NULL,
  `camp_DataFinalCampanha` date NOT NULL,
  `camp_DataCadastroCampanha` timestamp NULL DEFAULT NULL,
  `camp_TipoCausa` varchar(45) NOT NULL,
  `camp_Exib` tinyint(1) DEFAULT NULL,
  `camp_Imagem` text DEFAULT NULL,
  `camp_Status` varchar(45) DEFAULT NULL,
  `fk_Org_Campanha` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_campanha`
--

INSERT INTO `tbl_campanha` (`camp_Id`, `camp_Nome`, `camp_Descricao`, `camp_Agradecimento`, `camp_DataInicioCampanha`, `camp_DataFinalCampanha`, `camp_DataCadastroCampanha`, `camp_TipoCausa`, `camp_Exib`, `camp_Imagem`, `camp_Status`, `fk_Org_Campanha`) VALUES
(233, 'Teste com fk', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx', 'agraedededededee', '2022-10-13', '2022-10-21', NULL, ' marinha', 0, 'padraoDoacao.png', 'finalizada', 16),
(234, 'pinguin', 'ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'teste de agradecimento', '2022-10-13', '2022-10-28', NULL, 'os ppinguin', 1, '63487a3b6f3e9.png', 'ativa', 16),
(235, 'campanha atualiza :)', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'finalizando essa jossa', '2022-10-15', '2022-10-29', NULL, 'animal    :)', 1, '634b65b628fae.png', 'finalizada', 16),
(236, 'será que cadastra', 'cccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc', '', '2022-10-16', '2022-10-29', NULL, 'teste', 0, '634b34eb8a179.png', 'ativa', 16),
(237, 'arreacada', 'bvvvvvvvvvvvbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbiiiiiii', '', '2022-10-16', '2022-10-21', NULL, 'animal', 1, '634b77434d2c5.png', 'ativa', 16);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_doador`
--

CREATE TABLE `tbl_doador` (
  `doador_Id` int(11) NOT NULL,
  `doador_Nome` varchar(255) DEFAULT NULL,
  `doador_Email` varchar(45) DEFAULT NULL,
  `doador_Celular` int(14) DEFAULT NULL,
  `doador_Nasc` int(4) NOT NULL,
  `doador_Senha` varchar(255) DEFAULT NULL,
  `doador_ativo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_doador`
--

INSERT INTO `tbl_doador` (`doador_Id`, `doador_Nome`, `doador_Email`, `doador_Celular`, `doador_Nasc`, `doador_Senha`, `doador_ativo`) VALUES
(4, '', 'sva.aline321@gmail.com', NULL, 2002, '', 0),
(6, '', 'testeUsuario@gmail.com', NULL, 2002, '', 0),
(10, '', '333333333333', NULL, 2002, '1234567', 0),
(25, ' ', 'velho@gmail.com', 0, 2002, '$2y$10$BzNH0xg.IDIOu62/aogOv.T71y6ETI.uSuTenGZijmbsmWtD7fidy', 1),
(30, ' ', 'velho54321@gmail.com', 0, 1997, '$2y$10$l88iRK7zH3V1QUYpH41ELOZMpLYZr6xLeY14hFwwDsN1qdAGB.1..', 1),
(32, ' ', 'kkk@gmail.com', 0, 1955, '$2y$10$iozL6Ck5u.ZX1LBO0qVv/OlnBI/u./ctbrO59Wkah1Bx5hR8X1BQa', 1),
(33, ' ', 'ggg@gmail.com', 0, 2004, '$2y$10$golL7vnh0rYnlmiKmdl.LOJIZgsMEe587o3t9G/x1TBwewFx7f772', 1),
(34, ' ', 'pru@gmail.com', 0, 2003, '$2y$10$OwU8QXw1RoQvhjHV5MVd8eKDHLY4QXTBB3tQL9oCVb1mUj1BheXay', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_imagem`
--

CREATE TABLE `tbl_imagem` (
  `img_Id` int(11) NOT NULL,
  `img_Imagem` text NOT NULL,
  `fk_Camp_Imagem` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_imagem`
--

INSERT INTO `tbl_imagem` (`img_Id`, `img_Imagem`, `fk_Camp_Imagem`) VALUES
(5, '6351e30f3f289.png', 233),
(6, '6351e6a4b1afe.png', 233),
(7, '6351e7212c5d0.png', 233),
(8, '6351e817b9496.png', 235),
(9, '6352082ee554a.png', 233),
(10, '635208362e1f9.png', 233);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_itens`
--

CREATE TABLE `tbl_itens` (
  `iten_Id` int(11) NOT NULL,
  `iten_Nome` varchar(45) NOT NULL,
  `fk_Camp_Item` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_itens`
--

INSERT INTO `tbl_itens` (`iten_Id`, `iten_Nome`, `fk_Camp_Item`) VALUES
(75, 'peixe', 234),
(76, 'agua gelada', 234),
(77, 'gelo', 234),
(80, 'pedra', 234),
(81, 'papel', 234),
(82, 'tesura', 234),
(83, 'papel de manteiga', 234),
(84, 'vassoura', 234),
(88, 'goiaba', 234),
(90, 'racao pinguin', 234),
(92, 'pera', 235),
(93, 'banana', 235),
(94, 'vaca', 236),
(95, 'pao', 235),
(96, 'batata', 235),
(97, 'teste addd 3', 236);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_itens_doador`
--

CREATE TABLE `tbl_itens_doador` (
  `id_Itens_Doador` int(11) NOT NULL,
  `fk_Itens_id` int(11) DEFAULT NULL,
  `fk_Doador_id` int(11) DEFAULT NULL,
  `cont_Quantidade` int(11) NOT NULL,
  `status_doacao` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_itens_doador`
--

INSERT INTO `tbl_itens_doador` (`id_Itens_Doador`, `fk_Itens_id`, `fk_Doador_id`, `cont_Quantidade`, `status_doacao`) VALUES
(1, 76, 25, 2, ''),
(2, 75, 25, 6, 'pendente'),
(3, 82, 25, 7, 'pendente'),
(4, 77, 25, 2, 'pendente'),
(5, 81, 25, 9, 'pendente'),
(6, 84, 25, 2, 'pendente'),
(7, 83, 25, 5, 'pendente'),
(8, 84, 25, 5, 'pendente'),
(10, 83, 25, 55, 'pendente'),
(11, 77, 25, 8, 'pendente'),
(12, 81, 25, 3, 'pendente'),
(13, 83, 25, 1, 'pendente'),
(14, 80, 25, 5, 'pendente'),
(15, 82, 25, 9, 'pendente'),
(16, 75, 25, 5, 'pendente'),
(17, 77, 25, 5, 'pendente'),
(18, 82, 25, 5, 'pendente'),
(19, 75, 25, 5, 'pendente'),
(20, 77, 25, 5, 'pendente'),
(21, 82, 25, 5, 'pendente'),
(22, 75, 25, 5, 'pendente'),
(23, 77, 25, 5, 'pendente'),
(24, 82, 25, 5, 'pendente'),
(25, 81, 25, 9, 'pendente'),
(26, 83, 25, 3, 'pendente'),
(27, 77, 25, 6, 'pendente'),
(28, 81, 25, 3, 'pendente'),
(29, 83, 25, 4, 'pendente'),
(30, 84, 25, 6, 'pendente'),
(31, 80, 25, 7, 'pendente'),
(32, 82, 25, 9, 'pendente'),
(33, 75, 25, 9, 'pendente'),
(34, 80, 25, 9, 'pendente'),
(35, 81, 25, 9, 'pendente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_organizacao`
--

CREATE TABLE `tbl_organizacao` (
  `org_Id` int(11) NOT NULL,
  `org_CNPJ` bigint(14) NOT NULL,
  `org_RazaoSocial` varchar(255) NOT NULL,
  `org_NomeFantasia` varchar(255) NOT NULL,
  `org_CEP` int(10) DEFAULT NULL,
  `org_Estado` varchar(45) NOT NULL,
  `org_Cidade` varchar(45) NOT NULL,
  `org_Bairro` varchar(45) NOT NULL,
  `org_Rua` varchar(255) NOT NULL,
  `org_Numero` int(10) NOT NULL,
  `org_Complemento` varchar(45) DEFAULT NULL,
  `org_Site` varchar(255) DEFAULT NULL,
  `org_Telefone1` bigint(14) NOT NULL,
  `org_Telefone2` bigint(14) DEFAULT NULL,
  `org_Celular` bigint(14) DEFAULT NULL,
  `org_ImagemLogo` text NOT NULL,
  `org_Sobre` varchar(255) DEFAULT NULL,
  `login_Organizacao` varchar(45) NOT NULL,
  `senha_Organizacao` varchar(255) NOT NULL,
  `org_DataCadastroSite` date NOT NULL,
  `org_ativo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_organizacao`
--

INSERT INTO `tbl_organizacao` (`org_Id`, `org_CNPJ`, `org_RazaoSocial`, `org_NomeFantasia`, `org_CEP`, `org_Estado`, `org_Cidade`, `org_Bairro`, `org_Rua`, `org_Numero`, `org_Complemento`, `org_Site`, `org_Telefone1`, `org_Telefone2`, `org_Celular`, `org_ImagemLogo`, `org_Sobre`, `login_Organizacao`, `senha_Organizacao`, `org_DataCadastroSite`, `org_ativo`) VALUES
(1, 54564664664601, 'Aline testando', 'Fantasia', 12507060, 'SP', 'Guaratinguetá', 'Jardim Santa Luzia', 'Rua Hilda Maria Sobral Barbosa Mandarino', 6, '', '', 1255455355, 0, 0, '6345a81309e80.png', '', 'eeeeee@gmail.com', '$2y$10$fgfUyNVnu2rICrNd89GbbeV4cQBGx78YiqZ1D1E2YkCIUO9Ew3B9e', '2022-10-11', 0),
(10, 44444444444444, 'Aline testando 2', 'Aline testando 2', 12507060, 'SP', 'Guaratinguetá', 'Jardim Santa Luzia', 'Rua Hilda Maria Sobral Barbosa Mandarino', 777, '', '', 4444444444, 0, 0, '6345c5abc533a.png', '', 'allllll@gmail.com', '$2y$10$6OWI/btCxuI2TKiSd1j67.siWb9k6zAmY2UFeY8xSBobE2aG0QqOS', '2022-10-11', 0),
(13, 66999949949994, 'gato pru', 'gato pru', 0, 'SP', 'Guaratinguetá', 'algum santo', 'Rua Hilda Maria Sobral Barbosa Mandarino', 773, '', '', 8477746646, 0, 0, '6345c976962d0.png', '', 'joneves@hotmail.com', '$2y$10$ymUryyZsv2r9q98UyRaCX.6wZ7ZyEMQ7j6w9.aLDpZRANXfYZD1d.', '2022-10-11', 0),
(15, 77777777777777, 'testeeeeeee', 'testeeeeeee', 0, 'SP', 'Guaratinguetá', '', '3', 44, '', '', 8888888888, 0, 0, '6345ca04bb7bd.png', '', 'clirinda@gmail.com', '$2y$10$oRHI9Xxan7.hyx7QO9RISOMGATlNCon47kSmaujjIjKBne4yodxM6', '2022-10-11', 0),
(16, 12335666666669, 'Aline Cadastro', 'Teste para tudo', 12507060, 'SP', 'Guaratinguetá', 'Jardim Santa Luzia', 'Rua Hilda Maria Sobral Barbosa Mandarino', 34, 'complemento', 'site.com.br', 1544233626, 1299766355, 12995443322, '6351e73cafe5b.png', 'funcionanaaaaggg', 'alineteste@gmail.com', '$2y$10$D9Jp/SV.9P46hx8Un8vqH.wrqeYOWsQL9TcTCqm8ZrTs3jw8AiPNq', '2022-10-13', 1),
(18, 55555554444333, 'Teste bloquear', 'Bloqueando cadastro', 12507060, 'SP', 'Guaratinguetá', 'Jardim Santa Luzia', 'Rua Hilda Maria Sobral Barbosa Mandarino', 746, 'antiga 3', ' ', 1244353555, 1277477747, 12884766466, '634a0fd22cfda.png', ' ', 'teste@gmail.com', '$2y$10$x9V0wNCtZbYFCkaRWVV0pOKs9EHaIZ3VLPMkoI6nI1TvfKTzl16V.', '2022-10-15', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_responsavel`
--

CREATE TABLE `tbl_responsavel` (
  `resp_Id` int(11) NOT NULL,
  `resp_CPF` bigint(11) NOT NULL,
  `resp_Nome` varchar(45) NOT NULL,
  `resp_Email` varchar(45) DEFAULT NULL,
  `resp_Celular` bigint(14) NOT NULL,
  `fk_Org_Responsavel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_responsavel`
--

INSERT INTO `tbl_responsavel` (`resp_Id`, `resp_CPF`, `resp_Nome`, `resp_Email`, `resp_Celular`, `fk_Org_Responsavel`) VALUES
(1, 11111222223, 'clerinda', '', 0, 15),
(2, 55555555555, 'Aline Aparecida', 'responsavel@gmail.com', 23664553444, 16),
(3, 23457654244, 'Aline de novo', '', 0, 18);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbl_campanha`
--
ALTER TABLE `tbl_campanha`
  ADD PRIMARY KEY (`camp_Id`),
  ADD KEY `fk_Org_Campanha` (`fk_Org_Campanha`);

--
-- Índices para tabela `tbl_doador`
--
ALTER TABLE `tbl_doador`
  ADD PRIMARY KEY (`doador_Id`),
  ADD UNIQUE KEY `doador_Email` (`doador_Email`);

--
-- Índices para tabela `tbl_imagem`
--
ALTER TABLE `tbl_imagem`
  ADD PRIMARY KEY (`img_Id`),
  ADD KEY `fk_Camp_Imagem` (`fk_Camp_Imagem`);

--
-- Índices para tabela `tbl_itens`
--
ALTER TABLE `tbl_itens`
  ADD PRIMARY KEY (`iten_Id`),
  ADD KEY `fk_Camp_Item` (`fk_Camp_Item`);

--
-- Índices para tabela `tbl_itens_doador`
--
ALTER TABLE `tbl_itens_doador`
  ADD PRIMARY KEY (`id_Itens_Doador`),
  ADD KEY `fk_Itens_id` (`fk_Itens_id`),
  ADD KEY `fk_Doador_id` (`fk_Doador_id`);

--
-- Índices para tabela `tbl_organizacao`
--
ALTER TABLE `tbl_organizacao`
  ADD PRIMARY KEY (`org_Id`),
  ADD UNIQUE KEY `org_CNPJ` (`org_CNPJ`),
  ADD UNIQUE KEY `login_Organizacao` (`login_Organizacao`);

--
-- Índices para tabela `tbl_responsavel`
--
ALTER TABLE `tbl_responsavel`
  ADD PRIMARY KEY (`resp_Id`),
  ADD KEY `fk_Org_Responsavel` (`fk_Org_Responsavel`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbl_campanha`
--
ALTER TABLE `tbl_campanha`
  MODIFY `camp_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=238;

--
-- AUTO_INCREMENT de tabela `tbl_doador`
--
ALTER TABLE `tbl_doador`
  MODIFY `doador_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `tbl_imagem`
--
ALTER TABLE `tbl_imagem`
  MODIFY `img_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tbl_itens`
--
ALTER TABLE `tbl_itens`
  MODIFY `iten_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT de tabela `tbl_itens_doador`
--
ALTER TABLE `tbl_itens_doador`
  MODIFY `id_Itens_Doador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de tabela `tbl_organizacao`
--
ALTER TABLE `tbl_organizacao`
  MODIFY `org_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `tbl_responsavel`
--
ALTER TABLE `tbl_responsavel`
  MODIFY `resp_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbl_campanha`
--
ALTER TABLE `tbl_campanha`
  ADD CONSTRAINT `tbl_campanha_ibfk_1` FOREIGN KEY (`fk_Org_Campanha`) REFERENCES `tbl_organizacao` (`org_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tbl_imagem`
--
ALTER TABLE `tbl_imagem`
  ADD CONSTRAINT `tbl_imagem_ibfk_1` FOREIGN KEY (`fk_Camp_Imagem`) REFERENCES `tbl_campanha` (`camp_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tbl_itens`
--
ALTER TABLE `tbl_itens`
  ADD CONSTRAINT `tbl_itens_ibfk_1` FOREIGN KEY (`fk_Camp_Item`) REFERENCES `tbl_campanha` (`camp_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tbl_itens_doador`
--
ALTER TABLE `tbl_itens_doador`
  ADD CONSTRAINT `tbl_itens_doador_ibfk_1` FOREIGN KEY (`fk_Itens_id`) REFERENCES `tbl_itens` (`iten_Id`),
  ADD CONSTRAINT `tbl_itens_doador_ibfk_2` FOREIGN KEY (`fk_Doador_id`) REFERENCES `tbl_doador` (`doador_Id`);

--
-- Limitadores para a tabela `tbl_responsavel`
--
ALTER TABLE `tbl_responsavel`
  ADD CONSTRAINT `tbl_responsavel_ibfk_1` FOREIGN KEY (`fk_Org_Responsavel`) REFERENCES `tbl_organizacao` (`org_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
