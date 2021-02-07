<?php require_once "inc/head.inc.php"; ?>
<div class="container-fluid">
    <header class="row justify-content-start pt-3">
        <div class="col-1 d-flex flex-column  justify-content-start " id="conteneur-img">
            <img id=logo-menu src="img/menu6B_mini.png" alt="dessin d'une bouche souriant avec ttitre rubrique en guise de dents" >
            <div class="toggle-menu d-flex flex-column ">
                <a href="cv.php"><img src="img/menu3B_mini.png" alt=""></a>
                <a href="menu_graphism.php"><img src="img/menuB4_mini.png" alt=""></a>
                <a href="menu_web_dev.php"><img src="img/menuB2_mini.png" alt=""></a>
                <a href="menu.php"><i class="fas fa-angle-double-left"></i></a>

            </div><!-- fin toggle-menu -->
        </div>
                
        <div id="titre" class="col-8 px-0 d-flex">
            <h2 id="prenom" class="py-2 px-4">SARAH</h2>
            <h2 id="nom" class="py-2 px-4">CORALIE</h2>
                        
        </div>      
    </header>
    <main id="contact">
        <div id="grand-carre-noir"></div>

        <h2 id="rubrique"><a href="menu.php"><i class="fas fa-angle-double-left"></i></a>/CONTACT </h2>

        
        <form action="" method="post" class="row justify-content-center mt-5"><!-- row externe -->
        <h5>Contactez moi / Contact me</h5>
  
                    <div class="col-md-6 d-flex flex-column px-5 justify-content-between">
                        <input type="text" name="nom" class="form-control" id="exampleInputEmail1"  placeholder="Votre Nom">
                    
                        <input type="text" name="prenom" class="form-control" id="exampleInputEmail1"  placeholder="Votre Prenom">

                        <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Votre Email">
                        
                        <input type="text" name="objet" class="form-control" id="exampleInputEmail1"  placeholder="L'objet de votre message">
                    </div>
                    <div class="col-md-6  d-flex justify-content-end">
                        <textarea name="message" class="form-control" cols="30" rows="10" placeholder="Votre message"></textarea>
                    </div>


        </form><!-- fin row externe -->
        <a href="https://github.com/SarahCORALIE"class="link" id="link1"><i class="fab fa-github-square "></i></a>

        <a href="https://www.linkedin.com/in/sarah-coralie-4992b082/"class="link" id="link2"><i class="fab fa-linkedin "></i></a>

        <div id="petit-carre-noir"></div>

    </main>


<?php require_once "inc/footer.inc.php"; ?>