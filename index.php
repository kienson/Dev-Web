<?php
session_start();

$_SESSION['nom']='';
$_SESSION['test']='';
$_SESSION['ok']=0;
header('Location: ./php/accueil.php');
?>