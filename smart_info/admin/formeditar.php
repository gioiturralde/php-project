<?php include ('header.php') ?>
<body>
    <div class="contenedor">
        
        <div class="contenido">
            
            <a href="editar.php">Regresar al menu Editar</a>
            <br/><br/>
    <fieldset class="form">
        <h4>Editar Equipo</h4>
        
        <?php 
        include ('conexion.php');
        $id=$_GET['id'];
        
        $registros = mysqli_query( $conexion, "SELECT * FROM equipos WHERE id_modelo='$id'" );
        $row=mysqli_fetch_assoc($registros);
        ?>
            
    <form action="cambios.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
        Nombre modelo: <input type="text" name="modelo" value="<?php echo $row['nombre_modelo'] ?>" />  
        <br/><br/>
        Marca: 
        <select name="marca">
        <option class="default" value="<?php echo $row['marca'] ?>"> <?php echo $row['marca'] ?></option>
        <option value="samsung"> Samsung</option>
        <option value="xiaomi"> Xiaomi</option>
        <option value="apple"> Apple</option>
        <option value="huawei"> Huawei</option>   
        </select>
        <br/><br/>
        Procesador: <input type="text" name="procesador" value="<?php echo $row['procesador'] ?>" />  
        <br/><br/>
        Ram: <input type="text" name="ram" value="<?php echo $row['mem_ram'] ?>" />  
        <br/><br/>
        Memoria Interna: <input type="text" name="memoria" value="<?php echo $row['mem_interna'] ?>" />  
        <br/><br/>
        Pantalla: <input type="text" name="pantalla" value="<?php echo $row['pantalla'] ?>" />  
        <br/><br/>
        OS: <input type="text" name="os" value="<?php echo $row['os'] ?>" />
        <br/><br/>
        Bateria: <input  type="text" name="bateria" value="<?php echo $row['bateria'] ?>" />  
        <br/><br/>       
        
        <input type="submit" name="submit" value="Agregar"/>
        
    </form>
    </fieldset>
            </div>
        </div>
</body>
</html>