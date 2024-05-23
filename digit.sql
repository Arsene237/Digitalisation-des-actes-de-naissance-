-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 23 mai 2024 à 12:45
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `digit`
--

-- --------------------------------------------------------

--
-- Structure de la table `acte`
--

CREATE TABLE `acte` (
  `id_acte` varchar(100) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `sexe` char(1) NOT NULL,
  `date` date NOT NULL,
  `lieu` varchar(20) NOT NULL,
  `nom_pere` varchar(20) NOT NULL,
  `prenom_pere` varchar(20) NOT NULL,
  `date_pere` date NOT NULL,
  `lieu_pere` varchar(20) NOT NULL,
  `nat_pere` varchar(20) NOT NULL,
  `prof_pere` varchar(20) NOT NULL,
  `nom_mere` varchar(20) NOT NULL,
  `prenom_mere` varchar(20) NOT NULL,
  `date_mere` date NOT NULL,
  `lieu_mere` varchar(20) NOT NULL,
  `nat_mere` varchar(20) NOT NULL,
  `prof_mere` varchar(20) NOT NULL,
  `nom_officier` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `officier`
--

CREATE TABLE `officier` (
  `matricule` int(20) NOT NULL,
  `nom_officier` varchar(20) NOT NULL,
  `prenom_officier` varchar(20) NOT NULL,
  `poste` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
