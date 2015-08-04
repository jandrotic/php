<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</head>
	<body>
		<h4>Para poder realizar los siguientes ejemplos, hemos creado con phpmyadmin una BBDD llamada base1 y una tabla alumnos.<br>
		Vamos a dar de Alta a Alumnos</h4><p>
		
		<form action = "insert2.php" method = "post">
			Inserta nombre: <input type = "text" name = "nombre"><br>
			Inserta mail: <input type = "text" name = "mail"><br>
			Seleccione el curso:<br>
			<select name = "codigocurso">
				<option value = "1">PHP</option><br>
				<option value = "2">ASP</option><br>
				<option value = "3">JSP</option><br>
			</select>
			<p><input type = "submit" value = "Registrar">
		</form>
		
			<p><a href = "index.html"> volver <a>
	 	</body>
</html>