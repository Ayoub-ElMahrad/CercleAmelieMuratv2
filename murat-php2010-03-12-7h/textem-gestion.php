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

<?
$mdp=$_GET[mdp];
$numm=$_GET[numm];

//echo "mdp: ", $mdp;

?>
<br>
<p class="grandtitre">GESTION TEXTE MEMBRE</p>
<br><br>
<a href="textem.php?mdp=<?=$mdp?>&amp;numm=<?=$numm?>">Voir mes textes</a>
<br><br>
<a href="textem-ajout1.php?mdp=<?=$mdp?>&amp;numm=<?=$numm?>">Rajouter un texte</a>
<br><br>
<a href="textem-suppr-mod.php?mdp=<?=$mdp?>&amp;numm=<?=$numm?>">Modifier, supprimer un texte</a>


<br><br><br>
<a href="sommaire.htm">SOMMAIRE</a>


<br>






</td></tr></table>
</body>
</html>
