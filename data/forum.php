<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Cercle Amélie Murat</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<link rel="stylesheet" type="text/css" href="stylemurat.css">

<style  type="text/css">

.bloc_mdp
{
height:32px;
}

.bloc1_mdp
{
position:absolute;
width:25px;
height:30px;
background-color:grey;
}

.bloc2_mdp
{
position:absolute;
margin-left:27px;
margin-top:0px;
width:25px;
height:30px;
background-color:grey;
}

.bloc3_mdp
{
position:absolute;
margin-left:54px;
margin-top:0px;
width:25px;
height:30px;
background-color:grey;
}

.bloc4_mdp
{
position:absolute;
margin-left:81px;
margin-top:0px;
width:25px;
height:30px;
background-color:grey;
}

.bloc5_mdp
{
position:absolute;
margin-left:108px;
margin-top:0px;
width:25px;
height:30px;
background-color:grey;
}
</style>


</head>
<body>
<div id="conteneur">
<div align="center">

<!--logo titre page-->

<br>
<br>
<table cellpadding=3px><tr>
<td><img src="logomurat-40.png" alt="photo"></td>
<td><p class="titrenormal"><b>FORUM PUBLIC</b></p></td>
</tr></table><br>


<br><br>
<p class="textejustifie"><span style="font-style:italic">Pour raison d'espace restreint sur le serveur ne sont conservés que les 30 plus récents messages.</span></p>


<!--texte de la page-->
<br>

<?
if (isset($_POST['mdp']))
{
$mdp=$_POST['mdp'];
$mdp=strip_tags($mdp);
} // fin if (isset($_POST['mdp']))


if (isset($_POST['mdpsaisi']))
{
$mdpsaisi=$_POST['mdpsaisi'];
$mdpsaisi=strip_tags($mdpsaisi);
} // fin if (isset($_POST['mdpsaisi']))


if (isset($_POST['texte']))
{
$texte=$_POST['texte'];
$texte=strip_tags($texte);
} // fin if (isset($_POST['mdpsaisi']))
ELSE
{
$texte="";
}


include("include_connexion.php");

$date=date("Y-m-d");

//echo "date: ", $date, "<br>";



//--------suppression si plus de 20 messages-----

$query="SELECT COUNT(*) FROM forum;";
$res=$bdd->query($query);
$nb=$res->fetchColumn();
//echo "<br><br>nb est: ",$nb,"<br><br>";

if ($nb>20)
{
$query="SELECT * FROM forum ORDER BY num ASC LIMIT 1;";
$res=$bdd->query($query);
$ligne=$res->fetch();
$num=$ligne['num'];
//echo "<br><br>nb est: ",$num,"<br><br>";

$query="DELETE FROM forum WHERE num='$num';";
$bdd->query($query);
}
//--------fin suppression si plus de 20 messages-----






//----------------------- condition authentification ----------------------


if ($texte!="" AND ($mdp==$mdpsaisi))
{
$texte=str_replace("'","|||",$texte);
$query="INSERT INTO forum (num,date,texte) VALUES ('','$date','$texte');";
$bdd->query($query);


//ENVOI D'UN MESSAGE AUX MEMBRES
$objet ="forum public amelie murat";
$message ="http://www.cercle-amelie-murat.org/forum.php";

$date_annee_cours=date("Y");
$date_limite=$date_annee_cours-2;

$query="SELECT ae FROM membres WHERE cotisation>'$date_limite';";
$res=$bdd->query($query);
while ($ligne=$res->fetch())
{
$ae=$ligne['ae'];
//echo $ae, "<br>";
mail($ae, $objet, $message);
} //fin bouble for ($compteur=0...
//FIN ENVOI D'UN MESSAGE AUX MEMBRES

}//fin boucle if ($texte!="" AND ($mdp==$mdpsaisi))



$query="SELECT * FROM forum ORDER BY num ASC ;";
$resultat=$bdd->query($query);
while ($ligne=$resultat->fetch())
{
?>
<HR size=4 align="center" style="color:#6699CC">
<?
$date=$ligne['date'];
$texte=$ligne['texte'];
$texte=str_replace("|||","'",$texte);
?>
<p class="textejustifie"><?echo $date?></p>
<p class="textejustifie"><?echo $texte?></p>
<?

}



?>
<br><br>



<form method="POST" action="forum.php?">

<p class="textejustifie"><span style="font-style:italic">
Votre texte (maximum 600 caractères, espaces compris) suivi de votre signature:
</span><br>
<textarea onkeyup="this.value = this.value.slice(0, 700)" onchange="this.value = this.value.slice(0, 700)" name="texte" COLS="60" ROWS="14">
</TEXTAREA>
<br><br>


<div style="text-align:left">Authentification:<br><br></div>
<?
//authentification par chiffres-images

mt_srand((float) microtime()*1000000);
$nb1=mt_rand(0, 9);
$nb2=mt_rand(0, 9);
$nb3=mt_rand(0, 9);
$nb4=mt_rand(0, 9);
$nb5=mt_rand(0, 9);

//echo "nombres: ",$nb1,$nb2,$nb3,$nb4,$nb5;


?>

