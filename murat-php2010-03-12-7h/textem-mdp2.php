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
<p class="grandtitre">VÉRIFICATION<br>DU MOT DE PASSE MEMBRE</p>
<br>
<?
$numm=$_GET[numm];
$mdpsaisi=$_GET[mdpsaisi];
$mdpsaisi=strip_tags($mdpsaisi);

//echo "<br>mdpsaisi: ",$mdpsaisi,"<br>";

include("connexion.php");

$resultat=mysql_query("SELECT * FROM membres;");

for ($compteur=0;$compteur<mysql_numrows($resultat);$compteur++)
{
$mdp=mysql_result($resultat,$compteur,mdp);

//echo "<br>mdpbase: ",$mdp,"<br>";


if ($mdpsaisi==$mdp)
{
$mdp="passe";
?><br><a href="textem-gestion.php?mdp=<?=$mdp?>&amp;numm=<?=$numm?>">GESTION DES TEXTES</a><?
break;
}//fin de if

}//fin boucle for

if ($mdp!="passe")
{
?>
<br><p class="texte">Mot de passe erroné</p>
<br>
<a href="textem-mdp1.php?numm=<?=$numm?>">Saisir à nouveau le mot de passe</a>
<?
}




mysql_close();
?>

</td></tr></table>
</body>
</html>
