<?php
include("start.php");

// Vérification des données envoyées
if (!isset($_POST["ide"], $_POST["mdp"]))
    exit("need pseudo and mdp");
$ide = mysqli_real_escape_string($conn, $_POST["ide"]);
$mdp = mysqli_real_escape_string($conn, $_POST["mdp"]);

// Connexion
$result = $conn->query("SELECT * FROM Utilisateurs WHERE pseudo = '".$ide."' AND mdp = '".$mdp."'");
    if ($result->num_rows == 0){
        echo 'pseudo ou mdp incorrect';
        $_SESSION["test"]="faux";
        header("Location: id.php");
    }
$utilisateur = $result->fetch_assoc();
$_SESSION["nom"] = $utilisateur["pseudo"];
$_SESSION["ok"] = 1;
header("Location: accueil.php");
exit(0);

if($_SESSION['test'] != 'faux' && $_SESSION['test'] == ''){
    $_SESSION['test']="faux";
    header("Location: id.php");
}

$_SESSION['time'] = date('h:i:s');

?>