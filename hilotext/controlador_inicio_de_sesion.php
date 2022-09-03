<?php
    include('shared/header.php');
    include('php/conexion.php');
?>
<body>
    <?php include('shared/menu.php');?>
    <main>
    <table>

        <?php



///EMPRESA
    if(isset($_REQUEST['accion'])){
        $accion=$_REQUEST['accion'];
        if($accion=='empresa'){?>
        
        <h1 style="float: left; font-size: 30px;">Inicia sesion como empresa</h1>
        <form action="empresa/iniciar_sesion.php" method="post">
            <tr>
                <td><input  style="border: 1px solid #dddfe2;color: #1d2129;    font-family: Helvetica, Arial, sans-serif; font-size: 12px; height: 42px; line-height: 162px; padding: 18px;vertical-align: middle;    border-radius: 20px ;width: 320px;" type="correo" id="nit" name="nit" placeholder="Nit" size="20"></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
            <td></td>
            </tr>       
            
            <tr>
                <td><input  style="border: 1px solid #dddfe2;color: #1d2129;    font-family: Helvetica, Arial, sans-serif; font-size: 12px; height: 42px; line-height: 162px; padding: 18px;vertical-align: middle;    border-radius: 20px ;width: 320px;" type="password" id="contraseña" name="contraseña" placeholder="Contraseña" size="20"></td>
            </tr>
            <tr>
                <th colspan="2"><input class="boton1" type="submit" name="loginSubmit" value="Iniciar Sesion"></th>
            </tr>
        </form>
        <?php
        }
    }


///OPERARIO
        if($accion=='operario'){?>
        <tr>
            <td><h1>Inicia sesion como operario</h1></td>
        </tr>
        <form action="operario/iniciar_sesion.php" method="post">
            <tr>
            <td><input  style="border: 1px solid #dddfe2;color: #1d2129;    font-family: Helvetica, Arial, sans-serif; font-size: 12px; height: 42px; line-height: 162px; padding: 18px;vertical-align: middle;    border-radius: 20px ;width: 320px;" type="text" id="documento" name="documento" placeholder="Documento" size="20"></td>
        </tr>
        <tr>
            <td><input  style="border: 1px solid #dddfe2;color: #1d2129;    font-family: Helvetica, Arial, sans-serif; font-size: 12px; height: 42px; line-height: 162px; padding: 18px;vertical-align: middle;    border-radius: 20px ;width: 320px;" type="password" id="contraseña" name="contraseña" placeholder="Contraseña" size="20"></td>
        </tr>
        <tr>
        <th colspan="2"> <a href="#"><input class="boton1"  type="submit" name="loginSubmit" value="Iniciar Sesion"></a></th>
        </tr>
        </form>
        <?php
    }



    ///TECNICO
    if($accion=='tecnico'){?>
        <tr>
            <td><h1>Inicia sesion como tecnico</h1></td>
        </tr>
        <form action="tecnico/iniciar_sesion.php" method="post">

            <tr>
                <td><input  style="border: 1px solid #dddfe2;color: #1d2129;    font-family: Helvetica, Arial, sans-serif; font-size: 12px; height: 42px; line-height: 162px; padding: 18px;vertical-align: middle;    border-radius: 20px ;width: 320px;" type="text" id="documento" name="documento" placeholder="Documento" size="20"></td>
            </tr>
            <tr>
                <td><input  style="border: 1px solid #dddfe2;color: #1d2129;    font-family: Helvetica, Arial, sans-serif; font-size: 12px; height: 42px; line-height: 162px; padding: 18px;vertical-align: middle;    border-radius: 20px ;width: 320px;" type="password" id="contraseña" name="contraseñaTecnico" placeholder="Contraseña" size="20"></td>
            </tr>
            <tr>
                <th colspan="2"> <a href="#"><input class="boton1"  type="submit" name="loginSubmit" value="Iniciar Sesion"></a></th>
            </tr>
        </form>
        <?php
    }
    ?>
        </table>
        </main>

    </section>
        <div style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-11.57,117.94 C155.47,193.92 460.21,-17.25 590.57,172.22 L500.00,150.00 L-3.10,168.27 Z" style="stroke: none; fill: #401e2e;"></path></svg></div>


    <footer>
        <p style="text-align:center">Copyright &copy; 2022 All Rights Reserved</p>
        <a style="text-align:center; color:#ffff; " href="mapa.php">Mapa del sitio</a>


    </footer>

</body>