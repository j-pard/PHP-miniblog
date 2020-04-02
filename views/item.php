<?php

      require '../ressources/dbid.php';
      require '../classes/Autoloader.php';
      Autoloader::register();

      $db = new Database($dbid_name, $dbid_user, $dbid_pass, $dbid_host);

      if(isset($_GET['item-id'])) {
            $id = $_GET['item-id'];

            echo "Item numéro " . $id;
      }
      else {
            echo "Wrong way";
      }
?>