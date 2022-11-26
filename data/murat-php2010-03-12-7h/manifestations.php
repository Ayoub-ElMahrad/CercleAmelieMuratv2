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
<td><p class="titrenormal"><b>MANIFESTATIONS</b></p></td>
</tr></table>



<!--texte de la page-->
<br><br>
<p class="textejustifie">
<?
include("connexion.php");

$mdp=$_GET[mdp];

//LISTAGE DES MANIFESTATIONS

$resultat=mysql_query("SELECT * FROM article WHERE texte NOT LIKE '%voix%' ORDER BY datea;");

for ($compteur=0 ; $compteur<mysql_numrows($resultat) ; $compteur++)
{
$numa=mysql_result($resultat,$compteur,numa);
$datea=mysql_result($resultat,$compteur,datea);
$titre=mysql_result($resultat,$compteur,titre);



?>
<a href="article.php?numa=<?=$numa?>"><?echo $datea, " ", $titre, " ";?></a>
<br>
<?
}//fin boucle select article

mysql_close();
?>
</p><br>

<!--lien vers créer article-->
<?
if ($mdp=="passe")
{
?><a href="ajout0.php?mdp=<?=$mdp?>">CRÉER UN ARTICLE</a><br><br><?
}
if ($mdp!="passe")
{
?><div id="gestion"><a href="article-mdp1.php?op=creer"><span style="color:#FFFFFF">CRÉER UN ARTICLE</span></a></div><br><?
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

