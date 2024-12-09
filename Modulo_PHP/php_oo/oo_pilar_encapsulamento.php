<?php
    class Pai {
        // Atributos
        private $nome = 'Jorge';
        protected $sobrenome = 'Silva';
        public $humor = 'Feliz';

        // Getters & Setter
        public function __get($attr) {
            return $this->$attr;
        }

        public function __set($attr, $value) {
            $this->$attr = $value;
        }

        // Metodos
        private function executarMania() {
            echo "Assobiar";
        }

        protected function responder() {
            echo "Oi";
        }

        public function executarAcao() {
            $x = rand(1, 10);

            if($x >= 1 && $x <= 8) {
                $this->responder();
            } else {
                $this->executarMania();
            }
        }

        // public function getNome() {
        //     return $this->nome;
        // }

        // public function setNome($value) {
        //     if(strlen($value) >= 3) {
        //         $this->nome = $value;
        //     }
        // }
    }

    class Filho extends Pai {

    }

    // $pai = new Pai();
    // // echo $pai->getNome();
    // // $pai->setNome("Samuel");
    // // echo '<br>';
    // // echo $pai->getNome();
    // echo $pai->executarAcao();
    $filho = new Filho();

    echo '<pre>';
    print_r($filho);
    echo '</pre>';

    // Exibir os metodos de objeto
    echo '<pre>';
    print_r(get_class_methods($filho));
    echo '</pre>';

?>