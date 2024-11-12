<?php include ('header.php') ?>
<body>
    <div class="contenedor">
        
        <div class="contenido">
            
            <a href="index.php">Regresar al menu principal</a>
            <br/><br/>
    <fieldset class="form">
        <h4>Agregar Equipo</h4>
            
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Nombre modelo: <input type="text" name="modelo"/>  
        <br/><br/>
        Marca: 
        <select name="marca">
        <option value="samsung"> Samsung</option>
        <option value="xiaomi"> Xiaomi</option>
        <option value="apple"> Apple</option>
        <option value="huawei"> Huawei</option>   
        </select>
        <br/><br/>
        Procesador: <input type="text" name="procesador" />  
        <br/><br/>
        Ram: <input type="text" name="ram" />  
        <br/><br/>
        Memoria Interna: <input type="text" name="memoria" />  
        <br/><br/>
        Pantalla: <input type="text" name="pantalla" />  
        <br/><br/>
        OS: <input type="text" name="os" />
        <br/><br/>
        Bateria: <input type="text" name="bateria" />  
        <br/><br/>
        Imagen: 
        <input accept="image/jpeg,image/png" type="file" name="image"/>
        <br/><br/>
        <input type="submit" name="submit" value="Agregar"/>
    </form>
    </fieldset>
            </div>
        </div>
</body>
</html>