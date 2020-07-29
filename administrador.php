
<!--codigo para ridereccionar si nadie se ha ingresado datos-->
	<?php
		session_start();
		if (@!$_SESSION['user']) {
			header("Location:index.php");
		}elseif ($_SESSION['rol']==1) {
			header("Location:gerente.php");
		}
	?>

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
			<?php

				
				include("include/menuadmin.php");

			?>

			<footer class="footer">
				<p>&copy; pacha gas 2018-2020 <br/><br/></p>
			</footer>
		</div><!-- /container -->
	</body>
</html>