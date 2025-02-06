<?php

class animal {
    
    public string $nom;
    public string $tipus;

    public function __construct(string $nom = "Yuna", string $tipus = "gos") {
        $this->nom = $nom;
        $this->tipus = $tipus;
    }

    public function descriure(): string {
        return "El animal es " .$this->nom. " y es un " .$this->tipus. " ."; 
    }

}

$animal = new animal();
echo $animal->descriure();

?>