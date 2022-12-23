<!DOCTYPE html>
<html lang="en">

<!-- <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=h, initial-scale=1.0">
  <title>Gestion De Connection</title>
</head> -->

<head>

  <head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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