</body>
</html><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
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
<p class="grandtitre">SUPPRESSION D'UN TEXTE</p>
<br>



<?
include("connexion.php");

$mdp=$_GET[mdp];
$numm=$_GET[numm];
$numt=$_GET[numt];



//echo "mdp:", $mdp, "<br>";
//echo "numm:", $numm, "<br>";
//echo "numt:", $numt, "<br>";




mysql_query("DELETE FROM textem WHERE numm='$numm' AND numt='$numt';") or die ("pas de suppression");

?>
<p class="textejustifie">Texte supprimé</p>
<br>
<a href="textem-gestion.php?mdp=<?=$mdp?>&amp;numm=<?=$numm?>">GESTION DES TEXTES</a><br>

</td></tr></table>
</body>
</html>
