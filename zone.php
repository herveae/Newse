<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newse</title>

    <!-- bootstrap files-->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">

    <!-- css files -->
    <link rel="stylesheet" href="assets/styles/style.css">
</head>
<body>
      <?php
        include_once("navbarHome.php");
      ?>

      <main class="" id="main">
        <section class="hero container">
            <div class="row">
                <div class="col-lg-4 mx-auto text-center">
                    <h1 class="title-hero">
                        Etudiant
                    </h1>
                    <p class="text-hero">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit Lorem ipsum dolor sit. Lorem, ipsum dolor..
                    </p>
                    <a href="connexion.php" class="btn btn-dark w-100">Se connecter</a>
                </div>

                <div class="col-lg-4 mx-auto text-center">
                    <h1 class="title-hero">
                        Administration
                    </h1>
                    <p class="text-hero">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga tempora similique magnam doloremque.
                    </p>
                    <a href="connexionAdmin.php" class="btn btn-dark w-100">Gerer</a>
                </div>
            </div>
        </section>
      </main>



      
    <!-- bootstrap js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>