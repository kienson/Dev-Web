DROP DATABASE IF EXISTS dokkan;
CREATE DATABASE IF NOT EXISTS dokkan ;
USE dokkan;

DROP TABLE IF EXISTS `Cartes`;

CREATE TABLE `Cartes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `categorie_id` varchar(10) DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `prix` decimal(5,2) DEFAULT NULL,
  `quantite` int DEFAULT NULL,
  `reference` varchar(10) DEFAULT NULL,
  `code` varchar(10) DEFAULT NULL,
  `edition` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

LOCK TABLES `Cartes` WRITE;

INSERT INTO `Cartes` VALUES (1,'01','Gogeta SSJ Blue','../img/gogetaBlue.jpeg',10.00,40,'001','f001','LR'),(2,'01','Son Gohan SSJ (Futur)','../img/gohanFutur.jpg',52.00,47,'002','f002','LR'),(3,'01','Son Gohan (enfant) et Piccolo','../img/gohanPiccolo.webp',14.00,45,'004','f004','UR'),(4,'01','Gamma 1','../img/gamma1.jpg',14.00,64,'005','f005','UR'),(5,'01','Cooler (forme finale)','../img/coolerFinale.jpg',12.00,77,'006','f006','LR'),(6,'01','Super Vegeta','../img/superVegeta.webp',25.00,85,'007','f007','UR'),(7,'02','Bardock','../img/bardock.webp',25.00,78,'101','E101','UR'),(8,'02','Oméga Shenron','../img/omegaShenron.jpg',25.00,72,'102','E102','LR'),(9,'02','Gamma 2','../img/gamma2.webp',25.00,70,'103','E103','UR'),(10,'02','Vegetto SSJ Blue','../img/vegettoBlue.jpg',25.00,78,'105','E105','LR'),(11,'02','Ginyu','../img/ginyu.webp',25.00,75,'106','E106','UR'),(12,'02','Vegeta SSJ4','../img/vegetaSsj4.webp',25.00,80,'107','E107','SSR'),(13,'03','Buu (Gotenks absorbé)','../img/buutenks.webp',25.00,47,'201','EC201','SSR'),(14,'03','Gogeta SSJ4','../img/gogetaSsj4.jpg',25.00,68,'202','EC202','LR'),(15,'03','Son Gohan (Ultime)','../img/gohanUltime.webp',25.00,78,'203','EC203','LR'),(16,'03','Son Goku SSJ God','../img/gokuGod.webp',25.00,80,'205','EC205','SSR'),(17,'03','Broly SSJ Berseker','../img/brolySsjBerseker.png',25.00,80,'206','EC206','UR'),(18,'03','Métal Cooler','../img/metalCooler.webp',25.00,79,'207','EC207','SSR'),(19,'04','Black Goku SSJ Rosé','../img/black.png',25.00,47,'201','EC201','LR'),(20,'04','Buu (Gohan absorbé)','../img/buuhan.webp',25.00,68,'202','EC202','UR'),(21,'04','Son Goku SSJ4 (Full Power)','../img/gokuSsj4.jpg',25.00,78,'203','EC203','LR'),(22,'04','Piccolo Junior','../img/piccoloJunior.webp',25.00,80,'205','EC205','UR'),(23,'04','Zamasu','../img/zamasu.png',25.00,80,'206','EC206','SSR'),(24,'04','Majin Vegeta','../img/majinVegeta.webp',25.00,79,'207','EC207','SSR'),(25,'05','Black Goku','../img/black.webp',25.00,47,'201','EC201','LR'),(26,'05','Goku SSJ','../img/gokuSsj.png',25.00,68,'202','EC202','LR'),(27,'05','Piccolo (puissance éveillée)','../img/piccolo.jpg',25.00,78,'203','EC203','LR'),(28,'05','Son Goku SSJ God et Vegeta SSJ God','../img/gokuVegeta.jpg',25.00,80,'205','EC205','UR'),(29,'05','Super Gogeta','../img/superGogeta.jpg',25.00,80,'206','EC206','LR'),(30,'05','Son Gohan (adolescent) SSJ2','../img/gohanSsj2.jpg',25.00,79,'207','EC207','UR');

UNLOCK TABLES;


DROP TABLE IF EXISTS `Categories`;

CREATE TABLE `Categories` (
  `id` varchar(10) NOT NULL,
  `nom` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

LOCK TABLES `Categories` WRITE;

INSERT INTO `Categories` VALUES ('01','Type PUI'),('02','Type AGI'),('03','Type END'),('04','Type INT'),('05','Type TEC');

DROP TABLE IF EXISTS `Paniers`;

CREATE TABLE `Paniers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idClient` int NOT NULL,
  `idArticle` int NOT NULL,
  `quantite` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

LOCK TABLES `Paniers` WRITE;
UNLOCK TABLES;


DROP TABLE IF EXISTS `Utilisateurs`;

CREATE TABLE `Utilisateurs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(20) DEFAULT NULL,
  `prenom` varchar(20) DEFAULT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mdp` varchar(20) DEFAULT NULL,
  `admin` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

LOCK TABLES `Utilisateurs` WRITE;
INSERT INTO `Utilisateurs` VALUES (1,'tim','tim','dlt','tim@dlt.fr','mdp1',1);
UNLOCK TABLES;

