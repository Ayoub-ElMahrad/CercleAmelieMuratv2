<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd"> 
<html><head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
</head>
<body>
<div style="margin-left:150px;">
<br><br>
<?

include("include_connexion.php");
include("include_mdp.php");

$numm=$_GET['numm'];

$query="SELECT * FROM membres WHERE numm='$numm';";
$res=$bdd->query($query);
$ligne=$res->fetch();

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

?>


MODIFIER L'INSCRIPTION D'UN CONTACT<br><br>

<form method="POST" action="membres-modif2.php">

<input type="HIDDEN" size="10" name="numm" value="<?echo $numm;?>">

<input type="hidden" name="mdp" value="<?echo $mdp;?>">

NOM (obligatoire):<br>
<input type="text" size="40" name="nom" value="<?echo $nom;?>"><br><br>
PRÉNOM (obligatoire):<br>
<input type="text" size="40" name="prenom" value="<?echo $prenom;?>"><br><br>
ADRESSE (facultatif):<br>
<input type="text" size="40" name="adresse" value="<?echo $adresse;?>"><br><br>
CODE POSTAL VILLE (facultatif):<br>
Ex: 63000 CLERMONT-FERRAND<br>
<input type="text" size="40" name="ville" value="<?echo $ville;?>"><br><br>
Adresse électronique (facultatif):<br>
<input type="text" size="40" name="ae" value="<?echo $ae;?>"><br><br>
COTISATION (obligatoire):<br>
Dernière année cotisée<br> Ex: 2009<br>
<input type="text" size="40" name="cotisation" value="<?echo $cotisation;?>"><br><br>


<input type="submit" value="OK">




</form>
</div>
</body></html>



