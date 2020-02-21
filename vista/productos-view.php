<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style>

	td{
		
		border: 2px #0066FF;	
		
		
		}







</style>


</head>

<body>

<table>

<?php

	foreach($arrayproductos as $registro){
		
		echo "<tr><td>" . $registro["Id"] . "</td></tr>";
		echo "<tr><td>" . $registro["Nombre"] . "</td></tr>";
		echo "<tr><td>" . $registro["Descripcion"] . "</td></tr>";
		echo "<tr><td>" . $registro["Precio"] . "</td></tr>";
		
	}

?>
</table>

</body>
</html>