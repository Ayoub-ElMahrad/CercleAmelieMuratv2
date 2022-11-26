<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<div style="margin-left:150px;">

<?php

include("connexion.php");
include("include_mdp.php");


$resultat=mysql_query("SELECT * FROM membres ORDER BY nom,prenom;");
?>
<br><br>
<p>MEMBRES DU CERCLE</p><br>

<?php

for ($compteur=0 ; $compteur<mysql_numrows($resultat) ; $compteur++)
{
$numm=mysql_result($resultat,$compteur,'numm');
$nom=mysql_result($resultat,$compteur,'nom');
$prenom=mysql_result($resultat,$compteur,'prenom');
$adresse=mysql_result($resultat,$compteur,'adresse');
$ville=mysql_result($resultat,$compteur,'ville');
$ae=mysql_result($resultat,$compteur,'ae');
$cotisation=mysql_result($resultat,$compteur,'cotisation');

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
-----------------------------------------
<br><br>
<?
}

mysql_close();
?>

<a href="gestion.php?mdp=<?=$mdp?>">RETOUR GESTION</a>
<br><br><br>
</div>
</body>
</html>
