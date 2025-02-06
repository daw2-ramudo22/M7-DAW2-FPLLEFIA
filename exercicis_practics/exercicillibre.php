<?php

class llibre {

    public string $titol;
    public string $autor;

    public function __construct(string $titol, string $autor) {
        $this->titol = $titol;
        $this->autor = $autor;
    }

    public function descripcio(): string {
        return "El titol es " .$this->titol. "y el nom de l'autor es " .$this->autor. "."; 
    }

    public function getAutor(): string {
        return $this->autor;
    }
}

$llibre = new Llibre("La sombra del viento", "Carlos Ruiz Zafón");
echo $llibre->descripcio();
echo '<br>';
echo "L'autor es: " .$llibre->getAutor();
echo '<br>';

?>