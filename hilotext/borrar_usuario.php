<script>
var borrar=confirm('¿Esta seguro que desea eliminar este usuario?');
if(borrar){
    <?php
$conexion=mysqli_connect("localhost", "root", "", "hilotext");
$usuario=$_GET['accion'];
$documento=$_GET['documento'];
if($usuario=='empresa'){
    $registros = mysqli_query($conexion, "SELECT * FROM empresa WHERE nit ='$documento'") or die("Problemas en el select ".mysqli_error($conexion));
    if($reg = mysqli_fetch_array($registros)){
        echo"alert('Se va a borrar al usuario')";
        $upda = mysqli_query($conexion, "DELETE FROM `empresa` WHERE nit='$documento'");
    }
}
else if($usuario=='operario'){
    $registros = mysqli_query($conexion, "SELECT * FROM operario WHERE documento_ope ='$documento'") or die("Problemas en el select ".mysqli_error($conexion));
    if($reg = mysqli_fetch_array($registros)){
        echo"alert('Se va a borrar al usuario')";
        $upda = mysqli_query($conexion, "DELETE FROM `operario` WHERE documento_ope='$documento'");
    }
}
else if($usuario=='tecnico'){
    $registros = mysqli_query($conexion, "SELECT * FROM tecnico WHERE documento_tec ='$documento'") or die("Problemas en el select ".mysqli_error($conexion));
    if($reg = mysqli_fetch_array($registros)){
        echo"alert('Se va a borrar al usuario')";
        $upda = mysqli_query($conexion, "DELETE FROM `tecnico` WHERE documento_tec='$documento'");
    }
}
?>
alert('Se borro exitosamente el usuario');
location.href='index.html';
}else{
    alert('No se borro ningun usuario');
    location.href='index.html';
}
</script>