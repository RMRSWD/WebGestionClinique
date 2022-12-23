-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 23 déc. 2022 à 10:25
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
(6, '00002', 'medecin', 'A', 'A', 'BC'),
(7, 'boss', 'boss', 'D', 'BOSS', 'ONE'),
(8, '00002', '00001', 'A', 'Nouveau', 'Agent'),
(50, 'newMedecin', '123', 'A', 'Medecin1', 'Medecin1');

-- --------------------------------------------------------

--
-- Structure de la table `informationpatient`
--

CREATE TABLE `informationpatient` (
  `id` int(11) NOT NULL,
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

INSERT INTO `informationpatient` (`id`, `nom`, `prenom`, `nss`, `datenaissance`, `adresse`, `numtel`, `departementnaissance`, `solde`) VALUES
(20, 'Nguyen', 'David', '1234569999', '2022-12-20', '20 rue saint euverte', '1234567891', 'Paris', '0'),
(21, 'AA', 'BC', '147258369', '2022-12-05', '15 rue ncd', '123', 'Orléans', '100');

-- --------------------------------------------------------

--
-- Structure de la table `medecin`
--

CREATE TABLE `medecin` (
  `idMedecin` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `motif`
--

CREATE TABLE `motif` (
  `Id_Motif` int(11) NOT NULL,
  `LibelleMo` varchar(50) DEFAULT NULL,
  `PrixMo` varchar(50) DEFAULT NULL,
  `Id_Piece` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `motif`
--

INSERT INTO `motif` (`Id_Motif`, `LibelleMo`, `PrixMo`, `Id_Piece`) VALUES
(1, 'A11', '9999', 1),
(3, 'A11', '9999', 2),
(4, 'B11', '99', 1),
(5, 'B11', '99', 2),
(6, 'B22', '999', 1),
(7, 'B22', '999', 2),
(8, 'B22', '999', 1),
(9, 'B22', '999', 2),
(10, 'B52', 'sans Prix', 1);

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
(1, 'Carte indentite'),
(2, 'Carte Vitale');

-- --------------------------------------------------------

--
-- Structure de la table `rdv`
--

CREATE TABLE `rdv` (
  `idRDV` int(11) NOT NULL,
  `dateRDV` varchar(50) DEFAULT NULL,
  `etatRDV` varchar(50) DEFAULT NULL,
  `idMedecin` int(11) DEFAULT NULL,
  `Id_Motif` int(11) DEFAULT NULL,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `specialite`
--

CREATE TABLE `specialite` (
  `idSP` int(11) NOT NULL,
  `libelleSP` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `tacheadmin`
--

CREATE TABLE `tacheadmin` (
  `Id_TacheAdmin` int(11) NOT NULL,
  `DateTa` varchar(50) DEFAULT NULL,
  `LibelleTa` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `medecin`
--
ALTER TABLE `medecin`
  ADD PRIMARY KEY (`idMedecin`),
  ADD KEY `id` (`id`);

--
-- Index pour la table `motif`
--
ALTER TABLE `motif`
  ADD PRIMARY KEY (`Id_Motif`),
  ADD KEY `fk_motif_piece` (`Id_Piece`);

--
-- Index pour la table `piece`
--
ALTER TABLE `piece`
  ADD PRIMARY KEY (`Id_Piece`);

--
-- Index pour la table `rdv`
--
ALTER TABLE `rdv`
  ADD PRIMARY KEY (`idRDV`),
  ADD KEY `idMedecin` (`idMedecin`),
  ADD KEY `id` (`id`),
  ADD KEY `rdv_ibfk2` (`Id_Motif`);

--
-- Index pour la table `tacheadmin`
--
ALTER TABLE `tacheadmin`
  ADD PRIMARY KEY (`Id_TacheAdmin`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `gestionconnect`
--
ALTER TABLE `gestionconnect`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT pour la table `informationpatient`
--
ALTER TABLE `informationpatient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `medecin`
--
ALTER TABLE `medecin`
  MODIFY `idMedecin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `motif`
--
ALTER TABLE `motif`
  MODIFY `Id_Motif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `piece`
--
ALTER TABLE `piece`
  MODIFY `Id_Piece` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `rdv`
--
ALTER TABLE `rdv`
  MODIFY `idRDV` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `medecin`
--
ALTER TABLE `medecin`
  ADD CONSTRAINT `medecin_ibfk_1` FOREIGN KEY (`id`) REFERENCES `gestionconnect` (`id`);

--
-- Contraintes pour la table `motif`
--
ALTER TABLE `motif`
  ADD CONSTRAINT `fk_motif_piece` FOREIGN KEY (`Id_Piece`) REFERENCES `piece` (`Id_Piece`);

--
-- Contraintes pour la table `rdv`
--
ALTER TABLE `rdv`
  ADD CONSTRAINT `rdv_ibfk2` FOREIGN KEY (`Id_Motif`) REFERENCES `motif` (`Id_Motif`),
  ADD CONSTRAINT `rdv_ibfk_1` FOREIGN KEY (`idMedecin`) REFERENCES `medecin` (`idMedecin`),
  ADD CONSTRAINT `rdv_ibfk_3` FOREIGN KEY (`id`) REFERENCES `informationpatient` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
