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
					<form action="MensajeCupon.php" method="post" class="form_cupon">	
						<!-- <div id="BarraTitulo"> -->
						<h2>SOLICITAR CUPÓN</h2>
						<hr>
						<!-- </div> -->
						<div class="user_info" style="width:100%" >
							<label for="names">Nombres *</label>
							<div class="icono">
							<span class="glyphicon glyphicon-user" aria-hidden="true"></span> 
							<input type="text" id="names" name="nombre" required>
							</div>

							<label for="surname">Apellidos *</label>
							<div class="icono">
							<span class="glyphicon glyphicon-user" aria-hidden="true"></span> 
							<input type="text" id="surname" name="apellido" required>
							</div>

							<label for="email">Gmail *</label>
							<div class="icono">
							<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> 
							<input type="text" id="email"name="gmail" required>
							</div>

							<label for="gym">Gimnasio *</label>
							<div class="icono">
							<span class="glyphicon glyphicon-tint" aria-hidden="true"></span> 
							<input type="text" id="gym" name="gimnasio" required>
							</div>

							<label for="direc">Dirección del gimnasio *</label>
							<div class="icono">
							<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> 
							<input type="text" id="direc" name="direccion" required>
							</div>

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