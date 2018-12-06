<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 8 PHP Partie 2</title>
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
      if($isOk == 'true'){
        $isOk=true;
      }else{
        $isOk=false;
      }
    if(isset($_POST['choice']))
    {
      if($isOk){
        echo "c'est ok !!";
      }
      else{
        echo "c'est pas bon !!!";
      }
    }
    ?>
    <p>Sans if/else</p>
    <?php
    if(isset($_POST['choice']))
    {
      echo ($isOk) ? "c'est ok !!" : "c'est pas bon !!!";
    }
    ?>
  </body>
</html>
