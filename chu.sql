-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 27 juin 2022 à 14:20
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `chu`
--

-- --------------------------------------------------------

--
-- Structure de la table `autre_materiels`
--

DROP TABLE IF EXISTS `autre_materiels`;
CREATE TABLE IF NOT EXISTS `autre_materiels` (
  `AUTRE_TYPES` varchar(38) DEFAULT NULL,
  `AUTRE_TYPES_Quantite` int DEFAULT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `autre_materiels`
--

INSERT INTO `autre_materiels` (`AUTRE_TYPES`, `AUTRE_TYPES_Quantite`, `id`) VALUES
('Rampes', 688, 1),
('Inflateurs', 40, 2),
('Asahi Corsair Microcatheter CSW150-26N', 20, 3),
('Asahi Corsair Microcatheter 135', 9, 4),
('cathéter d’extension GUIDEZILLA II 6F', 12, 5),
('SONDE 6F DE THROMBOASPIRATION', 2, 6);

-- --------------------------------------------------------

--
-- Structure de la table `guides`
--

DROP TABLE IF EXISTS `guides`;
CREATE TABLE IF NOT EXISTS `guides` (
  `GUIDES` varchar(12) DEFAULT NULL,
  `GUIDES_TYPES` varchar(18) DEFAULT NULL,
  `GUIDES_Quantite` int DEFAULT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `guides`
--

INSERT INTO `guides` (`GUIDES`, `GUIDES_TYPES`, `GUIDES_Quantite`, `id`) VALUES
('GUIDES 0.035', 'normal', 4, 1),
('GUIDES 0.035', 'hydrophile', 420, 2),
('GUIDES 0.035', 'hydrophile zipwire', 150, 3),
('Guides 0.014', 'Sion blue', 50, 4),
('Guides 0.014', 'pilote 50', 0, 5),
('Guides 0.014', 'pilote 150', 7, 6),
('Guides 0.014', 'pt2', 7, 7),
('Guides 0.014', 'sion black', 24, 8),
('Guides 0.014', 'fielder XTR-A', 33, 9),
('Guides 0.014', 'fielder XTR-R', 13, 10),
('Guides 0.014', 'GAIA third', 50, 11),
('Guides 0.014', 'Hornet 14', NULL, 12),
('Guides 0.014', 'Conquest pro', 10, 13),
('Guides 0.014', 'RG3', 30, 14);

-- --------------------------------------------------------

--
-- Structure de la table `introducteurs`
--

DROP TABLE IF EXISTS `introducteurs`;
CREATE TABLE IF NOT EXISTS `introducteurs` (
  `Introducteurs_TYPES` varchar(23) DEFAULT NULL,
  `Introducteurs_Quantite` int DEFAULT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `introducteurs`
--

INSERT INTO `introducteurs` (`Introducteurs_TYPES`, `Introducteurs_Quantite`, `id`) VALUES
('INTRODUCTEUR 7F', 34, 1),
('INTRODUCTEUR 5F RADIAL', 661, 2),
('INTRODUCTEUR 5F FEMORAL', 286, 3),
('INTRODUCTEUR 6F RADIAL', 152, 4),
('INTRODUCTEUR 6F FEMORAL', 214, 5);

-- --------------------------------------------------------

--
-- Structure de la table `pm`
--

DROP TABLE IF EXISTS `pm`;
CREATE TABLE IF NOT EXISTS `pm` (
  `PM_TYPES` varchar(23) DEFAULT NULL,
  `PM_Quantite` int DEFAULT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pm`
--

INSERT INTO `pm` (`PM_TYPES`, `PM_Quantite`, `id`) VALUES
('PM MONOCHAMBRE', 0, 1),
('PM DOUBLE CHAMBRE', 13, 2),
('SONDES VENTRICULAIRE', 14, 3),
('SONDES ATRIALE', 14, 4),
('INRODUCTEUR', 26, 5),
('fils de suture vicryl', NULL, 6),
('fil de suture mersuture', NULL, 7),
('fil de suture monocryl', NULL, 8),
('Sondes de stimulation', 59, 9);

-- --------------------------------------------------------

--
-- Structure de la table `sondes_5f`
--

DROP TABLE IF EXISTS `sondes_5f`;
CREATE TABLE IF NOT EXISTS `sondes_5f` (
  `S5F_TYPES` varchar(5) DEFAULT NULL,
  `S5F_Quantite` int DEFAULT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sondes_5f`
--

INSERT INTO `sondes_5f` (`S5F_TYPES`, `S5F_Quantite`, `id`) VALUES
('JR4', 12, 1),
('JL3.5', 365, 2),
('JR3.5', 69, 3),
('JL4', 743, 4),
('AR1', 53, 5),
('AR2', 21, 6),
('AL1', 395, 7),
('AL2', 66, 8),
('JR5', 8, 9),
('JL4.5', 10, 10),
('JL5', 30, 11),
('IM', 84, 12),
('LCB', 6, 13),
('RCB', 7, 14);

-- --------------------------------------------------------

--
-- Structure de la table `sondes_6f`
--

DROP TABLE IF EXISTS `sondes_6f`;
CREATE TABLE IF NOT EXISTS `sondes_6f` (
  `S6F_TYPES` varchar(7) DEFAULT NULL,
  `S6F_Quantite` int DEFAULT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sondes_6f`
--

INSERT INTO `sondes_6f` (`S6F_TYPES`, `S6F_Quantite`, `id`) VALUES
('JR4', 6, 1),
('EBU.5', 98, 2),
('JL3.5', 39, 3),
('JL4', 2, 4),
('AR1', 11, 5),
('AR2', 20, 6),
('AL1', 46, 7),
('AL2', 20, 8),
('AL0.75', 40, 9),
('EBU3', 25, 10),
('EBU3.75', 7, 11),
('jr3.5', 12, 12),
('EBU3', 25, 13);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
