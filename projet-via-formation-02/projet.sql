-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 24 nov. 2022 à 05:29
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `artciles`
--

DROP TABLE IF EXISTS `artciles`;
CREATE TABLE IF NOT EXISTS `artciles` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `categorie` varchar(255) COLLATE utf8_bin NOT NULL,
  `model` varchar(255) COLLATE utf8_bin NOT NULL,
  `marque` varchar(255) COLLATE utf8_bin NOT NULL,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `prix` int(25) NOT NULL,
  `img` varchar(255) COLLATE utf8_bin NOT NULL,
  `plateforme` varchar(255) COLLATE utf8_bin NOT NULL,
  `pertinence` varchar(255) COLLATE utf8_bin NOT NULL,
  `filtre` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `artciles`
--

INSERT INTO `artciles` (`id`, `categorie`, `model`, `marque`, `nom`, `prix`, `img`, `plateforme`, `pertinence`, `filtre`) VALUES
(1, 'Shõnen', 'blabla', 'nono', 'The promised Neverland - Tome 19', 15, '..\\images\\mangas shõnen\\promised-neverland.jpg', 'playstation', 'nouveauté', 'moins cher'),
(3, 'Shõnen', 'dd', 'dd', 'coffret One Piece Alabasta', 80, '..\\images\\mangas shõnen\\coffret-one-piece-alabasta.jpg.png', '', '', ''),
(4, 'Shõnen', 'dd', 'dd', 'coffret One Piece East Blue', 75, '..\\images\\mangas shõnen\\coffret-one-piece.jpg.png', '', '', ''),
(5, 'Shõnen', 'dd', 'dd', 'Spy & Family - Tome 6', 13, '..\\images\\mangas shõnen\\spy-family.jpg', '', '', ''),
(6, 'Shõnen', 'dd', 'dd', 'Fairy Tail - Tome 41', 10, '..\\images\\mangas shõnen\\mangas-fairytail.jpg', '', '', ''),
(7, 'Isekai', 'dd', 'dd', 'Moi quand je me réincarne en Slime - Tome 1', 15, '..\\images\\mangas isekai\\moi-reincarne-slime.jpg', '', '', ''),
(8, 'Isekai', 'dd', 'dd', 'Black Summoner - Tome 1', 18, '..\\images\\mangas isekai\\black-summoner.jpg', '', '', ''),
(9, 'Isekai', 'dd', 'dd', 'Mushoku Tensei Jobless Réincarnation - Tome 5', 13, '..\\images\\mangas isekai\\mushoku tensai.jpg', '', '', ''),
(10, 'Isekai', 'dd', 'dd', 'Wise Man\'s Grandchild - Tome 16', 15, '..\\images\\mangas isekai\\wise-man-s-grandchild.jpg.png', '', '', ''),
(11, 'Isekai', 'dd', 'dd', 'Legende Vivante - Tome 1', 10, '..\\images\\mangas isekai\\legende-vivante.jpg', '', '', ''),
(12, 'shonen', 'bbb', 'hhhh', 'ghh', 2000, 'gggggg', 'play', 'azerty', 'zqsd');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(255) COLLATE utf8_bin NOT NULL,
  `pays` varchar(255) COLLATE utf8_bin NOT NULL,
  `message` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `prenom`, `pays`, `message`) VALUES
(1, '', '', '', ''),
(2, 'hhh', 'hh', 'france', 'hh');

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

DROP TABLE IF EXISTS `membres`;
CREATE TABLE IF NOT EXISTS `membres` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `f_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `l_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `img` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id`, `username`, `password`, `f_name`, `l_name`, `admin`, `img`) VALUES
(1, 'admin', '$2y$10$WoL.snILlLXRj9VtCsYIjeRz0kT2qkbS09t9GBoZQaBDWV8PpLlge', 'titi', 'dd', 1, 'https://image.noelshack.com/fichiers/2022/19/1/1652084161-mac.jpg'),
(2, 'sss', 'hash', 'sss', 'sss', 1, 'sss'),
(3, 'lou', '$2y$10$HO3coYwM2CYAbGgobthV9OBH4J0ST.pRvMZrSGCM7Ja./du.cTAKq', 'sss', 'sss', 1, 'sss');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
