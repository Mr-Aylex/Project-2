<?php
session_start();
try {
  $bdd = new PDO('mysql:host=localhost;dbname=projet_site_lycee;charset=utf8','root','');

}
catch(Exception $e)
{
  die('ERREUR:'.$e->getMessage());
}

$mail = $_POST["mail"];
$mot_de_passe = md5($_POST["mot_de_passe"]);
$req = $bdd->prepare('SELECT * FROM  profil_parent WHERE mail=:mail and mot_de_passe=:mot_de_passe');
$req->execute(array('mail'=>$mail,'mot_de_passe'=>$mot_de_passe));
$connexion = $req->fetch();
var_dump($connexion);
if($connexion == true){
    $_SESSION['id']=$connexion['id'];
    $_SESSION['nom']=$connexion['nom'];
    $_SESSION['prenom']=$connexion['prenom'];
  header("Location: ..\index.php");
}

else{
  header("Location: formulaire_connexion.php");
}

?>
