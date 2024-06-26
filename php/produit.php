<!DOCTYPE html>
<html>

<head>
    <title>Nos produits</title>
    <meta charset="utf-8">
    <link href="../css/design.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php include("start.php"); ?>
<?php include("header.php");?>
    <?php include("menu_left.php");?>
    <div id="droite">
        <?php

        if ($_GET["produit"] == 1) {
            $type = "01";
        } elseif ($_GET["produit"] == 2) {
            $type = "02";
        } elseif ($_GET["produit"] == 3) {
            $type = "03";
        } elseif ($_GET["produit"] == 4) {
            $type = "04";
        } elseif ($_GET["produit"] == 5) {
            $type = "05";
        }

        $result = $conn->query("SELECT * FROM Cartes WHERE categorie_id = $type");

        while ($v = $result->fetch_assoc()) :
        ?>

            <div class="block">

                <div class="top">
                    <ul>
                        <li><a href="#"><i class="" aria-hidden=""></i></a></li>
                        <li><span class="converse"><?php echo $v['nom']; ?></span></li>
                        <li><a href="#"><i class="" aria-hidden=""></i>
                            </a></li>
                    </ul>
                </div>

                <div class="middle">
                    <img src="<?php echo $v['image']; ?>" class="Zimg" alt="Carte pokemon <?php echo $v['nom']; ?>" />
                </div>

                <div class="bottom">
                    <div class="info">Edition <?php echo $v['edition'] ?></div>
                    <div class="style"> Ref: <?php echo $v['reference']; ?></div>
                    <div class="price"><?php echo $v['prix'] ?> € (HT) </div>
                    <div id="selec" class="<?php echo $v['reference']; ?>">
                        <?php
                        if ($v['quantite'] == 0) {
                            echo '<div><p>Stock épuisé</p></div>';
                        } else {
                            echo '<div id="moins" onclick="reduire(this)">-</div>
                            <button id="ajtpan">Ajouter au panier</button>
                            <div id="quant" class=' . $v['reference'] . '>0</div>
                            <div id="plus" onclick="augmenter(this, ' . $v['quantite'] . ')">+</div>';
                        }
                        ?>
                    </div>
                    <div class="affStock" id="<?php echo $v['quantite']; ?>">Disponibilités</div>
                </div>

            </div>
        <?php endwhile; ?>
    </div>
    <?php include("footer.html");?>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="../js/ajoutPan.js"></script>
<script src="../js/ajouterPanier.js"></script>
</body>
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
</div>


</html>

