-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 26 fév. 2023 à 12:40
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
(1, 1, 20, 10, 1),
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
  `img` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `prix` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `batiments_prod`
--

INSERT INTO `batiments_prod` (`id`, `nom`, `productionBat`, `terrain`, `productionOuvrier`, `description`, `img`, `prix`) VALUES
(1, 'mine d\'or', 2000, 21, 150, 'La mine constitue un des piliers de votre empire. Prenez en soin. En effet c\'est elle qui financera vos constructions et vos campagnes. Plus vite votre richesse augmentera, plus vite votre puissance se développera. Alors n\'hésitez pas à en construire un maximum !\n\nAttention, le prix augmente à chaque fois qu\'on l\'on construit une nouvelle mine.', 'http://www.buildandfight.com/images/constructions/mine_or.jpg', 8000),
(10, 'Centrale Nucléaire', 11050, 198, 150, 'La centrale produit une énergie abondante pour ceux qui en ont besoin. Elle fonctionne à l\'Uranium, et se révèle beaucoup plus stable et moins polluante que les centrales thermiques.', 'http://www.buildandfight.com/images/constructions/centrale_nuc.jpg', 0),
(2, 'puit de petrol ', 2500, 30, 180, 'Véritable artère d\'un empire, le pétrole n\'est pas une ressource à négliger. En effet, plus vous développerez les technologies et plus vous vous rendrez compte que celui-ci est une denrée majeure. Servant à faire fonctionner les centrales comme les véhicules, il vous en faudra toujours plus. Alors n\'hésitez pas développer un maximum de puits.\n ', 'http://www.buildandfight.com/images/constructions/puit_petrole.jpg', 0),
(3, 'mines de berium', 2000, 28, 150, 'Le Berium est destiné à plusieurs utilisations. Exploitée pour concevoir les missiles nucléaires, cette ressource est donc considérée comme primordiale. C\'est à partir du Berium que l\'on forme le Plutonium et l\'Uranium. En effet, grâce à l\'usine de traitement du Berium, il vous sera possible de séparer cette ressource afin d\'en tirer un plus grand profit. De plus, le Berium constitue l\'essence même de la centrale nucléaire.\n ', 'http://www.buildandfight.com/images/constructions/mine_berium.jpg', 0),
(4, 'central electrique ', 500, 30, 15, 'En période de guerre, la centrale thermique est un des piliers de votre empire, fournissant de l\'électricité, nécessaire au bon fonctionnement de vos constructions. La centrale thermique fonctionne au pétrole brut. Il faudra donc veiller à ce qu\'elle soit correctement alimentée pour ne pas ralentir votre développement : construisez ainsi suffisamment de puits de pétrole afin de garantir son bon fonctionnement !\n ', 'http://www.buildandfight.com/images/constructions/centrale_ther.jpg', 0),
(5, 'raffinerie diesel', 2000, 30, 150, 'Utilisée à des fins de modification, la raffinerie transforme le pétrole en carburant plus performant comme le diesel, le SP95 et le SP98. Elle transforme le pétrole à la demande, mais attention, son rendement n\'est que de 90%, c\'est-à-dire qu\'avec 1000 unités de pétrole vous n?obtiendrez que 900 unités de carburant raffiné. Soyez précis dans vos calculs et gardez du pétrole pour vos centrales thermiques qui ne fonctionnent pas avec d?autres carburants !', 'http://www.buildandfight.com/images/constructions/rafinerie.jpg', 0),
(6, 'raffinerie sp95', 2500, 30, 180, 'Utilisée à des fins de modification, la raffinerie transforme le pétrole en carburant plus performant comme le diesel, le SP95 et le SP98. Elle transforme le pétrole à la demande, mais attention, son rendement n\'est que de 90%, c\'est-à-dire qu\'avec 1000 unités de pétrole vous n?obtiendrez que 900 unités de carburant raffiné. Soyez précis dans vos calculs et gardez du pétrole pour vos centrales thermiques qui ne fonctionnent pas avec d?autres carburants !', 'http://www.buildandfight.com/images/constructions/rafinerie.jpg', 0),
(7, 'raffinerie sp98', 2000, 30, 150, 'Utilisée à des fins de modification, la raffinerie transforme le pétrole en carburant plus performant comme le diesel, le SP95 et le SP98. Elle transforme le pétrole à la demande, mais attention, son rendement n\'est que de 90%, c\'est-à-dire qu\'avec 1000 unités de pétrole vous n?obtiendrez que 900 unités de carburant raffiné. Soyez précis dans vos calculs et gardez du pétrole pour vos centrales thermiques qui ne fonctionnent pas avec d?autres carburants !', 'http://www.buildandfight.com/images/constructions/rafinerie.jpg', 0),
(8, 'taitement uranium', 2000, 30, 150, 'Cette usine permet la séparation des différents composés radioactifs du Berium : l\'Uranium et le Plutonium. Son rendement est faible (80% pour l\'uranium et 0.1% pour le plutonium) cela veut dire qu\'avec 1000 unités de Berium, vous produirez 800 unités d?uranium et 1 de plutonium.\n ', 'http://www.buildandfight.com/images/constructions/trait_berium.jpg', 0),
(9, 'taitement plutonium', 20, 30, 180, 'Cette usine permet la séparation des différents composés radioactifs du Berium : l\'Uranium et le Plutonium. Son rendement est faible (80% pour l\'uranium et 0.1% pour le plutonium) cela veut dire qu\'avec 1000 unités de Berium, vous produirez 800 unités d?uranium et 1 de plutonium.\n ', 'http://www.buildandfight.com/images/constructions/trait_berium.jpg', 0);

