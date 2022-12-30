<!DOCTYPE html>
<!-- saved from url=(0065)file:///C:/Users/Ayoub/Desktop/templatemo_550_diagoona/index.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cercle Amélie Murat | Poèmes des membres</title>
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
                                    <a class="nav-link tm-nav-link" href="agenda.html">Agenda</a>
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
                    <section class="tm-content">
                        <h2 class="mb-5 tm-content-title">	
                            Forum Public</h2>
                            <p class="mb-5">Pour raison d'espace restreint sur le serveur ne sont conservés que les 30 plus récents messages.

                         <hr class="mb-5">
                        <div style="word-wrap: break-word; text-align: center ">
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
                          
                           
                        </div>          
                        <a href="sommaire.html" class="btn btn-primary">Sommaire </a>
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