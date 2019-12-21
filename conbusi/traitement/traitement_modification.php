<?php
$ID = $_POST["ID"];
$nom= $_POST["nom"];// on affecte les variable du formulaire
$prenom= $_POST["prenom"];
$age = $_POST['age'];
$classe = $_POST["classe"];
$ID = $_POST["ID"];

$bdd = new PDO("mysql:host=localhost;dbname=projet_site_lycee;",'root','');// on crée l'objet PDO
$req=$bdd->prepare('UPDATE profil_eleve SET nom=:nom, prenom=:prenom, age=:age , classe=:classe WHERE id=:ID');
$req->execute(array("nom"=>$nom,
"prenom"=>$prenom,
"age"=>$age,
"classe"=>$classe,
"ID"=>$ID));// On modifie le profil

if($req == true){
  //on redirige vers le menu
    header("Location: ../page/index.php");

}
else{
  //on redirige vers le formulaire
  header("Location: ../page/formulaire_modification.php");
}
 ?>
