<?php

header("Content-Type: text/html;charset=utf-8");
include 'connection.php';

mb_internal_encoding('UTF-8');

$id = $_POST['id'];
$titre = htmlentities($_POST['titre'], ENT_QUOTES, "UTF-8");
$date_debut = $_POST['date_debut'];
$date_fin = $_POST['date_fin'];
$contenu = htmlentities($_POST['contenu'], ENT_QUOTES, "UTF-8");
if(!empty($_POST['afficher_mois'])){
    $non_afficher_mois = 0;
}else{
    $non_afficher_mois = 1;
}

if(!empty($_POST['depuis'])) {
    $depuis = 1;
}
else {
    $depuis = 0;
}

if(!empty($_POST['est_diplome'])) {
    $est_diplome = 1;
}
else {
    $est_diplome = 0;
}

if(!empty($_POST['actuellement'])) {
    $actuellement = 1;
}
else {
    $actuellement = 0;
}

/**echo "ID : ".$id."<br>";
echo "TITRE : ".$titre."<br>";
echo "CONTENU : ".$contenu."<br>";
echo "DATE DEBUT : ".$date_debut."<br>";
echo "DATE FIN : ".$date_fin."<br>";
echo "EST DIPLOME : ".$est_diplome."<br>";
echo "ACTUELLEMENT : ".$actuellement."<br>";
echo "NON AFFICHER MOIS : ".$non_afficher_mois."<br>";
echo "DEPUIS : ".$depuis."<br>";

Travail dans un collège en tant qu' Assistants d'Education TICE

- Surveille et encadre les élèves
- Participe à la Vie Scolaire
- Création de cours en relation avec l'informatique
- Maintenance des outils informatique
- Gestion des comptes des élèves
**/

$update='UPDATE diplome SET titre= "'.$titre.'",date_debut= "'.$date_debut.'",date_fin= "'.$date_fin.'",contenu= "'.$contenu.'",est_diplome= "'.$est_diplome.'",actuellement= "'.$actuellement.'",non_afficher_mois= "'.$non_afficher_mois.'",depuis= "'.$depuis.'" WHERE id="'.$id.'"';


$requete = mysqli_query($link,$update)or die('Erreur SQL !' .mysqli_error());



//echo $update;



header('Location: admin.php?id='.$id);
