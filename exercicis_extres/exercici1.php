<?php

class cotxe {

    public string $marca;
    public string $model;

    public function __construct(string $marca, string $model) {
        $this->marca = $marca;
        $this->model = $model;
    }

    public function descripcio(): string {
        return "La marca es " .$this->marca. " i el model es " .$this->model. "."; 
    }

}

$cotxe = new cotxe("Seat", "Ibiza FR");
echo $cotxe->descripcio();
echo '<br>';

?>