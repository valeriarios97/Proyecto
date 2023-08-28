<?php
include 'conexion.php';
$id=$_GET['id'];

$cons = "SELECT * FROM universidades
        WHERE IdUniversidad=$id";
$query=mysqli_query($conexion,$cons);
$fila=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="favi.png" type="image/x-icon">
    <title>Formulario colegios</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="contenedor">
    <center><h1 class="titulo">Universidades</h1></center>
	<form action="controladoruniversidades.php" method="POST" enctype="multipart/form-data">
		<div>
			<table align="center">
				<tr>
	
					<td><input type="number" value="<?php echo $fila[0] ?>" name="id" placeholder="id" disabled></td>
					<td><input type="hidden" value="<?php echo $fila[0] ?>" name="id"></td>
				</tr>
				<tr>
	
					<td><input type="text" value="<?php echo $fila[1] ?>" name="nombre" placeholder="Nombre" required></td>
				</tr>
				<tr>
	
					<td><input type="number" value="<?php echo $fila[2] ?>" name="contacto" placeholder="Contacto" required></td>
				</tr>
				<tr>
	
					<td><input type="text" value="<?php echo $fila[3] ?>" name="programa" placeholder="Programa" required></td>
				</tr>
				<tr>
			
					<td><input type="number" value="<?php echo $fila[4] ?>" name="precio" placeholder="Precio" required></td>
				</tr>
				<tr>
					<td><td><input type="submit" value="Registrar"></td></td>
				</tr>
				
			</table>
		</div>
	</form>
</div>
    
</body>
</html>