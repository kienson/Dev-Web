  <header>
  
  </div>
    <div id="navi">
      <h2><img src="../img/logo.webp" width="260px"></h2>
        <nav id="test">
          <li><a href="accueil.php">Accueil</a></li>
          <?php
          foreach ($categories as $categorie) {
              echo "<li><a href=\"produit.php?produit=" . $categorie["id"] . "\">" . $categorie["nom"] . "</a></li>";
          }
          ?>
          <li><a href="Contact.php">Contact</a></li>
        </nav>
    </div>
    <div id="headright">
      <?php
        if ($_SESSION['ok']==0){  
          echo "<a href=\"id.php\">Connexion</a>";
        }
        else {
          echo "<a>Bonjour ".$_SESSION['nom']."</a>";
          echo "<a href=\"../index.php\">Se déconnecter</a>";
        }
      ?>
      <a href="panier.php">Panier</a>
    </div>

  </header>