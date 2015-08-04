<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</head>
	<body>
		<h4>Confeccionar un programa en PHP que permita hacer el pedido de pizzas via internet.<br>
				El formulario debe ser:<br>
				Nombre:[..............]<br>
				Direccion:[...................]<br>
				Jamon y queso:[x]<br>
				Cantidad[...]<br>

				Napolitana:[x]<br>
				Cantidad[...]<br>

				Muzzarella;[x]<br>
				Cantidad[...]<br>

				[Confirmar]<br>
		
			Para el ingreso del nombre, dirección y cantidad de pizzas de cada tipo disponer objetos de la clase "text".<br>

			Disponer tres objetos de tipo "checkbox" para seleccionar los tipos de pizzas.	<br>
			Por último disponer un botón para el envío de datos: "submit".<br>

			Grabar en un archivo de texto llamado "pedidopizza.txt" cada pedido, separados por una línea de puntos entre cada pedido.
		</h4><br>
		
		<form action = "creararchivo2.php" method = "post">
			Nombre: <input type = "text" name = "nombre" size = "30">
			<br>
			Dirección: <input type = "text" name = "direccion" size = "40">
			<br><p>
			
			Jamón y Queso: <input type = "checkbox" name = "jamonqueso">
			<br>
			Cantidad: <input type = "text" name = "cantidadjq">
			<br><p>
			
			Napolitana: <input type = "checkbox" name = "napolitana">
			<br>
			Cantidad: <input type = "text" name = "cantidadnap">
			<br><p>
			
			Mozzarella: <input type = "checkbox" name = "mozzarella">
			<br>
			Cantidad: <input type = "text" name = "cantidadmoz">
			<br><p>
			
			<input type = "submit" value = "Enviar">
		</form>
			 <a href = "index.html"> volver <a>
	 	</body>
</html>