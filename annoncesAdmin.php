<?php include_once("DBconnexion.php"); ?>

<?php 

$pdo = new connect();
$count=0;


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
        <h1 class="text-center mb-5" data-aos="zoom-in-down">Annonces</h1>
        <?php
            $query="select * from annonces";
            $pdostml=$pdo->prepare($query);
            $pdostml->execute();
            // var_dump($pdostml->fetchAll(PDO::FETCH_ASSOC));


        ?>
        <div class="container">
            <?php while($ligne=$pdostml->fetch(PDO::FETCH_ASSOC)):
                        $count++; 
                    ?>
            <div class="row">
                <div class="col-lg-10 mx-auto mb-5">
                
                    <h3 class="">Libelle: <?php echo $ligne["libelle"];?></b></h3>
                    <h4>Origine: <?php echo $ligne["origine"];?></h4>
                    <p class="mb-2">MESSAGE: <b><?php echo $ligne["message"];?></b></p>
                    <h6 class="text-body-secondary">Par: <?php echo $ligne["nom_annonceur"];?></h6>
                    <i class="mb-5">le <?php echo $ligne["date"];?></i>            
                </div>
            </div>
            <?php endwhile;?>
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