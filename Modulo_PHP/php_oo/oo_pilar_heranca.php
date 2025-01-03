<?php

    class Veiculo {
        // Atributos
        public $placa = null;
        public $cor = null;

        // Metodos
        function acelerar() {
            echo "Acelerar";
        }

        function freiar() {
            echo "Freiar";
        }

    }

    class Carro extends Veiculo {
        // Atributos
        public $teto_solar = true;

        // Constructor
        function __construct($placa, $cor) {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        // Metodos
        function abrirTetoSolar() {
            echo "Abrir teto solar";
        }

        function alterarPosicaoVolante() {
            echo "Alterar posição do voltante";
        }

    }

    class Moto extends Veiculo {
        //Atributos
        public $contra_peso_guidao = true;

        // Constructor
        function __construct($placa, $cor) {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        // Metodos
        function empinar() {
            echo "Empinou moto";
        }
    }

    $carro = new Carro("ABC1234", "Branco");
    $moto = new Moto("XYZ9876", "Vermelho");

    echo '<pre>';
    print_r($carro);
    print_r($moto);
    echo '</pre>';

    echo '<hr>';
    $carro->abrirTetoSolar();
    echo '<br>';
    $carro->acelerar();
    echo '<br>';
    $moto->empinar();
    echo '<br>';
    $moto->acelerar();
    echo '<br>';
    $carro->freiar();
?>