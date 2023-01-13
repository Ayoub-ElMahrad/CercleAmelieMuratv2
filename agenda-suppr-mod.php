<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<p class="grandtitre">AGENDA</p>
<br><br>
<?
include("include_connexion.php");

include("include_mdp.php");

//echo "mdp: ", $mdp;


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

<HR size=4 align=center color="#9900CC">

<?
$numagenda=$ligne['numagenda'];
$date_en=$ligne['date_en'];
$date_fr=$ligne['date_fr'];
$titre=$ligne['titre'];
$evenement=$ligne['evenement'];

$titre=str_replace("|||","'",$titre);
$evenement=str_replace("|||","'",$evenement);



?><p class="textejustifie"><b><i><?echo $date_fr;?></i></b></p><?;
?><p class="textejustifie"><b><?echo $titre;?></b></p><?;
?><p class="textejustifie"><?echo $evenement;?></p>

<br><a href="agenda-modifie1.php?numagenda=<?=$numagenda?>&amp;mdp=<?=$mdp?>">Modifier</a>
&nbsp;&nbsp;&nbsp;
<a href="agenda-suppr.php?numagenda=<?=$numagenda?>&amp;mdp=<?=$mdp?>">Supprimer</a>
<?
} // while
?>
<HR size=4 align=center color="#9900CC">
<br>
<br>

<a href="gestion.php?mdp=<?=$mdp?>">GESTION</a>


</div>
</div>
</body>
</html>
