<?php

class animal {
    
    public string $nom;
    public string $tipus;

    public function __construct(string $nom, string $tipus) {
        $this->nom = $nom;
        $this->tipus = $tipus;
    }

    public function descriure(): string {
        return "El animal es " .$this->nom. " y es un " .$this->tipus. " ."; 
    }

}

//inicializamos con la variable persona con null. realizamos una comprobación de la solicitud con el post y guardamos los datos enviados en $nom y $tipus del formulario
$animal = null;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"] ?? "";
    $tipus = $_POST["tipus"] ?? "";

//se verifica que el dato que pongamos en $nom no esté vacío y que el tipus igual. si los datos son correctos se crea una instancia de la clase animal con los valores que hemos rellenado en el formulario
    if (!empty($nom) && !empty($tipus)) {
        $animal = new animal($nom, $tipus);
    } else {
        echo "<p style='color: red;'>Si us plau, introdueix dades vàlides.</p>";
    }
}
echo '<br>';
echo '<br>';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form method="post">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required>
        <br><br>
        <label for="edat">Tipus:</label>
        <input type="text" id="tipus" name="tipus" required>
        <br><br>
        <button type="submit">Enviar</button>
    </form>

    <?php

//si pasamos los valores de nom y edat a $persona donde anteriormente se inicializa con un null, pintará el nombre y la edad de la persona
    if ($animal) {
        echo "<p>" . $animal->descriure() . "</p>";
    }
    ?>
</body>
</html>