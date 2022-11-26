<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<META NAME="Description" CONTENT="">
<META NAME="Keywords" CONTENT="">
<META NAME="Author" CONTENT="">
<link rel="stylesheet" type="text/css" media="all"
href="stylemurat.css">
<style>
body
{
background:#FFFFFF;
}
</style>
</head>

<body>
<table width="500" align="center"><tr><td align="center">
<p class="grandtitre">LETTRE DE RAPPEL ENVOI</p>
<br>

<?php
include("include_mdp.php");
include("connexion.php");

$annee=date("Y");


$objet = $_POST['objet'];

$objet=stripslashes($objet);
$objet=utf8_decode($objet);

$message = $_POST['message'];
$message=stripslashes($message);
$message=utf8_decode($message);




//echo "<br>", "objet du message envoyé: ", $objet,"<br>";
//echo "<br>", "corps du message envoyé:", $message,"<br>";
echo "<br> destinataires:<br>";
$resultatae=mysql_query("SELECT ae FROM membres WHERE cotisation='$annee'-1;");

for ($compteur=0 ; $compteur<mysql_numrows($resultatae) ; $compteur++)
{
$ae=mysql_result($resultatae,$compteur,'ae');
if ($ae!="")
{
echo $ae, "<br>";
mail($ae, $objet, $message);
} // if ($ae!="")
}

?>
<br><br>
<a href="gestion.php?mdp=<?echo $mdp?>">SOMMAIRE GESTION</a></p>

</td></tr></table>
</body>
</html>

