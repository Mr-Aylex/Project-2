<?php
//Code de modification metier
session_start();
$id = $_SESSION["id"];

$bdd = new PDO("mysql:host=localhost;dbname=projet_site_lycee;",'root','');
// Création de l'objet PDO
$metier = $_POST["metier"];


$req = $bdd->prepare('UPDATE profil_parent SET metier=:metier WHERE id=:id');
$modification = $req->execute(array('metier'=>$metier,'id'=>$id));
//On modifie la base de donnée

if($modification ==  true){
  // on redirige vers la page mon compte
  header("Location:../../page/compte/mon_compte.php");
}
else{
  // on redirige vers le formulaire
  header("Location: ../../page/modification_parent/modification_metier.php");
}


 ?>
