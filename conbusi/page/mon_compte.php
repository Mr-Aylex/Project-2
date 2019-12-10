<?php $mon_compte=1 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include "header.php" ?>
    <meta charset="utf-8">
    <title>Mon Compte</title>
    <link rel="stylesheet" href="../css/mon_compte.css">
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
    $req = $bdd->prepare('SELECT * FROM profil_parent WHERE id=:id');
    $req->execute(array('id'=>$_SESSION['id']));
    $donne=$req->fetch();
     ?>
     <div class="box">
       <div class="element">
         <h4>Nom</h4>
         <h6><?php echo $donne['nom'] ?></h6>
       </div>
       <div class="element">
         <h4>Prenom</h4>
         <h6><?php echo $donne['prenom'] ?></h6>
       </div>
       <div class="element">
         <h4>Adresse Mail</h4>
         <h6><?php echo $donne['mail'] ?></h6>
       </div>
       <div class="element">
         <h4>Adresse</h4>
         <h6><?php echo $donne['adresse'] ?></h6>
       </div>
       <div class="element">
         <h4>numéro de téléphone</h4>
         <h6><?php echo $donne['numero'] ?></h6>
       </div>
       <div class="element">
         <h4>Métier</h4>
         <h6><?php echo $donne['profession'] ?></h6>
       </div>
     </div>
  </body>
</html>