-- phpMyAdmin SQL Dump
-- version 3.1.1
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Ven 26 Juin 2009 à 20:49
-- Version du serveur: 5.1.30
-- Version de PHP: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de données: `locale`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `numa` int(5) NOT NULL AUTO_INCREMENT,
  `titre` varchar(60) NOT NULL,
  `datea` date DEFAULT NULL,
  `texte` text NULL,
  PRIMARY KEY (`numa`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;




