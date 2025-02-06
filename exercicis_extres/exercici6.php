<?php

class Calculadora {

    public function sumar(float $a, float $b): float {
        return $a + $b;
    }

}

$calculadora = new Calculadora();

echo "El resultado de la suma es: " . $calculadora->sumar(2, 2) . "<br>";

?>