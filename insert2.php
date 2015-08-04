<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</head>
	<body>
		<?php
			$conexion = mysqli_connect("localhost", "root", "", "base1") or die("Problemas con la conexión");
			
			mysqli_query($conexion, "insert into alumnos(nombre, mail, codigocurso) values
														('$_REQUEST[nombre]', '$_REQUEST[mail]', $_REQUEST[codigocurso])")
						or die("Problemas en el select".mysqli_error($conexion));
						
			mysqli_close($conexion);
			
			echo "El alumno fue dado de alta.";
		?>
			 <p><a href = "index.html"> volver <a>
	 	</body>
</html>