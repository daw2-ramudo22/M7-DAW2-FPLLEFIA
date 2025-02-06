<?php

class persona {
    
    public string $nom;
    public int $edat;

    public function __construct(string $nom, string $edat) {
        $this->nom = $nom;
        $this->edat = $edat;
    }

    public function saludar(): string {
        return "Hola, sóc " .$this->nom. " i tinc " .$this->edat. " anys."; 
    }

    public function descripcion(): string {
        return "Mi nombre es " .$this->nom. " y tengo " .$this->edat. " años."; 
    }

}

//inicializamos con la variable persona con null. realizamos una comprobación de la solicitud con el post y guardamos los datos enviados en $nom y $edat del formulario
$persona = null;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"] ?? "";
    $edat = $_POST["edat"] ?? 0;

//se verifica que el dato que pongamos en $nom no esté vacío y que la edad sea un numero mayor a 0. si los datos son correctos se crea una instancia de la clase persona con los valores que hemos rellenado en el formulario
    if (!empty($nom) && is_numeric($edat) && $edat > 0) {
        $persona = new persona($nom, (int)$edat);
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
        <label for="edat">Edat:</label>
        <input type="number" id="edat" name="edat" required>
        <br><br>
        <button type="submit">Enviar</button>
    </form>

    <?php

//si pasamos los valores de nom y edat a $persona donde anteriormente se inicializa con un null, pintará el nombre y la edad de la persona
    if ($persona) {
        echo "<p>" . $persona->descripcion() . "</p>";
    }
    ?>
</body>
</html>