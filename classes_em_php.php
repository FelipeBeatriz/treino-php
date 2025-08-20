<?php
class Invocacao {
    public static function exibir() {
        echo "Exibição!\n";
    }
}

Invocacao::exibir();

class Diferente {
    public $name;
    public $valor;

    // public function __construct($name, $valor) {
    //     $this->name = $name;
    //     $this->valor = $valor;
    // }
}

$variavel_nova = new Diferente();
$variavel_nova ->name = "Exemplo";
$variavel_nova ->valor = 42;
