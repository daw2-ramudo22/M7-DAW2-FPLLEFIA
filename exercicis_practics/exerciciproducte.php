<?php

class producte {

    public string $nom;
    public string $preu;

    public function __construct(string $nom, string $preu) {
        $this->nom = $nom;
        $this->preu = $preu;
    }

    public function descripcio(): string {
        return "El producte es " .$this->nom. " i el preu es " .$this->preu. ".<br>"; 
    }

    public function getProducte(): string {
        return $this->preu;
    }
}


$producte1 = new Producte("Cocacola", "3€");
$producte2 = new Producte("Fanta", "3€");
$producte3 = new Producte("Pipas", "1€");
$producte4 = new Producte("Pizza", "3€");
$producte5 = new Producte("Kinder bueno", "2€");


echo $producte1->descripcio();
echo $producte2->descripcio();
echo $producte3->descripcio();
echo $producte4->descripcio();
echo $producte5->descripcio();

?>