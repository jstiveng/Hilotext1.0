<?php
$documento=$_POST['documento'];
$contraseña=$_POST['contraseñaTecnico'];
session_start();
$_SESSION['documento']=$documento;

$conexion=mysqli_connect("localhost", "root", "", "hilotext");

$consulta="SELECT * FROM tecnico WHERE documento_tec='$documento' AND contraseña='$contraseña'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:inicio.php?documento=$documento");
}
else{
    echo("<script>alert('Los datos de inicio de sesion no coinciden, intentelo nuevamente');
    location.href='../controlador_inicio_de_sesion.php?accion=tecnico';
    </script>");
}

mysqli_free_result($resultado);
mysqli_close($conexion);
?>