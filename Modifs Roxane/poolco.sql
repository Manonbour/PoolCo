-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  ven. 04 mai 2018 à 13:11
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `poolco`
--

-- --------------------------------------------------------

--
-- Structure de la table `Ami`
--

CREATE TABLE `Ami` (
  `Id` int(11) NOT NULL,
  `Id_Utili` int(11) NOT NULL,
  `Nom` text NOT NULL,
  `Prénom` text NOT NULL,
  `Photo` text NOT NULL,
  `Naissance` date NOT NULL,
  `Mail` text NOT NULL,
  `estAmi` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Ami`
--

INSERT INTO `Ami` (`Id`, `Id_Utili`, `Nom`, `Prénom`, `Photo`, `Naissance`, `Mail`, `estAmi`) VALUES
(1, 70, 'Bourgoing', 'Manon', 'images/Man_pro.png', '1997-11-08', 'manon.bourgoing@edu.ece.fr', 0),
(2, 70, 'Batigny', 'Roxane', 'images/Rox_pro.png', '1997-12-13', 'roxane.batigny@edu.ece.fr', 0),
(3, 70, 'Gueritaine', 'Antoinette', 'images/Ant_pro.png', '1997-11-25', 'antoinette.gueritaine@edu.ece.fr', 1),
(4, 70, 'Puech', 'Stéphanie', 'images/portfolio-13-400x400.jpg', '2018-05-01', 'stephanie.puech@edu.ece.fr', 1),
(5, 68, 'Bourgoing', 'Manon', 'images/Man_pro.png', '1997-11-08', 'manon.bourgoing@edu.ece.fr', 1);

-- --------------------------------------------------------

--
-- Structure de la table `offre`
--

CREATE TABLE `offre` (
  `Num_offre` int(11) NOT NULL,
  `Titre` text NOT NULL,
  `Description` text NOT NULL,
  `Nom_Auteur` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `offre`
--

INSERT INTO `offre` (`Num_offre`, `Titre`, `Description`, `Nom_Auteur`) VALUES
(1, 'Stage', 'Offre de stage de 6 mois dans une entreprise de web design.', 'Jean Pascal'),
(2, 'Ingénieur Système et Réseaux', 'Dans le cadre de notre forte croissance, nous recherchons pour notre agence de Paris un Ingénieur système et réseaux H/F de niveau débutant à confirmé.', 'Robert De Niro'),
(3, 'Intégrateur en alternance', 'Recherche étudiant en cours de formation en alternance Bac +2 à 3 (informatique) qui assurera l’installation et le paramétrage fonctionnel et technique de notre solution.', 'Catherine Deneuve');

-- --------------------------------------------------------

--
-- Structure de la table `profession`
--

CREATE TABLE `profession` (
  `id` int(11) NOT NULL,
  `job` text NOT NULL,
  `apropos` mediumtext NOT NULL,
  `nom_poste1` text NOT NULL,
  `entreprise1` text NOT NULL,
  `date_debut1` date NOT NULL,
  `date_fin1` date NOT NULL,
  `desc1` mediumtext NOT NULL,
  `nom_poste2` text NOT NULL,
  `entreprise2` text NOT NULL,
  `date_debut2` date NOT NULL,
  `date_fin2` date NOT NULL,
  `desc2` text NOT NULL,
  `diplome1` text NOT NULL,
  `universite1` text NOT NULL,
  `date_val1` date NOT NULL,
  `descri1` text NOT NULL,
  `diplome2` text NOT NULL,
  `universite2` text NOT NULL,
  `date_val2` date NOT NULL,
  `descri2` text NOT NULL,
  `diplome3` text NOT NULL,
  `universite3` text NOT NULL,
  `date_val3` date NOT NULL,
  `descri3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `profession`
--

INSERT INTO `profession` (`id`, `job`, `apropos`, `nom_poste1`, `entreprise1`, `date_debut1`, `date_fin1`, `desc1`, `nom_poste2`, `entreprise2`, `date_debut2`, `date_fin2`, `desc2`, `diplome1`, `universite1`, `date_val1`, `descri1`, `diplome2`, `universite2`, `date_val2`, `descri2`, `diplome3`, `universite3`, `date_val3`, `descri3`) VALUES
(70, 'Étudiante', 'C\'est cool ', 'FGchv', 'dtfgh', '2018-05-01', '2018-05-03', 'fgchvj', 'tyfghjbn', 'tyfghjb', '2018-05-01', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Structure de la table `Publication`
--

CREATE TABLE `Publication` (
  `Id` int(11) NOT NULL,
  `Texte` text NOT NULL,
  `Date` date NOT NULL,
  `Heure` time NOT NULL,
  `Id_Un` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Publication`
--

INSERT INTO `Publication` (`Id`, `Texte`, `Date`, `Heure`, `Id_Un`) VALUES
(9, 'ienb', '2018-05-03', '17:54:19', 69),
(10, 'Coucou', '2018-05-01', '07:22:14', 70),
(12, 'Saluti', '2018-05-01', '15:23:07', 68),
(16, 'bien \r\n', '2018-05-03', '22:18:08', 70);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `mail` text NOT NULL,
  `naissance` date NOT NULL,
  `mdp` text NOT NULL,
  `sexe` text NOT NULL,
  `role` tinytext NOT NULL,
  `Photo` text NOT NULL,
  `Statut` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `prenom`, `mail`, `naissance`, `mdp`, `sexe`, `role`, `Photo`, `Statut`) VALUES
(68, 'Guerlais', 'Chloé', 'chloe.guerlais@edu.ece.fr', '1997-03-31', 'co', 'femme', '1', 'images/Chlo_pro.png', 'Étudiante à l\'ECE Paris'),
(69, 'Batigny', 'Roxane', 'roxane.batigny@edu.ece.fr', '1997-11-08', 'machin', 'femme', '1', 'images/Rox_pro.png', 'Étudiante à l\'ECE Paris'),
(70, 'Puech', 'Nicolas', 'nicolas.puech@edu.ece.fr', '1996-08-02', 'pipi', 'homme', '1', 'images/Nico_pro.png', 'Étudiant à l\'ECE Paris');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Ami`
--
ALTER TABLE `Ami`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`),
  ADD KEY `Id_Utili` (`Id_Utili`);

--
-- Index pour la table `offre`
--
ALTER TABLE `offre`
  ADD PRIMARY KEY (`Num_offre`);

--
-- Index pour la table `profession`
--
ALTER TABLE `profession`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Publication`
--
ALTER TABLE `Publication`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Un` (`Id_Un`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `offre`
--
ALTER TABLE `offre`
  MODIFY `Num_offre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `Publication`
--
ALTER TABLE `Publication`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Ami`
--
ALTER TABLE `Ami`
  ADD CONSTRAINT `ami_ibfk_1` FOREIGN KEY (`Id_Utili`) REFERENCES `utilisateurs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Publication`
--
ALTER TABLE `Publication`
  ADD CONSTRAINT `publication_ibfk_1` FOREIGN KEY (`Id_Un`) REFERENCES `utilisateurs` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
