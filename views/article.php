<?php

      require './ressources/dbid.php';
      require 'classes/Autoloader.php';
      Autoloader::register();

      // DB connexion exemple
      $db = new Database($dbid_name, $dbid_user, $dbid_pass, $dbid_host);
      $sql = ("SELECT * FROM articles WHERE id = ?");
      $values = [1];
      $db->prepare($sql, $values ,"Article");
?>