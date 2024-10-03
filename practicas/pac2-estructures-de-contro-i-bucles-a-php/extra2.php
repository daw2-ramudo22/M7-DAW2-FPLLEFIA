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
        <link rel="stylesheet" href="extra2.css">
	</head>
	<body style="background-color: black;">
        <div class='volver'>
            <a href="index.php">Volver</a>
        </div>
		<div class='numero'>
			<?php
                
                $media = 0;
                echo "<div class='temperaturas'>";
                    for($i = 0;$i <= 10;$i ++){
                        $temp_random = rand(-10, 40);
                        if($temp_random >= -10 && $temp_random <= 10){
                            echo "<div class='grados'>Temperatura " . ($i) . ": $temp_random frío</div>";
                            $media = $temp_random;
                        }else if($temp_random >= 10 && $temp_random <= 25){
                            echo "<div class='grados'>Temperatura " . ($i) . ": $temp_random suave</div>";
                            $media = $temp_random; 
                        }else{
                            echo "<div class='grados'>Temperatura " . ($i) . ": $temp_random calor</div>";
                            $media = $temp_random;
                        }
                    }
                    $resultadomedia = $media / 3;
                    $resultadoredondeado = round($resultadomedia, 2);
                    echo "<div class='grados'>La media es {$resultadoredondeado}</div>";
                echo "</div>";
			?>
		</div>
	</body> 
</html>