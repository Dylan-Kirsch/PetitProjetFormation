-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : dim. 26 juin 2022 à 17:18
-- Version du serveur : 8.0.29
-- Version de PHP : 8.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `via multimédia`
--

-- --------------------------------------------------------

--
-- Structure de la table `boutique`
--

CREATE TABLE `boutique` (
  `id` int NOT NULL,
  `photo` text NOT NULL,
  `nom` varchar(35) NOT NULL,
  `prix` text NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `boutique`
--

INSERT INTO `boutique` (`id`, `photo`, `nom`, `prix`, `detail`) VALUES
(1, 'cards_boutique/ps5_the_last_of_us.webp', 'The Last of Us Part 1 PS5', '80€', ''),
(2, 'cards_boutique/ps5_returnal.webp', 'Returnal PS5', '80€', ''),
(3, 'cards_boutique/back_4_blood.webp', 'Back 4 Blood', '80€', ''),
(4, 'cards_boutique/wrc_9.webp', 'wrc 9', '45€', ''),
(5, 'cards_boutique/tiny_tina.webp', 'Tiny Tina\'s Wonderlands', '90€', ''),
(6, 'cards_boutique/captain_tsubasa.webp', 'Captain Tsubasa', '23€', ''),
(7, 'cards_boutique/gardien_galaxy.webp', 'Guardians of the Galaxy', '70€', ''),
(8, 'cards_boutique/he_quarry.webp', 'The Quarry', '80€', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `boutique`
--
ALTER TABLE `boutique`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `boutique`
--
ALTER TABLE `boutique`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
