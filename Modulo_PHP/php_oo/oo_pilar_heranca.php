<?php

    class Carro {
        // Atributos
        public $placa = 'ABC1234';
        public $cor = 'Branco';
        public $teto_solar = true;

        // Metodos
        function acelerar() {
            echo "Acelerar";
        }

        function abrirTetoSolar() {
            echo "Abrir teto solar";
        }

        function alterarPosicaoVolante() {
            echo "Alterar posição do voltante";
        }

    }

    class Moto {
        //Atributos
        public $placa = 'XYZ9876';
        public $cor = 'Vermelho';
        public $contra_peso_guidao = true;

        // Metodos
        function acelerar() {
            echo "Acelerou moto";
        }

        function empinar() {
            echo "Empinou moto";
        }
    }

    $carro = new Carro();
    $moto = new Moto();

    echo '<pre>';
    print_r($carro);
    print_r($moto);
    echo '</pre>';

?>