
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
				<li><a href="index.php">Inicio</a></li>
			</ul>
			<!-- navbar for mobile -->
			<ul class="side-nav black" id="mobile-demo">
				<li><a class"white" href="administrar.php">Administrador</a></li>
			</ul>
		</div>
	</nav>

<!-- Ventana Modal -->
  <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Nuevo</a>

  <!-- Estructura de ventana -->
  <!--ingresar-->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Ingresar Datos</h4>
    </div>
    <form action="inc/insertar.php" method="POST" class="col s12" action="">
    <div class="row">
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
		<button class="btn waves-effect waves-light" type="submit" name="action">Enviar</button>
	</div>
    </form>
    <div class="modal-footer">

      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
    </div>
  </div>

  





	<div class="container">
		<div class="col s2">
			
		</div>
		<div class="col s10 m12">
			<table class="responsive-table">
        		<thead>
          		<tr>
              		<th data-field="id">Id</th>
              		<th data-field="nombre">Nombre</th>
              		<th data-field="titulo">Titulo</th>
              		<th data-field="ope">Operación</th>
          		</tr>
        		</thead>
            
            <tbody>
            <?php 
              while ($fila=$resultado->fetch_assoc()) {?>
                <tr>
                  <td><?php echo $fila['id'];?></td>
                  <td><?php echo $fila['nombre'];?></td>
                  <td><?php echo $fila['titulo'];?></td>
                  <td class=""><a href="inc/eliminar.php?id=<?php echo $fila['id'];?>"><i class="mdi-action-highlight-remove small center"></i></a> 

                  <a href="mod.php?id=<?php echo $fila['id'];?>"><i class="mdi-content-create small center"></i></a> 
                    
                  </td>
                </tr>
              
            <?php } ?>
            </tbody>

        		
      		</table>
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

		<!-- JS Ventana Modal -->
        <script type="text/javascript">
        	$(document).ready(function(){
   				$('.modal-trigger').leanModal();
  			});
        	$('#modal1').openModal();
        	$('#modal1').closeModal();
          
        </script>
		
		<!-- JS Formulario -->
		<script type="text/javascript">
			$(document).ready(function() {
    			Materialize.updateTextFields();
  			});
       
			
		</script>

	</body>



</html>