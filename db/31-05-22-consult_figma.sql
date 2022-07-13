-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 31 mai 2022 à 10:37
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `consult_figma`
--

-- --------------------------------------------------------

--
-- Structure de la table `table_news`
--

CREATE TABLE `table_news` (
  `id_news` int(10) NOT NULL,
  `author_news` varchar(50) NOT NULL,
  `genre_news` varchar(20) NOT NULL,
  `title_news` varchar(100) NOT NULL,
  `description_news` varchar(300) NOT NULL,
  `date_news` date NOT NULL,
  `photo_news` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `table_news`
--

INSERT INTO `table_news` (`id_news`, `author_news`, `genre_news`, `title_news`, `description_news`, `date_news`, `photo_news`) VALUES
(1, 'Sebastian', 'Tips', 'This is blog title 01', 'Sed ut perspiciatis unde omnis istenat error sit voluptatem accusantium doloremque lauda lorem ipsum dolor...', '2021-09-09', 'public/images/new1.png'),
(2, 'Sebastian', 'Business', 'This is blog title 02', 'Sed ut perspiciatis unde omnis istenat error sit voluptatem accusantium doloremque lauda lorem ipsum dolor...', '2021-09-09', 'public/images/new2.png'),
(3, 'Sebastian', 'Consulting', 'This is blog title 03', 'Sed ut perspiciatis unde omnis istenat error sit voluptatem accusantium doloremque lauda lorem ipsum dolor...', '2021-09-09', 'public/images/new3.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `table_news`
--
ALTER TABLE `table_news`
  ADD PRIMARY KEY (`id_news`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `table_news`
--
ALTER TABLE `table_news`
  MODIFY `id_news` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
