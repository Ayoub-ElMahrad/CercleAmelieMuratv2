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
<br>
<p class="grandtitre">AJOUTER UN ARTICLE</p>
<br>



<?
include("connexion.php");

$mdp=$_GET[mdp];


?>
<form method="POST" action="article-ajout2.php?mdp=<?=$mdp?>">

<p class="textejustifie">TITRE:<br>
<input type="text" name="titre" size="50" maxlenght="30">
<br><br>

<p class="textejustifie">Date de l'événement selon la notation: 2008-06-24<br>
<input type="text" name="datea" size="12" maxlenght="10">
<br><br>


TEXTE (maximum 3000 caractères, espaces compris)<br>
Attention! Vous devez indiquer les retours à la ligne correspondant à un paragraphe par le signe $ (touche près de la touche entrée).<br><br>
Pour insérer une photographie, vous devez encadrer le nom du fichier par les groupes de lettres aa et zz.<br><br>
Ex: aa2009-05-12-1.jpgzz<br>
<br>
<textarea onkeyup="this.value = this.value.slice(0, 3000)" onchange="this.value = this.value.slice(0, 3000)" name="texte" COLS="80" ROWS="90">
</TEXTAREA>
<br><br>
<input type="HIDDEN" name="mdp" value="<?echo $mdp?>">
<input type="HIDDEN" name="numm" value="<?echo $numa?>">


<input type="submit" value="envoyer">
</p>


</form>






</td></tr></table>
</body>
</html>
