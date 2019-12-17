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
  <?php include "../header.php" ?>
  <body class="fond">
    <form class="box" action="../traitement/traitement_modification_adresse.php" method="post">
      <h1 style="color:#1B9CFC;">Modification</h1>

      <label style="color:#1B9CFC;" >Nouvelle classe : </label>
      <div class="inputbox">
        <div class="select">

          <select class="custum-select" name="classe">
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
      <div>
        <input type="submit" value="modification"/>
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
  <?php include "/Projet_Site/Project-2/conbusi/page/footer.php" ?>
</html>
