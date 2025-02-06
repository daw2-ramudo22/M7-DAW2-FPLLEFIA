<?php

class animal {
    
    public string $nom;
    public string $tipus;

    public function __construct(string $nom = "Yuna", string $tipus = "gos") {
        $this->nom = $nom;
        $this->tipus = $tipus;
    }

    public function saludar(): string {
        return "Hola, sóc un " .$this->tipus. " i em dic " .$this->nom. " ."; 
    }

}

$animal = new animal();
echo $animal->saludar();

?>