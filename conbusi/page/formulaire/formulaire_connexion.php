<!DOCTYPE html>
<?php session_start() ?>
<?php $mon_compte=2 ?>
<html lang="en" dir="ltr">
<head>
  <link rel="stylesheet" href="../../css/formulaire_connexion.css">
  <meta charset="utf-8">
  <script src="https://kit.fontawesome.com/e1924a5c8f.js" crossorigin="anonymous"></script>

  <title></title>
</head>
<!-- header -->
<?php include "../header.php" ?>
<body class="fond">
  <!-- début de la page -->
  <form class="box" action="../../traitement/traitement_connexion.php" method="post">
    <h1 style="color:#1B9CFC;">Connexion</h1>

    <label style="color:#1B9CFC;" >Entrez votre adresse mail : </label>
    <div class="inputbox">
      <input  type="Mail" name="mail" placeholder="Mail" required=""/>
    </div>
    <label  style="color:#1B9CFC;">Entrez votre mot de passe :</label>
    <div class="inputbox" >
      <input type="password" name="mot_de_passe" placeholder="Mot de passe" required=""/>
    </div>
    <div>
      <input type="submit" value="Connexion"/>
    </div>
    <div>
      <a style="color:#1B9CFC;"href="mot_de_passe_oublie.php">Mot de passe oublié?</a>
      <a style="color:#1B9CFC;" href="formulaire_inscription_parent.php">Inscription</a>
      <!-- lien de connexion et d'inscription -->
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
<?php include "../footer.php" ?>
<!-- footer -->
</html>
