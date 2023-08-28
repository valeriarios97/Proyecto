<?php
include('conexion.php');
$id=$_GET["id"];
// echo $id;
$result=mysqli_query($conexion,"select * from universidades where IdUniversidad=$id") or die ("problemas en el select".mysqli_error($conexion));

while($row = mysqli_fetch_array($result)){

	$nom=$row['Nombre'];
}

echo "Esta seguro que desea eliminar el registro  ".$id. "con marca ".$nom."";

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="confirmareliminar.php?ced=<?php echo $_GET['id'];?>">SI /</a>
<a href="mostraruniversidades.php">NO</a>
</body>
</html>