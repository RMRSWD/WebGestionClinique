<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=h, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Bienvenue sur la page de login</h1>

  <div>
    <form action="site.php" method="POST">
      <p>
        <label for=""> Login </label>
        <input type="text" name="login">
      </p>
      <p>
        <label for="">Mot de passe</label>
        <input type="password" name="mdp">
      </p>
      <p>
        <input type="submit" name="connect" value="Connect">
        <input type="reset" name="effacer" value="Effacer">
      </p>
    </form>
  </div>
  <?php
  if (!empty($contenue)) {
    echo $contenue;
  }
  ?>
</body>

</html>