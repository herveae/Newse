<?php include_once("DBconnexion.php"); ?>
<?php $dashboard=true;?>
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

      <main class="" id="main">
        <section class="mt-5 container">
            <div class="row">
            <div data-aos="zoom-in-down" class="container">
      

              <h1  data-aos="zoom-in-up" class="text-center mt-5 mb-3">Liste des Utilisateurs</h1>
              <?php
                  $query="select * from users";
                  $pdostml=$pdo->prepare($query);
                  $pdostml->execute();
                  // var_dump($pdostml->fetchAll(PDO::FETCH_ASSOC));
              ?>
              <table data-aos="zoom-in-up" id="dataTable" class="display">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>NOM</th>
                          <th>PRENOM</th>
                          <th>EMAIL</th>
                          <th>TEL</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php while($ligne=$pdostml->fetch(PDO::FETCH_ASSOC)):
                          $count++;    
                      ?>
                      <tr>
                          <td><?php echo $ligne["id_users"];?></td>
                          <td><?php echo $ligne["nom"];?></td>
                          <td><?php echo $ligne["prenom"];?></td>
                          <td><?php echo $ligne["email"];?></td>
                          <td><?php echo $ligne["tel"];?></td>
                          
                      </tr>
                  <?php endwhile;?>
              </tbody>
          </table>
        </div>


    
      <div data-aos="zoom-in-up" class="container">
          <h1 data-aos="zoom-in-up" class="text-center mt-5 mb-5">Liste des Annonces</h1>
          <?php
              $query="select * from annonces";
              $pdostml=$pdo->prepare($query);
              $pdostml->execute();
              // var_dump($pdostml->fetchAll(PDO::FETCH_ASSOC));
          ?>
          <table  id="dataTable2" class="display">
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>LIBELLE</th>
                      <th>NOM DE L'ANNONCEUR</th>
                      <th>ORIGINE</th>
                      <th>MESSAGE</th>
                      <th>DATE</th>
                      
                  </tr>
              </thead>
              <tbody>
                  <?php while($ligne=$pdostml->fetch(PDO::FETCH_ASSOC)):
                      $count++;    
                  ?>
                  <tr>
                      <td><?php echo $ligne["id_annonces"];?></td>
                      <td><?php echo $ligne["libelle"];?></td>
                      <td><?php echo $ligne["nom_annonceur"];?></td>
                      <td><?php echo $ligne["origine"];?></td>
                      <td><?php echo $ligne["message"];?></td>
                      <td><?php echo $ligne["date"];?></td>
                  </tr>
                
                  <?php endwhile;?>
              </tbody>
          </table>
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
    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
 -->

    <?php include_once("preloader.php");?>

    <?php include_once("footer.php");?>
</body>
</html>