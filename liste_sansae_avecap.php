<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<br>
<div style="margin-left:150px;">


<?php

include("include_connexion.php");
include("include_mdp.php");

$annee=date("Y");

$query="SELECT COUNT(*) FROM membres WHERE ae='';";
$res=$bdd->query($query);
$nb=$res->fetchColumn();


?>
CONTACTS SANS ADRESSE ÉLECTRONIQUE AVEC ADRESSE POSTALE <?echo $annee;

$query="SELECT * FROM membres WHERE ae='' ORDER BY nom,prenom;";
$res=$bdd->query($query);

//echo "<br>mysql_numrows est égal à: ", mysql_numrows($resultat), "<br>";

?>
<br><br>


<?php
if ($nb>0)
{
while ($ligne=$res->fetch())
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

}//if mysql_num...


ELSE
{
echo "Tous les membres ont payé";
}

?>

<br><br>
<a href="gestion.php?mdp=<?=$mdp?>">RETOUR GESTION</a>
<br><br>
</div>
</body>
</html>
