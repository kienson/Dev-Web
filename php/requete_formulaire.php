<?php


   // Vérifier si le formulaire est envoyer 
   if ( isset( $_POST['envoie'] ) ) {

    
     $nom = $_POST['nom']; 
     $prenom = $_POST['prenom']; 
     $sexe = $_POST['sexe'];
     $date = $_POST['Date'];
     $email = $_POST['email'];
     $adresse = $_POST['adresse'];
     $requete = $_POST['requete'];

     // afficher le résultat du formulaire

     echo '<h1>Requête du client ' .$nom. ' ' .$prenom. ' pour le Web Master</h1>'; 
      echo 'Information du client : <br>';
     echo 'Nom : ' . $nom . '<br> Prenom : ' . $prenom . '<br> Sexe : ' . $sexe . '<br> Date de Naissance : ' . $date . '<br> Email : ' . $email . '<br> Adresse : ' . $adresse; 
     echo '<br>La requête du client est la suivante : ' .$requete ;
     exit;
    

    }