<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
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
<p class="grandtitre">ENVOI DU MESSAGE D'INFORMATION</p>
<br>

<?php

include("connexion.php");




$objet ="forum prive amelie murat";
$message ="http://www.cercle-amelie-murat.org/forum-prive.php";




//echo "<br>", "objet du message envoyé: ", $objet,"<br>";
//echo "<br>", "corps du message envoyé:", $message,"<br>";
echo "<br> destinataires:<br>";
$resultatae=mysql_query("SELECT ae FROM membres;");

//for ($compteur=0 ; $compteur<mysql_numrows($resultatae) ; $compteur++)
//{
//$ae=mysql_result($resultatae,$compteur,ae);
//echo $ae, "<br>";

$ae="claude99.fernandez@gmail.com";

mail($ae, $objet, $message);


?>
<br>
Le message d'information a été envoyé aux membres.

<br><br>

<a href="sommaire.htm>">SOMMAIRE</a></p>

</td></tr></table>
</body>
</html>

