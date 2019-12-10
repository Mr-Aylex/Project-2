<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php $mon_compte=2 ?>
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
    <meta charset="utf-8">

    <link rel="stylesheet" href="../../CSS/formulaire.css">

    <title></title>
<style>




.box{
  margin-top:400px;
  margin-left:600px ;
  transform:translate(-50%,-50%);
  width:400px;
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
h1{
  margin:0 0 30px;
  padding:0;
  color:#1B9CFC;
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
