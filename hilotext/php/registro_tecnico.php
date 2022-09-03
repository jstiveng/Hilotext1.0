<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hilotext</title>
</head>
<body>

<?php
    require 'conexion.php';
    $nombre=$_REQUEST['nombre'];
    $apellido=$_REQUEST['apellido'];
    $documento=$_REQUEST['documento'];
    $celular=$_REQUEST['celular'];
    $especialidad=$_REQUEST['especialidad'];
    $contra=$_REQUEST['contraseña'];

    $sql="INSERT INTO `tecnico` VALUES ('$nombre', '$apellido','$documento', '$celular', '$especialidad', '$contra')";
    if(mysqli_query($mysqli,$sql)){
        echo "<script>
        location.href='../controlador_inicio_de_sesion.php?accion=tecnico';
        alert('Se realizo el registro correctamente');
        </script>";
    }
    else {
    echo "<script>
        location.href='registro_tecnico.php';
        alert('No se pudo realizar el registro, intentelo nuevamente');
    </script>";
    }
    mysqli_close($mysqli);

?>
    
</body>
</html>