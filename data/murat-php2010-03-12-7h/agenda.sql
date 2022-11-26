-- Structure de la table `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
  `numagenda` int(5) NOT NULL AUTO_INCREMENT,
  `date_en` date DEFAULT NULL,
  `date_fr` varchar(50) DEFAULT NULL,
  `titre` text NOT NULL,
  `evenement` text NOT NULL,
  PRIMARY KEY (`numagenda`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

