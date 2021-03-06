<?php

      class Database {
            
            private $db_name;
            private $db_user;
            private $db_pass;
            private $db_host;
            private $pdo;

            public function __construct($db_name, $db_user, $db_pass, $db_host) {
                  $this->db_name = $db_name;
                  $this->db_user = $db_user;
                  $this->db_pass = $db_pass;
                  $this->db_host = $db_host;
            }

            private function getPDO() {
                  if($this->pdo === null) {
                        $pdo = new PDO("mysql:dbname=" . $this->db_name . ";host" . $this->db_host, $this->db_user, $this->db_pass);
                        // (Un)Comment next line to display SQL errors
                        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $this->pdo = $pdo;
                  }
                  return $this->pdo;
            }

            public function query($sql, $class_name = "", $multiple = false) {
                  $request = $this->getPDO()->query($sql);
                  if(!$multiple) {
                        $data = $request->fetch();
                        return $data[0];
                  }
                  else {
                        $data = $request->fetchAll(PDO::FETCH_CLASS, $class_name);
                        return $data;
                  }
            }

            public function prepareItem($sql, $values, $class_name = "") {
                  $request = $this->getPDO()->prepare($sql);
                  $request->execute($values);
                  $request->setFetchMode(PDO::FETCH_CLASS, $class_name);
                  $data = $request->fetch();
                  return $data;
            }
      }

?>