<!DOCTYPE html>
<!-- saved from url=(0065)file:///C:/Users/Ayoub/Desktop/templatemo_550_diagoona/index.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Diagoona HTML CSS Template</title>
    <link href="./Diagoona HTML CSS Template_files/css" rel="stylesheet"> <!-- https://fonts.google.com/ -->
    <link href="./Diagoona HTML CSS Template_files/bootstrap.min.css" rel="stylesheet"> <!-- https://getbootstrap.com/ -->
    <link href="./Diagoona HTML CSS Template_files/all.min.css" rel="stylesheet"> <!-- https://fontawesome.com/ -->
    <link href="./css/templatemo-diagoona.css" rel="stylesheet">

</head>

<body>
    <div class="tm-container">        
        <div>
            <!-- NAVBAR -->
            <div class="tm-row pt-4">
                <div class="tm-col-left">
                    <a class="navLogo" href="index.html">
                        <div class="tm-site-header media">
                            <img src="./img/logomurat-40.png" class="mainLogo">
                            <div class="media-body">
                                <h1 class="tm-sitename text-uppercase">Cercle</h1>
                                <p class="tm-slogon">Amélie Murat</p>
                            </div>        
                        </div>
                    </a>
                </div>
                <div class="tm-col-right">
                    <nav class="navbar navbar-expand-lg" id="tm-main-nav">
                        <button class="navbar-toggler toggler-example mr-0 ml-auto" type="button" data-toggle="collapse" data-target="#navbar-nav" aria-controls="navbar-nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span><i class="fas fa-bars"></i></span>
                        </button>
                        <div class="collapse navbar-collapse tm-nav" id="navbar-nav">
                            <ul class="navbar-nav text-uppercase">
                                <li class="nav-item active">
                                    <a class="nav-link tm-nav-link" href="index.html#">Accueil<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="sommaire.html">Sommaire</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="mailto:demange.claire@gmail.com">Contact</a>
                                </li>               
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="agenda.php">Agenda</a>
                                </li>
                                            
                                
                            </ul>                            
                        </div>                        
                    </nav>
                </div>
            </div>
            <!--END OF NAVBAR-->
            <!--MAIN PART-->
            <div class="tm-row">
                <div class="tm-col-left"></div>
                <main class="tm-col-right">
                <?php
include("include_connexion.php");

if (isset($_GET['mdp'])) {
    $mdp = $_GET['mdp'];
} else {
    $mdp = "";
}

//SUPPRESSION DES DATES OBSOLÈTES
$dateactuelle = date('Y-m-d');
$query = "DELETE FROM agenda WHERE date_en<'$dateactuelle';";
$bdd->query($query);
//-------------------------------

$query = "SELECT COUNT(*) FROM agenda ORDER BY date_en ASC;";
$res = $bdd->query($query);
$nb = $res->fetchColumn();

if ($nb == 0) {
    echo "<br>Aucun événement<br><br>";
}

$query = "SELECT * FROM agenda ORDER BY date_en;";
$res = $bdd->query($query);
while ($ligne = $res->fetch()) {
    ?>
    <HR size=4 align=center color="#6699CC">
    <?php
    $date_fr = $ligne['date_fr'];
    $titre = $ligne['titre'];
    $evenement = $ligne['evenement'];

    $titre = str_replace("|||", "'", $titre);
    $evenement = str_replace("|||", "'", $evenement);
    ?>
    <p class='textejustifie'><b><i><?php echo $date_fr; ?></i></b></p>
    <p class='textejustifie'><b><?php echo $titre; ?></b></p>
    <p class='textejustifie'><?php echo $evenement; ?></p>
    <?php
}
?>
<HR size=4 align=center color="#6699CC">
<br>

<?php
if ($mdp == "@murat") {
    ?>
    <a href="gestion.php?mdp=<?php echo $mdp ?>">GESTION</a><br><br>
    <?php
} else {
    ?>
    <div id="gestion"><a href="mdp1.php">GESTION</a></div><br>
    <?php
}
?>
<!--lien retour sommaire-->                        
                        <a href="file:///C:/Users/Ayoub/Desktop/templatemo_550_diagoona/about.html" class="btn btn-primary">Continue...</a>
                    </section>
                </main>
            </div>
        </div>        
        <!--END OF MAIN PART-->
        <!--FOOTER-->
        <div class="tm-row">
            <div class="tm-col-left text-center">            
                <ul class="tm-bg-controls-wrapper">
                    <li class="tm-bg-control" data-id="0"></li>
                    <li class="tm-bg-control active" data-id="1"></li>
                    <li class="tm-bg-control" data-id="2"></li>
                </ul>            
            </div>        
            <div class="tm-col-right tm-col-footer">
                <footer class="tm-site-footer text-right">

                </footer>
            </div>  
        </div>
        <!--END OF FOOTER-->

        <!-- Diagonal background design -->
        <div class="tm-bg" style="height: 880px;">
            <div class="tm-bg-left" style="border-left: 0px; border-top: 880px solid transparent;"></div>
            <div class="tm-bg-right"></div>
        </div>
    </div>

    <script src="./Diagoona HTML CSS Template_files/jquery-3.4.1.min.js.téléchargement"></script>
    <script src="./Diagoona HTML CSS Template_files/bootstrap.min.js.téléchargement"></script>
    <script src="./Diagoona HTML CSS Template_files/jquery.backstretch.min.js.téléchargement"></script>
    <script src="./Diagoona HTML CSS Template_files/templatemo-script.js.téléchargement"></script>

<div class="backstretch" style="left: 0px; top: 0px; overflow: hidden; margin: 0px; padding: 0px; height: 880px; width: 1386px; z-index: -999999; position: fixed;"><div class="backstretch-item" style="position: absolute; margin: 0px; padding: 0px; border: none; width: 100%; height: 100%; z-index: -999999;"><img alt="" src="file:///C:/Users/Ayoub/Desktop/templatemo_550_diagoona/img/diagoona-bg-2.jpg" style="position: absolute; margin: 0px; padding: 0px; border: none; width: 1564.44px; height: 880px; max-width: none; inset: 0px auto auto -89.2222px;"></div></div></body></html></script>
    <script src="js/templatemo-script.js"></script>
</body>
</html></script>
    <script src="js/templatemo-script.js"></script>
</body>
</html>