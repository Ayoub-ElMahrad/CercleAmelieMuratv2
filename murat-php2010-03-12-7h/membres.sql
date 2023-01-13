-- phpMyAdmin SQL Dump
-- version 3.1.1
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Ven 17 Juillet 2009 à 11:23
-- Version du serveur: 5.1.30
-- Version de PHP: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de données: `locale`
--

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE IF NOT EXISTS `membres` (
  `numm` int(5) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `adresse` varchar(100) DEFAULT NULL,
  `ville` varchar(30) DEFAULT NULL,
  `ae` varchar(50) DEFAULT NULL,
  `cotisation` mediumint(10) NOT NULL,
  `publication` tinyint(4) NOT NULL,
  `mdp` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`numm`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `membres`
--

INSERT INTO `membres` (`numm`, `nom`, `prenom`, `adresse`, `ville`, `ae`, `cotisation`, `publication`, `mdp`) VALUES
(8, 'FEUILLAT', 'Marie-Antoinette', '', '', '', 2007, 1, '@feuillatma'),
(7, 'BRUNHES', 'Jean-Pierre', '', '', '', 2008, 1, '@brunhesjp'),
(5, 'admin', 'admin', '', '', '', 10000, 0, '@admin'),
(6, 'FERNANDEZ', 'Claude', '', '', 'claude99.fernandez@laposte.net', 2009, 1, '@fernandezc'),
(10, 'FERNANDEZGMAIL', 'claude', '', '', 'claude99.fernandez@gmail.com', 2009, 1, '@fernandezgmail'),
(11, 'SOLAIR', 'laure', '', '', 'editionssolair@laposte.net', 2009, 1, '@editionssolair');

