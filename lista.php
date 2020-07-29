
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Pacha gas</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
	</head>
	<body background="images/fondotot.jpg" style="background-attachment: fixed">
		<div class="container">
			<header class="header">
				<div class="row">
					<?php
					include("include/cabecera.php");
					?>
				</div>
			</header>
			<div class="row">
				
			<div class="span12">
			<div class="caption">
			<h2>Productos </h2>	
			<div class="well well-small">
			<div class="row-fluid">
				<?php
					require("connect_db.php");/*conexion con la base de datos con require*/ 
					$sql=("SELECT * FROM tbproducto");
					$query=mysqli_query($mysqli,$sql);
					echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td>Descripcion</td>";
						echo "<td>Precio Unitario</td>";
						echo "<td>Imagen</td>";
						echo "<td>comprar</td>";
							/*echo "<td>Borrar</td>";*/
					echo "</tr>"; 
				?>
							
				<?php 
					while($arreglo=mysqli_fetch_array($query)){
						echo "<tr class='success'>";
							
							echo "<td>$arreglo[1]</td>";
							echo "<td>$arreglo[2]</td>";
				
									
							echo "<td><img src='images/gas.jpg' width=100px height=100px class='img-rounded'></td>";
							echo "<td><a href='comprar.php?id=$arreglo[0]&idcomprar'><img src='images/comprar.png'  width=48px height=48px class='img-rounded'></a></td>";	
						echo "</tr>";
					}
					if(isset($_POST['idcomprar'])){
						require("comprar.php");
					}
				?>
               
				
		
		</div><!-- /container -->
	</body>
</html>