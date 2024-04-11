<?php
session_start();   
          
echo $_POST["ide"],"<br>";
$ide = $_POST["ide"];
echo $_POST["mdp"],"<br>";
$mdp = $_POST["mdp"];
echo $_POST["nom"],"<br>";
$nom = $_POST["nom"];
echo $_POST["pre"],"<br>";
$pre = $_POST["pre"];
echo $_POST["mail"],"<br>";
$mail = $_POST["mail"];




$jason = file_get_contents('../data/compte.json');
$arra = json_decode($jason, true);
echo "<pre>";
print_r($arra);
echo "</pre>";


foreach($arra as $v1) :
    if ($v1['ide'] == $ide) {
            echo "c'est ok !";
            $_SESSION['test']="non";
            header("Location: id.php");
            exit(0);
    }
endforeach;






$json = file_get_contents('../data/compte.json');
$array = json_decode($json, true);


$newtab = array (
    "ide" => $ide,
    "mdp" => $mdp,
    "nom" => $nom,
    "pre" => $pre,
    "mail" => $mail
);


$nbr = count($array);
$array[$nbr] = $newtab;

$json = json_encode($array, JSON_PRETTY_PRINT);
echo $json;


file_put_contents("../data/compte.json", $json);

header("Location: id.php");    
?>