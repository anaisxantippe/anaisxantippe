-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 18 fév. 2021 à 15:21
-- Version du serveur :  5.7.24
-- Version de PHP : 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `zephyresport`
--

-- --------------------------------------------------------

--
-- Structure de la table `adherents`
--

CREATE TABLE `adherents` (
  `id_adherent` tinyint(4) NOT NULL,
  `nom_adherent` varchar(50) DEFAULT NULL,
  `prenom_adherent` varchar(50) DEFAULT NULL,
  `naissance_adherent` varchar(50) DEFAULT NULL,
  `pseudo_adherent` varchar(25) DEFAULT NULL,
  `telephone_adherent` varchar(38) DEFAULT NULL,
  `email_adherent` varchar(29) DEFAULT NULL,
  `adresse_adherent` varchar(39) DEFAULT NULL,
  `cp_adherent` varchar(11) DEFAULT NULL,
  `ville_adherent` varchar(24) DEFAULT NULL,
  `type_adhesion` varchar(66) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `adherents`
--

INSERT INTO `adherents` (`id_adherent`, `nom_adherent`, `prenom_adherent`, `naissance_adherent`, `pseudo_adherent`, `telephone_adherent`, `email_adherent`, `adresse_adherent`, `cp_adherent`, `ville_adherent`, `type_adhesion`) VALUES
(1, 'FALZON', 'Arthur', '24/04/2000', 'Kodiss', '0689202225', 'afalzon12@orange.fr', '37 Chemin de la civaude', '69440', 'Mornant', 'Membre '),
(2, 'galand', 'romain', '05/09/1989', 'choubaca', '0666087839', 'romaingaland@hotmail.fr', '31 route de paris', '69210', 'l\'arbresle', 'Membre '),
(3, 'Charon', 'Olivier', '28/01/1994', 'Alygator', '0771816621', 'o.charon@zephyr-esport.com', '128 Cours Emile Zola', '69100', 'Villeurbanne', ' Bénévole'),
(4, 'XANTIPPE', 'ANAIS', '25/11/1992', 'Xhana', '0631306872', 'hanays@hotmail.com', '22 RUE DELAHAYE', '80080', 'AMIENS', ' Bénévole'),
(5, 'Kerveillant', 'Yoann', '16/12/1993', 'Jhinius420', '0622305673', 'yoann.kerveillant@hotmail.com', '62 rue gabriel péri', '69100', 'Villeurbanne', ' Bénévole'),
(6, 'Paris', 'Gaetan', '24/11/1993', 'Sensei', '0787947033', 'gaetan.paris.perso@gmail.com', '18 rue des roses', '70190', '70190 - RIOZ', 'Membre '),
(7, 'FOLLETE', 'JEAN-PIERRE', '06/06/1990', 'Macfly', '0788627833', 'follete.art@gmail.com', 'Code Door : 1642', '69003', 'LYON', ' Bénévole'),
(8, 'PANNIER', 'Clément', '01/01/1970', 'Hgnn No.', '0611487574', 'clement.pnr16@gmail.Com', '6 rue du général Frère - Appartement 15', '80080', 'AMIENS', 'Membre ');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adherents`
--
ALTER TABLE `adherents`
  ADD PRIMARY KEY (`id_adherent`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
