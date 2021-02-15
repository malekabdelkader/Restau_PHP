-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 15 juin 2020 à 21:03
-- Version du serveur :  8.0.20
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `restaurant`
--

-- --------------------------------------------------------

--
-- Structure de la table `boisson`
--

DROP TABLE IF EXISTS `boisson`;
CREATE TABLE IF NOT EXISTS `boisson` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cle` int NOT NULL,
  `nom` varchar(10) NOT NULL,
  `qte` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4    ;

-- --------------------------------------------------------

--
-- Structure de la table `burger`
--

DROP TABLE IF EXISTS `burger`;
CREATE TABLE IF NOT EXISTS `burger` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cle` int NOT NULL,
  `nom` varchar(10) NOT NULL,
  `qte` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4    ;

-- --------------------------------------------------------

--
-- Structure de la table `cafe`
--

DROP TABLE IF EXISTS `cafe`;
CREATE TABLE IF NOT EXISTS `cafe` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cle` int NOT NULL,
  `nom` varchar(10) NOT NULL,
  `qte` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4    ;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom_prenom` varchar(30) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `telephone2` varchar(10) NOT NULL,
  `adresse` varchar(30) NOT NULL,
  `ville` varchar(10) NOT NULL,
  `cle` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4    ;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `nom_prenom`, `telephone`, `telephone2`, `adresse`, `ville`, `cle`) VALUES
(28, 'Abdelkader malek', '28437349', '21185110', 'avenue ibnou khaldoun , 6041', 'Tunis', ''),
(31, 'Abdelkader malek', '28437349', '28437349', 'avenue ibnou khaldoun , 6041', 'Tunis', '10675');

-- --------------------------------------------------------

--
-- Structure de la table `jus`
--

DROP TABLE IF EXISTS `jus`;
CREATE TABLE IF NOT EXISTS `jus` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cle` int NOT NULL,
  `nom` varchar(30)  NOT NULL,
  `qte` varchar(30)  NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4    ;

--
-- Déchargement des données de la table `jus`
--

INSERT INTO `jus` (`id`, `cle`, `nom`, `qte`) VALUES
(9, 10675, 'Citronnade', '2');

-- --------------------------------------------------------

--
-- Structure de la table `messagerie`
--

DROP TABLE IF EXISTS `messagerie`;
CREATE TABLE IF NOT EXISTS `messagerie` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `text` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4    ;

--
-- Déchargement des données de la table `messagerie`
--

INSERT INTO `messagerie` (`id`, `email`, `text`) VALUES
(6, 'saif29abdelkader@hotmail.com', 'efgqerhrthsrtj'),
(8, 'malekabdelkader2@gmail.com', 'wdngnxfg,xf,x');

-- --------------------------------------------------------

--
-- Structure de la table `pizza`
--

DROP TABLE IF EXISTS `pizza`;
CREATE TABLE IF NOT EXISTS `pizza` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cle` int NOT NULL,
  `nom` varchar(30) NOT NULL,
  `qte` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4    ;

--
-- Déchargement des données de la table `pizza`
--

INSERT INTO `pizza` (`id`, `cle`, `nom`, `qte`) VALUES
(41, 10675, 'Caprapiquante', '1');

-- --------------------------------------------------------

--
-- Structure de la table `salade`
--

DROP TABLE IF EXISTS `salade`;
CREATE TABLE IF NOT EXISTS `salade` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cle` int NOT NULL,
  `nom` varchar(30)      NOT NULL,
  `qte` varchar(30)      NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4    ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
