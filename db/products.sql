-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 19 mai 2021 à 15:04
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `labshop`
--

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `idPc` int(10) NOT NULL,
  `cpu` longtext NOT NULL,
  `ram` longtext NOT NULL,
  `stockage` longtext NOT NULL,
  `display` longtext NOT NULL,
  `communication` longtext NOT NULL,
  `os` longtext NOT NULL,
  `keyboard` longtext NOT NULL,
  `price` float NOT NULL,
  `name` longtext NOT NULL,
  `oldprice` longtext DEFAULT NULL,
  `genre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`idPc`, `cpu`, `ram`, `stockage`, `display`, `communication`, `os`, `keyboard`, `price`, `name`, `oldprice`, `genre`) VALUES
(1, 'AMD Ryzen™ 3 3250U', '12 GB DDR4 2400 MHz', '256 Go SSD M.2 PCIe', '15,6″ Full-HD TN 1080 Pixels', 'Wi-Fi + Bluetooth', 'Windows 10 Family 64 bits', 'Azerty Belgium', 8500.5, 'Asus intel core i9', '9200.80', 'ASUS'),
(2, 'Intel Core i7-4500U', '20 GB DDR4 2400 MHz', '512 Go SSD M.2 PCIe', '15,6″ Full-HD TN 1080 Pixels', 'Wi-Fi 802.11b', 'Windows 10 Family 64 bits', 'Azerty Belgium', 9500.5, 'Asus R510LC-XX084H', '11500.00', 'ASUS'),
(3, 'GPU NVIDIA', '32 Go AMD 7 nm', '1 To de SSD ', '15.6 pouces 2560 x 1440 px', 'Wi-Fi 6 Bluetooth 5.0', '\r\nMicrosoft Windows 10', 'X200CA X200LA X200MA', 14000.9, 'Asus ROG Strix G15 (G513)', '15000.20', 'ASUS'),
(4, 'Intel Core i3 6006U', ' 4 Go - DDR4', '512Go SSD', '15.6\'\' HD - LED - MAT Antireflets', 'Wifi Bluetooth 4.1', 'Microsoft Windows 7 Professionnel', 'AZERTY français', 3700.6, 'Lenovo Core i3 4Go 512SSD', '4000.00', 'LENOVO'),
(5, ' Intel Core 2 Duo P8600 ', '2 Go - DDR3', '160 Go SSD', '14,1\" WXGA 1280 x 800', 'Intel Wireless WiFi ', 'Microsoft Windows 7 Professionnel ', 'AZERTY français', 7300, 'LENOVO THINKPAD T400', '8700.90', 'LENOVO'),
(6, 'Intel Core i5-3230M', '4 Go DDR3-SDRAM', '1000 Go HDD', '17,3 \" 1600 x 900', 'Bluetooth 4.0 ', 'Windows 8 64-bits', 'Quirty UK', 6500.2, 'Lenovo G700', '7000', 'LENOVO'),
(7, 'Intel Core i7-3230M', '8 Go DDR3-SDRAM', '512Go SSD', '17,3 \" 1600 x 900', 'Bluetooth 4.0 ', 'Windows 10 64-bits', 'Quirty UK', 8500.2, 'DELL Latitude E5550', '9000', 'DELL');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`idPc`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `idPc` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
