-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 19 juin 2021 à 12:43
-- Version du serveur :  10.1.26-MariaDB
-- Version de PHP :  7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `inchclass`
--

-- --------------------------------------------------------

--
-- Structure de la table `inch_group`
--

CREATE TABLE `inch_group` (
  `Id` int(11) NOT NULL,
  `Noms` varchar(255) NOT NULL,
  `Prenoms` varchar(255) NOT NULL,
  `Sexe` varchar(255) NOT NULL,
  `Date_Naissance` date NOT NULL,
  `Telephone` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Pswd` varchar(255) NOT NULL,
  `Pays` varchar(255) NOT NULL,
  `Photo_Profil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `inch_group`
--

INSERT INTO `inch_group` (`Id`, `Noms`, `Prenoms`, `Sexe`, `Date_Naissance`, `Telephone`, `Email`, `Pswd`, `Pays`, `Photo_Profil`) VALUES
(1, 'CHEUMEGNI NANGUE', 'Jessica Fanta', 'Femme', '2021-06-06', 203040506, 'Example@gmail.cm', 'rgrgrgrgrgrgrger', 'marocaine', 'andela2.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `inch_group`
--
ALTER TABLE `inch_group`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `inch_group`
--
ALTER TABLE `inch_group`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
