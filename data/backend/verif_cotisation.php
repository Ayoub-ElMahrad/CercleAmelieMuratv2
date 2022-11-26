<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<br>
<div style="margin-left:150px;">
<br>VÉRIFICATION COTISATION<br>

<br>
Avertissement: Les cotisations ne sont mises à jour que mensuellement. Si vous avez payé votre cotisation il y a moins d'un mois, il et possible que celle-ci ne soit pas encore référencée.

<?
include("include_connexion.php");

//----------RÉCUPÉRATION VARIABLES ET TRAITEMENT--------

$nom_form=strip_tags($_GET['nom']);
$prenom_form=strip_tags($_GET['prenom']);

$accent = array("à", "â", "ä", "é", "è", "ê", "ë", "î", "ï", "ô", "ö", "ù", "û","ü", "À", "Â", "Ä", "É", "È", "Ê", "Ë", "Î", "Ï", "Ô", "Ö", "Ù", "Û", "Ü", "-");
$sans_accent = array("a", "a", "a", "e", "e", "e", "e", "i", "i", "o", "o", "u", "u","u","U", "A", "A", "A", "E", "E", "E", "E", "I", "I", "O", "O", "U", "U", "U", " ");

$nom_form = str_replace($accent, $sans_accent, $nom_form);
$prenom_form = str_replace($accent, $sans_accent, $prenom_form);

$nom_form = str_replace("'","///",$nom_form);
$prenom_form = str_replace("'","///", $prenom_form);

$nom_form=strtoupper($nom_form);
$prenom_form=strtolower($prenom_form);

echo "<br><br>",$nom_form," ",$prenom_form;

//--------FIN RÉCUPÉRATION VARIABLES ET TRAITEMENT-------


//--------RECHERCHE NOM DANS TABLE---------

$query="SELECT * FROM membres 
WHERE nom='$nom_form' AND prenom='$prenom_form';";
$res=$bdd->query($query);
$ligne=$res->fetch();

$cotisation=$ligne['cotisation'];
$nom=$ligne['nom'];
$prenom=$ligne['prenom'];



//echo "<br>nom, prenom dans table: ",$nom," ",$prenom;
//echo "<br>date cotisation: ",$cotisation;


//--------RECHERCHE NOM DANS TABLE---------


$date_Ymd=date("Y-m-d");

$date_res=date_create($date_Ymd);

$date_limite_res=date_modify($date_res,'-1 year');


$date_limite_Ymd=date_format($date_limite_res,"Y-m-d");


//echo "<br>date actuelle: ",$date_Ymd;
//echo "<br>date limite_Ymd cotisation: ",$date_limite_Ymd;

$date_limite_ts=strtotime($date_limite_Ymd);
$cotisation_ts=strtotime($cotisation);




if ($cotisation_ts>$date_limite_ts)

{
echo "<br><br><b>Vous êtes à jour de votre cotisation</b>";
}
ELSE
{
echo "<br><br><span style='color:red;'>La cotisation pour ce nom n'est pas ou plus valide</span>";
}





?>

<br><br><br>
<a href="sommaire.htm">RETOUR SOMMAIRE</a>
<br><br>
</div>
</body>
</html>
