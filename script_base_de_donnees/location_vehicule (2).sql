-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 25 mai 2018 à 10:40
-- Version du serveur :  10.1.31-MariaDB
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `location_vehicule`
--

-- --------------------------------------------------------

--
-- Structure de la table `vehicules`
--

CREATE TABLE `vehicules` (
  `id` int(10) UNSIGNED NOT NULL,
  `marque` varchar(255) NOT NULL,
  `modele` varchar(255) NOT NULL,
  `serie` varchar(255) NOT NULL,
  `fabricant` varchar(255) NOT NULL,
  `couleur` varchar(100) NOT NULL,
  `contenance` varchar(50) NOT NULL,
  `chaises` int(11) NOT NULL,
  `matricule` varchar(255) NOT NULL,
  `vitesse_max` varchar(10) NOT NULL,
  `transmission` varchar(50) NOT NULL,
  `acceleration` varchar(10) NOT NULL,
  `puissance_moteur` varchar(10) NOT NULL,
  `image` varchar(10) NOT NULL,
  `jour` int(11) NOT NULL,
  `mois` int(11) NOT NULL,
  `annee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `vehicules`
--

INSERT INTO `vehicules` (`id`, `marque`, `modele`, `serie`, `fabricant`, `couleur`, `contenance`, `chaises`, `matricule`, `vitesse_max`, `transmission`, `acceleration`, `puissance_moteur`, `image`, `jour`, `mois`, `annee`) VALUES
(1, 'TOYOTA', 'JK2018', '45SSDFRE', 'TOYOTA', 'Essence', '190 Litres', 2, 'kl4512', '180 km/h', 'Manuel', '3.4s', '200 Chevau', '1.jpg', 16, 6, 2018),
(3, 'TOYOYA', 'LAND CRUISER', '45SDER', 'TOYOTA', 'gaz-oil', '220 Litres', 7, '45QSZA', '230 km/h', 'Manuel', '4.2s', '250 Chevau', '3.jpg', 14, 6, 2018),
(4, 'BUGATI', 'KJ451', '45QSDEZ', 'BUGATI', 'Essence', '60 Litres', 2, '45QSER', '310 km/h', 'Automatique', '3.6s', '350 Chevau', '4.jpg', 12, 4, 2018),
(6, 'HONDA', 'KL45', '45QSZA78EED', 'HONDA', 'Gaz-oil', '225 Litres', 2, 'DFHG7895', '250 km/h', 'Manuel', '3.5s', '400 Chevau', '6.jpg', 15, 6, 2018),
(8, 'MITSUBISHI', 'KL54', '455SD', 'MITSHUBISHI', 'Gaz-oil', '75 Litres', 5, 'GH87', '198 km/h', 'Manuel', '5.2s', '250 Chevau', '8.jpg', 0, 0, 0),
(9, 'HYUNDAI', 'DS45', '6545SDDSD', 'HYNDAI', 'Essence', '75 Litres', 5, 'QS45Q', '220 km/h', 'Automatique', '5.1s', '500 Chevau', '9.jpg', 0, 0, 0),
(10, 'CAMARO', 'CHEVROLET', '456QSDCQS', 'CHEVROLET', 'Essence', '65 Litres', 2, 'iuhoiu45', '05 km/h', 'Automatique', '3.1s', '350 Chevau', '10.jpg', 0, 0, 0),
(11, 'COROLLA', 'UYG45', '5465MUH', 'TOYOTA', 'Esesnce', '175 Litres', 6, '45qs', '185 km/h', 'Manuel', '5.6s', '200 Chevau', '11.jpg', 0, 0, 0),
(12, 'TUNDRA', 'TUNDRA', '45QQSZXXXZS', 'TUNDRA', 'Gaz-oil', '200 Litres', 5, 'hj45', '185 km/h', 'Automatique', '5.6s', '200 Chevau', '12.jpg', 0, 0, 0),
(13, 'FERRARI', 'FR2019', 'XXDCCDXX85XD', 'FERRARI', 'Essence', '50 Litres', 3, 'mlk45', '360 km/h', 'Automatique', '2.5s', '350 Chevau', '13.jpg', 0, 0, 0),
(14, 'VOLVO', 'KL45', 'MLXXSD52', 'VOLVO', 'Essence', '180 Litres', 5, 'khi45', '220 km/h', 'Automatique', '3.5s', '400 Chevau', '14.jpg', 0, 0, 0),
(15, 'Marque', 'luigefe54', 'igiopojlnuh', 'ygiuygivuyg', 'Essence', '150 Litres', 5, 'tvy45', '180 km/h', 'Manuel', '3.4s', '45pw', '15.jpg', 0, 0, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `vehicules`
--
ALTER TABLE `vehicules`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `vehicules`
--
ALTER TABLE `vehicules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
