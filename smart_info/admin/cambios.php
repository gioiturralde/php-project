<?php

include ( 'conexion.php' );

$id = $_GET['id'];
$modelo = $_POST["modelo"];
$marca = $_POST["marca"];
$procesador = $_POST["procesador"];
$ram = $_POST["ram"];
$interna = $_POST["memoria"];
$pantalla = $_POST["pantalla"];
$os = $_POST["os"];
$bateria = $_POST["bateria"];

        $update = $conexion->query( "UPDATE equipos SET nombre_modelo='$modelo', marca='$marca', procesador='$procesador',
        mem_ram='$ram', mem_interna='$interna', pantalla='$pantalla', os='$os', bateria='$bateria' WHERE id_modelo='$id'" );
        if ( $update ) {
            echo "<strong>Se editó equipo de manera exitosa</strong></br>";
        } else {
            echo "Hubo un error al editar equipo </br>";
        }
    

        ?>
        <a href = "editar.php">Regresar al menu anterior</a>