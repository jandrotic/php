<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</head>
	<body>
		<?php
			function comprobarPass($clave1, $clave2){
				if($clave1 != $clave2){
					echo "Las contraseñas no son iguales";
				}
			}
			
			comprobarPass($_REQUEST['pass1'], $_REQUEST['pass2']);
		?>
		
			<p> Las claves están verificadas
			 <p><a href = "index.html"> volver <a>
	 	</body>
</html>