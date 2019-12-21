<?php
/*code de modifiation age*/
session_start();
$id = $_SESSION["id"];
$bdd = new PDO("mysql:host=localhost;dbname=projet_site_lycee;",'root','');
$age = $_POST["age"];
/*On crée l'objet PDO*/
$req = $bdd->prepare('UPDATE profil_eleve SET age=:age WHERE id=:id');
$modification = $req->execute(array('age'=>$age,'id'=>$id));
//On modifie la base de donnée 
if($modification ==  true){
  // on redirige vers la page mon compte
  header("Location: ../../page/compte/mon_compte.php");
}
else{
  // on redirige vers le formulaire
  header("Location: ../page/modification_age.php");
}
 ?>
