<?php
      $db = new Database($dbid_name, $dbid_user, $dbid_pass, $dbid_host);
      $articles = $db->query('SELECT * FROM articles', 'Article');

      foreach ($articles as $article) {
            $article->create();
      }
?>