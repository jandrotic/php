<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</head>
	<body>
		<h4>Crear un vector asociativo que almacene las claves de acceso de 5 usuarios de un sistema. Acceder a cada componente por su nombre. Imprimir una componente del vector.
		</h4><br>
		Nota: Un vector asociativo permite acceder a un elemento del vector por medio de un subíndice de tipo string.<p>
		
		<?php
			$password['Pedro'] = "pass1";
			$password['Juan'] = "pass2";
			$password['Alex'] = "pass3";
			$password['Alfonso'] = "pass4";
			$password['Marta'] = "pass5";
			
			echo "la password de Alex es: ".$password['Alex'];
			echo "<p>";
			
			//otra forma de crear el vector asociativo
			$password1 = array ('Pedro' => "pass1",
								'Juan' => "pass2",
								'Alex' => "pass3",
								'Alfonso' => "pass4");
			echo "La password de Alfonso es: ".$password1['Alfonso']." , hemos utilizado otra forma de crear vector asociativo";
		?>
			 <p><a href = "index.html"> volver <a>
	 	</body>
</html>