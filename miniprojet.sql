-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 28 Septembre 2016 à 22:03
-- Version du serveur :  5.5.50-0+deb8u1
-- Version de PHP :  5.6.24-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

CREATE DATABASE IF NOT EXISTS miniprojet;

--
-- Base de données :  `miniprojet`
--

-- --------------------------------------------------------

--
-- Structure de la table `fos_user`
--

CREATE TABLE IF NOT EXISTS `fos_user` (
`id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
(3, 'admin', 'admin', 'admin@admin.com', 'admin@admin.com', 1, 'cb95kre7yvscssc00s484s4kk4wo8o4', '$2y$13$cb95kre7yvscssc00s484eA/oJmVGDvPJ4QoQwAS8CMHtFKOL0yeG', '2016-09-28 22:01:47', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
`id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `legend` text,
  `orientation` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  `id_repository` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `image`
--

INSERT INTO `image` (`id`, `title`, `legend`, `orientation`, `path`, `id_repository`) VALUES
(38, 'Maison de vacance', 'Ceci est une maison de vacance', 0, '28-09-2016/69-9630a339602ddc0703bd23684bb2edc9.jpg', 1),
(39, 'Avion décollage', 'Ceci est un avion qui décolle', 0, '28-09-2016/69-a09e2a32d4d7a40b50a65759bc90011e.jpg', 5),
(40, 'Avion de chasse', 'Ceci est une image d''avion de chasse', 0, '28-09-2016/69-e562265a367f7811d7bac09eedbbeb63.jpg', 5),
(42, 'Sculpture        ', 'Ceci est une sculpture!', -180, '28-09-2016/69-10fd7e8c567fc207a3990dac6ed3b00f.jpg', 6),
(43, 'Grosse taule', 'Ceci est une grosse taule', 0, '28-09-2016/69-3524199864313517a232dcea97beae01.gif', 6);

-- --------------------------------------------------------

--
-- Structure de la table `repository`
--

CREATE TABLE IF NOT EXISTS `repository` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `id_parent` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `repository`
--

INSERT INTO `repository` (`id`, `name`, `id_parent`) VALUES
(1, 'racine', NULL),
(5, 'Avions', 1),
(6, 'Nantes', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `fos_user`
--
ALTER TABLE `fos_user`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`), ADD UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`), ADD UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
 ADD PRIMARY KEY (`id`), ADD KEY `id_repository` (`id_repository`);

--
-- Index pour la table `repository`
--
ALTER TABLE `repository`
 ADD PRIMARY KEY (`id`), ADD KEY `id_parent` (`id_parent`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `fos_user`
--
ALTER TABLE `fos_user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT pour la table `repository`
--
ALTER TABLE `repository`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `image`
--
ALTER TABLE `image`
ADD CONSTRAINT `FK_C53D045FF974D71A` FOREIGN KEY (`id_repository`) REFERENCES `repository` (`id`);

--
-- Contraintes pour la table `repository`
--
ALTER TABLE `repository`
ADD CONSTRAINT `FK_5CFE57CD1BB9D5A2` FOREIGN KEY (`id_parent`) REFERENCES `repository` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
