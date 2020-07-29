<?php
    include("connect_db.php");
    $consulta="SELECT iduser,user FROM usuarios";
    $resultado=mysqli_query($mysqli,$consulta);
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUEVO VEHICULO</title>
    <h1>NUEVO VEHICULO</h1>
    <hr/>
</head>
<body>
    <form action="guardar.php" method="GET">
       <div> 
            Descripcion<input type="text" name="descripcion">
       </div>
       <div>
            Placa<input type="text" name="placa">
       </div>
       Usuario<select name="usuario" >
        <?php
            foreach ($resultado as $opciones) {
                ?> 
                <option value="<?php echo $opciones['iduser']?>"><?php echo $opciones['user']?></option>       
                <?php
            }
            ?>
       </select>    
       <br>
       <input type="submit" value="GUARDAR" name="guardar">
       <a href="vehiculo.php"><input type="button" value="Atras"></a>
    </form>
</body>
</html>
