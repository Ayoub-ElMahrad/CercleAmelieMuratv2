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

<?
$mdp=$_GET[mdp];
$numa=$_GET[numa];

//echo "mdp: ", $mdp;

?>
<br>
<p class="grandtitre">GESTION DES ARTICLES</p>
<br><br>
<a href="article.php?mdp=<?=$mdp?>&amp;numa=<?=$numa?>">Voir l'article</a>
<br><br>
<a href="article-ajout0.php?mdp=<?=$mdp?>">Ajouter un article</a>
<br><br>
<a href="article-modifie1.php?mdp=<?=$mdp?>&amp;numa=<?=$numa?>">Modifier l'article</a>


<br><br><br>
<a href="sommaire.htm">SOMMAIRE</a>
<br>
</td></tr></table>
</body>
</html>
