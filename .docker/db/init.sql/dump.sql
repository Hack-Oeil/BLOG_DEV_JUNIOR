-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 22 juil. 2025 à 18:33
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `text`) VALUES
(1, 'Rêverie suspendue', 'Un attrape-rêves flotte doucement dans une lumière dorée. Cette image évoque la sérénité, la spiritualité et l’espoir, comme une invitation à la méditation et à l’introspection.'),
(2, 'Montagne embrumée', 'Une colline recouverte de sapins émerge d’une brume blanche. Ce paysage silencieux et paisible inspire la solitude et la contemplation, entre mystère et nature.'),
(3, 'Abstraction nocturne', 'Une image floue aux tons sombres et bleutés, aux contours indéfinis. Elle suggère un univers onirique ou introspectif, comme une scène capturée dans un rêve ou un souvenir lointain.'),
(4, 'Champ doré au couchant', 'Une prairie baignée de lumière dorée, où les herbes hautes dansent sous le vent près d’un arbre. Ce moment paisible évoque la fin d’une journée d’été et la chaleur du soleil couchant.'),
(5, 'Sentier vers l’inconnu', 'Un chemin rectiligne s’étend vers une rangée d’arbres dénudés. Cette scène invite au voyage, à la découverte ou à une transition symbolique entre deux mondes ou deux saisons.');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `avatar` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `avatar`) VALUES
(1, 'Raty', '6061d73281dfd73b86eed0c518a6eb4d6e7d41cf', 'raty@monsiteperso.pwnd', 'user_1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
