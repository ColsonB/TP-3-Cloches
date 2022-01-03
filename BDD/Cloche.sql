-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 03 jan. 2022 à 15:22
-- Version du serveur : 10.3.31-MariaDB-0+deb10u1
-- Version de PHP : 7.3.29-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `Cloche`
--

-- --------------------------------------------------------

--
-- Structure de la table `HistoCloche`
--

CREATE TABLE `HistoCloche` (
  `id` int(11) NOT NULL,
  `User` int(11) NOT NULL,
  `Date` datetime NOT NULL,
  `Cloche` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `HistoCloche`
--

INSERT INTO `HistoCloche` (`id`, `User`, `Date`, `Cloche`) VALUES
(837, 20, '2022-01-03 15:00:54', 2),
(838, 20, '2022-01-03 15:21:29', 2);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `Nom` text NOT NULL,
  `Mdp` text NOT NULL,
  `status` int(11) NOT NULL,
  `Admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`idUser`, `Nom`, `Mdp`, `status`, `Admin`) VALUES
(13, 'admin', '4813494d137e1631bba301d5acab6e7bb7aa74ce1185d456565ef51d737677b2', 0, 1),
(20, 'lucas', '9e4067ac93c6febda554d724d453d78bf3e28a7742cdec57ee47c5c706fbe940', 1, 1),
(21, 'greg', '0d2c690e7dd5f94780383e9dfa1f4def044319104ad16ab15e45eeb2a8dfc81b', 1, 1),
(23, 'Goku', '7a2ec40ff8a1247c532309355f798a779e00acff579c63eec3636ffb2902c1ac', 0, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `HistoCloche`
--
ALTER TABLE `HistoCloche`
  ADD PRIMARY KEY (`id`),
  ADD KEY `User` (`User`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `HistoCloche`
--
ALTER TABLE `HistoCloche`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=839;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `HistoCloche`
--
ALTER TABLE `HistoCloche`
  ADD CONSTRAINT `HistoCloche_ibfk_1` FOREIGN KEY (`User`) REFERENCES `user` (`idUser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
