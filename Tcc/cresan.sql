-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24-Out-2023 às 16:31
-- Versão do servidor: 5.6.15-log
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cresan`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `kits`
--

CREATE TABLE IF NOT EXISTS `kits` (
  `bolo_de_corte` varchar(100) NOT NULL,
  `docinhos` varchar(100) NOT NULL,
  `salgadinhos` varchar(100) NOT NULL,
  `lanches` varchar(100) NOT NULL,
  `geladinhos` varchar(100) NOT NULL,
  `bebidas` varchar(100) NOT NULL,
  `funcionarios` varchar(100) NOT NULL,
  `n_pessoas` varchar(100) NOT NULL,
  PRIMARY KEY (`n_pessoas`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `kits`
--

INSERT INTO `kits` (`bolo_de_corte`, `docinhos`, `salgadinhos`, `lanches`, `geladinhos`, `bebidas`, `funcionarios`, `n_pessoas`) VALUES
('chocolate pra 100', '60', '200', '150', '50', '150', '1 copeira e 1 garÃ§on', '75'),
('morango pra 100', '80', '350', '300', '100', '300', '1 copeira e 2 garÃ§ons', '100'),
('chocolate pra 100', '90', '400', '350', '150', 'coca, guaranÃ¡, suco de uva e manga', '1 copeira e 2 garÃ§ons', '150'),
('', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  PRIMARY KEY (`usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`usuario`, `senha`) VALUES
('', ''),
('leleo', 'cresan123'),
('cabinho', 'fla'),
('braga', '666');

-- --------------------------------------------------------

--
-- Estrutura da tabela `loginclientes`
--

CREATE TABLE IF NOT EXISTS `loginclientes` (
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `cpf` char(11) NOT NULL,
  PRIMARY KEY (`cpf`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `loginclientes`
--

INSERT INTO `loginclientes` (`nome`, `email`, `telefone`, `senha`, `cpf`) VALUES
('root', 'fhghghfghg', '66666666', '', '99999999'),
('root', 'fariasmc@gmail.com', '981295837', '', '12345678900'),
('root', 'hkjliukluuy', '666', '', '1111111'),
('braga feia', 'jlkujydhrhrh', '222222', '', '333333'),
('leo', 'leofariasmc@gmail.com', '21981295837', '', '11111111111'),
('cabo otario', 'pbvittar@gmail.com', '9986768974', 'vacilao', '7171717171'),
('', '', '', '', ''),
('leo', 'leofariasmc@gmail.com', '1111111111', 'fla', '11111111'),
('gabigol', 'idoloeterno10@gmail.com', '1010109999', 'palmeirasmeufilho', '12345678910'),
('bruno henrique', 'reidosclasicos27@gmail.com', '2727272727', 'botafogomeufilho', '27272727272'),
('julia', 'juliachata@gmail.com', '666', 'meiobixa', '666'),
('bruna', 'hfvgdkfhb jhfvb', '666669', 'brubru', '6669'),
('marcinho', 'marcinho@gmail.com', '44444444444', 'tapiocas', '44444444444'),
('leo', 'fariasmc@.com', '981295837', 'fla', 'ghyjyjyjy'),
('da20', 'gado123@gmail.com', '21981285936', 'senha', '12345678911'),
('Erick', 'erickvieira.rjmg@gmail.com', '21982929778', 'flamengo', '18931208723'),
('leo', 'marcinho@gmail.com1', '999999999', 'uiui', '9999999999'),
('juju', 'jujudengosafgfb', '0000000000', 'dengosa', '00000000000'),
('kekel', 'kekelmendonca', '1010101010', '1000', '10101010101'),
('luiz', 'luizcomunista', '66666666666', '111111111116', '66666666666');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE IF NOT EXISTS `pedidos` (
  `n°do_pedido` int(11) NOT NULL AUTO_INCREMENT,
  `cpf` char(11) NOT NULL,
  `tema` varchar(100) NOT NULL,
  `kit` varchar(100) NOT NULL,
  `equipe` varchar(200) NOT NULL,
  `local` varchar(200) NOT NULL,
  PRIMARY KEY (`n°do_pedido`),
  FULLTEXT KEY `cpf` (`cpf`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`n°do_pedido`, `cpf`, `tema`, `kit`, `equipe`, `local`) VALUES
(1, '', 'Flamengo', 'KIT 1', '1 garÃ§om e 1 copeira', 'Shopping Carioca'),
(2, '', 'Flamengo', 'KIT 1', '2 garÃ§ons e 1 copeira', 'Shopping Carioca'),
(3, '', 'Flamengo', 'KIT 2', '1 garÃ§om e 1 copeira', 'Shopping Nova America'),
(4, '', 'Flamengo', 'KIT 3', '2 garÃ§ons e 1 copeira', 'Shopping Carioca'),
(5, '', 'Flamengo', 'KIT 3', '2 garÃ§ons e 1 copeira', 'Shopping Carioca'),
(6, '', 'Flamengo', 'KIT 3', '2 garÃ§ons e 1 copeira', 'Shopping Carioca'),
(7, '', 'Flamengo', 'KIT 1', 'Nenhum', 'Shopping Carioca'),
(8, '', 'Flamengo', 'KIT 1', 'Nenhum', 'Shopping Carioca'),
(9, '', 'Flamengo', 'KIT 1', 'Nenhum', 'Shopping Carioca'),
(10, '', 'Flamengo', 'KIT 1', 'Nenhum', 'Shopping Carioca'),
(11, '', 'Flamengo', 'KIT 1', 'Nenhum', 'Shopping Carioca'),
(12, '', 'Flamengo', 'KIT 1', 'Nenhum', 'Shopping Carioca'),
(13, '', 'Flamengo', 'KIT 1', 'Nenhum', 'Shopping Carioca'),
(14, '', 'Flamengo', 'KIT 1', 'Nenhum', 'Shopping Carioca'),
(15, '', 'Flamengo', 'KIT 1', 'Nenhum', 'Shopping Carioca'),
(16, '', 'Flamengo', 'KIT 1', 'Nenhum', 'Shopping Carioca'),
(17, '', 'Flamengo', 'KIT 1', 'Nenhum', 'Shopping Carioca'),
(18, '', 'Flamengo', 'KIT 1', 'Nenhum', 'Shopping Carioca'),
(19, '', 'Flamengo', 'KIT 1', 'Nenhum', 'Shopping Carioca');

-- --------------------------------------------------------

--
-- Estrutura da tabela `temas`
--

CREATE TABLE IF NOT EXISTS `temas` (
  `nome_tema` varchar(100) NOT NULL,
  PRIMARY KEY (`nome_tema`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `temas`
--

INSERT INTO `temas` (`nome_tema`) VALUES
('flamengo');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
