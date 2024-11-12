<!DOCTYPE html>
    <?php include('conexion_catalogo.php')?>
    <html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Info</title>
    <link rel="stylesheet" href="css/estilotemplate.css">
    <style>
        h1{
            text-align: center;
            text-transform: uppercase;
            margin-bottom: 5px;
            letter-spacing: 2px;
            
        }
    </style>
</head>
<body>
    <div class="contenedor">
        <header class="header">

            <a class="logo" href="index.php">
                <img src="imagenes/si.png" alt="logo de la pagina"
                class="logo-img">
            </a>

            <div class="navegacion">
                <ul>
                    <li><a class="active" href="index.php">Inicio</a></li>
                    <li><a href="about.php">Sobre Nosotros</a></li>
                    <li><a href="formcontacto.php">Contacto</a></li>
                
                </ul>
            </div>
        </header>
        <main class="contenido">
                
            <?php
            $marca = $_GET['marca'];
            echo "<h1> $marca </h1>";?>
            <div class="panel">
                   <?php 
                    $marca = $_GET['marca'];
                    $query="SELECT * FROM equipos WHERE marca=\"$marca\"";
                    $resultado=$conexion->query($query);
                    while($row = $resultado->fetch_assoc()){                                          
                    ?>
                    <div class="marcas">
                    <div class="polaroid">
                    <a class="marca" href="equipo.php?id=<?php echo $row['id_modelo']?>">
                    <img src="data:image/png;base64,<?php echo base64_encode(
                    $row['imagen']);?>"width="171" height="180" alt="sss">
                    <?php echo $row['nombre_modelo'] ?>
                    </a>
                    </div>  
                    </div> 
                    <?php
                    }
                    ?>
                    
                    
            </div>
        </main>
        <?php include('footer.php')?>
</body>
</html>