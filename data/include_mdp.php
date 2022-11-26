<?

$mdp_get="";
$mdp_post="";

if (isset($_GET['mdp']))
{
$mdp=$_GET['mdp'];
$mdp_get=$mdp;
$mdp_get=strip_tags($mdp);
}
ELSE
{
$mdp="";

}


if (isset($_POST['mdp']))
{
$mdp=$_POST['mdp'];
$mdp_post=$mdp;
$mdp_post=strip_tags($mdp);
}
ELSE
{
$mdp="";

}

if ($mdp_get!="") {$mdp=$mdp_get;}
if ($mdp_post!="") {$mdp=$mdp_post;}

//echo "mdp est:",$mdp;

$mdp=strip_tags($mdp);

if ($mdp!="@murat")
{
?>
<br><br><br>
Mot de passe incorrect<br><br><br>
exit;
<?
exit;
}
?>
