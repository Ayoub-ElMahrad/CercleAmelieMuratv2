<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<META NAME="Description" CONTENT="">
<META NAME="Keywords" CONTENT="">
<META NAME="Author" CONTENT="">

<link rel="stylesheet" type="text/css" media="all"
href="stylemurat.css">
<style>
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
<a href="agenda.php?mdp=<?=$mdp?>">Voir l'agenda</a>
<br>
<a href="agenda-ajout1.php?mdp=<?=$mdp?>">Rajouter un événement dans l'agenda</a>
<br>
<a href="agenda-suppr-mod.php?mdp=<?=$mdp?>">Modifier, supprimer un événement dans l'agenda</a>
<br>
<br>
<a href="voix.php?mdp=<?=$mdp?>">Voir la page Voix d'Amélie</a>
<br>
<a href="voix-ajout0.php?mdp=<?=$mdp?>">Rajouter un bulletin Voix d'Amélie</a><br>

<br>
<br>
<a href="mail1.php?mdp=<?=$mdp?>">Envoyer une lettre de diffusion aux membres</a>




<br>
</td></tr></table>
</body>
</html>
