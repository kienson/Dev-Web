<!DOCTYPE html>
<html>

<head>
  <title>RequêteF</title>
  <meta charset="utf-8">
  <link href="../css/design.css" rel="stylesheet" type="text/css">
</head>

<body>
  <?php
  if (isset($_POST['envoie'])) {
     
      $nom = $_POST['nom']; 
      $prenom = $_POST['prenom']; 
      $sexe = $_POST['sexe'];
      $date = $_POST['Date'];
      $email = $_POST['email'];
      $metier = $_POST['metier'];
      $requete = $_POST['requete'];

      
      echo '<div class="RequeteF">';
      echo '<h1>Requête du client ' . $nom . ' ' . $prenom . ' </h1>'; 
      echo '<div>Information du client :</div>';
      echo '<ul>';
      echo '<li><strong>Nom :</strong> ' . $nom . '</li>';
      echo '<li><strong>Prénom :</strong> ' . $prenom . '</li>';
      echo '<li><strong>Sexe :</strong> ' . $sexe . '</li>';
      echo '<li><strong>Date de Naissance :</strong> ' . $date . '</li>';
      echo '<li><strong>Email :</strong> ' . $email . '</li>';
      echo '<li><strong>Métier :</strong> ' . $metier . '</li>';
      echo '</ul>';
      echo '<div><strong>La requête du client est la suivante :</strong><br>' . $requete . '</div>';
      echo '</div>';
      exit;
  }
  ?>
</body>

</html>
