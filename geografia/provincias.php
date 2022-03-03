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

        $consulta= "select provincias.nombre
                    from provincias, comunidades
                    where provincias.id_comunidad = comunidades.id_comunidad
                    and comunidades.nombre = '{$_GET["comunidad"]}'
                    order by provincias.nombre;";
        $resultado=mysqli_query ($conexion, $consulta);
        $num_filas=mysqli_num_rows ($resultado);

        if ($num_filas>0) {
            
    ?>

    <form action="localidades.php">
        <label for="provincias">Elija la provincia</label>
        <select name="provincias" id="provincias">
            <?php

                while ($fila=mysqli_fetch_assoc ($resultado))
                    echo "<option value='{$fila["nombre"]}'>{$fila ["nombre"]}</option>";

            ?>
        </select>
        <button>Buscar localidades</button>
            
        
    </form>

    <?php
        }
        else
            echo "No hay datos ";

    ?>

</body>
</html>