<?php
session_start();
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];
include 'connection.php';
include 'fonction.php';
$user = $_SESSION['username'];
$password = $_SESSION['password'];
$requete = mysqli_query($link,'SELECT id,password FROM utilisateurs WHERE user = "'.$user.'"')or die('Erreur SQL !' .mysqli_error());
$row = mysqli_fetch_array($requete);
$password_bdd = $row['password'];
if(mysqli_num_rows($requete) == 1){
    if (password_verify($password, $password_bdd))
    {
        $_SESSION['connexion_valide'] = 1;
        header('Location: admin.php');
        exit();
    }
    else{
        $_SESSION['connexion_valide'] = 0;
        header('Location: admin_login.php');
        exit();
    }
}else{
    $_SESSION['connexion_valide'] = 0;
        header('Location: admin_login.php');
        exit();
}
