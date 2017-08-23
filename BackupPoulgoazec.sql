-- --------------------------------------------------------
-- Hôte :                        127.0.0.1
-- Version du serveur:           5.5.53-0ubuntu0.14.04.1 - (Ubuntu)
-- SE du serveur:                debian-linux-gnu
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Export de la structure de la base pour poulgoazec
CREATE DATABASE IF NOT EXISTS `poulgoazec` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `poulgoazec`;


-- Export de la structure de table poulgoazec. acheteur
CREATE TABLE IF NOT EXISTS `acheteur` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(25) DEFAULT NULL,
  `pwd` char(255) DEFAULT NULL,
  `raisonSocialeEntreprise` varchar(50) DEFAULT NULL,
  `adresse` varchar(75) DEFAULT NULL,
  `ville` varchar(75) DEFAULT NULL,
  `codePostale` varchar(25) DEFAULT NULL,
  `numHabilitation` int(11) DEFAULT NULL,
  `salle` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Export de données de la table poulgoazec.acheteur : ~13 rows (environ)
/*!40000 ALTER TABLE `acheteur` DISABLE KEYS */;
INSERT INTO `acheteur` (`id`, `login`, `pwd`, `raisonSocialeEntreprise`, `adresse`, `ville`, `codePostale`, `numHabilitation`, `salle`) VALUES
	(1, 'Treant_Marcel', 'dfa50c5595397c61c39d437beb400a427d91773974409c8cb1d9c8e88be93e8b', 'Audierne Marée', '2 rue de la République', 'PLOUHINEC', '29780', 0, 1),
	(2, 'Peren_Stephanie', 'dd1cd3d60a28bc5624a4a414028d2b67e6c6a62620502e573efb5070701935cd', 'Rosatlantic', '10 rue de la République', 'PLOUHINEC', '29780', 0, NULL),
	(3, 'Lapez_Johan', 'b06df691cee3107ac75038371e86310a0ebe6a3d4de4981a32830d2c50f6d0da', 'Viviers d?Audierne', '10 rue Schoch', 'AUDIERNE', '29770', 0, NULL),
	(4, 'Lamou_Gerard', 'b870b7809747623def661ded7b0da0e52beddfc50235bbda65f1e8a34350ff7a', 'Conserverie d?Audierne', '5 rue de la victoire', 'PLOUHINEC', '29780', 0, NULL),
	(5, 'Daniel_Jean', '6792a7378ad3efaa577aaa68a96880aed193e09ebea3ac5f6e82514ff7d90c3f', 'La Criee Le Guilvinec', '2 rue principale', 'LE GUILVINEC', '29730', 0, NULL),
	(6, 'Louarn_Annie', '004c75c4a5cf6faaa9c8a200457de7a8bc4845becf71d5ef6883ef5d3f1caf70', 'Fumoir de la Pointe du Raz', '45 rue du marché', 'PLOGOFF', '29770', 0, NULL),
	(7, 'Claquin_Jean', 'ae251a0c96af0f274b6f9715025e06dbde9f3253a796c0edcef23f9560d83d96', 'FURIC MAREE SA', '32 rue principale', 'LE GUILVINEC', '29730', 0, NULL),
	(8, 'Doare_Clet', 'ecdba0e2f6615760b196edd49a2f1bf0d0d6dfccbf0ad8fe9ee55722dcca42a4', 'Halios Marée SA', '1 rue des poissons', 'SAINT GUENOLE', '29760', 0, NULL),
	(9, 'Lozach_Hery', '3ebe95bc23aea71fa066b78f6b1e50dbeaaf58edfa921125101d672e8ca178ec', 'Poissonnerie LEROY', '10 rue des bateaux', 'ESQUIBIEN', '29770', 0, NULL),
	(10, 'Quenet_Claude', '065db44fc09e793d51fca8ee8076358e09b368b6c91e121b511f4f525d0009cb', 'Poissonnerie QUENET', '11 rue du port', 'DOUARNENEZ', '29172', 0, NULL),
	(11, 'Moan_Mickael', '839f5a01576e1ebc822724a4e5248582454e3fac2da62fa5fcaf49337144b824', 'Aigue Marine', '5 rue du port', 'LOCTUDY', '29750', 0, NULL),
	(12, 'Gornes_Bernard', '736b57465bc098745b079bbf59b7645dc4548bc5e23e4805c92fa6a35eb0e3a9', 'Poissonnerie des Halles', '34 rue du port', 'AUDIERNE', '29770', 0, NULL),
	(13, 'admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 'ADMIN', 'Poulgoazec', 'Poulgoazec', '29000', 1, NULL);
/*!40000 ALTER TABLE `acheteur` ENABLE KEYS */;


-- Export de la structure de table poulgoazec. bac
CREATE TABLE IF NOT EXISTS `bac` (
  `id` char(1) NOT NULL,
  `tare` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Export de données de la table poulgoazec.bac : ~2 rows (environ)
/*!40000 ALTER TABLE `bac` DISABLE KEYS */;
INSERT INTO `bac` (`id`, `tare`) VALUES
	('B', '2.50'),
	('F', '4');
/*!40000 ALTER TABLE `bac` ENABLE KEYS */;


-- Export de la structure de table poulgoazec. bateau
CREATE TABLE IF NOT EXISTS `bateau` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nomBateau` varchar(25) DEFAULT NULL,
  `immatriculationBateau` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

-- Export de données de la table poulgoazec.bateau : ~23 rows (environ)
/*!40000 ALTER TABLE `bateau` DISABLE KEYS */;
INSERT INTO `bateau` (`id`, `nomBateau`, `immatriculationBateau`) VALUES
	(1, 'Altair', 'Ad 895511'),
	(2, 'Macareux', 'Ad 584873'),
	(3, 'Avel Ar Mor', 'Ad 584930'),
	(4, 'Plujadur', 'Ad 627846'),
	(5, 'Gwaien', 'Ad 730414'),
	(6, 'L Estran', 'Ad 815532'),
	(7, 'Le Petit Corse', 'Ad 584826'),
	(8, 'Le Vorlen', 'Ad 614221'),
	(9, 'Les Copains d Abord', 'Ad 584846'),
	(10, 'Tu Pe Du', 'Ad 584871'),
	(11, 'Korrigan', 'Ad 895472'),
	(12, 'Ar Guevel', 'Ad 895479'),
	(13, 'Broceliande', 'Ad 895519'),
	(14, 'L Aventurier', 'Ad 584865'),
	(15, 'L Oceanide', 'Ad 741312'),
	(16, 'L Arche d alliance', 'Ad 584830'),
	(17, 'Sirocco', 'Ad 715792'),
	(18, 'Ondine', 'Ad 584772'),
	(19, 'Chimere', 'Ad 895516'),
	(20, 'aaaa', 'ad 8999'),
	(21, 'TEST', 'TE 910627'),
	(22, '', ''),
	(23, 'Altair Deux', 'Ad 895512');
/*!40000 ALTER TABLE `bateau` ENABLE KEYS */;


-- Export de la structure de table poulgoazec. espece
CREATE TABLE IF NOT EXISTS `espece` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nomEspece` varchar(25) DEFAULT NULL,
  `nomScientifiqueEspece` varchar(25) DEFAULT NULL,
  `nomCommunEspece` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57051 DEFAULT CHARSET=latin1;

-- Export de données de la table poulgoazec.espece : ~42 rows (environ)
/*!40000 ALTER TABLE `espece` DISABLE KEYS */;
INSERT INTO `espece` (`id`, `nomEspece`, `nomScientifiqueEspece`, `nomCommunEspece`) VALUES
	(31020, 'Turbot', 'Psetta maxima', 'TURBO'),
	(31030, 'Barbue', 'Scophthalmus rhombus', 'BARBU'),
	(31150, 'Plie ou carrelet', 'Pleuronectes Platessa', 'PLIE'),
	(32020, 'Merlu', 'Merluccius bilinearis', 'MERLU'),
	(32050, 'Cabillaud', 'Gadus Morhua Morhue', 'CABIL'),
	(32130, 'Lieu Jaune de Ligne', 'Pollachius pollachius', 'LJAUL'),
	(32140, 'Lieu Noir', 'Lophius Virens', 'LNOI'),
	(32230, 'Lingue franche', 'Molva Molva', 'LINGU'),
	(33020, 'Congre commun', 'Conger conger', 'CONGR'),
	(33080, 'Saint Pierre', 'Zeus Faber', 'STPIE'),
	(33090, 'Bar de Chalut', 'Dicentrarchus Labrax', 'BARCH'),
	(33091, 'Bar de Ligne', 'Dicentrarchus Labrax', 'BARLI'),
	(33110, 'Mérou ou cernier', 'Polyprion Americanus', 'CERNI'),
	(33120, 'Mérou noir', 'Epinephelus Guaza', 'MEROU'),
	(33410, 'Rouget Barbet', 'Mullus SPP', 'ROUGT'),
	(33450, 'Dorade royale chalut', 'Sparus Aurata', 'DORAC'),
	(33451, 'Dorade royale ligne', 'Sparus Aurata', 'DORAL'),
	(33480, 'Dorade rose', 'Pagellus bogaraveo', 'DORAD'),
	(33490, 'Pageot Acarne', 'Pagellus Acarne', 'PAGEO'),
	(33500, 'Pageot Commun', 'Pagellus Arythrinus', 'PAGEC'),
	(33580, 'Vieille', 'LabrusBergylta', 'VIEIL'),
	(33730, 'Grondin gris', 'Eutrigla Gurnadus', 'GRONG'),
	(33740, 'Grondin rouge', 'Aspitrigla Cuculus', 'GRONR'),
	(33760, 'Baudroie', 'Lophius Piscatorus', 'BAUDR'),
	(33761, 'Baudroie Maigre', 'Lophius Piscicatorius', 'BAUDM'),
	(33790, 'Grondin Camard', 'Trigloporus Lastoviza', 'GRONC'),
	(33800, 'Grondin Perlon', 'Trigla Lucerna', 'GRONP'),
	(34150, 'Mulet', 'Mugil SPP', 'MULET'),
	(35040, 'Sardine atlantique', 'Sardina Pilchardus', 'SARDI'),
	(37050, 'Maquereau', 'Scomber Scombrus', 'MAQUE'),
	(38150, 'Raie douce', 'Raja Montagui', 'RAIE'),
	(38160, 'Raie Pastenague commune', 'Dasyatis Pastinaca', 'RAIEP'),
	(42020, 'Crabe tourteau de casier', 'Cancer Pagurus', 'CRABS'),
	(42021, 'Crabe tourteau de chalut', 'Cancer Pagurus', 'CRABL'),
	(42040, 'Araignée de mer casier', 'Maja squinado', 'ARAIS'),
	(42041, 'Araignée de mer chalut', 'Maja squinado', 'ARAIL'),
	(43010, 'Homard', 'Hammarus gammorus', 'HOMAR'),
	(43030, 'Langouste rouge', 'Palinurus elephas', 'LANGR'),
	(44010, 'Langoustine', 'Nephrops norvegicus', 'LANGT'),
	(57010, 'Seiche', 'Sepia SPP', 'SEICH'),
	(57020, 'Calmar', 'Loligo SPP', 'CALAM'),
	(57050, 'Poulpe', 'Octopus SPP', 'POULP');
/*!40000 ALTER TABLE `espece` ENABLE KEYS */;


-- Export de la structure de table poulgoazec. lot
CREATE TABLE IF NOT EXISTS `lot` (
  `DatePeche` date NOT NULL,
  `Bateau` int(10) unsigned NOT NULL,
  `id` decimal(3,0) unsigned NOT NULL,
  `Espece` int(10) unsigned NOT NULL,
  `Taille` decimal(2,0) NOT NULL,
  `Presentation` char(3) NOT NULL,
  `Qualite` char(1) NOT NULL,
  `Bac` char(1) NOT NULL,
  `poidsBrutLot` decimal(6,2) DEFAULT NULL,
  `prixEnchere` decimal(6,2) DEFAULT NULL,
  `dateEnchere` date DEFAULT NULL,
  `HeureDebutEnchere` datetime DEFAULT NULL,
  `prixPlancher` decimal(6,2) DEFAULT NULL,
  `prixDepart` decimal(6,2) NOT NULL DEFAULT '0.00',
  `codeEtat` char(1) DEFAULT NULL,
  `Acheteur` int(10) unsigned DEFAULT NULL,
  `Facture` int(10) unsigned DEFAULT NULL,
  `valide` int(11) DEFAULT '0',
  PRIMARY KEY (`id`,`DatePeche`,`Bateau`),
  KEY `FK_LOT_datePeche` (`DatePeche`),
  KEY `FK_LOT_id_BATEAU` (`Bateau`),
  KEY `FK_LOT_id_PRESENTATION` (`Presentation`),
  KEY `FK_LOT_id_ESPECE` (`Espece`),
  KEY `FK_LOT_id_TAILLE` (`Taille`),
  KEY `FK_LOT_id_BAC` (`Bac`),
  KEY `FK_LOT_id_QUALITE` (`Qualite`),
  KEY `FK_LOT_id_ACHETEUR` (`Acheteur`),
  CONSTRAINT `FK_LOT_datePeche` FOREIGN KEY (`DatePeche`) REFERENCES `peche` (`datePeche`),
  CONSTRAINT `FK_LOT_id_ACHETEUR` FOREIGN KEY (`Acheteur`) REFERENCES `acheteur` (`id`),
  CONSTRAINT `FK_LOT_id_BAC` FOREIGN KEY (`Bac`) REFERENCES `bac` (`id`),
  CONSTRAINT `FK_LOT_id_BATEAU` FOREIGN KEY (`Bateau`) REFERENCES `bateau` (`id`),
  CONSTRAINT `FK_LOT_id_ESPECE` FOREIGN KEY (`Espece`) REFERENCES `espece` (`id`),
  CONSTRAINT `FK_LOT_id_PRESENTATION` FOREIGN KEY (`Presentation`) REFERENCES `presentation` (`id`),
  CONSTRAINT `FK_LOT_id_QUALITE` FOREIGN KEY (`Qualite`) REFERENCES `qualite` (`id`),
  CONSTRAINT `FK_LOT_id_TAILLE` FOREIGN KEY (`Taille`) REFERENCES `taille` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Export de données de la table poulgoazec.lot : ~72 rows (environ)
/*!40000 ALTER TABLE `lot` DISABLE KEYS */;
INSERT INTO `lot` (`DatePeche`, `Bateau`, `id`, `Espece`, `Taille`, `Presentation`, `Qualite`, `Bac`, `poidsBrutLot`, `prixEnchere`, `dateEnchere`, `HeureDebutEnchere`, `prixPlancher`, `prixDepart`, `codeEtat`, `Acheteur`, `Facture`, `valide`) VALUES
	('2008-07-18', 1, 1, 33091, 25, 'ENT', 'E', 'F', 16.00, 10.00, '2017-06-06', NULL, NULL, 10.00, 'C', NULL, NULL, 0),
	('2008-07-18', 2, 1, 33091, 25, 'ENT', 'E', 'F', 16.00, 10.00, '2017-06-06', NULL, NULL, 10.00, 'C', NULL, NULL, 0),
	('2008-07-18', 11, 1, 32130, 40, 'VID', 'E', 'B', 8.40, 7.50, '2008-07-18', '2008-07-18 10:15:00', 6.00, 6.00, 'T', 4, NULL, 1),
	('2008-07-20', 11, 1, 32130, 40, 'VID', 'E', 'B', 8.40, 7.50, '2008-07-20', '2008-07-20 10:15:00', 6.00, 6.00, 'T', 2, NULL, 0),
	('2008-07-21', 11, 1, 32130, 40, 'VID', 'E', 'B', 8.40, 7.50, '2008-07-21', '2008-07-21 10:15:00', 6.00, 6.00, 'T', 1, NULL, 0),
	('2008-07-23', 11, 1, 32130, 20, 'VID', 'E', 'F', 19.20, 9.20, '2008-07-23', '2008-07-23 10:25:20', 4.80, 4.50, 'T', 4, NULL, 0),
	('2008-07-24', 1, 1, 32230, 25, 'VID', 'E', 'B', 20.00, 9.15, '2008-07-24', '2008-07-24 10:58:20', 8.50, 8.00, 'T', 2, NULL, 0),
	('2008-07-24', 11, 1, 32130, 70, 'VID', 'E', 'B', 13.00, 14.85, '2008-07-24', '2008-07-24 10:08:20', 14.00, 12.00, 'T', 2, NULL, 0),
	('2008-07-25', 1, 1, 33091, 10, 'ENT', 'A', 'F', 10.80, 8.85, '2008-07-25', '2008-07-25 11:00:04', 7.00, 6.00, 'T', NULL, NULL, 0),
	('2008-07-25', 3, 1, 33091, 30, 'ENT', 'B', 'F', 19.00, 14.80, '2008-07-25', '2008-07-25 11:22:53', 14.00, 12.00, 'T', NULL, NULL, 0),
	('2008-07-25', 7, 1, 32230, 25, 'VID', 'E', 'F', 14.50, 16.70, '2008-07-25', '2008-07-25 17:55:00', 16.00, 15.00, 'T', NULL, NULL, 0),
	('2008-07-25', 11, 1, 33580, 40, 'VID', 'E', 'F', 18.50, 8.65, '2008-07-25', '2008-07-25 11:24:04', 8.00, 7.00, 'T', NULL, NULL, 0),
	('2008-07-30', 1, 1, 33091, 10, 'ENT', 'A', 'F', 10.80, 7.20, '2008-07-30', '2008-07-30 11:00:04', 7.00, 6.00, 'T', 2, NULL, 1),
	('2008-07-30', 3, 1, 33091, 30, 'ENT', 'B', 'F', 19.00, 14.60, '2008-07-30', '2008-07-30 11:22:53', 14.00, 12.00, 'T', 1, NULL, 0),
	('2008-07-30', 7, 1, 33080, 25, 'VID', 'E', 'F', 14.50, 17.50, '2008-07-30', '2008-07-30 17:55:00', 16.00, 15.00, 'T', 4, NULL, 0),
	('2008-07-30', 11, 1, 33080, 40, 'VID', 'E', 'F', 18.50, 8.70, '2008-07-30', '2008-07-30 11:24:04', 8.00, 7.00, 'T', 2, NULL, 0),
	('2008-08-12', 5, 1, 32050, 25, 'VID', 'E', 'F', 12.00, 15.00, '2008-08-25', '2008-08-25 16:11:30', 3.00, 5.00, 'C', 4, NULL, 0),
	('2008-08-12', 9, 1, 42040, 10, 'ENT', 'E', 'F', 15.00, NULL, '2008-08-25', '2008-08-25 16:11:30', NULL, 0.00, 'C', NULL, NULL, 0),
	('2008-08-25', 3, 1, 33090, 25, 'ENT', 'E', 'B', 13.00, 4.00, '2008-08-25', '2008-08-25 16:23:25', 2.00, 2.00, 'T', 4, NULL, 0),
	('2008-08-25', 11, 1, 33091, 25, 'ENT', 'E', 'F', 14.60, NULL, '2008-08-25', '2008-08-25 16:39:25', 2.00, 2.00, 'E', NULL, NULL, 0),
	('2008-07-18', 11, 2, 32130, 40, 'VID', 'E', 'B', 9.10, 8.90, '2008-07-18', '2008-07-18 10:18:20', 6.00, 6.00, 'T', 1, NULL, 0),
	('2008-07-20', 11, 2, 32130, 40, 'VID', 'E', 'B', 9.10, 8.90, '2008-07-20', '2008-07-20 10:18:20', 6.00, 6.00, 'T', 3, NULL, 0),
	('2008-07-21', 11, 2, 32130, 40, 'VID', 'E', 'B', 9.10, 8.90, '2008-07-21', '2008-07-21 10:18:20', 6.00, 6.00, 'T', 3, NULL, 0),
	('2008-07-23', 11, 2, 32130, 40, 'VID', 'E', 'F', 19.20, 9.00, '2017-06-06', '2008-07-23 10:28:20', 5.50, 5.00, 'T', 13, NULL, 1),
	('2008-07-24', 1, 2, 32230, 30, 'VID', 'E', 'B', 20.00, 14.65, '2008-07-24', '2008-07-24 11:08:20', 14.00, 13.00, 'T', 3, NULL, 0),
	('2008-07-24', 11, 2, 33091, 10, 'ENT', 'A', 'F', 8.00, 15.00, '2008-07-24', '2008-07-24 10:18:20', 14.00, 13.00, 'T', 3, NULL, 0),
	('2008-07-25', 1, 2, 33580, 20, 'VID', 'E', 'B', 9.60, 9.85, '2008-07-25', '2008-07-25 11:15:53', 9.00, 8.00, 'T', NULL, NULL, 0),
	('2008-07-25', 3, 2, 33091, 30, 'ENT', 'B', 'F', 19.00, 14.80, '2008-07-25', '2008-07-25 11:32:53', 14.00, 12.00, 'T', NULL, NULL, 0),
	('2008-07-25', 7, 2, 32230, 35, 'VID', 'E', 'F', 17.50, 16.50, '2008-07-25', '2008-07-25 18:00:00', 15.00, 14.00, 'T', NULL, NULL, 0),
	('2008-07-30', 1, 2, 33080, 20, 'VID', 'E', 'B', 9.60, 9.75, '2008-07-30', '2008-07-30 11:15:53', 9.00, 8.00, 'T', 2, NULL, 0),
	('2008-07-30', 3, 2, 33110, 30, 'ENT', 'B', 'F', 19.00, 14.15, '2008-07-30', '2008-07-30 11:32:53', 14.00, 12.00, 'T', 1, NULL, 0),
	('2008-07-30', 7, 2, 33080, 35, 'VID', 'E', 'F', 17.50, 16.50, '2008-07-30', '2008-07-30 18:00:00', 15.00, 14.00, 'T', 3, NULL, 1),
	('2008-07-30', 11, 2, 33080, 40, 'VID', 'E', 'F', 18.50, 0.00, '2008-07-30', '2008-07-30 11:24:04', 8.00, 7.00, 'E', NULL, NULL, 0),
	('2008-08-12', 9, 2, 42040, 10, 'ENT', 'E', 'F', 20.00, NULL, '2017-06-06', '2008-08-25 16:11:30', NULL, 0.00, 'C', NULL, NULL, 0),
	('2008-08-25', 3, 2, 33090, 25, 'ENT', 'E', 'B', 15.00, 7.00, '2008-08-25', '2008-08-25 16:27:25', 2.00, 2.00, 'T', 4, NULL, 1),
	('2008-08-25', 11, 2, 33091, 25, 'ENT', 'E', 'F', 15.60, NULL, '2008-08-25', '2008-08-25 16:43:25', 2.00, 2.00, 'E', NULL, NULL, 0),
	('2008-07-18', 11, 3, 32130, 40, 'VID', 'E', 'B', 8.40, 8.50, '2008-07-18', '2008-07-18 10:21:20', 6.00, 6.00, 'T', 4, NULL, 0),
	('2008-07-20', 11, 3, 32130, 40, 'VID', 'E', 'B', 8.40, 8.50, '2008-07-20', '2008-07-20 10:21:20', 6.00, 6.00, 'T', NULL, NULL, 0),
	('2008-07-21', 11, 3, 32130, 40, 'VID', 'E', 'B', 8.40, 8.50, '2008-07-21', '2008-07-21 10:21:20', 6.00, 6.00, 'T', 1, NULL, 0),
	('2008-07-24', 1, 3, 32230, 40, 'VID', 'E', 'F', 18.00, 8.35, '2008-07-24', '2008-07-24 11:18:20', 8.00, 7.50, 'T', 4, NULL, 0),
	('2008-07-24', 11, 3, 33091, 30, 'ENT', 'E', 'F', 21.00, 8.75, '2008-07-24', '2008-07-24 10:38:20', 8.50, 8.30, 'T', 4, NULL, 0),
	('2008-07-25', 1, 3, 33091, 15, 'ENT', 'B', 'B', 8.00, 15.25, '2008-07-25', '2008-07-25 11:18:53', 14.00, 13.00, 'T', NULL, NULL, 0),
	('2008-07-30', 1, 3, 33091, 15, 'ENT', 'B', 'B', 8.00, 14.20, '2008-07-30', '2008-07-30 11:18:53', 14.00, 13.00, 'T', 1, NULL, 1),
	('2008-07-30', 3, 3, 33110, 30, 'ENT', 'B', 'F', 19.00, 0.00, '2017-06-06', '2008-07-30 11:22:53', 14.00, 12.00, 'E', NULL, NULL, 0),
	('2008-07-30', 7, 3, 33080, 25, 'VID', 'E', 'F', 14.50, 0.00, '2008-07-30', '2008-07-30 17:55:00', 16.00, 15.00, 'E', NULL, NULL, 0),
	('2008-07-30', 11, 3, 33080, 40, 'VID', 'E', 'F', 18.50, 0.00, '2008-07-30', '2008-07-30 11:24:04', 8.00, 7.00, 'E', NULL, NULL, 0),
	('2008-08-25', 3, 3, 33090, 25, 'ENT', 'E', 'B', 15.80, 8.00, '2008-08-25', '2008-08-25 16:35:25', 2.00, 2.00, 'T', 4, NULL, 0),
	('2008-07-18', 1, 4, 33110, 10, 'ENT', 'A', 'F', 10.80, 0.00, '2008-07-30', '2008-07-30 11:00:04', 7.00, 6.00, 'E', NULL, NULL, 0),
	('2008-07-18', 11, 4, 32130, 20, 'VID', 'E', 'F', 15.10, 10.00, '2008-07-18', '2008-07-18 10:25:20', 8.50, 8.50, 'T', 2, NULL, 1),
	('2008-07-20', 11, 4, 32130, 25, 'VID', 'A', 'F', 15.10, 17.00, '2008-07-20', '2008-07-20 10:25:20', 16.50, 15.50, 'T', NULL, NULL, 0),
	('2008-07-21', 11, 4, 32130, 20, 'VID', 'E', 'F', 15.10, 17.30, '2008-07-21', '2008-07-21 10:25:20', 16.50, 15.50, 'T', 2, NULL, 0),
	('2008-07-24', 1, 4, 33580, 25, 'VID', 'E', 'F', 14.00, 17.10, '2008-07-24', '2008-07-24 11:28:20', 16.50, 16.00, 'T', 1, NULL, 0),
	('2008-07-24', 11, 4, 33091, 35, 'ENT', 'E', 'B', 12.00, 8.00, '2008-07-24', '2008-07-24 10:48:20', 7.50, 7.00, 'T', 1, NULL, 0),
	('2008-07-30', 3, 4, 33451, 30, 'ENT', 'B', 'F', 19.00, 0.00, '2008-07-30', '2008-07-30 11:32:53', 14.00, 12.00, 'E', NULL, NULL, 0),
	('2008-07-30', 7, 4, 33080, 35, 'VID', 'E', 'F', 17.50, 0.00, '2008-07-30', '2008-07-30 18:00:00', 15.00, 14.00, 'E', NULL, NULL, 0),
	('2008-08-25', 3, 4, 33090, 25, 'ENT', 'E', 'B', 15.80, NULL, '2008-08-25', '2008-08-25 16:11:30', NULL, 0.00, 'C', NULL, NULL, 0),
	('2008-07-18', 11, 5, 32130, 30, 'VID', 'E', 'F', 10.40, 16.50, '2008-07-18', '2008-07-18 10:30:20', 14.30, 13.30, 'L', NULL, NULL, 0),
	('2008-07-20', 11, 5, 32130, 30, 'VID', 'E', 'F', 10.40, 16.85, '2008-07-20', '2008-07-20 10:30:20', 16.30, 15.30, 'T', NULL, NULL, 0),
	('2008-07-21', 11, 5, 32130, 30, 'VID', 'E', 'F', 10.40, 17.00, '2008-07-21', '2008-07-21 10:30:20', 14.30, 14.30, 'T', 3, NULL, 0),
	('2008-07-24', 11, 5, 33580, 20, 'VID', 'E', 'B', 8.00, 14.80, '2008-07-24', '2008-07-24 11:38:20', 14.00, 13.50, 'T', 2, NULL, 0),
	('2008-07-30', 1, 5, 33080, 20, 'VID', 'E', 'B', 9.60, 0.00, '2008-07-30', '2008-07-30 11:15:53', 9.00, 8.00, 'E', NULL, NULL, 0),
	('2008-07-30', 3, 5, 33451, 30, 'ENT', 'B', 'F', 19.00, 0.00, '2008-07-30', '2008-07-30 11:22:53', 14.00, 12.00, 'E', NULL, NULL, 0),
	('2008-07-30', 7, 5, 33080, 25, 'VID', 'E', 'F', 14.50, 0.00, '2008-07-30', '2008-07-30 17:55:00', 16.00, 15.00, 'E', NULL, NULL, 0),
	('2008-08-25', 3, 5, 33090, 25, 'ENT', 'E', 'B', 13.80, NULL, '2008-08-25', '2008-08-25 16:11:30', NULL, 0.00, 'C', NULL, NULL, 0),
	('2008-07-30', 1, 6, 33110, 15, 'ENT', 'B', 'B', 8.00, 0.00, '2008-07-30', '2008-07-30 11:18:53', 14.00, 13.00, 'E', NULL, NULL, 0),
	('2008-07-30', 3, 6, 33451, 30, 'ENT', 'B', 'F', 19.00, 0.00, '2008-07-30', '2008-07-30 11:32:53', 14.00, 12.00, 'E', NULL, NULL, 0),
	('2008-07-30', 7, 6, 33080, 35, 'VID', 'E', 'F', 17.50, 0.00, '2008-07-30', '2008-07-30 18:00:00', 15.00, 14.00, 'E', NULL, NULL, 0),
	('2008-08-25', 3, 6, 33090, 25, 'ENT', 'E', 'B', 11.80, 0.00, '2008-07-30', '2008-08-25 16:11:30', NULL, 0.00, 'C', NULL, NULL, 0),
	('2008-07-30', 1, 7, 33451, 10, 'ENT', 'A', 'F', 10.80, 0.00, '2017-06-07', '2008-07-30 11:00:04', 7.00, 6.00, 'E', NULL, NULL, 0),
	('2008-08-25', 3, 7, 33090, 25, 'ENT', 'E', 'B', 15.80, 0.00, '2017-06-07', '2008-08-25 16:47:25', 2.00, 2.00, 'E', NULL, NULL, 0),
	('2008-07-30', 1, 8, 33080, 20, 'VID', 'E', 'B', 9.60, 0.00, '2017-06-07', '2008-07-30 11:15:53', 9.00, 8.00, 'E', NULL, NULL, 0),
	('2008-07-30', 1, 9, 33451, 15, 'ENT', 'B', 'B', 8.00, 0.00, '2017-06-07', '2008-07-30 11:18:53', 14.00, 13.00, 'E', NULL, NULL, 0);
/*!40000 ALTER TABLE `lot` ENABLE KEYS */;


-- Export de la structure de vue poulgoazec. nbenchereparacheteur
-- Création d'une table temporaire pour palier aux erreurs de dépendances de VIEW
CREATE TABLE `nbenchereparacheteur` (
	`login` VARCHAR(25) NULL COLLATE 'latin1_swedish_ci',
	`nbEnchereValide` BIGINT(21) NOT NULL
) ENGINE=MyISAM;


-- Export de la structure de table poulgoazec. peche
CREATE TABLE IF NOT EXISTS `peche` (
  `datePeche` date NOT NULL,
  `id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`datePeche`,`id`),
  KEY `FK_PECHE_id` (`id`),
  CONSTRAINT `FK_PECHE_id` FOREIGN KEY (`id`) REFERENCES `bateau` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Export de données de la table poulgoazec.peche : ~21 rows (environ)
/*!40000 ALTER TABLE `peche` DISABLE KEYS */;
INSERT INTO `peche` (`datePeche`, `id`) VALUES
	('2008-07-18', 1),
	('2008-07-24', 1),
	('2008-07-25', 1),
	('2008-07-30', 1),
	('2008-07-25', 3),
	('2008-07-30', 3),
	('2008-08-25', 3),
	('2008-07-18', 4),
	('2008-08-12', 5),
	('2008-07-25', 7),
	('2008-07-30', 7),
	('2008-07-18', 9),
	('2008-08-12', 9),
	('2008-07-18', 11),
	('2008-07-20', 11),
	('2008-07-21', 11),
	('2008-07-23', 11),
	('2008-07-24', 11),
	('2008-07-25', 11),
	('2008-07-30', 11),
	('2008-08-25', 11);
/*!40000 ALTER TABLE `peche` ENABLE KEYS */;


-- Export de la structure de table poulgoazec. poster
CREATE TABLE IF NOT EXISTS `poster` (
  `DatePeche` date NOT NULL,
  `Bateau` int(10) unsigned NOT NULL,
  `Lot` decimal(3,0) unsigned NOT NULL,
  `Acheteur` int(10) unsigned NOT NULL,
  `prixEnchere` decimal(6,2) DEFAULT NULL,
  `HeureEnchere` datetime NOT NULL,
  PRIMARY KEY (`DatePeche`,`Bateau`,`Acheteur`,`Lot`,`HeureEnchere`),
  KEY `FK_POSTER_id` (`Lot`),
  KEY `FK_POSTER_id_BATEAU` (`Bateau`),
  KEY `FK_POSTER_id_ACHETEUR` (`Acheteur`),
  CONSTRAINT `FK_POSTER_datePeche` FOREIGN KEY (`DatePeche`) REFERENCES `peche` (`datePeche`),
  CONSTRAINT `FK_POSTER_id` FOREIGN KEY (`Lot`) REFERENCES `lot` (`id`),
  CONSTRAINT `FK_POSTER_id_ACHETEUR` FOREIGN KEY (`Acheteur`) REFERENCES `acheteur` (`id`),
  CONSTRAINT `FK_POSTER_id_BATEAU` FOREIGN KEY (`Bateau`) REFERENCES `bateau` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Export de données de la table poulgoazec.poster : ~80 rows (environ)
/*!40000 ALTER TABLE `poster` DISABLE KEYS */;
INSERT INTO `poster` (`DatePeche`, `Bateau`, `Lot`, `Acheteur`, `prixEnchere`, `HeureEnchere`) VALUES
	('2008-07-18', 11, 1, 1, 7.45, '2008-07-18 10:17:08'),
	('2008-07-18', 11, 2, 1, 7.55, '2008-07-18 10:18:37'),
	('2008-07-18', 11, 4, 1, 9.50, '2008-07-18 10:22:13'),
	('2008-07-18', 11, 2, 2, 8.50, '2008-07-18 10:20:59'),
	('2008-07-18', 11, 3, 2, 7.70, '2008-07-18 10:21:48'),
	('2008-07-18', 11, 4, 2, 10.00, '2008-07-18 10:22:13'),
	('2008-07-18', 11, 5, 2, 8.75, '2008-07-18 10:22:13'),
	('2008-07-18', 11, 1, 3, 6.55, '2008-07-18 10:15:18'),
	('2008-07-18', 11, 2, 3, 8.35, '2008-07-18 10:20:48'),
	('2008-07-18', 11, 1, 4, 7.50, '2008-07-18 10:17:48'),
	('2008-07-18', 11, 2, 4, 7.50, '2008-07-18 10:18:23'),
	('2008-07-18', 11, 3, 4, 8.50, '2008-07-18 10:22:13'),
	('2008-07-18', 11, 5, 4, 8.50, '2008-07-18 10:22:13'),
	('2008-07-20', 11, 1, 1, 7.45, '2008-07-20 10:17:08'),
	('2008-07-20', 11, 2, 1, 8.35, '2008-07-20 10:20:48'),
	('2008-07-20', 11, 1, 2, 7.80, '2008-07-20 10:17:48'),
	('2008-07-20', 11, 2, 2, 8.50, '2008-07-20 10:20:59'),
	('2008-07-20', 11, 1, 3, 6.55, '2008-07-20 10:15:18'),
	('2008-07-20', 11, 2, 3, 8.55, '2008-07-20 10:21:18'),
	('2008-07-20', 11, 2, 4, 7.50, '2008-07-20 10:18:23'),
	('2008-07-21', 11, 1, 1, 8.50, '2008-07-21 10:22:13'),
	('2008-07-21', 11, 1, 2, 7.70, '2008-07-21 10:21:48'),
	('2008-07-21', 11, 2, 2, 7.70, '2008-07-21 10:21:48'),
	('2008-07-21', 11, 2, 3, 8.95, '2008-07-21 10:22:13'),
	('2008-07-23', 11, 2, 13, 7.00, '2017-06-06 14:46:26'),
	('2008-07-23', 11, 2, 13, 8.00, '2017-06-06 16:01:20'),
	('2008-07-23', 11, 2, 13, 9.00, '2017-06-06 16:13:52'),
	('2008-07-30', 1, 3, 1, 14.20, '2008-07-30 11:20:53'),
	('2008-07-30', 1, 7, 1, 9.00, '2017-03-29 10:17:24'),
	('2008-07-30', 1, 7, 1, 9.50, '2017-03-29 10:21:23'),
	('2008-07-30', 1, 7, 1, 11.00, '2017-03-29 10:24:31'),
	('2008-07-30', 1, 7, 1, 11.00, '2017-03-29 10:25:24'),
	('2008-07-30', 1, 7, 1, 11.00, '2017-03-29 10:25:34'),
	('2008-07-30', 1, 7, 1, 11.00, '2017-03-29 10:28:29'),
	('2008-07-30', 1, 7, 1, 11.00, '2017-03-29 10:29:58'),
	('2008-07-30', 1, 7, 1, 11.00, '2017-03-29 10:29:59'),
	('2008-07-30', 1, 7, 1, 11.50, '2017-03-29 10:30:03'),
	('2008-07-30', 1, 7, 1, 11.50, '2017-03-29 10:30:08'),
	('2008-07-30', 1, 7, 1, 11.50, '2017-03-29 10:30:44'),
	('2008-07-30', 1, 7, 1, 12.00, '2017-03-29 10:53:16'),
	('2008-07-30', 1, 7, 1, 13.00, '2017-03-29 10:53:43'),
	('2008-07-30', 1, 7, 1, 13.50, '2017-03-29 11:19:19'),
	('2008-07-30', 1, 7, 1, 14.00, '2017-03-29 11:29:40'),
	('2008-07-30', 1, 7, 1, 15.00, '2017-03-29 11:30:16'),
	('2008-07-30', 1, 7, 1, 16.00, '2017-03-29 11:30:23'),
	('2008-07-30', 1, 7, 1, 17.00, '2017-03-29 11:31:01'),
	('2008-07-30', 1, 7, 1, 18.00, '2017-03-29 11:31:16'),
	('2008-07-30', 1, 7, 1, 19.00, '2017-03-29 11:31:41'),
	('2008-07-30', 1, 7, 1, 20.00, '2017-03-29 11:32:01'),
	('2008-07-30', 1, 7, 1, 21.00, '2017-03-29 11:41:49'),
	('2008-07-30', 1, 7, 1, 22.00, '2017-03-29 11:42:38'),
	('2008-07-30', 1, 7, 1, 23.00, '2017-03-29 11:42:46'),
	('2008-07-30', 1, 7, 1, 24.00, '2017-03-29 11:44:58'),
	('2008-07-30', 1, 7, 1, 25.00, '2017-03-29 11:45:06'),
	('2008-07-30', 1, 7, 1, 26.00, '2017-03-29 11:55:14'),
	('2008-07-30', 1, 7, 1, 27.00, '2017-03-29 11:55:44'),
	('2008-07-30', 1, 7, 1, 28.00, '2017-03-29 11:59:16'),
	('2008-07-30', 1, 7, 1, 29.00, '2017-03-29 11:59:21'),
	('2008-07-30', 1, 7, 1, 30.00, '2017-03-29 12:00:28'),
	('2008-07-30', 1, 7, 1, 31.00, '2017-04-06 07:33:49'),
	('2008-07-30', 1, 7, 1, 32.00, '2017-04-06 08:55:56'),
	('2008-07-30', 1, 8, 1, 12.50, '2008-07-30 11:30:54'),
	('2008-07-30', 1, 1, 2, 7.20, '2008-07-30 11:12:53'),
	('2008-07-30', 1, 2, 2, 9.75, '2008-07-30 11:16:53'),
	('2008-07-30', 1, 9, 13, 14.00, '2017-03-31 14:05:26'),
	('2008-07-30', 1, 9, 13, 15.00, '2017-03-31 14:05:31'),
	('2008-07-30', 1, 9, 13, 16.00, '2017-03-31 14:05:40'),
	('2008-07-30', 3, 1, 1, 14.60, '2008-07-30 11:26:53'),
	('2008-07-30', 3, 2, 1, 15.50, '2008-07-30 11:30:53'),
	('2008-07-30', 3, 5, 1, 14.10, '2008-07-30 11:30:53'),
	('2008-07-30', 7, 1, 1, 15.50, '2008-07-30 11:30:58'),
	('2008-07-30', 7, 2, 3, 16.50, '2008-07-30 11:06:53'),
	('2008-07-30', 7, 1, 4, 17.50, '2008-07-30 11:02:53'),
	('2008-07-30', 11, 1, 2, 8.70, '2008-07-30 11:09:53'),
	('2008-08-25', 3, 7, 1, 9.50, '2017-03-29 10:17:38'),
	('2008-08-25', 3, 2, 3, 6.00, '2008-08-25 15:17:12'),
	('2008-08-25', 3, 3, 3, 7.00, '2008-08-25 15:21:44'),
	('2008-08-25', 3, 1, 4, 4.00, '2008-08-25 15:12:26'),
	('2008-08-25', 3, 2, 4, 7.00, '2008-08-25 15:18:53'),
	('2008-08-25', 3, 3, 4, 8.00, '2008-08-25 15:22:13');
/*!40000 ALTER TABLE `poster` ENABLE KEYS */;


-- Export de la structure de table poulgoazec. presentation
CREATE TABLE IF NOT EXISTS `presentation` (
  `id` char(3) NOT NULL,
  `libellePresentation` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Export de données de la table poulgoazec.presentation : ~3 rows (environ)
/*!40000 ALTER TABLE `presentation` DISABLE KEYS */;
INSERT INTO `presentation` (`id`, `libellePresentation`) VALUES
	('ENT', 'Entier'),
	('ET', 'Etété'),
	('VID', 'Vidé');
/*!40000 ALTER TABLE `presentation` ENABLE KEYS */;


-- Export de la structure de table poulgoazec. qualite
CREATE TABLE IF NOT EXISTS `qualite` (
  `id` char(1) NOT NULL DEFAULT '',
  `libelle` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Export de données de la table poulgoazec.qualite : ~3 rows (environ)
/*!40000 ALTER TABLE `qualite` DISABLE KEYS */;
INSERT INTO `qualite` (`id`, `libelle`) VALUES
	('A', 'glacé'),
	('B', 'déclassé'),
	('E', 'extra');
/*!40000 ALTER TABLE `qualite` ENABLE KEYS */;


-- Export de la structure de table poulgoazec. salle
CREATE TABLE IF NOT EXISTS `salle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL DEFAULT '0',
  `capacite` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Export de données de la table poulgoazec.salle : 2 rows
/*!40000 ALTER TABLE `salle` DISABLE KEYS */;
INSERT INTO `salle` (`id`, `nom`, `capacite`) VALUES
	(1, 'Salle 1', 10),
	(2, 'Salle 2', 30);
/*!40000 ALTER TABLE `salle` ENABLE KEYS */;


-- Export de la structure de table poulgoazec. stats
CREATE TABLE IF NOT EXISTS `stats` (
  `acheteur` int(11) NOT NULL,
  `timesConnect` int(11) NOT NULL,
  `lastConnect` date NOT NULL,
  `avgEnchere` double DEFAULT '0',
  PRIMARY KEY (`acheteur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Export de données de la table poulgoazec.stats : 2 rows
/*!40000 ALTER TABLE `stats` DISABLE KEYS */;
INSERT INTO `stats` (`acheteur`, `timesConnect`, `lastConnect`, `avgEnchere`) VALUES
	(13, 18, '2017-06-07', 11.5),
	(1, 4, '2017-06-07', 16.069565217);
/*!40000 ALTER TABLE `stats` ENABLE KEYS */;


-- Export de la structure de table poulgoazec. taille
CREATE TABLE IF NOT EXISTS `taille` (
  `id` decimal(2,0) NOT NULL,
  `specification` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Export de données de la table poulgoazec.taille : ~18 rows (environ)
/*!40000 ALTER TABLE `taille` DISABLE KEYS */;
INSERT INTO `taille` (`id`, `specification`) VALUES
	(10, 'Taille de 10'),
	(15, 'Taille de 15'),
	(20, 'Taille de 20'),
	(25, 'Taille de 25'),
	(30, 'Taille de 30'),
	(35, 'Taille de 35'),
	(40, 'Taille de 40'),
	(45, 'Taille de 45'),
	(50, 'Taille de 50'),
	(55, 'Taille de 55'),
	(60, 'Taille de 60'),
	(65, 'Taille de 65'),
	(70, 'Taille de 70'),
	(75, 'Taille de 75'),
	(80, 'Taille de 80'),
	(85, 'Taille de 85'),
	(90, 'Taille de 90'),
	(95, 'Taille de 95');
/*!40000 ALTER TABLE `taille` ENABLE KEYS */;


-- Export de la structure de procédure poulgoazec. updateStats
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateStats`(
	IN `idAcheteur` INT








)
BEGIN
	SET @avgEnch = (SELECT AVG(prixEnchere)  FROM poster where acheteur = idAcheteur);
	SET @ach = (SELECT acheteur FROM stats where acheteur = idAcheteur);
	IF @ach IS NULL THEN
   	INSERT INTO stats (acheteur, timesConnect, lastConnect, avgEnchere) VALUES (idAcheteur, 1, NOW(), @avgEnch);
   ELSE
   	UPDATE stats SET timesConnect = timesConnect + 1, lastConnect = NOW(), avgEnchere = @avgEnch WHERE acheteur = idAcheteur;
	END IF;
END//
DELIMITER ;


-- Export de la structure de vue poulgoazec. nbenchereparacheteur
-- Suppression de la table temporaire et création finale de la structure d'une vue
DROP TABLE IF EXISTS `nbenchereparacheteur`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `nbenchereparacheteur` AS select `acheteur`.`login` AS `login`,count(`poster`.`Acheteur`) AS `nbEnchereValide` from ((`poster` join `lot`) join `acheteur`) where ((`poster`.`DatePeche` = `lot`.`DatePeche`) and (`poster`.`Bateau` = `lot`.`Bateau`) and (`poster`.`Lot` = `lot`.`id`) and (`lot`.`valide` = 1) and (`poster`.`Acheteur` = `acheteur`.`id`)) group by `poster`.`Acheteur`;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
