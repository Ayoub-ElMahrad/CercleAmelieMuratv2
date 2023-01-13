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
<p class="grandtitre">MODIFIER UN ÉVÉNEMENT</p>
<br>
<?

include("include_connexion.php");
include("include_mdp.php");

$numagenda=$_GET['numagenda'];

//echo "numagenda est",$numagenda,"<br>";

$query="SELECT * FROM agenda WHERE numagenda='$numagenda';";

$res=$bdd->query($query);
$ligne=$res->fetch();
$date_en=$ligne['date_en'];
$date_fr=$ligne['date_fr'];
$titre=$ligne['titre'];
$evenement=$ligne['evenement'];

$titre=str_replace("|||","'",$titre);
$evenement=str_replace("|||","'",$evenement);

echo "date_en est: ",$date_en,"<br>";
echo "date_fr est: ",$date_fr,"<br>";

//nécessaire pour faire passer la date en selected (car value ne passe pas)
$date_fr_selected=$date_fr;
$date_en_selected=$date_en;


?>

<form method="POST" action="agenda-modifie2.php">

<p class="textejustifie">
<select name="date_en_fr">


<option selected><?echo $date_fr_selected?></option>
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
} // while ($nb_jour<=10)
?>
</select>

</p><br>
<p class="textejustifie">Titre de l'événement (maximum 80 caractères)<br>
<br>

<input type="text" name="titre" size="80" maxlenght="80" value="<?echo $titre?>">
<br><br>
<p class="textejustifie">Description de l'événement (maximum 500 caractères)
<br><br>

<textarea onkeyup="this.value = this.value.slice(0, 500)" onchange="this.value = this.value.slice(0, 500)" NAME="evenement" COLS="50" ROWS="8">
<?echo $evenement?>
</TEXTAREA>
<br>

<input type="HIDDEN" name="mdp" value="<?echo $mdp?>">
<input type="HIDDEN" name="numagenda" value="<?echo $numagenda?>">
<input type="HIDDEN" name="date_fr_selected" value="<?echo $date_fr_selected?>">
<input type="HIDDEN" name="date_en_selected" value="<?echo $date_en_selected?>">





<br><br>


<input type="submit" value="envoyer">
</p>
</form>







</td></tr></table>
</body>
</html>
