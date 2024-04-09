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





//décode les données du fichier json
$json = file_get_contents('../data/compte.json');
$array = json_decode($json, true);

//créé le tableau contenant les données du nouveau compte
$newtab = array (
    "ide" => $ide,
    "mdp" => $mdp,
    "nom" => $nom,
    "pre" => $pre,
    "mail" => $mail
);

//rajoute le nouveau tableau dans la base de données déjà existante
$nbr = count($array);
$array[$nbr] = $newtab;

//encode les nouvelles données en json
$json = json_encode($array, JSON_PRETTY_PRINT);
echo $json;

//remplace les anciennes données du fichier json par les nouvelles données
file_put_contents("../data/compte.json", $json);

header("Location: id.php");    
?>