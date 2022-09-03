<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hilotext</title>
    <link rel="stylesheet" href="../css/estilos copy.css">
    <link rel="shortcut icon" href="../img/icono.png" type="image/x-icon">

</head>
<?php 
$nit=$_GET['nit'];
$conexion=mysqli_connect("localhost", "root", "", "hilotext");
$datos="SELECT * FROM empresa WHERE nit='$nit'";
$consulta=mysqli_query($conexion, $datos);
$n=mysqli_fetch_array($consulta);

?>
<body>
<header>
        <nav>
            <a href="inicio.php?nit=<?php echo "$nit"?>"> Inicio</a> 
            <a href="../nosotros.html"> Acerca de</a> 
            <a href="../contacto.html"> Contacto</a> 
            <a href="../ayuda.html">Ayuda</a> 
        </nav>

        <section class="textos-header"></section>
        </section>
        <div  class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill:#fff;"></path></svg></div>
    </header>
    <h1 style="padding: 12px 300px;  width: 220px;"><?php echo "$n[nombre_emp]";?></h1>

        
<section class="contendor">
    <div class="ingresar1" >
        <img  class="inde" src="../img/Captura1.PNG" style="width:550px; height:450px">
    </div>
    <form method="post" action="../controlador_actualizar.php?accion=empresa&nit=<?php echo"$nit";?>">
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
                    " type="text" id="nombre" name="nombre" placeholder="<?php echo "$n[nombre_emp]";?>" value="<?php echo "$n[nombre_emp]";?>" size="20"></td>
            </tr>

            <tr>
                <td></td>
            </tr>
            <tr>
                <td><input  style="border: 1px solid #dddfe2;color: #1d2129;    font-family: Helvetica, Arial, sans-serif; font-size: 12px; height: 42px; line-height: 162px; padding: 18px;
                    vertical-align: middle;    border-radius: 20px ;width: 320px;
                    " type="text" id="nitempresa" name="nitN" placeholder="<?php echo "$n[nit]";?>" value="<?php echo "$n[nit]";?>" size="20"></td>
            </tr>
            <tr>
                <td><input  style="border: 1px solid #dddfe2;color: #1d2129;    font-family: Helvetica, Arial, sans-serif; font-size: 12px; height: 42px; line-height: 162px; padding: 18px;
                    vertical-align: middle;    border-radius: 20px ;width: 320px;
                    " type="email" id="Correo" name="correo" placeholder="<?php echo "$n[correo_emp]";?>" value="<?php echo "$n[correo_emp]";?>" size="20"></td>
            </tr>
            <tr>
                <td>  <input  style="border: 1px solid #dddfe2;color: #1d2129;    font-family: Helvetica, Arial, sans-serif; font-size: 12px; height: 42px; line-height: 162px; padding: 18px;
                    vertical-align: middle;    border-radius: 20px ;width: 320px;
                    " type="text" id="celular" name="celular" placeholder="<?php echo "$n[celular_emp]";?>" value="<?php echo "$n[celular_emp]";?>" size="20"></td>
            </tr>

           
            <tr>
                <td><input  
                style="border: 1px solid #dddfe2;color: #1d2129;    font-family: Helvetica, Arial, sans-serif; font-size: 12px;width: 320px; height: 42px; line-height: 162px; padding: 18px;
                    vertical-align: middle;    border-radius: 20px ;
                    " type="text" id="Descripcion" name="descripcion" placeholder="<?php echo "$n[descripcion_emp]";?>" value="<?php echo "$n[nombre_emp]";?>" size="20"></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td><input style="border: 1px solid #dddfe2;color: #1d2129;    font-family: Helvetica, Arial, sans-serif; font-size: 12px;width: 320px; height: 42px; line-height: 162px; padding: 18px;
                        vertical-align: middle;    border-radius: 20px ;
                        " type="text" id="representante" name="representante" placeholder="<?php echo "$n[rep_legal]";?>" value="<?php echo "$n[rep_legal]";?>" size="20"></td>
            </tr>
            <tr>
                <td><input  style="border: 1px solid #dddfe2;color: #1d2129;    font-family: Helvetica, Arial, sans-serif; font-size: 12px; height: 42px; line-height: 162px; padding: 18px;
                    vertical-align: middle;    border-radius: 20px ;width: 320px;
                    " type="text" id="contraseña" name="contraseña" placeholder="<?php echo "$n[contraseña]";?>" value="<?php echo "$n[contraseña]";?>" size="20"></td>
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
<form method="post" action="../borrar_usuario.php?accion=empresa&documento=<?php echo"$nit";?>">

    <input class="boton1E" type="submit" name="sesion" value="¿Deseas eliminar tu perfil?">
</form>
</section>
<div style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-11.57,117.94 C155.47,193.92 460.21,-17.25 590.57,172.22 L500.00,150.00 L-3.10,168.27 Z" style="stroke: none; fill: #401e2e;"></path></svg></div>

    </main>

    <footer>
        <p style="text-align:center">Copyright &copy; 2022 All Rights Reserved</p>
        <a style="text-align:center; color:#ffff; " href="mapa.php">Mapa del sitio</a>


    </footer>


</body>
</html>