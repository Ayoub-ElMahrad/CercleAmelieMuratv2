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
$numa=$_GET[numa];

//echo "<br>numa est: ", $numa, "<br>";

$resultat=mysql_query("SELECT * FROM article WHERE numa='$numa';");

$titre=mysql_result($resultat,0,titre);
$datea=mysql_result($resultat,0,datea);
$texte=mysql_result($resultat,0,texte);

$texte=str_replace("$","<br>",$texte);
$texte=str_replace("aa","</p><div style='margin:auto'><img src='images/",$texte);
$texte=str_replace("zz","' alt='image' ></div><p class='textejustifie'>",$texte);





?>
<div id="conteneur">
<div align="center">


<!--logo titre page-->

<br>
<br>
<table cellpadding=3px><tr>
<td><img src="logomurat-40.jpg" alt="photo"></td>
<td><p class="titrenormal"><b><?echo $datea,"<br>",$titre;?> </b></p></td>
</tr></table>
<br>

<!--texte de et images de l'article-->


<p class="textejustifie"><?echo $texte;?></p>
<br>

<?
if ($mdp=="passe")
{
?><a href="article-modifie1.php?mdp=<?=$mdp?>&amp;numa=<?=$numa?>">MODIFIER L'ARTICLE</a><br><br><?
}
if ($mdp!="passe")
{
?><div id="gestion"><a href="article-mdp1.php?numa=<?=$numa?>&amp;op=modifier"><span style="color:#FFFFFF">MODIFIER L'ARTICLE</span></a></div><br><?
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
