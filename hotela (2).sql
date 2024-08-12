-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 18 mars 2024 à 23:46
-- Version du serveur : 8.2.0
-- Version de PHP : 8.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hotela`
--

-- --------------------------------------------------------

--
-- Structure de la table `achat`
--

DROP TABLE IF EXISTS `achat`;
CREATE TABLE IF NOT EXISTS `achat` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_utilisateur` int NOT NULL,
  `id_nourriture` int NOT NULL,
  `nom_utilisateur` varchar(200) NOT NULL,
  `nom_nourriture` varchar(200) NOT NULL,
  `prix` int NOT NULL,
  `payement` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_utilisateur` (`id_utilisateur`),
  KEY `id_nourriture` (`id_nourriture`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `achat`
--

INSERT INTO `achat` (`id`, `id_utilisateur`, `id_nourriture`, `nom_utilisateur`, `nom_nourriture`, `prix`, `payement`) VALUES
(1, 5, 2, 'andy', 'brb', 2, 'Réserver'),
(2, 5, 4, 'andy', 'papa', 10000000, 'Réserver'),
(3, 5, 1, 'andy', 'uuu', 2000, 'Réserver'),
(4, 14, 5, 'andy', 'beffy', 12, 'Réserver');

-- --------------------------------------------------------

--
-- Structure de la table `boisson`
--

DROP TABLE IF EXISTS `boisson`;
CREATE TABLE IF NOT EXISTS `boisson` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_boissonstar` int NOT NULL,
  `id_boissonchaude` int NOT NULL,
  `id_cocktails` int NOT NULL,
  `id_milkshakes` int NOT NULL,
  `id_vin` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_boissonstar` (`id_boissonstar`),
  KEY `id_boissonchaude` (`id_boissonchaude`),
  KEY `id_cocktails` (`id_cocktails`),
  KEY `id_milkshakes` (`id_milkshakes`),
  KEY `id_vin` (`id_vin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `boissonchaude`
--

DROP TABLE IF EXISTS `boissonchaude`;
CREATE TABLE IF NOT EXISTS `boissonchaude` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `boissonstar`
--

DROP TABLE IF EXISTS `boissonstar`;
CREATE TABLE IF NOT EXISTS `boissonstar` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `breakfast`
--

DROP TABLE IF EXISTS `breakfast`;
CREATE TABLE IF NOT EXISTS `breakfast` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `breakfast`
--

INSERT INTO `breakfast` (`id`, `image`, `nom`, `prix`, `description`) VALUES
(5, 'beffy.jpg', 'beffy', '12 000', 'trop bon');

-- --------------------------------------------------------

--
-- Structure de la table `burgers`
--

DROP TABLE IF EXISTS `burgers`;
CREATE TABLE IF NOT EXISTS `burgers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `cocktails`
--

DROP TABLE IF EXISTS `cocktails`;
CREATE TABLE IF NOT EXISTS `cocktails` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` int NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `cookies`
--

DROP TABLE IF EXISTS `cookies`;
CREATE TABLE IF NOT EXISTS `cookies` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `first_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `created_at`) VALUES
('cus_PlIjSnAj4hbdoy', 'andy', 'Anthony', 'andy7andria@gmail.com', '2024-03-18 22:46:01');

-- --------------------------------------------------------

--
-- Structure de la table `dessert`
--

DROP TABLE IF EXISTS `dessert`;
CREATE TABLE IF NOT EXISTS `dessert` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_glaces` int NOT NULL,
  `id_cookies` int NOT NULL,
  `id_patiseries` int NOT NULL,
  `id_puddings` int NOT NULL,
  `id_gateaux` int NOT NULL,
  `id_specialdesert` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_glaces` (`id_glaces`),
  KEY `id_cookies` (`id_cookies`),
  KEY `id_patiseries` (`id_patiseries`),
  KEY `id_puddings` (`id_puddings`),
  KEY `id_gateaux` (`id_gateaux`),
  KEY `id_specialdesert` (`id_specialdesert`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `food`
--

DROP TABLE IF EXISTS `food`;
CREATE TABLE IF NOT EXISTS `food` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_nouriture` int NOT NULL,
  `id_dessert` int NOT NULL,
  `id_boisson` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_nouriture` (`id_nouriture`),
  KEY `id_dessert` (`id_dessert`),
  KEY `id_boisson` (`id_boisson`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `gateaux`
--

DROP TABLE IF EXISTS `gateaux`;
CREATE TABLE IF NOT EXISTS `gateaux` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `glaces`
--

DROP TABLE IF EXISTS `glaces`;
CREATE TABLE IF NOT EXISTS `glaces` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `grillades`
--

DROP TABLE IF EXISTS `grillades`;
CREATE TABLE IF NOT EXISTS `grillades` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id`, `username`, `email`, `pass`) VALUES
(11, 'ada', 'ada@a.a', 'e4ea294c062c525643df036a35ca579b905fa400'),
(14, 'andy', 'andy@andri.com', 'e3579b1e47f273529f0f929453e939a68ede9fd1'),
(15, 'mo', 'mo@gmail.com', '$2y$10$3Xo49NTDt0CwO5g/HPTg1O3TqwfHATkQWSwjHPytyEu66E5boPZoO');

