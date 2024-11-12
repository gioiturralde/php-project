<!DOCTYPE html>
<?php include('conexion_catalogo.php')?>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Info</title>
    <link rel="stylesheet" href="css/estilos-data.css">
</head>
<body>
    <div class="contenedor">
        <header class="header">

            <a class="logo" href="index.php">
                <img src="imagenes/si.png" alt="logo de la pagina"
                class="logo-img">
            </a>
            <?php 
                    $id = $_GET['id'];
                    $query="SELECT * FROM equipos WHERE id_modelo='$id'";
                    $consulta=$conexion->query($query);
                    $row=$consulta->fetch_assoc();
            ?>
            <div class="navegacion">
                <ul>
                    <li><a class="active" href="index.php">Inicio</a></li>
                    <li><a href="about.php">Sobre Nosotros</a></li>
                    <li><a href="formcontacto.php">Contacto</a></li>
                
                </ul>
            </div>
        </header>
        <main class="contenido">
             
            <div class="data-container">    
                
                <a class="modelo">
                    <img src="data:image/png;base64,<?php echo base64_encode($row['imagen']);?>" width="171" height="200" alt="samsung s22">
                <table>
                    
                    <caption><b>Caracteristicas principales</b></caption>
                    <tr>
                        <td>📱Modelo:<a>
                           <?php echo $row['nombre_modelo'];?></a></td>
                    <td>📱Procesador: <?php echo $row['procesador'];?></td>    
                    </tr>
                    <tr>
                    <td>◼️RAM: <?php echo $row['mem_ram'];?></td>
                    <td>💾Almacenamiento: <?php echo $row['mem_interna'];?></td>
                    </tr>
                    <tr>
                    <td>◼️Pantalla: <?php echo $row['pantalla'];?></td>
                    <td>◼️OS: <?php echo $row['os'];?></td>
                    </tr>
                    <tr>
                    <td>🔋Bateria:<?php echo $row['bateria'];?></td>
                    </tr>
                    
                </table> 
                        
                    </a>

            </div>
            
        </main>
    
        <?php include('footer.php')?>
