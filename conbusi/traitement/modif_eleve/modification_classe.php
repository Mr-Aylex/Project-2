<?php
session_start();
$id = $_SESSION["id"];

$bdd = new PDO("mysql:host=localhost;dbname=projet_site_lycee;",'root','');

$classe = $_POST["classe"];


$req = $bdd->prepare('UPDATE profil_eleve SET classe=:classe WHERE id=:id');
$modification = $req->execute(array('classe'=>$classe,'id'=>$id));


if($modification ==  true){
  header("Location: ../../page/compte/mon_compte.php");
}
else{
  header("Location: ../../page/form_modif_classe.php");
}
 ?>
