<?php


$ID = $_POST["ID"];
$nom= $_POST["nom"];
$prenom= $_POST["prenom"];
$age = $_POST['age'];
$classe = $_POST["classe"];
$ID = $_POST["ID"];

$bdd = new PDO("mysql:host=localhost;dbname=projet_site_lycee;",'root','');
$req=$bdd->prepare('UPDATE profil_eleve SET nom=:nom, prenom=:prenom, age=:age , classe=:classe WHERE id=:ID');
$req->execute(array("nom"=>$nom,
"prenom"=>$prenom,
"age"=>$age,
"classe"=>$classe,
"ID"=>$ID));
$req->fetch();

if($req == true){
    header("Location: ../page/index.php");

}
else{
  header("Location: ../page/formulaire_modification.php");
}




 ?>
