<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Agenda Cercle Amélie murat</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<link rel="stylesheet" type="text/css" href="../stylemurat.css">
<style>
body
{
background:#FFFFFF;
}
</style>

</head>

<body>

<?
$mdp=$_GET[mdp];

//echo "mot de passe: ", $mdp;


?>


<div id="conteneur">
<div align="center">


<!--logo titre page-->

<br>
<br>
<table cellpadding=3px><tr>
<td></td>
<td><p class="titrenormal"><b>TÉLÉCHARGEMENT DU BULLETIN VOIX D'AMÉLIE</b></p></td>
</tr></table>
<p class="textejustifie">
<br>
<form method="POST" action="telechargement-voix2.php" enctype="multipart/form-data">

Fichier : <input type="file" name="avatar">
<input type="HIDDEN" name="mdp" value="<?echo $mdp?>">

<input type="submit" name="envoyer" value="Envoyer le fichier">
</form>

<br><br>

<div align="center">
<a href="../voix-ajout2.php?mpd=<?=$mdp?>">SUITE</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>



<br>
</td></tr></table>
</body>
</html>



