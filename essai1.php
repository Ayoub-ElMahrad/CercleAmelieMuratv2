<html><head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<br>
<div style="margin-left:150px;">


<?php

include("include_connexion.php");



$resultat=$bdd->query("SELECT * FROM membres ORDER BY nom,prenom;");
while ($ligne=$resultat->fetch())
{
$numm=$ligne['numm'];
$nom=$ligne['nom'];
$prenom=$ligne['prenom'];
$adresse=$ligne['adresse'];
$ville=$ligne['ville'];
$ae=$ligne['ae'];
$cotisation=$ligne['cotisation'];

$nom=str_replace("|||","'",$nom);
$prenom=str_replace("|||","'",$prenom);
$adresse=str_replace("|||","'",$adresse);
$ville=str_replace("|||","'",$ville);


echo "numéro: ", $numm, "<br>";
echo "nom: ", $nom, "<br>";
echo  "prenom: ",$prenom, "<br>";
echo  "adresse: ",$adresse, "<br>";
echo  "ville: ",$ville, "<br>";
echo  "ae: ",$ae, "<br>";
echo  "cotisation: ",$cotisation, "<br>";
?>
<br>
-----------------------------------------
<br><br>
<?
}//boucle for



?>

<br><br>
<a href="gestion.php?mdp=<?=$mdp?>">RETOUR GESTION</a>
<br><br>
</div>
</body>
</html>
