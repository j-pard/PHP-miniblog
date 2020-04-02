<?php

      require '../ressources/dbid.php';
      require '../classes/Autoloader.php';
      Autoloader::register();

      $db = new Database($dbid_name, $dbid_user, $dbid_pass, $dbid_host);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="../assets/css/style.css">
      <meta name="author" content="Jonathan PARDONS">
      <meta name="organization" content="BeCode">
      <script src="https://kit.fontawesome.com/126bbe9047.js" crossorigin="anonymous"></script>
      
      <title>MTR - My Tech Ressources</title>
</head>
<body>
      <header>
      
      </header>

      <main class="item-main">
            <?php
                  if(isset($_GET['item-id'])) {
                        $id = $_GET['item-id'];
            
                        $sql = ('SELECT * FROM articles WHERE id = ?');
                        $values = array($id);
            
                        $item = $db->prepareItem($sql, $values, 'Item');
                        
                        $item->create();
                        
            
                  }
                  else {
                        echo "Wrong way";
                  }

            ?>
      </main>
      <script src="./assets/js/script.js"></script>
</body>
</html>