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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">




    <!-- DataTable CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
  
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
                <a class="nav-link active" aria-current="page"  href="dashboard.php">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Annonce</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" >Gerer</a>
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
      <h1 class="text-center mt-5">Annonces</h1>
        <section class="mt-5 container">  
        <?php
                $query="select * from annonces";
                $pdostml=$pdo->prepare($query);
                $pdostml->execute();
                // var_dump($pdostml->fetchAll(PDO::FETCH_ASSOC));
            ?>
            <table data-aos="zoom-in-up" id="dataTable" class="display">
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
                        <td>
                            <a href="modifChauffeur.php?id=<?php echo $ligne["id_annonces"]?>" class="btn btn-success mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                            </a>  

                            <a id="deleteModal" href="deleteAnnonces.php?id=<?php echo $ligne["id_annonces"]?>" class="btn btn-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                </svg>
                            </a>  
                        </td>

                    </tr>
                    
                    <?php endwhile; ?>

                </tbody>
            </table>
        </div>
    </main>

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


      
    <!-- bootstrap js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

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
</body>
</html>