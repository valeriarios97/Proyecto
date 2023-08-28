<?php
include('conexion.php');
$id=$_GET['ced'];

mysqli_query($conexion,"DELETE from universidades where IdUniversidad=$id") or die ("problemas en el select".mysqli_error($conexion)); header("location: mostraruniversidades.php");


?>  