<?php 
    $code="code";
    if(isset($_POST["envoi"]) && $_POST["code"] === $code){
      header("Location:publication.php");
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once("head.php");?>
</head>
<body>
     <?php include_once("navbarUser.php");?>

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
                <form action="" method="POST" >
                  <div class="form-floating mb-3">
                    <input name="code" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                    <label for="floatingPassword">Entrez le Code de Publication</label>
                  </div>
                  <button name="envoi" type="submit" class="btn btn-success w-100">Valider</button>
                </form>

            </div>
            <div class="modal-footer">
            
            
            </div>
        </div>
        </div>
    </div>



      
    <!-- bootstrap js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>