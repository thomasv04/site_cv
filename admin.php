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


        <ul class="nav">
            <div class="user">
                <img src="img/profil.png" alt="">
                <h2><?php echo $_SESSION['username']; ?></h2>
                <a href="deconnexion.php"><img src="img/croix.png" alt=""></a>
            </div>
            <a href="">
                <li class="nav_item">
                    <div class="logo"><img src="img/icon1.png" alt=""></div>
                    <p>A Propos</p>
                </li>
            </a>
            <a href="">
                <li class="nav_item">
                    <div class="logo"><img src="img/icon4.png" alt=""></div>
                    <p>Compétences</p>
                </li>
            </a>
            <a href="">
                <li class="nav_item">
                    <div class="logo"><img src="img/icon2.png" alt=""></div>
                    <p>Me Contacter</p>
                </li>
            </a>
            <a href="" class="select">
                <li class="nav_item">
                    <div class="logo"><img src="img/icon5.png" alt=""></div>
                    <p>Diplomes</p>
                </li>
            </a>

        </ul>
        <div class="box">

            <?php while ($donnees = mysqli_fetch_array($requete)){

    $id = $donnees['id'];
    $titre = utf8_encode($donnees['titre']);
    $date_debut = $donnees['date_debut'];
    $date_debut_annee = annee($date_debut);
    $date_debut_mois = ucfirst(nom_mois($date_debut));
    $date_debut_jour = nom_jour($date_debut);
    $date_fin = $donnees['date_fin'];
    $date_fin_annee = annee($date_fin);
    $date_fin_mois = ucfirst(nom_mois($date_fin));
    $date_fin_jour = nom_jour($date_fin);
    $contenu = $donnees['contenu'];
    $contenu = utf8_encode($contenu);
    $est_diplome = $donnees['est_diplome'];
    $actuellement = $donnees['actuellement'];
    $non_afficher_mois = $donnees['non_afficher_mois'];
    if($non_afficher_mois == 1){
        $afficher_mois = 0;
    }else{
        $afficher_mois = 1;
    }
    $depuis = $donnees['depuis'];

    if(isset($_GET['id'])){
       $valide_id = $_GET['id'];

    if($valide_id == $id){
        $valide="valide";
    }else{
        $valide="";
    }
    }


            ?>
            <form class="contenu <?php if(isset($valide)){echo $valide;} ?>" action="modif.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id ?>" />
                <input type="text" class="text" name="titre" value=" <?php echo $titre ?>"><a href="#" class="croix"><img src="img/croix.png" alt=""></a>
                <textarea name="contenu" class="modification" cols="30" rows="10"><?php echo $contenu ?></textarea>
                <input type="date" class="date1" name="date_debut" value="<?php echo $date_debut ?>">
                <input type="date" class="date2" name="date_fin" value="<?php echo $date_fin ?>">
                <div class="range_button">
                    <input type="checkbox" name="est_diplome" id="Diplome<?php echo $id; ?>" <?php if($est_diplome == 1){echo "checked";} ?>>
                    <label for="Diplome<?php echo $id; ?>">Diplome</label>
                    <input type="checkbox" class="Actuellement" name="actuellement" value="Actuellement" id="Actuellement<?php echo $id; ?>" <?php if($actuellement == 1){echo "checked";} ?>>
                    <label for="Actuellement<?php echo $id; ?>">Actuellement</label>
                    <input type="checkbox" class="aff_mois" name="afficher_mois" value="afficher mois" id="aff_mois<?php echo $id; ?>" <?php if($afficher_mois == 1){echo "checked";} ?>><label for="aff_mois<?php echo $id; ?>" >Afficher mois</label>
                    <input type="checkbox" class="Depuis" value="Depuis" name="depuis" id="Depuis<?php echo $id; ?>" <?php if($depuis == 1){echo "checked";} ?>>
                    <label for="Depuis<?php echo $id; ?>">Depuis</label>
                </div>
                <button>Modifier</button>
                <div class="retablir"><a href="#"><h3>Rétablir</h3></a></div>
            </form>
            <?php  }  ?>

            <form class="contenu nouveau_contenu ">
                <input type="text" class="text" value=""><div class="nouveau_croix" ><img src="img/croix.png" alt=""></div>
                <textarea name="modification" class="modification" cols="30" rows="10"></textarea>
                <input type="date" class="date1" value="">
                <input type="date" class="date2" value="">
                <div class="range_button">
                    <input type="checkbox" id="Diplome" value="Diplome" >
                    <label for="Diplome">Diplome</label>
                    <input type="checkbox" class="Actuellement" value="Actuellement" id="Actuellement" >
                    <label for="Actuellement">Actuellement</label>
                    <input type="checkbox" class="aff_mois" value="afficher mois" id="aff_mois" ><label for="aff_mois" >Afficher mois</label>
                    <input type="checkbox" class="Depuis" value="Depuis" id="Depuis">
                    <label for="Depuis">Depuis</label>
                </div>
                <button>Ajouter</button>
                <div class="retablir"><a href="#"><h3>Rétablir</h3></a></div>
            </form>

        </div>

        <div class="ajouter">+</div>



        <div class="alerte_supp">
            <h2>Voulez-vous vraiment supprimer "Assistants d'Education TICE" ?</h2>
            <a href="#" class="oui">OUI</a>
            <a href="#" class="non">NON</a>
        </div>
    </body>
</html>
