<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Cercle Amélie murat</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<link rel="stylesheet" type="text/css" href="stylemurat.css">
</head>

<body>
<?
include("connexion.php");

$mdp=$_GET[mdp];
$numm=$_GET[numm];

//echo "<br>numm est: ", $numm, "<br>";

$resultat=mysql_query("SELECT nom,prenom FROM membres WHERE numm='$numm';");
$nom=mysql_result($resultat,0,nom);
$prenom=mysql_result($resultat,0,prenom);

?>
<div id="conteneur">
<div align="center">


<!--logo titre page-->

<br>
<br>
<table cellpadding=3px><tr>
<td><img src="logomurat-40.jpg" alt="photo"></td>
<td><p class="titrenormal"><b><?echo $nom," ",$prenom;?> </b></p></td>
</tr></table>
<br>
<?
$numm=$_GET[numm];
//echo "<br>numm est: ", $numm, "<br>";

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

?>
<br><br>
<?


}//fin boucle


if ($mdp=="passe")
{
?><a href="textem-gestion.php?mdp=<?=$mdp?>&amp;numm=<?=$numm?>">GESTION DES TEXTES</a><br><br><?
}
if ($mdp!="passe")
{
?><div id="gestion"><a href="textem-mdp1.php?mdp=<?=$mdp?>&amp;numm=<?=$numm?>"><span style="color:#FFFFFF">GESTION DES TEXTES</span></a></div><br><?
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
