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

$productes = [

    new Producte("Cocacola", "3€"),
    new Producte("Fanta", "3€"),
    new Producte("Pipas", "1€"),
    new Producte("Pizza", "3€"),
    new Producte("Kinder bueno", "2€")

];





?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <h2>Llista de Productes</h2>
    <table>
        <tr>
            <th>Nom</th>
            <th>Preu</th>
        </tr>
        <?php foreach ($productes as $producte): ?>
            <tr>
                <td><?= htmlspecialchars($producte->nom) ?></td>
                <td><?= number_format($producte->preu, 2) ?>€</td>
            </tr>
    <?php endforeach; ?>

    </table>

</body>
</html>