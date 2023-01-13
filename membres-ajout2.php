<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<?php



include("include_connexion.php");
include("include_mdp.php");

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$adresse=$_POST['adresse'];
$ville=$_POST['ville'];
$ae=$_POST['ae'];
$cotisation=$_POST['cotisation'];

$nom=str_replace("'","|||",$nom);
$prenom=str_replace("'","|||",$prenom);
$adresse=str_replace("'","|||",$adresse);
$ville=str_replace("'","|||",$ville);

echo "<br>nom est: ",$nom;

//vérification si le contact n'existe pas déjà par ae puis insertion
//echo "<br>ae est: ",$ae;
$query="SELECT COUNT(*) FROM membres WHERE nom='$nom' AND ae='$prenom';";
$res=$bdd->query($query);
$nb=$res->fetchColumn();
//echo "<br>nb est: ",$nb;



if ($nb==0)
{
$query="INSERT INTO membres (numm,nom,prenom,adresse,ville,ae,cotisation) VALUES 
('','$nom','$prenom','$adresse','$ville','$ae','$cotisation');";
$bdd->query($query);
?>
<br><br>
<p align="center">Le nouveau membre a bien été enregistré<br><br>
Il est conseillé d'aller vérifier le résultat dans la liste des membres<br> par le lien suivant et de modifier si nécessaire:<br><br>
<?
} // if
ELSE
{
echo "<br><br>Il existe déjà un membre portant ce nom et ce prénom. Recherchez ce nom dans la liste des membres et mettre à jour sa cotisation";
}


?>
<br><br>
<div style="text-align:center">
<a href="liste_totale.php?mdp=<?echo $mdp;?>">LISTE DES MEMBRES</a>
<br><br>


<a href="membres-ajout1.php?mdp=<?=$mdp?>">Insérer un autre contact</a>

<br><br>
<a href="gestion.php?mdp=<?=$mdp?>">SOMMAIRE GESTION</a></p>

</div>
</body>
</html>
