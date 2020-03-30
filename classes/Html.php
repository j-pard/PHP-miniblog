<?php

      /**
       * Introduit des balises HTML5 selon une architecture SASS
       */
      class Html {

            /**
             * Inclus une balise link:css
             * Par défaut: style.css
             *
             * @param string $url
             * @return void
             */
            public function css($url = "style.css") {
                  echo "<link rel='stylesheet' href='assets/css/" . $url . "'>";
            }

            /**
             * Inclus une balise meta avec son nom et son contenu
             *
             * @param string $name
             * @param string $content
             * @return void
             */
            public function meta($name = "", $content ="") {
                  echo "<meta name='" . $name . "' content ='" . $content . "'>";
            }
            
            /**
             * Inclus une balise image avec source et alt
             *
             * @param string $src
             * @param string $alt
             * @return void
             */
            public function img($src = "", $alt = "") {
                  echo "<img src=assets/img/'" . $src . "' alt='" . $alt . "'>";
            }

            /**
             * Inclus une balise lien, la cible et le contenu de la balise
             *
             * @param string $url
             * @param string $content
             * @return void
             */
            public function a($url = "#", $content) {
                  echo "<a href='" . $url . "'>" . $content . "</a>";
            }

            /**
             * Inclus une balise script
             * Par defaut: script.js
             *
             * @param string $src
             * @return void
             */
            public function script($src = 'script.js') {
                  echo "<script src='assets/js/" . $src . "'></script>";
            }
      }


?>