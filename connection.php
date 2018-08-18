<?php
$link = mysqli_connect("localhost", "root", "","site_cv")or die('Erreur SQL !' .mysql_error());;



$host_name = 'db724449256.db.1and1.com';
$database = 'db724449256';
$user_name = 'dbo724449256';
$password = 'azwinklr04';

//$link = mysqli_connect($host_name, $user_name, $password, $database);

$requete = mysqli_query($link,'SELECT * FROM diplome order by date_fin')or die('Erreur SQL !' .mysql_error());



