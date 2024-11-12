<?php
include ('header.php');
include ( 'conexion_catalogo.php' );

        $dataTime = date( "Y-m-d H:i:s" );
        $nombre = $_POST["nombre"];
        $motivo = $_POST["motivo"];
        $email = $_POST["email"];
        $comentario = $_POST["comentario"];

        $insert = $conexion->query( "INSERT INTO contacto (nombre,  email, motivo, comentario ,creado) VALUES ('$nombre', '$email', '$motivo', '$comentario', '$dataTime')" );
    

?>
<!DOCTYPE html>
        <main class="contenido">
            <h1> ¡Gracias por escribirnos! </h1>
            <br/>

        </main>

       <?php include('footer.php')?> 
