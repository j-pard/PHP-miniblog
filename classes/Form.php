<?php


      class Form {

            /**
             * $entries array Entrées de toutes les valeurs voulant être par défaut
             */

            private $entries;

            public function __construct($entries = []) {
                  $this->entries = $entries;
            }

            /**
             * getValues key Permet de reprendre la valeur correspondante à la clé dans le tableau associatif $entries
             * Retourne la valeur si elle existe sinon ne retourne rien
             */
            private function getValue($index) {
                  return isset($this->entries[$index]) ? $this->entries[$index] : null;
            }

            /**
             * @param string $action L'action que doit effectuer le formulaire
             * @param string $method La méthode utilisée par le formulaire
             * @return void La balise ouvrante du formulaire
             */
            public function create($action = "", $method = "POST") {
                  echo "<form action='" . $action . "' " . "method='" . $method . "'>";
            }

            /**
             * Creer la balise fermante du formulaire
             *
             * @return void Balise fermante
             */
            public function end() {
                  echo "</form>";
            }

            /**
             * Creer un input de type text
             *
             * @param string $name Choisir le nom
             * @return void Ecrit la balise input:text
             */
            public function text($name) {
                  echo "<label for='" . $name . "'>" . ucfirst($name) . "</label>";
                  echo "<input type='text' name='" . $name . "' value='" . $this->getValue($name) . "'>";
            }

            /**
             * Creer un input avec un type à spécifier
             *
             * @param string $name Choisir le nom
             * @return void Ecrit la balise input:text
             */
            public function input($name, $type = "text", $value = 0, $visible = true) {
                  if($visible) {
                        echo "<label for='" . $name . "'>" . ucfirst($name) . "</label>";
                        echo "<input type='" . $type . "' name='" . $name . "' value='" . $this->getValue($name) . "'>";
                  }
                  else {
                        echo "<input type='" . $type . "' name='" . $name . "' value='" . $value . "' class='not-displayed'>";
                  }
            }

            /**
             * Creer un textarea
             *
             * @param string $name Nom de la zone de texte
             * @param integer $cols Nombre de colonnes (par défaut à 30)
             * @param integer $rows Nombre de lignes (par défaut à 100)
             * @return void Ecrit la balise checkbox
             */
            public function textarea($name, $cols = 30, $rows = 100) {
                  echo "<textarea name='" . $name . "' cols='" . $cols . "' rows='" . $rows . "'><textarea>";
            }

            /**
             * Creer une selection de type radio et son label
             *
             * @param string $name Nom de l'ensemble des choix radio (nom identique nécéssaire)
             * @param array $value Valeur de l'input
             * @return void Ecrit le bouton radio et son label
             */
            public function radio($name, $values = []) {
                  foreach ($values as $value) {
                        echo "<div class='inline-cont'>";
                        echo "<input type='radio' name='" . $name ."' value='" . $value . "'>";
                        echo "<label for='" . $name . "'>" . ucfirst($value) . "</label>";
                        echo "</div>";  
                  }                
            }

            /**
             * Creer une checkbox et son label
             *
             * @param string $name Nom de la checkbox
             * @return void Ecrit la checkbox et son label
             */
            public function checkbox($name) {
                  echo "<input type='checkbox' name='" . $name . "'>";
                  echo "<label for='" . $name . "'>" . ucfirst($name) . "</label>";

            }

            /**
             * Creer une liste déroulante
             *
             * @param string $name Nom de la liste
             * @param array $options Liste des choix possible sous forme de tableau
             * @return void Ecrit toutes les balises de la liste déroulante
             */
            public function select($name, $options = []) {
                  $select = ["<select name='" . $name . "'>"];
                  foreach ($options as $option) {
                        array_push($select, "<option value='" . $option . "'>" . ucfirst($option) . "</option>");
                  }
                  array_push($select, "</select>");

                  foreach ($select as $row) {
                        echo $row;
                  }
            }

            /**
             * Creer un input:submit
             *
             * @param string $value Nom & valeur du bouton submit
             * @return void Ecrit la balise du bouton
             */
            public function submit($value) {
                  echo "<input type='submit' value='" . ucfirst($value) . "'>";
            }
      }
?>
