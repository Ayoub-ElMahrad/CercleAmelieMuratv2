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
<style>
body
{
background:#FFFFFF;
}
</style>
</head>

<body>
<table width="500" align="center"><tr><td align="center">
<br>
<p class="grandtitre">AJOUTER UN BULLETIN VOIX D'AMÉLIE</p>
<br>



<?
include("connexion.php");

$mdp=$_GET[mdp];


?>
<form method="POST" action="voix-ajout2.php?mdp=<?=$mdp?>">

<p class="textejustifie">Date de la parution selon la notation: 2008-06-24<br>
<input type="text" name="datea" size="12" maxlenght="10">
<br><br>


Nom exact du fichier pdf (sans oublier l'extension)<br>
Ex: 2009-05-12-voix.pdf<br>
<br>
<textarea onkeyup="this.value = this.value.slice(0, 3000)" onchange="this.value = this.value.slice(0, 3000)" name="texte" COLS="50" ROWS="1">
</TEXTAREA>
<br><br>
<input type="HIDDEN" name="mdp" value="<?echo $mdp?>">

<input type="submit" value="envoyer">
</p>


</form>






</td></tr></table>
</body>
</html>
