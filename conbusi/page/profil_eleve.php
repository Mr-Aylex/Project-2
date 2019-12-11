<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="../css/profil_eleve.css">
    <?php $mon_compte=0 ?>
    <?php include "header.php" ?>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="box">
      <?php
      try
      {
        $bdd = new PDO('mysql:host=localhost;dbname=projet_site_lycee;charset=utf8','root','');
      }
      catch(Exception $e)
      {
        die('Erreur:'.$e->getMessage());
      }
      $reponse = $bdd->prepare('SELECT * FROM profil_eleve WHERE id_parent=:id');
      $reponse->execute(array('id'=>$_SESSION['id']));
      $donnee=$reponse->fetchall();
      //var_dump($donnee);
      for ($i=0; $i != sizeof($donnee) ; $i++) {
        echo ;
      }
      ?>
      <div class="">

      </div>
    </div>
  </body>
</html>
