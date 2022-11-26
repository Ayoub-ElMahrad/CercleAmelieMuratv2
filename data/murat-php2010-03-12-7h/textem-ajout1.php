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
<p class="grandtitre">AJOUTER UN TEXTE</p>
<br>



<?
include("connexion.php");

$mdp=$_GET[mdp];
$numm=$_GET[numm];

$resultat=mysql_query("SELECT * FROM textem WHERE numm='$numm';");

$nbmax=mysql_numrows($resultat);

if ($nbmax<10)
{
echo "Vous avez publié ", $nbmax," textes sur 10<br>";
}


if ($nbmax>9)
{
?><p class=textejustifie>Désolé, vous avez atteint le nombre maximum de 10 textes autorisés.</p>
<br><br><a href="textem-gestion.php?mdp=<?=$mdp?>&amp;numm=<?=$numm?>">GESTION DES TEXTES</a><?
}

else
{
?>
<form method="POST" action="textem-ajout2.php?mdp=<?=$mdp?>&amp;numm=<?=$numm?>">

<p class="textejustifie">TITRE:<br>
<input type="text" name="titre" size="50" maxlenght="30">
<br><br>


TEXTE (maximum 3000 caractères, espaces compris)<br>
Attention! Vous devez indiquer tous les retours à la ligne par le signe $ (touche près de la touche entrée), par exemple à la fin de chaque vers pour un poème.
<br>
<textarea onkeyup="this.value = this.value.slice(0, 3000)" onchange="this.value = this.value.slice(0, 3000)" name="texte" COLS="80" ROWS="90">
</TEXTAREA>
<br><br>

POSITION DU TEXTE (noter c pour centré, g pour gauche, j pour justifié)<br>
c ou g s'utilisent généralement pour la poésie, j pour un article
<br>
<input type="text" name="textepos" size="1" maxlenght="1">
<br><br>
<input type="submit" value="envoyer">
</p>
</form>
<?
}
?>





</td></tr></table>
</body>
</html>
