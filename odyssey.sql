-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 11 nov. 2023 à 13:27
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `odyssey`
--

-- --------------------------------------------------------

--
-- Structure de la table `astronautes`
--

CREATE TABLE `astronautes` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `taille` int(11) NOT NULL,
  `poids` int(11) NOT NULL,
  `nationalite` char(20) NOT NULL,
  `etatSante` enum('bon','malade','décédé','') NOT NULL,
  `planetes_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `astronautes`
--

INSERT INTO `astronautes` (`id`, `nom`, `prenom`, `taille`, `poids`, `nationalite`, `etatSante`, `planetes_id`) VALUES
(2, 'Jean Jacques', 'Rousseaux', 65, 70, 'French', 'bon', 1),
(3, 'Jimy', 'Page', 56, 60, 'Italian', 'malade', 2),
(4, 'Courtney', 'Laurie', 66, 72, 'Mexican', 'décédé', 3);

-- --------------------------------------------------------

--
-- Structure de la table `missions`
--

CREATE TABLE `missions` (
  `id` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `objectif` varchar(200) NOT NULL,
  `dateDebut` datetime NOT NULL,
  `dateFin` datetime NOT NULL,
  `lieu` point NOT NULL,
  `equipe` int(11) NOT NULL,
  `statut` enum('en cours','terminé','','') NOT NULL,
  `vaisseaux_id` int(11) NOT NULL,
  `planetes_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `missions`
--

INSERT INTO `missions` (`id`, `nom`, `objectif`, `dateDebut`, `dateFin`, `lieu`, `equipe`, `statut`, `vaisseaux_id`, `planetes_id`) VALUES
(1, 'cohérence climatique', 'Dans le cadre de recherche un endroit pour vivre autrement, l\'homme cherche la cohérence climatique à la planète Terre', '2023-11-11 08:02:43', '2023-11-11 08:02:43', 0x0000000001010000000000000000c493400000000000004c40, 3, 'en cours', 1, 1),
(2, 'Reconnaissance', 'Reconnaître une planète pour passer à la mise en place d\'un système de filtrage d\'oxygène', '2023-11-11 08:55:17', '2023-11-11 08:55:17', 0x00000000010100000000000000809eeb4000000000603fed40, 2, 'terminé', 1, 2),
(3, 'Abstraction', 'Le vif du sujet spatial fait remonter le temps au monde entier. Il y a une discrétion à prétendre.', '2023-11-11 08:55:17', '2023-11-11 08:55:17', 0x00000000010100000000000000a0f1e64000000000e0d3e740, 1, 'en cours', 3, 3);

-- --------------------------------------------------------

--
-- Structure de la table `planetes`
--

CREATE TABLE `planetes` (
  `id` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `circonference` float NOT NULL,
  `distanceTerre` float NOT NULL,
  `conditionEnvironnement` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `planetes`
--

INSERT INTO `planetes` (`id`, `nom`, `circonference`, `distanceTerre`, `conditionEnvironnement`) VALUES
(1, 'Mercure', 26598800, 56986300, 'Difficile en oxygène, trop humide'),
(2, 'Venus', 156999000, 45866200000, 'Trop humide, air chaud supérieur à la normale'),
(3, 'Mars', 5568980000000, 5649900000, 'trop humide, air chaud supérieur à la normale, difficulté respiratoire');

-- --------------------------------------------------------

--
-- Structure de la table `vaisseaux`
--

CREATE TABLE `vaisseaux` (
  `id` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `dimension` int(11) NOT NULL,
  `capacite` int(11) NOT NULL,
  `statut` enum('en réparation','bonne','ruiné','') NOT NULL,
  `astronautes_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `vaisseaux`
--

INSERT INTO `vaisseaux` (`id`, `nom`, `dimension`, `capacite`, `statut`, `astronautes_id`) VALUES
(1, 'Bravo01', 6589421, 6983564, 'bonne', 2),
(2, 'Alpha01', 45699893, 4598632, 'en réparation', 3),
(3, 'Delta01', 456989965, 5687521, 'ruiné', 4);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `astronautes`
--
ALTER TABLE `astronautes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `planetes_id` (`planetes_id`);

--
-- Index pour la table `missions`
--
ALTER TABLE `missions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `planetes_id` (`planetes_id`),
  ADD KEY `vaisseaux_id` (`vaisseaux_id`);

--
-- Index pour la table `planetes`
--
ALTER TABLE `planetes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vaisseaux`
--
ALTER TABLE `vaisseaux`
  ADD PRIMARY KEY (`id`),
  ADD KEY `astronautes_id` (`astronautes_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `astronautes`
--
ALTER TABLE `astronautes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `missions`
--
ALTER TABLE `missions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `planetes`
--
ALTER TABLE `planetes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `vaisseaux`
--
ALTER TABLE `vaisseaux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `astronautes`
--
ALTER TABLE `astronautes`
  ADD CONSTRAINT `astronautes_ibfk_1` FOREIGN KEY (`planetes_id`) REFERENCES `planetes` (`id`);

--
-- Contraintes pour la table `missions`
--
ALTER TABLE `missions`
  ADD CONSTRAINT `missions_ibfk_1` FOREIGN KEY (`planetes_id`) REFERENCES `planetes` (`id`),
  ADD CONSTRAINT `missions_ibfk_2` FOREIGN KEY (`vaisseaux_id`) REFERENCES `vaisseaux` (`id`);

--
-- Contraintes pour la table `vaisseaux`
--
ALTER TABLE `vaisseaux`
  ADD CONSTRAINT `vaisseaux_ibfk_1` FOREIGN KEY (`astronautes_id`) REFERENCES `astronautes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
