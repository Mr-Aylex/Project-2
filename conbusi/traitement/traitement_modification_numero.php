<?php
session_start();
$id = $_SESSION["id"];

$bdd = new PDO("mysql:host=localhost;dbname=projet_site_lycee;",'root','');

$numero = $_POST["numero"];


$req = $bdd->prepare('UPDATE profil_parent SET numero=:numero WHERE id=:id');
$modification = $req->execute(array('numero'=>$numero,'id'=>$id));


if($modification ==  true){
  header("Location:../page/mon_compte.php");
}
else {
  header("Location: ../page/modification_numero.php");
}

 ?>
