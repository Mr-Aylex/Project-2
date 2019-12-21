<?php
//Code de modification mail
session_start();
$id = $_SESSION["id"];
$bdd = new PDO("mysql:host=localhost;dbname=projet_site_lycee;",'root','');
// Création de l'objet PDO
$mail = $_POST["newmail"];
$req = $bdd->prepare('UPDATE profil_parent SET mail=:mail WHERE id=:id');
$modification = $req->execute(array('mail'=>$mail,'id'=>$id));
//On modifie la base de donnée

if($modification ==  true){
  // on redirige vers la page mon compte
  header("Location:../../page/compte/mon_compte.php");
}
else {
  // on redirige vers le formulaire
  header("Location: ../../page/modification_parent/modification_mail.php");
}


 ?>
