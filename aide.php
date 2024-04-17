<?php 
    include_once("DBconnexion.php");
    $aide=true;
    $pdo = new connect();

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once("head.php");?>
</head>
<body>
        <?php include_once("navbarHome.php"); ?>
    <main>
    <!-- <h2 data-aos="zoom-in-up" class="mt-5 mb-5 text-center">Aide</h2> -->
            <div data-aos="zoom-in-down" class="container hero">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <img class="img-aide"  src="assets\images\support-helpdesk.jpg" alt="support" width="100%" height="auto">
                    </div>
                    <div class="col-lg-5 mx-auto">
                            <h3>Obtenir de l'aide</h3>
                            <p>Vous avez remarque un probleme lors de votre navigation ou de vos action? vous avez besoin d'aide sur une tache ou sur un besoin en particulier? N'hesitez pas a nous contacter via le bouton plus bas ou d'aller directement sur l'onglets aide et ecrivez vous directement.</p>
                            <a href="mailto:herveae@gmail.com" class="btn btn-primary">Ecrire directement</a>
                    </div>
               </div>
           </div>


           
    </main>


    <?php include_once("preloader.php");?>
    
    <?php include_once("footer.php");?>
</body>
</html>