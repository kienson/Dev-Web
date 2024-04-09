<!DOCTYPE html>
<html>

<head>
    <title>Nos produits</title>
    <meta charset="utf-8">
    <link href="../css/teste.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php include("header.php");?>
    <?php include("menu_left.php");?>
        <div id="droite">
            <?php

        if ($_GET["produit"] == 1) {
        $type="PUI";
        }
        else if ($_GET["produit"] == 2) {
        $type="AGI";
        }
        else if ($_GET["produit"] == 3) {
        $type="END";
        }
        else if ($_GET["produit"] == 4) {
            $type="INT";
        }
        else if ($_GET["produit"] == 5) {
            $type="TEC";
        }

        $xml = simplexml_load_file('../data/Stock.xml');

        foreach ($xml->$type->carte as $v):
        ?>



            <div class="block">

                <div class="top">
                    <ul>
                        <li><a href="#"><i class="" aria-hidden=""></i></a></li>
                        <li><span class="converse"><?php echo $v->nom; ?></span></li>
                        <li><a href="#"><i class="" aria-hidden=""></i>
                            </a></li>
                    </ul>
                </div>

                <div class="middle">
                    <img src="<?php echo $v->image; ?>" class="Zimg" alt="Carte pokemon <?php echo $v->nom; ?>" />
                </div>

                <div class="bottom">
                    <div class="info">Edition <?php echo $v->edition?></div>
                    <div class="style">Type: Feu / Ref: <?php echo $v->reference; ?></div>
                    <div class="price"><?php echo $v->prix?> € (HT) </div>
                    <div id="selec" class=<?php echo $v->reference;?>>
                        <?php
                        if ($v->quantité == 0){
                            echo '<div><p>Stock épuisé</p></div>';
                        }
                        else{
                            echo '<div id="moins" onclick="reduire(this)">-</div>
                            <button id ="ajtpan">Ajouter au panier</button>
                            <div id ="quant" class=',$v->reference,'>0</div>
                            <div id="plus" onclick="augmenter(this,',$v->quantité,')">+</div>';
                        }
                        ?>
                    </div>
                    <div class ="affStock" id="<?php echo $v->quantité;?>">Stock</div>
                </div>

            </div>
            <?php endforeach; ?>
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

