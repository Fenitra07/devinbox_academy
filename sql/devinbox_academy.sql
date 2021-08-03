-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 02, 2021 at 08:28 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devinbox_academy`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `titre_art` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_art` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contenu_art` text COLLATE utf8_unicode_ci NOT NULL,
  `date_pub_art` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thematique_art` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auteur_art` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_article`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id_article`, `titre_art`, `image_art`, `contenu_art`, `date_pub_art`, `thematique_art`, `auteur_art`) VALUES
(19, 'Mark Zuckerberg, fondateur de Facebook', '117070584_289104935876611_444015502933029247_n.jpg', 'Mark Zuckerberg, informaticien amÃ©ricain, est connu pour avoir fondÃ© le rÃ©seau social Facebook en 2004, avec ses camarades Eduardo Saverin, Dustin Moskovitz et Chris Hughes, alors qu\'il Ã©tait Ã©tudiant Ã  Harvard. En 2014, sa fortune Ã©tait estimÃ©e Ã  30 milliards de dollars. En 2003, il rencontre sa compagne Priscilla Chan, une pÃ©diatre qu\'il Ã©pouse en 2012. Le couple accueille son premier enfant, une petit Max, en dÃ©cembre 2015.', '2021-08-06', 'Informatique', 'Fenitra'),
(20, 'Google\'s CEO Is Facing Intense Criticism for His Leadership. His Response Is Pure Emotional Intelligence', '117364797_289104945876610_8274974133991339875_n.jpg', 'According to the Times, employees expressed frustration that \"Google did not move quickly on key business and personnel moves because he chewed over decisions and delayed action.\" For example, the sources complained that Pichai took a year to fill an important position, even when there were qualified candidates. They also pointed to the fact that Google didn\'t buy Shopify as an example of Pichai\'s flawed decision-making process. \r\n\r\nIt\'s worth mentioning that had Google (or most accurately, Google\'s parent company Alphabet) tried to acquire Shopify, it would have certainly drawn even greater antitrust scrutiny than the company faces already. Never mind that it would have put itself in direct competition with Amazon.', '2021-08-31', 'Science', 'Fenitra'),
(17, 'Elon Musk, milliardaire mi-mÃ©galomane, mi-visionnaire', '117386233_289104982543273_4700503356963433182_n.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2021-08-02', 'Sciences', 'Fenitra'),
(18, 'Le milliardaire Jeff Bezos a rÃ©ussi son vol vers l\'espace', '117125439_289104905876614_3351517186851167184_n.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2021-08-03', 'Futuriste', 'Fenitra');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id_login` int(255) NOT NULL AUTO_INCREMENT,
  `login_identifiant` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `login_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_login`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `login_identifiant`, `login_password`) VALUES
(1, 'devinbox007@', 'devinbox007@');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
