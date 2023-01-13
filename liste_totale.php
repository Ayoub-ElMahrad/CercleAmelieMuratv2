<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<div style="margin-left:150px;">

<?php

include("include_connexion.php");
include("include_mdp.php");


$query="SELECT COUNT(*) FROM membres;";
$res=$bdd->query($query);
$nb=$res->fetchColumn();


?>
<br><br>
<p>CONTACTS DU CERCLE: <?echo $nb;?></p><br>

<a href="membres-ajout1.php?mdp=<?echo $mdp?>">AJOUTER UN CONTACT</a><br>
<br><br>
<?php

$query="SELECT * FROM membres ORDER BY nom,prenom;";
$res=$bdd->query($query);

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

?> <a href="membres-suppr2.php?numm=<?=$numm?>&mdp=<?=$mdp?>">Supprimer</a>&nbsp;
<a href="membres-modif1.php?numm=<?=$numm?>&mdp=<?=$mdp?>">Modifier</a><br><br>
-----------------------------------------<br>
<br>
<?
} // while


?>

<a href="gestion.php?mdp=<?=$mdp?>">RETOUR GESTION</a>
<br><br><br>
</div>
</body>
</html>