-- --------------------------------------------------------

--
-- Structure de la table `bat_guerre`
--

DROP TABLE IF EXISTS `bat_guerre`;
CREATE TABLE IF NOT EXISTS `bat_guerre` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `terrain` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `bat_guerre`
--

INSERT INTO `bat_guerre` (`id`, `nom`, `terrain`) VALUES
(1, 'caserne', 30),
(2, 'dortoir', 40),
(3, 'usineDeGuerre', 60),
(4, 'hangar', 30),
(5, 'aeropor', 45),
(6, 'pilbox', 13),
(7, 'tourelleCanon', 40),
(8, 'tourelleCanonDouble', 80);

-- --------------------------------------------------------

--
-- Structure de la table `bat_guerre_player`
--

DROP TABLE IF EXISTS `bat_guerre_player`;
CREATE TABLE IF NOT EXISTS `bat_guerre_player` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_player` int NOT NULL,
  `id_batiment` int NOT NULL,
  `nombresBtaiment` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `bat_guerre_player`
--

INSERT INTO `bat_guerre_player` (`id`, `id_player`, `id_batiment`, `nombresBtaiment`) VALUES
(2, 1, 1, 10),
(3, 1, 2, 10000),
(4, 1, 3, 10),
(5, 1, 4, 10);

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
  `nourriture` int NOT NULL DEFAULT '15000',
  `electriciter` int NOT NULL DEFAULT '0',
  `plutonium` int NOT NULL DEFAULT '0',
  `berium` int NOT NULL DEFAULT '0',
  `uranium` int NOT NULL DEFAULT '0',
  `diesel` int NOT NULL DEFAULT '0',
  `sp98` int NOT NULL DEFAULT '15000',
  `sp95` int NOT NULL DEFAULT '15000',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `ressource_player`
--

INSERT INTO `ressource_player` (`id`, `id_player`, `or`, `petrol`, `nourriture`, `electriciter`, `plutonium`, `berium`, `uranium`, `diesel`, `sp98`, `sp95`) VALUES
(1, 1, 150000000, 15000, 15000, 15000, 15000, 15000, 15000, 15000, 15000, 15000),
(2, 3, 15000, 15000, 15000, 0, 0, 0, 0, 0, 15000, 15000),
(4, 0, 15000, 15000, 15000, 0, 0, 0, 0, 0, 15000, 15000),
(5, 0, 15000, 15000, 15000, 0, 0, 0, 0, 0, 15000, 15000),
(6, 0, 15000, 15000, 15000, 0, 0, 0, 0, 0, 15000, 15000);

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
(1, 'florian', 'floo', 'florian', '$2y$10$Ukw/I3DqUTcVagONNVdbceGOpD8PPh2se62vuq3kW1cXkjDztSsue', '2023-02-22 17:54:14', 1677369827),
(2, 'gg', 'gg', 'gg', '$2y$10$sUuDUlilhlt4QKhPNkdzHeh6Rw2awHhZhcCGhklGXHl5tBp9kM2KS', '2023-02-22 17:54:26', 2147483647),
(3, 'florianpsp30', 'florianpsp30', 'florianpsp30', '$2y$10$j.xHG2MU0a/lhWORA0CSjuuuLw/sUnys9RTTKNY9xUAJeJMNFQwlC', '2023-02-23 12:35:22', 1677226809),
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
