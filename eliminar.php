<?php
    include("connect_db.php");
    if(isset($_REQUEST['idMobilidad'])){
        $idMobilidad=$_GET['idMobilidad'];
        
        $query="DELETE FROM tbmobilidad WHERE idMobilidad=$idMobilidad";
        $result=mysqli_query($mysqli,$query);
        ?>
            <script>
                alert("Registro eliminado");
                window.location.href="vehiculo.php";
            </script>
        <?php

    }
?>