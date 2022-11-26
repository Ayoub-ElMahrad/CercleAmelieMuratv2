<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Agenda Cercle Amélie murat</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<link rel="stylesheet" type="text/css" href="stylemurat.css">
<style>
body
{
background:#FFFFFF;
}
</style>

</head>

<body>

<?
$mdp=$_GET[mdp];
?>


<div id="conteneur">
<div align="center">


<!--logo titre page-->

<br>
<br>
<table cellpadding=3px><tr>
<td></td>
<td><p class="titrenormal"><b>CRÉER UN ARTICLE</b></p></td>
</tr></table>
<br>
<p class="textejustifie">

Plusieurs possibilités pour un article:<br><br>

-texte uniquement ((3000 mots espace compris au maximum)<br>
-texte et photographies (5 maximum pour ne pas surcharger le serveur)<br>
-photographies uniquement (5 maximum)<br><br>


Contraintes pour les photographies:<br><br>

-format: jpg, png, gif<br>
-poids maximum: 100 kilooctets<br>
-taille maximum: 500 pixel pour la plus grande dimension<br>

Traitement possible par un redimentionneur en ligne:<br><br>

<a href="http://www.easypict.org">http://www.easypict.org</a><br><br>

<a href="http://www.lookimage.net">http://www.lookimage.net</a><br><br>

<a href="http://www.moteur2recherche.fr/redimensionner-photos-en-ligne">http://www.moteur2recherche.fr/redimensionner-photos-en-ligne</a><br><br>



-apellation: date de la manifestation suivi d'un numéro d'ordre de 1 à 5:<br><br>
Ex pour une manifestation qui a lieu le 26/06/2009:<br><br>

2009-06-26-1.png<br>
2009-06-26-2.png<br>
2009-06-26-3.jpg<br>
2009-06-26-4.jpg<br>
2009-06-26-5.gif<br><br>

-Sous Linux, droits des fichiers: 755 minimum<br><br>

Quand vos photographies sont prêtes dans un répertoire de votre ordinateur. cliquez sur <span style="font-style:italic">suite</span>. Si vous ne désirez pas intégrer de photographies, cliquez directement sur <span style="font-style:italic">suite</span>.</p><br>

<div align="center">
<a href="images/telechargement1.php?mdp=<?=$mdp?>">SUITE</a>
</div>

<br>
<!--lien retour sommaire-->


<a href="sommaire.htm">SOMMAIRE</a>


<br><br>

</div>
</div>
</body>
</html>
