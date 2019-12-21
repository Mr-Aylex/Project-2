<?php
session_start();
$id = $_SESSION["id"];

$bdd = new PDO("mysql:host=localhost;dbname=projet_site_lycee;",'root','');


$adresse = $_POST["adresse"];


$req = $bdd->prepare('UPDATE profil_parent SET adresse=:adresse WHERE id=:id');
$modification = $req->execute(array('adresse'=>$adresse,'id'=>$id));


if($modification ==  true){
  header("Location: ../../page/compte/mon_compte.php");
}
else {
  header("Location: ../../page/modification_parent/modification_mail.php");
}

 ?>
