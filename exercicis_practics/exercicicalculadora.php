<?php

class Calculadora {

    public function sumar(float $a, float $b): float {
        return $a + $b;
    }

    public function restar(float $a, float $b): float {
        return $a - $b;
    }

    public function multiplicar(float $a, float $b): float {
        return $a * $b;
    }

    // Método para dividir (con validación para evitar división por cero)
    public function dividir(float $a, float $b): float {
        if ($b == 0) {
            echo "<p> Error: No es pot dividir entre zero </p>";
        }
        return $a / $b;
    }
}

$calculadora = new Calculadora();

echo "El resultado de la suma es: " . $calculadora->sumar(10, 5) . "<br>";
echo "El resultado de la resta es: " . $calculadora->restar(10, 5) . "<br>";
echo "El resultado de la multiplicacion es: " . $calculadora->multiplicar(10, 5) . "<br>";
echo "El resultado de la division es: " . $calculadora->dividir(10, 5) . "<br>";


?>