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
$numa=$_GET[numa];
$op=$_GET[op];

if ($mdp=="passe")
{
?><br><a href="article-gestion.php?numa=<?=$numa?>">GESTION DES ARTICLES</a><?
} //fin if mdf==

if ($mdp !="passe")
{
?>
<form method="GET" action="article-mdp2.php">
<p class="textejustifie">Mot de passe MEMBRE<br><br>
<input type="password" name="mdpsaisi" size="16" maxlenght="16">
<br><br>
<input type="hidden" name="numa" value="<?echo $numa?>">
<input type="hidden" name="op" value="<?echo $op?>">


<input type="submit" value="envoyer">
</p>
</form>
<?
}
?>
</td></tr></table>
</body>
</html>
