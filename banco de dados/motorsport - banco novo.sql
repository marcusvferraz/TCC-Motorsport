-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Nov-2022 às 19:06
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
-- Banco de dados: `motorsport`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_acessorios`
--

CREATE TABLE `tbl_acessorios` (
  `Aces_Id` int(11) NOT NULL,
  `Aces_Nome` varchar(45) NOT NULL,
  `tbl_Tipo_Veiculo_tipo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_acessorios`
--

INSERT INTO `tbl_acessorios` (`Aces_Id`, `Aces_Nome`, `tbl_Tipo_Veiculo_tipo_id`) VALUES
(7, 'Vidros Elétricos', 14),
(8, 'Banco em Couro', 14),
(10, 'Rodas de Liga Leve', 14),
(11, 'Direção Hidráulica', 16),
(12, 'Air Bag', 16);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_administrador`
--

CREATE TABLE `tbl_administrador` (
  `adm_id` int(10) NOT NULL,
  `adm_nome` varchar(255) NOT NULL,
  `adm_senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_administrador`
--

INSERT INTO `tbl_administrador` (`adm_id`, `adm_nome`, `adm_senha`) VALUES
(1, 'Marcus', '12345');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_ano`
--

CREATE TABLE `tbl_ano` (
  `Ano_Id` int(11) NOT NULL,
  `Ano_Ano` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_ano`
--

INSERT INTO `tbl_ano` (`Ano_Id`, `Ano_Ano`) VALUES
(4, 2023);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_carroceria`
--

CREATE TABLE `tbl_carroceria` (
  `Cat_ID` int(11) NOT NULL,
  `Cat_Tipo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_combustivel`
--

CREATE TABLE `tbl_combustivel` (
  `Com_Id` int(11) NOT NULL,
  `Com_Nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_combustivel`
--

INSERT INTO `tbl_combustivel` (`Com_Id`, `Com_Nome`) VALUES
(2, 'Gasolina');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_concessionaria`
--

CREATE TABLE `tbl_concessionaria` (
  `Con_Id` bigint(14) NOT NULL,
  `Con_CNPJ` bigint(14) NOT NULL,
  `Con_RazaoSocial` varchar(255) NOT NULL,
  `Con_NomeFantasia` varchar(45) NOT NULL,
  `Con_Pais` varchar(45) NOT NULL,
  `Con_Estado` varchar(45) NOT NULL,
  `Con_Cidade` varchar(45) NOT NULL,
  `Con_Endereco` varchar(255) NOT NULL,
  `Con_Numero` int(11) NOT NULL,
  `Con_Complemento` varchar(45) NOT NULL,
  `Con_Bairro` varchar(45) NOT NULL,
  `Con_CEP` varchar(45) NOT NULL,
  `Con_Logomarca` blob NOT NULL,
  `Con_Foto` blob DEFAULT NULL,
  `Con_Sobre` text NOT NULL,
  `Con_Telefone1` bigint(14) NOT NULL,
  `Con_Telefone2` bigint(14) NOT NULL,
  `Con_RedeSocialInstagram` text NOT NULL,
  `Con_RedeSocialFacebook` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_cor`
--

CREATE TABLE `tbl_cor` (
  `Cor_Id` int(11) NOT NULL,
  `Cor_Nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_cor`
--

INSERT INTO `tbl_cor` (`Cor_Id`, `Cor_Nome`) VALUES
(2, 'Rosa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_fotoveiculo`
--

CREATE TABLE `tbl_fotoveiculo` (
  `Fot_Id` int(11) NOT NULL,
  `Fot_Imagem` text NOT NULL,
  `tblVeiculo_Fot_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_fotoveiculo`
--

INSERT INTO `tbl_fotoveiculo` (`Fot_Id`, `Fot_Imagem`, `tblVeiculo_Fot_Id`) VALUES
(26, 'moto.jpg', 17),
(30, 'hondacivic2011.jpeg', 19),
(32, 'foxpreto2014.jpeg', 20);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_login`
--

CREATE TABLE `tbl_login` (
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_marca`
--

CREATE TABLE `tbl_marca` (
  `Mar_Id` int(11) NOT NULL,
  `Mar_Nome` varchar(255) NOT NULL,
  `tbl_Tipo_Veiculo_tipo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_marca`
--

INSERT INTO `tbl_marca` (`Mar_Id`, `Mar_Nome`, `tbl_Tipo_Veiculo_tipo_id`) VALUES
(3, 'Honda', 14),
(4, 'marcus', 14),
(5, 'honda', 15),
(6, 'Mercedez', 16);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_modelo`
--

CREATE TABLE `tbl_modelo` (
  `Mod_Id` int(11) NOT NULL,
  `Mod_Nome` varchar(255) DEFAULT NULL,
  `fk_tbl_Marca_tbl_Modelo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_modelo`
--

INSERT INTO `tbl_modelo` (`Mod_Id`, `Mod_Nome`, `fk_tbl_Marca_tbl_Modelo`) VALUES
(2, 'HONDA CIVIC', 3),
(3, 'qqqqqqq', 3),
(4, 'vinicius', 4),
(5, 'marquissss', 5),
(6, 'C130', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_tipo_veiculo`
--

CREATE TABLE `tbl_tipo_veiculo` (
  `Tipo_id` int(11) NOT NULL,
  `Tipo_Nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_tipo_veiculo`
--

INSERT INTO `tbl_tipo_veiculo` (`Tipo_id`, `Tipo_Nome`) VALUES
(14, 'Carro'),
(15, 'motor'),
(16, 'Caminhao');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_veiculo`
--

CREATE TABLE `tbl_veiculo` (
  `Vei_Id` int(11) NOT NULL,
  `Vei_Placa` varchar(45) DEFAULT NULL,
  `Vei_Descricao` varchar(45) NOT NULL,
  `Vei_Preco` int(11) NOT NULL,
  `Vei_KM` int(11) NOT NULL,
  `Vei_Observacao` text DEFAULT NULL,
  `Vei_Status` tinyint(4) NOT NULL,
  `tbl_Modelo_fk_tbl_Marca_tbl_Modelo` int(11) NOT NULL,
  `acessorios` text DEFAULT '{}',
  `Vei_Cor` int(11) DEFAULT NULL,
  `Vei_Combustivel` int(11) DEFAULT NULL,
  `Vei_Ano` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_veiculo`
--

INSERT INTO `tbl_veiculo` (`Vei_Id`, `Vei_Placa`, `Vei_Descricao`, `Vei_Preco`, `Vei_KM`, `Vei_Observacao`, `Vei_Status`, `tbl_Modelo_fk_tbl_Marca_tbl_Modelo`, `acessorios`, `Vei_Cor`, `Vei_Combustivel`, `Vei_Ano`) VALUES
(17, 'ASDA111', 'abbbbbbbbbbbbbb', 20000, 777, 'aaaaaaaaaaaa', 1, 6, '11', 2, 2, 4),
(18, 'ADS2343', 'aaaabbbbbbbbbbbbb', 5000, 7877, 'aaaaaaaaaaaa', 1, 6, '11', 2, 2, 4),
(19, 'ASDA111', 'kkkkkkkkkkkkkkkkkkkkkkkk', 9000, 777, 'kkkkkkkkkkk', 1, 6, '11', 2, 2, 4),
(20, 'ADS2343', 'bbbbbbbbbbbbbbbbbbb', 90000, 5555, 'aaaaaaaaaaaa', 1, 4, '7 @corta@ 8', 2, 2, 4);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbl_acessorios`
--
ALTER TABLE `tbl_acessorios`
  ADD PRIMARY KEY (`Aces_Id`,`tbl_Tipo_Veiculo_tipo_id`),
  ADD KEY `fk_tbl_Acessorios_tbl_Tipo_Veiculo1_idx` (`tbl_Tipo_Veiculo_tipo_id`);

--
-- Índices para tabela `tbl_administrador`
--
ALTER TABLE `tbl_administrador`
  ADD PRIMARY KEY (`adm_id`);

--
-- Índices para tabela `tbl_ano`
--
ALTER TABLE `tbl_ano`
  ADD PRIMARY KEY (`Ano_Id`);

--
-- Índices para tabela `tbl_carroceria`
--
ALTER TABLE `tbl_carroceria`
  ADD PRIMARY KEY (`Cat_ID`);

--
-- Índices para tabela `tbl_combustivel`
--
ALTER TABLE `tbl_combustivel`
  ADD PRIMARY KEY (`Com_Id`);

--
-- Índices para tabela `tbl_concessionaria`
--
ALTER TABLE `tbl_concessionaria`
  ADD PRIMARY KEY (`Con_Id`);

--
-- Índices para tabela `tbl_cor`
--
ALTER TABLE `tbl_cor`
  ADD PRIMARY KEY (`Cor_Id`);

--
-- Índices para tabela `tbl_fotoveiculo`
--
ALTER TABLE `tbl_fotoveiculo`
  ADD PRIMARY KEY (`Fot_Id`,`tblVeiculo_Fot_Id`),
  ADD KEY `fk_tbl_FotoVeiculo_tblVeiculo1_idx` (`tblVeiculo_Fot_Id`);

--
-- Índices para tabela `tbl_marca`
--
ALTER TABLE `tbl_marca`
  ADD PRIMARY KEY (`Mar_Id`,`tbl_Tipo_Veiculo_tipo_id`),
  ADD KEY `fk_tbl_Marca_tbl_Tipo_Veiculo1_idx` (`tbl_Tipo_Veiculo_tipo_id`);

--
-- Índices para tabela `tbl_modelo`
--
ALTER TABLE `tbl_modelo`
  ADD PRIMARY KEY (`Mod_Id`,`fk_tbl_Marca_tbl_Modelo`),
  ADD KEY `fk_tbl_Modelo_tbl_Marca1_idx` (`fk_tbl_Marca_tbl_Modelo`);

--
-- Índices para tabela `tbl_tipo_veiculo`
--
ALTER TABLE `tbl_tipo_veiculo`
  ADD PRIMARY KEY (`Tipo_id`);

--
-- Índices para tabela `tbl_veiculo`
--
ALTER TABLE `tbl_veiculo`
  ADD PRIMARY KEY (`Vei_Id`,`tbl_Modelo_fk_tbl_Marca_tbl_Modelo`),
  ADD KEY `fk_tblVeiculo_tbl_Modelo1_idx` (`tbl_Modelo_fk_tbl_Marca_tbl_Modelo`),
  ADD KEY `fk_cor_veiculo` (`Vei_Cor`),
  ADD KEY `fk_combustivel_veiculo` (`Vei_Combustivel`),
  ADD KEY `fk_ano_veiculo` (`Vei_Ano`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbl_acessorios`
--
ALTER TABLE `tbl_acessorios`
  MODIFY `Aces_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `tbl_administrador`
--
ALTER TABLE `tbl_administrador`
  MODIFY `adm_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tbl_ano`
--
ALTER TABLE `tbl_ano`
  MODIFY `Ano_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tbl_carroceria`
--
ALTER TABLE `tbl_carroceria`
  MODIFY `Cat_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_combustivel`
--
ALTER TABLE `tbl_combustivel`
  MODIFY `Com_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tbl_concessionaria`
--
ALTER TABLE `tbl_concessionaria`
  MODIFY `Con_Id` bigint(14) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_cor`
--
ALTER TABLE `tbl_cor`
  MODIFY `Cor_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tbl_fotoveiculo`
--
ALTER TABLE `tbl_fotoveiculo`
  MODIFY `Fot_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `tbl_marca`
--
ALTER TABLE `tbl_marca`
  MODIFY `Mar_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbl_modelo`
--
ALTER TABLE `tbl_modelo`
  MODIFY `Mod_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbl_tipo_veiculo`
--
ALTER TABLE `tbl_tipo_veiculo`
  MODIFY `Tipo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `tbl_veiculo`
--
ALTER TABLE `tbl_veiculo`
  MODIFY `Vei_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbl_acessorios`
--
ALTER TABLE `tbl_acessorios`
  ADD CONSTRAINT `fk_tbl_Acessorios_tbl_Tipo_Veiculo1` FOREIGN KEY (`tbl_Tipo_Veiculo_tipo_id`) REFERENCES `tbl_tipo_veiculo` (`Tipo_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tbl_fotoveiculo`
--
ALTER TABLE `tbl_fotoveiculo`
  ADD CONSTRAINT `fk_tbl_FotoVeiculo_tblVeiculo1` FOREIGN KEY (`tblVeiculo_Fot_Id`) REFERENCES `tbl_veiculo` (`Vei_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tbl_marca`
--
ALTER TABLE `tbl_marca`
  ADD CONSTRAINT `fk_tbl_Marca_tbl_Tipo_Veiculo1` FOREIGN KEY (`tbl_Tipo_Veiculo_tipo_id`) REFERENCES `tbl_tipo_veiculo` (`Tipo_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tbl_modelo`
--
ALTER TABLE `tbl_modelo`
  ADD CONSTRAINT `fk_tbl_Modelo_tbl_Marca1` FOREIGN KEY (`fk_tbl_Marca_tbl_Modelo`) REFERENCES `tbl_marca` (`Mar_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tbl_veiculo`
--
ALTER TABLE `tbl_veiculo`
  ADD CONSTRAINT `fk_ano_veiculo` FOREIGN KEY (`Vei_Ano`) REFERENCES `tbl_ano` (`Ano_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_combustivel_veiculo` FOREIGN KEY (`Vei_Combustivel`) REFERENCES `tbl_combustivel` (`Com_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cor_veiculo` FOREIGN KEY (`Vei_Cor`) REFERENCES `tbl_cor` (`Cor_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tblVeiculo_tbl_Modelo1` FOREIGN KEY (`tbl_Modelo_fk_tbl_Marca_tbl_Modelo`) REFERENCES `tbl_modelo` (`fk_tbl_Marca_tbl_Modelo`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
