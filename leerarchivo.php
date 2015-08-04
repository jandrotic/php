<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</head>
	<body>
		<?php
			$ar=fopen("pedidopizza.txt", "r") or die("No se pudo abrir el archivo");
			
			while(!feof($ar)){ //La función feof retorna true si se llega al final del archivo en caso contrario false.
				$linea = fgets($ar); //Leer linea completa.
				$lineasalto = nl2br($linea); //La función nl2br convierte el caracter \n a <br>
				echo $lineasalto;
			}
			fclose($ar);
		?>
			 <a href = "index.html"> volver <a>
	 	</body>
</html>