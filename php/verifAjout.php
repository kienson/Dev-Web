<?php

session_start();   

$ref=$_GET['ref'];
$quant=$_GET['quant'];

$tab[0] = $ref;
$tab[1] = $quant;

if ($quant != 0){
    $xml = simplexml_load_file('../data/Stock.xml');
            foreach($xml as $t):
                foreach($t->carte as $w) :
                    if($tab[0]==$w->reference){
                        $w->quantité=$w->quantité-$tab[1];
                    }
                endforeach;
            endforeach;
        $xml->asXML('../data/Stock.xml');
    $estvide=empty($_SESSION['tab']);
    if($estvide != 0){
        $_SESSION['tab'][0]=$tab;
    }
    else{
        $nbr = count($_SESSION['tab']);
        for($i=0;$i<$nbr;$i++){
            if ($_SESSION['tab'][$i][0] == $tab[0]){
                $tab[1]=$tab[1]+$_SESSION['tab'][$i][1];
                unset($_SESSION['tab'][$i]);
            }
        }
        $_SESSION['tab'][$nbr]=$tab;
    }
}


$stat=$ref;

echo json_encode(['stat' => $stat]);

?>