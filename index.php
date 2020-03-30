<?php
      require './ressources/dbid.php';
      require 'classes/Autoloader.php';
      Autoloader::register();

      // DB connexion exemple
      $db = new Database($dbid_name, $dbid_user, $dbid_pass, $dbid_host);
      $db->query('SELECT * FROM articles', 'Article');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="./assets/css/style.css">
      <meta name="author" content="Jonathan PARDONS">
      <meta name="organization" content="BeCode">
      <script src="https://kit.fontawesome.com/126bbe9047.js" crossorigin="anonymous"></script>
      
      <title>MTB - My Tech Blog</title>
</head>
<body>
      <h1>My <span>Tech</span> Blog</h1>
      
      <script src="./assets/js/script.js"></script>
</body>
</html>