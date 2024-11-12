<?php

include ('conexion.php');
include ('header.php');
?>
<body> 
    <div class="contenedor">
        <div class="contenido">    
            <a href="index.php">Regresar al menu principal</a>
	       <br/>
            <h1>Consulta de Comentarios</h1>
            
    <?php

$registros = mysqli_query( $conexion, "SELECT * FROM contacto" );

    while( list( $id, $nombre, $email, $motivo) = mysqli_fetch_array( $registros ) ) {

    echo "<p></br> $id - $nombre - $email <br/> <a>Comentario: </a> <p>$motivo</p> </p>";
}

?>
                
        
    </div>
    </body>
</html>