-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: fdb23.runhosting.com
-- Generation Time: Jan 20, 2020 at 06:53 PM
-- Server version: 5.7.20-log
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3298379_captest`
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
('Pilote', ';2;9;1;10;6;7'),
('PersonnelAuSol', ';11;5;8'),
('PersonnelNaviguant', ';2;8;9');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id_question` int(11) NOT NULL,
  `contenu_question` text NOT NULL,
  `contenu_reponse` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id_question`, `contenu_question`, `contenu_reponse`) VALUES
(1, 'Une question', ''),
(2, 'Une autre question', ''),
(3, 'Encore une question', ''),
(25, 'Cette question', 'cette réponse'),
(26, 'Trop de questions', 'rép'),
(27, 'Une dernière', '');

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
('bleubidon', 'administrateur', 'Barral', 'Armand', '2000-04-05', '0688382574', 'armand.barral@orange.fr', 'bleubidon_img.jpg', '$2y$10$MpyIIieTxlaluFka3iGOWuUPDo8PFf/g8tjZwM/cwAmBj9oVOJhre', 'Pilote'),
('tempo', 'banni', 'a', 'a', '2000-01-01', '0600000000', 'b@a.a', NULL, '$2y$10$mPhO3kpbxFNq2i7p2I7KKOZAhoa7ww2.QNiRbpfhqkxWygLwB2TRW', 'Pilote'),
('nid', 'gestionnaire', 'nnid', 'u', '1990-01-01', '0600000000', 'a@a.a', 'nid_scarabee.jpg', '$2y$10$0zMfUhrnoskH7JBJMl5yO.cu5xUAKiKEG4zINQf/CvkLggBfak.72', 'Pilote'),
('ericGestion', 'gestionnaire', 'Eric', 'AFFOYON', '0199-08-16', '040404040', 'yemi.affoyon@gmail.com', NULL, '$2y$10$LQB18/07sJKmVabPy76p.ezzuAqnKrK3CjXfU2/ouZnsGC7b8MkVu', ''),
('ericaff', 'administrateur', 'AFFOYON', 'Eric', '1999-08-16', '0660022070', 'yemi.affoyon@gmail.com', NULL, '$2y$10$dEVUCSt5Ygr8TjDjTYfywuLeuTxVFtnHnH4eIcoYOnhwPzukXgYty', 'Pilote');

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
('nid', 'Homme', 1, 1, 'o', 1, '                                                                                                                                                                                                                            .'),
('ericaff', 'Homme', 75, 180, 'A+', 6, 'NEANT'),
('jeanDupont', 'Homme', 80, 180, 'A+', 6, ''),
('aaaa', 'Homme', 1, 1, 'o', 1, ''),
('ericGestion', 'Homme', 0, 0, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tests_passes`
--

