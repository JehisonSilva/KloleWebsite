-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 18 août 2023 à 22:19
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `website`
--

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

CREATE TABLE `blog` (
  `ID` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `subtitle` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `blog`
--

INSERT INTO `blog` (`ID`, `title`, `subtitle`, `description`, `image`) VALUES
(1, 'Matcha', 'Ingredientes increíbles:', 'Seguramente ya has escuchado mil veces que el matcha tiene grandes beneficios para la salud, incluso puede reducir el riesgo a tener cáncer y enfermedades crónicas como la diabetes.  Los principales beneficios para la salud del matcha provienen de su', '1692307279_matcha.JPG'),
(2, 'Skincare para hombres: importancia y rutina básica', 'Lorem ipsum dolor sit amet consectetur.', 'A menudo, el cuidado de la piel se asocia con las mujeres, pero es igualmente importante para los hombres, ¿cuántas veces al día hay que lavarse el rostro? ¿qué productos debo usar? ¿tengo que aplicarme protector solar?   Hoy te ayudaremos a resolver', '1692307871_image2.png');

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `utilisateur` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE `newsletter` (
  `ID` int(11) NOT NULL,
  `mail` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `newsletter`
--

INSERT INTO `newsletter` (`ID`, `mail`) VALUES
(1, 'test@1313');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_config`
--

CREATE TABLE `tbl_config` (
  `ID` int(11) NOT NULL,
  `nombreconfig` varchar(255) NOT NULL,
  `valeur` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `tbl_config`
--

INSERT INTO `tbl_config` (`ID`, `nombreconfig`, `valeur`) VALUES
(1, 'subtitle', 'Plaisir et Intimité Intenses, 100% Naturels'),
(3, 'Accueil secondaire', 'Découvrez le Plaisir Authentique et Sensuel'),
(4, 'bouton principal', 'Découvrir maintenant'),
(5, '#link bouton de services', 'bienvenida secundaria 4'),
(6, 'titre services', 'Explorez le Plaisir Authentique en Harmonie avec la Nature'),
(7, '', ''),
(8, 'title portfolio', 'PORTFOLIO'),
(9, 'description_portfolio', 'celle ci sont nous projects'),
(10, 'title_about', 'ABOUT'),
(11, 'description_ about', 'conoce nuestra historia'),
(12, 'dernier option about', 'be part of our story'),
(13, 'title team', 'Team'),
(14, 'description_ team', 'nous sommes ...'),
(15, 'title contact', 'Contact US'),
(16, 'description contact', 'lorem ipsum dolor sit amet consecteur'),
(17, 'link_tw', 'https://www.linkedin.com/in/jason-m-1609a811b/'),
(18, 'link face', 'https://www.linkedin.com/in/jason-m-1609a811b/'),
(19, 'link linkedin', 'https://www.linkedin.com/in/jason-m-1609a811b/');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_entre`
--

CREATE TABLE `tbl_entre` (
  `ID` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `tbl_entre`
--

INSERT INTO `tbl_entre` (`ID`, `date`, `title`, `description`, `image`) VALUES
(4, '2023-08-11', 'Our Humble Beginnings ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!', '1692209641_00.jpg'),
(5, '2023-08-09', 'Qu\'est-ce ', 'Qu\'est-ce que le Lorem Ipsum?', '1692209712_001.jpg'),
(6, '2023-08-24', 'Pourquoi l\'utiliser?', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du s', '1692209826_0001.jpg'),
(7, '2023-08-25', 'D\'où vient-il?', 'Contrairement à une opinion répandue, le Lorem Ipsum n\'est pas simplement du texte aléatoire.', '1692209898_00001.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_portfolio`
--

CREATE TABLE `tbl_portfolio` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `client` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `tbl_portfolio`
--

INSERT INTO `tbl_portfolio` (`ID`, `title`, `subtitle`, `image`, `description`, `client`, `categorie`, `url`) VALUES
(49, 'threads titre', 'Lorem ipsum dolor sit amet consectetur.', '1692193471_0909.jpg', 'Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum', 'klole', 'illustration', ''),
(50, 'Explore titre', 'Lorem ipsum dolor sit amet consectetur.', '1692193586_2.jpg', 'Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum', 'explore', 'graphics design', ''),
(51, 'Finish', 'Identity', '1692193951_3.jpg', 'Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum', ' Finish', ' Identity', ''),
(52, 'Lines', 'Branding', '1692193994_4.jpg', 'Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum', ' Lines', ' Branding', ''),
(53, 'Southwest', 'Website Design', '1692194049_5.jpg', 'Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum', ' Southwest', 'Website Design ', ''),
(54, 'Window', 'Photography', '1692194078_6.jpg', 'Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum', ' Window', ' Photography', '');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_team`
--

CREATE TABLE `tbl_team` (
  `ID` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `poste` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `tbl_team`
--

INSERT INTO `tbl_team` (`ID`, `image`, `nom`, `poste`, `twitter`, `facebook`, `linkedin`) VALUES
(2, '1692213189_0-1.jpg', 'Parveen Anand', 'Lead Designer', 'https://www.linkedin.com/notifications/?filter=all', 'https://www.linkedin.com/notifications/?filter=all', 'https://www.linkedin.com/notifications/?filter=all'),
(3, '1692213249_0-2.jpg', 'Diana Petersen', 'Lead Marketer', 'https://www.linkedin.com/notifications/?filter=all', 'https://www.linkedin.com/notifications/?filter=all', 'https://www.linkedin.com/notifications/?filter=all'),
(5, '1692217307_0-3.jpg', 'Larry Parker', 'Lead Developer', 'https://www.linkedin.com/in/jason-m-1609a811b/', 'https://www.linkedin.com/in/jason-m-1609a811b/', 'https://www.linkedin.com/in/jason-m-1609a811b/');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `Id` int(11) NOT NULL,
  `utilisateur` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `tbl_user`
--

INSERT INTO `tbl_user` (`Id`, `utilisateur`, `password`, `mail`) VALUES
(2, 'test07', '12345', ''),
(3, 'test02', '12345', 'test01@mail.com'),
(4, 'test03', '12345', 'test02@mail.com');

-- --------------------------------------------------------

--
-- Structure de la table `tlb_services`
--

CREATE TABLE `tlb_services` (
  `ID` int(11) NOT NULL,
  `icone` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `tlb_services`
--

INSERT INTO `tlb_services` (`ID`, `icone`, `title`, `description`) VALUES
(2, 'fa-wand-magic-sparkles', 'Bien-être sexuel, intimité & écoute de soi', ''),
(3, 'fa-solid fa-magnifying-glass', 'Transmission ancestrale d\'inspiration africaine', ''),
(7, 'fa-seedling', 'Soins naturels et objets érotiques', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `tbl_config`
--
ALTER TABLE `tbl_config`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `tbl_entre`
--
ALTER TABLE `tbl_entre`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `tbl_portfolio`
--
ALTER TABLE `tbl_portfolio`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `tbl_team`
--
ALTER TABLE `tbl_team`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `tlb_services`
--
ALTER TABLE `tlb_services`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `blog`
--
ALTER TABLE `blog`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `tbl_config`
--
ALTER TABLE `tbl_config`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `tbl_entre`
--
ALTER TABLE `tbl_entre`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `tbl_portfolio`
--
ALTER TABLE `tbl_portfolio`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT pour la table `tbl_team`
--
ALTER TABLE `tbl_team`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `tlb_services`
--
ALTER TABLE `tlb_services`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
