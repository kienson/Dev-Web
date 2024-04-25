<?php
include("start.php");


if (!isset($_POST["ide"], $_POST["mdp"],$_POST["nom"],$_POST["pre"],$_POST["mail"]))
    exit("need pseudo, mdp, nom, prenom and mail");
$ide = mysqli_real_escape_string($conn, $_POST["ide"]);
$mdp = mysqli_real_escape_string($conn, $_POST["mdp"]);
$nom = mysqli_real_escape_string($conn, $_POST["nom"]);
$pre = mysqli_real_escape_string($conn, $_POST["pre"]);
$mail = mysqli_real_escape_string($conn, $_POST["mail"]);

$sql = "INSERT INTO Utilisateurs VALUES (DEFAULT,'".$ide."','".$pre."','".$nom."','".$mail."','".$mdp."',DEFAULT)";
$conn->query($sql);
$message = 'Inscription réussie, veuillez vous connectez';
echo "<script type='text/javascript'>alert('$message');</script>";
header("Location: id.php");    
?>