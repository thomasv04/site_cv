<?php if($_SERVER['REQUEST_URI'] == '/index.php') header('Location:/'); ?>



<!doctype html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>Vigneron Thomas</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
        <link rel="icon" href="img/icon.jpg" />

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" media="screen and (max-width: 1100px)" href="css/bigscreen.css" type="text/css">
        <link rel="stylesheet" media="screen and (max-width: 800px)" href="css/smallscreen.css" type="text/css">


        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
        <link href="https://fonts.googleapis.com/css?family=Lemonada" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Yellowtail" rel="stylesheet">
        <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
        <script type='text/javascript' src="js/script.js"></script>


    </head>



    <body>
        <img src="img/burger.png" class="burger" alt="">
        <div class="test">



            <div id="menu" class="fixed">
                <ul>

                    <li><a href="#texte" id="accueil_menu">ACCUEIL</a></li>
                    <li><a href="#propos" id="propos_menu">À PROPOS</a></li>
                    <li><a href="#infos_perso" id="presentation_menu">PRÉSENTATION</a></li>
                    <li><a href="#competences" id="competences_menu">COMPÉTENCES</a></li>
                    <li><a href="#contact" id="contact_menu">CONTACT</a></li>
                </ul>
            </div>
        </div>
        <header>
            <div id="texte">
                <h1>
                    <span class="c1">T</span>
                    <span class="c2">H</span>
                    <span class="c3">O</span>
                    <span class="c4">M</span>
                    <span class="c5">A</span>
                    <span class="c6">S</span>
                </h1>
                <h2>ÉTUDIANT EN INFORMATIQUE</h2>
            </div>


            <div id="filter">
            </div>
        </header>

        <div class="separateur"></div>

        <div id="propos">
            <h1 class="titre">Quelques mots sur moi ...</h1>
            <div id="contenu">
                <div class="photo_profil">
                    <img src="img/profil2.jpg" alt="">
                </div>
                <p><span>Jeune diplômé d’un DUT informatique (bac+2) je souhaite maintenant me diriger vers le développement front-end qui est vraiment ce qui me plaît le plus dans le développement web.</span>

                    <span>Depuis tout petit je suis intéressé par l’informatique ce qui m’a permis d’acquérir pas mal d’expérience dans le milieu et de pouvoir connaitre facilement toutes les nouveautés des langages de programmation.</span>

                    <span>Mon domaine de prédilection est donc le développement front-end (HTML/CSS/JS) mais j’ai aussi acquis grâce à mes études en informatique, des compétences dans le back-end (PHP/MYSQL)</span>

                </p>
            </div>
        </div>

        <div class="separateur"></div>

        <div id="infos_perso">
            <h1 class="titre">Formations et expériences professionnels ... </h1>
            <section class="timeline">
                <ul>
                    <li>
                        <div class="gauche">
                            <p><span>2017</span>DUT Informatique</p>
                        </div>

                    </li>

                    <li>
                        <div class="droite">
                            <p><span>15 février au 22 avril 2016</span>Stage DUT informatique</p>
                        </div>

                    </li>


                    <li>
                        <div class="gauche">
                            <p><span>Juin 2014</span>Baccalauréat Technologique STI2D</p>
                        </div>
                    </li>
                    <li>
                        <div class="droite">
                            <p><span>2014</span>Programmation serre autonome</p>
                        </div>
                    </li>

                    <li>
                        <div class="gauche">
                            <p><span>2014</span>Obtention du Brevet d'aptitude aux fonctions d'animateur</p>
                        </div>
                    </li>

                    <li>
                        <div class="droite">
                            <p><span>Depuis 2013</span>Travail dans un centre de loisirs en tant qu'animateur</p>
                        </div>
                    </li>
                    <li>
                        <div class="droite">
                            <p><span>2011</span>Stage 3ème au sein de l'entreprise 2mrc-information à Alincthun</p>
                        </div>
                    </li>



                </ul>
            </section>
        </div>

        <div class="separateur"></div>

        <div id="competences">
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

        <div class="separateur"></div>

        <div id="contact">

            <h1 class="titre">Me contacter</h1>


            <form action="" method="POST">

                <input type="text" name="name" placeholder="Nom" />
                <input type="text" name="societe" placeholder="Société" />
                <input type="email" name="email" placeholder="Email" />
                <input type="tel" name="telephone" placeholder="Téléphone" />
                <textarea type="text" name="message" placeholder="Message" style="overflow:visible;"></textarea>
                <br />
                <div class="boutton">
                    <button id="submit" type="submit">
                        Envoyer !
                    </button>
                </div>
            </form>

        </div>





        <footer>
            <span>© <?php echo date("Y");  ?> - Vigneron Thomas</span>
        </footer>


    </body>

</html>
