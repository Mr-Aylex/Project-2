<?php
/*code de modifiation classe*/
session_start();
$id = $_SESSION["id"];

$bdd = new PDO("mysql:host=localhost;dbname=projet_site_lycee;",'root','');
/*On crée l'objet PDO*/
$classe = $_POST["classe"];


$req = $bdd->prepare('UPDATE profil_eleve SET classe=:classe WHERE id=:id');
$modification = $req->execute(array('classe'=>$classe,'id'=>$id));
//On modifie la base de donnée 

if($modification ==  true){
  // on redirige vers la page mon compte
  header("Location: ../../page/compte/mon_compte.php");
}
else{
  // on redirige vers le formulaire
  header("Location: ../../page/form_modif_classe.php");
}
 ?>
