-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2024 at 09:06 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-site-edppc`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_ID` int(11) NOT NULL,
  `nom_complet` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sujet` varchar(244) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date_recu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `evenement`
--

CREATE TABLE `evenement` (
  `evenement_ID` int(11) NOT NULL,
  `evenement` varchar(255) NOT NULL,
  `Description` longtext NOT NULL,
  `date_evenement` date NOT NULL,
  `heure_evenemen` time NOT NULL,
  `lieu` varchar(245) NOT NULL,
  `image` varchar(245) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `evenement`
--

INSERT INTO `evenement` (`evenement_ID`, `evenement`, `Description`, `date_evenement`, `heure_evenemen`, `lieu`, `image`) VALUES
(1, 'Journee recreative ', 'C\'est un événement organisé pour permettre aux jeunes de passer du temps ensemble, de se créer de beaux souvenirs dans un environnement sûr et amusant. Elles sont un moyen d\'échapper à la routine quotidienne et de profiter de moments de détente et d\'amusement. ', '2024-08-17', '08:00:01', 'EDDPPC test', 'fly.jpg'),
(2, 'Test evenement ', 'Test evenement  orem ipsum dolor sit amet, consectetur adipiscing elit. Aenean congue dui non libero tincidunt commodo. Proin eget venenatis mauris.Mauris ornare semeu loremLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ex odio, venenatis at tempor ut, egestas. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ex odio, venenatis at tempor ut, egestas...', '2024-08-25', '16:00:01', 'Delmas 33 test', ''),
(3, 'Lorem Test evenement ', 'Test evenement  orem ipsum dolor sit amet, consectetur adipiscing elit. Aenean congue dui non libero tincidunt commodo. Proin eget venenatis mauris.Mauris ornare semeu loremLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ex odio, venenatis at tempor ut, egestas. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ex odio, venenatis at tempor ut, egestas...', '2024-08-30', '16:00:01', '', ''),
(4, 'ABC Test evenement ', 'Test evenement  orem ipsum dolor sit amet, consectetur adipiscing elit. Aenean congue dui non libero tincidunt commodo. Proin eget venenatis mauris.Mauris ornare semeu loremLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ex odio, venenatis at tempor ut, egestas. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ex odio, venenatis at tempor ut, egestas...', '2024-08-31', '14:00:01', '', ''),
(5, 'consectetur evenement ', 'consectetur Test evenement  orem ipsum dolor sit amet, consectetur adipiscing elit. Aenean congue dui non libero tincidunt commodo. Proin eget venenatis mauris.Mauris ornare semeu loremLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ex odio, venenatis at tempor ut, egestas. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ex odio, venenatis at tempor ut, egestas...', '2024-09-06', '13:00:01', '', ''),
(6, 'consectetur evenement ', 'evenement consectetur Test evenement  orem ipsum dolor sit amet, consectetur adipiscing elit. Aenean congue dui non libero tincidunt commodo. Proin eget venenatis mauris.Mauris ornare semeu loremLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ex odio, venenatis at tempor ut, egestas. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ex odio, venenatis at tempor ut, egestas...', '2024-09-12', '14:00:01', '', ''),
(7, 'Aenean congue', 'Aenean congue evenement consectetur Test evenement  orem ipsum dolor sit amet, consectetur adipiscing elit. Aenean congue dui non libero tincidunt commodo. Proin eget venenatis mauris.Mauris ornare semeu loremLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ex odio, venenatis at tempor ut, egestas. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ex odio, venenatis at tempor ut, egestas...', '2024-09-17', '14:00:01', '', ''),
(8, 'tincidunt commodo', 'tincidunt commodo Aenean congue evenement consectetur Test evenement  orem ipsum dolor sit amet, consectetur adipiscing elit. Aenean congue dui non libero tincidunt commodo. Proin eget venenatis mauris.Mauris ornare semeu loremLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ex odio, venenatis at tempor ut, egestas. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ex odio, venenatis at tempor ut, egestas...', '2024-09-19', '17:00:01', '', ''),
(9, 'test tincidunt commodo', 'Mauris sagitis urna molestie\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque a lectus vitae arcu bibendum condimentum. In a porta nunc ... Mauris sagitis urna molestie\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque a lectus vitae arcu bibendum condimentum. In a porta nunc ...Mauris sagitis urna molestie\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque a lectus vitae arcu bibendum condimentum. In a porta nunc ...Mauris sagitis urna molestie\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque a lectus vitae arcu bibendum condimentum. In a porta nunc ...', '2024-06-17', '08:00:01', '', ''),
(10, 'test tincidunt commodo', 'Mauris sagitis urna molestie\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque a lectus vitae arcu bibendum condimentum. In a porta nunc ... Mauris sagitis urna molestie\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque a lectus vitae arcu bibendum condimentum. In a porta nunc ...Mauris sagitis urna molestie\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque a lectus vitae arcu bibendum condimentum. In a porta nunc ...Mauris sagitis urna molestie\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque a lectus vitae arcu bibendum condimentum. In a porta nunc ...', '2024-05-12', '08:00:01', '', ''),
(11, ' commodo test tincidunt commodo', 'commodo Mauris sagitis urna molestie\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque a lectus vitae arcu bibendum condimentum. In a porta nunc ... Mauris sagitis urna molestie\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque a lectus vitae arcu bibendum condimentum. In a porta nunc ...Mauris sagitis urna molestie\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque a lectus vitae arcu bibendum condimentum. In a porta nunc ...Mauris sagitis urna molestie\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque a lectus vitae arcu bibendum condimentum. In a porta nunc ...', '2024-04-12', '08:00:01', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `galerie`
--

CREATE TABLE `galerie` (
  `id_photo` int(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `type` enum('Baptemes','Mariages','Nos Cultes','Reveil annuel','Chapelle des Enfants','anniversaire','Bataillon','Presentation au temple','Week end Couple') NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galerie`
