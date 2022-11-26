<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<link rel="stylesheet" type="text/css" href="stylemurat.css">
<style>
body
{
background:#FFFFFF;
}
</style>
</head>

<body>

<div id="conteneur">
<div align="center">
<br>
<p class="grandtitre">GESTION DES TEXTES MODIFIER SUPPRIMER</p>
<br><br>
<?
include("connexion.php");

$mdp=$_GET[mdp];
$numm=$_GET[numm];



$resultat=mysql_query("SELECT * FROM textem WHERE numm='$numm' ORDER BY numt ASC ;");

if (mysql_numrows($resultat)==0)
{
echo "<br>Aucun texte de ce membre à cette date<br><br>";
}

//TEXTES

for ($compteur=0;$compteur<mysql_numrows($resultat);$compteur ++)
{
?>
<HR size=8 align=center color="#dcbb73"><br>
<?

$numt=mysql_result($resultat,$compteur,numt);
$titre=mysql_result($resultat,$compteur,titre);
$texte=mysql_result($resultat,$compteur,texte);
$textepos=mysql_result($resultat,$compteur,textepos);


$texte=str_replace("$","<br>",$texte);


?>
<p class="textecentre"><?echo $titre?></p>
<?

if ($textepos=="c")
{?>
<div class="conteneurpoeme">
<p class="textecentre"><?echo $texte;?></p>
</div><!--conteneurpoeme-->
<?}

elseif ($textepos=="g")
{?>
<div class="conteneurpoeme">
<p class="textejustifie"><?echo $texte;?></p>
</div><!--conteneurpoeme-->
<?}


else
{?><p class="textejustifie"><?echo $texte;?></p><?}

//echo "<br>numt est égal à: ", $numt, "<br>";
?>



<br><a href="textem-modifie1.php?numt=<?=$numt?>&amp;mdp=<?=$mdp?>&amp;numm=<?=$numm?>">Modifier</a>
&nbsp;&nbsp;&nbsp;
<a href="textem-suppr.php?numt=<?=$numt?>&amp;mdp=<?=$mdp?>&amp;numm=<?=$numm?>">Supprimer</a>

<br><br>
<?


}//fin boucle


if ($mdp=="passe")
{
?><a href="textem-gestion.php?mdp=<?=$mdp?>&amp;numm=<?=$numm?>">GESTION DES TEXTES</a><br><br><?
}
if ($mdp!="passe")
{
?><a href="textem-mdp1.php?mdp=<?=$mdp?>&amp;numm=<?=$numm?>">GESTION DES TEXTES</a><br><?
}
?>



<!--lien retour sommaire-->



<div class=raised> 
<B class=b1></B>  
<B class=b2></B>  
<B class=b3></B>  
<B class=b4></B>  
<div class=boxcontent>  
<a href="sommaire.htm">SOMMAIRE</a>
</div>  
<b class=b4b></b>  
<B class=b3b></B>  
<B class=b2b></B>  
<B class=b1b></B></div>  

<br><br>


</div><!--align center-->
</div><!--conteneur-->
</body>
</html>
