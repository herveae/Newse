<?php
    session_start();
    include_once("DBconnexion.php");
    $pdo= new connect();

    if(isset($_POST['envoi'])){
        if(!empty($_POST['login']) AND !empty($_POST['password'])){
            $login=htmlspecialchars($_POST['login']);
            $password=htmlspecialchars($_POST['password']);

            $query="SELECT * FROM admins WHERE login=? AND password=?";
            $recupAdmins=$pdo->prepare($query);
            $recupAdmins->execute(array($login,$password));

            if($recupAdmins->rowCount()>0){
                $_SESSION['login']=$login;
                $_SESSION['password']=$password;
                $_SESSION['id'] =$recupAdmins->fetch()['id_admins'];
                header('location: dashboard.php');
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
    <?php include_once("head.php"); ?>
</head>
<body>
   

      <main class="" id="main">
        <div class="container connexion">
            <div class="row">
                <div class="col-lg-5 mx-auto">
                    <form method="POST">
                        <h2 class=" mb-3 text-center">Heureux de vous revoir</h2>
                    
                        <div class="form-floating mb-3">
                          <input name="login" type="text" class="form-control" id="floatingInput" placeholder="Login" required>
                          <label for="floatingInput">Login</label>
                        </div>
                        <div class="form-floating mb-3">
                          <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                          <label for="floatingPassword">Password</label>
                        </div>

                        <button name="envoi" class="w-100 btn btn-lg btn-primary text-light mt-3" type="submit">Sign in</button>
                      </form>
                </div>
            </div>
        </div>
      </main>



      <?php include_once("preloader.php");?>
    
      <?php include_once("footer.php");?>
</body>
</html>