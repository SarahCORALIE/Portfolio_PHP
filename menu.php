<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portfolio Sarah CORALIE</title>
        <!--css perso -->
        <link rel="stylesheet" href="asset/css/portfolio_sarah_menu.css">

        <!--Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">       
        <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Text:wght@900&display=swap" rel="stylesheet">
        <!-- font awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
        
    </head>
    <body>
        <div class="conteneur-all">
            <h2 id="prenom">SARAH</h2>

            <div class="conteneur_menu">
                <div id="grand-carre-noir">
                    <p id="make">MAKE ME SMILE</p>
                </div>

                <nav>
                    <!-- <div id="imgZoom"></div> -->
                    <div class="ligne"><!-- ligne 1 -->
                         
                        <a href="menu_graphism.php"> 
                            <img id="vignette1" class="menuA" src="img/menu4_moyen.png" alt="dessin lévre de femme">
                        </a>    
                        
                        <a href="cv.php"> 
                            <img id="vignette2" class="menuA" src="img/menu3_moyen.png" alt="dessin lévre de femme">
                        </a>  
                    </div>

                    <div class="ligne"><!-- ligne 2 -->
                        <a href="menu_web_dev.php"> 
                            <img id="vignette3" class="menuA" src="img/menu2_moyen.png" alt="dessin lévre de femme">                         
                        </a>                                                                       
                        <a href="contact.php"> 
                            <img id="vignette4" class="menuA" src="img/menu6_moyen.png" alt="dessin lévre de femme">                          
                        </a>
                    </div>

                    <div id="petit-carre-noir">
                        <p id="look">LOOK INTO MY EYES</p>
                    </div>                                      
                </nav>           
            </div>

            <footer>
                <h2 id="nom"><a href="index.php"><i class="fas fa-angle-double-left"></i></a>  CORALIE</h2>
                <a href="play.php" id="avatar">
                    <img id="avatar_mini" src="img/avatar_mini.png" alt="Dessin du visage de Sarah CORALIE"> 
                    <p>LET'S PLAY !</p>   
                </a>
               
            </footer>

        </div>
        


        <!-- JQUERY SCRIPT -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <!-- mon js -->
         <script src="asset/js/portfolio_sarah_menu.js"></script>
    </body>