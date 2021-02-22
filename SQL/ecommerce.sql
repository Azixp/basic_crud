-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 16 jan. 2021 à 14:56
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ecommerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(55) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `image`) VALUES
(1, 'Product-1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, ullam dolor sit amet consectetur adipisicing elit. Repellat, ullam.', 'https://picsum.photos/300/300'),
(2, 'Product-2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, ullam dolor sit amet consectetur adipisicing elit. Repellat, ullam.', 'https://picsum.photos/300/300'),
(3, 'Product-3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, ullam dolor sit amet consectetur adipisicing elit. Repellat, ullam.', 'https://picsum.photos/300/300'),
(4, 'Product-4', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, ullam dolor sit amet consectetur adipisicing elit. Repellat, ullam.', 'https://picsum.photos/300/300'),
(5, 'Product-5', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, ullam dolor sit amet consectetur adipisicing elit. Repellat, ullam.', 'https://picsum.photos/300/300'),
(6, 'Product-6', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, ullam dolor sit amet consectetur adipisicing elit. Repellat, ullam.', 'https://picsum.photos/300/300'),
(7, 'Product-7', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, ullam dolor sit amet consectetur adipisicing elit. Repellat, ullam.', 'https://picsum.photos/300/300'),
(8, 'Product-8', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, ullam dolor sit amet consectetur adipisicing elit. Repellat, ullam.', 'https://picsum.photos/300/300'),
(9, 'Product-9', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, ullam dolor sit amet consectetur adipisicing elit. Repellat, ullam.', 'https://picsum.photos/300/300'),
(10, 'Product-10', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, ullam dolor sit amet consectetur adipisicing elit. Repellat, ullam.', 'https://picsum.photos/300/300');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
