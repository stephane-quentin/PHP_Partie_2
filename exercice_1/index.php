<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 1 PHP Partie 2</title>
  </head>
  <body>
    <p><a href="http://monProjet">Accueil</a></p>
    <form method="post">
      <label>Entrez votre age :</label>
      <input type="text" name="age"/> <br/>
      <input type="submit" name="valider" value="OK"/>
    </form>
    <?php
      if(isset($_POST['valider'])) //isset  permet de vérifier l'existence d'une variable
      {
      $age = $_POST['age'];
      if($age<18){
        $verdict='Vous êtes mineur';
        }
      else{
        $verdict='Vous êtes majeur';
        }
      echo 'Vous avez ' . $age . ' ans. ' . $verdict;
    }
     ?>
  </body>
</html>
