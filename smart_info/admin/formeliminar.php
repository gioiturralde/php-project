<?php

include ('conexion.php');
        
        $id=$_GET['id'];
        
        $delete = $conexion->query( "DELETE FROM equipos WHERE id='$id'" );
        if($delete){
        echo "<strong>Se eliminó equipo de manera exitosa</strong></br>";
        }
        else{
            echo "Hubo un error al eliminar equipo </br>";
        }

?>

<a href="editar.php">Regresar al menu anterior</a>