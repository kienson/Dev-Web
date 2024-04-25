<!DOCTYPE html>
<html>

<head>
  <title>Ticket</title>
  <meta charset="utf-8">
  <link href="../css/design.css" rel="stylesheet" type="text/css">
  <style>
    #milieu{
      flex-direction:column;
    }
  </style>

</head>

<body>

<?php
include("start.php");

$total = 0;
?>

<?php include("header.php");?>

  <div id="po">

    <div id="copo">
      <p>Votre commande :</p>
    </div>

    <div id="tick">
    <table>
    <thead>
        <tr>
            <th>Produit</th>
            <th>Référence</th>
            <th>Prix(HT)</th>
            <th>Prix(TTC)</th>
            <th>Quantité</th>
            <th>Prix total</th>
        </tr>
      </thead>
      <tbody>
      <?php
        $result = $conn->query("SELECT * FROM Paniers");
        while ($v = $result->fetch_assoc()) :
            $sql = "SELECT * FROM Cartes, Paniers WHERE Cartes.id = '".$v['idArticle']."'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '
                    <tr>
                        <td>' . $row["nom"] . '</td>
                        <td>' . $row["reference"] . '</td>
                        <td>' . $row["prix"] . '€</td>
                        <td>' . ($row["prix"] * 1.2) . '€</td>
                        <td>' . $v['quantite'] . '</td>
                        <td>' . ($row["prix"] * $v['quantite'] * 1.2) . '€</td>
                    </tr>';
                    $total = $total + $row["prix"] * $v['quantite'];
                }
            }
        endwhile;
        echo '<tr><td></td><td></td><td></td><td></td><td>Total(HT) : ' . $total . '€</td><td>Total(TTC) : ' . $total * 1.2 . '€</td></tr>';
        unset($_SESSION['tab']);

      ?>
      </tbody>
    </table>
    </div>
    <div id="retour">
      <a href="accueil.php">Retour à l'accueil</a>
    </div>

  </div>


  <?php include("footer.html");?>

</body>



</html>
