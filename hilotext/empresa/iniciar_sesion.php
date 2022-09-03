<?php
$nit=$_POST['nit'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['nit']=$nit;

$conexion=mysqli_connect("localhost", "root", "", "hilotext");

$consulta="SELECT * FROM empresa WHERE nit='$nit' AND contraseña='$contraseña'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:inicio.php?nit=$nit");
}
else{
   echo("<script>alert('Los datos de inicio de sesion no coinciden, intentelo nuevamente');
   location.href='../controlador_inicio_de_sesion.php?accion=empresa'
   </script>");
}

mysqli_free_result($resultado);
mysqli_close($conexion);
?>