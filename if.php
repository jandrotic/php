<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</head>
	<body>
		<h4>Generar un valor aleatorio entre 1 y 3. Luego imprimir en castellano el número (Ej. si se genera el 3 luego mostrar en la página el string "tres").</h4><br>
		<?php
			
			$num = rand (1, 3);
			echo $num;
			echo "<br>";
			
			if ($num == 3){
				echo "El número es 3.";
			}elseif ($num < 3){
				echo "El número es menor de 3.";
			}else{
				echo "El número es mayor de 3.";
			}
			echo "<p>";
		?>
			 <a href = "index.html"> volver <a>
	 	</body>
</html>