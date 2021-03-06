<?php session_start();
if (empty($_SESSION)) {
header("Location: formulaire_connexion.php");
  }
  else {
    ?>
    <!-- si la session est vide alors on redirige vers le formulaire de connexion -->
<!DOCTYPE html>
<?php $mon_compte=0 ?>
<html lang="en" dir="ltr">
  <head>
    <script src="https://kit.fontawesome.com/e1924a5c8f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/formulaire_inscription_eleve.css">
    <!-- header -->
    <?php include "../header.php";?>
    <meta charset="utf-8">

    <title>Inscription</title>
  </head>
<!-- début de la page  -->
<body class="fond">
  <!-- début de la page -->
  <form class="box" action="..\..\traitement\traitement_inscription_eleve.php" method="post">
    <div class="g">

      <label class="label" for="">Nom</label>
      <div class="inputbox">
        <input type="text" name="nom" placeholder="Nom" required=""/>
      </div>
      <label class="label" for="">Prenom</label>
      <div class="inputbox">

        <input type="text" name="prenom" placeholder="Prenom" required=""/>
      </div>
      <label class="label" for="" >Age</label>
      <div class="inputbox">
        <input type="number" name="age" placeholder="Age" required=""/>
      </div>
    </div>
    <div class="d">
      <label class="label" for="">Classe</label>
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
            $trans=array(" "=>"_");// on remplace les espaces par des _ pour pouvoir transmettre la chaine de caractere sans qu'elle soit coupé
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
<!-- footer  -->
<?php include "../footer.php" ?>
</body>
</html>
<?php } ?>
