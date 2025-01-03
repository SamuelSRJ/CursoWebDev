<?php

    namespace A;
    class Cliente implements \B\CadastroInterface {
        // Atributos
        public $nome = "Jorge";

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

        public function salvar() {
            echo 'Salvar';
        }

        public function remover() {
            echo 'Remover';
        }
    }

    interface CadastroInterface {
        public function salvar();
    }

    namespace B;
    class Cliente implements \A\CadastroInterface {
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

    $c = new \B\Cliente();
    echo '<pre>';
    print_r($c);
    echo '</pre>';
    echo $c-> __get('nome');

?>