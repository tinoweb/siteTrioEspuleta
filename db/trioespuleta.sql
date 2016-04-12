-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 12, 2016 at 06:45 PM
-- Server version: 5.5.47-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `trioespuleta`
--

-- --------------------------------------------------------

--
-- Table structure for table `compras`
--

CREATE TABLE IF NOT EXISTS `compras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `teleffone` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `compras`
--

INSERT INTO `compras` (`id`, `nome`, `email`, `endereco`, `teleffone`) VALUES
(23, 'Albertino gomes dos reis de carvalho', 'tino477@gmail.com', 'rua 5 casa 77 -Cidade univeristario - Engenheiro Coelho', 971259603),
(24, 'Albertino gomes dos reis de carvalho', 'tino477@gmail.com', 'rua 5 casa 77 -Cidade univeristario - Engenheiro Coelho', 971259603),
(25, 'Wanderley Gazeta', 'tino477@gmail.com', 'Alameda dos Flamingos.207 - Portal do Lago', 2147483647),
(26, 'Wanderley Gazeta', 'tino477@gmail.com', 'Alameda dos Flamingos.207 - Portal do Lago', 2147483647),
(27, 'Albertino gomes dos reis de carvalho', 'tino477@gmail.com', 'rua 5 casa 77 -Cidade univeristario - Engenheiro Coelho', 971259603),
(28, 'Albertino gomes dos reis de carvalho', 'tino477@gmail.com', 'rua 5 casa 77 -Cidade univeristario - Engenheiro Coelho', 971259603),
(29, 'Wanderley Gazeta', 'tino477@gmail.com', 'Alameda dos Flamingos.207 - Portal do Lago', 2147483647),
(30, 'Wanderley Gazeta', 'tino477@gmail.com', 'Alameda dos Flamingos.207 - Portal do Lago', 2147483647),
(31, 'Albertino gomes dos reis de carvalho', 'tino477@gmail.com', 'rua 5 casa 77 -Cidade univeristario - Engenheiro Coelho', 971259603),
(32, 'Albertino gomes dos reis de carvalho', 'tino477@gmail.com', 'rua 5 casa 77 -Cidade univeristario - Engenheiro Coelho', 971259603);

-- --------------------------------------------------------

--
-- Table structure for table `livros`
--

CREATE TABLE IF NOT EXISTS `livros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` int(11) NOT NULL,
  `descricao` int(11) NOT NULL,
  `valor_venda` float NOT NULL,
  `num_pag` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ID` mediumint(9) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `password`) VALUES
(1, 'tino477@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
