-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 14 nov. 2023 à 15:16
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
-- Base de données : `evaluation2`
--

-- --------------------------------------------------------

--
-- Structure de la table `assignation_mission_astronaute`
--

CREATE TABLE `assignation_mission_astronaute` (
  `id_assignation` int(11) NOT NULL,
  `id_mission` int(11) NOT NULL,
  `id_astronaute` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `astronautes`
--

CREATE TABLE `astronautes` (
  `id_astronaute` int(11) NOT NULL,
  `nom_astronaute` varchar(100) DEFAULT NULL,
  `etat_sante` enum('Bon','malade','décédé') DEFAULT NULL,
  `taille` int(11) DEFAULT NULL,
  `poids` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `astronautes`
--

INSERT INTO `astronautes` (`id_astronaute`, `nom_astronaute`, `etat_sante`, `taille`, `poids`) VALUES
(1, 'John', 'Bon', 65, 70),
(2, 'carter', 'Bon', 66, 72);

-- --------------------------------------------------------

--
-- Structure de la table `missions`
--

CREATE TABLE `missions` (
  `id_mission` int(11) NOT NULL,
  `nom_mission` varchar(100) DEFAULT NULL,
  `id_vaisseau` int(11) DEFAULT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `status` enum('en préparation','en cours','terminée','abandonnée') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `planetes`
--

CREATE TABLE `planetes` (
  `id_planete` int(11) NOT NULL,
  `nom_planete` varchar(100) DEFAULT NULL,
  `circonférence_km` decimal(10,2) DEFAULT NULL,
  `distance_terre_km` decimal(10,2) DEFAULT NULL,
  `documentation` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `planetes`
--

INSERT INTO `planetes` (`id_planete`, `nom_planete`, `circonférence_km`, `distance_terre_km`, `documentation`) VALUES
(1, 'Mars', '99999999.99', '99999999.99', 'mdfimsdfijmsdifjiameira'),
(2, 'Terre', '99999999.99', '99999999.99', 'FSQFSQFQSFQ'),
(3, 'TERRE', '99999999.99', '32424132.23', 'SDFQFQSF');

-- --------------------------------------------------------

--
-- Structure de la table `vaisseaux`
--

CREATE TABLE `vaisseaux` (
  `id_vaisseau` int(11) NOT NULL,
  `nom_vaisseau` varchar(100) DEFAULT NULL,
  `capacite` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `assignation_mission_astronaute`
--
ALTER TABLE `assignation_mission_astronaute`
  ADD PRIMARY KEY (`id_assignation`,`id_mission`,`id_astronaute`),
  ADD KEY `id_mission` (`id_mission`),
  ADD KEY `id_astronaute` (`id_astronaute`);

--
-- Index pour la table `astronautes`
--
ALTER TABLE `astronautes`
  ADD PRIMARY KEY (`id_astronaute`);

--
-- Index pour la table `missions`
--
ALTER TABLE `missions`
  ADD PRIMARY KEY (`id_mission`),
  ADD KEY `id_vaisseau` (`id_vaisseau`);

--
-- Index pour la table `planetes`
--
ALTER TABLE `planetes`
  ADD PRIMARY KEY (`id_planete`);

--
-- Index pour la table `vaisseaux`
--
ALTER TABLE `vaisseaux`
  ADD PRIMARY KEY (`id_vaisseau`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `assignation_mission_astronaute`
--
ALTER TABLE `assignation_mission_astronaute`
  MODIFY `id_assignation` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `astronautes`
--
ALTER TABLE `astronautes`
  MODIFY `id_astronaute` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `missions`
--
ALTER TABLE `missions`
  MODIFY `id_mission` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `planetes`
--
ALTER TABLE `planetes`
  MODIFY `id_planete` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `vaisseaux`
--
ALTER TABLE `vaisseaux`
  MODIFY `id_vaisseau` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `assignation_mission_astronaute`
--
ALTER TABLE `assignation_mission_astronaute`
  ADD CONSTRAINT `assignation_mission_astronaute_ibfk_1` FOREIGN KEY (`id_mission`) REFERENCES `missions` (`id_mission`),
  ADD CONSTRAINT `assignation_mission_astronaute_ibfk_2` FOREIGN KEY (`id_astronaute`) REFERENCES `astronautes` (`id_astronaute`);

--
-- Contraintes pour la table `missions`
--
ALTER TABLE `missions`
  ADD CONSTRAINT `missions_ibfk_1` FOREIGN KEY (`id_vaisseau`) REFERENCES `vaisseaux` (`id_vaisseau`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
