<div id="gauche">
        <details>
        <summary></summary>
            <nav class="menu">
                <?php
                    function lire($csv){
                        $file = fopen($csv, 'r');
                        while (!feof($file) ) {
                            $line[] = fgetcsv($file, 1024);
                        }
                        fclose($file);
                        return $line;
                    }
                    $csv = "../data/categorie.csv";
                    $tab = lire($csv);
                            echo "<div class='haut_bas'><a href=\"accueil.php\">Accueil</a></div>";
                    foreach ($tab as list($a, $b, $c, $d)) {
                        echo "<div class='haut_bas'><a  href=\"",$a,"\">",$b,"</a></div>";
                    }
                    echo "<div class='haut_bas'><a href=\"Contact.php\">Contact</a></div>";
                ?>
            </nav>  
        </details>
</div>