-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 21 avr. 2023 à 20:51
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `bd_mvc`
--

CREATE TABLE `bd_mvc` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `classe` varchar(50) NOT NULL,
  `pv` int(11) NOT NULL,
  `atk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `bd_mvc`
--

INSERT INTO `bd_mvc` (`id`, `nom`, `classe`, `pv`, `atk`) VALUES
(1, 'kiki', 'mage', 80, 50),
(2, 'sessa', 'guerrière', 70, 60),
(3, 'bouille', 'gastéropode', 2, 100),
(4, 'crapaud', 'bouffe-tout', 40, 80);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bd_mvc`
--
ALTER TABLE `bd_mvc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `bd_mvc`
--
ALTER TABLE `bd_mvc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
