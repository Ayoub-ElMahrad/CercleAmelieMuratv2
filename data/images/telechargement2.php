<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<META NAME="Description" CONTENT="">
<META NAME="Keywords" CONTENT="">
<META NAME="Author" CONTENT="">

<link rel="stylesheet" type="text/css" media="all"
href="../stylemurat.css">
<style>
body
{
background:#FFFFFF;
}
</style>
</head>
<body>

<table width="500" align="center"><tr><td align="center">

<?
$mdp=$_GET[mdp];
$mdp=$_POST[mdp];

//echo "mdp: ", $mdp;

?>
<br>
<p class="grandtitre">TÉLÉCHARGEMENT<br> D'UNE IMAGE SUITE</p>
<br><br>


<?php
//conditions de type et de taille de l'image

$fichier = $_FILES['avatar']['name'];
$fichier = basename($fichier);

$extension_file = strrchr($_FILES['avatar']['name'], '.');

if ($extension_file==".jpg" OR $extension_file==".gif" OR $extension_file==".png")
{
$validite_type=1;
}
ELSE
{$validite_type=0;}


$taille_maxi = 100000;
$taille = filesize($_FILES['avatar']['tmp_name']);

//echo "<br>taille: ", $taille, "<br><br>";



if($taille<$taille_maxi)
{
$validite_taille=1;
}
ELSE
{$validite_taille=0;}



if ($validite_type==1 AND $validite_taille==1)
{
move_uploaded_file($_FILES['avatar']['tmp_name'], $fichier);
}


if ($validite_type!=1)
{
echo "mauvaise extention";
}


if ($validite_taille!=1)
{
echo "fichier trop volumineux";
}
ELSE

?>
<br>
<a href="telechargement1.php?mdp=<?=$mdp?>">INTÉGRER UNE AUTRE PHOTOGRAPHIE</a>

<br><br>
<a href="../article-ajout1.php?mdp=<?=$mdp?>">NE PAS INTÉGRER D'AUTRE PHOTOGRAPHIE</a>

<br><br>


</td></tr></table>
</body>
</html>



