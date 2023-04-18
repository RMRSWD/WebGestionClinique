-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 29 déc. 2022 à 17:12
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestionclinique`
--

-- --------------------------------------------------------

--
-- Structure de la table `consigne`
--

CREATE TABLE `consigne` (
  `Id_Consigne` int(11) NOT NULL,
  `LibelleCo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `gestionconnect`
--

CREATE TABLE `gestionconnect` (
  `id` int(10) NOT NULL,
  `login` varchar(10) NOT NULL,
  `mdp` varchar(10) NOT NULL,
  `genre` varchar(10) NOT NULL,
  `nomP` varchar(20) NOT NULL,
  `prenomP` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `gestionconnect`
--

INSERT INTO `gestionconnect` (`id`, `login`, `mdp`, `genre`, `nomP`, `prenomP`) VALUES
(2, '00002', 'agent', 'A', 'Louis', 'Vuitton'),
(7, 'boss', 'boss', 'D', 'BOSS', 'ONE'),
(60, 'medecin1', 'medecin1', 'M', 'a', 'b');

-- --------------------------------------------------------

--
-- Structure de la table `informationpatient`
--

CREATE TABLE `informationpatient` (
  `id_Patient` int(11) NOT NULL,
  `nom` varchar(10) NOT NULL,
  `prenom` varchar(10) NOT NULL,
  `nss` varchar(16) NOT NULL,
  `datenaissance` date NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `numtel` varchar(10) NOT NULL,
  `departementnaissance` varchar(50) NOT NULL,
  `solde` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `informationpatient`
--

INSERT INTO `informationpatient` (`id_Patient`, `nom`, `prenom`, `nss`, `datenaissance`, `adresse`, `numtel`, `departementnaissance`, `solde`) VALUES
(20, 'Nguyen', 'David', '1234569999', '2022-12-20', '20 rue saint euverte', '1234567891', 'Paris', '3300'),
(21, 'AA', 'BC', '147258369', '2022-12-05', '15 rue ncd', '123', 'Orléans', '858');

-- --------------------------------------------------------

--
-- Structure de la table `medecin`
--

CREATE TABLE `medecin` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `medecin`
--

INSERT INTO `medecin` (`id`) VALUES
(60);

-- --------------------------------------------------------

--
-- Structure de la table `motif`
--

CREATE TABLE `motif` (
  `Id_Motif` int(11) NOT NULL,
  `LibelleMo` varchar(50) DEFAULT NULL,
  `PrixMo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `motif`
--

INSERT INTO `motif` (`Id_Motif`, `LibelleMo`, `PrixMo`) VALUES
(19, 'Motif1', '100');

-- --------------------------------------------------------

--
-- Structure de la table `piece`
--

CREATE TABLE `piece` (
  `Id_Piece` int(11) NOT NULL,
  `LibellePi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `piece`
--

INSERT INTO `piece` (`Id_Piece`, `LibellePi`) VALUES
(13, 'carte identite'),
(14, 'carte vitale');

-- --------------------------------------------------------

--
-- Structure de la table `pm`
--

CREATE TABLE `pm` (
  `Id_Motif` int(11) NOT NULL,
  `Id_Piece` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `pm`
--

INSERT INTO `pm` (`Id_Motif`, `Id_Piece`) VALUES
(19, 13),
(19, 14);

-- --------------------------------------------------------

--
-- Structure de la table `rdv`
--

CREATE TABLE `rdv` (
  `idRDV` int(11) NOT NULL,
  `dateRDV` datetime DEFAULT NULL,
  `etatRDV` varchar(50) DEFAULT NULL,
  `Id_Motif` int(11) DEFAULT NULL,
  `id_Patient` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `rdv`
--

INSERT INTO `rdv` (`idRDV`, `dateRDV`, `etatRDV`, `Id_Motif`, `id_Patient`, `id`) VALUES
(2, '2022-12-28 09:00:00', 'complete', 19, 21, 60),
(18, '2022-12-31 10:00:00', 'complet', 19, 20, 60),
(19, '2023-01-01 09:00:00', 'complet', 19, 20, 60),
(20, '2023-01-01 09:00:00', 'complet', 19, 20, 60),
(21, '2023-01-01 09:00:00', 'complet', 19, 20, 60),
(22, '2023-01-01 09:00:00', 'complet', 19, 20, 60),
(23, '2023-01-02 10:00:00', 'complet', 19, 20, 60),
(24, '2023-01-01 15:00:00', 'complet', 19, 20, 60);

-- --------------------------------------------------------

--
-- Structure de la table `specialise`
--

CREATE TABLE `specialise` (
  `id` int(11) NOT NULL,
  `idSP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `specialise`
--

INSERT INTO `specialise` (`id`, `idSP`) VALUES
(60, 10);

-- --------------------------------------------------------

--
-- Structure de la table `specialite`
--

CREATE TABLE `specialite` (
  `idSP` int(11) NOT NULL,
  `libelleSP` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `specialite`
--

INSERT INTO `specialite` (`idSP`, `libelleSP`) VALUES
(10, 'general');

-- --------------------------------------------------------

--
-- Structure de la table `tacheadmin`
--

CREATE TABLE `tacheadmin` (
  `Id_TacheAdmin` int(11) NOT NULL,
  `DateTa` datetime(6) DEFAULT NULL,
  `LibelleTa` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tacheadmin`
--

INSERT INTO `tacheadmin` (`Id_TacheAdmin`, `DateTa`, `LibelleTa`) VALUES
(5, '2022-12-30 09:00:00.000000', 'Important2');

-- --------------------------------------------------------

--
-- Structure de la table `travailadmin`
--

CREATE TABLE `travailadmin` (
  `id` int(11) NOT NULL,
  `Id_TacheAdmin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `travailadmin`
--

INSERT INTO `travailadmin` (`id`, `Id_TacheAdmin`) VALUES
(60, 5);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `consigne`
--
ALTER TABLE `consigne`
  ADD PRIMARY KEY (`Id_Consigne`);

--
-- Index pour la table `gestionconnect`
--
ALTER TABLE `gestionconnect`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `informationpatient`
--
ALTER TABLE `informationpatient`
  ADD PRIMARY KEY (`id_Patient`);

--
-- Index pour la table `medecin`
--
ALTER TABLE `medecin`
  ADD KEY `id` (`id`);

--
-- Index pour la table `motif`
--
ALTER TABLE `motif`
  ADD PRIMARY KEY (`Id_Motif`);

--
-- Index pour la table `piece`
--
ALTER TABLE `piece`
  ADD PRIMARY KEY (`Id_Piece`);

--
-- Index pour la table `pm`
--
ALTER TABLE `pm`
  ADD PRIMARY KEY (`Id_Motif`,`Id_Piece`),
  ADD KEY `Id_Piece` (`Id_Piece`);

--
-- Index pour la table `rdv`
--
ALTER TABLE `rdv`
  ADD PRIMARY KEY (`idRDV`),
  ADD KEY `id` (`id_Patient`),
  ADD KEY `idPersonnel_ibfk_4` (`id`),
  ADD KEY `rdv_ibfk_2` (`Id_Motif`);

--
-- Index pour la table `specialise`
--
ALTER TABLE `specialise`
  ADD PRIMARY KEY (`id`,`idSP`),
  ADD KEY `idSP` (`idSP`);

--
-- Index pour la table `specialite`
--
ALTER TABLE `specialite`
  ADD PRIMARY KEY (`idSP`);

--
-- Index pour la table `tacheadmin`
--
ALTER TABLE `tacheadmin`
  ADD PRIMARY KEY (`Id_TacheAdmin`);

--
-- Index pour la table `travailadmin`
--
ALTER TABLE `travailadmin`
  ADD PRIMARY KEY (`id`,`Id_TacheAdmin`),
  ADD KEY `Id_TacheAdmin` (`Id_TacheAdmin`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `gestionconnect`
--
ALTER TABLE `gestionconnect`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT pour la table `informationpatient`
--
ALTER TABLE `informationpatient`
  MODIFY `id_Patient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `motif`
--
ALTER TABLE `motif`
  MODIFY `Id_Motif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `piece`
--
ALTER TABLE `piece`
  MODIFY `Id_Piece` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `rdv`
--
ALTER TABLE `rdv`
  MODIFY `idRDV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `specialite`
--
ALTER TABLE `specialite`
  MODIFY `idSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `tacheadmin`
--
ALTER TABLE `tacheadmin`
  MODIFY `Id_TacheAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `medecin`
--
ALTER TABLE `medecin`
  ADD CONSTRAINT `medecin_ibfk_1` FOREIGN KEY (`id`) REFERENCES `gestionconnect` (`id`);

--
-- Contraintes pour la table `pm`
--
ALTER TABLE `pm`
  ADD CONSTRAINT `pm_ibfk_1` FOREIGN KEY (`Id_Motif`) REFERENCES `motif` (`Id_Motif`),
  ADD CONSTRAINT `pm_ibfk_2` FOREIGN KEY (`Id_Piece`) REFERENCES `piece` (`Id_Piece`);

--
-- Contraintes pour la table `rdv`
--
ALTER TABLE `rdv`
  ADD CONSTRAINT `idPersonnel_ibfk_4` FOREIGN KEY (`id`) REFERENCES `medecin` (`id`),
  ADD CONSTRAINT `rdv_ibfk_2` FOREIGN KEY (`Id_Motif`) REFERENCES `motif` (`Id_Motif`),
  ADD CONSTRAINT `rdv_ibfk_3` FOREIGN KEY (`id_Patient`) REFERENCES `informationpatient` (`id_Patient`);

--
-- Contraintes pour la table `specialise`
--
ALTER TABLE `specialise`
  ADD CONSTRAINT `specialise_ibfk_1` FOREIGN KEY (`id`) REFERENCES `medecin` (`id`),
  ADD CONSTRAINT `specialise_ibfk_2` FOREIGN KEY (`idSP`) REFERENCES `specialite` (`idSP`);

--
-- Contraintes pour la table `travailadmin`
--
ALTER TABLE `travailadmin`
  ADD CONSTRAINT `travailadmin_ibfk_1` FOREIGN KEY (`id`) REFERENCES `medecin` (`id`),
  ADD CONSTRAINT `travailadmin_ibfk_2` FOREIGN KEY (`Id_TacheAdmin`) REFERENCES `tacheadmin` (`Id_TacheAdmin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
