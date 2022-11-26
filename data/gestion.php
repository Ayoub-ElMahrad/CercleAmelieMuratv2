<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<META NAME="Description" CONTENT="">
<META NAME="Keywords" CONTENT="">
<META NAME="Author" CONTENT="">

<link rel="stylesheet" type="text/css" media="all"
href="stylemurat.css">
<style type="text/css">
body
{
background:#FFFFFF;
}
</style>
</head>
<body>

<table width="500" align="center"><tr><td align="center">

<?
include("include_mdp.php");

//echo "mdp: ", $mdp;

?>
<br>
<p class="grandtitre">GESTION ADMINISTRATION</p>
<br>


<p style="text-align:left;font-weight:bold;">GESTION DE L'AGENDA</p>


<a href="agenda.php?mdp=<?=$mdp?>">Voir l'agenda</a><br>
<br>
<a href="agenda-ajout1.php?mdp=<?=$mdp?>">Rajouter un événement dans l'agenda</a><br>
<br>
<a href="agenda-suppr-mod.php?mdp=<?=$mdp?>">Modifier, supprimer un événement dans l'agenda</a>
<br>




<br>
<p style="text-align:left;font-weight:bold;">GESTION DES CONTACTS ET ENVOI DE MESSAGES</p>

<p align="center">

<a href="liste_totale.php?mdp=<?=$mdp?>">Liste des contacts (membres ou non membres)<br> ajout, modification, supression</a><br><br>

<a href="mail_tous1.php?mdp=<?=$mdp?>">Envoyer un message à tous les contacts<br> pour avertir d'une manifestation</a><br><br>



<a href="liste_membres.php?mdp=<?=$mdp?>">Liste des membres à jour de cotisation</a><br><br>

<a href="mail1.php?mdp=<?=$mdp?>">Envoyer un message uniquement aux membres</a>
<br><br>

<!--<a href="liste_membres_retard.php?mdp=<?=$mdp?>">Non membres qui ont payé l'année précédente (pour rappel de retard de cotisation)</a><br><br>-->

<a href="liste_sansae_avecap.php?mdp=<?=$mdp?>">Contacts sans adresse électronique<br> et avec adresse postale</a><br><br>

<a href="liste_avecap.php?mdp=<?=$mdp?>">Contacts avec adresse postale (avec ou sans adresse électronique)</a><br><br>


<a href="liste_mailing.php?mdp=<?=$mdp?>">Liste des adresses électroniques des contacts</a>


<br><br><br>
<a href="sommaire.htm">SOMMAIRE DU SITE</a>

<br>
</td></tr></table>
</body>
</html>
