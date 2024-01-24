
<?php include_once("DBconnexion.php"); ?>

<?php 

$pdo = new connect();

if(isset($_POST['envoi'])){
  if(!empty($_POST["inputName"]) && !empty($_POST["inputLastName"]) && !empty($_POST["inputEmail"]) && !empty($_POST["inputTel"]) && !empty($_POST["inputPassword"])){
              // restriction des champs html pour lutter contre la faille xss
              $nom=htmlspecialchars($_POST['inputName']);
              $prenom=htmlspecialchars($_POST['inputLastName']);
              $email=htmlspecialchars($_POST['inputEmail']);
              $tel=htmlspecialchars($_POST['inputTel']);
              $password=sha1($_POST['inputPassword']);
    
    // elaboration de la requete preparee
    $query="insert into users(nom,prenom,email,tel,password) values (?, ?, ?, ?, ?)";
    $insertUsers=$pdo->prepare($query); //execution de la requete preparer dans la variable de reception

    $insertUsers->execute(array($nom, $prenom, $email, $tel, $password));

    $insertUsers->closeCursor();
    header("location:homeUsers.php");
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
        <div class="container inscription">
            <div class="row">
                <div class="col-lg-5 mx-auto">
                    <form method="post">
                        <h1 class="h3 mb-3 text-center">Please sign up</h1>
                    

                        <div class="form-floating mb-3">
                            <input name="inputName" type="text" class="form-control" id="floatingInput" placeholder="your name" required>
                            <label for="floatingInput">Nom</label>
                          </div>
                          <div class="form-floating mb-3">
                            <input name="inputLastName" type="text" class="form-control" id="floatingPassword" placeholder="Your last name" required>
                            <label for="floatingPassword">Prenom</label>
                          </div>
                        <div class="form-floating mb-3">
                          <input name="inputEmail" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                          <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                          <input name="inputTel" type="tel" class="form-control" id="floatingPassword" placeholder="Your contact" required>
                          <label for="floatingPassword">Tel</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="inputPassword" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                            <label for="floatingPassword">Confirm Password</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="code d'acces" required>
                            <label for="floatingPassword">Code</label>
                        </div>

                        <a href="connexion.php" class="text-primary">j'ai deja un compte-connexion</a>
                    
                       
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