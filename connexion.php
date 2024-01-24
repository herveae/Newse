<?php
    session_start();
    include_once("DBconnexion.php");
    $pdo= new connect();

    if(isset($_POST['envoi'])){
        if(!empty($_POST['email']) AND !empty($_POST['password'])){
            $email=htmlspecialchars($_POST['email']);
            $password=sha1($_POST['password']);

            $query="SELECT * FROM users WHERE email=? AND password=?";
            $recupUsers=$pdo->prepare($query);
            $recupUsers->execute(array($email,$password));

            if($recupUsers->rowCount()>0){
                $_SESSION['email']=$email;
                $_SESSION['password']=$password;
                $_SESSION['id'] =$recupUsers->fetch()['id_users'];
                $_SESSION['nom']=$recupUsers->fetch()['nom'];
                header('location: homeUsers.php');
            }else{
                echo "Votre mot de passe, votre email est incorrect";
            }
        }else{
            echo "Veuillez completer tout les champs...";
        }
    }
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
</head>
<body>
      <?php include_once("navbarHome.php"); ?>

      <main class="" id="main">
        <div class="container connexion">
            <div class="row">
                <div class="col-lg-5 mx-auto">
                    <form method="post">
                        <h1 class="h3 mb-3 text-center">Please sign in</h1>
                    
                        <div class="form-floating mb-3">
                          <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                          <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                          <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                          <label for="floatingPassword">Password</label>
                        </div>

                        <a href="inscription.php" class="text-primary">Creer un compte</a>
                    
                       
                        <button class="w-100 btn btn-lg btn-dark mt-3" type="submit" name="envoi">Sign in</button>
                      </form>
                </div>
            </div>
        </div>
      </main>



      
    <!-- bootstrap js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>