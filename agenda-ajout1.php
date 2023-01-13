<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<p class="grandtitre">AJOUTER UN ÉVÉNEMENT</p>
<br>
<?
include("include_mdp.php");
?>

<FORM method="post" action="agenda-ajout2.php?mdp=<?=$mdp?>">
<p class="textejustifie">
<select name="date_en_fr">
<option selected>Date de l'évènement</option>
<?

//2 ans: 365 * 2 = 730
$nb_jour=0;
$timestamp_jour=time();


while ($nb_jour<=730)
{
$timestamp_jour=$timestamp_jour+86400;

$date_en=date('Y-m-d',$timestamp_jour);


$date_fr=date('D d M Y',$timestamp_jour);

$ang=array("Mon","Tue","Wed","Thu","Fri","Sat","Sun",
"Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
$fra=array("lundi","mardi","mercredi","jeudi","vendredi","samedi","dimanche",
"janvier","février","mars","avril","mai","juin","juillet","aoüt","septembre",
"octobre","novembre","décembre");

$date_fr=str_replace($ang,$fra,$date_fr);

$date_en_fr=$date_en."X".$date_fr;
?>
<option value="<?echo $date_en_fr;?>">
<?echo $date_fr;?>
</option>
<?

if (date('D',$timestamp_jour)=='Sun')
{
echo "<option>&nbsp;</option>";
}

$nb_jour++;
}
?>

</select>
<br><br>

<p class="textejustifie">Titre de l'événement (maximum 60 caractères environ)<br><br>
<input type="text" name="titre" size="70" maxlength="70">
<br><br>

<p class="textejustifie">Description de l'événement (maximum 500 caractères environ)
<br><br>

<textarea onkeyup="this.value = this.value.slice(0, 500)" onchange="this.value = this.value.slice(0, 500)" NAME="evenement" COLS="80" ROWS="8">
</TEXTAREA>
<br>

<br><br>
<input type="hidden" name="mdp" value="<?echo $mdp?>">

<input type="submit" value="envoyer">
</p>
</FORM>







</td></tr></table>
</body>
</html>
