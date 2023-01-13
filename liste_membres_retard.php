<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<br>
<div style="margin-left:150px;">


<?php

include("connexion.php");
include("include_mdp.php");

$annee=date("Y");

?>
MEMBRES QUI N'ONT PAS PAYÉ LEUR COTISATION POUR L'ANNÉE <?echo $annee;?>
<br><br>
<a href="mail-retard1.php?mdp=<?echo $mdp;?>">ENVOYER UNE LETTRE DE RAPPEL À CES MEMBRES</a>

<?
$resultat=mysql_query("SELECT * FROM membres WHERE cotisation='$annee'-1 ORDER BY nom,prenom;");

//echo "<br>mysql_numrows est égal à: ", mysql_numrows($resultat), "<br>";

?>
<br><br>


<?php
if (mysql_numrows($resultat)>0)
{
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
?>
<br>
-----------------------------------------
<br><br>
<?
}//boucle for
?>
<a href="mail-retard1.php?mdp=<?echo $mdp;?>">ENVOYER UNE LETTRE DE RAPPEL À CES MEMBRES</a>
<br>
<?
}//if mysql_num...


ELSE
{
echo "Tous les membres ont payé";
}

mysql_close();
?>

<br><br>
<a href="gestion.php?mdp=<?=$mdp?>">RETOUR GESTION</a>
<br><br>
</div>
</body>
</html>
