<?php 
	$id=$_GET['id'];
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
<form action="inc/modificar.php" method="POST" class="col s12" action="">
    <div class="row">
      <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="input-field col s12 m6" >
          <input id="password" type="text" class="validate" name="nombre">
          <label for="password">Nombre</label>
        </div>
        <div class="input-field col s12 m6">
          <input id="password" type="text" class="validate" name="titulo">
          <label for="password">Titulo</label>
        </div>
     </div> 
  <div class="center">
    <button class="btn waves-effect waves-light" type="submit" name="action">Modificar</button>
  </div>
</form>
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

		<!-- JS Ventana Modal -->
        
		
		<!-- JS Formulario -->
		<script type="text/javascript">
			$(document).ready(function() {
    			Materialize.updateTextFields();
  			});
       
			
		</script>

	</body>



</html>