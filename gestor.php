
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>db_gestor</title>
</head>
<body>
<?php

$enlace = mysqli_connect("localhost", "polankoak2", "Qaz12wsx$$", "NextCell");

$consulta = "SELECT * FROM `Clientes`"; //consulta en SQL la que se guarda en variable $consulta
$exe_consulta = mysqli_query($enlace, $consulta); //ejecución de la consulta en la BD la que se guarda en variable $exe_consulta.
$verFilas = mysqli_num_rows($exe_consulta);//cuenta cantidad de filas mostradas en el select.
//se condiciona la consulta para controlar el error si la consulta no queda OK.
	if(!$exe_consulta){

			echo "Error en la consulta";
	} else{

		if($verFilas<1){

			echo "<tr><td>Sin Registros</td></tr>";
		} else{
//se crea grilla para mostrar los datos por pantalla.
			echo "
					<table border = 1 cellspacing = 1 cellpadding = 1>
							<tr>
									<th>Rut</th>
									<th>Nombre</th>
									<th>Direccion</th>
									<th>Email</th>
									<th>Saldo</th>
							</tr>";
//se insertan los datos en cada casilla correspondiente para ser mostrados por pantalla.							
			while($row = mysqli_fetch_array($exe_consulta)){
			echo "
					<tr>
						<td>".$row[0]."</td>
						<td>".$row[1]."</td>
						<td>".$row[2]."</td>
						<td>".$row[3]."</td>
						<td>".$row[4]."</td>
					</tr>";

				}

			}
		}


?>
</body>
</html>