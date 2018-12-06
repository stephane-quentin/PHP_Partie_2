<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 7 PHP Partie 2</title>
  </head>
  <body>
    <p><a href="http://monProjet">Accueil</a></p>
    <form method="post">
      <label>Choix</label>
      <select name="choice">
        <option value="true">true</option>
        <option value="false">false</option>
      </select>
      <input type="submit" value="GO" />
    </form>
    <p>Avec if/else</p>
    <?php
    $isOk = $_POST['choice'];
      if($isOk == 'false'){
        $isOk=false;
      }
    if(isset($_POST['choice']))
    {
      if($isOk == false){
        echo 'c\'est pas bon !!!';
      }
      else{
        echo 'c\'est ok !!';
      }
    }
    ?>
    <p>Sans if/else</p>
    <?php
    if(isset($_POST['choice']))
    {
      echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
    }
    ?>
  </body>
</html>
