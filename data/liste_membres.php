<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<br>
<div style="margin-left:150px;">


<?php

include("include_connexion.php");
include("include_mdp.php");

$date_Ymd=date("Y-m-d");

$date_res=date_create($date_Ymd);

$date_limite_res=date_modify($date_res,'-1 year');


$date_limite_Ymd=date_format($date_limite_res,"Y-m-d");


echo "<br>MEMBRES À JOUR DE LEUR COTISATION POUR L'ANNÉE<br>";

echo "<br>date actuelle: ",$date_Ymd;
echo "<br>date limite cotisation: ",$date_limite_Ymd;

$query="SELECT * FROM membres";
$res=$bdd->query($query);

//echo "<br>mysql_numrows est égal à: ", mysql_numrows($resultat), "<br>";

?>
<br><br>


<?php

$nb_cotisant=0;
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

if ($cotisation>$date_limite_Ymd)
	{
	echo "numéro: ", $numm, "<br>";
	echo "nom: ", $nom, "<br>";
	echo  "prenom: ",$prenom, "<br>";
	echo  "adresse: ",$adresse, "<br>";
	echo  "ville: ",$ville, "<br>";
	echo  "ae: ",$ae, "<br>";
	echo  "cotisation: ",$cotisation, "<br><br>";
	$nb_cotisant++;
	}

}//boucle while

echo "<b>nombre de cotisants à jour: ",$nb_cotisant,"</b>";

?>

<br><br>
<a href="gestion.php?mdp=<?=$mdp?>">RETOUR GESTION</a>
<br><br>
</div>
</body>
</html>
