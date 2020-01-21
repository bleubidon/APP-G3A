-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: fdb23.runhosting.com
-- Generation Time: Jan 21, 2020 at 10:53 PM
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
(17, 'capteur de fréquence cardiaque', 1),
(18, 'capteur de température', 1),
(19, 'haut parleur', 0),
(20, 'microphone', 1),
(22, 'ordinateur', 1);

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
('Pilote', ';2;1;10;4;11'),
('PersonnelAuSol', ';5;8;1;6;7'),
('PersonnelNaviguant', ';2;9;1');

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
(31, 'Une première question ?', 'Voici la réponse'),
(32, 'Deuxième question ?', '*-*-*-*-*-*-*-*-'),
(33, 'Une dernière ?', 'Et voici la réponse');

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
('vincent', 'administrateur', 'desmazieres', 'vincent', '1997-01-14', '0987653333', 'desmazieres.vincent@gmail.com', NULL, '$2y$10$Gh1ZC.wtkaDi8XYrZghN9Oxffbrgt658lfK/l.p5L9UMgo0wlYhce', 'Pilote'),
('tempo', 'utilisateur', 'a', 'a', '2000-01-01', '0600000000', 'b@a.a', NULL, '$2y$10$P1umUoU7e.lP7g20eRJm9OtOhFZylZppjFHRDLxseMGj0ZTZIowxe', 'Pilote'),
('nid', 'gestionnaire', 'nnid', 'u', '1990-01-01', '0600000000', 'a@a.a', 'nid_scarabee.jpg', '$2y$10$0zMfUhrnoskH7JBJMl5yO.cu5xUAKiKEG4zINQf/CvkLggBfak.72', 'Pilote'),
('ericaff', 'administrateur', 'AFFOYON', 'Eric', '1999-08-16', '0660022070', 'yemi.affoyon@gmail.com', NULL, '$2y$10$dEVUCSt5Ygr8TjDjTYfywuLeuTxVFtnHnH4eIcoYOnhwPzukXgYty', 'PersonnelAuSol'),
('ericGestion', 'gestionnaire', 'AFFOYON', 'Eric', '1999-08-16', '0660022070', 'yemi.affoyon@gmail.com', NULL, '$2y$10$tYn3LlxJvk8PK/7rYg/MNuwe/gf0LDjrx.o9TfmTYIAZmIJKAUbES', ''),
('vincent2', 'gestionnaire', '', '', '0000-00-00', '', '', NULL, '$2y$10$S3Td8a9RkysSdTYSELcKb.WG3g9gmK5YIMGqGNsbm6tHGxDngmUSK', ''),
('vincent3', 'banni', '', '', '0000-00-00', '', '', NULL, '$2y$10$y9GFso4a.gDHAfAaPlg8/OvUgHL8YJ2xDR9b4xt.OJB1vjxZb6I12', ''),
('admin', 'administrateur', '', '', '0000-00-00', '', '', NULL, '$2y$10$1pGEMFDiVRJuVNgQIyb6MOHAnA7skfs8AruZDKw8SyaH9Kc9BvtFW', '');

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
('vincent', 'Homme', 80, 180, 'A', 10, ''),
('tempo', 'Homme', 1, 1, 'o', 4, ''),
('nid', 'Homme', 1, 1, 'o', 1, '                                                                                                                                                                                                                            .'),
('ericaff', 'Homme', 75, 180, 'A+', 6, 'NEANT'),
('jeanDupont', 'Homme', 80, 180, 'A+', 6, ''),
('aaaa', 'Homme', 1, 1, 'o', 1, ''),
('ericGestion', '', 0, 0, '', 0, ''),
('vincent2', '', 0, 0, '', 0, ''),
('vincent3', '', 0, 0, '', 0, ''),
('admin', '', 0, 0, '', 0, '');

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
(56, 'nid', '19-1-2020, 13:14:24', 'Mesure de fréquence cardiaque', '[{"x":9,"y":100},{"x":10,"y":95},{"x":11,"y":94},{"x":12,"y":90},{"x":13,"y":94},{"x":14,"y":97},{"x":15,"y":100},{"x":16,"y":99},{"x":17,"y":95},{"x":18,"y":99},{"x":19,"y":103},{"x":20,"y":108},{"x":21,"y":112},{"x":22,"y":114},{"x":23,"y":116},{"x":24,"y":118},{"x":25,"y":123},{"x":26,"y":123},{"x":27,"y":124},{"x":28,"y":121}]'),
(57, 'bleubidon', '19-1-2020, 15:43:23', 'Test de lettres', '[{"x":9,"y":93},{"x":10,"y":90},{"x":11,"y":93},{"x":12,"y":93},{"x":13,"y":97},{"x":14,"y":102},{"x":15,"y":104},{"x":16,"y":107},{"x":17,"y":106},{"x":18,"y":103},{"x":19,"y":101},{"x":20,"y":104},{"x":21,"y":102},{"x":22,"y":100},{"x":23,"y":101},{"x":24,"y":104},{"x":25,"y":102},{"x":26,"y":102},{"x":27,"y":106},{"x":28,"y":104}]'),
(58, 'bleubidon', '19-1-2020, 15:44:2', 'Test intelligence et logique', '[{"x":9,"y":100},{"x":10,"y":98},{"x":11,"y":101},{"x":12,"y":100},{"x":13,"y":104},{"x":14,"y":99},{"x":15,"y":101},{"x":16,"y":101},{"x":17,"y":102},{"x":18,"y":103},{"x":19,"y":103},{"x":20,"y":98},{"x":21,"y":101},{"x":22,"y":97},{"x":23,"y":93},{"x":24,"y":91},{"x":25,"y":90},{"x":26,"y":93},{"x":27,"y":93},{"x":28,"y":89}]'),
(59, 'bleubidon', '19-1-2020, 15:48:12', 'Test intelligence et logique', '[{"x":9,"y":89},{"x":10,"y":94},{"x":11,"y":97},{"x":12,"y":96},{"x":13,"y":95},{"x":14,"y":92},{"x":15,"y":97},{"x":16,"y":95},{"x":17,"y":98},{"x":18,"y":103},{"x":19,"y":106},{"x":20,"y":110},{"x":21,"y":112},{"x":22,"y":112},{"x":23,"y":115},{"x":24,"y":110},{"x":25,"y":115},{"x":26,"y":119},{"x":27,"y":118},{"x":28,"y":119}]'),
(60, 'bleubidon', '19-1-2020, 15:48:28', 'Test de chiffres', '[{"x":9,"y":109},{"x":10,"y":105},{"x":11,"y":106},{"x":12,"y":108},{"x":13,"y":113},{"x":14,"y":110},{"x":15,"y":107},{"x":16,"y":111},{"x":17,"y":108},{"x":18,"y":112},{"x":19,"y":114},{"x":20,"y":116},{"x":21,"y":113},{"x":22,"y":114},{"x":23,"y":113},{"x":24,"y":113},{"x":25,"y":115},{"x":26,"y":120},{"x":27,"y":117},{"x":28,"y":115}]'),
(61, 'bleubidon', '19-1-2020, 15:49:28', 'Test de chiffres', '[{"x":0,"y":105},{"x":1,"y":102},{"x":2,"y":99},{"x":3,"y":95},{"x":4,"y":91},{"x":5,"y":90},{"x":6,"y":92},{"x":7,"y":94},{"x":8,"y":98}]'),
(62, 'nid', '20-1-2020, 18:32:15', 'Mesure de fréquence cardiaque', '[{"x":0,"y":99},{"x":1,"y":97},{"x":2,"y":94},{"x":3,"y":95},{"x":4,"y":95},{"x":5,"y":96},{"x":6,"y":95},{"x":7,"y":95},{"x":8,"y":94}]'),
(63, 'nid', '20-1-2020, 18:34:3', 'Test de chiffres', '[{"x":0,"y":104},{"x":1,"y":103},{"x":2,"y":102},{"x":3,"y":104},{"x":4,"y":105},{"x":5,"y":104},{"x":6,"y":104},{"x":7,"y":103},{"x":8,"y":106}]'),
(64, 'nid', '20-1-2020, 18:35:8', 'Test intelligence et logique', '[{"x":0,"y":98},{"x":1,"y":100},{"x":2,"y":104},{"x":3,"y":100},{"x":4,"y":99},{"x":5,"y":100},{"x":6,"y":99},{"x":7,"y":103},{"x":8,"y":100}]'),
(65, 'nid', '20-1-2020, 18:35:20', 'Test intelligence et logique', '[{"x":0,"y":104},{"x":1,"y":106},{"x":2,"y":106},{"x":3,"y":110},{"x":4,"y":115},{"x":5,"y":116},{"x":6,"y":119},{"x":7,"y":123},{"x":8,"y":122}]'),
(66, 'nid', '20-1-2020, 21:56:30', 'Test de chiffres', '[{"x":0,"y":95},{"x":1,"y":91},{"x":2,"y":87},{"x":3,"y":89},{"x":4,"y":89},{"x":5,"y":86},{"x":6,"y":85},{"x":7,"y":82},{"x":8,"y":80}]'),
(67, 'vincent', '21-1-2020, 15:59:2', 'Mesure de fréquence cardiaque', '[{"x":0,"y":96},{"x":1,"y":98},{"x":2,"y":93},{"x":3,"y":90},{"x":4,"y":85},{"x":5,"y":83},{"x":6,"y":80},{"x":7,"y":81},{"x":8,"y":84}]'),
(68, 'vincent', '21-1-2020, 16:40:39', 'Mesure de fréquence cardiaque', '[{"x":0,"y":103},{"x":1,"y":106},{"x":2,"y":111},{"x":3,"y":115},{"x":4,"y":118},{"x":5,"y":115},{"x":6,"y":115},{"x":7,"y":116},{"x":8,"y":115}]'),
(69, 'vincent', '21-1-2020, 16:54:42', 'Mesure de fréquence cardiaque', '[{"x":0,"y":101},{"x":1,"y":98},{"x":2,"y":99},{"x":3,"y":99},{"x":4,"y":100},{"x":5,"y":99},{"x":6,"y":103},{"x":7,"y":107},{"x":8,"y":105}]'),
(70, 'nid', '21-1-2020, 18:21:57', 'Mesure de fréquence cardiaque', '[{"x":0,"y":100},{"x":1,"y":99},{"x":2,"y":102},{"x":3,"y":106},{"x":4,"y":102},{"x":5,"y":107},{"x":6,"y":108},{"x":7,"y":103},{"x":8,"y":100}]'),
(71, 'ericaff', '21-1-2020, 18:22:33', 'Mesure de fréquence cardiaque', '[{"x":0,"y":96},{"x":1,"y":92},{"x":2,"y":89},{"x":3,"y":84},{"x":4,"y":85},{"x":5,"y":84},{"x":6,"y":87},{"x":7,"y":85},{"x":8,"y":89}]'),
(72, 'nid', '21-1-2020, 19:13:29', 'Test intelligence et logique', '[{"x":0,"y":103},{"x":1,"y":104},{"x":2,"y":101},{"x":3,"y":97},{"x":4,"y":97},{"x":5,"y":92},{"x":6,"y":94},{"x":7,"y":98},{"x":8,"y":93}]'),
(73, 'ericaff', '21-1-2020, 19:15:20', 'Test de lettres', '[{"x":0,"y":96},{"x":1,"y":98},{"x":2,"y":98},{"x":3,"y":102},{"x":4,"y":105},{"x":5,"y":106},{"x":6,"y":103},{"x":7,"y":99},{"x":8,"y":101}]');

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
(1, 'Mesure de fréquence cardiaque', ';16;1;17'),
(4, 'Mesure de la température superficielle de la peau', ';18'),
(5, 'Mesure de la qualité de reconnaissance de tonalité', ';19;20'),
(6, 'Test de mémorisation', ';22'),
(7, 'Test aptitudes verbales', ';19;20;22'),
(8, 'Test de lettres', ';22'),
(9, 'Test de chiffres', ';22'),
(10, 'Test intelligence et logique', ';22'),
(11, 'Test de raisonnement', ';22');

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
('bleubidon', '1g8cp47209', 1579605935),
('ericaff', 'r9olte7qnp', 1579540323),
('vincent2', 'cj7hk84v5g', 1579622135);

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
  MODIFY `id_capteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `tests_passes`
--
ALTER TABLE `tests_passes`
  MODIFY `id_tests_passes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `tests_psycho`
--
ALTER TABLE `tests_psycho`
  MODIFY `id_test_psycho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
