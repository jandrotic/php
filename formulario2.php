<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Capturar datos del form</title>
	</head>
	<body>
		<?php
			//text y submit
			echo "El nombre ingresado es: " .$_REQUEST['nombre'];
			echo "<br>";
			echo "La edad ingresada es: " .$_REQUEST['edad'];
			echo "<br>";
			
			if ($_REQUEST['edad'] >= 18){
				echo $_REQUEST['nombre']." tiene ".$_REQUEST['edad']." años, por tanto es mayor de edad.";
			}
			echo "<p>";
			
			//controles radio
			if ($_REQUEST['radio1'] == "noestudios"){
				$estudios = "No tiene estudios";
			}
			
			if ($_REQUEST['radio1'] == "primarios"){
				$estudios = "Tiene estudios primarios";
			}
			
			if ($_REQUEST['radio1'] == "secundarios"){
				$estudios = "Tiene estudios secundarios";
			}
			echo "El nombre de la persona es: ".$_REQUEST['nombre']." y los estudios que posee son: ".$estudios."<p>";
			
			//controles checkbox
			if (isset ($_REQUEST['check1'])){ /*Si el checkbox no está seleccionado en el formulario no se crea una entrada en el vector asociativo $_REQUEST, para saber si existe una determinada componente
												en un vector se emplea la función isset, si retorna true significa que existe y por lo tanto el checkbox está seleccionado.*/
				echo "Practica futbol.<br>";
			}
			if (isset ($_REQUEST['check2'])){
				echo "Practica basket.<br>";
			}
			if (isset ($_REQUEST['check3'])){
				echo "Practica tenis<br>";
			}
			if (isset ($_REQUEST['check4'])){
				echo "Practica voley<br>";
			}
			//controles select
			if ($_REQUEST['ingresos'] == "mayortresmil"){
				echo "Debe pagar impuestos por que es sueldo es mayor de 3000.<p>";
			}else{
				echo "No debe pagar impuestos porque el sueldo es menor de 3000.<p>";
			}
			
			//controles textarea
			echo $_REQUEST['contrato'];
		?>
		<p>
		<a href = "formulario1.php"> volver<a>
		<p>
		<a href = "index.html"> volver a menú <a>
	 	</body>
</html>