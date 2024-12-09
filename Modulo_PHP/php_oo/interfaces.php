<?php

    interface EquipamentoEletronicoInterface {
        public function ligar();
        public function desligar();
    }

    class Geladeira implements EquipamentoEletronicoInterface {
        public function abrirPorta() {
            echo "Abrir Porta";
        }

        public function ligar() {
            echo "Ligar";
        }

        public function desligar() {
            echo "Desligar";
        }
    }

    class TV implements EquipamentoEletronicoInterface{
        public function trocarCanal() {
            echo "Trocar canal";
        }

        public function ligar() {
            echo "Ligar";
        }

        public function desligar() {
            echo "Desligar";
        }
    }

    $x = new Geladeira();
    $y = new TV();

    // ----------------------------------------------------

    // Interfaces
    interface MamiferoInterface {
        public function respirar();
    }

    interface TerrestreInterface {
        public function andar();
    }

    interface AquaticoInterface {
        public function nadar();
    }

    // Classes
    class Humano implements MamiferoInterface, TerrestreInterface {
        public function respirar() {
            echo "Respirar";
        }

        public function andar() {
            echo "Andar";
        }

        public function conversar () {
            echo "Conversar";
        }
    }

    class Baleia implements MamiferoInterface, AquaticoInterface {
        public function respirar() {
            echo "Respirar";
        }

        public function nadar() {
            echo "Nadar";
        }

        protected function esguichar() {
            echo "Esguichar";
        }
    }

    // ----------------------------------------------------
    
    interface AnimalInterface {
        public function comer();
    }

    interface AveInterface extends AnimalInterface {
        public function voar();
    }

    class Papagaio implements AveInterface {
        public function voar() {
            echo "Voar";
        }

        public function comer() {
            echo "Comer";
        }
    }

?>