-- --------------------------------------------------------

--
-- Structure de la table `milkshakes`
--

DROP TABLE IF EXISTS `milkshakes`;
CREATE TABLE IF NOT EXISTS `milkshakes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `nouriture`
--

DROP TABLE IF EXISTS `nouriture`;
CREATE TABLE IF NOT EXISTS `nouriture` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_breakfast` int NOT NULL,
  `id_burgers` int NOT NULL,
  `id_pizzas` int NOT NULL,
  `id_grillades` int NOT NULL,
  `id_pattes` int NOT NULL,
  `id_tartes` int NOT NULL,
  `id_salades` int NOT NULL,
  `id_special` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_breakfast` (`id_breakfast`),
  KEY `id_breakfasts` (`id_breakfast`),
  KEY `id_burgers` (`id_burgers`),
  KEY `id_pizzas` (`id_pizzas`),
  KEY `id_grillades` (`id_grillades`),
  KEY `id_pattes` (`id_pattes`),
  KEY `id_tartes` (`id_tartes`),
  KEY `id_salades` (`id_salades`),
  KEY `id_special` (`id_special`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `patiseries`
--

DROP TABLE IF EXISTS `patiseries`;
CREATE TABLE IF NOT EXISTS `patiseries` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `pattes`
--

DROP TABLE IF EXISTS `pattes`;
CREATE TABLE IF NOT EXISTS `pattes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `pizzas`
--

DROP TABLE IF EXISTS `pizzas`;
CREATE TABLE IF NOT EXISTS `pizzas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `puddings`
--

DROP TABLE IF EXISTS `puddings`;
CREATE TABLE IF NOT EXISTS `puddings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_membre` int NOT NULL,
  `chambre` varchar(255) NOT NULL,
  `nchambre` int NOT NULL,
  `npersonne` int NOT NULL,
  `nenfant` int NOT NULL,
  `restauration` varchar(500) NOT NULL,
  `arriver` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `depart` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `message` text NOT NULL,
  `prix` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`,`id_membre`),
  KEY `id_membre` (`id_membre`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `id_membre`, `chambre`, `nchambre`, `npersonne`, `nenfant`, `restauration`, `arriver`, `depart`, `message`, `prix`) VALUES
(45, 14, 'Standard', 3, 3, 3, 'Oui', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '1320');

-- --------------------------------------------------------

--
-- Structure de la table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
CREATE TABLE IF NOT EXISTS `rooms` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `pays` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `rooms`
--

INSERT INTO `rooms` (`id`, `image`, `pays`, `ville`) VALUES
(4, '775969.jpg', 'aiz ara', 'io'),
(2, 'hotel_room_2-wallpaper-3840x2160.jpg', 'Madagascar', 'Tana'),
(3, '28097-maldives-tropical-underwater-hotel-4k.jpg', 'Madagascar', 'Tamatave'),
(10, 'Capture d\'écran 2024-03-11 153642.png', 'g', 'g');

-- --------------------------------------------------------

--
-- Structure de la table `salades`
--

DROP TABLE IF EXISTS `salades`;
CREATE TABLE IF NOT EXISTS `salades` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `slider`
--

