<?php

session_start();   

$xml = simplexml_load_file('../data/Stock.xml');
foreach($_SESSION['tab'] as $v) :
    foreach($xml as $t):
        foreach($t->carte as $w) :
            if($v[0]==$w->reference){
              $w->quantité=$w->quantité+$v[1];
  
        }
        endforeach;
    endforeach;
  endforeach;
$xml->asXML('../data/Stock.xml');

unset($_SESSION['tab']);

$stat='ok';
echo json_encode(['stat' => $stat]);

?>