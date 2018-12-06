<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 5 PHP Partie 2</title>
  </head>
  <body>
    <p><a href="http://monProjet">Accueil</a></p>
    <form method="post">
      <label>Choix</label>
      <select name="gender">
        <option value="Homme">Homme</option>
        <option value="Femme">Femme</option>
      </select>
      <input type="submit" name="valider" value="OK"/>
    </form>
    <p>Sans if/else</p>
    <?php
    if(isset($_POST['valider']))
    {
      $gender = $_POST['gender'];
      echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
    }
     ?>
     <p>Avec if/else</p>
     <?php
     if(isset($_POST['valider']))
     {
       $gender = $_POST['gender'];
       if($gender != 'Homme'){
         echo 'C\'est une développeuse !!!';
       }
       else{
         echo 'C\'est un développeur !!!';
       }
     }
      ?>
  </body>
</html>
