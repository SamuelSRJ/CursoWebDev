<?php

    class Exemplo {
        // Atributos
        public static $atributo1 = "Eu sou um atributo estatico";
        public $atributo2 = "Eu sou um atributo normal"

        // Metodos
        public static function metodo1() {
            echo "Eu sou um métodos estático";
        }

        public function metodo2() {
            echo "Eu sou um método normal";
        }
    }

    $x = new Exemplo();
    

?>