<div class="bloc_mdp">
<div class="bloc1_mdp">
<?
if ($nb1==1) {?><img src="nb1.png" alt="photo"><?} if ($nb1==2) {?><img src="nb2.png" alt="photo"><?} if ($nb1==3) {?><img src="nb3.png" alt="photo"><?} if ($nb1==4) {?><img src="nb4.png" alt="photo"><?} if ($nb1==5) {?><img src="nb5.png" alt="photo"><?} if ($nb1==6) {?><img src="nb6.png" alt="photo"><?}
if ($nb1==7) {?><img src="nb7.png" alt="photo"><?} if ($nb1==8) {?><img src="nb8.png" alt="photo"><?} if ($nb1==9) {?><img src="nb9.png" alt="photo"><?} if ($nb1==0) {?><img src="nb0.png" alt="photo"><?}
?>
</div>

<div class="bloc2_mdp">
<?
if ($nb2==1) {?><img src="nb1.png" alt="photo"><?} if ($nb2==2) {?><img src="nb2.png" alt="photo"><?} if ($nb2==3) {?><img src="nb3.png" alt="photo"><?} if ($nb2==4) {?><img src="nb4.png" alt="photo"><?} if ($nb2==5) {?><img src="nb5.png" alt="photo"><?} if ($nb2==6) {?><img src="nb6.png" alt="photo"><?}
if ($nb2==7) {?><img src="nb7.png" alt="photo"><?} if ($nb2==8) {?><img src="nb8.png" alt="photo"><?} if ($nb2==9) {?><img src="nb9.png" alt="photo"><?} if ($nb2==0) {?><img src="nb0.png" alt="photo"><?}
?>
</div>



<div class="bloc3_mdp">
<?
if ($nb3==1) {?><img src="nb1.png" alt="photo"><?} if ($nb3==2) {?><img src="nb2.png" alt="photo"><?} if ($nb3==3) {?><img src="nb3.png" alt="photo"><?} if ($nb3==4) {?><img src="nb4.png" alt="photo"><?} if ($nb3==5) {?><img src="nb5.png" alt="photo"><?} if ($nb3==6) {?><img src="nb6.png" alt="photo"><?}
if ($nb3==7) {?><img src="nb7.png" alt="photo"><?} if ($nb3==8) {?><img src="nb8.png" alt="photo"><?} if ($nb3==9) {?><img src="nb9.png" alt="photo"><?} if ($nb3==0) {?><img src="nb0.png" alt="photo"><?}
?>
</div>

<div class="bloc4_mdp">
<?
if ($nb4==1) {?><img src="nb1.png" alt="photo"><?} if ($nb4==2) {?><img src="nb2.png" alt="photo"><?} if ($nb4==3) {?><img src="nb3.png" alt="photo"><?} if ($nb4==4) {?><img src="nb4.png" alt="photo"><?} if ($nb4==5) {?><img src="nb5.png" alt="photo"><?} if ($nb4==6) {?><img src="nb6.png" alt="photo"><?}
if ($nb4==7) {?><img src="nb7.png" alt="photo"><?} if ($nb4==8) {?><img src="nb8.png" alt="photo"><?} if ($nb4==9) {?><img src="nb9.png" alt="photo"><?} if ($nb4==0) {?><img src="nb0.png" alt="photo"><?}
?>
</div>

<div class="bloc5_mdp">
<?
if ($nb5==1) {?><img src="nb1.png" alt="photo"><?} if ($nb5==2) {?><img src="nb2.png" alt="photo"><?} if ($nb5==3) {?><img src="nb3.png" alt="photo"><?} if ($nb5==4) {?><img src="nb4.png" alt="photo"><?} if ($nb5==5) {?><img src="nb5.png" alt="photo"><?} if ($nb5==6) {?><img src="nb6.png" alt="photo"><?}
if ($nb5==7) {?><img src="nb7.png" alt="photo"><?} if ($nb5==8) {?><img src="nb8.png" alt="photo"><?} if ($nb5==9) {?><img src="nb9.png" alt="photo"><?} if ($nb5==0) {?><img src="nb0.png" alt="photo"><?}
?>
</div>
</div><!--div bloc_mdp-->
<?
$mdp=$nb1.$nb2;
$mdp=$mdp.$nb3;
$mdp=$mdp.$nb4;
$mdp=$mdp.$nb5;

//echo "mdp est: ", $mdp;

//fin authentification par chiffres-images
?>
<div style="text-align:left">
<input type="hidden" name="mdp" value="<?echo $mdp?>">
<input type="text" name="mdpsaisi" size="15" maxlength="15">
</div>
<br><br>



<input type="submit" value="envoyer">


<!--<span style="color:red;">FORUM SUSPENDU POUR CAUSE DE MAINTENANCE</span>-->

</p>
</form>








<!--lien retour sommaire-->



<br><br>



<div class=raised> 
<B class=b1></B>  
<B class=b2></B>  
<B class=b3></B>  
<B class=b4></B>  
<div class=boxcontent>  
<a href="sommaire.htm"><div style="font-size:20px;">SOMMAIRE</div></a>
</div>  
<b class=b4b></b>  
<B class=b3b></B>  
<B class=b2b></B>  
<B class=b1b></B></div>  

<br><br>

</div>
</div>


</body>
</html>

