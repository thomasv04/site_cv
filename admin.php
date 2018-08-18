<?php
session_start();
if (!isset($_SESSION['connexion_valide']) or $_SESSION['connexion_valide'] == 0 or $_SESSION['connexion_valide'] == null){
    header('Location: admin_login.php');
}
include 'connection.php';
include 'fonction.php';

if($_SERVER['REQUEST_URI'] == '/index%20-%20Copie.php') header('Location:/');

$requete = mysqli_query($link,'SELECT * FROM diplome')or die('Erreur SQL !' .mysql_error());

mb_internal_encoding('UTF-8');


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Espace Administrateur</title>
        <link rel="stylesheet" href="css/admin.css">
        <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
        <script type='text/javascript' src="js/script.js"></script>
    </head>
    <body>


        <div class="user">
            <img class="profil" src="img/profil.png" alt="">
            <h2><?php echo $_SESSION['username']; ?></h2>
            <a href="deconnexion.php"><img src="img/croix.png" alt=""></a>
        </div>
        <div class="box">

            <div class="logo">
                <a href="">
                    <img src="img/icon1.png" alt="">
                    <p>A Propos</p>
                </a>
            </div>


            <div class="logo">
                <a href="">
                    <img src="img/icon4.png" alt="">
                    <p>Compétences</p>
                </a>
            </div>


            <div class="logo">
                <a href="">
                    <img src="img/icon2.png" alt="">
                    <p>Me Contacter</p>
                </a>
            </div>


            <div class="logo">
                <a href="admin_diplome.php">
                    <img src="img/icon5.png" alt="">
                    <p>Diplomes</p>
                </a>
            </div>
        </div>

    </body>
</html>
