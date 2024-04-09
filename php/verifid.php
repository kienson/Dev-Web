<?php
session_start();


echo $_POST["ide"],"<br>";
$ide = $_POST["ide"];
echo $_POST["mdp"],"<br>";
$mdp = $_POST["mdp"];


$json = file_get_contents('../data/compte.json');
$array = json_decode($json, true);
echo "<pre>";
print_r($array);
echo "</pre>";

foreach($array as $v1) :
    if ($v1['ide'] == $ide) {
        if ($v1['mdp'] == $mdp) {
            echo "c'est ok !";
            $_SESSION['nom']=$v1['pre'];
            $_SESSION['ok']=1;
            header("Location: accueil.php");
            exit(0);
        }
        else {
            echo 'mdp incorrect';
            $_SESSION["test"]="faux";
            header("Location: id.php");
        }
    }
endforeach;
if($_SESSION['test'] != 'faux' && $_SESSION['test'] == ''){
    $_SESSION['test']="faux";
    header("Location: id.php");
}

$_SESSION['time'] = date('h:i:s');

?>