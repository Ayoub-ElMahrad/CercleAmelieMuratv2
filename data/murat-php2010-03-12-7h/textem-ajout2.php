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
<p class="grandtitre">AJOUT D'UN TEXTE</p>
<br>
<?
$mdp=$_GET[mdp];
$numm=$_GET[numm];
include("connexion.php");

$titre=$_POST[titre];
$texte=$_POST[texte];
$textepos=$_POST[textepos];

//echo "<br>texte: ", $texte, "<br>";



//pour vérifier le nombre de caractères au cas où javascript soit bloqué

$nbcaract = strlen($texte);

echo "<br>nombre total caractères (espace accents compris): ", $nbcaract, "<br>";

if ($nbcaract>5000)
{echo "Il faut que votre texte ne dépasse pas 3000 caractères";}

else
{


mysql_query("INSERT INTO textem VALUES ('','$numm','$titre','$texte','$textepos');") or die ("pas d'insertion");

?>
<p class="texte">Votre ajout a bien été inséré</p>
<?
}
mysql_close();
?>



<br><br>
<a href="textem-gestion.php?mdp=<?=$mdp?>&amp;numm=<?=$numm?>">GESTION DES TEXTES</a></p>





</td></tr></table>
</body>
</html>
