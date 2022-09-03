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
    $nit=$_REQUEST['nit'];
    $correo=$_REQUEST['correo'];
    $celular=$_REQUEST['celular'];
    $descripcion=$_REQUEST['descripcion'];
    $representante=$_REQUEST['representante'];
    $contraseña=$_REQUEST['contraseña'];
    $sql="INSERT INTO `empresa` VALUES ('$nombre', '$nit','$correo', '$celular', '$descripcion','$representante', '$contraseña')";
    if(mysqli_query($mysqli,$sql)){
        echo "<script>
        location.href='../controlador_inicio_de_sesion.php?accion=empresa';
        alert('Se realizo el registro correctamente');
        </script>";
    }
    else {
    echo "<script>
        location.href='registro_empresa.php';
        alert('No se pudo realizar el registro, intentelo nuevamente');
    </script>";
    }
    mysqli_close($mysqli);

?>
    
</body>
</html>