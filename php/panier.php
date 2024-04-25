<!DOCTYPE html>
<html>

<head>
    <title>Votre panier</title>
    <meta charset="utf-8">
    <link href="../css/design.css" rel="stylesheet" type="text/css">

</head>

<body>

    <?php
    include("start.php");
    ?>
    <?php include("header.php");?>
    <?php include("menu_left.php");?>
    <div id="droite">
        <div id="milpan">
            <div id="panup">
                <?php 
                $total = 0;
                $iter = 0;
                $result = $conn->query("SELECT * FROM Paniers");
                
                while ($v = $result->fetch_assoc()) :
                    $col = $conn->query("SELECT * FROM Cartes WHERE Cartes.id = '".$v['idArticle']."'");
                    $row = $col->fetch_assoc();
                    $iter = $iter + 1;
                    $img = $row['image'];
                    $nom = $row['nom'];
                    $prix = $row['prix'];
                    $total += $prix * 1.2 * $v['quantite'];

                    echo '
                    <div class="entite">
                    <div class="im"><img style="height:80%;" src="'.$img.'"/></div>
                    <div class="nm"><p>'.$nom.'</p></div>
                    <div class="sk"><p>Quantité : </p><p>'.$v['quantite'].'</p></div>
                    <div class="sk"><p>Prix(TTC) : </p><p>'.($prix * 1.2 * $v['quantite']).'€</p></div>
                    <div class="controle">
                            <button class="moins" onclick="reduire(this, '.$row['reference'].')">-</button>
                            <button class="plus" onclick="augmenter(this, '.$row['reference'].')">+</button>
                    </div>
                    </div>';

                    endwhile;
                if ($iter == 0) {
                    echo "<div style='padding:20px; text-align:center;margin-right:10%;'><p>Votre panier est vide</p></div>";
                } 
                ?>
            </div>
            <?php 
            if ($iter!=0) {
                echo '
                <div id="pandown">
                    <button id="supp" onclick="viderPanier()">Vider le panier</button>
                    <div id="total"><p>Total(TTC) : '.$total.'€</p></div>
                    <button id="confAchat" onclick="confirmerPanier()">Confirmer le panier</button>
                </div>';
            }
            ?>
        </div>
    </div>

    <footer>
        <?php include("footer.html"); ?>
    </footer>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="../js/modifPan.js"></script>
<script type="text/javascript">
    function reduire(e){
    if (parseInt(e.parentNode.parentNode.children[2].children[1].innerHTML) > 0) {
        e.parentNode.parentNode.children[2].children[1].innerHTML=parseInt(e.parentNode.parentNode.children[2].children[1].innerHTML)-1;
    }
}

function augmenter(e){
        e.parentNode.parentNode.children[2].children[1].innerHTML=parseInt(e.parentNode.parentNode.children[2].children[1].innerHTML)+1;
}
</script>

</html>
