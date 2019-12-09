<?php


$mail = $_POST["mail"];

$confirmation = $_POST["mot_de_passe"];


$bdd = new PDO("mysql:host=localhost;dbname=projet_site_lycee;",'root','');
$bdd->prepare('UPDATE profil_parent SET mot_de_passe=:mot_de_passe WHERE mail=:mail');
$req = $bdd->array("mot_de_passe"=>$confirmation, "mail"=>$mail);
$req->fetch();

if($req == true){
  echo "Votre mot de passe a bien ete modifier";
}
else{
  header("Location: confirmation_mot_de_passe_oublie.php");
}




 ?>
