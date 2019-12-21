<!DOCTYPE html>
<?php $mon_compte=0 ?>
<?php session_start() ?>
<!-- header -->
<?php include "../header.php" ?>
<?php $id=$_POST['id'] ?>
<!-- On recupere l'id de l'enfant choisis sur la page precédente -->
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="../../css/mon_compte.css">
    <meta charset="utf-8">
    <title>Profil</title>
  </head>
  <body class="fond">
    <?php
    try
    {
      $bdd = new PDO('mysql:host=localhost;dbname=projet_site_lycee;charset=utf8','root','');
    }
    catch(Exception $e)
    {
      die('Erreur:'.$e->getMessage());
    }
    $reponse = $bdd->prepare('SELECT * FROM profil_eleve WHERE id=:id');
    $reponse->execute(array('id'=>$_POST['id']));
    $donnee=$reponse->fetch();
    $trans=array("_"=>" ");// on remplace les _ par des espaces
    ?>
    <!-- début de la page -->
    <div class="box">
      <div class="element">
        <h4>Nom</h4>
        <h6 class="h6"><?php echo $donnee['nom'] ?></h6>
      </div>
      <div class="element">
        <h4>Prenom</h4>
        <h6 class="h6"><?php echo $donnee['prenom'] ?></h6>
      </div>
      <div class="element">
        <h4>Age</h4>
        <h6 class="h6"><?php echo $donnee['age'] ?></h6>
        <a href="/Projet_Site/Project-2/conbusi/page/modification_eleve/modification_age.php">Modifier</a>
        <!-- lien pour modifier -->
      </div>
      <div class="element">
        <h4>Classe</h4>
        <h6 class="h6"><?php echo strtr($donnee['classe'],$trans) ?></h6>
        <a href="/Projet_Site/Project-2/conbusi/page/modification_eleve/form_modif_classe.php">Modifier</a>
        <!-- lien pour modifier -->
      </div>
      <div class="">
        <!-- lien de retour sur la page du compte -->
        <a class="text"href="mon_compte.php">Retour</a>
      </div>
    </div>
  </body>
</html>
