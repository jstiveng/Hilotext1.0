<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hilotext</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="shortcut icon" href="../img/icono.png" type="image/x-icon">

</head>
<?php 
$documento=$_GET['documento'];
$conexion=mysqli_connect("localhost", "root", "", "hilotext");
$datos="SELECT * FROM tecnico WHERE documento_tec='$documento'";
$consulta=mysqli_query($conexion, $datos);
$n=mysqli_fetch_array($consulta);

?>
<body>
<header>
        <nav>
            <a href="inicio.php?documento=<?php echo "$documento"?>"> Inicio</a> 
            <a href="../nosotros.html"> Acerca de</a> 
            <a href="../contacto.html"> Contacto</a> 
            <a href="../ayuda.html">Ayuda</a> 
        </nav>
        <section class="textos-header"></section>
        </section>
        <div  class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill:#fff;"></path></svg></div>
    </header>
    <h1 style="padding: 12px 300px;  width: 220px;"><?php echo "$n[nombre_tec] $n[apellido_tec]";?></h1>

        
<section class="contendor">
    <div class="ingresar1" >
        <img  class="inde" src="../img/Captura1.PNG" style="width:550px; height:450px">
    </div>
    <form method="post" action="../controlador_actualizar.php?accion=tecnico&documento=<?php echo "$documento";?>">
    <div class="ingresar2">
        <table>
            
            <tr>
                <td> <h1 style="float: left; font-size: 30px;">Edita tu perfil</h1></td>
            </tr>
            <tr>
                <tr>
                    <td></td>
                </tr>
                <td><input  style="border: 1px solid #dddfe2;color: #1d2129;    font-family: Helvetica, Arial, sans-serif; font-size: 12px; height: 42px; line-height: 162px; padding: 18px;
                    vertical-align: middle;    border-radius: 20px ;width: 320px;
                    " type="text" value="<?php echo "$n[nombre_tec]";?>" id="nombre" name="nombre" placeholder="<?php echo "$n[nombre_tec]";?>" size="20"></td>
            </tr>

            <tr>
                <td></td>
                <tr>
                <td><input  style="border: 1px solid #dddfe2;color: #1d2129;    font-family: Helvetica, Arial, sans-serif; font-size: 12px; height: 42px; line-height: 162px; padding: 18px;
                    vertical-align: middle;    border-radius: 20px ;width: 320px;
                    " type="text" id="apellido" value="<?php echo "$n[apellido_tec]";?>" name="apellido" placeholder="<?php echo "$n[apellido_tec]";?>" size="20"></td>
            </tr>
            </tr>
            <tr>
                <td><input  style="border: 1px solid #dddfe2;color: #1d2129;    font-family: Helvetica, Arial, sans-serif; font-size: 12px; height: 42px; line-height: 162px; padding: 18px;
                    vertical-align: middle;    border-radius: 20px ;width: 320px;
                    " type="text" value="<?php echo "$n[documento_tec]";?>" id="documento" name="documentoN" placeholder="<?php echo "$n[documento_tec]";?>" size="20"></td>
            </tr>

            <tr>
                <td>  <input  style="border: 1px solid #dddfe2;color: #1d2129;    font-family: Helvetica, Arial, sans-serif; font-size: 12px; height: 42px; line-height: 162px; padding: 18px;
                    vertical-align: middle;    border-radius: 20px ;width: 320px;
                    " type="text" value="<?php echo "$n[celular_tec]";?>" id="celular" name="celular" placeholder="<?php echo "$n[celular_tec]";?>" size="20"></td>
            </tr>

           
            <tr>
                <td><input  
                style="border: 1px solid #dddfe2;color: #1d2129;    font-family: Helvetica, Arial, sans-serif; font-size: 12px;width: 320px; height: 42px; line-height: 162px; padding: 18px;
                    vertical-align: middle;    border-radius: 20px ;
                    " type="text" id="especialidad" name="especialidad" value="<?php echo "$n[especialidad]";?>" placeholder="<?php echo "$n[especialidad]";?>" size="20"></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td><input  style="border: 1px solid #dddfe2;color: #1d2129;    font-family: Helvetica, Arial, sans-serif; font-size: 12px; height: 42px; line-height: 162px; padding: 18px;
                    vertical-align: middle;    border-radius: 20px ;width: 320px;
                    " type="text" id="contraseña" value="<?php echo "$n[contraseña]";?>" name="contraseña" placeholder="<?php echo "$n[contraseña]";?>" size="20"></td>
            </tr>
            
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
            </tr><tr>
                <td></td>
            </tr>

            <tr>
                <th colspan="2"><input class="boton1"  type="submit" name="sesion" value="Actualizar"></a></th>
            </tr>
            
           
            
        </table>    
    </div>
</form>
</form>
<form method="post" action="../borrar_usuario.php?accion=tecnico&documento=<?php echo"$documento";?>">

    <input class="boton1E" type="submit" name="sesion" value="¿Deseas eliminar tu perfil?">
</form>
</section>
</section>
<div style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-11.57,117.94 C155.47,193.92 460.21,-17.25 590.57,172.22 L500.00,150.00 L-3.10,168.27 Z" style="stroke: none; fill: #401e2e;"></path></svg></div>

</main>

<footer>
    <p style="text-align:center">Copyright &copy; 2022 All Rights Reserved</p>
    <a style="text-align:center; color:#ffff; " href="mapa.php">Mapa del sitio</a>


</footer>


</body>
</html>