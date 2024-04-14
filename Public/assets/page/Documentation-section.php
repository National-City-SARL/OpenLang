<!--
    /**
    * copyright 2023 @Community iup_dev
    */
-->
<!DOCTYPE html> <!-- @Community iup_dev (1)-->

<html lang=""><!--Contient la langue du projet (2)-->

<head>

  <!----------------------------------------------------->
  <!-- encodage UTF-8 de l'unicode (3)-->
  <meta charset="UTF-8">
  <!----------------------------------------------------->

  <!----------------------------------------------------->
  <!-- Compatibilite du navigateur edge (4)-->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!----------------------------------------------------->

  <!----------------------------------------------------->
  <!--Information sur la page (5)-->
  <meta name="description" content="">
  <!----------------------------------------------------->

  <!----------------------------------------------------->
  <!--contient les mots cles (6)-->
  <meta name="keywords" content="">
  <!----------------------------------------------------->

  <!----------------------------------------------------->
  <!--contient le nom de l'auteur (6)-->
  <meta name="author" content="Diedou_cabrel">
  <!----------------------------------------------------->

  <!----------------------------------------------------->
  <!--style css brute (7)-->
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/starter-template.css">
  <link rel="stylesheet" href="../css/dashboard.css">
  <link rel="stylesheet" href="../css/heroes.css">
  <!----------------------------------------------------->

  <!-- favicon du projet (8)-->
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <!----------------------------------------------------->

  <title>Community-version</title><!--titre du projet (9)-->
</head>

<body style="background:  hsl(231, 12%, 12%);">
  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">OpenLang</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
      data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3" href="section-page.php">Retour</a>
      </div>
    </div>
  </header>

  <div class="container-fluid">
    <!-- 
          sidebar
      -->
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse bg-dark">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column mb-2">
          <li class="nav-item">
              <a class="nav-link fs-6 btn-dark " href="community-section.php" style="color:white">
                <span data-feather="file-text"></span>
                <img src="../picture/contributing.svg" alt="" width="20px" height="20px">
                community
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-6 btn-dark " href="Documentation-section.php" style="color:white">
                <span data-feather="file-text"></span>
                <img src="../picture/document.svg" alt="" width="20px" height="20px">
                Documentation
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-6 btn-dark " href="compte-section.php" style="color:white">
                <span data-feather="file-text"></span>
                <img src="../picture/folder-windows.svg" alt="" width="20px" height="20px">
                Compte
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-6 btn-dark " href="update-section.php" style="color:white">
                <span data-feather="file-text"></span>
                <img src="../picture/folder-custom.svg" alt="" width="20px" height="20px">
                Update
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <!--
              principal containt
          -->
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

        <main>
          <!-- 
              PRINCIPAL CONTAINER 
          -->
          <div class="container py-4">
            <!--
                  Block Community OpenLang
              -->
            <div class="row align-items-md-stretch">
              <div class="col-md-4 mb-4">
                <div class="h-100 p-5 bg-dark rounded-3 ">
                  <img src="../picture/document.svg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="230px" height="230px" loading="lazy"><br>
                </div>
              </div>
              <div class="col-md-8 mb-4">
                <div class="h-100 p-5 text-white bg-dark rounded-3">
                  <h2 class="display-5 fw-bold">Documentation Officiel</h2>
                  <p class="col-md-8 fs-4">
                    La documentation logicielle est un texte qui accompagne un logiciel informatique et qui explique comment le logiciel fonctionne</p>
                    <a href="https://openlang.my.canva.site/documentation" target="_blank" class="btn btn-outline-light text-info">Télécharger la Docs</a>
                </div>
              </div>
            </div>
            <!--
                  Block Community OpenLang aide
              -->
            <div class="row align-items-md-stretch mt-3">
              <div class="col-md-12 mb-4">
                <div class="h-100 p-5 text-white bg-dark rounded-3 ">
                  <h2 class="display-5 fw-bold">Maintenance à long terme</h2>
                  <p class="col-md-8 fs-5">
                  Les projets de développement évoluent constamment, avec des mises à jour, des corrections de bugs et des améliorations. La documentation permet de maintenir la connaissance sur ces changements au fil du temps. Elle permet de comprendre les modifications apportées au code, de les mettre en contexte et de les documenter pour les futures mises à jour. Cela rend la maintenance du code plus facile et plus efficace.</p>
                </div>
              </div>
            </div>
          </div>
        </main>

      </main>
    </div>
  </div>


  <script>
    document.addEventListener('contextmenu', (e) => {
      e.preventDefault();
    })
  </script>
  <!-- 
       Script de preloader 
    -->
  <div class="loading-container" data-loading-container>
    <div class="loading-circle"></div>
  </div>
  <script src="../js/javascript.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>