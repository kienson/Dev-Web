<div id="gauche">
    <details>
        <summary></summary>
        <nav class="menu">
            <div class='haut_bas'><a href="accueil.php">Accueil</a></div>
            <?php
            foreach ($categories as $categorie) {
                echo "<div class='haut_bas'><a href=\"produit.php?produit=" . $categorie["id"] . "\">" . $categorie["nom"] . "</a></div>";
            }
            ?>
            <div class='haut_bas'><a href="Contact.php">Contact</a></div>
        </nav>
    </details>
</div>