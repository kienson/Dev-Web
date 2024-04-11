<?php

session_start();


if($_SESSION['ok']==1){
    $stat='ok';
}
else{
    $stat='pas marche';
}

echo json_encode(['stat' => $stat]);

?>