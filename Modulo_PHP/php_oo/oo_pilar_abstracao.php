<?php

    // Modelo
    class Funcionario {
        // Atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;

        // Getters & Setters (Overloading / Sobrecarga)
        function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }

        function __get($atributo) {
            return $this->$atributo;
        }

        // Getters & Setters
        // GETTERS
        // function setNome($nome) {
        //     $this->nome = $nome;
        // }

        // function setTelefone($telefone) {
        //     $this->telefone = $telefone;
        // }

        // function setNumFilhos($numFilhos) {
        //     $this->numFilhos = $numFilhos;
        // }

        // // SETTERS
        // function getNome() {
        //     return $this->nome;
        // }

        // function getTelefone() {
        //     return $this->telefone;
        // }

        // function getNumFilhos() {
        //     return $this->numFilhos;
        // }

        // Métodos
        function resumirCadFunc() {
            //return "$this->nome e possui $this->numFilhos filho(s)";
            return $this->__get('nome') . ' possui ' . $this->__get('numFilhos') . ' filho(s).<br>Seu telefone é o '. $this->__get('telefone');
        }

        function modificarNumFilhos($numFilhos) {
            // Afetar um atributo do objeto
            setNumFilhos($numFilhos);
        }
    }

    $y = new Funcionario();
    $y->__set('nome','José');
    $y->__set('numFilhos',2);
    $y->__set('telefone','11 99999-8888');
    echo $y->resumirCadFunc();

    echo '<br>';

    $x = new Funcionario();
    $x->__set('nome','Maria');
    $x->__set('numFilhos',1);
    $x->__set('telefone','22 97777-6666');
    echo $x->resumirCadFunc();

?>