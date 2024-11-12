<?php

include ('conexion.php');
include ('header.php');
?>
<body> 
    <div class="contenedor">
        <div class="contenido">    
            <a href="index.php">Regresar al menu principal</a>
	       <br/>
            <h1>Consulta de Equipos</h1>
    <?php

$registros = mysqli_query( $conexion, "SELECT * FROM equipos" );

    while( list( $id, $marca, $modelo) = mysqli_fetch_array( $registros ) ) {

    echo "<p></br> $id - $marca - $modelo </p>";
}

?>
        </div>
    </div>
    </body>
</html>