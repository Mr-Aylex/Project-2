<?php
session_start();
if (empty($_POST['nom']) or empty($_POST['adresse']) or empty($_POST['contrat']) or empty($_POST['formation'])) {
      header('Location: ../page/formulaire_entreprise.php');
  }
else {
  $nom=$_POST['nom'];
  $adresse=$_POST['adresse'];
  $contrat=$_POST['contrat'];
  $formation=$_POST['formation'];
  try
  {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_site_lycee;charset=utf8','root','');
  }
  catch(Exception $e)
  {
    die('Erreur:'.$e->getMessage());
  }
    $req = $bdd->prepare('INSERT INTO entreprise(nom, adresse, contrat, formation) VALUES(:nom, :adresse, :contrat, :formation)');
    $req->execute(array(
      'nom'=>$nom,
      'adresse'=>$adresse,
      'contrat'=>$contrat,
      'formation'=>$formation));
      header("Location: ..\page\index.php");

}
 ?>
