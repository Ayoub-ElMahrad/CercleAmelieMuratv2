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
<br>
<p class="grandtitre">MODIFICATION D'UN ÉVÉNEMENT</p>
<br>
<?
include("include_mdp.php");
$numagenda=$_POST['numagenda'];



include("include_connexion.php");

$date_en_fr=$_POST['date_en_fr'];
$titre=$_POST['titre'];
$evenement=$_POST['evenement'];
$date_fr_selected=$_POST['date_fr_selected'];
$date_en_selected=$_POST['date_en_selected'];


//cas où la date n'a pas été modifiée, correspnd à selected
if ($date_en_fr==$date_fr_selected)
{
$date_en_fr=$date_en_selected."X".$date_fr_selected;
}


$titre=str_replace("'","|||",$titre);
$evenement=str_replace("'","|||",$evenement);

echo "<br>date_en_fr est: ","$date_en_fr";


//décomposition $date_en_fr

$tab_date_en_fr=explode("X",$date_en_fr);
$date_en=$tab_date_en_fr[0];
$date_fr=$tab_date_en_fr[1];


echo "<br>date en est: ",$date_en,"<br>";
echo "<br>date fr est: ",$date_fr,"<br>";
echo "<br>titre est: ",$titre,"<br>";
echo "<br>evenement est: ",$evenement;
//echo "<br>",$numagenda,"<br>";




//pour vérifier le nombre de caractères au cas où javascript soit bloqué

$nbcaract = strlen($evenement);

if ($nbcaract>500)
{echo "Il faut que votre texte Description de l'événement ne dépasse pas 500 caractères";}

else
{
$query="UPDATE agenda SET date_en='$date_en',date_fr='$date_fr',titre='$titre',evenement='$evenement' WHERE numagenda='$numagenda';";
$bdd->query($query);
?>
<p class="texte">Votre modification a bien été insérée</p>
<?
}


?>

<br><br>
<a href="mail1.php?mdp=<?=$mdp?>">PRÉVENIR LES MEMBRES PAR COURRIEL</a>

<br><br>
<a href="gestion.php?mdp=<?=$mdp?>">SOMMAIRE GESTION</a>





</td></tr></table>
</body>
</html>
