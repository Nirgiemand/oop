-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Loomise aeg: Veebr 05, 2018 kell 09:44 AM
-- Serveri versioon: 5.5.49-0ubuntu0.14.04.1
-- PHP versioon: 5.5.9-1ubuntu4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
--

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `content_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `content` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `clean_content` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `title` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `parent_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `is_hidden` tinyint(1) NOT NULL DEFAULT '0',
  `show_in_menu` tinyint(1) NOT NULL DEFAULT '0',
  `sort` int(10) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `created` datetime NOT NULL,
  `is_first_page` tinyint(1) NOT NULL DEFAULT '0',
  `lang_id` varchar(2) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`content_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

