-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Ven 03 Juin 2022 à 10:18
-- Version du serveur :  10.3.31-MariaDB-0+deb10u1
-- Version de PHP :  7.3.31-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `DoremiiSafe`
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

INSERT INTO `aime` (`id_playlist`, `id_user`) VALUES
(11, 5),
(12, 6),
(14, 6),
(11, 7),
(14, 7),
(17, 8),
(15, 9),
(17, 9),
(18, 8),
(14, 8),
(15, 10),
(13, 10),
(11, 11),
(13, 11),
(12, 11);

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

INSERT INTO `Commentaire` (`ordre`, `id_playlist`, `id_user`, `commentaire`) VALUES
(15, 15, 9, 'J aime beaucup brassens c\'est un homme genial'),
(16, 15, 5, 'Reel'),
(17, 15, 7, 'La france n\'a jamais connu aussi grand artiste'),
(18, 17, 9, 'un peu violent comme musique monsieur'),
(19, 17, 8, 'Comment ça Monsieur ?'),
(20, 17, 9, 'Pas de punk à mon anniversaire'),
(21, 18, 9, 'Tu es un cow boy ou bien ?'),
(22, 18, 8, 'lol'),
(23, 18, 8, 'tu es drole toi'),
(24, 14, 8, 'Electro fanaticos'),
(25, 14, 8, 'très fan'),
(26, 13, 10, 'De la vraie musique !!'),
(27, 15, 10, 'drole'),
(28, 11, 10, 'Musique sauvage je trouve'),
(29, 17, 10, 'oh on se calme ici'),
(30, 11, 11, 'ah'),
(31, 13, 11, 'effectivement'),
(32, 12, 11, 'russe vodka adidas');

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

INSERT INTO `Contenu` (`id_playlist`, `ordre`, `lien_musique`) VALUES
(11, 13, 'https://soundcloud.com/roir/pay-to-cum?utm_source=clipboard&utm_medium=text&utm_campaign=social_sharing'),
(11, 14, 'https://soundcloud.com/dudacastro/black-flag-03-six-pack?utm_source=clipboard&utm_medium=text&utm_campaign=social_sharing'),
(11, 15, 'https://soundcloud.com/vinicius-leite-796449812/big-mouth?utm_source=clipboard&utm_medium=text&utm_campaign=social_sharing'),
(11, 16, 'https://soundcloud.com/bridge9/straight-edge-revenge?utm_source=clipboard&utm_medium=text&utm_campaign=social_sharing'),
(12, 17, 'https://soundcloud.com/user-781100982/tri-paloski?utm_source=clipboard&utm_medium=text&utm_campaign=social_sharing'),
(12, 18, 'https://soundcloud.com/xsproject/bochka-bass-kolbaser?utm_source=clipboard&utm_medium=text&utm_campaign=social_sharing'),
(12, 19, 'https://soundcloud.com/xsproject/bochka-bass-kolbaser?utm_source=clipboard&utm_medium=text&utm_campaign=social_sharing'),
(12, 20, 'https://soundcloud.com/hard-bass-school/hard-bass-school-slavic-lives-matter?utm_source=clipboard&utm_medium=text&utm_campaign=social_sharing'),
(12, 21, 'https://soundcloud.com/hard-bass-school/hard-bass-school-slavic-lives-matter?utm_source=clipboard&utm_medium=text&utm_campaign=social_sharing'),
(13, 22, 'https://soundcloud.com/nikang-1/5-86?utm_source=clipboard&utm_medium=text&utm_campaign=social_sharing'),
(13, 23, 'https://soundcloud.com/hellcatrecords/she-got-arrested?utm_source=clipboard&utm_medium=text&utm_campaign=social_sharing'),
(13, 24, 'https://soundcloud.com/blondie-ska/sally-brown-bad-manners?utm_source=clipboard&utm_medium=text&utm_campaign=social_sharing'),
(14, 25, 'https://soundcloud.com/entre-soi/alexis-lumiere-paroxysma-1?utm_source=clipboard&utm_medium=text&utm_campaign=social_sharing'),
(14, 26, 'https://soundcloud.com/cheptel-records/02-fiat-lux?in=cheptel-records/sets/alexis-lumiere-invitation&utm_source=clipboard&utm_medium=text&utm_campaign=social_sharing'),
(14, 27, 'https://soundcloud.com/platform/spfdj-boiler-room-x-herrensauna?utm_source=clipboard&utm_medium=text&utm_campaign=social_sharing'),
(14, 28, 'https://soundcloud.com/nightcore-3/nightcore-courtesy-call?utm_source=clipboard&utm_medium=text&utm_campaign=social_sharing'),
(15, 29, 'https://soundcloud.com/tronicsound-1/brassens-je-me-suis-fait-tout-petit-thetronicsound-edit?utm_source=clipboard&utm_medium=text&utm_campaign=social_sharing'),
(15, 30, 'https://soundcloud.com/br-14/georges-brassens-les-copains-dabord-excellent-excellent-excelent-le-meilleur-clip-de-brassens?utm_source=clipboard&utm_medium=text&utm_campaign=social_sharing'),
(15, 31, 'https://soundcloud.com/jimmy-rodriguez-98/georges-brassens-la-mauvaise-reputation-officiel-live-version-128kbit?utm_source=clipboard&utm_medium=text&utm_campaign=social_sharing'),
(15, 32, 'https://soundcloud.com/mr-sample/georges-brassens-chanson-pour?utm_source=clipboard&utm_medium=text&utm_campaign=social_sharing'),
(16, 33, 'https://soundcloud.com/charles-trenet/le-grand-cafe-1?utm_source=clipboard&utm_medium=text&utm_campaign=social_sharing'),
(16, 34, 'https://soundcloud.com/minhngafl-1/la-mer-charles-trenet?utm_source=clipboard&utm_medium=text&utm_campaign=social_sharing'),
(16, 35, 'https://soundcloud.com/sadawayans/douce-france-charles-trenet?utm_source=clipboard&utm_medium=text&utm_campaign=social_sharing'),
(17, 36, 'https://soundcloud.com/javier-alexis-alvarado-guerrero/ultra-violento?utm_source=clipboard&utm_medium=text&utm_campaign=social_sharing'),
(17, 37, 'https://soundcloud.com/thepleasurefuckers/papel-morao?utm_source=clipboard&utm_medium=text&utm_campaign=social_sharing'),
(17, 38, 'https://soundcloud.com/los-violadores/revolucion-inter-1?utm_source=clipboard&utm_medium=text&utm_campaign=social_sharing'),
(17, 39, 'https://soundcloud.com/nakatomiplaza-music/si-yo-soy-asi?utm_source=clipboard&utm_medium=text&utm_campaign=social_sharing'),
(18, 40, 'https://soundcloud.com/thedillards/the-dillards-reubens-train?utm_source=clipboard&utm_medium=text&utm_campaign=social_sharing'),
(18, 41, 'https://soundcloud.com/andrewgreene/dueling-banjo?utm_source=clipboard&utm_medium=text&utm_campaign=social_sharing'),
(18, 42, 'https://soundcloud.com/big-classic-nqn/earl-scruggs-foggy-mountain?utm_source=clipboard&utm_medium=text&utm_campaign=social_sharing');

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

