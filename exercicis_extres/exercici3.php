<?php

class persona {

    public string $nom;
    public int $edat;

    public function __construct(string $nom, int $edat) {
        $this->nom = $nom;
        $this->edat = $edat;
    }

    public function descripcio(): string {
        return "Hola, sóc " .$this->nom. " i tinc " .$this->edat. " anys."; 
    }

}

$persona = new persona("Alejandro", 27);
echo $persona->descripcio();
echo '<br>';