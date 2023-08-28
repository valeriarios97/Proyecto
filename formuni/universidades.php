<?php
include("conexion.php");
$id=$_POST["id"];
$nombre=$_POST["nombre"];
$contacto=$_POST["contacto"];
$programa=$_POST["programa"];
$precio=$_POST["precio"];
mysqli_query($conexion,"insert into universidades(idUniversidad,Nombre,Contacto,Programa,Precio_pin) 
values($id,'$nombre',$contacto,'$programa',$precio)") or die("problemas al insertar".mysqli_error($conexion));
echo "<script>alert('Guardado exitosamente');</script>"
?>
