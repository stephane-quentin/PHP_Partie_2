<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 3 PHP Partie 2</title>
  </head>
  <body>
    <p><a href="http://monProjet">Accueil</a></p>
    <form method="post">
      <label>Entrez votre age :</label>
      <input type="text" name="age"/> <br/>
      <label>Choix</label>
      <select name="choice">
        <option value="man">Homme</option>
        <option value="woman">Femme</option>
      </select>
      <input type="submit" name="valider" value="OK"/>
    </form>
    <?php
      if(isset($_POST['valider']))
      {
      $age = $_POST['age'];
      $gender = $_POST['choice'];
      if($age<18 && $gender == 'man'){
          echo 'Vous êtes un homme et vous êtes mineur';
        }
      elseif($age<18 && $gender == 'woman'){
          echo 'Vous êtes une femme et vous êtes mineure';
        }
      elseif($age>=18 && $gender == 'woman'){
          echo 'Vous êtes une femme et vous êtes majeure';
        }
      else{
          echo 'Vous êtes un homme et vous êtes majeur';
        }
    }
     ?>
  </body>
</html>
