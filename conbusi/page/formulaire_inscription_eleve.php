<!DOCTYPE html>
<?php session_start() ?>
<?php if (empty($_SESSION)) {
  header("Location: formulaire_connexion.php");
} else {?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" href="../CSS/formulaire2.css">
    <title>Inscription</title>
  </head>
  <body class="fond">
    <?php include "header.php" ?>
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
                  echo "<option value=". $value['nom_classe'] . ">".$value['nom_classe']."</option>";
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
  </body>
</html>
<?php } ?>
