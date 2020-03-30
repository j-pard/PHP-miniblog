<?php

      class Validator {

            private function sanitize($input, $filter) {
                  $input = filter_var($input, $filter);
                  $input = trim($input);
                  return $input;
            }

            private function validate($input) {
                  if(isset($input) && !empty($input) && $input != "" && $input != " ") {
                        return $input;
                  }
                  else {
                        return "<p class:'warning'>Donnée introduite non valide</p>";
                  }
            }

            public function string($input) {
                  $input = sanitize($input, FILTER_SANITIZE_STRING);
                  $input = validate($input);
                  return $input;
            }

            public function int($input) {
                  $input = sanitize($input, FILTER_SANITIZE_INT);
                  $input = validate($input);
                  return $input;
            }

            public function float($input) {
                  $input = sanitize($input, FILTER_SANITIZE_FLOAT);
                  $input = validate($input);
                  return $input;
            }

            public function mail($input) {
                  $input = sanitize($input, FILTER_SANITIZE_EMAIL);
                  $input = validate($input);
                  return $input;
            }

            public function url($input) {
                  $input = sanitize($input, FILTER_SANITIZE_URL);
                  $input = validate($input);
                  return $input;
            }
      
      }

?>