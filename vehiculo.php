<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VEHICULOS</title>
    <h1>VEHICULOS</h1>
    <hr/>
</head>
<body>
    <form action="nuevoVehiculo.php" method="GET">
             <input type="submit" value="NUEVO" name="nuevo">
             <input type="button" value="ATRAS"name="atras">
             <div>
             <table>
                <thead>
                <tr>
                     <th>Descripcion</th>
                     <th>Placa</th>
                     <th>Empleado</th>
                     <th>ACCIONES</th>
                 </tr>
             
             </div>
             <?php
                include("connect_db.php");
                $query="SELECT*FROM tbmobilidad";
                $result=mysqli_query($mysqli,$query);
                //foreach ($result as $parametros) {
                    while($row=mysqli_fetch_array($result)){

                   ?>
                    <tr>
                        <th><?php  echo $row['Descripcion'];?></th>
                        <th><?php  echo $row['placa'];?></th>
                        <th><?php  echo $row['iduser'];?></th>
                        <th>
                            <a href="eliminar.php?idMobilidad=<?php echo $row['idMobilidad']?>">Eliminar</a>
                            <a href="editar.php?idMobilidad=<?php echo $row['idMobilidad']?>">Editar</a>

                        </th>
                    </tr>
                   <?php
                }
             ?>
            </thead>   
        </table>         
    </form>
</body>
</html>