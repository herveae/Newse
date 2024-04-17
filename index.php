<?php $home=true;?>
<!DOCTYPE html>
<html lang="fr">
<head>
   <?php include_once("head.php");?>
</head>
<body>
      <?php
        include_once("navbarHome.php");
      ?>

      <main  class="" id="main">
        <section class="hero container">
            <div class="row">
                <div class="col-lg-6 mx-auto text-center">
                    <h1 class="title-hero">
                        Welcome to Newse for ADMIN
                    </h1>
                    <p class="text-hero">
                    Bienvenue dans Newse for admins, votre zone de gestion du barbillard numerique Newse. Ici vous pourrez tout simplement cliquer sur zone d'administration et commencer a travailler.
                    </p>
                    <a href="connexionAdmin.php" class="btn btn-primary text-light">Zone d'administration</a>
                </div>
            </div>
        </section>


        <section  id="about" class="hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 mx-auto mt-5">
                        <h2 class="title mb-3">
                            About
                        </h2>
                        <p>Newse est une application de gestion de barbillard numerique comme vous le savez deja. Newse for Admins est une branche de cette application qui servira de lieu de travail pour l'administrateur que vous etes. </p>
                        <p>Notre design a ete pense de la meilleure des manieres pour vous permettre de travailler dans les meilleures conditions tout en vous assurant une excellente experience utilisateur. <br>     Alors qu'attendez-vous? Accedez a votre zone d'administration</p>
                        
                    </div>
                    <div class="col-lg-7 mt-5">
                        <img src="assets\images\Cloud_Homescreen-apps.jpeg " alt="" width="100%">
                    </div>
                </div>
            </div>
        </section>

        <section  id="help" class="hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 mt-5">
                        <img src="assets\images\six-sigma-support-operations-screenshot-1.png" alt="" width="100%">
                    </div>
                    <div class="col-lg-5 mx-auto mt-5 mb-5">
                        <h2 class="title mb-3">
                           Avez-vous un probleme?
                        </h2>
                        <p>Vous avez remarque un probleme lors de votre navigation ou de vos action? vous avez besoin d'aide sur une tache ou sur un besoin en particulier? N'hesitez pas a nous contacter via le bouton plus bas ou d'aller directement sur l'onglets aide et ecrivez vous directement.</p>
                        <br>
                        <a href="aide.php" class="btn btn-primary">Connectez-nous directement</a>
                    </div>
                </div>
            </div>
        </section>
      </main>


    <?php include_once("preloader.php");?>
    
    <?php include_once("footer.php");?>
</body>
</html>