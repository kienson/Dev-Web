<header>

    
    </div>
    <div id="navi">
      <h2><img src="../img/logo.webp" width="260px"></h2>
      <nav id="test">
        <?php
        
        function read($csv){
            $file = fopen($csv, 'r');
            while (!feof($file) ) {
                $line[] = fgetcsv($file, 1024);
            }
            fclose($file);
            return $line;
        }

        $csv = "../data/categorie.csv";
        $tab = read($csv);
        
        echo "<li><a href=\"accueil.php\">Accueil</a></li>";
        foreach ($tab as list($a, $b, $c, $d)) {
            echo "<li><a href=\"",$a,"\">",$b,"</a></li>";
        }
        echo "<li><a href=\"Contact.php\">Contact</a></li>";

        ?>
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