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

        function trocarMarcha() {
            echo "Desengatar embreagem com o pé e engatar marcha com a mão";
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

        function trocarMarcha() {
            echo "Desengatar embreagem com a mão e engatar a marcha com o pé";
        }
    }

    class Caminhao extends Veiculo {

    }

    $carro = new Carro("ABC1234", "Branco");
    $moto = new Moto("XYZ9876", "Vermelho");
    $caminhao = new Caminhao();

    $carro->trocarMarcha();
    echo '<br>';
    $moto->trocarMarcha();
    echo '<br>';
    $caminhao->trocarMarcha();
?>