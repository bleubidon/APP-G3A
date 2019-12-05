-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 05, 2019 at 12:41 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

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
-- Table structure for table `profil_utilisateur`
--

DROP TABLE IF EXISTS `profil_utilisateur`;
CREATE TABLE IF NOT EXISTS `profil_utilisateur` (
  `nom` varchar(255) NOT NULL,
  `identifiant` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `date_de_naissance` date NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `type_emploi` varchar(255) NOT NULL,
  UNIQUE KEY `identifiant` (`identifiant`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `tokens_reinitialisation_mot_de_passe`
--

DROP TABLE IF EXISTS `tokens_reinitialisation_mot_de_passe`;
CREATE TABLE IF NOT EXISTS `tokens_reinitialisation_mot_de_passe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_utilisateur` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `timestamp_creation` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
