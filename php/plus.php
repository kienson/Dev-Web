<?php
include("start.php");

$nomm = (string)$_GET['nom'];

$sql = "SELECT id, quantite FROM Cartes WHERE nom = '" . $nomm . "'";
$result = $conn->query($sql);
$idstock = $result->fetch_assoc();

$sql = "SELECT quantite FROM Paniers WHERE idArticle = '" . $idstock['id'] . "'";
$result = $conn->query($sql);
$quantite = $result->fetch_assoc()['quantite'];

if ($idstock['quantite'] == 0) {
    echo('Plus de stock disponible');
}
else {
    $sql = "UPDATE Paniers SET quantite = quantite + 1 WHERE idArticle = '" . $idstock['id'] . "'";
    $conn->query($sql);
    $sql = "UPDATE Cartes SET quantite = quantite - 1 WHERE id = '" .$idstock['id']."'";
    $conn->query($sql);
}
?>
