<?php
include ( 'conexion.php' );
if ( isset( $_POST["submit"] ) ) {
    $check = getimagesize( $_FILES["image"]["tmp_name"] );
    if ( $check !== false ) {
        $image = $_FILES['image']["tmp_name"];
        $imgContent = addslashes( file_get_contents( $image ) );

        $dataTime = date( "Y-m-d H:i:s" );
        $modelo = $_POST["modelo"];
        $marca = $_POST["marca"];

        $procesador = $_POST["procesador"];
        $ram = $_POST["ram"];
        $interna = $_POST["memoria"];
        $pantalla = $_POST["pantalla"];
        $os = $_POST["os"];
        $bateria = $_POST["bateria"];

        $insert = $conexion->query( "INSERT INTO Equipos (nombre_modelo,marca, procesador, mem_ram, mem_interna, pantalla, os, bateria, imagen, creado) VALUES ('$modelo','$marca','$procesador','$ram','$interna','$pantalla','$os','$bateria','$imgContent', '$dataTime')" );
        echo "¡Equipo agregado exitosamente!";
    }
}
?>
<a href = "index.php"> Regresar al menu principal</a>
<br/>
<br/>
<a href = "form.php"> Agregar otro equipo</a>