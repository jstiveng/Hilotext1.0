<html>

<head>
    <title>Problema</title>
</head>

<body>

    <?php
    $ar = fopen("datos.txt", "a") or
        die("Problemas en la creacion");
    fputs($ar, $_REQUEST['nombre']);
    fputs($ar, "\n");
    fputs($ar, $_REQUEST['queja']);
    fputs($ar, "\n");
    fputs($ar, "Fecha y Hora:");
    $fecha = date("d/m/Y");
    fputs($ar, $fecha);
    fputs($ar, "  ");
    $hora = date("H:i:s");
    fputs($ar, $hora);
    fputs($ar, "\n");
    fputs($ar, "------------------------------\n");
    fclose($ar);
    echo "<script> alert('Los comentarios se guardaron');
    location.href='datos.txt';</script>"; 

 

    ?>
    <br> <br>
       

</body>

</html>