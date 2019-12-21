
<!DOCTYPE html>
<?php session_start() ?>
<?php $mon_compte=2 ?>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="../../css/formulaire_connexion.css">
    <meta charset="utf-8">
<script src="https://kit.fontawesome.com/e1924a5c8f.js" crossorigin="anonymous"></script>

    <title>Modification numéro</title>
    <!-- header -->
    <?php include "../header.php" ?>
  </head>
  <!-- début de la page -->
  <body class="fond">
    <form class="box" action="../../traitement/traitement_modification_numero.php" method="post">
      <h1 style="color:#1B9CFC;">Modification</h1>

      <label style="color:#1B9CFC;" >Nouveau numéro : </label>
      <div class="inputbox">

        <input  type="text" name="numero" placeholder="Nouveau Numéro" required=""/>

      </div>
      <div>
        <input type="submit" value="modification"/>
      </div>
      <div>
        <a style="color:#1B9CFC;"href="mot_de_passe_oublie.php">Mot de passe oublié?</a>

        <a style="color:#1B9CFC;" href="formulaire_inscription_parent.php">Inscription</a>
      </div>
    </form>
    <div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">

                </div>
            </div>
        </div>
    </div>


  </body>
  <!-- fooer -->
  <?php include "../footer.php" ?>
</html>
