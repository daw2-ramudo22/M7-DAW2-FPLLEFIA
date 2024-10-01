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
        <link rel="stylesheet" href="extra1.css">
	</head>
	<body style="background-color: black;">
        <div class='volver'>
            <a href="index.php">Volver</a>
        </div>
		<div class='numero'>
			<?php
                $random = rand(1, 100);
				echo "<div class='random'><p>Nombre generat: <p class='colornumero'>{$random}</p></p></div>";
				echo "<div class='texto'><p>Divisores de {$random}:</p></div>";

				echo "<div class='divisores'>";
					for($i = 1;$i <= $random;$i ++){
						if($random % $i == 0){

							echo "<div class='resultado'>{$i}</div>";

						}
					}
				echo "</div>";
			?>
		</div>
	</body> 
</html>