<?php
  require('inc/conexion.php');

  $consulta="SELECT * FROM datos";
  $resultado=$mysqli->query($consulta);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<title>PHP con BD</title>
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
		<link rel="stylesheet" href="css/estilos.css">

	</head>

	<body>

	<nav class="black">
		<div class="nav-wrapper">
			<a href="#!" class="brand-logo">PHPbds</a>
			<!-- activate side-bav in mobile view -->
			<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
			<ul class="right hide-on-med-and-down">
				<li><a href="administrar.php">Administrador</a></li>
			</ul>
			<!-- navbar for mobile -->
			<ul class="side-nav black" id="mobile-demo">
				<li><a class"white" href="administrar.php">Administrador</a></li>
			</ul>
		</div>
	</nav>
	<div class="container">
	<div class="row">
		<?php while ($fila=$resultado->fetch_assoc()) { ?>
        	
				<div class="col s6">
					<div class="card teal darken-1">
						<div class="card-content white-text">
							<span class="card-title"><?php echo $fila['nombre'];?></span>
							<hr>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>

							<p><?php echo $fila['titulo']; ?></p>
						</div>
					</div>
				</div>
			
        <?php } ?>
	</div>
	</div>
	<footer>
		<p class="white center">&copy; Josvelka Mendoza|2016</p>
	</footer>
		
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
		
		<script>
    		$(document).ready(function() {
    			$(".button-collapse").sideNav();
  			});
        </script>
	</body>
</html>