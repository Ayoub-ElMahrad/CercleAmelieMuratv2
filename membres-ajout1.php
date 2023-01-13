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
include("include_mdp.php");
?>

Entrez le nouveau contact:<br><br>

<form method="POST" action="membres-ajout2.php">
NOM tout en majuscule:<br>
(facultatif)<br>
<input type="text" size="40" name="nom"><br><br>
PRÉNOM en minuscule sauf 1ère lettre en majuscule:<br>
(facultatif)<br>
<input type="text" size="40" name="prenom"><br><br>
ADRESSE (facultatif):<br>
<input type="text" size="40" name="adresse"><br><br>
CODE POSTAL VILLE (facultatif):<br>
Ex: 63000 CLERMONT-FERRAND<br>
<input type="text" size="40" name="ville"><br><br>
Adresse électronique (facultatif):<br>
<input type="text" size="40" name="ae"><br><br>
COTISATION TYPE DE CONTACT:<br>
Noter dernière année cotisée Ex: 2009<br>
S'il s'agit d'un contact non membre, laisser 0<br>
<input type="text" size="40" name="cotisation" value=0><br><br>

<input type="hidden" name="mdp" value="<?echo $mdp;?>">



<input type="submit" value="OK">




</form>
</div>
</body></html>



