<?php
session_start();
include 'connection.php';
include 'fonction.php';

if($_SERVER['REQUEST_URI'] == '/index%20-%20Copie.php') header('Location:/');

$requete = mysqli_query($link,'SELECT * FROM utilisateurs')or die('Erreur SQL !' .mysql_error());


mb_internal_encoding('UTF-8');




?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Espace Administrateur</title>
        <link rel="stylesheet" href="css/admin.css">
    </head>
    <body>

        <form action="verif.php" method="post">

            <div class="login">
                <div class="username">
                    <h3>Username</h3>
                    <input type="text" name="username">
                </div>
                <div class="password">
                    <h3>Password</h3>
                    <input type="password" name="password">
                </div>
                <button>Connexion</button>
                <?php
                if(isset($_SESSION['connexion_valide'])){
                        if($_SESSION['connexion_valide'] == 0){
                            echo "<h2>Nom d'utilisation ou mot de passe incorrect !</h2>";

                    }
                }?>
            </div>

        </form>




    </body>
</html>
