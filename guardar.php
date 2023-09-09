<?php
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
echo "Connected successfully, ";
 //recuperar las variables
 $nombre=$_POST['nombre'];
 $correo=$_POST['correo'];
 $mensaje=$_POST['mensaje'];
 //hacemos la sentencia de sql
 $sql="INSERT INTO datos VALUES('$nombre',
           '$correo',
           '$mensaje')";
 //ejecutamos la sentencia de sql
 $ejecutar=mysqli_query($conn,$sql);
 //verificamos la ejecucion
 if(!$ejecutar){
  echo"Hubo Algun Error";
 }else{
  echo"Datos Guardados Correctamente<br><a href='index.html'>Volver</a>";
 }
mysqli_close($conn);
?>

