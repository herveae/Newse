<?php include_once("DBconnexion.php"); ?>

<?php 

$pdo = new connect();
$count=0;
?>

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

     <!-- DataTable CSS -->
     <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
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
                <a class="nav-link active" aria-current="page"  href="#">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Annonce</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page"  href="publicationAdmin.php">Faire une annonce</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="gestionAnnonces.php" >Gerer Annonces</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="gestionUsers.php" >Gestion Utilisateurs</a>
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
        <section class="mt-5 container">
            <div class="row">
            <div data-aos="zoom-in-down" class="container">
      

              <h1  data-aos="zoom-in-up" class="text-center mt-5 mb-3">Utilisateurs</h1>
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
                          <th>ACTION</th>
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
                          <td>
                      </tr>
                  <?php endwhile;?>
              </tbody>
          </table>
        </div>


    
      <div data-aos="zoom-in-up" class="container">
          <h1 data-aos="zoom-in-up" class="text-center mt-5 mb-3">Annonces</h1>
          <?php
              $query="select * from annonces";
              $pdostml=$pdo->prepare($query);
              $pdostml->execute();
              // var_dump($pdostml->fetchAll(PDO::FETCH_ASSOC));
          ?>
          <table data-aos="zoom-in-up" id="dataTable2" class="display">
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>LIBELLE</th>
                      <th>NOM DE L'ANNONCEUR</th>
                      <th>ORIGINE</th>
                      <th>MESSAGE</th>
                      <th>DATE</th>
                      <th>ACTION</th>
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


    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- DataTable js -->
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <!-- initialisation dataTable -->
    <script type="text/javascript">
      $(document).ready( function () {
      $("#dataTable").dataTable({
      "oLanguage": {
     "sLengthMenu": "Afficher MENU Enregistrements",
     "sSearch": "Rechercher:",
     "sInfo":"Total de TOTAL enregistrements (_END_ / _TOTAL_)",
     "oPaginate": {
     "sNext": "Suivant",
     "sPrevious":"Précédent"}}})});
  </script>

<script type="text/javascript">
      $(document).ready( function () {
      $("#dataTable2").dataTable({
      "oLanguage": {
     "sLengthMenu": "Afficher MENU Enregistrements",
     "sSearch": "Rechercher:",
     "sInfo":"Total de TOTAL enregistrements (_END_ / _TOTAL_)",
     "oPaginate": {
     "sNext": "Suivant",
     "sPrevious":"Précédent"}}})});
  </script>
      
    <!-- bootstrap js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>