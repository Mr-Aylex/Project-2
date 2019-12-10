<?php
session_start();
if (empty($_POST['nom']) or empty($_POST['prenom']) or empty($_POST['age']) or empty($_POST['classe'])) {
      header('Location: page\formulaire_inscription_eleve.php');
  }
else {
  $nom=$_POST['nom'];
  $prenom=$_POST['prenom'];
  $age=$_POST['age'];
  $classe=$_POST['classe'];
  $id_parent=$_SESSION['id'];
  var_dump($_POST);
  try
  {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_site_lycee;charset=utf8','root','');
  }
  catch(Exception $e)
  {
    die('Erreur:'.$e->getMessage());
  }
  $req = $bdd->prepare('SELECT nom, prenom FROM profil_eleve WHERE nom=:nom AND prenom=:prenom');
  $req->execute(array(
          'nom'=>$nom,
          'prenom'=>$prenom));

  $donne=$req->fetch();
  if ($donne==true) {
    header('Location: ..\page\formulaire_inscription_eleve.php');
  }
  else {
    $req = $bdd->prepare('INSERT INTO profil_eleve(nom, prenom, age, classe, id_parent) VALUES(:nom, :prenom, :age, :classe, :id_parent)');
    $req->execute(array(
      'nom'=>$nom,
      'prenom'=>$prenom,
      'age'=>$age,
      'classe'=>$classe,
      'id_parent'=>$id_parent));
      header("Location: ..\page\index.php");
  }
}
 ?>
