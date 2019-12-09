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
  $id_parent=$_SESSION['id']
  try
  {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_site_lycee;charset=utf8','root','');
  }
  catch(Exception $e)
  {
    die('Erreur:'.$e->getMessage());
  }
  $req = $bdd->prepare('SELECT nom, prenom FROM profil_parent WHERE nom=:nom, prenom=:prenom');
  $req->execute(array(
          'nom'=>$_POST['nom'],
          'prenom'=>$_POST['prenom']));
  $donne=$req->fetch();
  if ($donne==true) {
    header('Location: ..\page\formulaire_inscription_eleve.php');
  }
  else {
    $req = $bdd->prepare('INSERT INTO profil_parent(nom, prenom, age, classe) VALUES(:nom, :prenom, :age)');
    $req->execute(array(
      'nom'=>$nom,
      'prenom'=>$prenom,
      'age'=>$age));
      header("Location: ..\conbusi\index.php");
  }
}
 ?>
