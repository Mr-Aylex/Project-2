<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <?php $mon_compte=0 ?>
  <?php include "header.php" ?>
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
  <script src="https://kit.fontawesome.com/e1924a5c8f.js" crossorigin="anonymous"></script>
  <!--<link rel="stylesheet" href="..\css\formulaire_inscription_parent.css">
  <link rel="stylesheet" href="..\css\formulaire_inscription.css">-->
</head>
<style media="screen">
.fond{
  background-image: url(../img/banner/dev3.jpg);
  height: 700px;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;

}

.box{
  padding-top: 200px;
  width:900px;
  height: 550px;
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
<body class="fond">

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
<?php //include "footer.php" ?>
</html>
