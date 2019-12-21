<?php
session_start();
try {
  $bdd = new PDO('mysql:host=localhost;dbname=projet_site_lycee;charset=utf8','root','');
}
catch(Exception $e)
{
  die('ERREUR:'.$e->getMessage());
}
//On attribue les variables
$mail = $_POST["mail"];
$mot_de_passe = md5($_POST["mot_de_passe"]);
$req = $bdd->prepare('SELECT * FROM  profil_parent WHERE mail=:mail and mot_de_passe=:mot_de_passe');
$req->execute(array('mail'=>$mail,'mot_de_passe'=>$mot_de_passe));
$connexion = $req->fetch();
if($connexion == true){
  //On lance la sesssion
    $_SESSION['id']=$connexion['id'];
    $_SESSION['nom']=$connexion['nom'];
    $_SESSION['prenom']=$connexion['prenom'];
    //on redirige vers le menu
  header("Location: ../page/index.php");
}

else{
  //on redirige vers le formulaire
  header("Location: ../page/formulaire_connexion.php");
}

?>
