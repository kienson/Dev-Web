<?php

include("start.php");

$ref = $_GET['ref'];
$quant = $_GET['quant'];


$sql = "SELECT id, quantite FROM Cartes WHERE reference = '" . $ref . "'";
$result = $conn->query($sql);
$idstock = $result->fetch_assoc();


if ($quant != 0 && $quant<=$idstock['quantite']) {
    // Mettre à jour la quantité dans la base de données SQL
    $sql = "UPDATE Cartes SET quantite = quantite - $quant WHERE reference = $ref";
    $conn->query($sql);

    $sql = "INSERT INTO Paniers VALUES (DEFAULT,'1','".$idstock['id']."','".$quant."')";
    $conn->query($sql);
}

?>
