<?php 
$conexion=mysqli_connect("localhost", "root", "", "hilotext");

$accion=$_GET['accion'];
if($accion=='recuperar'){
    $rol=$_POST['rol'];
    $documento=$_POST['documento'];
    $contraseña=$_POST['contraseña'];
    if($rol=='empresa'){
        $consulta="SELECT * FROM empresa WHERE nit='$documento'";
        $resultado=mysqli_query($conexion, $consulta);
        if($reg = mysqli_fetch_array($resultado)){
            $upda = mysqli_query($conexion, "UPDATE `empresa` SET `contraseña`='$contraseña' WHERE nit ='$documento'")
            or die("Problemas en el select ".mysqli_error($conexion));
            echo "<script>
            alert('Se reestablecio la contraseña correctamente');
            location.href='controlador_inicio_de_sesion.php?accion=empresa';
            </script>";
        }else{
            echo "<script>
            alert('No se pudo reestablecer la contraseña de la empresa');
            location.href='index.html';
            </script>";
         }
    }
    else if($rol=='operario'){
        $consulta="SELECT * FROM operario WHERE documento_ope='$documento'";
        $resultado=mysqli_query($conexion, $consulta);
        if($reg = mysqli_fetch_array($resultado)){
            $upda = mysqli_query($conexion, "UPDATE `operario` SET `contraseña`='$contraseña' WHERE documento_ope='$documento'")
            or die("Problemas en el select ".mysqli_error($conexion));
            echo "<script>alert('Se reestablecio la contraseña correctamente');
            location.href='controlador_inicio_de_sesion.php?accion=operario';
            </script>";
        }else{
            echo "<script>
            alert('No se pudo reestablecer la contraseña');
            location.href='index.html';
            </script>";
         }
    }
    else if($rol=='tecnico'){
        $consulta="SELECT * FROM tecnico WHERE documento_tec='$documento'";
        $resultado=mysqli_query($conexion, $consulta);
        if($reg = mysqli_fetch_array($resultado)){
            $upda = mysqli_query($conexion, "UPDATE `tecnico` SET `contraseña`='$contraseña' WHERE documento_tec='$documento'")
            or die("Problemas en el select ".mysqli_error($conexion));
            echo "<script>alert('Se reestablecio la contraseña correctamente');
            location.href='controlador_inicio_de_sesion.php?accion=tecnico';
            </script>";
        }else{
            echo "<script>
            alert('No se pudo reestablecer la contraseña');
            location.href='index.html';
            </script>";
         }
    }
    else{
        echo "<script>alert('El rol $rol no existe ingrese nuevamente')
        location.href='recuperar_contraseña.php'
        </script>";
    }
}
else{?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hilotext</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="img/icono.png" type="image/x-icon">

</head>
<body>
    <header>
        <nav>
            <a href="index.html"> Inicio</a> 
            <a href="nosotros.html"> Acerca de</a> 
            <a href="#"> Contacto</a> 
        </nav>

        <section class="textos-header">
            <h1>La comunicacion es una ventana </h1>
            <h2> de oportunidades</h2>
        </section>
        <div  class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill:#fff;"></path></svg></div>
    </header>

    <main >
        <section class="contendor">
            <div class="ingresar1">
                <img  class="inde" src="./img/undraw_Newspaper_re_syf5.png" alt="">
            </div>
            <div class="ingresar2">
                <form action="recuperar_contraseña.php?accion=recuperar" method="post">

                    <table>
                        <tr>
                            <td><h2>Recuperar contraseña</h2></td>
                        </tr>
                    </tr>
                    <td><input  style="border: 1px solid #dddfe2;color: #1d2129;    font-family: Helvetica, Arial, sans-serif; font-size: 12px; height: 42px; line-height: 162px; padding: 18px;
                            vertical-align: middle;    border-radius: 20px ;width: 320px;
                            " type="text" id="nombre" name="rol" placeholder="Escribe tu rol en el sistema (empresa, tecnico u operario)" size="20"></td>
                    </tr>
                    </tr>
                        <td><input  style="border: 1px solid #dddfe2;color: #1d2129;    font-family: Helvetica, Arial, sans-serif; font-size: 12px; height: 42px; line-height: 162px; padding: 18px;
                            vertical-align: middle;    border-radius: 20px ;width: 320px;
                            " type="text" id="nombre" name="documento" placeholder="Ingresa tu nit o documento" size="20"></td>
                    </tr>
                    </tr>
                        <td><input  style="border: 1px solid #dddfe2;color: #1d2129;    font-family: Helvetica, Arial, sans-serif; font-size: 12px; height: 42px; line-height: 162px; padding: 18px;
                            vertical-align: middle;    border-radius: 20px ;width: 320px;
                            " type="text" id="nombre" name="contraseña" placeholder="Ingresa la nueva contraseña" size="20"></td>
                    </tr>
                    <tr>
                        <th colspan="2"><input   class= "boton2 "; type="submit" name="sesion" value="Recuperar contraseña"> </a></th>
                    </tr>
                    
                </table>    
            </form>
            </div>

        </section>
        <div style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-11.57,117.94 C155.47,193.92 460.21,-17.25 590.57,172.22 L500.00,150.00 L-3.10,168.27 Z" style="stroke: none; fill: #401e2e;"></path></svg></div>    

    </main>
   
    </section>
        <div style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-11.57,117.94 C155.47,193.92 460.21,-17.25 590.57,172.22 L500.00,150.00 L-3.10,168.27 Z" style="stroke: none; fill: #401e2e;"></path></svg></div>

    </main>

    <footer>
        <p style="text-align:center">Copyright &copy; 2022 All Rights Reserved</p>
        <a style="text-align:center; color:#ffff; " href="mapa.php">Mapa del sitio</a>


    </footer>

</body>
</html>
<?php }?>