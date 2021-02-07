<?php require_once "inc/head.inc.php"; ?>  
<div class="container-fluid">
    <header class="row justify-content-start pt-3">
        <div class="col-1 d-flex flex-column  justify-content-start " id="conteneur-img">
            
            <img id=logo-menu src="img/menu3B_mini.png" alt="dessin d'une bouche souriant avec ttitre rubrique en guise de dents" >
            
            <div class="toggle-menu d-flex flex-column ">
                
                <a href="menu_graphism.php"><img src="img/menuB4_mini.png" alt=""></a>
                <a href="contact.php"><img src="img/menu6B_mini.png" alt=""></a>
                <a href="menu_web_dev.php"><img src="img/menuB2_mini.png" alt=""></a>
                <a href="menu.php"><i class="fas fa-angle-double-left"></i></a>

            </div><!-- fin toggle-menu -->
        </div>
                
        <div id="titre" class="col-8 px-0 d-flex">
            <h2 id="prenom" class="py-2 px-4">SARAH</h2>
            <h2 id="nom" class="py-2 px-4">CORALIE</h2>
                        
        </div>      
    </header>
    <main id="cv">
        <div id="grand-carre-noir"></div>
        
        <h2 id="rubrique"><a href="menu.php"><i class="fas fa-angle-double-left"></i></a>/CV </h2>
        
        <div class="row principale "><!-- row principale -->
            <div class="col-md-5 mt-4 ">
                <div class="row mt-5 conteneur-link justify-content-start">
                    <a href="https://github.com/SarahCORALIE"class="link col-1 pe-4" id="link1"><i class="fab fa-github-square "></i></a>
                    <a href="https://www.linkedin.com/in/sarah-coralie-4992b082/"class="link col-1 pe-4" id="link1"><i class="fab fa-linkedin "></i></a>
                    <a href="img/Sarah CORALIE CV 2021 DEVELOPPEUSE WEB.pdf"class="link col-1" id="link1"><i class="far fa-file-pdf"></i></a>
                </div><!-- fin conteneur-link -->
                <div class="row">
                    <p id="spitch">
                        Rendre simple la complexité.
                        Je suis au début
                        de ma route dans le développement
                        Web.
                        Adaptable, j’aime apprendre
                        constamment
                        et assouvir ma curiosité.
                    </p>
                </div>
            </div><!-- fin col-md-5 -->
            <div class="col-md-3 d-flex flex-column justify-content-start conteneur-milieu pt-3">
                <h5>Tecnologies</h5>
                <div class="row flex-wrap justify-content-center pt-2" id="conteneur-logo-langage">
                    <i class="fab fa-html5 col logo"></i>
                    <i class="fab fa-js-square col logo"></i>
                    <i class="fab fa-css3-alt col logo"></i>
                    <i class="fab fa-php col logo"></i>
                    <img id="logo-sql" src="img/SQL.png" alt="logo SQL">
                    <i class="fab fa-bootstrap col logo"></i>
                    <img id=logo-jquery src="img/JQuery_logo.png" alt="logo JQuery">
                    <i class="fab fa-symfony col logo"></i>
                    <i class="fab fa-wordpress-simple col logo"></i>
                    <i class="fab fa-angular col logo"></i>
                    <i class="fab fa-laravel col logo"></i>
                </div><!-- fin conteneur-logo-langage -->
                <h5>Logiciels</h5>
                <div class="row justify-content-between pt-2 px-2 pb-3" id="conteneur-logo-logiciel">
                    <img src="img/photoshop.png" alt="logo photoshop">
                    <img src="img/indesign.png" alt="logo indesign.">
                    <img src="img/ILLUSTRATOR.png" alt="logo ILLUSTRATOR">
                    <img src="img/adobe-xd.png" alt="logo adobe XD.png">
                    <img src="img/Microsoft_Office_logo.png" alt="logo Microsoft Office">

                </div><!-- fin conteneur-logo-logiciel -->
            </div><!-- fin col-md-3 -->
            <div class="col-md-4 d-flex align-items-center  ps-4 ">
                <p id="competence">
                     Appétence pour le graphisme et la
                    création <br>
                    - UX/ UI Design<br>
                    - Pratique du dessin, de la
                    peinture et du modelage depuis
                    20 ans<br>
                    - Réalisation de planches de
                    présentation de projet avec la
                    suite Adobe<br>
                    - Création de logos avec la suite
                    Adobe<br>
                    - Création/ Customisation d’objet
                </p>
            </div><!-- fin col-md-4 -->


        </div><!-- fin row principale -->

        <div id="petit-carre-noir"></div>

    </main>




<?php require_once "inc/footer.inc.php"; ?>
