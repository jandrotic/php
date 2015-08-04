<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Formulario de entrada de datos</title>
	</head>
	<body>
		<h4>Confeccionar un formulario que solicite la carga de un nombre de persona y su edad, luego mostrar en otra página si es mayor de edad (si la edad es mayor o igual a 18)<br>
		y<br> 
		Solicitar que se ingrese por teclado el nombre de una persona y disponer tres controles de tipo radio que nos permitan seleccionar si la persona: 1-no tiene estudios, 2-estudios primarios y 3-estudios secundarios.
		En la página que procesa el formulario mostrar el nombre de la persona y un mensaje indicando el tipo de estudios que posee.<br>
		y<br>
		Confeccionar un formulario que solicite la carga del nombre de una persona y que permita seleccionar una serie de deportes que practica (futbol, basket, tennis, voley)
		Mostrar en la página que procesa el formulario la cantidad de deportes que practica.<br>
		y<br>
		Confeccionar un formulario que solicite el ingreso del nombre de una persona y un control select (en este último permitir la selección de los ingresos mensuales de la persona: 1-1000,1001-3000,>3000)
		En la página que procesa el formulario mostrar un mensaje si debe pagar impuestos a las ganancias (si supera 3000)<br>
		y<br>
		Confeccionar una página que muestre un contrato dentro de un textarea, disponer puntos suspensivos donde el operador debe ingresar un texto. La página que procesa el formulario sólo debe mostrar 
		el contrato con las modificaciones que hizo el operador.
		</h4><br>
		
		<form method = "post" action = "formulario2.php">
			<h2>Controles text/submit</h2>
			Intro nombre:
			<input type = "text" name = "nombre">
			<br>
			Intro edad:
			<input type = "text" name = "edad">
			<br>
			<h2>Controles radio</h2>
			<input type = "radio" name = "radio1" value = "noestudios"> 1-no tiene estudios.
			<br>
			<input type = "radio" name = "radio1" value = "primarios"> 2-estudios primarios. <!-- el name es igual en los tres radios pq así indicamos q están relacionados y cuando marcamos uno se desmarca otro -->
			<br>
			<input type = "radio" name = "radio1" value = "secundarios"> 3-estudios secundarios.
			<br>
			<h2>Controles checkbox</h2>
			<input type = "checkbox" name = "check1">futbol.<br>
			<input type = "checkbox" name = "check2">basket.<br>
			<input type = "checkbox" name = "check3">tenis.<br>
			<input type = "checkbox" name = "check4">voley.<br>
			<h2>Controles select</h2>
			<select name = "ingresos">
				<option value = "menosmil">1-1000</option>
				<option value = "mileurista">1001-3000</option>
				<option value = "mayortresmil">>3000</option>
			</select>
			<h2>Controles textarea</h2>
			<textarea name = "contrato" rows = "8" cols = "80">
				En la ciudad de [........], se acuerda entre la Empresa [..........] 
				representada por el Sr. [..............] en su carácter de Apoderado,
				con domicilio en la calle [..............] y el Sr. [..............],
				futuro empleado con domicilio en [..............], celebrar el presente 
				contrato a Plazo Fijo, de acuerdo a la normativa vigente de los
				artículos 90,92,93,94, 95 y concordantes de la Ley de Contrato de Trabajo N° 20.744.
			</textarea>
			<p>
			<input type = "submit" value = "confirmar">		
		</form>
		<p>
		<a href = "index.html"> volver <a>
	 	</body>
</html>