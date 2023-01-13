</body>
</html><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
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
<br>
<p class="grandtitre">SUPPRESSION D'UN ÉVÉNEMENT</p>
<br>



<?
include("include_connexion.php");

include("include_mdp.php");
$numagenda=$_GET['numagenda'];



//echo "mdp", $mdp;

$query="DELETE FROM agenda WHERE numagenda='$numagenda';";
$bdd->query($query);
?>
<p class="textejustifie">Événement supprimé</p>
<br>
<br><a href="gestion.php?mdp=<?=$mdp?>">GESTION</a>


</td></tr></table>
</body>
</html>
