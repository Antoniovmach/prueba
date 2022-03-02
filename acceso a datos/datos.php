<?php
    if(isset($_POST['nombre']))  //EL GET USA ASOCIATIVA
        print "El nombre es ".$_POST['nombre']."<br>";
    isset($_POST['edad']) ? print $_POST['edad']."<br>" : "";
    
    $conexion = mysqli_connect ("localhost", "root","","prueba_unidad5");

    ?>

   <h3> <a href="./metodo post.php"> Enlace al metodo post </a> </h3>

  