-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19-Out-2017 às 02:05
-- Versão do servidor: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maison`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `gerente`
--
create database maison;
use maison;

CREATE TABLE `gerente` (
  `idgerente` int(11) NOT NULL,
  `login` varchar(45) NOT NULL,
  `adm` varchar(80) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `gerente`
--

INSERT INTO `gerente` (`idgerente`, `login`, `adm`, `senha`) VALUES
(25, 'abel', 'Abel Cabral Arruda', 'soQbW5Z0L3Vak'),
(29, 'maison', 'Maison Chic Coiffer', 'soQbW5Z0L3Vak'),
(30, 'wagne', 'Wagner Dos Santo Strondemberg', 'soQbW5Z0L3Vak');

-- --------------------------------------------------------

--
-- Estrutura da tabela `img`
--

CREATE TABLE `img` (
  `idimg` int(11) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `img`
--

INSERT INTO `img` (`idimg`, `url`) VALUES
(1, 'https://vignette3.wikia.nocookie.net/theamazingworldofgumball/images/3/3b/The-amazing-world-of-gumball-10.jpg/revision/latest?cb=20110818024934'),
(2, 'http://www.syfy.com/sites/syfy/files/wire/legacy/wonderwomanmovie.jpg'),
(3, 'https://www.w3.org/html/logo/downloads/HTML5_sticker.png'),
(4, 'http://www.desenvolveti.com.br/blog/wp-content/uploads/2017/02/Curso-de-PHP-Mais-Completo-do-Brasil-FA%C3%87A-O-DOWNLOAD-AQUI.png'),
(5, 'http://fernandoportugal.com/wp-content/uploads/2017/09/python.png'),
(6, 'http://www.slate.com/content/dam/slate/blogs/future_tense/2015/07/13/java_zero_day_exploit_used_by_pawn_storm_discovered_by_trend_micro/javareal.jpg.CROP.promo-xlarge2.jpg'),
(7, ''),
(8, ''),
(9, ''),
(10, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `txt`
--

CREATE TABLE `txt` (
  `idtxt` int(11) NOT NULL,
  `txt` varchar(4000) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Aqui é onde vamos inserir os textos';

--
-- Extraindo dados da tabela `txt`
--

INSERT INTO `txt` (`idtxt`, `txt`) VALUES
(1, 'Recebi, filhinho.'),
(2, 'Eu também.'),
(3, 'Agora foi.'),
(4, 'Versão 3.2'),
(5, ''),
(6, ''),
(7, ''),
(8, ''),
(9, ''),
(10, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gerente`
--
ALTER TABLE `gerente`
  ADD PRIMARY KEY (`idgerente`);

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`idimg`);

--
-- Indexes for table `txt`
--
ALTER TABLE `txt`
  ADD PRIMARY KEY (`idtxt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gerente`
--
ALTER TABLE `gerente`
  MODIFY `idgerente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `idimg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `txt`
--
ALTER TABLE `txt`
  MODIFY `idtxt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
