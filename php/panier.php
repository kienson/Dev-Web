<!DOCTYPE html>
<html>

<head>
    <title>Votre panier</title>
    <meta charset="utf-8">
    <link href="../css/teste.css" rel="stylesheet" type="text/css">

</head>

<body>

    <?php
    session_start();
    ?>
<?php include("header.php");?>
    <?php include("menu_left.php");?>
        <div id="droite">
            <div id="milpan">
                <div id="panup">
                        <?php 
                        $xml = simplexml_load_file('../data/Stock.xml');
                        $total=0;
                        if (empty($_SESSION['tab'])==0){
                        foreach($_SESSION['tab'] as $v) :
                            foreach($xml as $t):
                                foreach($t->carte as $w) :
                                    if($v[0]==$w->reference){
                                        $img=$w->image;
                                        $nom=$w->nom;
                                        $prix=$w->prix;
                                        $total=$prix+$total;
                                }
                                endforeach;
                            endforeach;
                            echo 
                            '<div class="entite">
                                <div class="im"><img style="height:80%;" src="'.$img.'"/></div>
                                <div class="nm"><p>'.$nom.'</p></div>
                                <div class="sk"><p>Quantité : </p><p>'.$v[1].'</p></div>
                                <div class="sk"><p>Prix(TTC) : </p><p>'.$prix*1.2*$v[1].'€</p></div>
                                <div class="controle">
                                    <button class="moins" id="moins" onclick="reduire(this)">-</button>
                                    <button class="plus" id="plus" onclick="augmenter(this)">+</button>
                                </div>
                            </div>';
                            unset($img,$nom,$prix);
                        endforeach;}
                        else {
                            echo "<div style='padding:20px; text-align:center;'><p>Votre panier est vide</p></div>";
                        }
                        ?>
                </div>
                <?php 
                if (empty($_SESSION['tab'])==0){
                echo '
                <div id="pandown">
                    <button id="supp">Vider le panier</button>
                    <div id="total"><p>Total(TTC) : ',$total*1.2,'€</p></div>
                    <button id="confAchat">Confirmer le panier</button>
                </div>';}
                ?>
            </div>
        </div>
    <?php include("footer.html");?>
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