<?php

  $userNom = testDonnee($_POST["user-nom"]);
  $userPrenom = testDonnee($_POST["user-prenom"]);
  $userAdresse = testDonnee($_POST["user-adresse"]);
  $userCp = testDonnee($_POST["user-cp"]);
  $userVille = testDonnee($_POST["user-ville"]);
  $userPays = testDonnee($_POST["user-pays"]);
  $userTel = testDonnee($_POST["user-tel"]);
  $userMail = testDonnee($_POST["user-login"]);
  $userPass = testDonnee($_POST["user-password"]);
   
  $header = "Alain Ackerman <ne-pas-repondre@alainackerman.com>";
  $sujet = "Votre identifiant de connexion au site d’Alain Ackerman";
  $message = "Bonjour $userPrenom $userNom !
  
    Nous vous remercions d'avoir créé votre compte client et vous souhaitons la bienvenue sur le site d’Alain Ackerman !
    
    Vos données de connexion vous permettent d'accéder à l’intégralité du site. Vous pouvez à tout moment gérer les données de votre compte (https://alainackerman.com/account).
    
    Meilleures salutations
    L’équipe du site Alain Ackerman";

    function testDonnee($donnee){
      $donnees = trim($donnee); //supprime les espaces inutiles
      $donnees = stripslashes($donnee); //supprime les antislashs
      $donnees = htmlspecialchars($donnee); //echappe les caractères spéciaux
      return $donnees;
  }

  $mailParti = mail($userMail, $sujet, $message, $header);
  if ($mailParti){
    ?> Inscription terminée! <?php
  }
  
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>account-create--process.php</title>
  <style>code{background:#FF0}</style>
</head>
<body>
  <main>
    <p>Bien le bonjour, je suis le fichier <code>account-create--process.php</code> et voici les valeurs que je viens tout juste de recevoir par la méthode <code>POST</code>:</p>
    <ul>
      <li>Nom : <?php echo $userNom; ?></li>
      <li>Prénom : <?php echo $userPrenom; ?></li>
      <li>Adresse : <?php echo $userAdresse; ?></li>
      <li>Code postal : <?php echo $userCp; ?></li>
      <li>Ville : <?php echo $userVille; ?></li>
      <li>Pays : <?php echo $userPays; ?></li>
      <li>Téléphone : <?php echo $userTel; ?></li>
      <li>Adresse électronique : <?php echo $userMail; ?></li>
      <li>Mot de passe : <?php echo $userPass; ?></li>
    </ul>
  </main>
</body>
</html>