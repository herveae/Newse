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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="index.php">Newse</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page"  href="#">Informations</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Faire une annonce</a>
              </li>
              

              
            <!-- <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->
          </div>
          
            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#deconnexion">Deconnexion</a>
      
        </div>
      </nav>

      <main class="" id="main">
        <section class="hero container">
            <div class="row">
                
                </div>
            </div>
        </section>
      </main>


    
    <!-- Modal -->
    <div class="modal fade" id="deconnexion" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel2">Deconnexion</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            Voulez-vous vraiment vous deconnecter ?
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
            <a href="index.php" type="button" class="btn btn-danger">Deconnexion</a>
            </div>
        </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Confirmation d'acces</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                    <label for="floatingPassword">Entrez le Code de Publication</label>
                </div>

            </div>
            <div class="modal-footer">
            
            <button type="button" class="btn btn-success w-100">Valider</button>
            </div>
        </div>
        </div>
    </div>



      
    <!-- bootstrap js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>