--

INSERT INTO `galerie` (`id_photo`, `photo`, `type`, `Description`) VALUES
(1, 'pic.jpg', 'Chapelle des Enfants', 'test test chapelle '),
(2, 'pic-8.jpg', 'anniversaire', 'test birthday '),
(3, 'pic-2.jpg', 'Nos Cultes', ' test pic- '),
(4, 'pic-1.jpg', 'Reveil annuel', 'reveil test'),
(5, 'pic-11.jpg', 'anniversaire', 'test 1'),
(6, 'pic-12.jpg', 'anniversaire', ' 2 test 1'),
(7, 'pic-13.jpg', 'anniversaire', '3 test 1'),
(8, 'pic-14.jpg', 'anniversaire', ' 4 test 1'),
(9, 'pic-3.jpg', 'Baptemes', 'pic-3pic-3pic-3'),
(10, 'pic-4.jpg', 'Baptemes', 'pic-3pic-3pic-3'),
(11, 'pic-5.jpg', 'Baptemes', 'pic-3pic-3pic-3'),
(12, 'pic-3.jpg', 'Mariages', 'Mariages pic-3pic-3pic-3'),
(13, 'pic-4.jpg', 'Mariages', 'pic-3pic Mariages-3pic-3'),
(14, 'pic-5.jpg', 'Mariages', 'pic-3pic-3pic-3 Mariages'),
(15, 'pic-4.jpg', 'Bataillon', 'pic-4.jpg tesssss'),
(16, 'pic-6.jpg', 'Presentation au temple', 'pic-6pic-6pic-6pic-6pic-6'),
(17, 'pic-3.jpg', 'anniversaire', 'pic-3 pic-3'),
(18, 'pic-3.jpg', 'Chapelle des Enfants', 'trr pic-3 pic-3'),
(19, 'pic-8.jpg', 'Baptemes', 'pic-8pic-8pic-8'),
(20, 'test2.jpg', 'anniversaire', ''),
(21, 'te.jpg', 'Week end Couple', 'dsxxx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_ID`);

--
-- Indexes for table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`evenement_ID`);

--
-- Indexes for table `galerie`
--
ALTER TABLE `galerie`
  ADD PRIMARY KEY (`id_photo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `evenement`
--
ALTER TABLE `evenement`
  MODIFY `evenement_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `galerie`
--
ALTER TABLE `galerie`
  MODIFY `id_photo` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
