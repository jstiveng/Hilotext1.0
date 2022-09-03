<?php
$mysqli=mysqli_connect("localhost", "root", "", "hilotext");

    if(isset($_REQUEST['accion'])){
        $accion=$_REQUEST['accion'];

        if($accion=='empresa'){
            $nit=$_GET['nit'];
            $nombre=$_POST['nombre'];
            $nitN=$_POST['nitN'];
            $correo=$_POST['correo'];
            $celular=$_POST['celular'];
            $descripcion=$_POST['descripcion'];
            $representante=$_POST['representante'];
            $contraseña=$_POST['contraseña'];

            $registros = mysqli_query($mysqli, "SELECT * FROM empresa WHERE nit ='$nit'") or die("Problemas en el select ".mysqli_error($mysqli));
             if($reg = mysqli_fetch_array($registros)){
                $upda = mysqli_query($mysqli, "UPDATE `empresa` SET `nombre_emp`='$nombre',`nit`='$nitN',`correo_emp`='$correo',`celular_emp`='$celular',`descripcion_emp`='$descripcion',`rep_legal`='$representante',`contraseña`='$contraseña' WHERE nit ='$nit'")
                or die("Problemas en el select ".mysqli_error($con));
                echo "<script>
                alert('Se modificaron correctamente los datos de la empresa');
                location.href='empresa/inicio.php?nit=$nitN';
                </script>";
            }else{
                echo "<script>
                alert('No se actualizaron los datos de la empresa');
                location.href='empresa/inicio.php?nit=$nit';
                </script>";
             }

         }
        if ($accion=='operario'){
            $documento=$_GET['documento'];
            $documentoN=$_POST['documentoN'];
            $nombre=$_POST['nombre'];
            $celular=$_POST['celular'];
            $correo=$_POST['correo'];
            $contraseña=$_POST['contraseña'];

            $registros = mysqli_query($mysqli, "SELECT * FROM operario WHERE documento_ope ='$documento'") or die("Problemas en el select ".mysqli_error($mysqli));

           

            if($reg = mysqli_fetch_array($registros)){
                $upda = mysqli_query($mysqli, "UPDATE `operario` SET `nombre_ope`='$nombre',`celular`='$celular',`documento_ope`='$documentoN',`correo_ope`='$correo',`contraseña`='$contraseña' WHERE documento_ope='$documento'")
                or die("Problemas en el select ".mysqli_error($con));
                echo "<script>
                alert('Se modificaron correctamente los datos del operario');
                location.href='operario/inicio.php?documento=$documentoN';
                </script>";
            }else{
                echo "<script>
                alert('No se actualizaron los datos de la empresa');
                location.href='operario/inicio.php?documento=$documento';
                </script>";
             }
        }
        if ($accion=='tecnico'){
            $documento=$_GET["documento"];
            $documentoN=$_POST["documentoN"];
            $nombre=$_POST["nombre"];
            $apellido=$_POST["apellido"];
            $celular=$_POST["celular"];
            $especialidad=$_POST["especialidad"];
            $contraseña=$_POST["contraseña"];

            $registros = mysqli_query($mysqli, "SELECT * FROM tecnico WHERE documento_tec ='$documento'") or die("Problemas en el select ".mysqli_error($mysqli));

            if($reg = mysqli_fetch_array($registros)){
                $upda = mysqli_query($mysqli, "UPDATE `tecnico` SET `nombre_tec`='$nombre',`apellido_tec`='$apellido',`documento_tec`='$documentoN',`celular_tec`='$celular',`especialidad`='$especialidad',`contraseña`='$contraseña' WHERE documento_tec='$documento'")
                or die("Problemas en el select ".mysqli_error($con));
                echo "<script>
                alert('Se modificaron correctamente los datos del operario');
                location.href='tecnico/inicio.php?documento=$documentoN';
                </script>";
            }else{
                echo "<script>
                alert('No se actualizaron los datos de la empresa');
                location.href='tecnico/inicio.php?documento=$documento';
                </script>";
             }
        }
    }

?>