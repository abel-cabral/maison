-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24-Out-2017 às 07:47
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
-- Estrutura da tabela `txt`
--
CREATE DATABASE MAISON;
USE MAISON;
CREATE TABLE `txt` (
  `idtxt` int(11) NOT NULL,
  `txt` varchar(3000) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Aqui é onde vamos inserir os textos';

--
-- Extraindo dados da tabela `txt`
--

INSERT INTO `txt` (`idtxt`, `txt`) VALUES
(1, 'Você Merece Muito, Você Merece Maison Chic'),
(2, 'Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Duis Ut Neque Ut Sapien Varius Malesuada. Nulla Sodales Dui Ac Hendrerit Suscipit. Proin Tristique Aliquam Ligula, Sit Amet Maximus Leo Rutrum Ut. Ut Ultrices Elit Eu Mattis Facilisis. Cras Tristique, Est Quis Rhoncus Pharetra, Sem Augue Scelerisque Nisi, Non Mollis Urna Tellus Accumsan Ante. Donec Mattis Eros Libero, Eget Posuere Tortor Pulvinar Sit Amet. Maecenas Tortor Arcu, Viverra Ac Sem Elementum, Blandit Ultrices Nibh.\r\n<br><br><br>\r\n<p>Integer Luctus Nunc Quis Accumsan Fermentum. Duis Nec Massa A Ligula Dignissim Egestas Auctor Pharetra Purus. Aenean Gravida Eget Libero Nec Ullamcorper. Duis Tellus Mi, Molestie Eget Sem Sit Amet, Ultricies Tincidunt Est. Etiam A Efficitur Odio. Nullam Pellentesque Vulputate Efficitur. Sed Et Felis Bibendum, Scelerisque Arcu Vitae, Luctus Elit. Vivamus A Venenatis Ligula, Eget Cursus Arcu. Nulla Aliquam, Nisl Ac Tempus Consequat, Purus Dolor Rutrum Tortor, Pellentesque Facilisis Quam Massa Non Ipsum. Nullam Cursus Volutpat Erat, A Pharetra Ex Ultrices At. Donec Accumsan Bibendum Porta. Praesent Ac Facilisis Lectus, Id Condimentum Dui. In Hac Habitasse Platea Dictumst.</p>\r\n'),
(3, 'Me sinto muito realizada, quando vejo uma noiva saindo com tudo que eu tive a capacidade de escolher para atender ao bom gosto dela. Qualidade, equipe e treinamento focando sempre no cliente'),
(4, 'Seja Um Dos Clientes Mais Satisfeitos Do Brasil'),
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
-- Indexes for table `txt`
--
ALTER TABLE `txt`
  ADD PRIMARY KEY (`idtxt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `txt`
--
ALTER TABLE `txt`
  MODIFY `idtxt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
