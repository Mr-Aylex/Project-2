<?php
session_start();
$id = $_SESSION["id"];

$bdd = new PDO("mysql:host=localhost;dbname=projet_site_lycee;",'root','');

$metier = $_POST["metier"];


$req = $bdd->prepare('UPDATE profil_parent SET metier=:metier WHERE id=:id');
$modification = $req->execute(array('metier'=>$metier,'id'=>$id));


if($modification ==  true){
  header("Location:../page/mon_compte.php");
}
else{
  header("Location:../page/modification_metier.php");
}


 ?>
