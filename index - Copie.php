<?php 
include 'connection.php';
include 'fonction.php';

if($_SERVER['REQUEST_URI'] == '/index%20-%20Copie.php') header('Location:/');

$requete = mysqli_query($link,'SELECT * FROM diplome')or die('Erreur SQL !' .mysql_error());

mb_internal_encoding('UTF-8');

?>


<!doctype html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>Vigneron Thomas</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes, user-scalable=no">
        <link rel="icon" href="img/favicon.png" />

        <link rel="stylesheet" href="css/style.css">


        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
        <link href="https://fonts.googleapis.com/css?family=Lemonada" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Yellowtail" rel="stylesheet">
        <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
        <script type='text/javascript' src="js/script.js"></script>
        <script src="js/particles.min.js"></script>
        <script src="js/app.js"></script>

    </head>




    <body>

        <div class="chantier">

            <h1>Site mobile en construction !</h1>
            <img src="img/636377887778541980.png" alt="">
        </div>

        <div id="particles-js"></div>

        <div class="retour">
            <img class="arrow" src="img/left_arrow.png" alt="">
        </div>

        <div class="page_centre">

            <h1>Thomas Vigneron</h1>

            <div class="trait_gauche">
                <img class="icon" src="img/icon2.png" alt="">
            </div>
            <div class="trait_droit">
                <img class="icon" src="img/icon4.png" alt="">
            </div>
            <div class="trait_haut">
                <img src="img/icon1.png" alt="">
            </div>
            <div class="trait_bas">
                <img class="icon" src="img/icon5.png" alt="">
            </div>
        </div>

        <div class="page_gauche ">
            <div class="contenu">
                <h1 class="titre">Me contacter</h1>


                <form action="traitement_formulaire_contact.php" method="POST" name="contact">

                    <input type="text" name="name" placeholder="Nom" required/>
                    <input type="text" name="societe" placeholder="Société" />
                    <input type="email" name="email" placeholder="Email" required />
                    <input type="tel" name="telephone" placeholder="Téléphone" />
                    <textarea type="text" name="message" placeholder="Message" style="overflow:visible;" required></textarea>
                    <br />
                    <div class="bouton">
                        <button id="submit" type="submit" name="envoi">
                            Envoyer !
                        </button>
                    </div>
                </form>
            </div>

        </div>

        <div class="page_haut">
            <div class="contenu">
                <h1 class="titre">Quelques mots sur moi ...</h1>
                <div id="contenu">
                    <p class="photo_profil">
                        <img src="img/profil2.jpg" alt="">
                    </p>
                    <p><span>Jeune diplômé d’un DUT informatique (bac+2) je souhaite maintenant me diriger vers le développement front-end qui est vraiment ce qui me plaît le plus dans le développement web.</span>

                        <span>Depuis tout petit je suis intéressé par l’informatique ce qui m’a permis d’acquérir pas mal d’expérience dans le milieu et de pouvoir connaitre facilement toutes les nouveautés des langages de programmation.</span>

                        <span>Mon domaine de prédilection est donc le développement front-end (HTML/CSS/JS) mais j’ai aussi acquis grâce à mes études en informatique, des compétences dans le back-end (PHP/MYSQL)</span>

                    </p>
                </div>
            </div>
        </div>

        <div class="page_droite">
            <div class="contenu">
                <h1 class="titre">Compétences</h1>
                <div class="contentContainer">
                    <div class="progressBar">
                        <h4>HTML</h4>
                        <div class="progressBarContainer">
                            <div class="progressBarValue value-60"><span>60%</span></div>
                        </div>
                    </div>
                    <div class="progressBar">
                        <h4>CSS</h4>
                        <div class="progressBarContainer">
                            <div class="progressBarValue value-70"><span>70%</span></div>
                        </div>
                    </div>
                    <div class="progressBar">
                        <h4>PHP</h4>
                        <div class="progressBarContainer">
                            <div class="progressBarValue value-60"><span>60%</span></div>
                        </div>
                    </div>
                    <div class="progressBar">
                        <h4>Jquery</h4>
                        <div class="progressBarContainer">
                            <div class="progressBarValue value-50"><span>50%</span></div>
                        </div>
                    </div>
                    <div class="progressBar">
                        <h4>Java</h4>
                        <div class="progressBarContainer">
                            <div class="progressBarValue value-60"><span>60%</span></div>
                        </div>
                    </div>
                    <div class="progressBar">
                        <h4>C</h4>
                        <div class="progressBarContainer">
                            <div class="progressBarValue value-50"><span>50%</span></div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="page_bas">
            <div class="container">
                <div class="page-header">
                    <h1 id="timeline">Timeline</h1>
                </div>
                <ul class="timeline">
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
    $depuis = $donnees['depuis'];

    if($est_diplome == 1){ ?>
                    <li>
                        <?php }else{ ?>
                    <li class="timeline-inverted">
                        <?php } ?>
                        <div class="timeline-badge warning"><i class="glyphicon glyphicon-credit-card"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title"><?php echo nl2br($titre); ?></h4>
                                <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i><?php 
    if($depuis == 1){echo "Depuis ";}else{
    if($date_fin != '0000-00-00' or $actuellement == 1){ echo "De "; }} if($non_afficher_mois == 0){ echo $date_debut_mois; } ?> <?php echo $date_debut_annee ?><?php if($date_fin != '0000-00-00'){?> à <?php if($non_afficher_mois == 0){ echo $date_fin_mois; } ?> <?php echo $date_fin_annee ?><?php } ?><?php if($actuellement == 1){?> à Maintenant<?php } ?> </small></p>
                            </div>
                            <div class="timeline-body">
                                <p><?php if($contenu != null){echo"<br>";} echo nl2br($contenu) ?></p>
                            </div>
                        </div>
                    </li>
                    <?php  }  ?>

                </ul>
            </div>
        </div>
    </body>

</html>
