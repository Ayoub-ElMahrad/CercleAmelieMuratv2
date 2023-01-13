<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<META NAME="Description" CONTENT="">
<META NAME="Keywords" CONTENT="">
<META NAME="Author" CONTENT="">
<link rel="stylesheet" type="text/css" media="all"
href="stylemurat.css">
<style>
body
{
background:#FFFFFF;
}
</style>
</head>

<body>
<table width="500" align="center"><tr><td align="center">

<p class="grandtitre">MOT DE PASSE MEMBRE</p>
<br>

<?
$numm=$_GET[numm];
//echo "<br>numm est: ", $numm, "<br>";

if ($mdp=="passe")
{
?><br><a href="membres-gestion.php?numm=<?=$numm?>">GESTION DES TEXTES PERSONNELS</a><?
} //fin if mdf==

if ($mdp !="passe")
{
?>
<form method="GET" action="textem-mdp2.php">
<p class="textejustifie">Mot de passe membre<br><br>
<input type="password" name="mdpsaisi" size="16" maxlenght="16">
<br><br>
<input type="hidden" name="numm" value="<?echo $numm?>">

<input type="submit" value="envoyer">
</p>
</form>
<?
}
?>
</td></tr></table>
</body>
</html>
