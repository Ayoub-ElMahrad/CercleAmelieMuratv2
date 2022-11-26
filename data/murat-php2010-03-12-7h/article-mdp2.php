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

$mdpsaisi=$_GET[mdpsaisi];
$mdpsaisi=strip_tags($mdpsaisi);

$op=$_GET[op];
$numa=$_GET[numa];


//echo "<br>mdpsaisi: ",$mdpsaisi,"<br>";
//echo "<br>op est: ",$op,"<br>";

include("connexion.php");

$resultat=mysql_query("SELECT * FROM membres;");

for ($compteur=0;$compteur<mysql_numrows($resultat);$compteur++)
{
$mdp=mysql_result($resultat,$compteur,mdp);

//echo "<br>mdpbase: ",$mdp,"<br>";


if ($mdpsaisi==$mdp)
{
$mdp="passe";
break;
}

}//fin boucle for

//echo "<br>mdp est: ",$mdp,"<br>";

if ($mdp=="passe" AND $op=="creer")
{
?><br><a href="article-ajout0.php?mdp=<?=$mdp?>">CREER UN ARTICLE</a><?
}

if ($mdp=="passe" AND $op=="modifier")
{
?><br><a href="article-modifie1.php?mdp=<?=$mdp?>&amp;numa=<?=$numa?>">MODIFIER L'ARTICLE</a><?
}


if ($mdp!="passe")
{
?>
<br><p class="texte">Mot de passe erroné</p>
<br>
<a href="article-mdp1.php?numa=<?=$numa?>amp;&op=<?=$op?>">Saisir à nouveau le mot de passe</a>
<?
}




mysql_close();
?>

</td></tr></table>
</body>
</html>
