<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd"> 
<html><head>
<!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8">-->

<TITLE></TITLE>
</head>
<body>
<table><tr><td>
<div class="textejustifie">
<?
include("include_mdp.php");
?>

<p>-- SAUVEGARDE TABLES SITE CERCLE AMÉLIE MURAT</p>

--<br>
-- copier-coller dans gedit, enregistrer sous: <br>
-- /home/sat/CLE_DOCUMENT/cla_cercle_sauvegarde_tables_aaaa-mm-jj.sql<br>
--<br><br>


-- ---------------------------------------------------<br>
--<br>
-- Structure de la table `agenda`<br>
--<br>
<br>
CREATE TABLE IF NOT EXISTS `agenda` (
  `numagenda` int(5) NOT NULL AUTO_INCREMENT,
  `date_en` date DEFAULT NULL,
  `date_fr` varchar(50) DEFAULT NULL,
  `titre` text NOT NULL,
  `evenement` text NOT NULL,
  PRIMARY KEY (`numagenda`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;
<br>
<br>
--<br>
-- Contenu de la table `agenda`<br>
--<br>
<br>
INSERT INTO `agenda` (`numagenda`, `date_en`, `date_fr`, `titre`, `evenement`) VALUES<br>
<?php

include("connexion.php");

$resultat=mysql_query("SELECT * FROM agenda ORDER BY numagenda ASC;");
$nb_agenda=mysql_num_rows($resultat);

for ($compteur=0 ; $compteur<$nb_agenda ; $compteur++)
{
$numagenda=mysql_result($resultat,$compteur,'numagenda');
$date_en=mysql_result($resultat,$compteur,'date_en');
$date_fr=mysql_result($resultat,$compteur,'date_fr');
$titre=mysql_result($resultat,$compteur,'titre');
$evenement=mysql_result($resultat,$compteur,'evenement');

$titre=str_replace("'","''",$titre);
$evenement=str_replace("'","''",$evenement);


echo "($numagenda, ";
echo "'$date_en', ";
echo "'$date_fr', ";
echo "'$titre', ";
echo "'$evenement')";


if ($compteur==$nb_agenda-1)
{echo ";";}
ELSE
{echo ",<br>";}

}//fin boucle for
?>
<br><br><br>
-- -----------------------------------------------------

--<br><br><br>
-- Structure de la table `forum`<br>
--<br>
<br>
CREATE TABLE IF NOT EXISTS `forum` (
  `num` int(6) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `texte` mediumtext NOT NULL,
  PRIMARY KEY (`num`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=92 ;
<br>
<br>
--<br>
-- Contenu de la table `forum`<br>
--<br>
<br>
INSERT INTO `forum` (`num`, `date`, `texte`) VALUES<br>

<?php


$resultat=mysql_query("SELECT * FROM forum ORDER BY num ASC;");
$nb_forum=mysql_num_rows($resultat);

for ($compteur=0 ; $compteur<$nb_forum ; $compteur++)
{
$num=mysql_result($resultat,$compteur,'num');
$date=mysql_result($resultat,$compteur,'date');
$texte=mysql_result($resultat,$compteur,'texte');

$texte=str_replace("'","''",$texte);

echo "($num, ";
echo "'$date', ";
echo "'$texte')";


if ($compteur==$nb_forum-1)
{echo ";";}
ELSE
{echo ",<br>";}

}//fin boucle for
?>




-- ------------------------------------------

--<br><br><br>
-- Structure de la table `membres`<br>
--<br>
<br>
CREATE TABLE `membres` (
  `numm` int(5) NOT NULL auto_increment,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `adresse` varchar(100) default NULL,
  `ville` varchar(30) default NULL,
  `ae` varchar(50) default NULL,
  `cotisation` mediumint(10) NOT NULL,
  PRIMARY KEY  (`numm`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;
<br>
<br>
--<br>
-- Contenu de la table `membres`<br>
--<br>
<br>
INSERT INTO `membres` (`numm`, `nom`, `prenom`, `adresse`, `ville`, `ae`, `cotisation`) VALUES<br>

<?php


$resultat=mysql_query("SELECT * FROM membres ORDER BY numm ASC;");
$nb_membres=mysql_num_rows($resultat);

for ($compteur=0 ; $compteur<$nb_membres ; $compteur++)
{
$numm=mysql_result($resultat,$compteur,'numm');
$nom=mysql_result($resultat,$compteur,'nom');
$prenom=mysql_result($resultat,$compteur,'prenom');
$adresse=mysql_result($resultat,$compteur,'adresse');
$ville=mysql_result($resultat,$compteur,'ville');
$ae=mysql_result($resultat,$compteur,'ae');
$cotisation=mysql_result($resultat,$compteur,'cotisation');

$nom=str_replace("'","''",$nom);

echo "($numm, ";
echo "'$nom', ";
echo "'$prenom', ";
echo "'$adresse', ";
echo "'$ville', ";
echo "'$ae', ";
echo "'$cotisation')";





if ($compteur==$nb_membres-1)
{echo ";";}
ELSE
{echo ",<br>";}

}//fin boucle for
?>


<br><br>
<div style="text-align:center">
-- <a href="gestion.php?mdp=<?=$mdp?>">SOMMAIRE GESTION</a>
</div>

</div><!--textejustifie-->
</body>
</html>
