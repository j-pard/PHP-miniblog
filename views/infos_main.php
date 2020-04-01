<?php

      echo  "<h1>My <span>Tech</span> Ressources</h1>" .
            "<p>
                  [MTR] est une plateforme web créée à but éducatif et d'apprentissage en programmation côté serveur, 
                  en PHP orienté objet sous une architecture MVC.
                  
                  Ce projet est réalisé dans le cadre de la formation BeCode.
            </p>";
            
            include 'sub_views/stats.php';

      echo  "<div>" . 
                  "<h2>Nouveautés</h2>";

                  include 'sub_views/news.php';
                  
      echo  "</div>" . 
            "<div>" . 
                  "<h2>Contactez-nous</h2>"; 
                  
                  include 'sub_views/socials.php';

      echo  "<div>";                  

?>