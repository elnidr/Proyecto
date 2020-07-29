<?php
    include("connect_db.php");

    if(isset($_REQUEST['guardar'])){
        $idMobilidad=$_GET['idMobilidad'];
        $Descripcion=$_GET['descripcion'];
        $placa=$_GET['placa'];
        $usuario=$_GET['opciones'];
        
        $query="UPDATE tbmobilidad SET iduser='$usuario',Descripcion='$Descripcion',placa='$placa' WHERE idMobilidad=$idMobilidad";
        $ejecutar=mysqli_query($mysqli,$query);
        if(!$ejecutar){
            die("error al actualizar");
        }
        ?>
            <script>
                alert("Actualizacion con Exito");
                header("location:vehiculo.php");
            </script>
        <?php
    }
?>