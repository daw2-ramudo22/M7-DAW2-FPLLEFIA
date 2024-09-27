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
        <link rel="stylesheet" href="ex2.css">
	</head>
	<body style="background-color: #dddddd;">
		<div class="tabla">
			<?php
				for($m1 = 1;$m1 <= 12;$m1 ++){
                    echo '<div class="espaciado"> ';
                    echo '<p>La tabla del ';
                    echo $m1;
                    echo '</p>';
                    for($m2 = 1;$m2 <= 10;$m2 ++){
                        echo "<div class='hover'>{$m1} x {$m2} = ";
                        echo ($m1 * $m2);
                        echo ' </div>';
                    }
                echo '</div>';
				}
			?>
		</div>
	</body> 
</html>
