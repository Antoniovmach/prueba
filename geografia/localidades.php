<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilos.css" rel="stylesheet" type="text/css">
    <title>Provincia</title>
</head>
<body>


<?php 
        include 'conexion.php';

        $conexion=mysqli_connect ($servidor, $usuario, $clave, $base_datos) or die ("No hay conexion");

        $consulta= "select localidades.nombre
                    from provincias, localidades
                    where provincias.n_provincia = localidades.n_provincia
                    and provincias.nombre = '{$_GET["provincias"]}'
                    order by localidades.nombre;";
        $resultado=mysqli_query ($conexion, $consulta);
        $num_filas=mysqli_num_rows ($resultado);

        if ($num_filas>0) {
            
    ?>

    <form action="comunidades.php">
        <label for="provincias">Elija la localidad</label>
        <select name="localidades" id="localidades">
            <?php

                while ($fila=mysqli_fetch_assoc ($resultado))
                    echo "<option value='{$fila["nombre"]}'>{$fila ["nombre"]}</option>";

            ?>
        </select>
        <button>volver a inicio</button>
            
        
    </form>

    <?php
        }
        else
            echo "No hay datos ";

    ?>

</body>
</html>