INSERT INTO `playlist` (`id_playlist`, `id_user`, `nom`, `lien_image`) VALUES
(11, 5, 'Harcore Californien', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fmediad.publicbroadcasting.net%2Fp%2Fshared%2Fnpr%2Fstyles%2Fx_large%2Fnprshared%2F201805%2F600893789.jpg&f=1&nofb=1'),
(12, 5, 'Gopnik', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi.scdn.co%2Fimage%2Ff1b29366b61c2c6f53573fbf00eaf3e9bf141c3e&f=1&nofb=1'),
(13, 6, 'SkaPunk', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2F4.bp.blogspot.com%2F-SQH95U_mFeA%2FWH_nkPDcRZI%2FAAAAAAAAFz8%2FIY5fBzYZUq8B6X_3buOopNNuBVm1XqTnQCLcB%2Fs1600%2FWhat%252BDo%252BYou%252BKnow%252BAbout%252BSka%252BPunk%252B1.jpg&f=1&nofb=1'),
(14, 6, 'FanElectro', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.shadok.strasbourg.eu%2Fwp-content%2Fuploads%2F2018%2F01%2FCircuit-Bending.png&f=1&nofb=1'),
(15, 7, 'Brassens', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcdn-s-www.ledauphine.com%2Fimages%2F57219597-D560-46E1-BCDB-0F22BEEA6826%2FNW_raw%2Fun-micro-une-moustache-et-une-guitare-en-bandouliere-georges-brassens-est-mort-il-y-a-trente-ans-son-souvenir-est-intact-archives-1319831152.jpg&f=1&nofb=1'),
(16, 7, 'Trenet', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.repro-tableaux.com%2Fkunst%2F_frenchphotographer%2Fcharles_trenet_1913_2001_1938.jpg&f=1&nofb=1'),
(17, 8, 'Punk Espagnol', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi.pinimg.com%2F736x%2F51%2F21%2F23%2F51212361c3b85d5f9cd081889a490269--a-tv-punk-rock.jpg&f=1&nofb=1'),
(18, 9, 'Banjo ', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.mandoisland.com%2Fwp-content%2Fuploads%2F2016%2F08%2Fdillards-02-610x350.jpg&f=1&nofb=1');

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

INSERT INTO `user` (`id_user`, `pseudo`, `password`, `admin`) VALUES
(5, 'CaptainBidou', 'CHARLIE', 0),
(6, 'LukasGrando', 'oui', 0),
(7, 'Compte_fan_Brassens', 'non', 0),
(8, 'SirNamu', 'ah', 0),
(9, 'Tomas', 'oh', 0),
(10, 'JeanMichel', 'lol', 0),
(11, 'David', 'Dubousquett', 0);

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
  MODIFY `ordre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT pour la table `Contenu`
--
ALTER TABLE `Contenu`
  MODIFY `ordre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT pour la table `playlist`
--
ALTER TABLE `playlist`
  MODIFY `id_playlist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
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
