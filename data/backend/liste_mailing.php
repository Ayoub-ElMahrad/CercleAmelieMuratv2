<html><head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<br>
<div style="margin-left:150px;">


<?php

include("include_connexion.php");
include("include_mdp.php");

$annee=date("Y");

$query="SELECT COUNT(*) FROM membres WHERE ae!='';";
$res=$bdd->query($query);
$nb=$res->fetchColumn();


?>
LISTE DES ADRESSES ÉLECTRONIQUES DES CONTACTS <?echo $annee;?>
<br><br>

<?

$query="SELECT * FROM membres WHERE ae!='' ORDER BY ae;";
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

echo  $ae,",";

}
}
ELSE
{
echo "Aucune adresse";
}

?>

<br><br>
<a href="gestion.php?mdp=<?=$mdp?>">RETOUR GESTION</a>
<br><br>
</div>
</body>
</html>
