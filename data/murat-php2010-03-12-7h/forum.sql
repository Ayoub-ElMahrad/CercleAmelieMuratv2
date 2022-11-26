--
-- Structure de la table `forum`
--

CREATE TABLE IF NOT EXISTS `forum` (
  `num` int(6) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `texte` mediumtext NOT NULL,
  PRIMARY KEY (`num`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

