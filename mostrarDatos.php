<?php
	//paso 1 es conectarnos con el servidor //esta manera ya esta obsoleta!!
	$conectar = mysql_connect('localhost', 'root', '');
	if(!$conectar){
		echo'No Se Pudo Establecer Conexion Con El Servidor: '. mysql_error();
	}else{
	//Paso 2 es seleccionar la base de datos
		$base = mysql_select_db('prueba',$conectar);
		if(!$base){
			echo'No se encontro la base de datos: '.mysql_error();
		}else{
	//Paso 3 es hacer la sentencia sql y ejecutarla
			$sql = "SELECT * FROM datos";
			$ejecuta_sentencia = mysql_query($sql);
			if(!$ejecuta_sentencia){
				echo'hay un error en la sentencia de sql: '.$sql;
			}else{
	//Paso 4 es traer los resultados como un array para imprirlos en pantalla
				$lista_datos = mysql_fetch_array($ejecuta_sentencia);
			}
		}
	}
?>

<!DOCTYPE hmtl>
<html>
	<head>
		<title>Mostrar Datos</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
	<body>
		<h1>Mostrando Datos Desde Una Base De Datos</h1>
		<table>
			<tr>
				<th>Nombre</th>
				<th>Correo</th>
                <th>Mensaje</th>
				<?php
					for($i=0; $i<$lista_datos; $i++){
						echo"<tr>";
							echo"<td>";
								echo$lista_datos['nombre'];
							echo"</td>";
							
							echo"<td>";
								echo$lista_datos['correo'];
							echo"</td>";
                            echo"<td>";
                                echo$lista_datos['mensaje']
						echo"</tr>";
						
						$lista_datos = mysql_fetch_array($ejecuta_sentencia);	
					}
				?>
			</tr>
		</table>
	</body>
</html>