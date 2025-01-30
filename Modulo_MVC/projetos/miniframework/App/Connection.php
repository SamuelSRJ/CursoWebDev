<?php

    namespace App;

    class Connection {

        public static function getDb(){
            try {
                $conn = new \PDO(
                    "mysql:host=127.0.0.1;port=3306 dbname=mvc;charset=utf8",
                    "root",
                    ""
                );

                return $conn;
            } catch (\PDOException $e) {
                echo "Erro de conexão: " . $e->getMessage();
            }
        }


    }

?>