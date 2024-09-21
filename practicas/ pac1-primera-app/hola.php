<?php

$fechaActual = date("Y-m-d");

?>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0
.0/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min
.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/p
opper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.
min.js"></script>

<html>
	<head>
		<title>Visual Studio Code Remote :: PHP</title>
        <link rel="stylesheet" href="maquetacion.css">
	</head>
	<body>
        <div class="page">
            <header>
                <div>
                    <img src="logofp.png" alt="" class="logo">
                </div>
                <div class="titulo">
                    <h1 class="modulo">Módulo 7 - Práctica 1. Mi primera aplicación en PHP</h1>
                </div>
            </header>
            <div class="row">
                <div class="col-6">
                    <img src="alejandro.png" alt="" class="foto">
                    <p style="font-weight: bold;" class="piefoto">Alejandro Ramudo</p>
                </div>
                <div class="col-6">
                    <p class="texto">Aquesta pàgina **hola.php** forma part de la **pràctica 1** del mòdul 7. En el fitxer **index.php**, normalment s'hi defineixen les parts bàsiques d'una pàgina PHP, com ara el **header**, que conté informació inicial de la pàgina, així com el logo o títol, i el **body**, on es mostren els continguts principals. També es pot veure l'estructura de **columnes** que separen les diferents seccions del disseny</p>
                </div>
            </div>
            <footer>
                <div>
                    <p style="font-weight: bold;">Alejandro Ramudo Cruz</p>
                    <p>
                        <?php 
                        
                        echo "La fecha de hoy es: $fechaActual";
                        
                        ?>
                    </p>
                </div>
            </footer>
        </div>     
	</body> 
</html>