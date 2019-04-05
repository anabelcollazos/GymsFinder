<?php include_once 'include/Head.php';?>
<body>
	<?php include_once 'include/Encabezado.php'?>

<nav class="navbar navbar-default navbar-static-top" id="con3">
    <br>
    <br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3 col-md-12">
				<!-- llenar espacio -->
				<?php include_once 'include/Izquierda.php'?>
			</div>
			<div class="col-lg-6 col-md-12">

				<section class="formulario">
					<form action="enviar.php" method="post" class="form-cupon">
						<h3>Solicitar Cupón</h3>
						<div class="user_info">
							<label for="names">Nombres *</label>
							<span class="glyphicon glyphicon-user" aria-hidden="true"></span> 
							<input type="text" id="names" name="nombre" required>

							<label for="surname">Apellidos *</label>
							<span class="glyphicon glyphicon-user" aria-hidden="true"></span> 
							<input type="text" id="surname" name="apellido" required>

							<label for="email">Gmail *</label>
							<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> 
							<input type="text" id="email"name="gmail" required>

							<label for="gym">Gimnasio *</label>
							<span class="glyphicon glyphicon-tint" aria-hidden="true"></span> 
							<input type="text" id="gym" name="gimnasio" required>

							<label for="direc">Dirección del gimnasio *</label>
							<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> 
							<input type="text" id="direc" name="direccion" required>

							<input type="submit" value="Solicitar cupón" id="btnEnviar">




						</div>
					</form>
				</section>







			</div>
			<div class="col-lg-3 col-md-12" id="Con1">
				<!-- llenar espacio -->
				<?php include_once 'include/Derecha.php'?>
			</div>

		</div>
	</div>
</nav>
<?php include_once 'include/PiePagina.php'?>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>