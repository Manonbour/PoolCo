-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  sam. 05 mai 2018 à 21:58
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
-- Structure de la table `Album`
--

CREATE TABLE `Album` (
  `id_photo` int(11) NOT NULL,
  `URL` text NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Album`
--

INSERT INTO `Album` (`id_photo`, `URL`, `id_utilisateur`) VALUES
(20, 'images/portfolio-14-400x400.jpg', 69),
(21, 'images/pardef.png', 69),
(22, 'images/portfolio-2-600x400.jpg', 70),
(23, 'images/Man_pro.png', 72),
(24, 'images/Chlo_pro.png', 70);

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
(1, 72, 'Dupont', 'Jean', 'images/pardef.png', '2018-04-03', 'jean.dupont@edu.ece.fr', 1),
(2, 70, 'Batigny', 'Roxane', 'images/Rox_pro.png', '1997-12-13', 'roxane.batigny@edu.ece.fr', 0),
(3, 70, 'Gueritaine', 'Antoinette', 'images/Ant_pro.png', '1997-11-25', 'antoinette.gueritaine@edu.ece.fr', 0),
(4, 70, 'Puech', 'Stéphanie', 'images/portfolio-13-400x400.jpg', '2018-05-01', 'stephanie.puech@edu.ece.fr', 1),
(35, 69, 'Lebert', 'Armand', 'images/pardef.png', '1998-11-11', 'armand.lebert@edu.ece.fr', 1),
(36, 69, 'Boone', 'Marin', 'images/pardef.png', '1997-12-12', 'marin.boone@edu.ece.fr', 0),
(37, 73, 'Marcadé', 'Romain', 'images/pardef.png', '1997-02-08', 'romain.marcade@edu.ece.fr', 0);

-- --------------------------------------------------------

--
-- Structure de la table `Event`
--

CREATE TABLE `Event` (
  `id_event` int(11) NOT NULL,
  `Titre` text NOT NULL,
  `Lieu` text NOT NULL,
  `Date` date NOT NULL,
  `Heure` time NOT NULL,
  `Description` mediumtext NOT NULL,
  `id_posteur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Event`
--

INSERT INTO `Event` (`id_event`, `Titre`, `Lieu`, `Date`, `Heure`, `Description`, `id_posteur`) VALUES
(1, 'Vente d\'ordinateurs à prix bas !', 'Paris 14e', '2018-05-02', '14:30:00', 'Venez achetez nos ordinateurs reconditionnés dans notre boutique du 14ème arrondissement de Paris, 70 boulevard Brune. Des prix abordables parfaits pour les étudiants.', 70);

-- --------------------------------------------------------

--
-- Structure de la table `Like`
--

CREATE TABLE `Like` (
  `id_publi` int(11) NOT NULL,
  `id_utili` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(70, 'Étudiant', 'Je m\'appelle Nicolas et je suis intéressé par la mécanique quantique ainsi que l\'informatique. J\'aime jouer au football et être avec mes amis. On dit de moi que je suis passionné et motivé, avec l\'envie d bien faire les choses que j\'entreprend.', 'Stagiaire', 'Orange', '2017-06-01', '2017-06-27', 'Stagiaire en design de marque chez Orange a Arcueil.', '', '', '0000-00-00', '0000-00-00', '', 'Baccalauréat Scientifique', 'Lycée Notre Dame de France', '2015-07-02', 'Obtention du bac scientifique mention bien section européenne et option japonais.', 'Licence', 'Paris Sorbonne', '2017-05-30', 'Licence de droit obtenu à la Sorbonne ', '', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Structure de la table `Publication`
--

CREATE TABLE `Publication` (
  `Id` int(11) NOT NULL,
  `Texte` text NOT NULL,
  `Date` date NOT NULL,
  `Heure` time NOT NULL,
  `URL` text,
  `Id_Un` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Publication`
--

INSERT INTO `Publication` (`Id`, `Texte`, `Date`, `Heure`, `URL`, `Id_Un`) VALUES
(33, 'Architecture moderne et dynamique', '2018-05-05', '21:45:34', 'images/portfolio-4-600x400.jpg', 70),
(34, 'Retour de Thaïlande...', '2018-05-05', '21:46:46', '', 69),
(35, 'Voici une jolie photo', '2018-05-05', '21:48:38', 'images/Photo Koh Phi Phi.jpg', 69);

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
(69, 'Batigny', 'Roxane', 'roxane.batigny@edu.ece.fr', '1997-11-08', 'roxbat', 'femme', '1', 'images/Rox_pro.png', 'Étudiante à l\'ECE Paris'),
(70, 'Puech', 'Nicolas', 'nicolas.puech@edu.ece.fr', '1996-08-02', 'nico', 'homme', '1', 'images/Nico_pro.png', 'Étudiant à l\'ECE Paris'),
(72, 'Bourgoing', 'Manon', 'manon.bourgoing@edu.ece.fr', '2000-07-09', 'manon', 'femme', '0', 'images/Man_pro.png', 'Étudiante'),
(73, 'Ewald', 'Antoine', 'antoine.ewald@edu.ece.fr', '1997-09-13', 'antoine', 'homme', '0', 'images/pardef.png', 'Étudiant');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Album`
--
ALTER TABLE `Album`
  ADD PRIMARY KEY (`id_photo`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `Ami`
--
ALTER TABLE `Ami`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`),
  ADD KEY `Id_Utili` (`Id_Utili`);

--
-- Index pour la table `Event`
--
ALTER TABLE `Event`
  ADD PRIMARY KEY (`id_event`),
  ADD KEY `id_posteur` (`id_posteur`);

--
-- Index pour la table `Like`
--
ALTER TABLE `Like`
  ADD PRIMARY KEY (`id_publi`,`id_utili`),
  ADD KEY `id_utili` (`id_utili`);

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
  ADD KEY `Id_Un` (`Id_Un`),
  ADD KEY `Id` (`Id`);

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
-- AUTO_INCREMENT pour la table `Album`
--
ALTER TABLE `Album`
  MODIFY `id_photo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT pour la table `Ami`
--
ALTER TABLE `Ami`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT pour la table `Event`
--
ALTER TABLE `Event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `offre`
--
ALTER TABLE `offre`
  MODIFY `Num_offre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `Publication`
--
ALTER TABLE `Publication`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Album`
--
ALTER TABLE `Album`
  ADD CONSTRAINT `album_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateurs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Ami`
--
ALTER TABLE `Ami`
  ADD CONSTRAINT `ami_ibfk_1` FOREIGN KEY (`Id_Utili`) REFERENCES `utilisateurs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Event`
--
ALTER TABLE `Event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`id_posteur`) REFERENCES `utilisateurs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Like`
--
ALTER TABLE `Like`
  ADD CONSTRAINT `like_ibfk_1` FOREIGN KEY (`id_publi`) REFERENCES `Publication` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `like_ibfk_2` FOREIGN KEY (`id_utili`) REFERENCES `utilisateurs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Publication`
--
ALTER TABLE `Publication`
  ADD CONSTRAINT `publication_ibfk_1` FOREIGN KEY (`Id_Un`) REFERENCES `utilisateurs` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
