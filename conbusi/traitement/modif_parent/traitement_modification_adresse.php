<?php
//Code de modification adresse
session_start();
$id = $_SESSION["id"];

$bdd = new PDO("mysql:host=localhost;dbname=projet_site_lycee;",'root','');
// Création de l'objet PDO

$adresse = $_POST["adresse"];


$req = $bdd->prepare('UPDATE profil_parent SET adresse=:adresse WHERE id=:id');
$modification = $req->execute(array('adresse'=>$adresse,'id'=>$id));
//On modifie la base de donnée

if($modification ==  true){
  // on redirige vers la page mon compte
  header("Location: ../../page/compte/mon_compte.php");
}
else {
  // on redirige vers le formulaire
  header("Location: ../../page/modification_parent/modification_mail.php");
}

 ?>