INSERT INTO `slider` (`id`, `image`, `titre`, `description`) VALUES
(1, '../assets/image/28097-maldives-tropical-underwater-hotel-4k.jpg', 'Tout Est Nickel', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, debitis esse? Laborumsapiente atque porro.'),
(2, '../assets/image/410729301.jpg', 'Classe et Hebergement', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, debitis esse? Laborum\r\nsapiente atque porro.'),
(3, '../assets/image/HD-wallpaper-tokyo-hotel-japan-indoor-room-asia-scenery.jpg', 'Plaisir, Confort et Qualité', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, debitis esse? Laborum\r\nsapiente atque porro.');

-- --------------------------------------------------------

--
-- Structure de la table `special`
--

DROP TABLE IF EXISTS `special`;
CREATE TABLE IF NOT EXISTS `special` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `specialdesert`
--

DROP TABLE IF EXISTS `specialdesert`;
CREATE TABLE IF NOT EXISTS `specialdesert` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` int NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tartes`
--

DROP TABLE IF EXISTS `tartes`;
CREATE TABLE IF NOT EXISTS `tartes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `tartes`
--

INSERT INTO `tartes` (`id`, `image`, `nom`, `prix`, `description`) VALUES
(1, 'about-banner.png', 'uuu', '2000', 'ok');

-- --------------------------------------------------------

--
-- Structure de la table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `id` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `customer_id` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `product` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `amount` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `currency` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `transactions`
--

INSERT INTO `transactions` (`id`, `customer_id`, `product`, `amount`, `currency`, `status`, `created_at`) VALUES
('ch_3Ovm892LAPtoIu5B16ewTmTk', 'cus_PlIjSnAj4hbdoy', 'Intro To React Course', '5000', 'usd', 'succeeded', '2024-03-18 22:46:01');

-- --------------------------------------------------------

--
-- Structure de la table `vin`
--

DROP TABLE IF EXISTS `vin`;
CREATE TABLE IF NOT EXISTS `vin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `boisson`
--
ALTER TABLE `boisson`
  ADD CONSTRAINT `boisson_ibfk_1` FOREIGN KEY (`id_boissonstar`) REFERENCES `boissonstar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `boisson_ibfk_2` FOREIGN KEY (`id_boissonchaude`) REFERENCES `boissonchaude` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `boisson_ibfk_3` FOREIGN KEY (`id_cocktails`) REFERENCES `cocktails` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `boisson_ibfk_4` FOREIGN KEY (`id_milkshakes`) REFERENCES `milkshakes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `boisson_ibfk_5` FOREIGN KEY (`id_vin`) REFERENCES `vin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `dessert`
--
ALTER TABLE `dessert`
  ADD CONSTRAINT `dessert_ibfk_1` FOREIGN KEY (`id_glaces`) REFERENCES `glaces` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dessert_ibfk_2` FOREIGN KEY (`id_cookies`) REFERENCES `cookies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dessert_ibfk_3` FOREIGN KEY (`id_patiseries`) REFERENCES `patiseries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dessert_ibfk_4` FOREIGN KEY (`id_puddings`) REFERENCES `puddings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dessert_ibfk_5` FOREIGN KEY (`id_gateaux`) REFERENCES `gateaux` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dessert_ibfk_6` FOREIGN KEY (`id_specialdesert`) REFERENCES `specialdesert` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food_ibfk_1` FOREIGN KEY (`id_nouriture`) REFERENCES `nouriture` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `food_ibfk_2` FOREIGN KEY (`id_dessert`) REFERENCES `dessert` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `food_ibfk_3` FOREIGN KEY (`id_boisson`) REFERENCES `boisson` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `nouriture`
--
ALTER TABLE `nouriture`
  ADD CONSTRAINT `nouriture_ibfk_1` FOREIGN KEY (`id_breakfast`) REFERENCES `breakfast` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nouriture_ibfk_2` FOREIGN KEY (`id_burgers`) REFERENCES `burgers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nouriture_ibfk_3` FOREIGN KEY (`id_pizzas`) REFERENCES `pizzas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nouriture_ibfk_4` FOREIGN KEY (`id_grillades`) REFERENCES `grillades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nouriture_ibfk_5` FOREIGN KEY (`id_pattes`) REFERENCES `pattes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nouriture_ibfk_6` FOREIGN KEY (`id_tartes`) REFERENCES `tartes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nouriture_ibfk_7` FOREIGN KEY (`id_salades`) REFERENCES `salades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nouriture_ibfk_8` FOREIGN KEY (`id_special`) REFERENCES `special` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`id_membre`) REFERENCES `membre` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
