<?php
    $db = '../../assets/sql/db_openlang.db';

    // Connexion a la db
    try {
        $pdo = new PDO ("sqlite:$db");
        //echo "connexion reusit !";
    } catch (PDOException $e) {
        echo "Erreur".$e->getMessage();
    }

    if(!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['password'])){
        //recupération des données
        $nom      = htmlspecialchars($_POST['nom']);
        $email    = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        //exécution de la requête
        $sql = "insert into utilisateur set nom=?, email=?, password=?";
        $req = $pdo->prepare($sql);
        $req->execute(array($nom, $email, $password));
        header(location:connexion.php);
    }else{
        echo "remplissez correctement les champs";
    }
?>

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
                <h1>Inscription</h1>
                <form action="inscription.php" method="POST">
                    <input type="text" name="nom" placeholder="Nom" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="password" placeholder="Password" required>
                </form>
                <button type="submit">Enregistre</button>
                <div class="membre">
                    Je suis deja inscrit <a href="connexion.php">Me Connexion ici</a>
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