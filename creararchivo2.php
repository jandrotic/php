<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</head>
	<body>
		<?php
			$ar = fopen ("pedidopizza.txt","a") or die ("Problemas en la creación"); /*La función fopen retorna una referencia al archivo y la almacenamos en una variable llamada $ar.
																						El segundo parámetro de la función fopen indica la forma de apertura de archivo "a" (lo crea o si ya existe
																						el archivo lo abre para añadir datos al final), "w" (crea el archivo de texto, si existe borra su contenido)
																						y la última forma de apertura del archivo es "r" (abre el archivo para su lectura)
																						Si el archivo no se puede abrir se llama a la función die.*/
			fputs($ar, $_REQUEST['nombre']);										//Para grabar los datos se usa fputs, tiene 2 parametros: referencia al archivo donde grabamos y el string que grabamos.
			fputs($ar, "\n");
			fputs($ar, $_REQUEST['direccion']);
			fputs($ar, "\n");
			
			if(isset ($_REQUEST['jamonqueso'])){
				fputs($ar, "Cantidad de Jamón y Queso: ");
				fputs($ar, $_REQUEST['cantidadjq']);
				fputs($ar, "\n");
			}
			if(isset ($_REQUEST['napolitana'])){
				fputs($ar, "Cantidad de Napolitana: ");
				fputs($ar, $_REQUEST['cantidadnap']);
				fputs($ar, "\n");
			}
			if(isset ($_REQUEST['mozzarella'])){
				fputs($ar, "Cantidad de Mozzarella: ");
				fputs($ar, $_REQUEST['cantidadmoz']);
				fputs($ar, "\n");
			}
			
			fputs($ar,"--------------------------------------------------------");
			fputs($ar, "\n");
			
			fclose($ar);
			echo "El pedido se cargo correctamente";
		?>
			 <p><a href = "index.html"> volver <a>
	 	</body>
</html>