<?php
if (empty($_POST['nom']) or empty($_POST['prenom']) or empty($_POST['adresse']) or empty($_POST['mail']) or empty($_POST['mdp']) or empty($_POST['profession']) or empty($_POST['numero'])){
      header('Location: ..\page\formulaire_inscription_parent.php');
  }
else {
  $nom=$_POST['nom'];
  $prenom=$_POST['prenom'];
  $adresse=$_POST['adresse'];
  $mail=$_POST['mail'];
  $numero=$_POST['numero'];
  $profession=$_POST['profession'];
  $mdp=md5($_POST['mdp']);
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
  var_dump($donne);
  if ($donne==true) {
    echo "nom";
    header('Location: ..\page\formulaire_inscription_parent.php');
  }
  else {
    $req = $bdd->prepare('SELECT mail FROM profil_parent WHERE mail=:mail');
    $req->execute(array(
            'mail'=>$_POST['mail']));
    $donne=$req->fetch();
    var_dump($donne);
    if ($donne==true) {
      echo "mail";
      header('Location: ..\page\formulaire_inscription_parent.php');
    }
    else {
      $req = $bdd->prepare('SELECT numero FROM profil_parent WHERE numero=:numero');
      $req->execute(array(
              'numero'=>$_POST['numero']));
      $donne=$req->fetch();
      var_dump($donne);
      if ($donne==true) {
        echo "numero";
        header('Location: ..\page\formulaire_inscription_parent.php');
      }
      else {
        $req = $bdd->prepare('INSERT INTO profil_parent(nom, prenom, mail, numero, profession, adresse, mot_de_passe) VALUES(:nom, :prenom, :mail, :profession, :numero, :adresse, :mdp)');
        $req->execute(array(
          'nom'=>$nom,
          'prenom'=>$prenom,
          'mail'=>$mail,
          'numero'=>$numero,
          'adresse'=>$adresse,
          'mdp'=>$mdp,
          'profession'=>$profession));
          header('Location: ..\page\formulaire_connexion.php');
      }
    }
  }
}
 ?>
