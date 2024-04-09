<!DOCTYPE html>
<html>

<head>
  <title>Contact</title>
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
    <form id="form" action="requete_formulaire.php" method="POST" target="_blank">

<fieldset>

    <legend>Information personelles</legend><br>

    <label for="nom">Nom</label>
    <input type="text" name="nom" id="nom" size="30%" required> <BR></BR>

    <label for="prenom">Prénom</label>
    <input type="text" name="prenom" id="prenom"  size="30%" required> <BR></BR>

    <form id="Sexe">
        <label>Sexe</label>
        <div id="SexeID">
        <input type="radio" name="sexe" value="Homme" required>Homme
        <input type="radio" name="sexe" value ="Femme"required>Femme
        </div>
      </form>

    <BR></BR>

    <label for="date">Date de naissance</label>
    <input type="date" name="Date" id="date" required><BR></BR>

    <label for="email">Email</label>
    <input type="email" name="email" id="email"  size="30%" required><BR></BR>


    <label for="adresse">Adresse</label>
    
    <div id="adresse">
    <textarea name="adresse" cols="35" rows="7" required></textarea>
      </div>
    <BR>

    <label for="requete">Demande</label>
    
    <div id="requete">
    <textarea name="requete" cols="35" rows="7" required></textarea>
      </div>
    <BR>
    
        <input type="submit" name="envoie" id="color" value="Envoyer" onclick="">
        <input type="reset" name="" id="color" value="Supprimer">
</form>
  </div>

        <?php include("footer.html");?>

</body>



</html>