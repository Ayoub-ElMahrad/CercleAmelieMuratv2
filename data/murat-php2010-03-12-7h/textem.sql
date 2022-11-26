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
-- Structure de la table `textem`
--


CREATE TABLE IF NOT EXISTS `textem` (
  `numt` int(5) NOT NULL AUTO_INCREMENT,
  `numm` int(5) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `texte` text NOT NULL,
  `textepos` varchar(5) NOT NULL,
  PRIMARY KEY (`numt`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;
