<!DOCTYPE html>
<?php session_start() ?>
<?php $mon_compte=0 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Entreprise</title>
  </head>
  <body>
    <form class="box" action="index.html" method="post">
      <div class="el">
        <label for="">Nom de l'entreprise</label>
        <input type="text" name="nom" value="">
      </div>
      <div class="el">
        <label for="">Adresse de l'entreprise</label>
        <input type="text" name="adresse" value="">
      </div>
      <div class="el">
        <label for="">Type de contrat</label>
        <select class="" name="contrat">
          <option value="alternance">Alternance</option>
          <option value="stage">Stage</option>
        </select>
      </div>
      <div class="">
        <label for="">Pour quelle formation ?</label>
        <select class="" name="">
          <?php try
          {
            $bdd = new PDO('mysql:host=localhost;dbname=projet_site_lycee;charset=utf8','root','');
          }
          catch(Exception $e)
          {
            die('Erreur:'.$e->getMessage());
          }
          $reponse=$bdd->query('SELECT nom_classe FROM classe');
          $donne = $reponse->fetchall();

          foreach ($donne as $key => $value) {
              $trans=array(" "=>"_");
                echo "<option value=". strtr($value['nom_classe'],$trans) . ">".$value['nom_classe']."</option>";
          } ?>
        </select>
      </div>
    </form>
  </body>
</html>
