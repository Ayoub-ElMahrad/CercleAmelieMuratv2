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
<p class="grandtitre">AJOUT D'UN ÉVÉNEMENT</p>
<br>
<?

include("include_connexion.php");
include("include_mdp.php");

$date_en_fr=$_POST['date_en_fr'];
$titre=$_POST['titre'];
$evenement=$_POST['evenement'];

$titre=str_replace("'","|||",$titre);
$evenement=str_replace("'","|||",$evenement);


//décomposition $date_en_fr

$tab_date_en_fr=explode("X",$date_en_fr);
$date_en=$tab_date_en_fr[0];
$date_fr=$tab_date_en_fr[1];


echo "<br>date en est: ",$date_en,"<br>";
echo "<br>date fr est: ",$date_fr,"<br>";
echo "<br>titre est: ",$titre,"<br>";
echo "<br>evenement est: ",$evenement;




//pour vérifier le nombre de caractères au cas où javascript soit bloqué

$nbcaract = strlen($evenement);

//echo "<br>nombre de caractères: ", $nbcaract, "<br>";


if ($nbcaract>800)
{echo "Il faut que votre texte Description de l'événement ne dépasse pas 500 caractères";}

else
{
$query="INSERT INTO agenda VALUES ('','$date_en','$date_fr','$titre','$evenement');";
$bdd->query($query);
?>
<p class="texte">Votre ajout a bien été inséré</p>
<?
}




?>

<br><br>
<a href="mail1.php?mdp=<?=$mdp?>">PRÉVENIR LES MEMBRES PAR COURRIEL</a></p>

<br><br>
<a href="gestion.php?mdp=<?=$mdp?>">SOMMAIRE GESTION</a></p>





</td></tr></table>
</body>
</html>
