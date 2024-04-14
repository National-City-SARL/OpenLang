<!DOCTYPE html> 
<html lang="">

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
    <!--style css brute (7)-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    <!----------------------------------------------------->

    <title></title><!--titre du projet (9)-->
</head>
<body style="background: hsl(231, 12%, 12%);">

  <main>
      <!-- 
        Principal Component
      -->
      <div class="container py-4">

        <!--
            Contrat de licence du logiciel 
        -->
          <div class="row align-items-md-stretch">
                <div class="col-md-12 mb-4 mt-5">
                  <div class="h-100 p-5 text-info bg-dark rounded-3 ">
                    <h2 class="display-5 fw-bold">Contrat de licence du logiciel OpenLang</h2>
                    <p class="col-md-8 fs-5 text-white">
                        L’utilisateur est autorisé à installer le logiciel sur un appareil compatible et à utiliser les fonctionnalités du logiciel prévues par l’éditeur.</p>
                        <!-- <img src="../picture/img_section.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="500px" height="400px" loading="lazy"> -->
                        <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#scrollmodal">Voir la politique</button>
                    <a href="../page/community-version.php" class="btn btn-outline-light">retour</a>
                  </div>
                </div>
          </div>

        <!--
            Inscription Connexion
        -->
          <div class="row align-items-md-stretch">
                <div class="col-md-6 mt-1">
                  <div class="h-100 p-5 text-white bg-dark rounded-3">
                    <h2 class="display-5 text-info ">Inscription</h2>
                    <p class="fs-6">l’inscription permet à l’utilisateur d’accéder aux fonctionnalités du logiciel et de sauvegarder ses paramètres et ses données. 
                    Il est important de lire attentivement les conditions d’utilisation du logiciel avant de s’inscrire pour comprendre les droits et les obligations de l’utilisateur.</p>
                    <a href="../page/inscription.php" class="btn btn-outline-light">créer un compte</a>
                  </div>
                </div>
                <div class="col-md-6 mt-1">
                    <div class="h-100 p-5 text-white bg-dark rounded-3">
                      <h2 class="display-5 text-danger ">Connexion</h2>
                      <p class="fs-6">La connexion permet à l’utilisateur d’accéder aux fonctionnalités du logiciel et de récupérer ses paramètres et ses données. 
                        Il est important de choisir un mot de passe fort et de ne pas le partager avec d’autres personnes pour protéger ses données.</p>
                      <a href="../page/connexion.php" class="btn btn-outline-light">se connecter</a>
                      <a href="section-page.php" class="btn btn-outline-light text-info">Inprivate</a>
                    </div>
                  </div>
                </div>
          </div>        

        <!--
            SCRIPT POPUP 
        -->
          <div class="modal fade mt-5" id="scrollmodal" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content bg-dark text-white">
                    <div class="modal-header">
                      <h5 class="modal-title" id="scrollmodalLabel">Contrat d'utilisation du logiciel OpenLang</h5>
                    </div>
                    <div class="modal-body">
                      <p>
                        IMPORTANT – L’installation ou l’utilisation du logiciel impliquent l’acceptation sans réserve du contrat de licence. Ce contrat 
                                        est également applicable à toute mise à jour ultérieure ou toute nouvelle version du logiciel.
                        L’utilisateur est autorisé à installer le logiciel sur un appareil compatible et à utiliser les fonctionnalités du logiciel prévues par l’éditeur. Toute autre utilisation 
                                        du logiciel non expressément autorisée par l’éditeur, est interdite. 
                                        L’utilisateur est autorisé à consulter les contenus (notamment les textes, sons, photographies, vidéos, dessins, cartes et autres représentations graphiques) dans le logiciel. 
                        L’éditeur apporte tous ses soins au logiciel et aux contenus incorporés au logiciel.Cependant, il ne consent aucune garantie quant au logiciel et quant aux contenus.particulier, l’éditeur ne garantit pas que le logiciel et les contenus sont exacts, complets, à jour, exempts d’erreurs, adaptés aux besoins de l’utilisateur.
                                        Dans toute la mesure permise par les dispositions applicables, l’éditeur n’assume aucune responsabilité quant aux conséquences qui pourraient résulter de l’utilisation du logiciel ou d’un dysfonctionnement quelconque du logiciel, ou d’une erreur ou omission affectant les contenus incorporés au logiciel.
                                        L’éditeur veille à la modération des commentaires, photographies, vidéos et autres contenus qui pourraient être diffusés via le logiciel par des utilisateurs. Cependant, l’éditeur n’est en aucun cas responsable de ces contenus et sa responsabilité ne peut pas être engagée de ce fait.
                        L’éditeur peut modifier le présent contrat au cours de son exécution, sous réserve de le notifier à l’utilisateur.La notification pourra intervenir par tout moyen, y compris sous la forme d’une notification dans le logiciel. Les modifications entreront en vigueur au terme d’un délai 5ans à compter de la notification. 
                                        L’utilisateur pourra s’opposer aux modifications en désinstallant le logiciel.
                        Le présent contrat est rédigé exclusivement en langue française. Cette langue est utilisée durant la relation précontractuelle 
                                        ainsi que pour la conclusion du contrat.
                      </p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Quiter</button>
                      <button type="button" class="btn btn-primary"><a href="#" style="color: white; text-decoration: none;">Télécharger</a></button>
                    </div>
                  </div>
                </div>
          </div>

      </div>
  
  </main>
   <script>
      document.addEventListener('contextmenu' ,(e)=> {
          e.preventDefault();
      })
    </script>    
    <!----------------------------------------------------->
    <!-- Javascript brute (10)-->
    <script src="../js/bootstrap.bundle.min.js"></script>
	<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
    <!----------------------------------------------------->
</body>
</html>
