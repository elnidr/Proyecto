<?php
    include("connect_db.php");
    if(isset($_REQUEST['guardar'])){
        $descripcion=$_GET['descripcion'];
        $placa=$_GET['placa'];
        $usuario=$_GET['usuario'];
        $query="INSERT INTO tbmobilidad (iduser,Descripcion,placa) VALUES ('$usuario','$descripcion','$placa')";
        $insertar=mysqli_query($mysqli,$query);
        if(!$insertar){
            die("ERROR AL REGISTRAR VEHICULO");
        }
        ?>
            <script>
                alert("Registro exitoso");
                window.location.href='nuevoVehiculo.php';
            </script>
        <?php
    }
?>