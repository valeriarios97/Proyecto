<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favi.png" type="image/x-icon">
    <title>Universidades</title>
</head>
<body>
    <div class="contenedor">
    <table class="reg">
    <tr>
    <th>id</th>
    <th>Nombre</th>
    <th>Contacto</th>
    <th>programa</th>
    <th>Precio</th>
    </tr>
    
    <?php
    echo "<link rel='stylesheet' type='text/css' href='estilo.css'>";
    include "conexion.php";
    $query="SELECT * FROM universidades";
    $cons=mysqli_query($conexion,$query);
    while($vec=mysqli_fetch_array($cons)){?>
   
    <tr>
    <td><?php echo $vec[0]; ?></td>
    <td><?php echo $vec[1]; ?></td>
    <td><?php echo $vec[2]; ?></td>
    <td><?php echo $vec[3]; ?></td>
    <td><?php echo $vec[4]; ?></td>
    <td> <a href='universidadesmodificar.php?id=<?php echo $vec[0]?>'>Modificar</a></td>
	<td> <a href='universidadeseliminar.php?id=<?php echo $vec[0]?>'>Eliminar</a></td>
    </tr>
    <?php }?>
  
    
    
    </table>
    </div>
</body>
</html>