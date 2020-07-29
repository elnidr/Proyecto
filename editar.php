<?php
    include("connect_db.php");
    if(isset($_REQUEST['idMobilidad'])){
        $id=$_GET['idMobilidad'];
        $consulta="SELECT*FROM tbmobilidad WHERE idMobilidad=$id";
        $resultado=mysqli_query($mysqli,$consulta);

        ?>
            <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>EDITAR VEHICULO</title>
                    <h1>EDITAR VEHICULO</h1>
                    <hr/>
                </head>
                <body>
                    <?php
                        foreach ($resultado as $campo) {
                            ?>
                                <form action="actualizar.php" method="GET">
                                    <input type="hidden" name="idMobilidad" value="<?php echo $campo['idMobilidad'];?>">
                                        <div> 
                                                Descripcion<input type="text" name="descripcion" value="<?php echo$campo['Descripcion']; ?>">
                                        </div>
                                        <div>
                                                Placa<input type="text" name="placa" value="<?php echo$campo['placa']; ?>">
                                        </div>
                                            <?php
                                              $query="SELECT*FROM usuarios";
                                              $result=mysqli_query($mysqli,$query);
                                                ?>
                                                    <select name="opciones" >
                                                        <?php
                                                            foreach ($result as $opciones) {
                                                                ?>
                                                                      <option value="<?php echo $opciones['iduser']?>"><?php echo $opciones['user']?></option> 
                                                                <?php
                                                           }
                                                        ?>
                                                    </select>
                                                <?php
                                              
                                            ?>
                                        <br>
                                        <input type="submit" value="GUARDAR" name="guardar">
                                        <a href="vehiculo.php"><input type="button" value="Atras"></a>
                                </form>

                            <?php
                        
                        }
                    ?>
                   
                </body>
                </html>
        <?php
    }

?>