CREATE TABLE `tests_passes` (
  `id_tests_passes` int(11) NOT NULL,
  `id_utilisateur` varchar(255) NOT NULL,
  `date_test` varchar(255) NOT NULL,
  `nom_test` varchar(255) NOT NULL,
  `contenu_test` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tests_passes`
--

INSERT INTO `tests_passes` (`id_tests_passes`, `id_utilisateur`, `date_test`, `nom_test`, `contenu_test`) VALUES
(46, 'nid', '', 'Mesure de fréquence cardiaque', '[{"x":0,"y":95},{"x":1,"y":95},{"x":2,"y":97},{"x":3,"y":97},{"x":4,"y":97},{"x":5,"y":99},{"x":6,"y":99},{"x":7,"y":96},{"x":8,"y":91},{"x":9,"y":89},{"x":10,"y":88},{"x":11,"y":91},{"x":12,"y":90},{"x":13,"y":90},{"x":14,"y":93},{"x":15,"y":95},{"x":16,"y":96},{"x":17,"y":99},{"x":18,"y":103},{"x":19,"y":103}]'),
(47, 'nid', '', 'Test intelligence et logique', '[{"x":1,"y":105},{"x":2,"y":103},{"x":3,"y":106},{"x":4,"y":110},{"x":5,"y":106},{"x":6,"y":109},{"x":7,"y":104},{"x":8,"y":102},{"x":9,"y":103},{"x":10,"y":105},{"x":11,"y":101},{"x":12,"y":103},{"x":13,"y":104},{"x":14,"y":100},{"x":15,"y":98},{"x":16,"y":100},{"x":17,"y":103},{"x":18,"y":98},{"x":19,"y":95},{"x":20,"y":90}]'),
(48, 'nid', '', 'Test de chiffres', '[{"x":1,"y":106},{"x":2,"y":103},{"x":3,"y":106},{"x":4,"y":110},{"x":5,"y":112},{"x":6,"y":108},{"x":7,"y":108},{"x":8,"y":104},{"x":9,"y":105},{"x":10,"y":105},{"x":11,"y":109},{"x":12,"y":105},{"x":13,"y":105},{"x":14,"y":107},{"x":15,"y":105},{"x":16,"y":109},{"x":17,"y":108},{"x":18,"y":103},{"x":19,"y":108},{"x":20,"y":103}]'),
(51, 'nid', '', 'Mesure de la température superficielle de la peau', '[{"x":9,"y":92},{"x":10,"y":89},{"x":11,"y":93},{"x":12,"y":98},{"x":13,"y":94},{"x":14,"y":89},{"x":15,"y":91},{"x":16,"y":93},{"x":17,"y":98},{"x":18,"y":99},{"x":19,"y":97},{"x":20,"y":97},{"x":21,"y":96},{"x":22,"y":91},{"x":23,"y":89},{"x":24,"y":85},{"x":25,"y":81},{"x":26,"y":85},{"x":27,"y":89},{"x":28,"y":94}]'),
(52, 'nid', '', 'Mesure de fréquence cardiaque', '[{"x":9,"y":102},{"x":10,"y":102},{"x":11,"y":106},{"x":12,"y":111},{"x":13,"y":109},{"x":14,"y":106},{"x":15,"y":106},{"x":16,"y":110},{"x":17,"y":112},{"x":18,"y":114},{"x":19,"y":117},{"x":20,"y":113},{"x":21,"y":113},{"x":22,"y":109},{"x":23,"y":109},{"x":24,"y":112},{"x":25,"y":110},{"x":26,"y":115},{"x":27,"y":115},{"x":28,"y":112}]'),
(53, 'nid', '', 'Mesure de fréquence cardiaque', '[{"x":9,"y":110},{"x":10,"y":114},{"x":11,"y":113},{"x":12,"y":116},{"x":13,"y":117},{"x":14,"y":121},{"x":15,"y":123},{"x":16,"y":119},{"x":17,"y":121},{"x":18,"y":119},{"x":19,"y":116},{"x":20,"y":115},{"x":21,"y":116},{"x":22,"y":115},{"x":23,"y":114},{"x":24,"y":115},{"x":25,"y":118},{"x":26,"y":118},{"x":27,"y":121},{"x":28,"y":122}]'),
(54, 'nid', '', 'Mesure de fréquence cardiaque', '[{"x":9,"y":91},{"x":10,"y":94},{"x":11,"y":91},{"x":12,"y":90},{"x":13,"y":87},{"x":14,"y":85},{"x":15,"y":88},{"x":16,"y":84},{"x":17,"y":86},{"x":18,"y":89},{"x":19,"y":87},{"x":20,"y":86},{"x":21,"y":88},{"x":22,"y":90},{"x":23,"y":87},{"x":24,"y":86},{"x":25,"y":87},{"x":26,"y":84},{"x":27,"y":86},{"x":28,"y":85}]'),
(55, 'nid', '19-1-2020, 13:11:16', 'Mesure de fréquence cardiaque', '[{"x":9,"y":100},{"x":10,"y":105},{"x":11,"y":109},{"x":12,"y":105},{"x":13,"y":100},{"x":14,"y":99},{"x":15,"y":95},{"x":16,"y":91},{"x":17,"y":89},{"x":18,"y":87},{"x":19,"y":88},{"x":20,"y":88},{"x":21,"y":84},{"x":22,"y":89},{"x":23,"y":85},{"x":24,"y":86},{"x":25,"y":85},{"x":26,"y":90},{"x":27,"y":91},{"x":28,"y":88}]'),
(56, 'nid', '19-1-2020, 13:14:24', 'mesure de fréquence cardiaque', '[{"x":9,"y":100},{"x":10,"y":95},{"x":11,"y":94},{"x":12,"y":90},{"x":13,"y":94},{"x":14,"y":97},{"x":15,"y":100},{"x":16,"y":99},{"x":17,"y":95},{"x":18,"y":99},{"x":19,"y":103},{"x":20,"y":108},{"x":21,"y":112},{"x":22,"y":114},{"x":23,"y":116},{"x":24,"y":118},{"x":25,"y":123},{"x":26,"y":123},{"x":27,"y":124},{"x":28,"y":121}]'),
(57, 'bleubidon', '19-1-2020, 15:43:23', 'test de lettres', '[{"x":9,"y":93},{"x":10,"y":90},{"x":11,"y":93},{"x":12,"y":93},{"x":13,"y":97},{"x":14,"y":102},{"x":15,"y":104},{"x":16,"y":107},{"x":17,"y":106},{"x":18,"y":103},{"x":19,"y":101},{"x":20,"y":104},{"x":21,"y":102},{"x":22,"y":100},{"x":23,"y":101},{"x":24,"y":104},{"x":25,"y":102},{"x":26,"y":102},{"x":27,"y":106},{"x":28,"y":104}]'),
(58, 'bleubidon', '19-1-2020, 15:44:2', 'test intelligence et logique', '[{"x":9,"y":100},{"x":10,"y":98},{"x":11,"y":101},{"x":12,"y":100},{"x":13,"y":104},{"x":14,"y":99},{"x":15,"y":101},{"x":16,"y":101},{"x":17,"y":102},{"x":18,"y":103},{"x":19,"y":103},{"x":20,"y":98},{"x":21,"y":101},{"x":22,"y":97},{"x":23,"y":93},{"x":24,"y":91},{"x":25,"y":90},{"x":26,"y":93},{"x":27,"y":93},{"x":28,"y":89}]'),
(59, 'bleubidon', '19-1-2020, 15:48:12', 'test intelligence et logique', '[{"x":9,"y":89},{"x":10,"y":94},{"x":11,"y":97},{"x":12,"y":96},{"x":13,"y":95},{"x":14,"y":92},{"x":15,"y":97},{"x":16,"y":95},{"x":17,"y":98},{"x":18,"y":103},{"x":19,"y":106},{"x":20,"y":110},{"x":21,"y":112},{"x":22,"y":112},{"x":23,"y":115},{"x":24,"y":110},{"x":25,"y":115},{"x":26,"y":119},{"x":27,"y":118},{"x":28,"y":119}]'),
(60, 'bleubidon', '19-1-2020, 15:48:28', 'test de chiffres', '[{"x":9,"y":109},{"x":10,"y":105},{"x":11,"y":106},{"x":12,"y":108},{"x":13,"y":113},{"x":14,"y":110},{"x":15,"y":107},{"x":16,"y":111},{"x":17,"y":108},{"x":18,"y":112},{"x":19,"y":114},{"x":20,"y":116},{"x":21,"y":113},{"x":22,"y":114},{"x":23,"y":113},{"x":24,"y":113},{"x":25,"y":115},{"x":26,"y":120},{"x":27,"y":117},{"x":28,"y":115}]'),
(61, 'bleubidon', '19-1-2020, 15:49:28', 'test de chiffres', '[{"x":0,"y":105},{"x":1,"y":102},{"x":2,"y":99},{"x":3,"y":95},{"x":4,"y":91},{"x":5,"y":90},{"x":6,"y":92},{"x":7,"y":94},{"x":8,"y":98}]'),
(62, 'nid', '20-1-2020, 18:32:15', 'mesure de fréquence cardiaque', '[{"x":0,"y":99},{"x":1,"y":97},{"x":2,"y":94},{"x":3,"y":95},{"x":4,"y":95},{"x":5,"y":96},{"x":6,"y":95},{"x":7,"y":95},{"x":8,"y":94}]'),
(63, 'nid', '20-1-2020, 18:34:3', 'test de chiffres', '[{"x":0,"y":104},{"x":1,"y":103},{"x":2,"y":102},{"x":3,"y":104},{"x":4,"y":105},{"x":5,"y":104},{"x":6,"y":104},{"x":7,"y":103},{"x":8,"y":106}]'),
(64, 'nid', '20-1-2020, 18:35:8', 'test intelligence et logique', '[{"x":0,"y":98},{"x":1,"y":100},{"x":2,"y":104},{"x":3,"y":100},{"x":4,"y":99},{"x":5,"y":100},{"x":6,"y":99},{"x":7,"y":103},{"x":8,"y":100}]'),
(65, 'nid', '20-1-2020, 18:35:20', 'test intelligence et logique', '[{"x":0,"y":104},{"x":1,"y":106},{"x":2,"y":106},{"x":3,"y":110},{"x":4,"y":115},{"x":5,"y":116},{"x":6,"y":119},{"x":7,"y":123},{"x":8,"y":122}]');

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
('bleubidon', 'ucqpkj6rme', 1579545227),
('ericaff', 'r9olte7qnp', 1579540323);

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
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id_question`);

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
  ADD PRIMARY KEY (`id_tests_passes`);

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
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `tests_passes`
--
ALTER TABLE `tests_passes`
  MODIFY `id_tests_passes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `tests_psycho`
--
ALTER TABLE `tests_psycho`
  MODIFY `id_test_psycho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
