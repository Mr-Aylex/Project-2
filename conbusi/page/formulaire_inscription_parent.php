<!DOCTYPE html>
<?php $mon_compte=0 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!--  <link rel="stylesheet" href="../CSS/formulaire2.css">-->
    <link rel="stylesheet" href="../css/formulaire_inscription.css">
    <title>Inscription</title>
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
<link rel="stylesheet" href="../../CSS/formulaire.css">

    <style>

    .box{
      margin-top:150px;
      width:800px;
      padding:20px;
      padding:20px 30px;
      background-color:rgba(0,0,0,.8);
      box-sizing:border-box;
      box-shadow: 0 15px 25px rgba(0,0,0,.5);
      border-radius: 10px;


    }

    a{
    color:#1B9CFC;
    }

    .box .inputbox{
      position: relative;
    }

    .box .inputbox input{
      width:100%;
      padding:9px 0;
      font-size:12px ;
      color:white;
      letter-spacing: 1px ;
      margin-bottom: 30px;
      outline:none;
      background:transparent;
      border: 0;
      outline: 0;
      border-bottom: 1px solid white;
      font-size: 1.4rem;

    }



    .box .inputbox label {
      position:absolute;
      top:0;
      left:0;
      font-size: 9px;
      color:#1B9CFC;
      pointer-events:none;
      transition:.5s;
    }

    label{
      top:5px
      left:0;
      color:#1B9CFC;
      font-size: 18px;
    }

    .box input[type="submit"] {
      background: transparent;
      border :none;
      outline:none;
      color:white;
      background:#1B9CFC;
      padding:10px 20px;
      cursor:pointer;
      border-radius:5px ;
    }
    </style>
  </head>
  <body class="fond">
    <?php include "header.php" ?>

      <form class="box" action="../traitement/traitement_inscription_parent.php" method="post">

        <table>
        <h1 style="color:#1B9CFC;text-align:center;">Inscription</h1>
        <tr>
        <td>
        <label  style="color:#1B9CFC;text-align:center;">Nom</label>
        <div class="inputbox">
          <input type="text" name="nom" placeholder="Nom"/>
        </div>


<label style="color:#1B9CFC;text-align:center;">Prenom</label>
<div class="inputbox">

  <input type="text" name="prenom" placeholder="Prenom"/>
</div>



<label   style="color:#1B9CFC;text-align:center;">Mail</label>
<div class="inputbox">
  <input type="text" name="mail"  placeholder="Mail"value=""/>
</div>


<label  style="color:#1B9CFC;text-align:center;">Adresse</label>
<div class="inputbox">

  <input type="text" name="adresse" placeholder="Adresse">
</div>
</td>
<td >
    <label  style="color:#1B9CFC;margin-left:140px;">Profession</label>
    <div class="inputbox" style="margin-left:200px;">
      <input type="text" name="profession" placeholder="Profession"/>
    </div>


        <label  style="color:#1B9CFC;margin-left:140px;">Numéro de téléphone</label>
        <div class="inputbox" style="margin-left:200px;">
          <input type="text" name="numero" placeholder="Numéro"/>
        </div>



        <label  style="color:#1B9CFC;margin-left:110px;">Mot de passe</label>
        <div class="inputbox" style="margin-left:200px;">
          <input type="password" name="mdp" placeholder="Mot de passe"/>
        </div>



        <div class="inputbox" style="margin-left:200px;">
          <input type="submit" value="S'inscrire"/>
        </div>
</td>
</tr>
</table>


      </form>

  </body>
  <script src="../js/vendor/modernizr-3.5.0.min.js"></script>
  <script src="../js/vendor/jquery-1.12.4.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/isotope.pkgd.min.js"></script>
  <script src="../js/ajax-form.js"></script>
  <script src="../js/waypoints.min.js"></script>
  <script src="../js/jquery.counterup.min.js"></script>
  <script src="../js/imagesloaded.pkgd.min.js"></script>
  <script src="../js/scrollIt.js"></script>
  <script src="../js/jquery.scrollUp.min.js"></script>
  <script src="../js/wow.min.js"></script>
  <script src="../js/nice-select.min.js"></script>
  <script src="../js/jquery.slicknav.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/plugins.js"></script>
  <script src="../js/gijgo.min.js"></script>
  <script src="../js/slick.min.js"></script>
  <!--contact js-->
  <script src="../js/contact.js"></script>
  <script src="../js/jquery.ajaxchimp.min.js"></script>
  <script src="../js/jquery.form.js"></script>
  <script src="../js/jquery.validate.min.js"></script>
  <script src="../js/mail-script.js"></script>

  <script src="../js/main.js"></script>
</html>
