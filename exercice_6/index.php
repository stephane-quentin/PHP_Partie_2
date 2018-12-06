<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 6 PHP Partie 2</title>
  </head>
  <body>
    <p><a href="http://monProjet">Accueil</a></p>
    <form method="post">
      <label>Entrez votre age :</label>
      <input type="text" name="age"/> <br/>
      <input type="submit" name="valider" value="OK"/>
    </form>
    <p>Sans if/else</p>
    <?php
    if(isset($_POST['valider']))
    {
    $age = $_POST['age'];
      echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
    }
    ?>
    <p>Avec if/else</p>
    <?php
      if(isset($_POST['valider']))
      {
      $age = $_POST['age'];
      if($age>=18){
        echo 'Tu es majeur';
        }
      else{
        echo 'Tu n\'es pas majeur';
        }
    }
     ?>
  </body>
</html>
