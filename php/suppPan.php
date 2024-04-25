<?php

include("start.php");


$sql = "SELECT idArticle, quantite FROM Paniers";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()):
    $quantite = $row['quantite'];
    $sql = "UPDATE Cartes SET quantite = quantite +  $quantite  WHERE id =  '".$row['idArticle']."' ";
    $conn->query($sql);
endwhile;

$sql = "DELETE FROM Paniers";
$conn->query($sql);

?>
