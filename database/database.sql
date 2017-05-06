-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 06-Maio-2017 às 17:40
-- Versão do servidor: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teuremedio`
--
CREATE DATABASE IF NOT EXISTS `teuremedio` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `teuremedio`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblcategorias`
--

DROP TABLE IF EXISTS `tblcategorias`;
CREATE TABLE `tblcategorias` (
  `idtblCategorias` int(11) NOT NULL,
  `tblCategoriasNome` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblclientes`
--

DROP TABLE IF EXISTS `tblclientes`;
CREATE TABLE `tblclientes` (
  `idtblClientes` int(11) NOT NULL,
  `tblClientesNome` varchar(100) DEFAULT NULL,
  `tblClientesCnpj` varchar(11) DEFAULT NULL,
  `tblClientesRazao` varchar(45) DEFAULT NULL,
  `tblClientesEndereco` varchar(45) DEFAULT NULL,
  `tblClientesComplemento` varchar(45) DEFAULT NULL,
  `tblClientesCep` varchar(9) DEFAULT NULL,
  `tblClientesTelefone` varchar(13) DEFAULT NULL,
  `tblClientesWeb` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblprodutos`
--

DROP TABLE IF EXISTS `tblprodutos`;
CREATE TABLE `tblprodutos` (
  `idtblProdutos` int(11) NOT NULL,
  `tblProdutosNome` varchar(100) DEFAULT NULL,
  `tblProdutosLaboratorio` varchar(45) DEFAULT NULL,
  `tblCategorias_idtblCategorias` int(11) NOT NULL,
  `tblClientes_idtblClientes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblusuarios`
--

DROP TABLE IF EXISTS `tblusuarios`;
CREATE TABLE `tblusuarios` (
  `idtblUsuarios` int(11) NOT NULL,
  `tblUsuariosNome` varchar(100) DEFAULT NULL,
  `tblUsuariosEmail` varchar(45) DEFAULT NULL,
  `tblUsuariosSenha` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tblusuarios`
--

INSERT INTO `tblusuarios` (`idtblUsuarios`, `tblUsuariosNome`, `tblUsuariosEmail`, `tblUsuariosSenha`) VALUES
(6, 'Admin', 'admin@mail.com', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcategorias`
--
ALTER TABLE `tblcategorias`
  ADD PRIMARY KEY (`idtblCategorias`);

--
-- Indexes for table `tblclientes`
--
ALTER TABLE `tblclientes`
  ADD PRIMARY KEY (`idtblClientes`);

--
-- Indexes for table `tblprodutos`
--
ALTER TABLE `tblprodutos`
  ADD PRIMARY KEY (`idtblProdutos`),
  ADD KEY `fk_tblProdutos_tblCategorias_idx` (`tblCategorias_idtblCategorias`),
  ADD KEY `fk_tblProdutos_tblClientes1_idx` (`tblClientes_idtblClientes`);

--
-- Indexes for table `tblusuarios`
--
ALTER TABLE `tblusuarios`
  ADD PRIMARY KEY (`idtblUsuarios`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblcategorias`
--
ALTER TABLE `tblcategorias`
  MODIFY `idtblCategorias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tblclientes`
--
ALTER TABLE `tblclientes`
  MODIFY `idtblClientes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblprodutos`
--
ALTER TABLE `tblprodutos`
  MODIFY `idtblProdutos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tblusuarios`
--
ALTER TABLE `tblusuarios`
  MODIFY `idtblUsuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tblprodutos`
--
ALTER TABLE `tblprodutos`
  ADD CONSTRAINT `fk_tblProdutos_tblCategorias` FOREIGN KEY (`tblCategorias_idtblCategorias`) REFERENCES `tblcategorias` (`idtblCategorias`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tblProdutos_tblClientes1` FOREIGN KEY (`tblClientes_idtblClientes`) REFERENCES `tblclientes` (`idtblClientes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
