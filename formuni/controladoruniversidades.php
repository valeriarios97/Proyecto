<?php
include("conexion.php");
$id=$_POST["id"];
$nombre=$_POST["nombre"];
$contacto=$_POST["contacto"];
$programa=$_POST["programa"];
$precio=$_POST["precio"];
$query="UPDATE universidades SET IdUniversidad='$id',Nombre='$nombre',Contacto='$contacto',Programa='$programa',Precio_pin='$precio'
WHERE IdUniversidad=$id";
//funcion para enviar registro a la bd
$cons=mysqli_query($conexion,$query);
if($cons){
    echo "<script>alert('Guardado exitosamente');</script>"; 
}

?>