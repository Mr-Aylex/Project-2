<!DOCTYPE html>
<?php session_start() ?>
<?php $mon_compte=2 ?>
<html lang="en" dir="ltr">
  <head>
    <?php include "header.php" ?>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/themify-icons.css">
    <link rel="stylesheet" href="../css/nice-select.css">
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/gijgo.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/slick.css">
    <link rel="stylesheet" href="../css/slicknav.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/formulaire_connexion.css">
    <meta charset="utf-8">
<script src="https://kit.fontawesome.com/e1924a5c8f.js" crossorigin="anonymous"></script>

    <title></title>
  </head>
  <body class="fond">
    <form class="box" action="../traitement/traitement_connexion.php" method="post">
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
      </div>
    </form>





    <div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center">

Copyright &copy;<script>document.write(new Date().getFullYear());</script> Micromagic<i class="fa fa-heart-o" aria-hidden="true"></i><a href="index.php" target="_blank">Tous droits réservés</a>

                    </p>
                </div>
            </div>
        </div>
    </div>


  </body>
</html>
