<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Cercle Amélie Murat</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<link rel="stylesheet" type="text/css" href="stylemurat.css">
</head>
<body>
<div id="conteneur">
<div align="center">

<!--logo titre page-->

<br>
<br>
<table cellpadding=3px><tr>
<td><img src="logomurat-40.jpg" alt="photo"></td>
<td><p class="titrenormal"><b>MEMBRES</b></p></td>
</tr></table>



<!--texte de la page-->
<br><br>
<p class="textejustifie">
<?
include("connexion.php");

$mdp=$_GET[mdp];

//LISTAGE DES MEMBRES QUI ONT PAYÉ COTISATION ET ENVISAGÉ PUBLICATION

$resultat=mysql_query("SELECT * FROM membres WHERE publication=1 AND cotisation>2007 ORDER BY nom,prenom;");

for ($compteur=0 ; $compteur<mysql_numrows($resultat) ; $compteur++)
{
$numm=mysql_result($resultat,$compteur,numm);
$nom=mysql_result($resultat,$compteur,nom);
$prenom=mysql_result($resultat,$compteur,prenom);

?>
<a href="textem.php?numm=<?=$numm?>"><?echo $nom, " ", $prenom, " ";?>
<?


//RECHERCHE SI LE MEMBRE A PUBLIÉ $nbtextes: nb textes publiés
$resultat_textem=mysql_query("SELECT titre,texte FROM textem WHERE numm='$numm';");
$nbtextes=mysql_numrows($resultat_textem);

//echo "<br>nbtextes est égal à: ", $nbtextes, "<br>";


if ($nbtextes==0)
{
?><span style="font-style:italic">(aucun texte)</span></a><?
}
?><br><?

}//fin boucle for mysql_query select membres



mysql_close();
?>
</p><br>

<!-->BOUTON GESTION DES MEMBRES-->
<?
if ($mdp=="passe")
{
?><a href="gestion.php?mdp=<?=$mdp?>">GESTION DES MEMBRES</a><br><br><?
}
else
{
?><div id="gestion"><a href="mdp1-admin.php?mdp=<?=$mdp?>"><span style="color:#FFFFFF">GESTION</span></a></div><br><?
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


</div>
</div>

</body>
</html>

