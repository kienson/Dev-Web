<?php
include("start.php");

$nomm = (string)$_GET['nom'];

$sql = "SELECT id FROM Cartes WHERE nom = '" . $nomm . "'";
$result = $conn->query($sql);
$id = $result->fetch_assoc()['id'];

$sql = "SELECT quantite FROM Paniers WHERE idArticle = '" . $id . "'";
$result = $conn->query($sql);
$quantite = $result->fetch_assoc()['quantite'];

if ($quantite == 1) {
    $sql = "DELETE FROM Paniers WHERE idArticle = '" . $id . "'";
    $conn->query($sql);
}
else {
    $sql = "UPDATE Paniers SET quantite = quantite - 1 WHERE idArticle = '" . $id . "'";
    $conn->query($sql);
    $sql = "UPDATE Cartes SET quantite = quantite + 1 WHERE id = '" .$id."'";
    $conn->query($sql);
}
?>
