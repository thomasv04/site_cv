<?php
session_start();
$_SESSION['username'] = null;
$_SESSION['password'] = null;
$_SESSION['connexion_valide'] = null;
header('Location: admin_login.php');
