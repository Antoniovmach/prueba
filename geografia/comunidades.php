<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilos.css" rel="stylesheet" type="text/css">
    <title>Comunidad Autónoma</title>
</head>
<body>

    <?php 
        include 'conexion.php'; 

        $conexion=mysqli_connect ($servidor, $usuario, $clave, $base_datos) or die ("No hay conexion");

        $consulta= "select nombre from comunidades order by nombre;";
        $resultado=mysqli_query ($conexion, $consulta);
        $num_filas=mysqli_num_rows ($resultado);

        if ($num_filas>0) {
            
    ?>

    <form action="provincias.php">
        <label for="comunidad">Elija la comunidad </label>
        <select name="comunidad" id="comunidad">
            <?php

                while ($fila=mysqli_fetch_assoc ($resultado))
                    echo "<option value='{$fila["nombre"]}'>{$fila ["nombre"]}</option>";

            ?>
        </select>
        <button>buscar provincias</button>
            
        
    </form>

    <?php
        }
        else
            echo "No hay datos ";

    ?>

</body>
</html>