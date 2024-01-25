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



      <main data-aos="zoom-in-up" class="" id="main">
      <h1 class="text-center mt-5">Utilisateurs</h1>
        <section class="mt-5 container">  
        <?php
                $query="select * from users";
                $pdostml=$pdo->prepare($query);
                $pdostml->execute();
                // var_dump($pdostml->fetchAll(PDO::FETCH_ASSOC));
            ?>
            <table data-aos="zoom-in-up" id="dataTable2" class="display">
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
                            <a id="deleteModal" href="deleteUsers.php?id=<?php echo $ligne["id_users"]?>" class="btn btn-danger">
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


      
    <?php include_once("footer.php");?>
</body>
</html>