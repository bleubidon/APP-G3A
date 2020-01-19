-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 19, 2020 at 09:17 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE `capteurs` (
  `id_capteur` int(11) NOT NULL,
  `nom_capteur` varchar(255) NOT NULL,
  `statut_capteur` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `emplois_quels_tests` (
  `nom_emploi` varchar(100) NOT NULL,
  `id_tests_psycho` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emplois_quels_tests`
--

INSERT INTO `emplois_quels_tests` (`nom_emploi`, `id_tests_psycho`) VALUES
('Pilote', ';2;9;1;10'),
('PersonnelAuSol', ';11;5;8'),
('PersonnelNaviguant', ';2;8;9');

-- --------------------------------------------------------

--
-- Table structure for table `profil_utilisateur`
--

CREATE TABLE `profil_utilisateur` (
  `identifiant` varchar(255) NOT NULL,
  `statut` varchar(255) NOT NULL DEFAULT 'utilisateur',
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `date_de_naissance` date NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `type_emploi` varchar(255) NOT NULL
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

CREATE TABLE `sante_utilisateur` (
  `identifiant` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `poids` int(11) NOT NULL,
  `taille` int(11) NOT NULL,
  `groupe_sanguin` varchar(255) NOT NULL,
  `sommeil_moyen` int(11) NOT NULL,
  `pathologie` varchar(255) NOT NULL
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

CREATE TABLE `tests_passes` (
  `duree` int(11) DEFAULT NULL,
  `valeurs` text,
  `patient` int(11) DEFAULT NULL,
  `id_test` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tests_psycho`
--

CREATE TABLE `tests_psycho` (
  `id_test_psycho` int(11) NOT NULL,
  `nom_test_psycho` varchar(2000) NOT NULL,
  `id_capteurs` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `tokens_reinitialisation_mot_de_passe` (
  `id_utilisateur` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `timestamp_creation` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tokens_reinitialisation_mot_de_passe`
--

INSERT INTO `tokens_reinitialisation_mot_de_passe` (`id_utilisateur`, `token`, `timestamp_creation`) VALUES
('bleubidon', 'hn6pklw1d9', 1578322912);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `capteurs`
--
ALTER TABLE `capteurs`
  ADD PRIMARY KEY (`id_capteur`);

--
-- Indexes for table `emplois_quels_tests`
--
ALTER TABLE `emplois_quels_tests`
  ADD PRIMARY KEY (`nom_emploi`);

--
-- Indexes for table `profil_utilisateur`
--
ALTER TABLE `profil_utilisateur`
  ADD UNIQUE KEY `identifiant` (`identifiant`);

--
-- Indexes for table `sante_utilisateur`
--
ALTER TABLE `sante_utilisateur`
  ADD UNIQUE KEY `identifiant` (`identifiant`);

--
-- Indexes for table `tests_passes`
--
ALTER TABLE `tests_passes`
  ADD PRIMARY KEY (`id_test`);

--
-- Indexes for table `tests_psycho`
--
ALTER TABLE `tests_psycho`
  ADD PRIMARY KEY (`id_test_psycho`);

--
-- Indexes for table `tokens_reinitialisation_mot_de_passe`
--
ALTER TABLE `tokens_reinitialisation_mot_de_passe`
  ADD UNIQUE KEY `token` (`token`),
  ADD UNIQUE KEY `id_utilisateur` (`id_utilisateur`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `capteurs`
--
ALTER TABLE `capteurs`
  MODIFY `id_capteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tests_psycho`
--
ALTER TABLE `tests_psycho`
  MODIFY `id_test_psycho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
