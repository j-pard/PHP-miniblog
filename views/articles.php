<?php
      
      $articles = $db->query('SELECT id, title, img, likes, author FROM articles', 'Article', true);

      foreach ($articles as $article) {
            $article->create();
      }
?>