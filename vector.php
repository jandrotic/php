<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</head>
	<body>
		<h4>Definir un vector con los nombres de los días de la semana. Luego imprimir el primero y el último elemento del vector.</h4><p>
		<?php
			//Inicializar vector
			$semana[0] = "lunes";
			$semana[1] = "martes";
			$semana[2] = "miercoles";
			$semana[3] = "jueves";
			$semana[4] = "viernes";
			$semana[5] = "sabado";
			$semana[6] = "domingo";
			
			echo "El vector contiene los días de la semana<br>";
			for($cont = 0; $cont<count($semana); $cont++ ){
				echo $semana[$cont]."<br>";
			}
			
			echo "<p>";
			echo "Lo que el enunciado pide:<br>";
			echo $semana[0]."<br>";
			echo $semana[6]."<p>";
				
			//Otra forma de inicializar el vector
			echo "Otra forma de inicializar el vector con el mismo resultado: <br>";
			$semana1 = array ("lunes", "martes", "miercoles", "jueves", "viernes", "sabado", "domingo");
			
			echo "El vector contiene los días de la semana<br>";
			for($cont = 0; $cont<count($semana1); $cont++ ){
				echo $semana1[$cont]."<br>";
			}
			
			echo "<p>";
			echo "Lo que el enunciado pide:<br>";
			echo $semana1[0]."<br>";
			echo $semana1[6];
			
		?>
			<p>
			<a href = "index.html"> volver <a>
	 	</body>
</html>

