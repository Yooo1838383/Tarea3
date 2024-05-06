<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USUARIOS</title>
</head>
<body>
    <?php  include_once 'conexionpdo.php'; ?>
    <h1>USUARIOS</h1>
    <?php
    $enlace = 
    Conexion::conectar()->prepare("SELECT * FROM usuario");
    //prepara la consulta
    $enlace -> execute(); //ejecuta la consulta
    $lugares = $enlace -> fetchAll(); // convertir en matriz
    ?>
    <table border="1">
        <tr>
        <th>Apellido</th>
            <th>Nombre</th>
            
            <th>Correo</th>
            <th>Contraseña</th>
            <th>Foto</th>
        </tr>
        <?php
            foreach ($lugares as $key => $fila)
            {
        ?>
        <tr>
            <td><p><?php echo $fila["apellido"]; ?></p></td>
            <td><h5><?php echo $fila["nombre"]; ?></h5></td>
            
            <td><p><?php echo $fila["correo"]; ?></p></td>
            <td><p><?php echo $fila["pass"]; ?></p></td>
            <td>
                <img src="<?php echo "imagenes/".$fila["foto"]; ?>" width="300"> 
            </td>
           
        </tr> 
        <?php
            }
        ?>
    </table>
  
</body>
</html>