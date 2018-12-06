<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Exercice 2 PHP Partie 2</title>
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
  <p>1ère méthode (if/else)</p>
  <?php
  if(isset($_POST['choice']))
  {
    $isReal = $_POST['choice'];
    if($isReal == 'true'){
      echo "C'est facile!!";
    }
    else{
      echo "C'est difficile!!";
    }
  }
  ?>
  <p>2ème méthode (switch)</p>
  <?php
  if(isset($_POST['choice']))
  {
    $isReal = $_POST['choice'];
    switch ($isReal)
    {
      case 'true' :
        echo "C'est facile!!";
      break;
      case 'false' :
        echo "C'est difficile!!";
      break;
    }
  }
  ?>
  <p>3ème méthode (ternaire)</p>
  <?php
  if(isset($_POST['choice']))
  {
    $isReal = $_POST['choice'];
    echo ($isReal == 'true') ? 'C\'est facile!!' : 'C\'est difficile!!';
  }
   ?>
</body>
</html>
