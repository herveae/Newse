<?php include_once("DBconnexion.php"); ?>

<?php 

        $pdo = new connect();
        $count=0;


    if(!empty($_POST)){
        $query="update annonces set libelle=:libelle, nom_annonceur=:nom, origine=:origine, date=:date, message=:message where id_annonces=:id";
        $pdostmt=$pdo->prepare($query);
        $pdostmt->execute(["libelle"=>$_POST["inputLibelle"],"nom"=>$_POST["inputName"], "origine"=>$_POST["inputOrigine"],"date"=>$_POST["inputDate"],"message"=>$_POST["inputMessage"],"id"=>$_POST["myid"]]);
        $pdostmt->closeCursor();
        header("location:gestionAnnonces.php");
    }

    if(!empty($_GET["id"])) {
        $query="select * from annonces where id_annonces=:id";
        $pdostmt=$pdo->prepare($query);
        $pdostmt->execute(["id"=>$_GET['id']]);
        while($row=$pdostmt->fetch(PDO::FETCH_ASSOC)):
        
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once("head.php");?>
</head>
<body>
        <?php include_once("navbarAdmin.php"); ?>

      <main  data-aos="zoom-in-up" class="" id="main">
        <section class="mt-5 container">
        <h1 class="text-center" data-aos="zoom-in-down">Modifier une annonce</h1>

            <form  data-aos="zoom-in-down" class="row g-3 mt-5" method="POST" enctype="multipart/form-data">
                        <div class="row">
                        <input type="hidden" name="myid" value="<?php echo $row["id_annonces"];?>">
                        <div class="form-floating col-md-6 mb-4">
                            <input name="inputLibelle" type="text" class="form-control" id="floatingInput" placeholder="libelle" value="<?php echo $row["libelle"];?>" required>
                            <label for="floatingInput">Libelle</label>
                        </div>
                        <div class="form-floating col-md-6  mb-4">
                            <input name="inputName" type="text" class="form-control" id="floatingInput" placeholder="your name" value="<?php echo $row["nom_annonceur"];?>" required>
                            <label for="floatingInput">Nom de l'annonceur</label>
                          </div>
                          <div class="form-floating col-md-6  mb-4">
                            <input name="inputOrigine" type="text" class="form-control" id="floatingInput" placeholder="origine" value="<?php echo $row["origine"];?>" required>
                            <label for="floatingInput">Origine de l'annonce</label>
                          </div>
                          <div class="form-floating col-md-6  mb-4">
                            <input name="inputDate" type="date" class="form-control" id="floatingInput" placeholder="Date" value="<?php echo $row["date"];?>" required>
                            <label for="floatingInput">Date</label>
                          </div>
                          <div class="form-floating mb-4">
                            <textarea name="inputMessage" class="form-control" name="" id="floatingInput" placeholder="message" cols="30" rows="10" value="<?php echo $row["message"];?>" required></textarea>
                            <label for="floatingInput">Message</label>
                          </div>
                          <div class="form-floating col-md-5 mb-4">
                            <input name="image" type="file" class="form-control" id="floatingInput" placeholder="image" >
                            <label for="floatingInput">Image de l'annonce</label>
                          </div>
                          
                        </div>
            
                    <div class="row ">
                        <div class="col-lg-12 text-center mt-4">
                            <button name="envoi" type="submit" class="btn btn-primary w-50">Publier</button>
                        </div>
                    </div>
            </form>
        </section>
      </main>
      <?php
  endWhile;
  $pdostmt->closeCursor();
  }
  ?>

    
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
    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Confirmation d'acces</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-floating mb-4">
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
 -->


    <?php include_once("footer.php");?>
</body>
</html>