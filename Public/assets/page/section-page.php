<?php
    require "../../php/ContaintAppMain/headerSection.php";
?>
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
                  Block OpenLang
              -->
            <div class="row align-items-md-stretch">
              <div class="col-md-12 mt-3">
                <div class="h-100 p-5 text-white bg-dark rounded-3">
                  <p class="col-md-8 fs-4">
                  “Bienvenue dans notre application. Merci d’avoir choisi OpenLang !”
                  </p>
                </div>
              </div>
            </div>
            <iframe src="home.php" width="100%" height="600px"></iframe>
          </div>
        </main>

      </main>
    </div>
  </div>

  <?php
    require "../../php/ContaintAppMain/footerSection.php";
  ?> 
