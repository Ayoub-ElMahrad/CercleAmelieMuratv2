<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<META NAME="Description" CONTENT="">
<META NAME="Keywords" CONTENT="">
<META NAME="Author" CONTENT="">
<meta name="robots" content="none">
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



$resultatae=mysql_query("SELECT ae FROM membres;");

for ($compteur=0 ; $compteur<mysql_numrows($resultatae) ; $compteur++)
{
$ae=mysql_result($resultatae,$compteur,'ae');
if ($ae!="")
{
echo $ae, "<br>";
} // if ($ae!="")
}

mysql_close();

?>
<br><br>
<a href="gestion.php?mdp=<?echo $mdp?>">SOMMAIRE GESTION</a></p>


</td></tr></table>
</body>
</html>

