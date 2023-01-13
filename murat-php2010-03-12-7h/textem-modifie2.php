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
<p class="grandtitre">MODIFICATION D'UN TEXTE</p>
<br>
<?
$mdp=$_GET[mdp];
$numm=$_GET[numm];
$numt=$_GET[numt];



include("connexion.php");

$titre=$_GET[titre];
$texte=$_GET[texte];
$textepos=$_GET[textepos];


//echo "<br>mdp: ",$mdp,"<br>";

//echo "<br>numm est égal à: ",$numm,"<br>";
//echo "<br>numt est égal à: ",$numt,"<br>";

//echo "<br>titre est égal à: ",$titre,"<br>";
//echo "<br>texte est égal à: ",$texte,"<br>";
//echo "<br>textepos est égal à: ",$textepos,"<br>";

//pour vérifier le nombre de caractères au cas où javascript soit bloqué

$nbcaract = strlen($texte);

echo "<br>nombre total caractères (espace accents compris): ", $nbcaract, "<br>";

if ($nbcaract>3500)
{echo "Il faut que votre texte ne dépasse pas 3000 caractères";}

else
{

mysql_query("UPDATE textem SET titre='$titre',texte='$texte',textepos='$textepos' WHERE numm='$numm' AND numt='$numt';") or die ("pas de modification");

?>
<p class="texte">Votre modification a bien été insérée</p>
<?echo $titre?>

<?
}

mysql_close();
?>



<br><br>
<a href="textem-gestion.php?mdp=<?=$mdp?>&amp;numm=<?=$numm?>">GESTION DES TEXTES</a></p>





</td></tr></table>
</body>
</html>
