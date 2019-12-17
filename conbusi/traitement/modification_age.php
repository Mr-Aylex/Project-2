<?php
session_start();
$id = $_SESSION["id"];

$bdd = new PDO("mysql:host=localhost;dbname=projet_site_lycee;",'root','');

$age = $_POST["age"];


$req = $bdd->prepare('UPDATE profil_eleve SET age=:age WHERE id=:id');
$modification = $req->execute(array('age'=>$age,'id'=>$id));


if($modification ==  true){
  header("Location:../page/profil_eleve.php");
}
else{
  header("Location:../page/modification_age.php");
}
 ?>
