<!DOCTYPE html>
<html>

<head>
  <title>Ticket</title>
  <meta charset="utf-8">
  <link href="../css/teste.css" rel="stylesheet" type="text/css">
  <style>
    #milieu{
      flex-direction:column;
    }
  </style>

</head>

<body>

<?php
session_start();
?>

<?php include("header.php");?>

  <div id="milieu">

    <div id="votre">
      <p>Votre commande :</p>
    </div>

    <div id="ticket">
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
$xml = simplexml_load_file('../data/Stock.xml');
$total=0;
foreach($_SESSION['tab'] as $v) :
  foreach($xml as $t):
      foreach($t->carte as $w) :
          if($v[0]==$w->reference){
            echo '
            <tr>
              <td>'.$w->nom.'</td>
              <td>'.$w->reference.'</td>
              <td>'.$w->prix.'€</td>
              <td>',($w->prix)*1.2,'€</td>
              <td>'.$v[1].'</td>
              <td>',$w->prix*$v[1]*1.2,'€</td>
            </tr>';
            $total=$total+$w->prix*$v[1];

      }
      endforeach;
  endforeach;
endforeach;
echo '<tr><td></td><td></td><td></td><td></td><td>Total(HT) : '.$total.'€</td><td>Total(TTC) : '.$total*1.2.'€</td></tr>';
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