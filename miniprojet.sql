# ************************************************************
# Sequel Pro SQL dump
# Version 4529
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Hôte: localhost (MySQL 5.5.42)
# Base de données: miniprojet
# Temps de génération: 2016-09-25 08:27:55 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Affichage de la table image
# ------------------------------------------------------------

DROP TABLE IF EXISTS `image`;

CREATE TABLE `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `legend` text,
  `orientation` int(11) NOT NULL DEFAULT '0',
  `path` varchar(255) NOT NULL,
  `id_repository` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_repository` (`id_repository`),
  CONSTRAINT `image_ibfk_1` FOREIGN KEY (`id_repository`) REFERENCES `repository` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

LOCK TABLES `image` WRITE;
/*!40000 ALTER TABLE `image` DISABLE KEYS */;

INSERT INTO `image` (`id`, `title`, `legend`, `orientation`, `path`, `id_repository`)
VALUES
	(2,'pouet','pouet',0,'original.jpg',1),
	(3,'pouet','pouet',0,'Happy-National-Senior-Citizen-Day-Old-People-Picture.jpg',1),
	(4,'pouet','pouet',0,'1-8.jpg',2);

/*!40000 ALTER TABLE `image` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table repository
# ------------------------------------------------------------

DROP TABLE IF EXISTS `repository`;

CREATE TABLE `repository` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `id_parent` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_parent` (`id_parent`),
  CONSTRAINT `repository_ibfk_1` FOREIGN KEY (`id_parent`) REFERENCES `repository` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

LOCK TABLES `repository` WRITE;
/*!40000 ALTER TABLE `repository` DISABLE KEYS */;

INSERT INTO `repository` (`id`, `name`, `id_parent`)
VALUES
	(1,'racine',NULL),
	(2,'sous dossier',1);

/*!40000 ALTER TABLE `repository` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
