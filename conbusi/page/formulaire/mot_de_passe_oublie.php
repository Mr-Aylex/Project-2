<!DOCTYPE html>
<?php session_start();?>
<?php $mon_compte=0 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

        <link rel="stylesheet" href="../../CSS/formulaire.css">
    <title>Mot de passe oublié</title>
<style>
.fond{
  font-family: sans-serif;
  background-image:url(../../img/banner/mot_de_passe.jpg);
  height: 750px;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
}


.box{
  margin: 250px auto;
  margin-top:400px;
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

  </head>
  <body class="fond">
    <?php include "../header.php" ?>

    <form class="box" action="..\..\traitement\traitement_mot_de_passe_oublie.php" method="post">
      <h1 style="color:#1B9CFC;">Mot de passe oublié</h1>

      <label style="color:#1B9CFC;" >Entrez votre adresse mail : </label>
      <div class="inputbox">

        <input  type="Mail" name="mail" placeholder="Mail" required=""/>

      </div>

      <div>
        <input type="submit" value="Envoyer"/>
      </div>

    </form>

  </body>
</html>
