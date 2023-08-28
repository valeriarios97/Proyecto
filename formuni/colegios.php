<?php
include("conexion.php");
$id=$_POST["id"];
$nombre=$_POST["nombre"];
$contacto=$_POST["contacto"];
$correo=$_POST["correo"];
mysqli_query($conexion,"insert into colegios(idColegio,Nombre,Contacto,Correo) 
values($id,'$nombre',$contacto,'$correo')") or die("problemas al insertar".mysqli_error($conexion));
echo "<script>alert('Guardado exitosamente');</script>"
?>
