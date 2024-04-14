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
    <meta name="diedou cabrel" content="Diedou_cabrel"> 
    <!----------------------------------------------------->

    <!----------------------------------------------------->
    <!--style css brute (7)-->
    <link rel="stylesheet" href="../../assets/css/style_connexion.css">
    <!----------------------------------------------------->

    <!-- favicon du projet (8)-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!----------------------------------------------------->
    
    <title>OpenLang</title><!--titre du projet (9)-->
</head>
<body style="background: hsl(231, 12%, 12%)">
    <!--
        framework Particles.js
    -->
    <div id="particles-js">
        <div class="welcome_openLang">
            <div class="Connexion">
                <h1>Connexion</h1>
                <form action="#">
                    <input type="text" placeholder="Nom">
                    <input type="password" placeholder="Password">
                    <div class="RestaureMotsDePasse">
                        <a href="#">Mots de passe oublier</a>
                    </div>
                </form>
                <button>Connexion</button>
                <div class="membre">
                    Je ne suis pas inscrit? <a href="../page/inscription.php">s'Inscrit maintenant</a>
                </div>
            </div>
        </div>
    </div> 

    <!-- 
       Script de preloader 
    -->
    <div class="loading-container" data-loading-container>
        <div class="loading-circle"></div>
    </div>

    <!--
        Script pour bloquer le clic droit
    -->
    <script>
        document.addEventListener('contextmenu' ,(e)=> {
            e.preventDefault();
        })
    </script>

    <script src="../../assets/js/javascript.js"></script>
    <script src="../../assets/js/particles.js"></script>
    <script src="../../assets/js/app.js"></script>
</body>
</html>