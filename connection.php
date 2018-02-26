<?php
$link = mysqli_connect("localhost", "root", "","site_cv")or die('Erreur SQL !' .mysql_error());;

$requete = mysqli_query($link,'SELECT * FROM diplome order by date_fin')or die('Erreur SQL !' .mysql_error());




