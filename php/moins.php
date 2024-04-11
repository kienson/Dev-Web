<?php

session_start();

$nomm=$_GET['nom'];

$xml = simplexml_load_file('../data/Stock.xml');


$info=1;

    foreach($xml as $t):
        foreach($t->carte as $w) :
            if($nomm==$w->nom){
                $ref=(string)$w->reference;
            }
        endforeach;
    endforeach;

    foreach($_SESSION['tab'] as $v) :
        foreach($xml as $t):
            foreach($t->carte as $w) :
                if($v[0]==$w->reference && $v[1]>0){
                  $w->quantité=$w->quantité+1;
      
            }
            endforeach;
        endforeach;
      endforeach;
    $xml->asXML('../data/Stock.xml');


    $nbr = count($_SESSION['tab']);
    for($i=0;$i<$nbr;$i++){
        if ($_SESSION['tab'][$i][0] == $ref && $_SESSION['tab'][$i][1]>0){
            $_SESSION['tab'][$i][1]=$_SESSION['tab'][$i][1]-1;
            if($_SESSION['tab'][$i][1]==0){
                for($j=$i;$j<$nbr-1;$j++){
                    $_SESSION['tab'][$j]=$_SESSION['tab'][$j+1];
                }
                unset($_SESSION['tab'][$nbr-1]);
                $stat = 'ok';
                break;
            }
            else{
                $stat = 'top';
            }
        }
    }
    


echo json_encode(['stat' => $stat,'info'=> $info]);
?>