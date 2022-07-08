-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 08 juil. 2022 à 14:59
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.0

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

CREATE TABLE `autre_materiels` (
  `AUTRE_TYPES` varchar(38) DEFAULT NULL,
  `AUTRE_TYPES_Quantite` int(11) DEFAULT 0,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `autre_materiels`
--

INSERT INTO `autre_materiels` (`AUTRE_TYPES`, `AUTRE_TYPES_Quantite`, `id`) VALUES
('Rampes', 706, 1),
('Inflateurs', 60, 2),
('Asahi Corsair Microcatheter CSW150-26N', 41, 3),
('Asahi Corsair Microcatheter 135', 30, 4),
('cathéter d’extension GUIDEZILLA II 6F', 33, 5),
('SONDE 6F DE THROMBOASPIRATION', 21, 6);

-- --------------------------------------------------------

--
-- Structure de la table `guides`
--

CREATE TABLE `guides` (
  `GUIDES` varchar(12) DEFAULT NULL,
  `GUIDES_TYPES` varchar(18) DEFAULT NULL,
  `GUIDES_Quantite` int(11) DEFAULT 0,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `guides`
--

INSERT INTO `guides` (`GUIDES`, `GUIDES_TYPES`, `GUIDES_Quantite`, `id`) VALUES
('GUIDES 0.035', 'normal', 6, 1),
('GUIDES 0.035', 'hydrophile', 420, 2),
('GUIDES 0.035', 'hydrophile zipwire', 150, 3),
('Guides 0.014', 'Sion blue', 50, 4),
('Guides 0.014', 'pilote 50', 0, 5),
('Guides 0.014', 'pilote 150', 7, 6),
('Guides 0.014', 'pt2', 7, 7),
('Guides 0.014', 'sion black', 24, 8),
('Guides 0.014', 'fielder XTR-A', 31, 9),
('Guides 0.014', 'fielder XTR-R', 12, 10),
('Guides 0.014', 'GAIA third', 50, 11),
('Guides 0.014', 'Hornet 14', 0, 12),
('Guides 0.014', 'Conquest pro', 10, 13),
('Guides 0.014', 'RG3', 30, 14);

-- --------------------------------------------------------

--
-- Structure de la table `introducteurs`
--

CREATE TABLE `introducteurs` (
  `Introducteurs_TYPES` varchar(23) DEFAULT NULL,
  `Introducteurs_Quantite` int(11) DEFAULT 0,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `introducteurs`
--

INSERT INTO `introducteurs` (`Introducteurs_TYPES`, `Introducteurs_Quantite`, `id`) VALUES
('INTRODUCTEUR 7F', 31, 1),
('INTRODUCTEUR 5F RADIAL', 660, 2),
('INTRODUCTEUR 5F FEMORAL', 286, 3),
('INTRODUCTEUR 6F RADIAL', 152, 4),
('INTRODUCTEUR 6F FEMORAL', 213, 5);

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `pm`
--

CREATE TABLE `pm` (
  `PM_TYPES` varchar(23) DEFAULT NULL,
  `PM_Quantite` int(11) DEFAULT 0,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pm`
--

INSERT INTO `pm` (`PM_TYPES`, `PM_Quantite`, `id`) VALUES
('PM MONOCHAMBRE', 6, 1),
('PM DOUBLE CHAMBRE', 18, 2),
('SONDES VENTRICULAIRE', 19, 3),
('SONDES ATRIALE', 17, 4),
('INRODUCTEUR', 33, 5),
('fils de suture vicryl', 5, 6),
('fil de suture mersuture', 5, 7),
('fil de suture monocryl', 0, 8),
('Sondes de stimulation', 64, 9);

-- --------------------------------------------------------

--
-- Structure de la table `sondes_5f`
--

CREATE TABLE `sondes_5f` (
  `S5F_TYPES` varchar(5) DEFAULT NULL,
  `S5F_Quantite` int(11) DEFAULT 0,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sondes_5f`
--

INSERT INTO `sondes_5f` (`S5F_TYPES`, `S5F_Quantite`, `id`) VALUES
('JR4', 80, 1),
('JL3.5', 251, 2),
('JR3.5', 5, 3),
('JL4', 65, 4),
('AR1', 4, 5),
('AR2', 312, 6),
('AL1', 45, 7),
('AL2', 140, 8),
('JR5', 110, 9),
('JL4.5', 5, 10),
('JL5', 78, 11),
('IM', 4, 12),
('LCB', 4, 13),
('RCB', 3, 14);

-- --------------------------------------------------------

--
-- Structure de la table `sondes_6f`
--

CREATE TABLE `sondes_6f` (
  `S6F_TYPES` varchar(7) DEFAULT NULL,
  `S6F_Quantite` int(11) DEFAULT 0,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sondes_6f`
--

INSERT INTO `sondes_6f` (`S6F_TYPES`, `S6F_Quantite`, `id`) VALUES
('JR4', 8, 1),
('EBU.5', 102, 2),
('JL3.5', 44, 3),
('JL4', 12, 4),
('AR1', 16, 5),
('AR2', 24, 6),
('AL1', 51, 7),
('AL2', 25, 8),
('AL0.75', 45, 9),
('EBU3', 30, 10),
('EBU3.75', 12, 11),
('jr3.5', 17, 12),
('EBU3', 31, 13);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `autre_materiels`
--
ALTER TABLE `autre_materiels`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `guides`
--
ALTER TABLE `guides`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `introducteurs`
--
ALTER TABLE `introducteurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pm`
--
ALTER TABLE `pm`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sondes_5f`
--
ALTER TABLE `sondes_5f`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sondes_6f`
--
ALTER TABLE `sondes_6f`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `autre_materiels`
--
ALTER TABLE `autre_materiels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `guides`
--
ALTER TABLE `guides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `introducteurs`
--
ALTER TABLE `introducteurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `pm`
--
ALTER TABLE `pm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `sondes_5f`
--
ALTER TABLE `sondes_5f`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `sondes_6f`
--
ALTER TABLE `sondes_6f`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
