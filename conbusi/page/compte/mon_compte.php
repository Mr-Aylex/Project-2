<?php session_start() ?>
<?php $mon_compte=1 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- header -->
    <?php include "../header.php" ?>
    <meta charset="utf-8">
    <title>Mon Compte</title>
    <link rel="stylesheet" href="../../css/mon_compte.css">
  </head>
  <body class="fond">
    <!-- si le compte est Admin -->
    <?php
    if ($_SESSION['id']==1){
      try
      {
        $bdd = new PDO('mysql:host=localhost;dbname=projet_site_lycee;charset=utf8','root','');
      }
      catch(Exception $e)
      {
        die('Erreur:'.$e->getMessage());
      }
      $req = $bdd->prepare('SELECT * FROM profil_parent');
      $req->execute(array('id'=>$_SESSION['id']));
      $donne=$req->fetchall();
      ?>
      <div class="box">
        <form class="" action="admin_parent.php" method="post">

          <select class="custum-select" name="id">
            <?php
            foreach ($donne as $key => $value) {
              echo "<option value=". $value['id']. ">".$value['nom']." ".$value['prenom']."</option>";
            } ?>
          </select>
          <input class="boutton"type="submit" name="" value="Choisir">
        </form>
      </div>
      <!-- Sinon le compte est standard -->
     <?php
     } else {
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
    $donne=$req->fetch();// on recupère le donnée du parents
     ?>

     <div class="box">
       <div class="element">
         <h4>Nom</h4>
         <div class="h6">
           <h6><?php echo $donne['nom'] ?></h6>
         </div>
       </div>
       <div class="element">
         <h4>Prenom</h4>
         <div class="h6">
           <h6><?php echo $donne['prenom'] ?></h6>
         </div>
       </div>
       <div class="element">
         <h4>Adresse Mail</h4>
         <div class="h6">
           <h6><?php echo $donne['mail'] ?></h6>
           <a href="/Projet_Site/Project-2/conbusi/page/modification_parent/modification_mail.php">Modifier</a>
         </div>
       </div>
       <div class="element">
         <h4>Adresse</h4>
         <div class="h6">
           <h6><?php echo $donne['adresse'] ?></h6>
           <a href="/Projet_Site/Project-2/conbusi/page/modification_parent/modification_adresse.php">Modifier</a>
         </div>
       </div>
       <div class="element">
         <h4>numéro de téléphone</h4>
         <div class="h6">
           <h6><?php echo $donne['numero'] ?></h6>
           <a href="/Projet_Site/Project-2/conbusi/page/modification_parent/modification_numero.php">Modifier</a>
         </div>
       </div>
       <div class="element">
         <h4>Métier</h4>
         <div class="h6">
           <h6><?php echo $donne['profession'] ?></h6>
           <a href="/Projet_Site/Project-2/conbusi/page/modification_parent/modification_metier">Modifier</a>
         </div>
       </div>
       <!-- On recupère les infos des enfant inscrit par le parent si il y en a -->
       <?php $reponse = $bdd->prepare('SELECT * FROM profil_eleve WHERE id_parent=:id');
       $reponse->execute(array('id'=>$_SESSION['id']));
       $donnee=$reponse->fetch(); ?>
       <div class="">
         <?php if (empty($donnee)) {?>
           <div class="lien">
             <a class="text" href="../formulaire/formulaire_inscription_eleve.php">Inscrire mes enfants</a>
           </div>
         <?php }
         else {?>
           <div class="lien">
             <a class="text" href="../formulaire/formulaire_inscription_eleve.php">Inscrire mes enfants</a>
             <h5 class="text">Voir les profiles de mes enfants</h6>
             </div>

             <div class="">
               <?php
               $reponse = $bdd->prepare('SELECT * FROM profil_eleve WHERE id_parent=:id');
               $reponse->execute(array('id'=>$_SESSION['id']));
               $donnee=$reponse->fetchall();
               ?>
               <div class="">
                 <form class="" action="profil_eleve.php" method="post">

                   <select class="custum-select" name="id">
                     <?php
                     foreach ($donnee as $key => $value) {
                       echo "<option value=". $value['id']. ">".$value['nom']." ".$value['prenom']."</option>";
                     } ?>
                   </select>
                   <input class="boutton"type="submit" name="" value="Choisir">
                 </form>
               </div>
             </div>
           </div>
     </div>
   <?php }} ?>

  </body>
</html>
