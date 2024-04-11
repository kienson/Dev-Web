<!DOCTYPE html>
<html>

<head>
    <title>Connexion</title>
    <meta charset="utf-8">
    <link href="../css/design.css" rel="stylesheet" type="text/css">

</head>


<body>

    <?php
    session_start();
    ?>
    <?php include("header.php");?>
    <?php include("menu_left.php");?>
        <div>
                    <form action="verifid.php" method="post" id="form2">
                        <fieldset>
                            <legend>Connexion</legend><BR>
                            <?php

                            if ($_SESSION['test'] == 'faux'){
                                echo "<p style='color:red;'>Identifiants incorrects</p><br>";
                            }
                            $_SESSION['test']='';

                        ?>

                            <label for='ide'>Identifiant</label>
                            <input type='text' name='ide' id='ide' required><BR></BR>
                            <label for='mdp'>Mot de passe</label>
                            <input type='password' name='mdp' id='mdp' required><BR></BR>
                            <input type="submit" value="Valider" id="valid"><BR></BR>
                        </fieldset>
                        <br>
                    </form>
                    <form action="verifinsc.php" method="post" id="form3">
                        <fieldset>
                            <legend>Inscription</legend><BR>
                            <?php
                            
                            if ($_SESSION['test']=='non'){
                                echo "<p style='color:red;'>Identifiant déjà utilisé</p><br>";
                            }
                            $_SESSION['test']='';
                            
                            ?>
                            <label for='ide'>Identifiant</label>
                            <input type='text' name='ide' id='ide' required><BR></BR>
                            <label for='mdp'>Mot de passe</label>
                            <input type='password' name='mdp' id='mdp' required><BR></BR>
                            <label for='nom'>Nom</label>
                            <input type='text' name='nom' id='nom' required><BR></BR>
                            <label for='pre'>Prénom</label>
                            <input type='text' name='pre' id='pre' required><BR></BR>
                            <label for='mail'>Adresse mail</label>
                            <input type='email' name='mail' id='mail' required><BR></BR>
                            <input type="submit" value="Valider" id="validd">
                        </fieldset>
                    </form>
        </div>
    <?php include("footer.html");?>

</body>



</html>