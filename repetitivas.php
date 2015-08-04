<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</head>
	<body>
		<h4>Mostrar la tabla de multiplicar del 2. Emplear el for, luego el while y por último el do/while.
			La estructura for permite incrementar una variable de 2 en 2:</h4><br>
		<?php
			echo "Utilizamos FOR:"; 
			for ($num = 0;$num <= 10; $num++){
				$res = $num * 2; 
				echo "<br>";
				echo "2 x $num =  " .$res;
			}
			echo "<p>";
			
			echo "Utilizamos WHILE:";
			$num = 0;
			while ($num <= 10){
				$res = $num * 2;
				echo "<br>";
				echo "2 x $num =  " .$res;
				$num = $num + 1;
			}
			echo "<p>";
			
			echo "Utilizamos DO/WHILE:";
			$num = 0;
			do{
				$res = $num * 2;
				echo "<br>";
				echo "2 x $num =  " .$res;
				$num = $num + 1;
			} while ($num <=10);
			echo "<p>";
		?>
			 <a href = "index.html"> volver <a>
	 	</body>
</html>