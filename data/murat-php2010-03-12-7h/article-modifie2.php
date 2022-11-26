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
<p class="grandtitre">MODIFIER D'UN ARTICLE SUITE</p>
<br>
<?
$mdp=$_GET[mdp];
$numa=$_POST[numa];

//echo "numa est: ", $numa;


include("connexion.php");

$titre=$_POST[titre];
$datea=$_POST[datea];
$texte=$_POST[texte];


//echo "<br>mdp: ",$mdp,"<br>";

//echo "<br>numm est égal à: ",$numm,"<br>";

//echo "<br>titre est égal à: ",$titre,"<br>";
//echo "<br>datea est égal à: ",$datea,"<br>";
//echo "<br>textepos est égal à: ",$texte,"<br>";

//pour vérifier le nombre de caractères au cas où javascript soit bloqué

$nbcaract = strlen($texte);

//echo "<br>nombre total caractères (espace accents compris): ", $nbcaract, "<br>";

if ($nbcaract>3500)
{echo "Il faut que votre texte ne dépasse pas 3000 caractères";}

else
{

mysql_query("UPDATE article SET titre='$titre',datea='$datea',texte='$texte' WHERE numa='$numa';") or die ("pas de modification");

?>
<p class="texte">Votre modification a bien été insérée</p>
<?
}

mysql_close();
?>

<br><br>
<a href="mail1.php">PRÉVENIR LES MEMBRES PAR COURRIEL</a></p>

<br><br>
<a href="article-gestion.php?mdp=<?=$mdp?>&amp;numa=<?=$numa?>">GESTION DE L'ARTICLE</a></p>





</td></tr></table>
</body>
</html>
