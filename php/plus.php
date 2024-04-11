<?php

session_start();

$nomm=$_GET['nom'];

$xml = simplexml_load_file('../data/Stock.xml');





    foreach($xml as $t):
        foreach($t->carte as $w) :
            if($nomm==$w->nom){
                $ref=(string)$w->reference;
                $stock=(string)$w->quantité;
            }
        endforeach;
    endforeach;

    foreach($_SESSION['tab'] as $v) :
        foreach($xml as $t):
            foreach($t->carte as $w) :
                if($v[0]==$w->reference && $w->quantité>0){
                  $w->quantité=$w->quantité-1;
      
            }
            endforeach;
        endforeach;
      endforeach;
    $xml->asXML('../data/Stock.xml');

    $nbr = count($_SESSION['tab']);
    
    for($i=0;$i<$nbr;$i++){
        if ($_SESSION['tab'][$i][0] == $ref && $stock>0 ){
            $_SESSION['tab'][$i][1]=$_SESSION['tab'][$i][1]+1;
            if($_SESSION['tab'][$i][1]==$stock){
                $stat = 'ok';
            }
            else{
                $stat = 'top';
            }
            break;
        }
        else {
            $stat = 'ok';
        }
    }
    


echo json_encode(['stat' => $stat]);
?>