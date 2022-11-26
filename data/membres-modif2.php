<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<div style="text-align:center;">
<?php

$numm=$_POST['numm'];

include("include_connexion.php");
include("include_mdp.php");

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$adresse=$_POST['adresse'];
$ville=$_POST['ville'];
$ae=$_POST['ae'];
$cotisation=$_POST['cotisation'];

$nom=str_replace("'","|||",$nom);
$prenom=str_replace("'","|||",$prenom);
$adresse=str_replace("'","|||",$adresse);
$ville=str_replace("'","|||",$ville);


echo "numéro: ", $numm, "<br>";
echo "nom: ", $nom, "<br>";
echo  "prenom: ",$prenom, "<br>";
echo  "adresse: ",$adresse, "<br>";
echo  "ville: ",$ville, "<br>";
echo  "ae: ",$ae, "<br>";
echo  "cotisation: ",$cotisation, "<br>";

$query="UPDATE membres SET nom='$nom', prenom='$prenom', adresse='$adresse', ville='$ville',
ae='$ae', cotisation='$cotisation' WHERE numm='$numm';";
$bdd->query($query);

?>

<br><br>
Le nouveau contact a bien été enregistré<br><br>
Il est conseillé d'aller vérifier le résultat dans la liste des membres<br> par le lien suivant et de modifier si nécessaire:<br><br>

<a href="liste_totale.php?mdp=<?echo $mdp;?>">LISTE DES CONTACTS</a>


</div>
</body>
</html>
