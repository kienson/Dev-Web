<?php
    session_start();
    include 'connexion.php';
    $sql_categories = "SELECT * FROM Categories";
    $result_categories = $conn->query($sql_categories);

    $categories = [];
    if ($result_categories->num_rows > 0) {
        while ($row = $result_categories->fetch_assoc()) {
            $categories[] = $row;
        }
    }
?>