<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<?php

include("include_connexion.php");
include("include_mdp.php");

$numm=$_GET['numm'];


$query="DELETE FROM membres WHERE numm='$numm';";
$bdd->query($query);
?>
<br><br><br>
<p align="center">Le contact a bien été supprimé</p>

<br><br>
<div style="text-align:center;">
<a href="gestion.php?mdp=<?echo $mdp;?>">RETOUR GESTION</a>
</div>


</body>
</html>
