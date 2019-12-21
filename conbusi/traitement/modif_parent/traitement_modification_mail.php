<?php
session_start();
$id = $_SESSION["id"];

$bdd = new PDO("mysql:host=localhost;dbname=projet_site_lycee;",'root','');


$mail = $_POST["newmail"];


$req = $bdd->prepare('UPDATE profil_parent SET mail=:mail WHERE id=:id');
$modification = $req->execute(array('mail'=>$mail,'id'=>$id));


if($modification ==  true){
  header("Location:../../page/compte/mon_compte.php");
}
else {
  header("Location: ../../page/modification_parent/modification_mail.php");
}


 ?>
