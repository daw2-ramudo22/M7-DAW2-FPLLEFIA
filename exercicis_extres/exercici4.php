<?php

class persona {

    public string $nom;
    public int $edat;

    public function __construct(string $nom, int $edat) {
        $this->nom = $nom;
        $this->edat = $edat;
    }

    public function descripcio(): string {
        return "Hola, sóc " .$this->nom. " i tinc " .$this->edat. " anys.<br>"; 
    }

}

$persona = new persona("Alejandro", 27);
$persona2 = new persona("Joan", 28);
$persona3 = new persona("Gerard", 28);

echo $persona->descripcio();
echo $persona2->descripcio();
echo $persona3->descripcio();

echo '<br>';