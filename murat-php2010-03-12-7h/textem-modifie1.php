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
<p class="grandtitre">MODIFIER UN TEXTE</p>
<br>
<?

include("connexion.php");


$mdp=$_GET[mdp];
$numm=$_GET[numm];
$numt=$_GET[numt];


echo "<br>numm est égal à: ", $numm, "<br>";
echo "<br>numt est égal à: ", $numt, "<br>";

$resultat=mysql_query("SELECT * FROM textem WHERE numm='$numm' AND numt='$numt';");

$titre=mysql_result($resultat,0,titre);
$texte=mysql_result($resultat,0,texte);
$textepos=mysql_result($resultat,0,textepos);


echo "<br>titre: ", $titre,"<br>";
echo "<br>texte: ", $texte,"<br>";
echo "<br>textpos: ", $textepos,"<br>";


?>

<form method="GET" action="textem-modifie2.php">

<p class="textejustifie">TITRE:<br>
<input type="text" name="titre" size="50" maxlenght="30" value="<?echo $titre?>">
<br><br>


TEXTE (maximum 3000 caractères, espaces compris)<br>
Attention! Vous devez indiquer tous les retours à la ligne par le signe $ (touche près de la touche entrée), par exemple à la fin de chaque vers pour un poème.
<br>
<textarea onkeyup="this.value = this.value.slice(0, 3000)" onchange="this.value = this.value.slice(0, 3000)" name="texte" COLS="80" ROWS="90"><?echo $texte?>
</TEXTAREA>
<br><br>

POSITION DU TEXTE (noter c pour centré, g pour gauche, j pour justifié)<br>
c ou g s'utilisent généralement pour la poésie, j pour un article
<br>
<input type="text" name="textepos" size="1" maxlenght="1" value="<?echo $textepos?>">
<br><br>

<input type="HIDDEN" name="mdp" value="<?echo $mdp?>">
<input type="HIDDEN" name="numm" value="<?echo $numm?>">
<input type="HIDDEN" name="numt" value="<?echo $numt?>">



<input type="submit" value="envoyer">
</p>
</form>


</td></tr></table>
</body>
</html>
