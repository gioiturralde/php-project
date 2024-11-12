<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Info</title>
    <link rel="stylesheet" href="css/est.css">
    <style>
        .contenedor .contenido{
    background-color: white;
    padding: 20px;
    border-radius: 4px;
    text-align: center;
    display: flex;
    align-items: center;
    flex-direction: column;
        }
        .form{
            text-align: left;
        }
        textarea{
            width: 400px;
            height: 100px;
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
            <h1> Contacto </h1>
            <br/>
    
    <fieldset class="form">
            
    <form action="contacto.php" method="post" enctype="multipart/form-data">
        Nombre: (Obligatorio) <input required type="text" name="nombre"/>  
        <br/><br/>
         Motivo: (Obligatorio) <input required type="text" name="motivo"/>
        <br/><br/>
         Email: (Obligatorio) <input required type="text" name="email"/>
        <br/><br/>
         Comentario: (Obligatorio) <br/><textarea required type="text" name="comentario"></textarea><br/>
        <input type="submit" name="submit" value="Enviar"/>
    </form>
    </fieldset>
        </main>

       <?php include('footer.php')?> 