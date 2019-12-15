<?php


$ID = $_POST["ID"];
$nom= $_POST["nom"];
$prenom= $_POST["prenom"];
$age = $_POST[$age];
$classe = $_POST["classe"];
$ID = $_POST["ID"];

$bdd = new PDO("mysql:host=localhost;dbname=projet_site_lycee;",'root','');
$bdd->prepare('UPDATE profil_parent SET nom AND prenom AND age AND classe WHERE ID=:ID');
$req = $bdd->array("nom"=>$nom,"prenom"=>$prenom,"age"=>$age,"classe"=>$classe,"ID"=>$ID);
$req->fetch();

if($req == true){
    header("Location: index.php");

}
else{
  header("Location: formulaire_modification.php");
}




 ?>
