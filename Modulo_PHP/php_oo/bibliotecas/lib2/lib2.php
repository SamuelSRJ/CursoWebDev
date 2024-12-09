<?php

    namespace B;
    class Cliente implements CadastroInterface {
        // Atributos
        public $nome = "Maria";

        // Constructor
        public function __construct() {
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }

        // Metodos
        public function __get($attr) {
            return $this->$attr;
        }
        
        public function remover() {
            echo 'Remover';
        }

        public function salvar() {
            echo 'Salvar';
        }
    }

    interface CadastroInterface {
        public function remover();
    }

?>