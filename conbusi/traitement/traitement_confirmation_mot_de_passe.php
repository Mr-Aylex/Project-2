<?php
session_start();
$mail=$_SESSION['mail'];
$bdd = new PDO("mysql:host=localhost;dbname=projet_site_lycee;",'root','');

$mdp = md5($_POST['password']);

$confirmation = md5($_POST['mot_de_passe']);

$req = $bdd->prepare('UPDATE profil_parent SET mot_de_passe=:mot_de_passe WHERE mail=:mail');
$req->execute(array("mot_de_passe"=>$confirmation, "mot_de_passe"=>$mdp, "mail"=>$mail));

if($req == true){
      header("Location: ../page/index.php");
}
else{
    header("Location: ../page/confirmation_mot_de_passe_oublie.php");
}




 ?>
