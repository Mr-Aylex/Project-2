<?php session_start();?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

        <link rel="stylesheet" href="../../CSS/formulaire.css">
    <title></title>

  </head>
  <body class="fond">
    <?php include "../header.php" ?>

    <form class="box" action="..\traitement\traitement_mot_de_passe_oublie.php" method="post">
      <h1>Mot de passe oublié</h1>

      <label class="label" >Entrez votre adresse mail : </label>
      <div class="inputbox">

        <input  type="Mail" name="mail" placeholder="Mail" required=""/>

      </div>

      <div>
        <input type="submit" value="Envoyer"/>
      </div>

    </form>

  </body>
</html>
