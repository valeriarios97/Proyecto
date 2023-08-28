<?php
include("conexion.php");
$documento=$_POST["documento"];
$nombre=$_POST["nombre"];
$tipo_documento=$_POST["tipo_documento"];
$celular=$_POST["celular"];
mysqli_query($conexion,"insert into estudiantes(idEstudiante,Nombre,Tipo_documento,Celular) 
values($documento,'$nombre','$tipo_documento',$celular)") or die("problemas al insertar".mysqli_error($conexion));
echo "<script>alert('Guardado exitosamente');</script>"
?>
