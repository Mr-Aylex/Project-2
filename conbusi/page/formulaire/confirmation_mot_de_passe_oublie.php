<?php $mon_compte=0 ?>
<?php session_start();?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

        <link rel="stylesheet" href="../../CSS/formulaire.css">
    <title>Mot de passe oublié</title>
    <!-- Le style est ici car dans un fichier annex ça fonctionne pas  -->
    <style>
    .fond{
      font-family: sans-serif;
      background-image:url(../img/banner/password.jfif);
      height: 750px;
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center center;
    }


    .box{
      margin-left: 600px;
      margin-top:400px;
      transform:translate(-50%,-50%);
      width:400px;
      padding:20px;
      padding:20px 30px;
      background-color:rgba(0,0,0,.8);
      box-sizing:border-box;
      box-shadow: 0 15px 25px rgba(0,0,0,.5);
      border-radius: 10px;


    }


    h1{
      margin:0 0 30px;
      padding:0;
      text-align:center;
    }
    .box .inputbox{
      position: relative;
    }

    .box .inputbox input{
      width:100%;
      padding:20px 0;
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
      color: #ccc;
    }



    .box .inputbox label {
      position:absolute;
      top:0;
      left:0;
      font-size: 12px;
      color:#fff;
      pointer-events:none;
      transition:.5s;
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
    <!-- header -->
    <?php include "header.php" ?>
  </head>
  <!-- début de la page -->
  <body class="fond">

    <form class="box" action="..\traitement\traitement_confirmation_mot_de_passe.php" method="post">
      <h1 style="color:#1B9CFC;">Réinitialiser mot de passe</h1>

      <label class="label" style="color:#1B9CFC;" >Entrez votre nouveau mot de passe : </label>
      <div class="inputbox">

        <input  type="password" name="password" placeholder="Nouveau Mot de passe" required=""/>

      </div>

      <label class="label" style="color:#1B9CFC;">Confirmation mot de passe :</label>
      <div class="inputbox" >

        <input type="password" name="mot_de_passe" placeholder="Confirmation Mot de passe" required=""/>

      </div>

      <div>
        <input type="submit" value="Envoyer"/>
      </div>
    </form>

    <?php include "footer.php"  ?>
    <!-- footer -->
  </body>
</html>
