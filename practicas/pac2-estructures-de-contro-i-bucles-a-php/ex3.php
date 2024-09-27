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
        <link rel="stylesheet" href="ex3.css">
	</head>
	<body style="background-color: black;">
		<div>
			<?php
                echo '<div class="centrar">';
                    $n = rand(0, 100);
                    if($n % 2 == 0){
                        echo "<p class='par'>El número {$n} es par</p>";
                    }else{
                        echo "<p class='impar'>El número {$n} es impar</p>";
                    }
                echo '</div>';
			?>
		</div>
	</body> 
</html>
