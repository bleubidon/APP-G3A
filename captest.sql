-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 19, 2020 at 10:57 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `captest`
--

-- --------------------------------------------------------

--
-- Table structure for table `capteurs`
--

DROP TABLE IF EXISTS `capteurs`;
CREATE TABLE IF NOT EXISTS `capteurs` (
  `id_capteur` int(11) NOT NULL AUTO_INCREMENT,
  `nom_capteur` varchar(255) NOT NULL,
  `statut_capteur` int(11) NOT NULL,
  PRIMARY KEY (`id_capteur`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `capteurs`
--

INSERT INTO `capteurs` (`id_capteur`, `nom_capteur`, `statut_capteur`) VALUES
(1, 'a', 1),
(16, 'b', 0);

-- --------------------------------------------------------

--
-- Table structure for table `emplois_quels_tests`
--

DROP TABLE IF EXISTS `emplois_quels_tests`;
CREATE TABLE IF NOT EXISTS `emplois_quels_tests` (
  `nom_emploi` varchar(100) NOT NULL,
  `id_tests_psycho` varchar(255) NOT NULL,
  PRIMARY KEY (`nom_emploi`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emplois_quels_tests`
--

INSERT INTO `emplois_quels_tests` (`nom_emploi`, `id_tests_psycho`) VALUES
('Pilote', ';2;9;1;10;8;4'),
('PersonnelAuSol', ';11;5;8'),
('PersonnelNaviguant', ';2;8;9');

-- --------------------------------------------------------

--
-- Table structure for table `profil_utilisateur`
--

DROP TABLE IF EXISTS `profil_utilisateur`;
CREATE TABLE IF NOT EXISTS `profil_utilisateur` (
  `identifiant` varchar(255) NOT NULL,
  `statut` varchar(255) NOT NULL DEFAULT 'utilisateur',
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `date_de_naissance` date NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `type_emploi` varchar(255) NOT NULL,
  UNIQUE KEY `identifiant` (`identifiant`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil_utilisateur`
--

INSERT INTO `profil_utilisateur` (`identifiant`, `statut`, `nom`, `prenom`, `date_de_naissance`, `telephone`, `email`, `photo`, `mot_de_passe`, `type_emploi`) VALUES
('bleubidon', 'administrateur', 'Barral', 'Armand', '2000-04-05', '0688382574', 'armand.barral@orange.fr', 'bleubidon_img.jpg', '$2y$10$CESoZfZwGMqeZhlYgJ.T7u..zDRyysqJ5bHyzVFityA0ypZLRj7lO', 'Pilote'),
('tempo', 'banni', 'a', 'a', '2000-01-01', '0600000000', 'b@a.a', NULL, '$2y$10$mPhO3kpbxFNq2i7p2I7KKOZAhoa7ww2.QNiRbpfhqkxWygLwB2TRW', 'Pilote'),
('nid', 'gestionnaire', 'nnid', 'u', '1990-01-01', '0600000000', 'a@a.a', 'nid_scarabee.jpg', '$2y$10$0zMfUhrnoskH7JBJMl5yO.cu5xUAKiKEG4zINQf/CvkLggBfak.72', 'Pilote');

-- --------------------------------------------------------

--
-- Table structure for table `sante_utilisateur`
--

DROP TABLE IF EXISTS `sante_utilisateur`;
CREATE TABLE IF NOT EXISTS `sante_utilisateur` (
  `identifiant` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `poids` int(11) NOT NULL,
  `taille` int(11) NOT NULL,
  `groupe_sanguin` varchar(255) NOT NULL,
  `sommeil_moyen` int(11) NOT NULL,
  `pathologie` varchar(255) NOT NULL,
  UNIQUE KEY `identifiant` (`identifiant`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sante_utilisateur`
--

INSERT INTO `sante_utilisateur` (`identifiant`, `genre`, `poids`, `taille`, `groupe_sanguin`, `sommeil_moyen`, `pathologie`) VALUES
('bleubidon', 'Homme', 60, 180, 'o', 7, '                                                            .'),
('tempo', 'Homme', 1, 1, 'o', 4, ''),
('nid', 'Homme', 1, 1, 'o', 1, '                                                                                                                                                                                                                            .');

-- --------------------------------------------------------

--
-- Table structure for table `tests_passes`
--

DROP TABLE IF EXISTS `tests_passes`;
CREATE TABLE IF NOT EXISTS `tests_passes` (
  `id_tests_passes` int(11) NOT NULL AUTO_INCREMENT,
  `id_utilisateur` varchar(255) NOT NULL,
  `nom_test` varchar(255) NOT NULL,
  `contenu_test` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id_tests_passes`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tests_passes`
--

INSERT INTO `tests_passes` (`id_tests_passes`, `id_utilisateur`, `nom_test`, `contenu_test`) VALUES
(46, 'nid', 'Mesure de fréquence cardiaque', '[{\"x\":0,\"y\":95},{\"x\":1,\"y\":95},{\"x\":2,\"y\":97},{\"x\":3,\"y\":97},{\"x\":4,\"y\":97},{\"x\":5,\"y\":99},{\"x\":6,\"y\":99},{\"x\":7,\"y\":96},{\"x\":8,\"y\":91},{\"x\":9,\"y\":89},{\"x\":10,\"y\":88},{\"x\":11,\"y\":91},{\"x\":12,\"y\":90},{\"x\":13,\"y\":90},{\"x\":14,\"y\":93},{\"x\":15,\"y\":95},{\"x\":16,\"y\":96},{\"x\":17,\"y\":99},{\"x\":18,\"y\":103},{\"x\":19,\"y\":103}]'),
(47, 'nid', 'Test intelligence et logique', '[{\"x\":1,\"y\":105},{\"x\":2,\"y\":103},{\"x\":3,\"y\":106},{\"x\":4,\"y\":110},{\"x\":5,\"y\":106},{\"x\":6,\"y\":109},{\"x\":7,\"y\":104},{\"x\":8,\"y\":102},{\"x\":9,\"y\":103},{\"x\":10,\"y\":105},{\"x\":11,\"y\":101},{\"x\":12,\"y\":103},{\"x\":13,\"y\":104},{\"x\":14,\"y\":100},{\"x\":15,\"y\":98},{\"x\":16,\"y\":100},{\"x\":17,\"y\":103},{\"x\":18,\"y\":98},{\"x\":19,\"y\":95},{\"x\":20,\"y\":90}]'),
(48, 'nid', 'Test de chiffres', '[{\"x\":1,\"y\":106},{\"x\":2,\"y\":103},{\"x\":3,\"y\":106},{\"x\":4,\"y\":110},{\"x\":5,\"y\":112},{\"x\":6,\"y\":108},{\"x\":7,\"y\":108},{\"x\":8,\"y\":104},{\"x\":9,\"y\":105},{\"x\":10,\"y\":105},{\"x\":11,\"y\":109},{\"x\":12,\"y\":105},{\"x\":13,\"y\":105},{\"x\":14,\"y\":107},{\"x\":15,\"y\":105},{\"x\":16,\"y\":109},{\"x\":17,\"y\":108},{\"x\":18,\"y\":103},{\"x\":19,\"y\":108},{\"x\":20,\"y\":103}]'),
(51, 'nid', 'Mesure de la température superficielle de la peau', '[{\"x\":9,\"y\":92},{\"x\":10,\"y\":89},{\"x\":11,\"y\":93},{\"x\":12,\"y\":98},{\"x\":13,\"y\":94},{\"x\":14,\"y\":89},{\"x\":15,\"y\":91},{\"x\":16,\"y\":93},{\"x\":17,\"y\":98},{\"x\":18,\"y\":99},{\"x\":19,\"y\":97},{\"x\":20,\"y\":97},{\"x\":21,\"y\":96},{\"x\":22,\"y\":91},{\"x\":23,\"y\":89},{\"x\":24,\"y\":85},{\"x\":25,\"y\":81},{\"x\":26,\"y\":85},{\"x\":27,\"y\":89},{\"x\":28,\"y\":94}]');

-- --------------------------------------------------------

--
-- Table structure for table `tests_psycho`
--

DROP TABLE IF EXISTS `tests_psycho`;
CREATE TABLE IF NOT EXISTS `tests_psycho` (
  `id_test_psycho` int(11) NOT NULL AUTO_INCREMENT,
  `nom_test_psycho` varchar(2000) NOT NULL,
  `id_capteurs` varchar(255) NOT NULL,
  PRIMARY KEY (`id_test_psycho`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tests_psycho`
--

INSERT INTO `tests_psycho` (`id_test_psycho`, `nom_test_psycho`, `id_capteurs`) VALUES
(1, 'Mesure de fréquence cardiaque', ';16;1'),
(4, 'Mesure de la température superficielle de la peau', ''),
(5, 'Mesure de la qualité de reconnaissance de tonalité', ''),
(6, 'Test de mémorisation', ''),
(7, 'Test aptitudes verbales', ''),
(8, 'Test de lettres', ''),
(9, 'Test de chiffres', ''),
(10, 'Test intelligence et logique', ''),
(11, 'Test de raisonnement', '');

-- --------------------------------------------------------

--
-- Table structure for table `tokens_reinitialisation_mot_de_passe`
--

DROP TABLE IF EXISTS `tokens_reinitialisation_mot_de_passe`;
CREATE TABLE IF NOT EXISTS `tokens_reinitialisation_mot_de_passe` (
  `id_utilisateur` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `timestamp_creation` int(11) NOT NULL,
  UNIQUE KEY `token` (`token`),
  UNIQUE KEY `id_utilisateur` (`id_utilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tokens_reinitialisation_mot_de_passe`
--

INSERT INTO `tokens_reinitialisation_mot_de_passe` (`id_utilisateur`, `token`, `timestamp_creation`) VALUES
('bleubidon', 'hn6pklw1d9', 1578322912);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
