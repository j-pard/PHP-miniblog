<?php
      $db = new Database($dbid_name, $dbid_user, $dbid_pass, $dbid_host);
      $articles = $db->query('SELECT id, title, img, likes, author FROM articles', 'Article');

      foreach ($articles as $article) {
            $article->create();
      }
?>