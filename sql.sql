-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mer 01 Juin 2022 à 23:35
-- Version du serveur :  10.3.31-MariaDB-0+deb10u1
-- Version de PHP :  7.3.31-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Doremii`
--

-- --------------------------------------------------------

--
-- Structure de la table `aime`
--

CREATE TABLE `aime` (
  `id_playlist` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Contenu de la table `aime`
--


-- --------------------------------------------------------

--
-- Structure de la table `Commentaire`
--

CREATE TABLE `Commentaire` (
  `ordre` int(11) NOT NULL,
  `id_playlist` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `commentaire` varchar(3000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Commentaire`
--


-- --------------------------------------------------------

--
-- Structure de la table `Contenu`
--

CREATE TABLE `Contenu` (
  `id_playlist` int(11) NOT NULL,
  `ordre` int(11) NOT NULL,
  `lien_musique` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Contenu`
--


-- --------------------------------------------------------

--
-- Structure de la table `playlist`
--

CREATE TABLE `playlist` (
  `id_playlist` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `lien_image` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `playlist`
--



-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `user`
--


--
-- Index pour les tables exportées
--

--
-- Index pour la table `aime`
--
ALTER TABLE `aime`
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_playlist` (`id_playlist`);

--
-- Index pour la table `Commentaire`
--
ALTER TABLE `Commentaire`
  ADD PRIMARY KEY (`ordre`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_playlist` (`id_playlist`);

--
-- Index pour la table `Contenu`
--
ALTER TABLE `Contenu`
  ADD PRIMARY KEY (`ordre`),
  ADD KEY `id_playlist` (`id_playlist`);

--
-- Index pour la table `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`id_playlist`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Commentaire`
--
ALTER TABLE `Commentaire`
  MODIFY `ordre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `Contenu`
--
ALTER TABLE `Contenu`
  MODIFY `ordre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `playlist`
--
ALTER TABLE `playlist`
  MODIFY `id_playlist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `aime`
--
ALTER TABLE `aime`
  ADD CONSTRAINT `aime_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `aime_ibfk_2` FOREIGN KEY (`id_playlist`) REFERENCES `playlist` (`id_playlist`);

--
-- Contraintes pour la table `Commentaire`
--
ALTER TABLE `Commentaire`
  ADD CONSTRAINT `Commentaire_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `Commentaire_ibfk_2` FOREIGN KEY (`id_playlist`) REFERENCES `playlist` (`id_playlist`);

--
-- Contraintes pour la table `Contenu`
--
ALTER TABLE `Contenu`
  ADD CONSTRAINT `Contenu_ibfk_1` FOREIGN KEY (`id_playlist`) REFERENCES `playlist` (`id_playlist`);

--
-- Contraintes pour la table `playlist`
--
ALTER TABLE `playlist`
  ADD CONSTRAINT `playlist_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
