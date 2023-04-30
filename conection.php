<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>db_conection</title>
</head>
<body>
<?php

$enlace = mysqli_connect("localhost", "polankoak2", "Qaz12wsx$$", "NextCell");

if (!$enlace) {
	// code...
	echo "error de conexion";
}
	echo "<b>Conexión Exitosa</b>";
	mysqli_close($enlace);
?>
</body>
</html>