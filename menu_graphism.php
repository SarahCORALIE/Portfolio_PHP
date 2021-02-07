<?php require_once "inc/head.inc.php"; ?>  
<div class="container-fluid">
    <header class="row justify-content-start pt-3">
        <div class="col-1 d-flex flex-column  justify-content-start " id="conteneur-img">
            <img id=logo-menu src="img/menuB4_mini.png" alt="dessin d'une bouche souriant avec ttitre rubrique en guise de dents" >
            <div class="toggle-menu d-flex flex-column ">
                <a href="cv.php"><img src="img/menu3B_mini.png" alt=""></a>
                <a href="menu_web_dev.php"><img src="img/menuB2_mini.png" alt=""></a>
                <a href="contact.php"><img src="img/menu6B_mini.png" alt=""></a>
                <a href="menu.php"><i class="fas fa-angle-double-left"></i></a>

            </div><!-- fin toggle-menu -->
        </div>
                
        <div id="titre" class="col-8 px-0 d-flex">
            <h2 id="prenom" class="py-2 px-4">SARAH</h2>
            <h2 id="nom" class="py-2 px-4">CORALIE</h2>
                        
        </div>      
    </header>
   
        <main>          
            <div class="conteneur_menu">
                <div id="grand-carre-noir"></div>

                    <h2 id="rubrique"><a href="menu.php"><i class="fas fa-angle-double-left"></i></a>/GRAPHISME </h2>
                <nav>
                    <div class="ligne"><!-- ligne 1 -->                        
                        <a href="#"> 
                            <img class="menuA" src="img/graphism monochrome1.png" alt="dessin lévre de femme">
                        </a>                            
                        <a href="#"> 
                            <img class="menuA" src="img/graphism monochrome2.png" alt="dessin lévre de femme">
                        </a>  
                        <a href="#"> 
                            <img class="menuA" src="img/graphism monochrome3.png" alt="dessin lévre de femme">
                        </a>  
                    </div><!-- fin ligne 1 -->
                    <div class="ligne"><!-- ligne 2 -->
                        <a href="#"> 
                            <img class="menuA" src="img/graphism monochrome2.png" alt="dessin lévre de femme">
                        </a>                              
                        <a href="#"> 
                            <img class="menuA" src="img/graphism monochrome3.png" alt="dessin lévre de femme">
                        </a>
                        <a href="#"> 
                            <img class="menuA" src="img/graphism monochrome1.png" alt="dessin lévre de femme">
                        </a>
                    </div><!-- fin ligne 2 -->
                    <div id="petit-carre-noir"></div>
                </nav>           
            </div>
        </main>
      
<?php require_once "inc/footer.inc.php"; ?>
