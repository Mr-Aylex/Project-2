<?php session_start();?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

        <link rel="stylesheet" href="../CSS/formulaire.css">
    <title></title>

  </head>
  <body class="fond">
    <?php include "header.php" ?>

    <form class="box" action="..\traitement\traitement_confirmation.php" method="post">
      <h1>Réinitialiser mot de passe</h1>

      <label class="label" >Entrez votre nouveau mot de passe : </label>
      <div class="inputbox">

        <input  type="Mail" name="mail" placeholder="Mail" required=""/>

      </div>

      <label class="label">Confirmation mot de passe :</label>
      <div class="inputbox" >

        <input type="password" name="mot_de_passe" placeholder="Mot de passe" required=""/>

      </div>

      <div>
        <input type="submit" value="Envoyer"/>
      </div>
    </form>

  </body>
</html>
