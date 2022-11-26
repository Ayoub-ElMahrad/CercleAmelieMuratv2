<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Agenda Cercle Amélie murat</title>
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
<td><img src="logomurat-40.png" alt="photo"></td>
<td><p class="titrenormal"><b>AGENDA</b></p></td>
</tr></table>
<br>



<?
include("include_connexion.php");

if (isset($_GET['mdp']))
{
$mdp=$_GET['mdp'];
}
ELSE
{
$mdp="";
}

//SUPPRESSION DES DATES OBSOLÈTES
$dateactuelle=date('Y-m-d');
$query="DELETE FROM agenda WHERE date_en<'$dateactuelle';";
$bdd->query($query);
//-------------------------------

$query="SELECT COUNT(*) FROM agenda ORDER BY date_en ASC;";
$res=$bdd->query($query);
$nb=$res->fetchColumn();
//echo "<br>nb est: ",$nb;
//FIN SUPPRESSION DES DATES OBSOLÈTES


if ($nb==0)
{
echo "<br>Aucun événement<br><br>";
}



$query="SELECT * FROM agenda ORDER BY date_en;";
$res=$bdd->query($query);
while ($ligne=$res->fetch())
{

?>
<HR size=4 align=center color="#6699CC">
<?

$date_fr=$ligne['date_fr'];
$titre=$ligne['titre'];
$evenement=$ligne['evenement'];

$titre=str_replace("|||","'",$titre);
$evenement=str_replace("|||","'",$evenement);


?><p class="textejustifie"><b><i><?echo $date_fr;?></i></b></p><?;
?><p class="textejustifie"><b><?echo $titre;?></b></p><?;
?><p class="textejustifie"><?echo $evenement;?></p><?;

} // while ($ligne=$res->fetch())
?>
<HR size=4 align=center color="#6699CC">
<br>




<?
if ($mdp=="@murat")
{
?><a href="gestion.php?mdp=<?=$mdp?>">GESTION</a><br><br><?
}
else
{
?><div id="gestion"><a href="mdp1.php">GESTION</a></div><br><?
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
