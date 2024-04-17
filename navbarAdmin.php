

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
          <a class="navbar-brand" href="#">Newse <span style="font-family: system-ui;font-size: 14px;">for admins</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link <?php echo !empty($dashboard)?"active":"" ?>" aria-current="page"  href="dashboard.php">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo !empty($annonces)?"active":"" ?>" href="annoncesAdmin.php">Annonces</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo !empty($publication)?"active":"" ?>"  href="publicationAdmin.php">Faire une annonce</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo !empty($gestionAnnonces)?"active":"" ?>" href="gestionAnnonces.php" >Gerer Annonces</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo !empty($gestionUsers)?"active":"" ?>" href="gestionUsers.php" >Gestion Utilisateurs</a>
              </li>
              

              
            <form class="d-flex">
              <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button> -->
              
            </form>
          </div>

          <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#deconnexion" style="color: white;"><i class="fa-solid fa-right-to-bracket pe-2"></i> Deconnexion</a>

      
        </div>
      </nav>