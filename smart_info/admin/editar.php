<?php

include ('conexion.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Smart Info</title>
    <link rel="stylesheet" href="style.css">
 
</head>
<body> 
    <div class="contenedor">
        <div class="contenido">    
            <a href="index.php">Regresar al menu principal</a>
	       <br/>
            <h1>Consulta de Equipos</h1>
    <?php

$registros = mysqli_query( $conexion, "SELECT * FROM equipos" );

    while( list( $id, $marca, $modelo) = mysqli_fetch_array( $registros ) ) {

    echo "<p></br> $id - $marca - $modelo &nbsp;&nbsp;";
    echo "<a href=formeditar.php?id=$id>Editar Equipo</a>&nbsp;&nbsp; <a href=formeliminar.php?id=$id>Eliminar Equipo</a></p>";
}

?>
        </div>
    </div>
    </body>
</html>