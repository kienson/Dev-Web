<!DOCTYPE html>
<html>

<head>
  <title>Plan du site</title>
  <meta charset="utf-8">
  <link href="../css/design.css" rel="stylesheet" type="text/css">

</head>

<body>

<?php
    session_start();
    ?>

<?php include("header.php");?>
  <?php include("menu_left.php");?>
    <div id="droite">
        <div>
          <br>
            <a href="produit.php?produit=1" style="text-decoration: underline;">Cartes PUI</a>
            <p>Gogeta SSJ Blue</p>
            <p>Son Gohan SSJ (Futur)</p>
            <p>Son Gohan (enfant) et Piccolo</p>
            <p>Gamma 1</p>
            <p>Cooler (forme finale)</p>
            <p>Super Vegeta</p>
            <br><br>
            <a href="produit.php?produit=2" style="text-decoration: underline;">Cartes AGI</a>
            <p>Bardock</p>
            <p>Oméga Shenron</p>
            <p>Gamma 2</p>
            <p>Vegetto SSJ Blue</p>
            <p>Ginyu</p>
            <p>Vegeta SSJ4</p>
            <br><br>
            <a href="produit.php?produit=3" style="text-decoration: underline;">Cartes END</a>
            <p>Buu (Gotenks absorbé)</p>
            <p>Gogeta SSJ4</p>
            <p>Son Gohan (ultime)</p>
            <p>Son Goku SSJ God</p>
            <p>Broly SSJ (Full Power)</p>
            <p>Métal Cooler</p>
            <br><br>
            <a href="produit.php?produit=4" style="text-decoration: underline;">Cartes INT</a>
            <p>Black Goku SSJ Rosé</p>
            <p>Buu (Gohan absorbé)</p>
            <p>Son Goku SSJ4 (Full Power)</p>
            <p>Piccolo Junior</p>
            <p>Zamasu (fusionné)</p>
            <p>Majin Vegeta</p>
            <br><br>
            <a href="produit.php?produit=5" style="text-decoration: underline;">Cartes TEC</a>
            <p>Black Goku</p>
            <p>Son Goku SSJ</p>
            <p>Piccolo (puissance éveillée)</p>
            <p>Son Goku SSJ God et Vegeta SSJ God</p>
            <p>Super Gogeta</p>
            <p>Son Gohan (Adolescent) SSJ2</p>
        </div>
  </div>
  <?php include("footer.html");?>
</body>
</html>