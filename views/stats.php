<?php
      $total_items = $db->query('SELECT count(id) FROM articles');
      $total_users = $db->query('SELECT count(id) FROM users');
      $total_likes = $db->query('SELECT sum(likes) FROM articles');

      echo "<ul class='stats-list'>" . 
                  "<li>Modèles disponibles: " . $total_items . "</li>" .
                  "<li>Utilisateurs: " . $total_users . "</li>" .
                  "<li>Nombre de Likes: " . $total_likes . "</li>" . 
            "</ul>";
?>