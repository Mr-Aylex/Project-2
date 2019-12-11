<?php session_start();
if (empty($_SESSION)) {
header("Location: formulaire_connexion.php");
  }
  else {
    ?>
<!DOCTYPE html>
<?php $mon_compte=0 ?>
<html lang="en" dir="ltr">
  <head>
    <script src="https://kit.fontawesome.com/e1924a5c8f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/formulaire_inscription_eleve.css">
    <?php include "header.php";?>

    <meta charset="utf-8">

    <style>


    .box{
      margin-top:500px;
      margin-left:600px ;
      transform:translate(-50%,-50%);
      width:400px;
      padding:10px;
      padding:10px 20px;
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
    <title>Inscription</title>
  </head>

  <body class="fond">
    <form class="box" action="..\traitement\traitement_inscription_eleve.php" method="post">
      <div class="g">

        <label class="label" for="">Nom</label>
        <div class="inputbox">
          <input type="text" name="nom" placeholder="Nom"/>
        </div>
        <label class="label" for="">Prenom</label>
        <div class="inputbox">

          <input type="text" name="prenom" placeholder="Prenom"/>
        </div>
        <label class="label" for="" >Age</label>
        <div class="inputbox">
          <input type="number" name="age" placeholder="Age"/>
        </div>
      </div>
      <div class="d">
        <label class="label" for="">Classe</label>
        <div class="select">

          <select class="" name="classe">
            <?php try
            {
              $bdd = new PDO('mysql:host=localhost;dbname=projet_site_lycee;charset=utf8','root','');
            }
            catch(Exception $e)
            {
              die('Erreur:'.$e->getMessage());
            }
            $reponse=$bdd->query('SELECT nom_classe FROM classe');
            $donne = $reponse->fetchall();

            foreach ($donne as $key => $value) {
                $trans=array(" "=>"_");
                  echo "<option value=". strtr($value['nom_classe'],$trans) . ">".$value['nom_classe']."</option>";
            } ?>
          </select>
        </div>
          </div>

        </div>
      </div>
      <div class="">
        <input type="submit" value="Inscrire"/>
      </div>
    </form>

    <?php include "footer.php" ?>
  </body>
</html>
<?php } ?>
