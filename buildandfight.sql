-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 24 fév. 2023 à 06:22
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `buildandfight`
--

-- --------------------------------------------------------

--
-- Structure de la table `batimentproductionplayer`
--

DROP TABLE IF EXISTS `batimentproductionplayer`;
CREATE TABLE IF NOT EXISTS `batimentproductionplayer` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idBatiment` int NOT NULL,
  `nombresBat` int NOT NULL DEFAULT '0',
  `nombresOuvrier` int NOT NULL DEFAULT '0',
  `id_player` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `batimentproductionplayer`
--

INSERT INTO `batimentproductionplayer` (`id`, `idBatiment`, `nombresBat`, `nombresOuvrier`, `id_player`) VALUES
(1, 1, 10, 10, 1),
(2, 2, 15, 15, 1),
(3, 3, 20, 20, 1),
(4, 4, 25, 25, 1),
(5, 1, 1, 0, 5),
(6, 1, 1, 0, 6),
(7, 4, 1, 0, 6),
(8, 2, 0, 0, 6),
(9, 3, 10, 0, 6);

-- --------------------------------------------------------

--
-- Structure de la table `batiments_prod`
--

DROP TABLE IF EXISTS `batiments_prod`;
CREATE TABLE IF NOT EXISTS `batiments_prod` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `productionBat` int NOT NULL,
  `terrain` int NOT NULL,
  `productionOuvrier` int NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `batiments_prod`
--

INSERT INTO `batiments_prod` (`id`, `nom`, `productionBat`, `terrain`, `productionOuvrier`, `description`) VALUES
(1, 'mine d\'or', 2000, 21, 150, 'rr'),
(2, 'puit de petrol ', 2500, 30, 180, 'rr'),
(3, 'mines de berium', 2000, 28, 150, 'rr'),
(4, 'central electrique ', 500, 30, 15, 'rr'),
(5, 'raffinerie diesel', 2000, 30, 150, 'raffinerie diesel'),
(6, 'raffinerie sp95', 2500, 30, 180, 'raffinerie sp95'),
(7, 'raffinerie sp98', 2000, 30, 150, 'raffinerie sp98'),
(8, 'taitement uranium', 2000, 30, 150, 'taitement uranium'),
(9, 'taitement plutonium', 20, 30, 180, 'taitement plutonium');

-- --------------------------------------------------------

--
-- Structure de la table `bat_guerre`
--

DROP TABLE IF EXISTS `bat_guerre`;
CREATE TABLE IF NOT EXISTS `bat_guerre` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` int NOT NULL,
  `terrain` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `bat_guerre_player`
--

DROP TABLE IF EXISTS `bat_guerre_player`;
CREATE TABLE IF NOT EXISTS `bat_guerre_player` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_player` int NOT NULL,
  `caserne` int NOT NULL DEFAULT '0',
  `dortoir` int NOT NULL DEFAULT '0',
  `usineDeGuerre` int NOT NULL DEFAULT '0',
  `hangar` int NOT NULL DEFAULT '0',
  `aeropor` int NOT NULL DEFAULT '0',
  `pilbox` int NOT NULL DEFAULT '0',
  `tourelleCanon` int NOT NULL DEFAULT '0',
  `tourelleCanonDouble` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ressource_player`
--

DROP TABLE IF EXISTS `ressource_player`;
CREATE TABLE IF NOT EXISTS `ressource_player` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_player` int NOT NULL,
  `or` int NOT NULL DEFAULT '15000',
  `petrol` int NOT NULL DEFAULT '15000',
  `cuisine` int NOT NULL DEFAULT '15000',
  `electriciter` int NOT NULL DEFAULT '0',
  `plutonium` int NOT NULL DEFAULT '0',
  `berium` int NOT NULL DEFAULT '0',
  `uranium` int NOT NULL DEFAULT '0',
  `diesel` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `ressource_player`
--

INSERT INTO `ressource_player` (`id`, `id_player`, `or`, `petrol`, `cuisine`, `electriciter`, `plutonium`, `berium`, `uranium`, `diesel`) VALUES
(1, 1, 15000, 15000, 15000, 15000, 15000, 15000, 15000, 15000),
(2, 3, 15000, 15000, 15000, 0, 0, 0, 0, 0),
(4, 0, 15000, 15000, 15000, 0, 0, 0, 0, 0),
(5, 0, 15000, 15000, 15000, 0, 0, 0, 0, 0),
(6, 0, 15000, 15000, 15000, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mdp` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_derniere_co` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `nom`, `prenom`, `mdp`, `date`, `date_derniere_co`) VALUES
(1, 'florian', 'floo', 'florian', '$2y$10$Ukw/I3DqUTcVagONNVdbceGOpD8PPh2se62vuq3kW1cXkjDztSsue', '2023-02-22 17:54:14', 1677165540),
(2, 'gg', 'gg', 'gg', '$2y$10$sUuDUlilhlt4QKhPNkdzHeh6Rw2awHhZhcCGhklGXHl5tBp9kM2KS', '2023-02-22 17:54:26', 2147483647),
(3, 'florianpsp30', 'florianpsp30', 'florianpsp30', '$2y$10$j.xHG2MU0a/lhWORA0CSjuuuLw/sUnys9RTTKNY9xUAJeJMNFQwlC', '2023-02-23 12:35:22', 1677165664),
(4, 'fdsfsd', 'fdsfsd', 'fdsfsd', '$2y$10$K2//7X4a9FashXxlYL0ljeefzkAsIWf2VTMkKvSbszMVPm0lyFwJO', '2023-02-23 13:06:42', 0),
(5, 'sqz', 'sqz', 'sqz', '$2y$10$hG8btM0nxJjVJ6.c.yWPzeQQgWiF9hUeDgqqz9ZW2FxY.5F77iRh6', '2023-02-23 13:08:10', 0),
(6, '/sig', '/sig', '/sig', '$2y$10$nrPA941dQCyv/4dgFHF3euFolu2HSK8uA5Lz8OtmHvpujpFVG2ob2', '2023-02-23 13:16:42', 0),
(7, '', '', '', '', '2023-02-23 15:04:44', 0),
(8, '', '', '', '', '2023-02-23 15:04:45', 0),
(9, '', '', '', '', '2023-02-23 15:04:51', 0),
(10, '', '', '', '', '2023-02-23 15:05:13', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
