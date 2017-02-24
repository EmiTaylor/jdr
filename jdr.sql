-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 24 Février 2017 à 12:23
-- Version du serveur :  5.7.17-0ubuntu0.16.04.1
-- Version de PHP :  7.0.13-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `jdr`
--

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

CREATE TABLE `classe` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `stats_base` smallint(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `classe`
--

INSERT INTO `classe` (`id`, `nom`, `stats_base`) VALUES
(1, 'guerrier', 1),
(2, 'paladin', 1),
(3, 'mage', 1),
(4, 'archer', 1),
(5, 'shaman', 1);

-- --------------------------------------------------------

--
-- Structure de la table `personnage`
--

CREATE TABLE `personnage` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `pa` tinyint(4) NOT NULL,
  `stats` smallint(5) UNSIGNED NOT NULL,
  `race` smallint(6) NOT NULL,
  `classe` smallint(6) NOT NULL,
  `user_id` mediumint(8) UNSIGNED NOT NULL,
  `sexe` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `personnage`
--

INSERT INTO `personnage` (`id`, `nom`, `pa`, `stats`, `race`, `classe`, `user_id`, `sexe`) VALUES
(1, 'h', 2, 1, 1, 1, 1, 1),
(2, 'jhf', 2, 1, 1, 4, 1, 1),
(3, 'jyf', 2, 1, 2, 2, 1, 1),
(4, 'dsdfs', 2, 1, 1, 1, 1, 1),
(5, 'jhg', 2, 1, 1, 2, 1, 1),
(6, 'ooo', 2, 1, 1, 4, 1, 1),
(7, 'vv', 2, 1, 1, 1, 1, 1),
(8, 'ssz', 2, 1, 1, 1, 1, 1),
(9, 'nbvc', 2, 1, 1, 1, 1, 1),
(10, 'w<x', 2, 1, 3, 2, 1, 1),
(11, 'erth', 2, 1, 2, 1, 1, 1),
(12, 'ert', 2, 1, 1, 1, 1, 1),
(13, 'ccc', 2, 1, 1, 2, 1, 1),
(14, 'cccccc', 2, 1, 2, 1, 1, 1),
(15, 'sas', 2, 1, 2, 3, 1, 1),
(16, 'cvv', 2, 1, 3, 1, 1, 1),
(17, 'cvbbn', 2, 1, 3, 1, 1, 1),
(18, 'vccccc', 2, 1, 2, 2, 1, 1),
(19, 'kjhg', 2, 1, 1, 2, 1, 1),
(20, 'ffff', 2, 1, 2, 2, 1, 1),
(21, 'emi', 2, 1, 2, 2, 1, 1),
(22, 'lll', 2, 1, 2, 2, 1, 1),
(23, 'regt thvh', 2, 1, 1, 3, 1, 1),
(24, 'oiuihn', 2, 1, 2, 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `race`
--

CREATE TABLE `race` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `stats_base` smallint(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `race`
--

INSERT INTO `race` (`id`, `nom`, `stats_base`) VALUES
(1, 'humain', 1),
(2, 'nain', 1),
(3, 'elfes', 1),
(4, 'orc', 1),
(5, 'gobelin', 1);

-- --------------------------------------------------------

--
-- Structure de la table `stats_base`
--

CREATE TABLE `stats_base` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `pv` smallint(3) NOT NULL,
  `mov` smallint(2) NOT NULL,
  `att` smallint(2) NOT NULL,
  `def` float UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `stats_base`
--

INSERT INTO `stats_base` (`id`, `pv`, `mov`, `att`, `def`) VALUES
(1, 100, 2, 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `stats_courant`
--

CREATE TABLE `stats_courant` (
  `id` int(10) UNSIGNED NOT NULL,
  `pv` smallint(255) NOT NULL,
  `mov` smallint(6) NOT NULL,
  `att` smallint(6) NOT NULL,
  `def` float NOT NULL,
  `id_perso` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `mail` varchar(255) NOT NULL,
  `pseudo` varchar(40) NOT NULL,
  `password` varchar(60) NOT NULL,
  `last_log` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `mail`, `pseudo`, `password`, `last_log`) VALUES
(1, 'root', '', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', 1487931957);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `classe`
--
ALTER TABLE `classe`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `personnage`
--
ALTER TABLE `personnage`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `race`
--
ALTER TABLE `race`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `stats_base`
--
ALTER TABLE `stats_base`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `stats_courant`
--
ALTER TABLE `stats_courant`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `classe`
--
ALTER TABLE `classe`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `personnage`
--
ALTER TABLE `personnage`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT pour la table `race`
--
ALTER TABLE `race`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `stats_base`
--
ALTER TABLE `stats_base`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `stats_courant`
--
ALTER TABLE `stats_courant`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
