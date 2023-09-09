<?php //Abrimos php
	$servername = "localhost";
$database = "prueba";
$username = "root";
$password = "password";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
echo "Connected successfully, ";
}
	//Se Hace la sentencia sql:
	$sql="SELECT * FROM datos"; //->Donde * es igual a todos los campos entonces la sentencia seria esta-> seleccionamos todos los campos de la tabla datos
	//ejecutamos la sentencia de slq:
	$ejecutar=mysqli_query($conn,$sql);
	//traenos todos los valores en un array:
	$datos=mysqli_fetch_array($ejecutar);
	//imprimimos los datos de manera dinamica
	echo "<table border='1'>";
	echo"<tr>";
	echo "<th align='center'><b>Nombre</th>";
	echo "<th align='center'><b>Correo</th>";
	echo "<th align='center'><b>Mensaje</th>";
	echo"</tr>";
	for($i=0; $i<$datos; $i++){
		echo"<tr><td>$datos[0]</td>";
		echo"<td>$datos[1]</td>";
		echo"<td>$datos[2]</td>";
		echo"</tr>";
		$datos=mysqli_fetch_array($ejecutar);
	}
	echo"</table>";
?>
